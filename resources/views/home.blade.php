<!DOCTYPE html>
<html lang="pt-BR" class="theme-loading">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Horizn Future') }} - Educação e Investimento</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=space-grotesk:500,600,700|instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite('resources/css/app.css')

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        .hero-text {
            background: linear-gradient(135deg, #0d1b2e 0%, #1a6fb5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .dark .hero-text {
            background: linear-gradient(135deg, #4aaede 0%, #eef7f1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @media (prefers-reduced-motion: reduce) {
            .animate-in {
                animation: none;
                opacity: 1;
            }
        }
    </style>

    <script>
        (() => {
            const storedTheme = localStorage.getItem('theme-mode') || 'system';
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (storedTheme === 'dark' || (storedTheme === 'system' && prefersDark)) {
                document.documentElement.classList.add('dark');
            }

            document.documentElement.classList.remove('theme-loading');
        })();
    </script>
</head>

<body class="bg-[#f8fbfe] font-['Instrument_Sans'] text-[#121614] antialiased transition-colors dark:bg-[#0f1b2a] dark:text-[#eef7f1]">
    <header class="sticky top-0 z-40 border-b border-[#1e3a5f] bg-white/90 backdrop-blur transition-colors dark:border-[#1e3a5f] dark:bg-[#0d1b2e]/90">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-5 py-3">
            <a href="{{ route('home') }}" class="flex items-center gap-2 transition duration-300 hover:opacity-80">
                <img src="/images/LOGO HORIZN FUTURE (SEM FUNDO).png" alt="Horizn Future" class="h-12 w-12 object-contain drop-shadow-md" />
                <div class="hidden flex-col sm:flex">
                    <span class="font-['Space_Grotesk'] text-base font-bold tracking-normal text-[#0d1b2e] dark:text-[#eef7f1]">Horizn</span>
                    <span class="font-['Space_Grotesk'] text-base font-bold tracking-normal text-[#1a6fb5] dark:text-[#4aaede]">Future</span>
                </div>
            </a>

            <nav class="hidden items-center gap-6 text-sm font-semibold text-[#415149] dark:text-[#b9c7bf] md:flex">
                <a class="transition duration-300 hover:text-[#1a6fb5] border-b-2 border-transparent hover:border-[#1a6fb5]" href="#destaques">Destaques</a>
                <a class="transition duration-300 hover:text-[#1a6fb5] border-b-2 border-transparent hover:border-[#1a6fb5]" href="#catalogo">Catálogo</a>
                <a class="transition duration-300 hover:text-[#1a6fb5] border-b-2 border-transparent hover:border-[#1a6fb5]" href="#categorias">Categorias</a>
                <a class="transition duration-300 hover:text-[#1a6fb5] border-b-2 border-transparent hover:border-[#1a6fb5]" href="#contato">Contato</a>
            </nav>

            <div class="flex items-center gap-2">
                <button
                    type="button"
                    data-theme-toggle
                    class="rounded-lg border border-[#0d1b2e] px-3 py-2 text-xs font-bold text-[#0d1b2e] transition hover:bg-white dark:border-[#4aaede] dark:text-[#eef7f1] dark:hover:bg-[#1e3a5f]"
                    aria-label="Alternar tema"
                >
                    Tema: <span data-theme-label>Sistema</span>
                </button>
                <a href="#catalogo" class="rounded-lg bg-[#1a6fb5] px-4 py-2 text-sm font-bold text-white transition hover:bg-[#4aaede] dark:bg-[#1a6fb5] dark:hover:bg-[#4aaede]">
                    Ver livros
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="border-b border-[#e8f0f8] bg-[radial-gradient(circle_at_20%_20%,#d9ecf7_0,#f8fbfe_30%,#f8fbfe_100%)] transition-colors dark:border-[#1e3a5f] dark:bg-[radial-gradient(circle_at_20%_20%,#1a4b7a_0,#0d1b2e_34%,#0d1b2e_100%)]">
            <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 md:grid-cols-[1.1fr_0.9fr] md:items-center lg:py-20">
                <div class="max-w-3xl">
                    <p class="mb-4 inline-flex animate-in rounded-lg border border-[#b3ddf0] bg-white px-3 py-2 text-xs font-bold uppercase tracking-normal text-[#1a6fb5] dark:border-[#1e5ca8] dark:bg-[#1e3a5f] dark:text-[#4aaede]">
                        Educação e Investimento
                    </p>
                    <h1 class="animate-fade-in-up animate-in hero-text font-['Space_Grotesk'] text-4xl font-bold leading-tight tracking-normal md:text-6xl" style="animation-delay: 0.05s">
                        Invista no seu futuro com conhecimento
                    </h1>
                    <p class="animate-fade-in-up animate-in mt-5 max-w-2xl text-lg leading-8 text-[#415149] dark:text-[#b9c7bf]" style="animation-delay: 0.1s">
                        Catálogo curado de livros sobre educação financeira, desenvolvimento pessoal, tecnologia e carreira. Acesse via Hotmart.
                    </p>
                    <div class="animate-fade-in-up animate-in mt-8 flex flex-wrap gap-3" style="animation-delay: 0.15s">
                        <a href="#catalogo" class="rounded-lg bg-[#1a6fb5] px-5 py-3 text-sm font-bold text-white transition duration-300 hover:bg-[#4aaede] hover:shadow-lg hover:shadow-blue-500/50 transform hover:scale-105">
                            Ver catálogo
                        </a>
                        <a href="#destaques" class="rounded-lg border border-[#0d1b2e] px-5 py-3 text-sm font-bold text-[#0d1b2e] transition duration-300 hover:bg-white dark:border-[#4aaede] dark:text-[#eef7f1] dark:hover:bg-[#1e3a5f] transform hover:scale-105">
                            Ver destaques
                        </a>
                    </div>
                </div>

                <div class="grid gap-3 sm:grid-cols-2">
                    @forelse ($featuredBooks->take(4) as $book)
                        <a href="{{ route('books.purchase', $book) }}" class="group animate-fade-in-up animate-in rounded-lg border border-[#e8f0f8] bg-white p-3 shadow-[0_18px_60px_rgba(26,111,181,0.10)] transition duration-300 hover:-translate-y-2 hover:border-[#1a6fb5] hover:shadow-[0_20px_40px_rgba(26,111,181,0.20)] dark:border-[#1e3a5f] dark:bg-[#1e3a5f]" style="animation-delay: {{ (0.2 + $loop->index * 0.05) }}s">
                            @if ($book->cover_image_url)
                                <img src="{{ $book->cover_image_url }}" alt="Capa do livro {{ $book->title }}" class="aspect-[4/5] w-full rounded-lg object-cover">
                            @else
                                <div class="flex aspect-[4/5] w-full items-center justify-center rounded-lg bg-[#0d1b2e] p-5 text-center font-['Space_Grotesk'] text-xl font-bold text-white">
                                    {{ $book->title }}
                                </div>
                            @endif
                            <div class="mt-3">
                                <p class="text-xs font-bold uppercase tracking-normal text-[#1a6fb5]">{{ $book->category->name }}</p>
                                <h2 class="mt-1 line-clamp-2 font-['Space_Grotesk'] text-lg font-bold text-[#0d1b2e] dark:text-[#eef7f1]">{{ $book->title }}</h2>
                                <p class="mt-2 font-bold text-[#1a6fb5]">{{ $book->price ?? 'Ver preço' }}</p>
                            </div>
                        </a>
                    @empty
                        <div class="rounded-lg border border-[#e8f0f8] bg-white p-8 dark:border-[#1e3a5f] dark:bg-[#1e3a5f] sm:col-span-2">
                            <p class="font-['Space_Grotesk'] text-2xl font-bold">Catálogo em atualização</p>
                            <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Novos livros entram em breve.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="bg-[#0d1b2e] py-4 text-white">
            <div class="mx-auto flex max-w-7xl flex-wrap justify-center gap-3 px-5 text-sm font-semibold md:justify-between">
                <span>✓ Compra segura via Hotmart</span>
                <span>✓ Curadoria especializada</span>
                <span>✓ Acesso digital 24/7</span>
                <span>✓ Educação e Investimento</span>
            </div>
        </section>

        <section id="destaques" class="mx-auto max-w-7xl px-5 py-14">
            <div class="mb-7 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="animate-slide-in-left animate-in text-sm font-bold uppercase tracking-normal text-[#1a6fb5]">Destaques</p>
                    <h2 class="animate-fade-in-up animate-in font-['Space_Grotesk'] text-3xl font-bold tracking-normal md:text-4xl" style="animation-delay: 0.05s">Títulos principais</h2>
                </div>
                <a href="#catalogo" class="animate-in rounded-lg border border-[#0d1b2e] px-4 py-2 text-sm font-bold transition duration-300 hover:bg-white hover:border-[#1a6fb5] dark:border-[#b9c7bf] dark:hover:bg-[#1e3a5f] dark:hover:border-[#4aaede]" style="animation-delay: 0.1s">Ver catálogo</a>
            </div>

            <div class="flex snap-x gap-4 overflow-x-auto pb-4">
                @forelse ($featuredBooks as $book)
                    <article class="min-w-[270px] snap-start animate-fade-in-up animate-in rounded-lg border border-[#e8f0f8] bg-white p-4 transition duration-300 hover:shadow-lg hover:border-[#1a6fb5] dark:border-[#1e3a5f] dark:bg-[#1e3a5f] md:min-w-[340px]" style="animation-delay: {{ (0.15 + ($loop->index % 4) * 0.05) }}s">
                        @if ($book->cover_image_url)
                            <img src="{{ $book->cover_image_url }}" alt="Capa do livro {{ $book->title }}" class="aspect-[4/5] w-full rounded-lg object-cover">
                        @else
                            <div class="flex aspect-[4/5] w-full items-center justify-center rounded-lg bg-[#0d1b2e] p-5 text-center font-['Space_Grotesk'] text-2xl font-bold text-white">
                                {{ $book->title }}
                            </div>
                        @endif
                        <p class="mt-4 text-xs font-bold uppercase tracking-normal text-[#1a6fb5]">{{ $book->category->name }}</p>
                        <h3 class="mt-1 line-clamp-2 font-['Space_Grotesk'] text-2xl font-bold">{{ $book->title }}</h3>
                        <p class="mt-2 line-clamp-3 text-sm leading-6 text-[#415149] dark:text-[#b9c7bf]">{{ $book->description }}</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-lg font-bold text-[#1a6fb5]">{{ $book->price ?? 'Ver preço' }}</span>
                            <a href="{{ route('books.purchase', $book) }}" class="rounded-lg bg-[#1a6fb5] px-4 py-2 text-sm font-bold text-white transition duration-300 hover:bg-[#4aaede] transform hover:scale-110">
                                Comprar
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="w-full rounded-lg border border-[#e8f0f8] bg-white p-8 dark:border-[#1e3a5f] dark:bg-[#1e3a5f]">
                        <p class="font-['Space_Grotesk'] text-2xl font-bold">Catálogo em atualização</p>
                        <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Títulos em destaque entram em breve.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section id="categorias" class="border-y border-[#e8f0f8] bg-white py-12 dark:border-[#1e3a5f] dark:bg-[#0f2339]">
            <div class="mx-auto max-w-7xl px-5">
                <p class="animate-in animate-slide-in-left text-sm font-bold uppercase tracking-normal text-[#1a6fb5]">Categorias</p>
                <div class="mt-5 flex flex-wrap gap-3">
                    @forelse ($categories as $category)
                        <a href="#catalogo" class="animate-in animate-fade-in-up rounded-lg border border-[#e8f0f8] bg-[#f8fbfe] px-4 py-3 text-sm font-bold text-[#0d1b2e] transition duration-300 hover:border-[#1a6fb5] hover:bg-white dark:border-[#1e3a5f] dark:bg-[#0f1b2a] dark:text-[#eef7f1] dark:hover:bg-[#1e3a5f]" style="animation-delay: {{ $loop->index * 0.08 }}s">
                            {{ $category->name }} <span class="text-[#1a6fb5]">{{ $category->books_count }}</span>
                        </a>
                    @empty
                        <span class="rounded-lg border border-[#e8f0f8] px-4 py-3 text-sm font-bold text-[#415149] dark:border-[#1e3a5f] dark:text-[#b9c7bf]">
                            Categorias em atualização
                        </span>
                    @endforelse
                </div>
            </div>
        </section>

        <section id="catalogo" class="mx-auto max-w-7xl px-5 py-14">
            <div class="mb-7 max-w-3xl">
                <p class="animate-in animate-slide-in-left text-sm font-bold uppercase tracking-normal text-[#1a6fb5]">Catálogo</p>
                <h2 class="animate-in animate-fade-in-up font-['Space_Grotesk'] text-3xl font-bold tracking-normal md:text-4xl" style="animation-delay: 0.05s">Biblioteca completa</h2>
                <p class="animate-in animate-fade-in-up mt-3 text-[#415149] dark:text-[#b9c7bf]" style="animation-delay: 0.1s">Selecione um título, clique em comprar e finalize seu pedido via Hotmart.</p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @forelse ($books as $book)
                    <article class="group animate-in animate-fade-in-up flex h-full flex-col rounded-lg border border-[#e8f0f8] bg-white p-4 transition duration-300 hover:-translate-y-2 hover:border-[#1a6fb5] hover:shadow-lg dark:border-[#1e3a5f] dark:bg-[#1e3a5f]" style="animation-delay: {{ (0.15 + ($loop->index % 12) * 0.05) }}s">
                        @if ($book->cover_image_url)
                            <img src="{{ $book->cover_image_url }}" alt="Capa do livro {{ $book->title }}" class="aspect-[4/5] w-full rounded-lg object-cover">
                        @else
                            <div class="flex aspect-[4/5] w-full items-center justify-center rounded-lg bg-[#0d1b2e] p-5 text-center font-['Space_Grotesk'] text-2xl font-bold text-white">
                                {{ $book->title }}
                            </div>
                        @endif
                        <div class="flex flex-1 flex-col">
                            <p class="mt-4 text-xs font-bold uppercase tracking-normal text-[#1a6fb5]">{{ $book->category->name }}</p>
                            <h3 class="mt-1 line-clamp-2 font-['Space_Grotesk'] text-xl font-bold">{{ $book->title }}</h3>
                            @if ($book->author)
                                <p class="mt-1 text-sm font-semibold text-[#415149] dark:text-[#b9c7bf]">{{ $book->author }}</p>
                            @endif
                            <p class="mt-3 line-clamp-3 text-sm leading-6 text-[#415149] dark:text-[#b9c7bf]">{{ $book->description }}</p>
                            <div class="mt-auto flex items-center justify-between gap-3 pt-5">
                                <span class="font-bold text-[#1a6fb5]">{{ $book->price ?? 'Ver preço' }}</span>
                                <a href="{{ route('books.purchase', $book) }}" class="rounded-lg bg-[#1a6fb5] px-4 py-2 text-sm font-bold text-white transition duration-300 hover:bg-[#4aaede] transform hover:scale-110">
                                    Comprar agora
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="rounded-lg border border-[#e8f0f8] bg-white p-8 dark:border-[#1e3a5f] dark:bg-[#1e3a5f] sm:col-span-2 lg:col-span-3 xl:col-span-4">
                        <p class="font-['Space_Grotesk'] text-2xl font-bold">Catálogo em atualização</p>
                        <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Novos títulos entram em breve.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section class="bg-[#e8f0f8] py-14 dark:bg-[#0f2339]">
            <div class="mx-auto grid max-w-7xl gap-5 px-5 md:grid-cols-3">
                <div class="animate-fade-in-up animate-in rounded-lg border border-[#b3ddf0] bg-white p-6 transition duration-300 hover:shadow-lg hover:border-[#1a6fb5] dark:border-[#1e3a5f] dark:bg-[#1e3a5f]">
                    <h3 class="font-['Space_Grotesk'] text-xl font-bold">Conhecimento prático</h3>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Livros e conteúdos aplicáveis na sua vida profissional e pessoal.</p>
                </div>
                <div class="animate-fade-in-up animate-in rounded-lg border border-[#b3ddf0] bg-white p-6 transition duration-300 hover:shadow-lg hover:border-[#1a6fb5] dark:border-[#1e3a5f] dark:bg-[#1e3a5f]" style="animation-delay: 0.1s">
                    <h3 class="font-['Space_Grotesk'] text-xl font-bold">Compra segura</h3>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Transações via Hotmart, a maior plataforma de cursos e livros do Brasil.</p>
                </div>
                <div class="animate-fade-in-up animate-in rounded-lg border border-[#b3ddf0] bg-white p-6 transition duration-300 hover:shadow-lg hover:border-[#1a6fb5] dark:border-[#1e3a5f] dark:bg-[#1e3a5f]" style="animation-delay: 0.2s">
                    <h3 class="font-['Space_Grotesk'] text-xl font-bold">Curadoria especializada</h3>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Seleção cuidadosa de títulos sobre educação, finanças e desenvolvimento.</p>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-4xl px-5 py-14">
            <p class="animate-slide-in-left text-sm font-bold uppercase tracking-normal text-[#1a6fb5]">FAQ</p>
            <div class="mt-5 divide-y divide-[#e8f0f8] rounded-lg border border-[#e8f0f8] bg-white dark:divide-[#1e3a5f] dark:border-[#1e3a5f] dark:bg-[#1e3a5f]">
                <details class="animate-fade-in-up group p-5 transition duration-300 open:bg-blue-50 dark:open:bg-[#0f2339]" open>
                    <summary class="cursor-pointer font-['Space_Grotesk'] text-lg font-bold transition hover:text-[#1a6fb5]">A compra acontece onde?</summary>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Na Hotmart. O botão de compra leva direto para o checkout do livro.</p>
                </details>
                <details class="animate-fade-in-up group p-5 transition duration-300 open:bg-blue-50 dark:open:bg-[#0f2339]" style="animation-delay: 0.1s">
                    <summary class="cursor-pointer font-['Space_Grotesk'] text-lg font-bold transition hover:text-[#1a6fb5]">Os livros ficam disponíveis na hora?</summary>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">A entrega segue as regras da página do produto na Hotmart.</p>
                </details>
                <details class="animate-fade-in-up group p-5 transition duration-300 open:bg-blue-50 dark:open:bg-[#0f2339]" style="animation-delay: 0.2s">
                    <summary class="cursor-pointer font-['Space_Grotesk'] text-lg font-bold transition hover:text-[#1a6fb5]">Como escolher o melhor livro?</summary>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Comece pela categoria mais próxima do seu objetivo atual.</p>
                </details>
            </div>
        </section>
    </main>

    <footer id="contato" class="border-t border-[#e8f0f8] bg-[#0d1b2e] text-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-5 py-8 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="font-['Space_Grotesk'] text-xl font-bold">Horizn Future</p>
                <p class="mt-2 text-sm text-[#b9c7bf]">Educação e Investimento para sua evolução.</p>
            </div>
            <div class="flex flex-wrap gap-4 text-sm font-semibold text-[#b9c7bf]">
                <a class="transition duration-300 hover:text-white hover:text-[#4aaede]" href="#destaques">Destaques</a>
                <a class="transition duration-300 hover:text-white hover:text-[#4aaede]" href="#catalogo">Catálogo</a>
                <a class="transition duration-300 hover:text-white hover:text-[#4aaede]" href="#categorias">Categorias</a>
            </div>
        </div>
    </footer>

    <script>
        (() => {
            const labels = {
                system: 'Sistema',
                light: 'Claro',
                dark: 'Escuro',
            };
            const button = document.querySelector('[data-theme-toggle]');
            const label = document.querySelector('[data-theme-label]');
            const media = window.matchMedia('(prefers-color-scheme: dark)');

            const applyTheme = (mode) => {
                const resolvedMode = mode === 'system' && media.matches ? 'dark' : mode;

                document.documentElement.classList.toggle('dark', resolvedMode === 'dark');
                label.textContent = labels[mode];
                button.setAttribute('aria-label', `Tema atual: ${labels[mode]}`);
            };

            const nextMode = (mode) => {
                if (mode === 'system') {
                    return media.matches ? 'light' : 'dark';
                }

                return mode === 'dark' ? 'light' : 'system';
            };

            let currentMode = localStorage.getItem('theme-mode') || 'system';
            applyTheme(currentMode);

            button.addEventListener('click', () => {
                currentMode = nextMode(currentMode);
                localStorage.setItem('theme-mode', currentMode);
                applyTheme(currentMode);
            });

            media.addEventListener('change', () => {
                if (currentMode === 'system') {
                    applyTheme(currentMode);
                }
            });
        })();
    </script>
</body>
</html>
