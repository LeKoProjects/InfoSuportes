<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import type { BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';

defineProps<{
    categoryCount: number;
    bookCount: number;
    featuredBookCount: number;
}>();

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Painel',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Painel Admin" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="space-y-6 p-4">
            <section class="grid gap-4 md:grid-cols-3">
                <article class="bg-card rounded-2xl border p-5">
                    <p class="text-muted-foreground text-sm">Categorias</p>
                    <p class="mt-2 text-3xl font-semibold">{{ categoryCount }}</p>
                </article>

                <article class="bg-card rounded-2xl border p-5">
                    <p class="text-muted-foreground text-sm">Livros</p>
                    <p class="mt-2 text-3xl font-semibold">{{ bookCount }}</p>
                </article>

                <article class="bg-card rounded-2xl border p-5">
                    <p class="text-muted-foreground text-sm">No carrossel</p>
                    <p class="mt-2 text-3xl font-semibold">{{ featuredBookCount }}</p>
                </article>
            </section>

            <section class="grid gap-4 md:grid-cols-2">
                <Link href="/admin/categories" class="bg-card hover:border-primary/40 rounded-2xl border p-5 transition">
                    <h2 class="text-lg font-semibold">Gerir categorias</h2>
                    <p class="text-muted-foreground mt-1 text-sm">Criar, editar, ordenar.</p>
                </Link>

                <Link href="/admin/books" class="bg-card hover:border-primary/40 rounded-2xl border p-5 transition">
                    <h2 class="text-lg font-semibold">Gerir livros</h2>
                    <p class="text-muted-foreground mt-1 text-sm">Upload capa, link Hotmart, destaque.</p>
                </Link>
            </section>
        </div>
    </AppLayout>
</template>
