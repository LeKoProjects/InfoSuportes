<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import AppLayout from '@/layouts/AppLayout.vue';
import type { BreadcrumbItem } from '@/types';
import { Head, router, useForm } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

interface CategoryItem {
    id: number;
    name: string;
}

interface BookItem {
    id: number;
    category_id: number;
    title: string;
    author: null | string;
    price: null | string;
    description: null | string;
    hotmart_url: string;
    cover_image_url: null | string;
    is_featured: boolean;
    is_published: boolean;
    sort_order: number;
    clicks: number;
    category: CategoryItem;
}

const props = defineProps<{
    books: BookItem[];
    categories: CategoryItem[];
}>();

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Painel', href: '/dashboard' },
    { title: 'Livros', href: '/admin/books' },
];

const panelClass = 'rounded-lg border border-neutral-200 bg-white p-6 text-neutral-950 shadow-sm dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-50';
const labelClass = 'mb-2 block text-sm font-medium text-neutral-600 dark:text-neutral-400';
const fieldClass = 'h-10 w-full rounded-md border border-neutral-300 bg-white px-3 text-sm text-neutral-950 dark:border-neutral-700 dark:bg-neutral-950 dark:text-neutral-50';
const textareaClass = 'min-h-24 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm text-neutral-950 dark:border-neutral-700 dark:bg-neutral-950 dark:text-neutral-50';
const fileFieldClass = 'flex h-10 w-full rounded-md border border-neutral-300 bg-white px-3 py-2 text-sm text-neutral-950 dark:border-neutral-700 dark:bg-neutral-950 dark:text-neutral-50';
const bookCardClass = 'overflow-hidden rounded-lg border border-neutral-200 bg-white shadow-sm dark:border-neutral-800 dark:bg-neutral-950/40';
const mutedTextClass = 'text-sm text-neutral-600 dark:text-neutral-400';

const createForm = useForm({
    category_id: '',
    title: '',
    author: '',
    price: '',
    description: '',
    hotmart_url: '',
    cover_image: null as File | null,
    sort_order: 0,
    clicks: 0,
    is_featured: false,
    is_published: true,
});

const editBookId = ref<number | null>(null);
const editForm = useForm({
    category_id: '',
    title: '',
    author: '',
    price: '',
    description: '',
    hotmart_url: '',
    cover_image: null as File | null,
    sort_order: 0,
    clicks: 0,
    is_featured: false,
    is_published: true,
});

const editingBook = computed(() => {
    if (!editBookId.value) {
        return null;
    }

    return props.books.find((book) => book.id === editBookId.value) ?? null;
});

const submitCreate = (): void => {
    createForm.post(route('admin.books.store'), {
        forceFormData: true,
        onSuccess: () => {
            createForm.reset();
            createForm.sort_order = 0;
            createForm.is_published = true;
        },
    });
};

const startEdit = (book: BookItem): void => {
    editBookId.value = book.id;
    editForm.category_id = String(book.category_id);
    editForm.title = book.title;
    editForm.author = book.author ?? '';
    editForm.price = book.price ?? '';
    editForm.description = book.description ?? '';
    editForm.hotmart_url = book.hotmart_url;
    editForm.sort_order = book.sort_order;
    editForm.clicks = book.clicks;
    editForm.is_featured = book.is_featured;
    editForm.is_published = book.is_published;
    editForm.cover_image = null;
};

const submitEdit = (): void => {
    if (!editBookId.value) {
        return;
    }

    editForm.put(route('admin.books.update', editBookId.value), {
        forceFormData: true,
        onSuccess: () => {
            editBookId.value = null;
            editForm.reset();
        },
    });
};
</script>

<template>
    <Head title="Livros" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="space-y-6 p-4">
            <section :class="panelClass">
                <h1 class="text-xl font-semibold">Novo livro</h1>
                <form class="mt-4 grid gap-4 md:grid-cols-2" @submit.prevent="submitCreate">
                    <div>
                        <label :class="labelClass">Categoria</label>
                        <select v-model="createForm.category_id" :class="fieldClass">
                            <option disabled value="">Selecione</option>
                            <option v-for="category in props.categories" :key="category.id" :value="String(category.id)">
                                {{ category.name }}
                            </option>
                        </select>
                        <InputError :message="createForm.errors.category_id" class="mt-2" />
                    </div>
                    <div>
                        <label :class="labelClass">Título</label>
                        <Input v-model="createForm.title" />
                        <InputError :message="createForm.errors.title" class="mt-2" />
                    </div>
                    <div>
                        <label :class="labelClass">Autor</label>
                        <Input v-model="createForm.author" />
                    </div>
                    <div>
                        <label :class="labelClass">Preço (texto)</label>
                        <Input v-model="createForm.price" placeholder="R$ 79,90" />
                    </div>
                    <div class="md:col-span-2">
                        <label :class="labelClass">Link Hotmart</label>
                        <Input v-model="createForm.hotmart_url" />
                        <InputError :message="createForm.errors.hotmart_url" class="mt-2" />
                    </div>
                    <div class="md:col-span-2">
                        <label :class="labelClass">Descrição curta</label>
                        <textarea v-model="createForm.description" :class="textareaClass" />
                    </div>
                    <div>
                        <label :class="labelClass">Ordem</label>
                        <Input v-model="createForm.sort_order" type="number" min="0" />
                    </div>
                    <div>
                        <label :class="labelClass">Clicks</label>
                        <Input v-model="createForm.clicks" type="number" min="0" />
                    </div>
                    <div>
                        <label :class="labelClass">Capa</label>
                        <input
                            type="file"
                            accept=".jpg,.jpeg,.png,.webp"
                            :class="fileFieldClass"
                            @change="createForm.cover_image = ($event.target as HTMLInputElement).files?.[0] ?? null"
                        />
                        <InputError :message="createForm.errors.cover_image" class="mt-2" />
                    </div>
                    <div class="flex gap-6 md:col-span-2">
                        <label class="flex items-center gap-2 text-sm">
                            <input v-model="createForm.is_featured" type="checkbox" class="h-4 w-4" />
                            Destaque carrossel
                        </label>
                        <label class="flex items-center gap-2 text-sm">
                            <input v-model="createForm.is_published" type="checkbox" class="h-4 w-4" />
                            Publicado
                        </label>
                    </div>
                    <div class="md:col-span-2">
                        <Button type="submit" :disabled="createForm.processing">Salvar livro</Button>
                    </div>
                </form>
            </section>

            <section :class="panelClass">
                <h2 class="text-xl font-semibold">Livros cadastrados</h2>
                <div class="mt-4 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    <article v-for="book in props.books" :key="book.id" :class="bookCardClass">
                        <img :src="book.cover_image_url ?? ''" :alt="book.title" class="h-52 w-full object-cover" />
                        <div class="space-y-2 p-4">
                            <p :class="mutedTextClass">{{ book.category.name }}</p>
                            <h3 class="text-lg font-semibold">{{ book.title }}</h3>
                            <p class="line-clamp-2 text-sm text-neutral-600 dark:text-neutral-400">{{ book.description }}</p>
                            <p :class="mutedTextClass">Clicks: {{ book.clicks }}</p>
                            <div class="flex gap-2 pt-2">
                                <Button type="button" variant="secondary" @click="startEdit(book)">Editar</Button>
                                <Button type="button" variant="destructive" @click="router.delete(route('admin.books.destroy', book.id))"
                                    >Excluir</Button
                                >
                                <a
                                    :href="book.hotmart_url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex h-9 items-center rounded-md border border-neutral-300 px-3 text-sm text-neutral-700 dark:border-neutral-700 dark:text-neutral-200"
                                >
                                    Link
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section v-if="editingBook" :class="panelClass">
                <h2 class="text-xl font-semibold">Editar livro: {{ editingBook.title }}</h2>
                <form class="mt-4 grid gap-4 md:grid-cols-2" @submit.prevent="submitEdit">
                    <div>
                        <label :class="labelClass">Categoria</label>
                        <select v-model="editForm.category_id" :class="fieldClass">
                            <option v-for="category in props.categories" :key="category.id" :value="String(category.id)">
                                {{ category.name }}
                            </option>
                        </select>
                        <InputError :message="editForm.errors.category_id" class="mt-2" />
                    </div>
                    <div>
                        <label :class="labelClass">Título</label>
                        <Input v-model="editForm.title" />
                        <InputError :message="editForm.errors.title" class="mt-2" />
                    </div>
                    <div>
                        <label :class="labelClass">Autor</label>
                        <Input v-model="editForm.author" />
                    </div>
                    <div>
                        <label :class="labelClass">Preço (texto)</label>
                        <Input v-model="editForm.price" />
                    </div>
                    <div class="md:col-span-2">
                        <label :class="labelClass">Link Hotmart</label>
                        <Input v-model="editForm.hotmart_url" />
                        <InputError :message="editForm.errors.hotmart_url" class="mt-2" />
                    </div>
                    <div class="md:col-span-2">
                        <label :class="labelClass">Descrição curta</label>
                        <textarea v-model="editForm.description" :class="textareaClass" />
                    </div>
                    <div>
                        <label :class="labelClass">Ordem</label>
                        <Input v-model="editForm.sort_order" type="number" min="0" />
                    </div>
                    <div>
                        <label :class="labelClass">Clicks</label>
                        <Input v-model="editForm.clicks" type="number" min="0" />
                    </div>
                    <div>
                        <label :class="labelClass">Trocar capa</label>
                        <input
                            type="file"
                            accept=".jpg,.jpeg,.png,.webp"
                            :class="fileFieldClass"
                            @change="editForm.cover_image = ($event.target as HTMLInputElement).files?.[0] ?? null"
                        />
                        <InputError :message="editForm.errors.cover_image" class="mt-2" />
                    </div>
                    <div class="flex gap-6 md:col-span-2">
                        <label class="flex items-center gap-2 text-sm">
                            <input v-model="editForm.is_featured" type="checkbox" class="h-4 w-4" />
                            Destaque carrossel
                        </label>
                        <label class="flex items-center gap-2 text-sm">
                            <input v-model="editForm.is_published" type="checkbox" class="h-4 w-4" />
                            Publicado
                        </label>
                    </div>
                    <div class="flex gap-2 md:col-span-2">
                        <Button type="submit" :disabled="editForm.processing">Atualizar</Button>
                        <Button type="button" variant="outline" @click="editBookId = null">Cancelar</Button>
                    </div>
                </form>
            </section>
        </div>
    </AppLayout>
</template>
