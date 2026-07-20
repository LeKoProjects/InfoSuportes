@extends('layouts.site')

@section('title', 'Soluções — InfoSuportes')

@section('content')
  <!-- Hero -->
  <section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container-x" style="position: relative; z-index: 2; padding-top: 88px; padding-bottom: 104px;">
      <p class="eyebrow" style="color: var(--green-400);">Nossas soluções</p>
      <h1 class="hero-h1" style="font-size: 52px; line-height: 1.08; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0; max-width: 720px;">
        Tecnologia de ponta para uma operação <span style="color: var(--blue-300);">sem interrupções</span>
      </h1>
      <p class="lead" style="color: var(--gray-300); max-width: 620px; margin: 22px 0 0;">
        Três pilares que sustentam a infraestrutura de TI da sua empresa: servidores, redes e segurança — projetados, implantados e monitorados por especialistas.
      </p>
      <div style="margin-top: 36px; display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="{{ route('contato') }}" class="btn btn-primary">Solicitar diagnóstico</a>
        <a href="{{ route('servicos') }}" class="btn btn-outline">Ver serviços</a>
      </div>
    </div>
  </section>

  <!-- Solution pillars -->
  <section class="section">
    <div class="container-x">
      <div style="display: flex; flex-direction: column; gap: 28px;">

        <!-- Microsoft -->
        <div class="card" style="display: grid; grid-template-columns: 64px 1fr; gap: 28px; align-items: start;">
          <span class="icon-badge" style="background: var(--brand-soft); color: var(--blue-500); width: 64px; height: 64px;">
            <svg style="width: 30px; height: 30px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2"/><rect width="20" height="8" x="2" y="14" rx="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
          </span>
          <div>
            <h2 style="font-size: 26px; font-weight: 800; letter-spacing: -0.01em; color: var(--text-strong); margin: 0 0 10px;">Infraestrutura Microsoft</h2>
            <p style="color: var(--text-body); font-size: 16px; line-height: 1.6; margin: 0 0 20px; max-width: 640px;">
              Ambientes corporativos Windows do jeito certo: alta disponibilidade, políticas centralizadas e virtualização eficiente.
            </p>
            <div class="grid-2" style="gap: 12px 32px;">
              @foreach ([
                'Active Directory e Group Policy',
                'Windows Server & Hyper-V',
                'Microsoft 365 e Exchange',
                'Virtualização e alta disponibilidade',
              ] as $feature)
                <div style="display: flex; align-items: center; gap: 10px; color: var(--text-body); font-size: 15px;">
                  <svg style="width: 18px; height: 18px; color: var(--green-500); flex: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                  {{ $feature }}
                </div>
              @endforeach
            </div>
          </div>
        </div>

        <!-- MikroTik -->
        <div class="card" style="display: grid; grid-template-columns: 64px 1fr; gap: 28px; align-items: start;">
          <span class="icon-badge" style="background: var(--accent-soft); color: var(--green-600); width: 64px; height: 64px;">
            <svg style="width: 30px; height: 30px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/></svg>
          </span>
          <div>
            <h2 style="font-size: 26px; font-weight: 800; letter-spacing: -0.01em; color: var(--text-strong); margin: 0 0 10px;">Redes MikroTik</h2>
            <p style="color: var(--text-body); font-size: 16px; line-height: 1.6; margin: 0 0 20px; max-width: 640px;">
              Redes corporativas estáveis e otimizadas com RouterOS, do roteamento avançado ao controle fino de banda.
            </p>
            <div class="grid-2" style="gap: 12px 32px;">
              @foreach ([
                'Roteamento e VLANs corporativas',
                'VPN site-to-site e acesso remoto',
                'Firewall e QoS por prioridade',
                'Balanceamento e failover de links',
              ] as $feature)
                <div style="display: flex; align-items: center; gap: 10px; color: var(--text-body); font-size: 15px;">
                  <svg style="width: 18px; height: 18px; color: var(--green-500); flex: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                  {{ $feature }}
                </div>
              @endforeach
            </div>
          </div>
        </div>

        <!-- Fortinet -->
        <div class="card" style="display: grid; grid-template-columns: 64px 1fr; gap: 28px; align-items: start;">
          <span class="icon-badge" style="background: var(--orange-50); color: var(--orange-600); width: 64px; height: 64px;">
            <svg style="width: 30px; height: 30px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
          </span>
          <div>
            <h2 style="font-size: 26px; font-weight: 800; letter-spacing: -0.01em; color: var(--text-strong); margin: 0 0 10px;">Segurança Fortinet</h2>
            <p style="color: var(--text-body); font-size: 16px; line-height: 1.6; margin: 0 0 20px; max-width: 640px;">
              Proteção de perímetro e continuidade com firewalls FortiGate e monitoramento contínuo de ameaças.
            </p>
            <div class="grid-2" style="gap: 12px 32px;">
              @foreach ([
                'Firewall FortiGate e IPS/IDS',
                'SSL VPN e acesso Zero Trust',
                'SD-WAN e otimização de tráfego',
                'Monitoramento de ameaças 24/7',
              ] as $feature)
                <div style="display: flex; align-items: center; gap: 10px; color: var(--text-body); font-size: 15px;">
                  <svg style="width: 18px; height: 18px; color: var(--green-500); flex: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                  {{ $feature }}
                </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA band -->
  <section style="background: var(--grad-cta); padding: 72px 0;">
    <div class="container-x" style="text-align: center;">
      <h2 style="font-size: 34px; font-weight: 800; letter-spacing: -0.02em; color: #fff; margin: 0 0 14px;">Não sabe por onde começar?</h2>
      <p style="color: rgba(255,255,255,0.85); font-size: 18px; margin: 0 auto 32px; max-width: 560px;">Fazemos um diagnóstico gratuito da sua infraestrutura e mostramos onde estão os riscos e as oportunidades.</p>
      <a href="{{ route('contato') }}" class="btn btn-primary">Agendar diagnóstico gratuito</a>
    </div>
  </section>
@endsection
