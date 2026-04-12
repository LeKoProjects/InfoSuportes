<?php

namespace Tests\Feature\Admin;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_category_management(): void
    {
        $response = $this->get('/admin/categories');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_create_update_and_delete_category(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post(route('admin.categories.store'), [
                'name' => 'Marketing',
                'sort_order' => 2,
            ])
            ->assertRedirect(route('admin.categories.index'));

        $category = Category::query()->firstOrFail();
        $this->assertSame('Marketing', $category->name);
        $this->assertSame('marketing', $category->slug);

        $this->actingAs($user)
            ->put(route('admin.categories.update', $category), [
                'name' => 'Copywriting',
                'sort_order' => 1,
            ])
            ->assertRedirect(route('admin.categories.index'));

        $category->refresh();
        $this->assertSame('Copywriting', $category->name);
        $this->assertSame(1, $category->sort_order);

        $this->actingAs($user)
            ->delete(route('admin.categories.destroy', $category))
            ->assertRedirect(route('admin.categories.index'));

        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
