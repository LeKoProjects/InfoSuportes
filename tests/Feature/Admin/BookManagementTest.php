<?php

namespace Tests\Feature\Admin;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BookManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_create_update_and_delete_book_with_image(): void
    {
        Storage::fake('public');
        $user = User::factory()->create();
        $category = Category::factory()->create();
        $newCategory = Category::factory()->create();

        $this->actingAs($user)
            ->post(route('admin.books.store'), [
                'category_id' => $category->id,
                'title' => 'Livro de Vendas',
                'author' => 'Expert',
                'price' => 'R$ 79,90',
                'description' => 'Guia completo.',
                'hotmart_url' => 'https://hotmart.com/pt-br/marketplace/produtos/livro-vendas',
                'cover_image' => UploadedFile::fake()->image('cover.jpg'),
                'is_featured' => true,
                'is_published' => true,
                'sort_order' => 1,
                'clicks' => 10,
            ])
            ->assertRedirect(route('admin.books.index'));

        $book = Book::query()->firstOrFail();
        $this->assertTrue($book->is_featured);
        $this->assertSame(10, $book->clicks);
        Storage::disk('public')->assertExists($book->cover_image_path);

        $oldPath = $book->cover_image_path;

        $this->actingAs($user)
            ->put(route('admin.books.update', $book), [
                'category_id' => $newCategory->id,
                'title' => 'Livro Atualizado',
                'author' => 'Expert',
                'price' => 'R$ 99,90',
                'description' => 'Novo conteúdo.',
                'hotmart_url' => 'https://hotmart.com/pt-br/marketplace/produtos/livro-vendas-up',
                'cover_image' => UploadedFile::fake()->image('new-cover.png'),
                'is_featured' => false,
                'is_published' => true,
                'sort_order' => 9,
                'clicks' => 99,
            ])
            ->assertRedirect(route('admin.books.index'));

        $book->refresh();
        $this->assertSame('Livro Atualizado', $book->title);
        $this->assertSame($newCategory->id, $book->category_id);
        $this->assertFalse($book->is_featured);
        $this->assertSame(99, $book->clicks);
        Storage::disk('public')->assertMissing($oldPath);
        Storage::disk('public')->assertExists($book->cover_image_path);

        $pathBeforeDelete = $book->cover_image_path;

        $this->actingAs($user)
            ->delete(route('admin.books.destroy', $book))
            ->assertRedirect(route('admin.books.index'));

        Storage::disk('public')->assertMissing($pathBeforeDelete);
        $this->assertDatabaseMissing('books', ['id' => $book->id]);
    }
}
