<script setup lang="ts">
import { onMounted, onUnmounted, ref } from 'vue';
import TechIconCard from '@/components/TechIconCard.vue';
import TechFeatureSection from '@/components/TechFeatureSection.vue';

/* ===== MENU / LANDING ===== */
const menu = [
    { label: 'Início', href: '#' },
    { label: 'Cursos', href: '#' },
    { label: 'Contato', href: '#' },
];

const courses = [
    {
        title: 'Inglês',
        desc: 'Fluência prática',
        img: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173',
    },
    {
        title: 'Espanhol',
        desc: 'Comunicação real',
        img: 'https://images.unsplash.com/photo-1529333166437-7750a6dd5a70',
    },
];

const diffs = [
    { title: 'Escala', desc: 'Alta performance', icon: 'fas fa-server' },
    { title: 'Segurança', desc: 'Proteção total', icon: 'fas fa-shield-alt' },
];

const testimonials = [
    { name: 'Cliente A', text: 'Estável + rápido' },
    { name: 'Cliente B', text: 'Zero downtime' },
];

const form = ref({
    nome: '',
    email: '',
    msg: '',
});

const toggleMenu = () => {};
const submit = () => {
    console.log(form.value);
};

/* ===== TIPAGEM BOOK ===== */
interface CategoryItem {
    id: number;
    name: string;
}

interface BookItem {
    id: number;
    title: string;
    author: string | null;
    price: string | null;
    description: string | null;
    hotmart_url: string;
    cover_image_url: string | null;
    category: CategoryItem;
}

interface CategorySection {
    id: number;
    name: string;
    books: BookItem[];
}

/* ===== PROPS ===== */
const props = defineProps<{
    featuredBooks: BookItem[];
    categories: CategorySection[];
}>();

/* ===== SLIDER ===== */
const activeSlide = ref(0);
let timer: ReturnType<typeof setInterval> | null = null;

const goToSlide = (index: number) => {
    if (!props.featuredBooks.length) return;

    const total = props.featuredBooks.length;
    activeSlide.value = (index + total) % total;
};

const next = () => goToSlide(activeSlide.value + 1);

/* ===== LIFECYCLE ===== */
onMounted(() => {
    if (props.featuredBooks.length <= 1) return;
    timer = setInterval(next, 4500);
});

onUnmounted(() => {
    if (timer) clearInterval(timer);
});
</script>

<template>
    <div class="min-h-screen bg-[#0d1b2e] text-slate-200">
        <!-- NAV -->
        <header class="bg-gradient-to-r from-[#0d1b2e] to-[#0d1b2e] shadow-lg">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
                <img src="/images/infosuporte.png" alt="Horizn Future" class="h-16 object-contain drop-shadow-lg transition hover:drop-shadow-[0_0_12px_rgba(74,174,222,0.5)]" />

                <nav class="hidden gap-8 text-sm text-slate-400 md:flex">
                    <a href="#cursos" class="transition hover:text-[#4aaede]">Cursos</a>
                    <a href="#diferenciais" class="transition hover:text-[#4aaede]">Diferenciais</a>
                    <a href="#contato" class="transition hover:text-[#4aaede]">Contato</a>
                </nav>

                <button class="rounded-md bg-[#1a6fb5] px-4 py-2 text-sm font-medium transition hover:bg-[#4aaede]">Começar agora</button>
            </div>
        </header>

        <!-- HERO -->
        <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-24 md:grid-cols-2">
            <div>
                <h2 class="text-5xl leading-tight font-bold">
                    Invista no seu
                    <span class="text-[#4aaede]">futuro</span>
                </h2>

                <p class="mt-6 max-w-lg text-slate-400">
                    Conhecimento e educação financeira para quem quer crescer de verdade. Acesse os melhores livros e cursos selecionados pela Horizn Future.
                </p>

                <div class="mt-8 flex gap-4">
                    <a href="#cursos" class="rounded-md bg-[#1a6fb5] px-6 py-3 font-medium transition hover:bg-[#4aaede]">Ver catálogo</a>
                    <a href="#diferenciais" class="rounded-md border border-[#1e3a5f] px-6 py-3 transition hover:border-[#4aaede] hover:text-[#4aaede]">Saiba mais</a>
                </div>

                <div class="mt-10 flex gap-10 text-sm text-slate-400">
                    <div><strong class="text-white">+500</strong><br />títulos</div>
                    <div><strong class="text-white">100%</strong><br />digital</div>
                    <div><strong class="text-white">24/7</strong><br />acesso</div>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#4aaede]/20 to-[#1a6fb5]/20 rounded-full blur-3xl scale-150"></div>
                    <img src="/images/infosuporte.png" alt="Horizn Future" class="relative w-96 object-contain drop-shadow-2xl transition hover:scale-105 hover:drop-shadow-[0_0_30px_rgba(74,174,222,0.6)]" />
                </div>
            </div>
        </section>

        <!-- LIVROS EM DESTAQUE -->
        <section id="cursos" class="border-t border-[#1e3a5f] py-20">
            <div class="mx-auto max-w-7xl px-6">
                <h3 class="mb-3 text-3xl font-bold">Destaques</h3>
                <p class="mb-12 text-slate-400">Os títulos mais acessados da nossa plataforma</p>

                <!-- Slider -->
                <div v-if="featuredBooks.length" class="relative overflow-hidden rounded-2xl border border-[#1e3a5f] bg-[#0f2339]">
                    <div class="flex transition-transform duration-500" :style="{ transform: `translateX(-${activeSlide * 100}%)` }">
                        <div
                            v-for="book in featuredBooks"
                            :key="book.id"
                            class="flex min-w-full flex-col items-center gap-8 p-10 md:flex-row"
                        >
                            <img
                                v-if="book.cover_image_url"
                                :src="book.cover_image_url"
                                :alt="book.title"
                                class="h-64 w-44 rounded-lg object-cover shadow-xl"
                            />
                            <div v-else class="flex h-64 w-44 items-center justify-center rounded-lg bg-[#1e3a5f]">
                                <span class="text-4xl text-[#4aaede]">📚</span>
                            </div>
                            <div class="flex-1">
                                <span class="mb-2 inline-block rounded bg-[#1e3a5f] px-3 py-1 text-xs text-[#4aaede]">{{ book.category.name }}</span>
                                <h4 class="mt-3 text-2xl font-bold">{{ book.title }}</h4>
                                <p v-if="book.author" class="mt-1 text-slate-400">{{ book.author }}</p>
                                <p v-if="book.description" class="mt-4 line-clamp-3 text-sm text-slate-400">{{ book.description }}</p>
                                <div class="mt-6 flex items-center gap-4">
                                    <span v-if="book.price" class="text-2xl font-bold text-[#4aaede]">R$ {{ book.price }}</span>
                                    <a :href="book.hotmart_url" target="_blank" class="rounded-md bg-[#1a6fb5] px-6 py-2 font-medium transition hover:bg-[#4aaede]">
                                        Adquirir
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dots -->
                    <div v-if="featuredBooks.length > 1" class="absolute bottom-4 left-1/2 flex -translate-x-1/2 gap-2">
                        <button
                            v-for="(_, i) in featuredBooks"
                            :key="i"
                            @click="goToSlide(i)"
                            :class="['h-2 rounded-full transition-all', i === activeSlide ? 'w-6 bg-[#4aaede]' : 'w-2 bg-slate-600']"
                        />
                    </div>
                </div>

                <!-- Categories -->
                <div v-for="cat in categories" :key="cat.id" class="mt-16">
                    <h4 class="mb-6 text-xl font-semibold text-[#4aaede]">{{ cat.name }}</h4>
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <a
                            v-for="book in cat.books"
                            :key="book.id"
                            :href="book.hotmart_url"
                            target="_blank"
                            class="group flex flex-col rounded-xl border border-[#1e3a5f] bg-[#0f2339] p-4 transition hover:border-[#4aaede]"
                        >
                            <img
                                v-if="book.cover_image_url"
                                :src="book.cover_image_url"
                                :alt="book.title"
                                class="mb-4 h-48 w-full rounded-lg object-cover"
                            />
                            <div v-else class="mb-4 flex h-48 items-center justify-center rounded-lg bg-[#1e3a5f]">
                                <span class="text-3xl text-[#4aaede]">📖</span>
                            </div>
                            <h5 class="font-semibold leading-snug group-hover:text-[#4aaede]">{{ book.title }}</h5>
                            <p v-if="book.author" class="mt-1 text-sm text-slate-500">{{ book.author }}</p>
                            <span v-if="book.price" class="mt-auto pt-3 text-sm font-medium text-[#4aaede]">R$ {{ book.price }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAIS -->
        <section id="diferenciais" class="border-t border-[#1e3a5f] py-20">
            <div class="mx-auto max-w-7xl px-6">
                <h3 class="mb-12 text-3xl font-bold">Por que a Horizn Future?</h3>

                <div class="grid gap-8 md:grid-cols-3">
                    <TechIconCard
                        icon="rocket"
                        title="Educação financeira"
                        description="Conteúdo selecionado para quem quer construir riqueza com consistência e inteligência."
                    />

                    <TechIconCard
                        icon="cpu"
                        title="Aprendizado prático"
                        description="Livros e cursos voltados para aplicação real, não apenas teoria."
                    />

                    <TechIconCard
                        icon="network"
                        title="Idiomas & Tecnologia"
                        description="Inglês, espanhol e mais — comunicação global com foco em tecnologia e inovação."
                    />
                </div>
            </div>
        </section>

        <!-- TECNOLOGIAS -->
        <TechFeatureSection />

        <!-- CTA / CONTATO -->
        <section id="contato" class="border-t border-[#1e3a5f] bg-gradient-to-br from-[#0d1b2e] via-[#0f2339] to-[#0d1b2e] py-24 text-center">
            <div class="mx-auto max-w-4xl px-6">
                <div class="mb-8 flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-[#4aaede]/30 to-[#1a6fb5]/30 rounded-full blur-2xl"></div>
                        <img src="/images/infosuporte.png" alt="Horizn Future" class="relative h-32 object-contain drop-shadow-2xl transition hover:drop-shadow-[0_0_40px_rgba(74,174,222,0.7)]" />
                    </div>
                </div>
                <h3 class="mb-4 text-4xl font-bold bg-gradient-to-r from-white to-[#4aaede] bg-clip-text text-transparent">Pronto para expandir seus horizontes?</h3>
                <p class="mb-8 text-slate-300">Acesse o catálogo completo e comece sua jornada de aprendizado tecnológico hoje.</p>
                <a href="#cursos" class="inline-block rounded-md bg-gradient-to-r from-[#1a6fb5] to-[#4aaede] px-8 py-4 text-lg font-medium transition hover:shadow-lg hover:shadow-[#4aaede]/50">
                    Ver catálogo completo
                </a>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="border-t border-[#1e3a5f] bg-[#0a0f1a] py-12">
            <div class="mx-auto max-w-7xl px-6 text-center">
                <img src="/images/infosuporte.png" alt="Horizn Future" class="mx-auto mb-6 h-12 object-contain opacity-80 transition hover:opacity-100" />
                <p class="mb-4 text-sm text-slate-400">Educação tecnológica para quem quer crescer no futuro.</p>
                <p class="text-xs text-slate-600">© {{ new Date().getFullYear() }} Horizn Future. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
</template>

