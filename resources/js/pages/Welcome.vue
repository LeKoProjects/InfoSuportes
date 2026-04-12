<script setup lang="ts">
import { onMounted, onUnmounted, ref } from 'vue';

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
    <div class="bg-slate-950 text-slate-200">
        <!-- NAV -->
        <header class="border-b border-slate-800">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
                <h1 class="text-lg font-semibold">NEXO TECH</h1>

                <nav class="hidden gap-8 text-sm text-slate-400 md:flex">
                    <a href="#" class="hover:text-white">Solução</a>
                    <a href="#" class="hover:text-white">Infra</a>
                    <a href="#" class="hover:text-white">Cases</a>
                </nav>

                <button class="rounded-md bg-blue-600 px-4 py-2 text-sm transition hover:bg-blue-500">Demo</button>
            </div>
        </header>

        <!-- HERO -->
        <section class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-24 md:grid-cols-2">
            <div>
                <h2 class="text-5xl leading-tight font-semibold">
                    Infraestrutura crítica
                    <span class="text-blue-500">sem falhas</span>
                </h2>

                <p class="mt-6 max-w-lg text-slate-400">
                    Arquitetura preparada para escala. Latência controlada. Segurança enterprise aplicada desde a base.
                </p>

                <div class="mt-8 flex gap-4">
                    <button class="rounded-md bg-blue-600 px-6 py-3 transition hover:bg-blue-500">Solicitar demo</button>

                    <button class="rounded-md border border-slate-700 px-6 py-3 transition hover:bg-slate-800">Ver arquitetura</button>
                </div>

                <div class="mt-10 flex gap-10 text-sm text-slate-400">
                    <div><strong class="text-white">99.99%</strong><br />uptime</div>
                    <div><strong class="text-white">&lt;120ms</strong><br />latência</div>
                    <div><strong class="text-white">24/7</strong><br />NOC</div>
                </div>
            </div>

            <div class="rounded-xl border border-slate-800 bg-slate-900 p-6">
                <div class="mb-3 h-3 rounded bg-slate-700"></div>
                <div class="mb-3 h-3 w-2/3 rounded bg-slate-700"></div>
                <div class="mb-3 h-3 rounded bg-slate-700"></div>
            </div>
        </section>

        <!-- FEATURES -->
        <section class="border-t border-slate-800 py-20">
            <div class="mx-auto max-w-7xl px-6">
                <h3 class="mb-12 text-3xl font-semibold">Arquitetura</h3>

                <div class="grid gap-8 md:grid-cols-3">
                    <div class="rounded-xl border border-slate-800 bg-slate-900 p-6">
                        <h4 class="mb-3 text-lg">Alta disponibilidade</h4>
                        <p class="text-sm text-slate-400">Failover automático + balanceamento inteligente</p>
                    </div>

                    <div class="rounded-xl border border-slate-800 bg-slate-900 p-6">
                        <h4 class="mb-3 text-lg">Observabilidade</h4>
                        <p class="text-sm text-slate-400">Logs centralizados + métricas em tempo real</p>
                    </div>

                    <div class="rounded-xl border border-slate-800 bg-slate-900 p-6">
                        <h4 class="mb-3 text-lg">Segurança</h4>
                        <p class="text-sm text-slate-400">Camadas defensivas + proteção contínua</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROOF -->
        <section class="border-t border-slate-800 py-20">
            <div class="mx-auto max-w-7xl px-6 text-center">
                <h3 class="mb-10 text-3xl font-semibold">Validação</h3>

                <div class="mb-12 flex justify-center gap-8">
                    <div class="h-10 w-24 bg-slate-800"></div>
                    <div class="h-10 w-24 bg-slate-800"></div>
                    <div class="h-10 w-24 bg-slate-800"></div>
                </div>

                <div class="grid gap-8 text-sm text-slate-400 md:grid-cols-3">
                    <div><strong class="text-white">+120</strong><br />clientes</div>
                    <div><strong class="text-white">ISO</strong><br />compliance</div>
                    <div><strong class="text-white">24/7</strong><br />suporte</div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="border-t border-slate-800 py-24 text-center">
            <h3 class="mb-6 text-4xl font-semibold">Pronto para escalar</h3>

            <button class="rounded-md bg-blue-600 px-8 py-4 transition hover:bg-blue-500">Agendar demonstração</button>
        </section>
    </div>
</template>

<style scoped>
/* BASE */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 40px;
}
.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* HERO */
.hero {
    height: 80vh;
    background: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31') center/cover;
    position: relative;
}
.overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
}
.hero-content {
    position: relative;
    color: white;
}

/* CARD */
.card {
    background: #111;
    padding: 20px;
    border-radius: 6px;
}
.img {
    height: 150px;
    background-size: cover;
}

/* BTN */
.btn {
    padding: 10px 15px;
    border: none;
}
.primary {
    background: #1e6bff;
    color: white;
}
.ghost {
    border: 1px solid #ccc;
}

/* SECTIONS */
.section {
    padding: 60px 0;
}
.dark {
    background: #0b1220;
    color: white;
}

/* FOOTER */
.footer {
    background: #000;
    color: #aaa;
    padding: 20px;
}
</style>
