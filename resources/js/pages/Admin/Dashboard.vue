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
                <article class="rounded-lg border border-neutral-200 bg-white p-5 text-neutral-950 shadow-sm dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50">
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">Categorias</p>
                    <p class="mt-2 text-3xl font-semibold">{{ categoryCount }}</p>
                </article>

                <article class="rounded-lg border border-neutral-200 bg-white p-5 text-neutral-950 shadow-sm dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50">
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">Livros</p>
                    <p class="mt-2 text-3xl font-semibold">{{ bookCount }}</p>
                </article>

                <article class="rounded-lg border border-neutral-200 bg-white p-5 text-neutral-950 shadow-sm dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50">
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">No carrossel</p>
                    <p class="mt-2 text-3xl font-semibold">{{ featuredBookCount }}</p>
                </article>
            </section>

            <section class="grid gap-4 md:grid-cols-2">
                <Link
                    href="/admin/categories"
                    class="rounded-lg border border-neutral-200 bg-white p-5 text-neutral-950 shadow-sm transition hover:border-neutral-400 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50 dark:hover:border-neutral-600"
                >
                    <h2 class="text-lg font-semibold">Gerir categorias</h2>
                    <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-400">Criar, editar, ordenar.</p>
                </Link>

                <Link
                    href="/admin/books"
                    class="rounded-lg border border-neutral-200 bg-white p-5 text-neutral-950 shadow-sm transition hover:border-neutral-400 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50 dark:hover:border-neutral-600"
                >
                    <h2 class="text-lg font-semibold">Gerir livros</h2>
                    <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-400">Upload capa, link Hotmart, destaque.</p>
                </Link>
            </section>
        </div>
    </AppLayout>
</template>
