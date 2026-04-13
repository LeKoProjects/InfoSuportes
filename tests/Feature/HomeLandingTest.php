<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeLandingTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_renders_published_technology_books(): void
    {
        $category = Category::factory()->create();
        $featuredBook = Book::factory()->for($category)->create([
            'title' => 'Arquitetura Laravel',
            'is_featured' => true,
            'is_published' => true,
        ]);
        $catalogBook = Book::factory()->for($category)->create([
            'title' => 'DevOps Pratico',
            'is_featured' => false,
            'is_published' => true,
        ]);
        $unpublishedBook = Book::factory()->for($category)->create([
            'title' => 'Livro Oculto',
            'is_featured' => true,
            'is_published' => false,
        ]);

        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertViewIs('home');
        $response->assertViewHas('featuredBooks', fn ($books) => $books->contains($featuredBook));
        $response->assertViewHas('books', fn ($books) => $books->contains($catalogBook) && ! $books->contains($unpublishedBook));
        $response->assertSee('Arquitetura Laravel');
        $response->assertSee('DevOps Pratico');
        $response->assertDontSee('Livro Oculto');
    }

    public function test_purchase_route_tracks_click_and_redirects_to_hotmart(): void
    {
        $book = Book::factory()->create([
            'clicks' => 7,
            'hotmart_url' => 'https://hotmart.com/pt-br/marketplace/produtos/arquitetura-laravel',
            'is_published' => true,
        ]);

        $response = $this->get("/livros/{$book->id}/comprar");

        $response->assertRedirect('https://hotmart.com/pt-br/marketplace/produtos/arquitetura-laravel');
        $this->assertSame(8, $book->fresh()->clicks);
    }

    public function test_home_page_renders_theme_toggle_control(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('data-theme-toggle', false);
        $response->assertSee('data-theme-label', false);
        $response->assertSee('theme-mode', false);
    }

    public function test_tailwind_dark_variant_uses_manual_dark_class(): void
    {
        $this->assertStringContainsString(
            '@custom-variant dark (&:where(.dark, .dark *));',
            file_get_contents(resource_path('css/app.css'))
        );
    }

    public function test_purchase_route_returns_not_found_for_unpublished_book(): void
    {
        $book = Book::factory()->create([
            'is_published' => false,
        ]);

        $this->get("/livros/{$book->id}/comprar")
            ->assertNotFound();
    }
}
