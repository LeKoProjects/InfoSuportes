<script setup lang="ts">
interface Props {
    icon: 'code' | 'cloud' | 'database' | 'shield' | 'rocket' | 'zap' | 'network' | 'cpu';
    title: string;
    description: string;
}

defineProps<Props>();

const iconSvg = {
    code: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
        </svg>
    `,
    cloud: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3v-6"/>
        </svg>
    `,
    database: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7m0 0c0 2.21-3.582 4-8 4s-8-1.79-8-4m0 0C4 4.79 7.582 3 12 3s8 1.79 8 4M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4m0 6c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
        </svg>
    `,
    shield: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7.784-4.817a.5.5 0 00-.925-.08l-5.18 10.36a1 1 0 01-1.396.04L7.5 12.5m6-2a4 4 0 11-8 0 4 4 0 018 0z"/>
        </svg>
    `,
    rocket: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </svg>
    `,
    zap: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </svg>
    `,
    network: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
        </svg>
    `,
    cpu: `
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 5h6m-6 8v2m6-2v2m-6 8v2m6-2v2M9 5a2 2 0 002-2m6 0a2 2 0 002 2m0 0a2 2 0 012 2v6a2 2 0 01-2 2h-6a2 2 0 01-2-2V7a2 2 0 012-2"/>
        </svg>
    `,
};
</script>

<template>
    <div class="group rounded-xl border border-[#1e3a5f] bg-[#0f2339] p-6 transition-all hover:border-[#4aaede] hover:shadow-lg hover:shadow-[#4aaede]/20">
        <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-lg bg-gradient-to-br from-[#4aaede]/20 to-[#1a6fb5]/20 text-[#4aaede] transition group-hover:from-[#4aaede]/40 group-hover:to-[#1a6fb5]/40">
            <div v-html="iconSvg[icon]" />
        </div>
        <h4 class="mb-2 text-lg font-semibold transition group-hover:text-[#4aaede]">{{ title }}</h4>
        <p class="text-sm text-slate-400 transition group-hover:text-slate-300">{{ description }}</p>
    </div>
</template>
