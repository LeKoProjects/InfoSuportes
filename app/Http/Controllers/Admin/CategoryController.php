<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Categories/Index', [
            'categories' => Category::query()
                ->withCount('books')
                ->orderBy('sort_order')
                ->latest('id')
                ->get(),
        ]);
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        Category::query()->create([
            'name' => $validated['name'],
            'slug' => $this->buildUniqueSlug($validated['name']),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return to_route('admin.categories.index');
    }

    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $validated = $request->validated();

        $category->update([
            'name' => $validated['name'],
            'slug' => $this->buildUniqueSlug($validated['name'], $category->id),
            'sort_order' => $validated['sort_order'] ?? 0,
        ]);

        return to_route('admin.categories.index');
    }

    public function destroy(Category $category): RedirectResponse
    {
        if ($category->books()->exists()) {
            return back()->withErrors([
                'category' => 'Categoria possui livros vinculados.',
            ]);
        }

        $category->delete();

        return to_route('admin.categories.index');
    }

    private function buildUniqueSlug(string $name, ?int $exceptId = null): string
    {
        $slugBase = Str::slug($name);
        $slug = $slugBase;
        $suffix = 1;

        while (Category::query()
            ->when($exceptId, fn ($query) => $query->where('id', '!=', $exceptId))
            ->where('slug', $slug)
            ->exists()) {
            $slug = $slugBase.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
}
