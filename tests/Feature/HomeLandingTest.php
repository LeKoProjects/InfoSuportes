<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeLandingTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_renders_empty_blade_view(): void
    {
        $category = Category::factory()->create();
        Book::factory()->for($category)->create([
            'is_featured' => true,
            'is_published' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertViewIs('home');
    }
}
