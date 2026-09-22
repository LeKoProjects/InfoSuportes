<script setup lang="ts">
const features = [
    {
        icon: 'code',
        title: 'Desenvolvimento Web',
        desc: 'React, Vue, Laravel e mais'
    },
    {
        icon: 'cloud',
        title: 'Cloud & DevOps',
        desc: 'Escalabilidade e automação'
    },
    {
        icon: 'database',
        title: 'Dados & Analytics',
        desc: 'SQL, NoSQL e BI'
    },
    {
        icon: 'shield',
        title: 'Segurança & Compliance',
        desc: 'Proteção de dados e LGPD'
    },
    {
        icon: 'network',
        title: 'Arquitetura de Sistemas',
        desc: 'Microserviços e APIs'
    },
    {
        icon: 'zap',
        title: 'Performance & Otimização',
        desc: 'Eficiência e velocidade'
    },
];

const iconSvg = {
    code: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>',
    cloud: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3v-6"/></svg>',
    database: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7m0 0c0 2.21-3.582 4-8 4s-8-1.79-8-4m0 0C4 4.79 7.582 3 12 3s8 1.79 8 4M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4m0 6c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>',
    shield: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m7.784-4.817a.5.5 0 00-.925-.08l-5.18 10.36a1 1 0 01-1.396.04L7.5 12.5m6-2a4 4 0 11-8 0 4 4 0 018 0z"/></svg>',
    network: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>',
    zap: '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
};
</script>

<template>
    <section id="tecnologias" class="border-t border-[#1e3a5f] py-20">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-4">Tecnologias & Tópicos</h3>
                <p class="text-slate-400 text-lg">Conheça os temas cobertos na nossa plataforma de educação tecnológica</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    v-for="feature in features"
                    :key="feature.title"
                    class="group relative overflow-hidden rounded-xl border border-[#1e3a5f] bg-[#0f2339] p-6 transition-all hover:border-[#4aaede]"
                >
                    <!-- Gradient background on hover -->
                    <div class="absolute inset-0 bg-gradient-to-br from-[#4aaede]/5 to-transparent opacity-0 transition group-hover:opacity-100"></div>

                    <!-- Content -->
                    <div class="relative">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-gradient-to-br from-[#4aaede]/30 to-[#1a6fb5]/30 text-[#4aaede] transition group-hover:from-[#4aaede]/50 group-hover:to-[#1a6fb5]/50">
                            <div v-html="iconSvg[feature.icon as keyof typeof iconSvg]" />
                        </div>
                        <h4 class="text-lg font-semibold mb-2 group-hover:text-[#4aaede] transition">{{ feature.title }}</h4>
                        <p class="text-sm text-slate-400 group-hover:text-slate-300 transition">{{ feature.desc }}</p>
                    </div>

                    <!-- Shine effect on hover -->
                    <div class="absolute top-0 -right-12 h-full w-24 bg-gradient-to-l from-white/10 to-transparent transform -skew-x-12 transition group-hover:right-full group-hover:duration-500"></div>
                </div>
            </div>
        </div>
    </section>
</template>
