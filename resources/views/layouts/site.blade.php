<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'InfoSuportes — Infraestrutura, Redes e Segurança em Salvador')</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|jetbrains-mono:400,500" rel="stylesheet" />

  @verbatim
  <style>
/* InfoSuportes — Design tokens (color, type, spacing, motion) */
:root {
  /* ---- Primary / Azul ---- */
  --blue-50:  #e6f0ff;
  --blue-100: #b3d4ff;
  --blue-200: #80b8ff;
  --blue-300: #4d9cff;
  --blue-400: #1a80ff;
  --blue-500: #0066cc; /* marca principal */
  --blue-600: #0052a3;
  --blue-700: #003d7a;
  --blue-800: #002952;
  --blue-900: #001429;

  /* ---- Accent / Verde ---- */
  --green-50:  #e6f7f0;
  --green-100: #b8ebd6;
  --green-200: #7fdcb6;
  --green-300: #40c892;
  --green-400: #14b67c;
  --green-500: #00a86b; /* verde confiança */
  --green-600: #008c59;
  --green-700: #006b44;
  --green-800: #004d31;
  --green-900: #00301e;

  /* ---- Action / Laranja ---- */
  --orange-50:  #fff1eb;
  --orange-100: #ffd9c7;
  --orange-400: #ff8255;
  --orange-500: #ff6b35;
  --orange-600: #e55a2b;
  --orange-700: #c2461d;

  /* ---- Neutrals / Cinza ---- */
  --white:    #ffffff;
  --gray-50:  #f9fafb;
  --gray-100: #f3f4f6;
  --gray-200: #e5e7eb;
  --gray-300: #d1d5db;
  --gray-400: #9ca3af;
  --gray-500: #6b7280;
  --gray-600: #4b5563;
  --gray-700: #374151;
  --gray-800: #1f2937;
  --gray-900: #111827;
  --gray-950: #030712;

  /* ---- Semantic: status ---- */
  --status-online:   var(--green-500);
  --status-warning:  var(--orange-500);
  --status-critical: #dc2626;
  --status-info:     var(--blue-500);

  /* ---- Semantic: light surfaces ---- */
  --bg-page:        var(--white);
  --bg-subtle:      var(--gray-50);
  --surface-card:   var(--white);
  --surface-muted:  var(--gray-100);
  --border-default: var(--gray-200);
  --border-strong:  var(--gray-300);

  /* ---- Semantic: text ---- */
  --text-strong:  var(--gray-900);
  --text-body:    var(--gray-600);
  --text-muted:   var(--gray-500);
  --text-onbrand: var(--white);
  --text-link:    var(--blue-500);
  --text-link-hover: var(--blue-600);

  /* ---- Semantic: brand actions ---- */
  --brand:          var(--blue-500);
  --brand-hover:    var(--blue-600);
  --brand-soft:     var(--blue-50);
  --brand-soft-fg:  var(--blue-600);
  --accent:         var(--green-500);
  --accent-soft:    var(--green-50);
  --action:         var(--orange-500);
  --action-hover:   var(--orange-600);

  /* ---- Gradients ---- */
  --grad-hero:  linear-gradient(135deg, var(--gray-50), var(--white));
  --grad-brand: linear-gradient(135deg, var(--blue-500), var(--blue-700));
  --grad-cta:   linear-gradient(135deg, var(--blue-600), var(--blue-800));

  /* ---- Typography ---- */
  --font-sans: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
  --font-mono: 'JetBrains Mono', ui-monospace, 'SFMono-Regular', Menlo, monospace;

  /* ---- Radii ---- */
  --radius-sm:   0.375rem;
  --radius-md:   0.5rem;
  --radius-lg:   0.75rem;
  --radius-xl:   1rem;
  --radius-2xl:  1.5rem;
  --radius-full: 9999px;

  /* ---- Shadows ---- */
  --shadow-xs:  0 1px 2px rgba(17, 24, 39, 0.05);
  --shadow-sm:  0 1px 3px rgba(17, 24, 39, 0.08), 0 1px 2px rgba(17, 24, 39, 0.04);
  --shadow-md:  0 4px 6px -1px rgba(17, 24, 39, 0.08), 0 2px 4px -2px rgba(17, 24, 39, 0.05);
  --shadow-lg:  0 10px 15px -3px rgba(17, 24, 39, 0.1), 0 4px 6px -4px rgba(17, 24, 39, 0.05);
  --shadow-xl:  0 20px 25px -5px rgba(17, 24, 39, 0.1), 0 8px 10px -6px rgba(17, 24, 39, 0.06);
  --shadow-2xl: 0 25px 50px -12px rgba(17, 24, 39, 0.25);
  --shadow-brand: 0 10px 20px -6px rgba(0, 102, 204, 0.35);

  --ring-brand: 0 0 0 3px rgba(0, 102, 204, 0.35);

  /* ---- Motion ---- */
  --ease-out:   cubic-bezier(0.16, 1, 0.3, 1);
  --ease-inout: cubic-bezier(0.4, 0, 0.2, 1);
  --dur-fast:   150ms;
  --dur-base:   300ms;
  --dur-slow:   600ms;

  /* ---- Layout ---- */
  --container-max: 1200px;
  --header-height: 5rem;
}

/* Dark theme — mirrors the app's html.dark inversion */
:root.dark,
[data-theme="dark"] {
  --bg-page:        var(--gray-950);
  --bg-subtle:      var(--gray-800);
  --surface-card:   var(--gray-900);
  --surface-muted:  var(--gray-800);
  --border-default: var(--gray-700);
  --border-strong:  var(--gray-600);

  --text-strong:  var(--gray-50);
  --text-body:    var(--gray-300);
  --text-muted:   var(--gray-400);

  --brand-soft:     rgba(0, 102, 204, 0.16);
  --brand-soft-fg:  var(--blue-300);
}

body { margin: 0; background: var(--bg-page); font-family: var(--font-sans); }
a { color: var(--text-link); text-decoration: none; }
a:hover { color: var(--text-link-hover); }
* { box-sizing: border-box; }

/* ---- Shared interactions ---- */
.hero-btn{ transition: transform var(--dur-base) var(--ease-out), background var(--dur-base) var(--ease-out); }
.hero-btn:hover{ transform: translateY(-2px); }
.hero-btn-arrow{ transition: transform var(--dur-base) var(--ease-out); }
.hero-btn:hover .hero-btn-arrow{ transform: translateX(3px); }
.sol-tile{ transition: transform var(--dur-base) var(--ease-out), box-shadow var(--dur-base) var(--ease-out); }
.sol-tile:hover{ transform: translateY(-6px); box-shadow: 0 24px 48px -12px rgba(3,7,18,0.35); }
.sol-link{ transition: gap var(--dur-base) var(--ease-out); }
.sol-tile:hover .sol-link{ gap: 14px; }
.hero-dot{ -webkit-appearance: none; appearance: none; }

/* ---- Header nav ---- */
.nav-link{ color: var(--text-strong); font-weight: 600; font-size: 15px; padding: 26px 0; border-bottom: 3px solid transparent; transition: color var(--dur-base) var(--ease-out), border-color var(--dur-base) var(--ease-out); }
.nav-link:hover{ color: var(--green-600); }
.nav-link.is-active{ color: var(--green-600); border-bottom-color: var(--green-500); }

/* ---- Interior page helpers ---- */
.container-x{ max-width: var(--container-max); margin: 0 auto; padding: 0 24px; }
.eyebrow{ color: var(--green-600); font-weight: 700; font-size: 14px; letter-spacing: 0.1em; text-transform: uppercase; margin: 0 0 16px; }
.section{ padding: 96px 0; }
.section-title{ font-size: 40px; line-height: 1.1; letter-spacing: -0.02em; font-weight: 800; color: var(--text-strong); margin: 0; }
.lead{ font-size: 18px; line-height: 1.6; color: var(--text-body); }
.page-hero{ position: relative; overflow: hidden; background: var(--gray-950); color: #fff; border-bottom-left-radius: 50% 70px; border-bottom-right-radius: 50% 70px; }
.page-hero-bg{ position: absolute; inset: 0; z-index: 0; background: radial-gradient(120% 130% at 78% 15%, rgba(26,128,255,0.28), transparent 55%), radial-gradient(90% 90% at 10% 90%, rgba(0,168,107,0.14), transparent 60%), linear-gradient(120deg,#030712 0%,#08142b 55%,#06264d 100%); }
.card{ background: var(--surface-card); border: 1px solid var(--border-default); border-radius: var(--radius-xl); padding: 32px; box-shadow: var(--shadow-sm); transition: transform var(--dur-base) var(--ease-out), box-shadow var(--dur-base) var(--ease-out); }
.card:hover{ transform: translateY(-4px); box-shadow: var(--shadow-lg); }
.icon-badge{ display: inline-flex; align-items: center; justify-content: center; width: 52px; height: 52px; border-radius: var(--radius-lg); }
.btn{ display: inline-flex; align-items: center; gap: 10px; border-radius: var(--radius-full); padding: 14px 26px; font-weight: 700; font-size: 15px; letter-spacing: 0.02em; cursor: pointer; text-decoration: none; border: 2px solid transparent; transition: transform var(--dur-base) var(--ease-out), background var(--dur-base) var(--ease-out); }
.btn:hover{ transform: translateY(-2px); }
.btn-primary{ background: var(--green-500); color: #fff; border-color: var(--green-500); }
.btn-primary:hover{ color: #fff; }
.btn-outline{ background: transparent; color: #fff; border-color: #fff; }
.btn-outline:hover{ color: #fff; }
.btn-dark{ background: var(--blue-600); color: #fff; border-color: var(--blue-600); }
.btn-dark:hover{ color: #fff; }
.grid-3{ display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
.grid-2{ display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px; }
.grid-4{ display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
.field-label{ display: block; font-size: 14px; font-weight: 600; color: var(--text-strong); margin: 0 0 8px; }
.field{ width: 100%; border: 1px solid var(--border-default); border-radius: var(--radius-md); padding: 13px 15px; font-family: var(--font-sans); font-size: 15px; color: var(--text-strong); background: var(--surface-card); outline: none; transition: border-color var(--dur-base) var(--ease-out), box-shadow var(--dur-base) var(--ease-out); }
.field:focus{ border-color: var(--blue-500); box-shadow: var(--ring-brand); }

/* ---- Botão flutuante WhatsApp ---- */
.wa-float{ position: fixed; right: 24px; bottom: 24px; z-index: 60; width: 58px; height: 58px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: #25d366; color: #fff; box-shadow: 0 10px 24px -8px rgba(37,211,102,0.5), 0 3px 8px rgba(3,7,18,0.16); transition: transform var(--dur-base) var(--ease-out), box-shadow var(--dur-base) var(--ease-out); }
.wa-float:hover{ color: #fff; transform: translateY(-3px); box-shadow: 0 16px 32px -8px rgba(37,211,102,0.55), 0 5px 12px rgba(3,7,18,0.2); }
.wa-float:focus-visible{ outline: none; box-shadow: 0 0 0 4px rgba(37,211,102,0.35), 0 10px 24px -8px rgba(37,211,102,0.5); }
.wa-float svg{ width: 30px; height: 30px; display: block; position: relative; z-index: 1; }
.wa-float-label{ position: absolute; right: calc(100% + 12px); top: 50%; transform: translateY(-50%); padding: 8px 14px; border-radius: var(--radius-full); background: var(--gray-900); color: #fff; font-weight: 600; font-size: 13.5px; letter-spacing: 0.01em; white-space: nowrap; box-shadow: var(--shadow-sm); opacity: 0; visibility: hidden; transition: opacity var(--dur-base) var(--ease-out); pointer-events: none; }
.wa-float:hover .wa-float-label, .wa-float:focus-visible .wa-float-label{ opacity: 1; visibility: visible; }
.wa-float::after{ content: ""; position: absolute; inset: 0; border-radius: 50%; background: #25d366; opacity: 0.45; animation: waPulse 2.6s var(--ease-out) infinite; pointer-events: none; z-index: -1; }
@keyframes waPulse{ 0%{ transform: scale(1); opacity: 0.45; } 70%{ transform: scale(1.5); opacity: 0; } 100%{ transform: scale(1.5); opacity: 0; } }
@media (prefers-reduced-motion: reduce){
  .wa-float, .wa-float-label{ transition: none; }
  .wa-float:hover{ transform: none; }
  .wa-float::after{ animation: none; opacity: 0; }
}

/* ---- Responsive ---- */
@media (max-width: 900px){
  .sol-grid{ grid-template-columns: 1fr !important; }
  .footer-grid{ grid-template-columns: 1fr !important; gap: 32px !important; }
  .grid-3, .grid-2, .grid-4{ grid-template-columns: 1fr !important; }
}
@media (max-width: 640px){
  .hero-h1{ font-size: 34px !important; }
  .section-title{ font-size: 30px !important; }
  .util-bar{ display: none !important; }
  .main-nav{ display: none !important; }
  .section{ padding: 64px 0 !important; }
  .wa-float{ right: 16px; bottom: 16px; }
  .wa-float-label{ display: none; }
}
  </style>
  @endverbatim

  @stack('head')
</head>
<body>
<div style="font-family: var(--font-sans); color: var(--text-strong); background: var(--bg-page);">

  @php
    $nav = [
      ['label' => 'Soluções', 'route' => 'solucoes'],
      ['label' => 'Serviços', 'route' => 'servicos'],
      ['label' => 'Suporte',  'route' => 'suporte'],
      ['label' => 'Empresa',  'route' => 'empresa'],
      ['label' => 'Contato',  'route' => 'contato'],
    ];
  @endphp

  <!-- Nav bar -->
  <header style="background: var(--surface-card); position: sticky; top: 0; z-index: 50;">
    <div style="max-width: var(--container-max); margin: 0 auto; padding: 0 24px; height: 72px; display: flex; align-items: center; justify-content: space-between; gap: 24px;">
      <div style="display: flex; align-items: center; gap: 48px;">
        <a href="{{ route('home') }}" style="display: flex; align-items: center;"><img src="/images/infosuporte.png" alt="InfoSuportes" style="height: 50px; width: auto;"></a>
        <nav class="main-nav" style="display: flex; gap: 30px; align-self: stretch; align-items: center;">
          @foreach ($nav as $item)
            <a href="{{ route($item['route']) }}" class="nav-link {{ request()->routeIs($item['route']) ? 'is-active' : '' }}">{{ $item['label'] }}</a>
          @endforeach
        </nav>
      </div>
      <a href="{{ route('suporte') }}" style="display: inline-flex; align-items: center; gap: 8px; color: var(--green-600); font-weight: 700; font-size: 13px; letter-spacing: 0.02em;">
        <svg style="width: 18px; height: 18px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
        SUPORTE DE EMERGÊNCIA 24/7
        <span style="font-size: 15px;">»</span>
      </a>
    </div>
  </header>

  @yield('content')

  <!-- Footer -->
  <footer style="background: var(--gray-900); color: var(--gray-300); padding: 64px 0 32px;">
    <div style="max-width: var(--container-max); margin: 0 auto; padding: 0 24px;">
      <div class="footer-grid" style="display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 48px;">
        <div>
          <svg height="38" style="width:auto;display:block;margin-bottom:20px" viewBox="0 0 340 72" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="InfoSuportes">
  <defs>
    <linearGradient id="isMarkW" x1="8" y1="8" x2="64" y2="64" gradientUnits="userSpaceOnUse">
      <stop stop-color="#1a80ff"></stop>
      <stop offset="1" stop-color="#0066cc"></stop>
    </linearGradient>
  </defs>
  <rect x="8" y="8" width="56" height="56" rx="14" fill="url(#isMarkW)"></rect>
  <g stroke="#ffffff" stroke-width="3.2" stroke-linecap="round" fill="none" transform="translate(8 8) scale(0.5833)">
    <path d="M30 66 a14 14 0 0 1 14 -14" opacity="0.95"></path>
    <path d="M30 66 a26 26 0 0 1 26 -26" opacity="0.6"></path>
    <path d="M30 66 a38 38 0 0 1 38 -38" opacity="0.32"></path>
  </g>
  <circle cx="25.5" cy="46.5" r="4.1" fill="#00a86b"></circle>
  <text x="80" y="46" font-family="Inter, system-ui, sans-serif" font-size="29" font-weight="800" letter-spacing="-0.5" fill="#ffffff">Info<tspan fill="#80b8ff">Suportes</tspan></text>
</svg>
          <p style="color: var(--gray-400); line-height: 1.6; margin: 0; max-width: 300px;">Especialistas em infraestrutura, redes e segurança para empresas de Salvador e região que não podem parar.</p>
          <div style="display: flex; gap: 12px; margin-top: 24px;">
            <span style="display: inline-flex; width: 38px; height: 38px; border-radius: var(--radius-md); background: var(--gray-800); align-items: center; justify-content: center;"><svg style="width: 18px; height: 18px; color: var(--gray-300);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg></span>
            <span style="display: inline-flex; width: 38px; height: 38px; border-radius: var(--radius-md); background: var(--gray-800); align-items: center; justify-content: center;"><svg style="width: 18px; height: 18px; color: var(--gray-300);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg></span>
            <span style="display: inline-flex; width: 38px; height: 38px; border-radius: var(--radius-md); background: var(--gray-800); align-items: center; justify-content: center;"><svg style="width: 18px; height: 18px; color: var(--gray-300);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
          </div>
        </div>
        <div>
          <h4 style="color: #fff; font-weight: 700; font-size: 16px; margin: 0 0 18px;">Navegação</h4>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
            @foreach ($nav as $item)
              <li><a href="{{ route($item['route']) }}" style="color: var(--gray-400); font-size: 14.5px;">{{ $item['label'] }}</a></li>
            @endforeach
          </ul>
        </div>
        <div>
          <h4 style="color: #fff; font-weight: 700; font-size: 16px; margin: 0 0 18px;">Contato</h4>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
            <li style="display: flex; align-items: center; gap: 10px; color: var(--gray-400); font-size: 14.5px;"><svg style="width: 16px; height: 16px; color: var(--green-400);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>(71) 98419-8239</li>
          </ul>
        </div>
      </div>
      <div style="margin-top: 40px; padding-top: 24px; text-align: center; color: var(--gray-500); font-size: 14px;">
        © 2026 InfoSuportes. Todos os direitos reservados.
      </div>
    </div>
  </footer>

  <!-- Botão flutuante WhatsApp -->
  @php
    $whatsappNumber = '5571984198239';
    $whatsappMessage = 'Olá! Vim pelo site da InfoSuportes e gostaria de falar com um especialista.';
  @endphp
  <a class="wa-float"
     href="https://wa.me/{{ $whatsappNumber }}?text={{ rawurlencode($whatsappMessage) }}"
     target="_blank"
     rel="noopener noreferrer"
     aria-label="Falar com a InfoSuportes no WhatsApp">
    <span class="wa-float-label">Fale conosco</span>
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.75-.86-2.02-.96-.27-.1-.47-.15-.67.15-.2.3-.77.96-.94 1.16-.17.2-.35.22-.64.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.65-2.05-.17-.3-.02-.46.13-.6.13-.14.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.67-1.6-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.38-.27.3-1.04 1.01-1.04 2.47s1.06 2.86 1.21 3.06c.15.2 2.1 3.2 5.08 4.49.71.3 1.26.49 1.69.63.71.22 1.36.19 1.87.12.57-.09 1.75-.72 2-1.41.25-.69.25-1.28.17-1.41-.07-.13-.27-.2-.57-.35M12.05 21.8h-.02a9.8 9.8 0 0 1-4.99-1.37l-.36-.21-3.71.97.99-3.62-.23-.37a9.79 9.79 0 0 1-1.5-5.23c0-5.4 4.4-9.8 9.82-9.8 2.62 0 5.08 1.03 6.93 2.88a9.74 9.74 0 0 1 2.87 6.93c0 5.4-4.4 9.8-9.8 9.8M20.5 3.49A11.72 11.72 0 0 0 12.05 0C5.56 0 .28 5.28.28 11.77c0 2.07.54 4.1 1.57 5.88L.18 24l6.5-1.7a11.72 11.72 0 0 0 5.37 1.36h.01c6.49 0 11.77-5.28 11.77-11.77 0-3.15-1.22-6.1-3.44-8.33"/></svg>
  </a>

</div>

@stack('scripts')
</body>
</html>
