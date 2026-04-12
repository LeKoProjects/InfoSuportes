<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class BookController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Books/Index', [
            'books' => Book::query()
                ->with('category:id,name')
                ->orderBy('sort_order')
                ->latest('id')
                ->get(),
            'categories' => Category::query()
                ->orderBy('sort_order')
                ->get(['id', 'name']),
        ]);
    }

    public function store(StoreBookRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $coverImagePath = $request->file('cover_image')->store('books', 'public');

        Book::query()->create([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'author' => $validated['author'] ?? null,
            'price' => $validated['price'] ?? null,
            'description' => $validated['description'] ?? null,
            'hotmart_url' => $validated['hotmart_url'],
            'cover_image_path' => $coverImagePath,
            'is_featured' => (bool) ($validated['is_featured'] ?? false),
            'is_published' => (bool) ($validated['is_published'] ?? true),
            'sort_order' => $validated['sort_order'] ?? 0,
            'clicks' => $validated['clicks'] ?? 0,
        ]);

        return to_route('admin.books.index');
    }

    public function update(UpdateBookRequest $request, Book $book): RedirectResponse
    {
        $validated = $request->validated();
        $coverImagePath = $book->cover_image_path;

        if ($request->hasFile('cover_image')) {
            Storage::disk('public')->delete($book->cover_image_path);
            $coverImagePath = $request->file('cover_image')->store('books', 'public');
        }

        $book->update([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'author' => $validated['author'] ?? null,
            'price' => $validated['price'] ?? null,
            'description' => $validated['description'] ?? null,
            'hotmart_url' => $validated['hotmart_url'],
            'cover_image_path' => $coverImagePath,
            'is_featured' => (bool) ($validated['is_featured'] ?? false),
            'is_published' => (bool) ($validated['is_published'] ?? true),
            'sort_order' => $validated['sort_order'] ?? 0,
            'clicks' => $validated['clicks'] ?? 0,
        ]);

        return to_route('admin.books.index');
    }

    public function destroy(Book $book): RedirectResponse
    {
        Storage::disk('public')->delete($book->cover_image_path);
        $book->delete();

        return to_route('admin.books.index');
    }
}
