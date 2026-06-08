@extends('layouts.app')

@section('title', 'E-TI SOLUTI - Suporte Especializado em Infraestrutura, Redes e Segurança')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-50 to-white py-20 lg:py-32 overflow-hidden">
    <!-- Background decorativo -->
    <div class="absolute top-0 right-0 w-1/2 h-full opacity-5">
        <svg viewBox="0 0 400 400" class="w-full h-full">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="400" height="400" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <!-- Conteúdo à esquerda -->
            <div data-aos="fade-right">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 bg-primary-50 text-primary-600 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Certificados Microsoft, MikroTik e Fortinet</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Suporte de TI que <span class="text-primary-500">Escala</span> com seu Negócio
                </h1>

                <!-- Subheadline -->
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Infraestrutura Microsoft, Redes MikroTik e Segurança Fortinet para empresas que não podem parar. Suporte 24/7 com SLA garantido.
                </p>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contato" class="inline-flex items-center justify-center bg-primary-500 text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-600 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Agendar Diagnóstico Gratuito
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="#cases" class="inline-flex items-center justify-center border-2 border-primary-500 text-primary-500 px-8 py-4 rounded-lg font-semibold hover:bg-primary-500 hover:text-white transition-all">
                        Ver Cases de Sucesso
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-gray-200">
                    <div>
                        <div class="text-3xl font-bold text-primary-500">150+</div>
                        <div class="text-sm text-gray-600 mt-1">Empresas Atendidas</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-500">99.9%</div>
                        <div class="text-sm text-gray-600 mt-1">SLA de Uptime</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-500">24/7</div>
                        <div class="text-sm text-gray-600 mt-1">Suporte Técnico</div>
                    </div>
                </div>
            </div>

            <!-- Imagem/Ilustração à direita -->
            <div class="hidden lg:block" data-aos="fade-left">
                <div class="relative">
                    <!-- Placeholder para imagem técnica -->
                    <div class="bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl p-8 shadow-2xl">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 space-y-4">
                            <!-- Simula dashboard/monitoramento -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                                    <span class="text-white font-semibold">Sistema Operacional</span>
                                </div>
                                <span class="text-green-400 text-sm">Online</span>
                            </div>
                            <div class="h-32 bg-white/20 rounded-lg flex items-end p-4 space-x-2">
                                <div class="w-1/6 bg-white/60 rounded" style="height: 40%"></div>
                                <div class="w-1/6 bg-white/60 rounded" style="height: 60%"></div>
                                <div class="w-1/6 bg-white/60 rounded" style="height: 45%"></div>
                                <div class="w-1/6 bg-white/60 rounded" style="height: 80%"></div>
                                <div class="w-1/6 bg-white/60 rounded" style="height: 55%"></div>
                                <div class="w-1/6 bg-white/60 rounded" style="height: 70%"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white/20 rounded-lg p-4">
                                    <div class="text-white/60 text-xs mb-1">CPU</div>
                                    <div class="text-white text-xl font-bold">32%</div>
                                </div>
                                <div class="bg-white/20 rounded-lg p-4">
                                    <div class="text-white/60 text-xs mb-1">Memória</div>
                                    <div class="text-white text-xl font-bold">48%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Elementos decorativos -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-accent-500 rounded-full opacity-20 blur-2xl"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-action-500 rounded-full opacity-20 blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Indicators / Logos Clientes -->
<section class="py-12 bg-gray-50 border-y border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-gray-500 font-semibold mb-8">Confiado por empresas líderes em diversos setores</p>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60">
            <!-- Placeholder logos - substituir por logos reais -->
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
            <div class="h-12 bg-gray-300 rounded"></div>
        </div>
    </div>
</section>

<!-- Soluções Grid (3 colunas) -->
<section id="solucoes" class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header da seção -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Soluções Completas de TI
            </h2>
            <p class="text-xl text-gray-600">
                Infraestrutura robusta, redes seguras e suporte especializado para manter sua operação funcionando 24/7
            </p>
        </div>

        <!-- Grid de 3 soluções -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- Card 1: Infraestrutura -->
            <div class="bg-white border border-gray-200 rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="0">
                <!-- Ícone -->
                <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                    </svg>
                </div>

                <!-- Título -->
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Infraestrutura Microsoft
                </h3>

                <!-- Descrição -->
                <p class="text-gray-600 mb-6">
                    Active Directory, Windows Server, Hyper-V e administração completa de ambientes corporativos Microsoft.
                </p>

                <!-- Lista de features -->
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Active Directory e GPO</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Windows Server 2019/2022</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Virtualização Hyper-V</span>
                    </li>
                </ul>

                <!-- Link -->
                <a href="#" class="inline-flex items-center text-primary-500 font-semibold hover:text-primary-600 transition-colors">
                    Saiba mais
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Card 2: Redes -->
            <div class="bg-white border border-gray-200 rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-accent-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Redes MikroTik
                </h3>

                <p class="text-gray-600 mb-6">
                    Configuração, gerenciamento e otimização de redes corporativas com equipamentos MikroTik RouterOS.
                </p>

                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">VPN L2TP/IPsec e OpenVPN</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Firewall e QoS</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">Gerenciamento Remoto</span>
                    </li>
                </ul>

                <a href="#" class="inline-flex items-center text-primary-500 font-semibold hover:text-primary-600 transition-colors">
                    Saiba mais
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Card 3: Segurança -->
            <div class="bg-white border border-gray-200 rounded-xl p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-action-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-action-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Segurança Fortinet
                </h3>

                <p class="text-gray-600 mb-6">
                    Proteção avançada com firewalls FortiGate, VPN segura e monitoramento de ameaças em tempo real.
                </p>

                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">FortiGate NGFW</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">IPS/IDS e Antivirus</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-accent-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-gray-700">SSL VPN e SD-WAN</span>
                    </li>
                </ul>

                <a href="#" class="inline-flex items-center text-primary-500 font-semibold hover:text-primary-600 transition-colors">
                    Saiba mais
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Diferenciais -->
<section id="sobre" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Por que Escolher a E-TI SOLUTI?
            </h2>
            <p class="text-xl text-gray-600">
                Experiência comprovada, certificações técnicas e atendimento que faz a diferença
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">SLA Garantido</h4>
                <p class="text-gray-600">99.9% de uptime com suporte 24/7 e resposta em até 30 minutos</p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Certificações</h4>
                <p class="text-gray-600">Técnicos certificados Microsoft, MikroTik e Fortinet</p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-action-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-action-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Resposta Rápida</h4>
                <p class="text-gray-600">Atendimento em até 30 minutos para emergências críticas</p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-2">Experiência</h4>
                <p class="text-gray-600">Mais de 10 anos atendendo empresas de pequeno a grande porte</p>
            </div>

        </div>
    </div>
</section>

<!-- Cases de Sucesso -->
<section id="cases" class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Histórias de Sucesso
            </h2>
            <p class="text-xl text-gray-600">
                Veja como ajudamos empresas a otimizar sua infraestrutura de TI
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Case 1 -->
            <div class="bg-gray-50 rounded-xl p-8 border border-gray-200" data-aos="fade-up">
                <div class="flex items-start mb-6">
                    <div class="w-16 h-16 bg-primary-500 rounded-lg flex items-center justify-center text-white font-bold text-2xl mr-4 flex-shrink-0">
                        C
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900">Clínica Médica</h4>
                        <p class="text-gray-600">Salvador, Bahia</p>
                    </div>
                </div>

                <blockquote class="text-gray-700 italic mb-6">
                    "A E-TI SOLUTI transformou nossa infraestrutura. Antes tínhamos quedas constantes, agora operamos 24/7 sem interrupções. O suporte é excepcional."
                </blockquote>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <div class="text-3xl font-bold text-primary-500">99.9%</div>
                        <div class="text-sm text-gray-600">Uptime alcançado</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-500">60%</div>
                        <div class="text-sm text-gray-600">Redução de custos</div>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center text-primary-500 font-semibold hover:text-primary-600">
                    Ver case completo
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Case 2 -->
            <div class="bg-gray-50 rounded-xl p-8 border border-gray-200" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start mb-6">
                    <div class="w-16 h-16 bg-accent-500 rounded-lg flex items-center justify-center text-white font-bold text-2xl mr-4 flex-shrink-0">
                        E
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-900">Empresa de Logística</h4>
                        <p class="text-gray-600">Lauro de Freitas, BA</p>
                    </div>
                </div>

                <blockquote class="text-gray-700 italic mb-6">
                    "Implementaram nossa rede MikroTik com VPN entre 5 filiais. Agora temos conectividade segura e gerenciamento centralizado."
                </blockquote>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <div class="text-3xl font-bold text-accent-500">5</div>
                        <div class="text-sm text-gray-600">Filiais conectadas</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-accent-500">80%</div>
                        <div class="text-sm text-gray-600">Mais performance</div>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center text-primary-500 font-semibold hover:text-primary-600">
                    Ver case completo
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- CTA Final -->
<section id="contato" class="py-20 bg-gradient-to-br from-primary-600 to-primary-800 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">

            <h2 class="text-3xl lg:text-5xl font-bold mb-6">
                Pronto para Transformar sua Infraestrutura de TI?
            </h2>

            <p class="text-xl text-primary-100 mb-8">
                Agende um diagnóstico gratuito e descubra como podemos otimizar seus sistemas
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center bg-white text-primary-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Agendar Diagnóstico
                </a>
                <a href="tel:+5571999999999" class="inline-flex items-center justify-center border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-primary-600 transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    (71) 99999-9999
                </a>
            </div>

            <p class="text-primary-200 mt-6">
                Ou envie um e-mail para <a href="mailto:contato@E-TI SOLUTI.com.br" class="underline hover:text-white">contato@E-TI SOLUTI.com.br</a>
            </p>

        </div>
    </div>
</section>

@endsection
