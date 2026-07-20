@extends('layouts.site')

@section('title', 'Suporte — InfoSuportes')

@section('content')
  <!-- Hero -->
  <section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container-x" style="position: relative; z-index: 2; padding-top: 88px; padding-bottom: 104px;">
      <p class="eyebrow" style="color: var(--green-400);">Central de suporte</p>
      <h1 class="hero-h1" style="font-size: 52px; line-height: 1.08; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0; max-width: 720px;">
        Ajuda rápida quando você <span style="color: var(--blue-300);">mais precisa</span>
      </h1>
      <p class="lead" style="color: var(--gray-300); max-width: 620px; margin: 22px 0 0;">
        Vários canais de atendimento, SLA transparente e uma linha de emergência 24/7 para quando cada minuto conta.
      </p>
      <div style="margin-top: 36px; display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="tel:+5571999999999" class="btn btn-primary">Ligar para o suporte</a>
        <a href="#faq" class="btn btn-outline">Ver perguntas frequentes</a>
      </div>
    </div>
  </section>

  <!-- Emergency banner -->
  <section style="background: var(--bg-page); margin-top: -40px; position: relative; z-index: 3;">
    <div class="container-x">
      <div style="background: var(--gray-950); border-radius: var(--radius-2xl); padding: 32px 40px; display: flex; align-items: center; justify-content: space-between; gap: 24px; flex-wrap: wrap; box-shadow: var(--shadow-xl);">
        <div style="display: flex; align-items: center; gap: 18px;">
          <span class="icon-badge" style="background: rgba(255,107,53,0.16); color: var(--orange-400); width: 56px; height: 56px;">
            <svg style="width: 28px; height: 28px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>
          </span>
          <div>
            <p style="color: #fff; font-weight: 800; font-size: 20px; margin: 0 0 4px;">Emergência? Estamos no ar 24/7.</p>
            <p style="color: var(--gray-400); font-size: 15px; margin: 0;">Parada crítica, indisponibilidade ou incidente de segurança.</p>
          </div>
        </div>
        <a href="tel:+5571999999999" class="btn" style="background: var(--orange-500); color: #fff; border-color: var(--orange-500);">(71) 99999-9999</a>
      </div>
    </div>
  </section>

  <!-- Channels -->
  <section class="section">
    <div class="container-x">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 56px;">
        <p class="eyebrow">Como falar com a gente</p>
        <h2 class="section-title">Escolha o canal que preferir</h2>
      </div>

      <div class="grid-3">
        @foreach ([
          ['Abrir chamado', 'Registre sua solicitação no portal e acompanhe cada etapa até a resolução.', 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z M14 2v6h6 M16 13H8 M16 17H8'],
          ['Telefone', 'Fale direto com um técnico em horário comercial ou pela linha de emergência 24/7.', 'M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z'],
          ['Acesso remoto', 'Com sua autorização, resolvemos boa parte dos problemas na hora, sem deslocamento.', 'M20 5H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2z M12 19v2 M8 21h8'],
        ] as [$title, $desc, $icon])
          <div class="card" style="text-align: center;">
            <span class="icon-badge" style="background: var(--accent-soft); color: var(--green-600); margin: 0 auto 18px;">
              <svg style="width: 26px; height: 26px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $icon }}"/></svg>
            </span>
            <h3 style="font-size: 20px; font-weight: 700; color: var(--text-strong); margin: 0 0 10px;">{{ $title }}</h3>
            <p style="color: var(--text-body); font-size: 15px; line-height: 1.6; margin: 0;">{{ $desc }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- SLA -->
  <section class="section" style="background: var(--bg-subtle);">
    <div class="container-x" style="max-width: 900px;">
      <div style="text-align: center; margin: 0 auto 48px;">
        <p class="eyebrow">Acordo de nível de serviço</p>
        <h2 class="section-title">SLA claro por prioridade</h2>
      </div>
      <div class="card" style="padding: 8px 8px;">
        <table style="width: 100%; border-collapse: collapse; font-size: 15px;">
          <thead>
            <tr style="text-align: left; color: var(--text-muted); font-size: 13px; letter-spacing: 0.04em; text-transform: uppercase;">
              <th style="padding: 16px 20px;">Prioridade</th>
              <th style="padding: 16px 20px;">Tempo de resposta</th>
              <th style="padding: 16px 20px;">Disponibilidade</th>
            </tr>
          </thead>
          <tbody>
            @foreach ([
              ['Crítica', 'até 1 hora', '24/7', 'var(--status-critical)'],
              ['Alta', 'até 4 horas', '24/7', 'var(--orange-500)'],
              ['Média', 'até 8 horas', 'comercial', 'var(--blue-500)'],
              ['Baixa', 'próximo dia útil', 'comercial', 'var(--green-500)'],
            ] as [$prio, $tempo, $disp, $color])
              <tr style="border-top: 1px solid var(--border-default);">
                <td style="padding: 16px 20px; font-weight: 700; color: var(--text-strong);">
                  <span style="display: inline-flex; align-items: center; gap: 8px;"><span style="width: 9px; height: 9px; border-radius: 50%; background: {{ $color }};"></span>{{ $prio }}</span>
                </td>
                <td style="padding: 16px 20px; color: var(--text-body); font-family: var(--font-mono);">{{ $tempo }}</td>
                <td style="padding: 16px 20px; color: var(--text-body);">{{ $disp }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section">
    <div class="container-x" style="max-width: 820px;">
      <div style="text-align: center; margin: 0 auto 48px;">
        <p class="eyebrow">Dúvidas frequentes</p>
        <h2 class="section-title">Perguntas que sempre recebemos</h2>
      </div>
      <div style="display: flex; flex-direction: column; gap: 14px;">
        @foreach ([
          ['Vocês atendem fora de Salvador?', 'Sim. Atendemos presencialmente em Salvador e região metropolitana e, remotamente, empresas de todo o Brasil.'],
          ['Como funciona o suporte de emergência 24/7?', 'Clientes com plano Profissional ou Enterprise têm acesso a uma linha exclusiva para incidentes críticos, com atendimento imediato a qualquer hora.'],
          ['Preciso ter contrato para chamar o suporte?', 'Trabalhamos tanto com contratos de suporte gerenciado quanto com atendimentos avulsos sob demanda. O contrato garante SLA e prioridade.'],
          ['Vocês assumem um ambiente já existente?', 'Sim. Fazemos um diagnóstico inicial, documentamos o ambiente e assumimos a gestão com um plano de melhorias.'],
        ] as [$q, $a])
          <details class="card" style="padding: 0;">
            <summary style="list-style: none; cursor: pointer; padding: 22px 26px; font-weight: 700; color: var(--text-strong); font-size: 16.5px; display: flex; align-items: center; justify-content: space-between; gap: 16px;">
              {{ $q }}
              <svg style="width: 20px; height: 20px; color: var(--green-500); flex: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="M5 12h14"/></svg>
            </summary>
            <p style="padding: 0 26px 24px; color: var(--text-body); font-size: 15.5px; line-height: 1.65; margin: 0;">{{ $a }}</p>
          </details>
        @endforeach
      </div>
    </div>
  </section>
@endsection
