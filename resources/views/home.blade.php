<!DOCTYPE html>
<html lang="pt-BR" class="theme-loading">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'E-TI Solucoes') }} - Livros de tecnologia</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=space-grotesk:500,600,700|instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite('resources/css/app.css')

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

<body class="bg-[#f4fbf8] font-['Instrument_Sans'] text-[#121614] antialiased transition-colors dark:bg-[#121412] dark:text-[#eef7f1]">
    <header class="sticky top-0 z-40 border-b border-[#dbe8df] bg-[#f4fbf8]/90 backdrop-blur transition-colors dark:border-[#2d3b33] dark:bg-[#121412]/90">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-5 py-4">
            <a href="{{ route('home') }}" class="font-['Space_Grotesk'] text-xl font-bold tracking-normal text-[#121614] dark:text-[#eef7f1]">
                E-TI Solucoes
            </a>

            <nav class="hidden items-center gap-6 text-sm font-semibold text-[#415149] dark:text-[#b9c7bf] md:flex">
                <a class="hover:text-[#0f7a5a]" href="#destaques">Destaques</a>
                <a class="hover:text-[#0f7a5a]" href="#catalogo">Catalogo</a>
                <a class="hover:text-[#0f7a5a]" href="#categorias">Categorias</a>
                <a class="hover:text-[#0f7a5a]" href="#contato">Contato</a>
            </nav>

            <div class="flex items-center gap-2">
                <button
                    type="button"
                    data-theme-toggle
                    class="rounded-lg border border-[#111614] px-3 py-2 text-xs font-bold text-[#111614] transition hover:bg-white dark:border-[#b9c7bf] dark:text-[#eef7f1] dark:hover:bg-[#1d251f]"
                    aria-label="Alternar tema"
                >
                    Tema: <span data-theme-label>Sistema</span>
                </button>
                <a href="#catalogo" class="rounded-lg bg-[#111614] px-4 py-2 text-sm font-bold text-white transition hover:bg-[#0f7a5a] dark:bg-[#0f7a5a] dark:hover:bg-[#17a376]">
                    Ver livros
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="border-b border-[#dbe8df] bg-[radial-gradient(circle_at_20%_20%,#d4f8e7_0,#f4fbf8_30%,#f4fbf8_100%)] transition-colors dark:border-[#2d3b33] dark:bg-[radial-gradient(circle_at_20%_20%,#164b38_0,#121412_34%,#121412_100%)]">
            <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 md:grid-cols-[1.1fr_0.9fr] md:items-center lg:py-20">
                <div class="max-w-3xl">
                    <p class="mb-4 inline-flex rounded-lg border border-[#b9ded0] bg-white px-3 py-2 text-xs font-bold uppercase tracking-normal text-[#0f7a5a] dark:border-[#32634e] dark:bg-[#1d251f] dark:text-[#66d69e]">
                        Livros de tecnologia
                    </p>
                    <h1 class="font-['Space_Grotesk'] text-4xl font-bold leading-tight tracking-normal text-[#111614] dark:text-[#eef7f1] md:text-6xl">
                        Sua proxima leitura tecnica, pronta para compra.
                    </h1>
                    <p class="mt-5 max-w-2xl text-lg leading-8 text-[#415149] dark:text-[#b9c7bf]">
                        Catalogo de livros para desenvolvimento, cloud, arquitetura, dados e carreira tech.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#catalogo" class="rounded-lg bg-[#0f7a5a] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#0a5c43]">
                            Comprar livros
                        </a>
                        <a href="#destaques" class="rounded-lg border border-[#111614] px-5 py-3 text-sm font-bold text-[#111614] transition hover:bg-white dark:border-[#b9c7bf] dark:text-[#eef7f1] dark:hover:bg-[#1d251f]">
                            Ver destaques
                        </a>
                    </div>
                </div>

                <div class="grid gap-3 sm:grid-cols-2">
                    @forelse ($featuredBooks->take(4) as $book)
                        <a href="{{ route('books.purchase', $book) }}" class="group rounded-lg border border-[#dbe8df] bg-white p-3 shadow-[0_18px_60px_rgba(16,67,48,0.10)] transition hover:-translate-y-1 hover:border-[#0f7a5a] dark:border-[#2d3b33] dark:bg-[#1d251f]">
                            @if ($book->cover_image_url)
                                <img src="{{ $book->cover_image_url }}" alt="Capa do livro {{ $book->title }}" class="aspect-[4/5] w-full rounded-lg object-cover">
                            @else
                                <div class="flex aspect-[4/5] w-full items-center justify-center rounded-lg bg-[#111614] p-5 text-center font-['Space_Grotesk'] text-xl font-bold text-white">
                                    {{ $book->title }}
                                </div>
                            @endif
                            <div class="mt-3">
                                <p class="text-xs font-bold uppercase tracking-normal text-[#0f7a5a]">{{ $book->category->name }}</p>
                                <h2 class="mt-1 line-clamp-2 font-['Space_Grotesk'] text-lg font-bold text-[#111614] dark:text-[#eef7f1]">{{ $book->title }}</h2>
                                <p class="mt-2 font-bold text-[#e23251]">{{ $book->price ?? 'Ver preco' }}</p>
                            </div>
                        </a>
                    @empty
                        <div class="rounded-lg border border-[#dbe8df] bg-white p-8 dark:border-[#2d3b33] dark:bg-[#1d251f] sm:col-span-2">
                            <p class="font-['Space_Grotesk'] text-2xl font-bold">Catalogo em atualizacao</p>
                            <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Novos livros entram em breve.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="bg-[#111614] py-4 text-white">
            <div class="mx-auto flex max-w-7xl flex-wrap justify-center gap-3 px-5 text-sm font-semibold md:justify-between">
                <span>Compra segura via Hotmart</span>
                <span>Curadoria tech</span>
                <span>Leitura pratica</span>
                <span>Arquitetura, codigo, cloud e dados</span>
            </div>
        </section>

        <section id="destaques" class="mx-auto max-w-7xl px-5 py-14">
            <div class="mb-7 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="text-sm font-bold uppercase tracking-normal text-[#0f7a5a]">Destaques</p>
                    <h2 class="font-['Space_Grotesk'] text-3xl font-bold tracking-normal md:text-4xl">Vitrine principal</h2>
                </div>
                <a href="#catalogo" class="rounded-lg border border-[#111614] px-4 py-2 text-sm font-bold hover:bg-white dark:border-[#b9c7bf] dark:hover:bg-[#1d251f]">Ver catalogo</a>
            </div>

            <div class="flex snap-x gap-4 overflow-x-auto pb-4">
                @forelse ($featuredBooks as $book)
                    <article class="min-w-[270px] snap-start rounded-lg border border-[#dbe8df] bg-white p-4 dark:border-[#2d3b33] dark:bg-[#1d251f] md:min-w-[340px]">
                        @if ($book->cover_image_url)
                            <img src="{{ $book->cover_image_url }}" alt="Capa do livro {{ $book->title }}" class="aspect-[4/5] w-full rounded-lg object-cover">
                        @else
                            <div class="flex aspect-[4/5] w-full items-center justify-center rounded-lg bg-[#111614] p-5 text-center font-['Space_Grotesk'] text-2xl font-bold text-white">
                                {{ $book->title }}
                            </div>
                        @endif
                        <p class="mt-4 text-xs font-bold uppercase tracking-normal text-[#0f7a5a]">{{ $book->category->name }}</p>
                        <h3 class="mt-1 line-clamp-2 font-['Space_Grotesk'] text-2xl font-bold">{{ $book->title }}</h3>
                        <p class="mt-2 line-clamp-3 text-sm leading-6 text-[#415149] dark:text-[#b9c7bf]">{{ $book->description }}</p>
                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-lg font-bold text-[#e23251]">{{ $book->price ?? 'Ver preco' }}</span>
                            <a href="{{ route('books.purchase', $book) }}" class="rounded-lg bg-[#0f7a5a] px-4 py-2 text-sm font-bold text-white hover:bg-[#0a5c43]">
                                Comprar
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="w-full rounded-lg border border-[#dbe8df] bg-white p-8 dark:border-[#2d3b33] dark:bg-[#1d251f]">
                        <p class="font-['Space_Grotesk'] text-2xl font-bold">Catalogo em atualizacao</p>
                        <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Livros em destaque entram em breve.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section id="categorias" class="border-y border-[#dbe8df] bg-white py-12 dark:border-[#2d3b33] dark:bg-[#181d1a]">
            <div class="mx-auto max-w-7xl px-5">
                <p class="text-sm font-bold uppercase tracking-normal text-[#0f7a5a]">Categorias</p>
                <div class="mt-5 flex flex-wrap gap-3">
                    @forelse ($categories as $category)
                        <a href="#catalogo" class="rounded-lg border border-[#dbe8df] bg-[#f4fbf8] px-4 py-3 text-sm font-bold text-[#111614] hover:border-[#0f7a5a] dark:border-[#2d3b33] dark:bg-[#121412] dark:text-[#eef7f1]">
                            {{ $category->name }} <span class="text-[#0f7a5a]">{{ $category->books_count }}</span>
                        </a>
                    @empty
                        <span class="rounded-lg border border-[#dbe8df] px-4 py-3 text-sm font-bold text-[#415149] dark:border-[#2d3b33] dark:text-[#b9c7bf]">
                            Categorias em atualizacao
                        </span>
                    @endforelse
                </div>
            </div>
        </section>

        <section id="catalogo" class="mx-auto max-w-7xl px-5 py-14">
            <div class="mb-7 max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-normal text-[#0f7a5a]">Catalogo</p>
                <h2 class="font-['Space_Grotesk'] text-3xl font-bold tracking-normal md:text-4xl">Livros para evoluir no stack</h2>
                <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Escolha uma leitura, clique em comprar e finalize pela Hotmart.</p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @forelse ($books as $book)
                    <article class="group flex h-full flex-col rounded-lg border border-[#dbe8df] bg-white p-4 transition hover:-translate-y-1 hover:border-[#0f7a5a] dark:border-[#2d3b33] dark:bg-[#1d251f]">
                        @if ($book->cover_image_url)
                            <img src="{{ $book->cover_image_url }}" alt="Capa do livro {{ $book->title }}" class="aspect-[4/5] w-full rounded-lg object-cover">
                        @else
                            <div class="flex aspect-[4/5] w-full items-center justify-center rounded-lg bg-[#111614] p-5 text-center font-['Space_Grotesk'] text-2xl font-bold text-white">
                                {{ $book->title }}
                            </div>
                        @endif
                        <div class="flex flex-1 flex-col">
                            <p class="mt-4 text-xs font-bold uppercase tracking-normal text-[#0f7a5a]">{{ $book->category->name }}</p>
                            <h3 class="mt-1 line-clamp-2 font-['Space_Grotesk'] text-xl font-bold">{{ $book->title }}</h3>
                            @if ($book->author)
                                <p class="mt-1 text-sm font-semibold text-[#415149] dark:text-[#b9c7bf]">{{ $book->author }}</p>
                            @endif
                            <p class="mt-3 line-clamp-3 text-sm leading-6 text-[#415149] dark:text-[#b9c7bf]">{{ $book->description }}</p>
                            <div class="mt-auto flex items-center justify-between gap-3 pt-5">
                                <span class="font-bold text-[#e23251]">{{ $book->price ?? 'Ver preco' }}</span>
                                <a href="{{ route('books.purchase', $book) }}" class="rounded-lg bg-[#111614] px-4 py-2 text-sm font-bold text-white hover:bg-[#0f7a5a]">
                                    Comprar agora
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="rounded-lg border border-[#dbe8df] bg-white p-8 dark:border-[#2d3b33] dark:bg-[#1d251f] sm:col-span-2 lg:col-span-3 xl:col-span-4">
                        <p class="font-['Space_Grotesk'] text-2xl font-bold">Catalogo em atualizacao</p>
                        <p class="mt-3 text-[#415149] dark:text-[#b9c7bf]">Novos titulos de tecnologia entram em breve.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section class="bg-[#e8f7ef] py-14 dark:bg-[#181d1a]">
            <div class="mx-auto grid max-w-7xl gap-5 px-5 md:grid-cols-3">
                <div class="rounded-lg border border-[#b9ded0] bg-white p-6 dark:border-[#2d3b33] dark:bg-[#1d251f]">
                    <h3 class="font-['Space_Grotesk'] text-xl font-bold">Pratica primeiro</h3>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Leituras para aplicar em codigo, arquitetura e produto.</p>
                </div>
                <div class="rounded-lg border border-[#b9ded0] bg-white p-6 dark:border-[#2d3b33] dark:bg-[#1d251f]">
                    <h3 class="font-['Space_Grotesk'] text-xl font-bold">Compra direta</h3>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Checkout feito pela Hotmart, sem cadastro extra aqui.</p>
                </div>
                <div class="rounded-lg border border-[#b9ded0] bg-white p-6 dark:border-[#2d3b33] dark:bg-[#1d251f]">
                    <h3 class="font-['Space_Grotesk'] text-xl font-bold">Curadoria tech</h3>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Titulos separados para quem trabalha ou quer trabalhar com tecnologia.</p>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-4xl px-5 py-14">
            <p class="text-sm font-bold uppercase tracking-normal text-[#0f7a5a]">FAQ</p>
            <div class="mt-5 divide-y divide-[#dbe8df] rounded-lg border border-[#dbe8df] bg-white dark:divide-[#2d3b33] dark:border-[#2d3b33] dark:bg-[#1d251f]">
                <details class="group p-5" open>
                    <summary class="cursor-pointer font-['Space_Grotesk'] text-lg font-bold">A compra acontece onde?</summary>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Na Hotmart. O botao de compra leva direto para o checkout do livro.</p>
                </details>
                <details class="group p-5">
                    <summary class="cursor-pointer font-['Space_Grotesk'] text-lg font-bold">Os livros ficam disponiveis na hora?</summary>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">A entrega segue as regras da pagina do produto na Hotmart.</p>
                </details>
                <details class="group p-5">
                    <summary class="cursor-pointer font-['Space_Grotesk'] text-lg font-bold">Como escolher o melhor livro?</summary>
                    <p class="mt-3 leading-7 text-[#415149] dark:text-[#b9c7bf]">Comece pela categoria mais perto do seu objetivo atual.</p>
                </details>
            </div>
        </section>
    </main>

    <footer id="contato" class="border-t border-[#dbe8df] bg-[#111614] text-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-5 py-8 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="font-['Space_Grotesk'] text-xl font-bold">E-TI Solucoes</p>
                <p class="mt-2 text-sm text-[#b9c7bf]">Livros de tecnologia para compra via Hotmart.</p>
            </div>
            <div class="flex flex-wrap gap-4 text-sm font-semibold text-[#b9c7bf]">
                <a class="hover:text-white" href="#destaques">Destaques</a>
                <a class="hover:text-white" href="#catalogo">Catalogo</a>
                <a class="hover:text-white" href="#categorias">Categorias</a>
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
