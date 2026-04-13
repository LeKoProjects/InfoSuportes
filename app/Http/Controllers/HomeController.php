<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $featuredBooks = Book::query()
            ->with('category:id,name,slug')
            ->where('is_published', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->limit(8)
            ->get();

        $books = Book::query()
            ->with('category:id,name,slug')
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->latest('id')
            ->get();

        $categories = Category::query()
            ->withCount(['books' => function ($query): void {
                $query->where('is_published', true);
            }])
            ->whereHas('books', function ($query): void {
                $query->where('is_published', true);
            })
            ->orderBy('sort_order')
            ->get(['id', 'name', 'slug', 'sort_order']);

        return view('home', [
            'featuredBooks' => $featuredBooks,
            'books' => $books,
            'categories' => $categories,
        ]);
    }

    public function purchase(Book $book): RedirectResponse
    {
        abort_unless($book->is_published, 404);

        $book->increment('clicks');

        return redirect()->away($book->hotmart_url);
    }
}
