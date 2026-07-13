@verbatim
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InfoSuportes — Infraestrutura, Redes e Segurança em Salvador</title>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|jetbrains-mono:400,500" rel="stylesheet" />

  <style>
/* InfoSuportes — Webfonts
   Inter is the product family (loaded from Google Fonts in the live app).
   JetBrains Mono used sparingly for technical/monospace data (IPs, status). */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* InfoSuportes — Color tokens
   Primary = azul corporativo (tecnologia, credibilidade)
   Accent  = verde (soluções, crescimento, "tudo operacional")
   Action  = laranja (CTA de alta urgência, usado com parcimônia)
   Neutrals = cinza/branco (visual limpo, moderno) */

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

  /* ---- Action / Laranja (urgência: emergências, alertas, CTA de pico) ---- */
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

/* InfoSuportes — Typography tokens
   Single family: Inter (used across the live product).
   Corporate, neutral, highly legible at small sizes — right for B2B/tech. */

:root {
  --font-sans: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
  --font-mono: 'JetBrains Mono', ui-monospace, 'SFMono-Regular', Menlo, monospace;

  /* Type scale (1.250 major-third-ish, tuned to the landing page) */
  --text-xs:   0.75rem;  /* 12px — labels, captions */
  --text-sm:   0.875rem; /* 14px — secondary text, metadata */
  --text-base: 1rem;     /* 16px — body */
  --text-lg:   1.25rem;  /* 20px — lead paragraph */
  --text-xl:   1.5rem;   /* 24px — card titles (h3) */
  --text-2xl:  2rem;     /* 32px — section titles (h2) */
  --text-3xl:  2.5rem;   /* 40px — large section titles */
  --text-4xl:  3rem;     /* 48px — hero (h1) */
  --text-5xl:  3.75rem;  /* 60px — hero XL */

  /* Weights */
  --fw-regular:  400; /* @kind font */
  --fw-medium:   500; /* @kind font */
  --fw-semibold: 600; /* @kind font */
  --fw-bold:     700; /* @kind font */
  --fw-extra:    800; /* @kind font */

  /* Line heights */
  --lh-tight:   1.1;   /* @kind font */
  --lh-snug:    1.25;  /* @kind font */
  --lh-normal:  1.5;   /* @kind font */
  --lh-relaxed: 1.65;  /* @kind font */

  /* Letter spacing */
  --ls-tight:  -0.02em; /* @kind font */
  --ls-normal: 0;       /* @kind font */
  --ls-wide:   0.04em;  /* @kind font */
}

/* InfoSuportes — Spacing, radii, shadows, motion
   8px base grid (the landing page works on 4/8px increments). */

:root {
  /* Spacing scale */
  --space-1:  0.25rem; /* 4 */
  --space-2:  0.5rem;  /* 8 */
  --space-3:  0.75rem; /* 12 */
  --space-4:  1rem;    /* 16 */
  --space-5:  1.25rem; /* 20 */
  --space-6:  1.5rem;  /* 24 */
  --space-8:  2rem;    /* 32 */
  --space-10: 2.5rem;  /* 40 */
  --space-12: 3rem;    /* 48 */
  --space-16: 4rem;    /* 64 */
  --space-20: 5rem;    /* 80 — section padding */
  --space-32: 8rem;    /* 128 — large section padding */

  /* Radii — rounded but corporate, never pill-everywhere */
  --radius-sm:   0.375rem; /* 6 — inputs, small chips */
  --radius-md:   0.5rem;   /* 8 — buttons */
  --radius-lg:   0.75rem;  /* 12 — cards */
  --radius-xl:   1rem;     /* 16 — feature panels */
  --radius-2xl:  1.5rem;   /* 24 — hero visual panel */
  --radius-full: 9999px;   /* badges, avatars, status dots */

  /* Shadows — soft, neutral, blue-free; lift on hover */
  --shadow-xs:  0 1px 2px rgba(17, 24, 39, 0.05);
  --shadow-sm:  0 1px 3px rgba(17, 24, 39, 0.08), 0 1px 2px rgba(17, 24, 39, 0.04);
  --shadow-md:  0 4px 6px -1px rgba(17, 24, 39, 0.08), 0 2px 4px -2px rgba(17, 24, 39, 0.05);
  --shadow-lg:  0 10px 15px -3px rgba(17, 24, 39, 0.1), 0 4px 6px -4px rgba(17, 24, 39, 0.05);
  --shadow-xl:  0 20px 25px -5px rgba(17, 24, 39, 0.1), 0 8px 10px -6px rgba(17, 24, 39, 0.06);
  --shadow-2xl: 0 25px 50px -12px rgba(17, 24, 39, 0.25);
  /* Brand-tinted shadow for primary CTAs */
  --shadow-brand: 0 10px 20px -6px rgba(0, 102, 204, 0.35);

  /* Focus ring */
  --ring-brand: 0 0 0 3px rgba(0, 102, 204, 0.35);

  /* Motion */
  --ease-out:   cubic-bezier(0.16, 1, 0.3, 1); /* @kind other */
  --ease-inout: cubic-bezier(0.4, 0, 0.2, 1); /* @kind other */
  --dur-fast:   150ms; /* @kind other */
  --dur-base:   300ms; /* @kind other */
  --dur-slow:   600ms; /* @kind other */

  /* Layout */
  --container-max: 1200px;
  --header-height: 5rem; /* 80px fixed header */
}

/* InfoSuportes Design System — global entry point.
   Consumers link this one file. Keep it @import lines only. */

/* InfoSuportes — Webfonts
   Inter is the product family (loaded from Google Fonts in the live app).
   JetBrains Mono used sparingly for technical/monospace data (IPs, status). */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek-ext */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* cyrillic-ext */

/* cyrillic */

/* greek */

/* vietnamese */

/* latin-ext */

/* latin */

/* InfoSuportes — Color tokens
   Primary = azul corporativo (tecnologia, credibilidade)
   Accent  = verde (soluções, crescimento, "tudo operacional")
   Action  = laranja (CTA de alta urgência, usado com parcimônia)
   Neutrals = cinza/branco (visual limpo, moderno) */

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

  /* ---- Action / Laranja (urgência: emergências, alertas, CTA de pico) ---- */
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

/* InfoSuportes — Typography tokens
   Single family: Inter (used across the live product).
   Corporate, neutral, highly legible at small sizes — right for B2B/tech. */

:root {
  --font-sans: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
  --font-mono: 'JetBrains Mono', ui-monospace, 'SFMono-Regular', Menlo, monospace;

  /* Type scale (1.250 major-third-ish, tuned to the landing page) */
  --text-xs:   0.75rem;  /* 12px — labels, captions */
  --text-sm:   0.875rem; /* 14px — secondary text, metadata */
  --text-base: 1rem;     /* 16px — body */
  --text-lg:   1.25rem;  /* 20px — lead paragraph */
  --text-xl:   1.5rem;   /* 24px — card titles (h3) */
  --text-2xl:  2rem;     /* 32px — section titles (h2) */
  --text-3xl:  2.5rem;   /* 40px — large section titles */
  --text-4xl:  3rem;     /* 48px — hero (h1) */
  --text-5xl:  3.75rem;  /* 60px — hero XL */

  /* Weights */
  --fw-regular:  400; /* @kind font */
  --fw-medium:   500; /* @kind font */
  --fw-semibold: 600; /* @kind font */
  --fw-bold:     700; /* @kind font */
  --fw-extra:    800; /* @kind font */

  /* Line heights */
  --lh-tight:   1.1;   /* @kind font */
  --lh-snug:    1.25;  /* @kind font */
  --lh-normal:  1.5;   /* @kind font */
  --lh-relaxed: 1.65;  /* @kind font */

  /* Letter spacing */
  --ls-tight:  -0.02em; /* @kind font */
  --ls-normal: 0;       /* @kind font */
  --ls-wide:   0.04em;  /* @kind font */
}

/* InfoSuportes — Spacing, radii, shadows, motion
   8px base grid (the landing page works on 4/8px increments). */

:root {
  /* Spacing scale */
  --space-1:  0.25rem; /* 4 */
  --space-2:  0.5rem;  /* 8 */
  --space-3:  0.75rem; /* 12 */
  --space-4:  1rem;    /* 16 */
  --space-5:  1.25rem; /* 20 */
  --space-6:  1.5rem;  /* 24 */
  --space-8:  2rem;    /* 32 */
  --space-10: 2.5rem;  /* 40 */
  --space-12: 3rem;    /* 48 */
  --space-16: 4rem;    /* 64 */
  --space-20: 5rem;    /* 80 — section padding */
  --space-32: 8rem;    /* 128 — large section padding */

  /* Radii — rounded but corporate, never pill-everywhere */
  --radius-sm:   0.375rem; /* 6 — inputs, small chips */
  --radius-md:   0.5rem;   /* 8 — buttons */
  --radius-lg:   0.75rem;  /* 12 — cards */
  --radius-xl:   1rem;     /* 16 — feature panels */
  --radius-2xl:  1.5rem;   /* 24 — hero visual panel */
  --radius-full: 9999px;   /* badges, avatars, status dots */

  /* Shadows — soft, neutral, blue-free; lift on hover */
  --shadow-xs:  0 1px 2px rgba(17, 24, 39, 0.05);
  --shadow-sm:  0 1px 3px rgba(17, 24, 39, 0.08), 0 1px 2px rgba(17, 24, 39, 0.04);
  --shadow-md:  0 4px 6px -1px rgba(17, 24, 39, 0.08), 0 2px 4px -2px rgba(17, 24, 39, 0.05);
  --shadow-lg:  0 10px 15px -3px rgba(17, 24, 39, 0.1), 0 4px 6px -4px rgba(17, 24, 39, 0.05);
  --shadow-xl:  0 20px 25px -5px rgba(17, 24, 39, 0.1), 0 8px 10px -6px rgba(17, 24, 39, 0.06);
  --shadow-2xl: 0 25px 50px -12px rgba(17, 24, 39, 0.25);
  /* Brand-tinted shadow for primary CTAs */
  --shadow-brand: 0 10px 20px -6px rgba(0, 102, 204, 0.35);

  /* Focus ring */
  --ring-brand: 0 0 0 3px rgba(0, 102, 204, 0.35);

  /* Motion */
  --ease-out:   cubic-bezier(0.16, 1, 0.3, 1); /* @kind other */
  --ease-inout: cubic-bezier(0.4, 0, 0.2, 1); /* @kind other */
  --dur-fast:   150ms; /* @kind other */
  --dur-base:   300ms; /* @kind other */
  --dur-slow:   600ms; /* @kind other */

  /* Layout */
  --container-max: 1200px;
  --header-height: 5rem; /* 80px fixed header */
}

    body { margin: 0; background: var(--bg-page); font-family: var(--font-sans); }
    a { color: var(--text-link); text-decoration: none; }
    a:hover { color: var(--text-link-hover); }
    * { box-sizing: border-box; }

/* ---- Interactions & responsive (added on integration) ---- */
.hero-btn{ transition: transform var(--dur-base) var(--ease-out), background var(--dur-base) var(--ease-out); }
.hero-btn:hover{ transform: translateY(-2px); }
.hero-btn-arrow{ transition: transform var(--dur-base) var(--ease-out); }
.hero-btn:hover .hero-btn-arrow{ transform: translateX(3px); }
.sol-tile{ transition: transform var(--dur-base) var(--ease-out), box-shadow var(--dur-base) var(--ease-out); }
.sol-tile:hover{ transform: translateY(-6px); box-shadow: 0 24px 48px -12px rgba(3,7,18,0.35); }
.sol-link{ transition: gap var(--dur-base) var(--ease-out); }
.sol-tile:hover .sol-link{ gap: 14px; }
.hero-dot{ -webkit-appearance: none; appearance: none; }
@media (max-width: 900px){
  .sol-grid{ grid-template-columns: 1fr !important; }
  .footer-grid{ grid-template-columns: 1fr !important; gap: 32px !important; }
}
@media (max-width: 640px){
  .hero-h1{ font-size: 34px !important; }
  .util-bar{ display: none !important; }
  .main-nav{ display: none !important; }
}

  </style>
</head>
<body>
<div style="font-family: var(--font-sans); color: var(--text-strong); background: var(--bg-page);">

  <!-- Top utility bar -->
  <div class="util-bar" style="background: var(--gray-950); color: var(--gray-300);">
    <div style="max-width: var(--container-max); margin: 0 auto; padding: 0 24px; height: 48px; display: flex; align-items: center; justify-content: flex-end; gap: 28px; font-size: 12.5px; font-weight: 600; letter-spacing: 0.02em;">
      <a href="#" style="color: var(--gray-300);">DIAGNÓSTICO GRATUITO</a>
      <span style="color: var(--gray-700);">|</span>
      <a href="#" style="color: var(--gray-300);">ACESSO REMOTO</a>
      <span style="color: var(--gray-700);">|</span>
      <a href="#" style="color: var(--gray-300);">PORTAL DO CLIENTE</a>
      <span style="width: 1px; height: 18px; background: var(--gray-700); margin: 0 4px;"></span>
      <svg style="width: 17px; height: 17px; color: var(--gray-200); cursor: pointer;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <svg style="width: 17px; height: 17px; color: var(--gray-200); cursor: pointer;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
    </div>
  </div>

  <!-- Nav bar -->
  <header style="background: var(--surface-card); border-bottom: 1px solid var(--border-default); position: sticky; top: 0; z-index: 50;">
    <div style="max-width: var(--container-max); margin: 0 auto; padding: 0 24px; height: 72px; display: flex; align-items: center; justify-content: space-between; gap: 24px;">
      <div style="display: flex; align-items: center; gap: 48px;">
        <a href="#" style="display: flex; align-items: center;"><svg height="40" style="width:auto;display:block" viewBox="0 0 340 72" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="InfoSuportes">
  <defs>
    <linearGradient id="isMarkH" x1="8" y1="8" x2="64" y2="64" gradientUnits="userSpaceOnUse">
      <stop stop-color="#0066cc"></stop>
      <stop offset="1" stop-color="#003d7a"></stop>
    </linearGradient>
  </defs>
  <rect x="8" y="8" width="56" height="56" rx="14" fill="url(#isMarkH)"></rect>
  <g stroke="#ffffff" stroke-width="3.2" stroke-linecap="round" fill="none" transform="translate(8 8) scale(0.5833)">
    <path d="M30 66 a14 14 0 0 1 14 -14" opacity="0.95"></path>
    <path d="M30 66 a26 26 0 0 1 26 -26" opacity="0.6"></path>
    <path d="M30 66 a38 38 0 0 1 38 -38" opacity="0.32"></path>
  </g>
  <circle cx="25.5" cy="46.5" r="4.1" fill="#00a86b"></circle>
  <text x="80" y="46" font-family="Inter, system-ui, sans-serif" font-size="29" font-weight="800" letter-spacing="-0.5" fill="#111827">Info<tspan fill="#0066cc">Suportes</tspan></text>
</svg></a>
        <nav class="main-nav" style="display: flex; gap: 30px;">
          <a href="#" style="color: var(--text-strong); font-weight: 600; font-size: 15px;">Soluções</a>
          <a href="#" style="color: var(--text-strong); font-weight: 600; font-size: 15px;">Serviços</a>
          <a href="#" style="color: var(--text-strong); font-weight: 600; font-size: 15px;">Suporte</a>
          <a href="#" style="color: var(--text-strong); font-weight: 600; font-size: 15px;">Empresa</a>
          <a href="#" style="color: var(--text-strong); font-weight: 600; font-size: 15px;">Contato</a>
        </nav>
      </div>
      <a href="#" style="display: inline-flex; align-items: center; gap: 8px; color: var(--green-600); font-weight: 700; font-size: 13px; letter-spacing: 0.02em;">
        <svg style="width: 18px; height: 18px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
        SUPORTE DE EMERGÊNCIA 24/7
        <span style="font-size: 15px;">»</span>
      </a>
    </div>
  </header>

  <!-- Dark hero with carousel + curved base -->
  <section style="position: relative; background: var(--gray-950); overflow: hidden; border-bottom-left-radius: 50% 90px; border-bottom-right-radius: 50% 90px;">
    <!-- background image slot -->
    <div style="position: absolute; inset: 0; z-index: 0;">
      <div style="position:absolute;inset:0;background:radial-gradient(120% 130% at 78% 15%, rgba(26,128,255,0.28), transparent 55%), radial-gradient(90% 90% at 10% 90%, rgba(0,168,107,0.14), transparent 60%), linear-gradient(120deg,#030712 0%,#08142b 55%,#06264d 100%);"></div>
    </div>
    <!-- left-to-right dark scrim -->
    <div style="position: absolute; inset: 0; z-index: 1; pointer-events: none; background: linear-gradient(90deg, rgba(3,7,18,0.96) 0%, rgba(3,7,18,0.88) 42%, rgba(3,7,18,0.35) 72%, rgba(3,7,18,0.15) 100%);"></div>

    <div style="position: relative; z-index: 2; max-width: var(--container-max); margin: 0 auto; padding: 0 24px;">
      <div style="overflow: hidden;">
        <div id="hero-track" style="display: flex; width: 100%; transition: transform var(--dur-slow) var(--ease-out); transform: translateX(0);">

          <!-- Slide 1 -->
          <div style="flex: 0 0 100%; padding: 96px 0 132px;"><div style="max-width: 640px;">
            <p style="display: inline-flex; align-items: center; gap: 8px; color: var(--green-400); font-weight: 700; font-size: 13px; letter-spacing: 0.08em; text-transform: uppercase; margin: 0 0 20px;">
              <svg style="width: 16px; height: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M4.5 10H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-.5"/><path d="M4.5 14H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-.5"/><path d="M6 6h.01"/><path d="M6 18h.01"/><path d="m15.7 13.4-.9-.3"/><path d="m9.2 10.9-.9-.3"/><path d="m10.6 15.7.3-.9"/><path d="m13.6 15.7-.4-1"/><path d="m10.8 9.3-.4-1"/><path d="m8.3 13.6 1-.4"/><path d="m14.7 10.8 1-.4"/><path d="m13.4 8.3-.3.9"/></svg>
              Infraestrutura gerenciada
            </p>
            <h1 class="hero-h1" style="font-size: 56px; line-height: 1.06; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0;">
              Suporte de TI que <span style="color: var(--blue-300);">escala</span> com o seu negócio
            </h1>
            <p style="font-size: 19px; line-height: 1.5; color: var(--gray-300); margin: 24px 0 0; max-width: 560px;">
              Infraestrutura Microsoft, redes MikroTik e segurança Fortinet para empresas que não podem parar. Monitoramento e suporte 24/7, com SLA garantido, em Salvador e região.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 40px;">
              <a href="#solucoes" class="hero-btn" style="display: inline-flex; align-items: center; gap: 14px; border: 2px solid #fff; color: #fff; border-radius: var(--radius-full); padding: 14px 20px 14px 26px; font-weight: 700; font-size: 15px; letter-spacing: 0.02em;">
                SAIBA MAIS
                <span class="hero-btn-arrow" style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; border: 2px solid #fff;"><svg style="width: 16px; height: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
              </a>
              <a href="#contato" class="hero-btn" style="display: inline-flex; align-items: center; gap: 14px; border: 2px solid var(--green-500); background: var(--green-500); color: #fff; border-radius: var(--radius-full); padding: 14px 20px 14px 26px; font-weight: 700; font-size: 15px; letter-spacing: 0.02em;">
                DIAGNÓSTICO GRATUITO
                <span class="hero-btn-arrow" style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; border: 2px solid #fff;"><svg style="width: 16px; height: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
              </a>
            </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div style="flex: 0 0 100%; padding: 96px 0 132px;"><div style="max-width: 640px;">
            <p style="display: inline-flex; align-items: center; gap: 8px; color: var(--green-400); font-weight: 700; font-size: 13px; letter-spacing: 0.08em; text-transform: uppercase; margin: 0 0 20px;">
              <svg style="width: 16px; height: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
              Segurança e continuidade
            </p>
            <h1 class="hero-h1" style="font-size: 56px; line-height: 1.06; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0;">
              Sua operação <span style="color: var(--blue-300);">protegida</span> e sempre no ar
            </h1>
            <p style="font-size: 19px; line-height: 1.5; color: var(--gray-300); margin: 24px 0 0; max-width: 560px;">
              Firewalls FortiGate, VPNs seguras, backups automatizados e monitoramento preventivo. Reduza riscos, evite paradas e mantenha a continuidade do seu negócio.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 40px;">
              <a href="#solucoes" class="hero-btn" style="display: inline-flex; align-items: center; gap: 14px; border: 2px solid #fff; color: #fff; border-radius: var(--radius-full); padding: 14px 20px 14px 26px; font-weight: 700; font-size: 15px; letter-spacing: 0.02em;">
                VER SOLUÇÕES
                <span class="hero-btn-arrow" style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; border: 2px solid #fff;"><svg style="width: 16px; height: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
              </a>
              <a href="#contato" class="hero-btn" style="display: inline-flex; align-items: center; gap: 14px; border: 2px solid var(--green-500); background: var(--green-500); color: #fff; border-radius: var(--radius-full); padding: 14px 20px 14px 26px; font-weight: 700; font-size: 15px; letter-spacing: 0.02em;">
                FALE COM ESPECIALISTA
                <span class="hero-btn-arrow" style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; border: 2px solid #fff;"><svg style="width: 16px; height: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
              </a>
            </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Carousel dots -->
      <div style="position: absolute; bottom: 64px; left: 50%; transform: translateX(-50%); display: flex; gap: 14px; z-index: 3;">
        <button class="hero-dot is-active" data-slide="0" aria-label="Ir para slide 1" style="background: #ffffff; width: 13px; height: 13px; border-radius: 50%; padding: 0; cursor: pointer; border: 2px solid #fff; transition: background var(--dur-base) var(--ease-out);"></button>
          <button class="hero-dot" data-slide="1" aria-label="Ir para slide 2" style="background: transparent; width: 13px; height: 13px; border-radius: 50%; padding: 0; cursor: pointer; border: 2px solid #fff; transition: background var(--dur-base) var(--ease-out);"></button>
      </div>
    </div>
  </section>

  <!-- Solutions block -->
  <section id="solucoes" style="background: var(--bg-page); padding: 96px 0 100px;">
    <div style="max-width: var(--container-max); margin: 0 auto; padding: 0 24px;">
      <div style="text-align: center; max-width: 760px; margin: 0 auto 56px;">
        <p style="color: var(--green-600); font-weight: 700; font-size: 14px; letter-spacing: 0.1em; text-transform: uppercase; margin: 0 0 16px;">Infraestrutura e segurança</p>
        <h2 style="font-size: 44px; line-height: 1.1; letter-spacing: -0.02em; font-weight: 800; color: var(--text-strong); margin: 0;">Fortaleça sua operação com infraestrutura, redes e segurança</h2>
      </div>

      <div class="sol-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px;">

        <!-- Tile 1 — Infraestrutura Microsoft (azul) -->
        <a href="#" class="sol-tile" style="position: relative; overflow: hidden; border-radius: var(--radius-2xl); min-height: 420px; padding: 40px; display: flex; flex-direction: column; justify-content: flex-end; background: linear-gradient(150deg, var(--blue-400) 0%, var(--blue-600) 55%, var(--blue-700) 100%); text-decoration: none; box-shadow: var(--shadow-lg);">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.18;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <svg style="position: relative; width: 40px; height: 40px; color: #fff; margin-bottom: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
          <h3 style="position: relative; font-size: 30px; font-weight: 800; letter-spacing: -0.01em; color: #fff; margin: 0 0 10px;">Infraestrutura Microsoft</h3>
          <p style="position: relative; color: rgba(255,255,255,0.85); font-size: 15.5px; line-height: 1.5; margin: 0 0 20px; max-width: 300px;">Active Directory, Windows Server, Hyper-V e administração completa de ambientes corporativos.</p>
          <span class="sol-link" style="position: relative; display: inline-flex; align-items: center; gap: 8px; color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;">SAIBA MAIS <svg style="width: 17px; height: 17px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        </a>

        <!-- Tile 2 — Redes MikroTik (verde) -->
        <a href="#" class="sol-tile" style="position: relative; overflow: hidden; border-radius: var(--radius-2xl); min-height: 420px; padding: 40px; display: flex; flex-direction: column; justify-content: flex-end; background: linear-gradient(150deg, var(--green-400) 0%, var(--green-600) 55%, var(--green-700) 100%); text-decoration: none; box-shadow: var(--shadow-lg);">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.18;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <svg style="position: relative; width: 40px; height: 40px; color: #fff; margin-bottom: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/></svg>
          <h3 style="position: relative; font-size: 30px; font-weight: 800; letter-spacing: -0.01em; color: #fff; margin: 0 0 10px;">Redes MikroTik</h3>
          <p style="position: relative; color: rgba(255,255,255,0.85); font-size: 15.5px; line-height: 1.5; margin: 0 0 20px; max-width: 300px;">Configuração e otimização de redes corporativas com RouterOS, VPN, firewall e QoS.</p>
          <span class="sol-link" style="position: relative; display: inline-flex; align-items: center; gap: 8px; color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;">SAIBA MAIS <svg style="width: 17px; height: 17px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        </a>

        <!-- Tile 3 — Segurança Fortinet (laranja) -->
        <a href="#" class="sol-tile" style="position: relative; overflow: hidden; border-radius: var(--radius-2xl); min-height: 420px; padding: 40px; display: flex; flex-direction: column; justify-content: flex-end; background: linear-gradient(150deg, var(--orange-400) 0%, var(--orange-500) 55%, var(--orange-700) 100%); text-decoration: none; box-shadow: var(--shadow-lg);">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.18;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <svg style="position: relative; width: 40px; height: 40px; color: #fff; margin-bottom: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
          <h3 style="position: relative; font-size: 30px; font-weight: 800; letter-spacing: -0.01em; color: #fff; margin: 0 0 10px;">Segurança Fortinet</h3>
          <p style="position: relative; color: rgba(255,255,255,0.9); font-size: 15.5px; line-height: 1.5; margin: 0 0 20px; max-width: 300px;">Firewalls FortiGate, IPS/IDS, SSL VPN e SD-WAN com monitoramento de ameaças 24/7.</p>
          <span class="sol-link" style="position: relative; display: inline-flex; align-items: center; gap: 8px; color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;">SAIBA MAIS <svg style="width: 17px; height: 17px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        </a>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contato" style="background: var(--gray-900); color: var(--gray-300); padding: 64px 0 32px;">
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
          <h4 style="color: #fff; font-weight: 700; font-size: 16px; margin: 0 0 18px;">Serviços</h4>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
            <li><a href="#" style="color: var(--gray-400); font-size: 14.5px;">Infraestrutura Microsoft</a></li>
            <li><a href="#" style="color: var(--gray-400); font-size: 14.5px;">Redes MikroTik</a></li>
            <li><a href="#" style="color: var(--gray-400); font-size: 14.5px;">Segurança Fortinet</a></li>
            <li><a href="#" style="color: var(--gray-400); font-size: 14.5px;">Consultoria para PMEs</a></li>
          </ul>
        </div>
        <div>
          <h4 style="color: #fff; font-weight: 700; font-size: 16px; margin: 0 0 18px;">Contato</h4>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
            <li style="display: flex; align-items: center; gap: 10px; color: var(--gray-400); font-size: 14.5px;"><svg style="width: 16px; height: 16px; color: var(--green-400);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>(71) 99999-9999</li>
            <li style="display: flex; align-items: center; gap: 10px; color: var(--gray-400); font-size: 14.5px;"><svg style="width: 16px; height: 16px; color: var(--green-400);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>contato@infosuportes.com.br</li>
            <li style="display: flex; align-items: center; gap: 10px; color: var(--gray-400); font-size: 14.5px;"><svg style="width: 16px; height: 16px; color: var(--green-400);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>Salvador, Bahia — Brasil</li>
          </ul>
        </div>
      </div>
      <div style="border-top: 1px solid var(--gray-800); margin-top: 40px; padding-top: 24px; text-align: center; color: var(--gray-500); font-size: 14px;">
        © 2026 InfoSuportes. Todos os direitos reservados.
      </div>
    </div>
  </footer>

</div>

  <script>

    (function () {
      var track = document.getElementById('hero-track');
      var dots  = Array.prototype.slice.call(document.querySelectorAll('.hero-dot'));
      if (!track || dots.length < 2) return;
      var slide = 0, total = dots.length, timer;
      function render() {
        track.style.transform = 'translateX(-' + (slide * 100) + '%)';
        dots.forEach(function (d, i) { d.style.background = i === slide ? '#ffffff' : 'transparent'; });
      }
      function start() { timer = setInterval(function () { slide = (slide + 1) % total; render(); }, 6500); }
      function go(i) { clearInterval(timer); slide = i; render(); start(); }
      dots.forEach(function (d) {
        d.addEventListener('click', function () { go(parseInt(d.getAttribute('data-slide'), 10)); });
      });
      render(); start();
    })();
  </script>
</body>
</html>
@endverbatim
