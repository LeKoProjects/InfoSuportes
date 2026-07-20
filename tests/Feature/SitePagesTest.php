<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class SitePagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return array<string, array{0: string, 1: string, 2: string}>
     */
    public static function pageProvider(): array
    {
        return [
            'solucoes' => ['solucoes', 'pages.solucoes', 'Nossas soluções'],
            'servicos' => ['servicos', 'pages.servicos', 'Serviços gerenciados'],
            'suporte' => ['suporte', 'pages.suporte', 'Central de suporte'],
            'empresa' => ['empresa', 'pages.empresa', 'Quem somos'],
            'contato' => ['contato', 'pages.contato', 'Fale com a gente'],
        ];
    }

    #[DataProvider('pageProvider')]
    public function test_header_page_renders_with_shared_layout(string $routeName, string $viewName, string $marker): void
    {
        $response = $this->get(route($routeName));

        $response->assertOk();
        $response->assertViewIs($viewName);
        $response->assertSee($marker);
        $response->assertSee('InfoSuportes', false);
    }

    #[DataProvider('pageProvider')]
    public function test_header_page_marks_its_own_nav_link_active(string $routeName): void
    {
        $response = $this->get(route($routeName));

        $response->assertOk();
        $response->assertSee('nav-link is-active', false);
    }

    public function test_every_header_link_is_reachable_from_the_home_navigation(): void
    {
        foreach (['solucoes', 'servicos', 'suporte', 'empresa', 'contato'] as $routeName) {
            $this->get(route('home'))->assertSee(route($routeName), false);
        }
    }
}
