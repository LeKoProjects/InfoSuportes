<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import AppLayout from '@/layouts/AppLayout.vue';
import type { BreadcrumbItem } from '@/types';
import { Head, router, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

interface CategoryItem {
    id: number;
    name: string;
    slug: string;
    sort_order: number;
    books_count: number;
}

const props = defineProps<{
    categories: CategoryItem[];
}>();

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Painel', href: '/dashboard' },
    { title: 'Categorias', href: '/admin/categories' },
];

const panelClass = 'rounded-lg border border-neutral-200 bg-white p-6 text-neutral-950 shadow-sm dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50';
const itemClass = 'rounded-lg border border-neutral-200 bg-white p-4 shadow-sm dark:border-neutral-800 dark:bg-neutral-950/40';
const mutedTextClass = 'text-sm text-neutral-600 dark:text-neutral-400';

const createForm = useForm({
    name: '',
    sort_order: 0,
});

const editId = ref<number | null>(null);
const editForm = useForm({
    name: '',
    sort_order: 0,
});

const submitCreate = (): void => {
    createForm.post(route('admin.categories.store'), {
        onSuccess: () => {
            createForm.reset();
            createForm.sort_order = 0;
        },
    });
};

const startEdit = (category: CategoryItem): void => {
    editId.value = category.id;
    editForm.name = category.name;
    editForm.sort_order = category.sort_order;
};

const submitEdit = (): void => {
    if (!editId.value) {
        return;
    }

    editForm.put(route('admin.categories.update', editId.value), {
        onSuccess: () => {
            editId.value = null;
            editForm.reset();
        },
    });
};
</script>

<template>
    <Head title="Categorias" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="space-y-6 p-4">
            <section :class="panelClass">
                <h1 class="text-xl font-semibold">Nova categoria</h1>
                <form class="mt-4 grid gap-4 md:grid-cols-[2fr_1fr_auto]" @submit.prevent="submitCreate">
                    <div>
                        <Input v-model="createForm.name" placeholder="Ex: Marketing Digital" />
                        <InputError :message="createForm.errors.name" class="mt-2" />
                    </div>
                    <div>
                        <Input v-model="createForm.sort_order" type="number" min="0" />
                        <InputError :message="createForm.errors.sort_order" class="mt-2" />
                    </div>
                    <Button type="submit" :disabled="createForm.processing">Salvar</Button>
                </form>
            </section>

            <section :class="panelClass">
                <h2 class="text-xl font-semibold">Categorias cadastradas</h2>
                <p v-if="$page.props.errors.category" class="mt-2 text-sm text-red-600">{{ $page.props.errors.category }}</p>

                <div class="mt-4 space-y-3">
                    <article v-for="category in props.categories" :key="category.id" :class="itemClass">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div>
                                <p class="font-medium">{{ category.name }}</p>
                                <p :class="mutedTextClass">{{ category.books_count }} livros</p>
                            </div>
                            <div class="flex gap-2">
                                <Button type="button" variant="secondary" @click="startEdit(category)">Editar</Button>
                                <Button type="button" variant="destructive" @click="router.delete(route('admin.categories.destroy', category.id))">
                                    Excluir
                                </Button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section v-if="editId" :class="panelClass">
                <h2 class="text-xl font-semibold">Editar categoria</h2>
                <form class="mt-4 grid gap-4 md:grid-cols-[2fr_1fr_auto]" @submit.prevent="submitEdit">
                    <div>
                        <Input v-model="editForm.name" />
                        <InputError :message="editForm.errors.name" class="mt-2" />
                    </div>
                    <div>
                        <Input v-model="editForm.sort_order" type="number" min="0" />
                        <InputError :message="editForm.errors.sort_order" class="mt-2" />
                    </div>
                    <div class="flex gap-2">
                        <Button type="submit" :disabled="editForm.processing">Atualizar</Button>
                        <Button type="button" variant="outline" @click="editId = null">Cancelar</Button>
                    </div>
                </form>
            </section>
        </div>
    </AppLayout>
</template>
