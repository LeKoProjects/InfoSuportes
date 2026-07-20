@extends('layouts.site')

@section('title', 'Serviços — InfoSuportes')

@section('content')
  <!-- Hero -->
  <section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container-x" style="position: relative; z-index: 2; padding-top: 88px; padding-bottom: 104px;">
      <p class="eyebrow" style="color: var(--green-400);">Serviços gerenciados</p>
      <h1 class="hero-h1" style="font-size: 52px; line-height: 1.08; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0; max-width: 720px;">
        Sua TI cuidada de ponta a ponta, <span style="color: var(--blue-300);">todos os dias</span>
      </h1>
      <p class="lead" style="color: var(--gray-300); max-width: 620px; margin: 22px 0 0;">
        Monitoramento, manutenção e suporte contínuos para que sua equipe foque no negócio enquanto a tecnologia simplesmente funciona.
      </p>
      <div style="margin-top: 36px; display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="{{ route('contato') }}" class="btn btn-primary">Falar com especialista</a>
        <a href="#planos" class="btn btn-outline">Ver planos</a>
      </div>
    </div>
  </section>

  <!-- Service grid -->
  <section class="section">
    <div class="container-x">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 56px;">
        <p class="eyebrow">O que fazemos por você</p>
        <h2 class="section-title">Um time de TI dedicado, sem custo de folha</h2>
      </div>

      <div class="grid-3">
        @foreach ([
          ['Monitoramento 24/7', 'Acompanhamento proativo de servidores, links e serviços críticos, com alertas antes que o problema chegue ao usuário.', 'M22 12h-4l-3 9L9 3l-3 9H2'],
          ['Backup e Disaster Recovery', 'Rotinas automatizadas, testes de restauração e plano de recuperação para nunca perder dados importantes.', 'M21 12a9 9 0 1 1-6.219-8.56'],
          ['Helpdesk e suporte remoto', 'Atendimento ágil por chamado, telefone ou acesso remoto, com SLA definido para cada prioridade.', 'M14 9a2 2 0 0 1-2 2H6l-4 4V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2z'],
          ['Consultoria para PMEs', 'Planejamento de infraestrutura, migrações e roadmap de tecnologia alinhados ao momento da sua empresa.', 'M12 20h9 M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z'],
          ['Cloud e Microsoft 365', 'Implantação e gestão de e-mail corporativo, Teams, SharePoint e ambientes em nuvem híbrida.', 'M17.5 19a4.5 4.5 0 1 0 0-9h-1.8A7 7 0 1 0 4 15.2'],
          ['Manutenção preventiva', 'Atualizações, hardening e checagens periódicas que reduzem falhas e prolongam a vida do parque.', 'M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z'],
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

  <!-- Plans -->
  <section id="planos" class="section" style="background: var(--bg-subtle);">
    <div class="container-x">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 56px;">
        <p class="eyebrow">Planos de suporte</p>
        <h2 class="section-title">Escolha o nível de cuidado ideal</h2>
      </div>

      <div class="grid-3" style="align-items: stretch;">
        @foreach ([
          ['Essencial', 'Para pequenas equipes que precisam de suporte confiável.', ['Suporte remoto em horário comercial', 'Monitoramento básico', 'Backup diário', 'SLA de resposta em 8h'], false],
          ['Profissional', 'O equilíbrio ideal entre proatividade e custo.', ['Suporte remoto e presencial', 'Monitoramento 24/7', 'Backup + testes de restauração', 'SLA de resposta em 4h'], true],
          ['Enterprise', 'Cobertura total para operações que não podem parar.', ['Suporte prioritário 24/7', 'NOC dedicado e SD-WAN', 'DR gerenciado', 'SLA de resposta em 1h'], false],
        ] as [$name, $desc, $features, $highlight])
          <div class="card" style="display: flex; flex-direction: column; {{ $highlight ? 'border: 2px solid var(--blue-500); box-shadow: var(--shadow-brand);' : '' }}">
            @if ($highlight)
              <span style="align-self: flex-start; background: var(--blue-500); color: #fff; font-size: 12px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; padding: 5px 12px; border-radius: var(--radius-full); margin-bottom: 16px;">Mais escolhido</span>
            @endif
            <h3 style="font-size: 22px; font-weight: 800; color: var(--text-strong); margin: 0 0 8px;">{{ $name }}</h3>
            <p style="color: var(--text-body); font-size: 15px; line-height: 1.6; margin: 0 0 22px;">{{ $desc }}</p>
            <ul style="list-style: none; padding: 0; margin: 0 0 28px; display: flex; flex-direction: column; gap: 12px;">
              @foreach ($features as $feature)
                <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body); font-size: 15px;">
                  <svg style="width: 18px; height: 18px; color: var(--green-500); flex: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                  {{ $feature }}
                </li>
              @endforeach
            </ul>
            <a href="{{ route('contato') }}" class="btn {{ $highlight ? 'btn-dark' : 'btn-primary' }}" style="margin-top: auto; justify-content: center;">Pedir proposta</a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
