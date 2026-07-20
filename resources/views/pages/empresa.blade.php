@extends('layouts.site')

@section('title', 'Empresa — InfoSuportes')

@section('content')
  <!-- Hero -->
  <section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container-x" style="position: relative; z-index: 2; padding-top: 88px; padding-bottom: 104px;">
      <p class="eyebrow" style="color: var(--green-400);">Quem somos</p>
      <h1 class="hero-h1" style="font-size: 52px; line-height: 1.08; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0; max-width: 720px;">
        Especialistas em manter empresas <span style="color: var(--blue-300);">no ar</span>
      </h1>
      <p class="lead" style="color: var(--gray-300); max-width: 620px; margin: 22px 0 0;">
        Somos um time técnico de Salvador dedicado a infraestrutura, redes e segurança. Tratamos a TI dos nossos clientes como se fosse a nossa.
      </p>
    </div>
  </section>

  <!-- Stats -->
  <section class="section" style="padding-bottom: 40px;">
    <div class="container-x">
      <div class="grid-4" style="text-align: center;">
        @foreach ([
          ['+120', 'clientes atendidos'],
          ['99,9%', 'uptime médio'],
          ['24/7', 'monitoramento'],
          ['+10', 'anos de estrada'],
        ] as [$num, $label])
          <div class="card">
            <p style="font-size: 40px; font-weight: 800; letter-spacing: -0.02em; color: var(--blue-500); margin: 0 0 6px;">{{ $num }}</p>
            <p style="color: var(--text-muted); font-size: 15px; margin: 0;">{{ $label }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Story -->
  <section class="section">
    <div class="container-x">
      <div class="grid-2" style="align-items: center; gap: 56px;">
        <div>
          <p class="eyebrow">Nossa história</p>
          <h2 class="section-title" style="margin-bottom: 20px;">Nascemos para resolver o que trava o seu negócio</h2>
          <p style="color: var(--text-body); font-size: 16px; line-height: 1.7; margin: 0 0 16px;">
            A InfoSuportes começou atendendo pequenas empresas de Salvador que não podiam depender de improviso na tecnologia. Com o tempo, viramos o time de TI de referência de dezenas de operações — de escritórios a indústrias.
          </p>
          <p style="color: var(--text-body); font-size: 16px; line-height: 1.7; margin: 0;">
            Hoje unimos infraestrutura Microsoft, redes MikroTik e segurança Fortinet num serviço gerenciado que previne problemas em vez de apenas apagar incêndios.
          </p>
        </div>
        <div style="border-radius: var(--radius-2xl); overflow: hidden; min-height: 340px; background: linear-gradient(150deg, var(--blue-500) 0%, var(--blue-700) 60%, var(--blue-900) 100%); position: relative;">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.16;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center;">
            <svg style="width: 96px; height: 96px; color: rgba(255,255,255,0.9);" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2"/><rect width="20" height="8" x="2" y="14" rx="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Values -->
  <section class="section" style="background: var(--bg-subtle);">
    <div class="container-x">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 56px;">
        <p class="eyebrow">O que nos guia</p>
        <h2 class="section-title">Nossos valores</h2>
      </div>
      <div class="grid-3">
        @foreach ([
          ['Proatividade', 'Preferimos evitar o problema a corrigi-lo. Monitoramos e agimos antes que o usuário perceba.', 'M13 2 3 14h9l-1 8 10-12h-9l1-8z'],
          ['Transparência', 'SLA claro, relatórios honestos e comunicação direta. Sem letras miúdas.', 'M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'],
          ['Compromisso', 'Tratamos cada incidente como se o negócio fosse nosso. Porque a sua continuidade é a nossa reputação.', 'M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z'],
        ] as [$title, $desc, $icon])
          <div class="card">
            <span class="icon-badge" style="background: var(--brand-soft); color: var(--blue-500); margin-bottom: 18px;">
              <svg style="width: 26px; height: 26px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $icon }}"/></svg>
            </span>
            <h3 style="font-size: 20px; font-weight: 700; color: var(--text-strong); margin: 0 0 10px;">{{ $title }}</h3>
            <p style="color: var(--text-body); font-size: 15px; line-height: 1.6; margin: 0;">{{ $desc }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Location / CTA -->
  <section style="background: var(--grad-cta); padding: 72px 0;">
    <div class="container-x" style="text-align: center;">
      <p style="display: inline-flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.85); font-weight: 600; font-size: 15px; margin: 0 0 14px;">
        <svg style="width: 18px; height: 18px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
        Salvador, Bahia — Brasil
      </p>
      <h2 style="font-size: 34px; font-weight: 800; letter-spacing: -0.02em; color: #fff; margin: 0 0 14px;">Vamos conversar sobre a sua TI?</h2>
      <p style="color: rgba(255,255,255,0.85); font-size: 18px; margin: 0 auto 32px; max-width: 560px;">Conte pra gente o seu cenário. O diagnóstico inicial é gratuito e sem compromisso.</p>
      <a href="{{ route('contato') }}" class="btn btn-primary">Falar com a InfoSuportes</a>
    </div>
  </section>
@endsection
