<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_the_login_page(): void
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_visit_the_dashboard(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/dashboard');
        $response->assertStatus(200);
    }

    public function test_admin_dashboard_uses_explicit_panel_styles(): void
    {
        $dashboard = file_get_contents(resource_path('js/pages/Admin/Dashboard.vue'));

        $this->assertStringNotContainsString('bg-card', $dashboard);
        $this->assertStringNotContainsString('text-muted-foreground', $dashboard);
        $this->assertStringContainsString('dark:bg-neutral-900', $dashboard);
    }

    public function test_laravel_starter_dashboard_page_was_removed(): void
    {
        $this->assertFileDoesNotExist(resource_path('js/pages/Dashboard.vue'));
    }

    public function test_sidebar_theme_tokens_are_defined(): void
    {
        $css = file_get_contents(resource_path('css/app.css'));

        $this->assertStringContainsString('--color-sidebar:', $css);
        $this->assertStringContainsString('--color-sidebar-foreground:', $css);
        $this->assertStringContainsString('--color-background:', $css);
        $this->assertStringContainsString('--color-card:', $css);
        $this->assertStringContainsString('--color-muted-foreground:', $css);
        $this->assertStringContainsString('--color-input:', $css);
        $this->assertStringContainsString('--color-primary:', $css);
        $this->assertStringContainsString('--color-destructive:', $css);
    }

    public function test_admin_crud_pages_use_readable_panel_styles(): void
    {
        $categoryPage = file_get_contents(resource_path('js/pages/Admin/Categories/Index.vue'));
        $bookPage = file_get_contents(resource_path('js/pages/Admin/Books/Index.vue'));
        $crudPages = $categoryPage.$bookPage;

        $this->assertStringNotContainsString('bg-card rounded-2xl', $crudPages);
        $this->assertStringContainsString('dark:bg-neutral-900', $categoryPage);
        $this->assertStringContainsString('dark:bg-neutral-900', $bookPage);
        $this->assertStringContainsString('Clicks', $bookPage);
    }

    public function test_sidebar_uses_valid_tailwind_v4_width_syntax(): void
    {
        $sidebar = file_get_contents(resource_path('js/components/ui/sidebar/Sidebar.vue'));
        $inset = file_get_contents(resource_path('js/components/ui/sidebar/SidebarInset.vue'));

        $this->assertStringContainsString('w-[var(--sidebar-width)]', $sidebar);
        $this->assertStringContainsString('w-[var(--sidebar-width-icon)]', $sidebar);
        $this->assertStringNotContainsString('w-[--sidebar-width]', $sidebar);
        $this->assertStringNotContainsString('theme(spacing.4)', $sidebar.$inset);
    }

    public function test_sidebar_navigation_uses_nav_item_href(): void
    {
        $navMain = file_get_contents(resource_path('js/components/NavMain.vue'));

        $this->assertStringContainsString('href: string;', $navMain);
        $this->assertStringContainsString(':href="item.href"', $navMain);
        $this->assertStringContainsString('item.href === page.url', $navMain);
        $this->assertStringNotContainsString('item.url', $navMain);
    }

    public function test_app_logo_uses_project_brand(): void
    {
        $logo = file_get_contents(resource_path('js/components/AppLogo.vue'));

        $this->assertStringContainsString('E-TI Solucoes', $logo);
        $this->assertStringNotContainsString('Laravel Starter Kit', $logo);
    }

    public function test_appearance_defaults_to_dark_mode(): void
    {
        $appearance = file_get_contents(resource_path('js/composables/useAppearance.ts'));

        $this->assertStringContainsString("const defaultAppearance: Appearance = 'dark';", $appearance);
        $this->assertStringContainsString('updateTheme(savedAppearance || defaultAppearance);', $appearance);
    }
}
