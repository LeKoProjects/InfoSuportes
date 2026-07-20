@extends('layouts.site')

@section('title', 'InfoSuportes — Infraestrutura, Redes e Segurança em Salvador')

@section('content')
@verbatim
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
        <a href="/solucoes" class="sol-tile" style="position: relative; overflow: hidden; border-radius: var(--radius-2xl); min-height: 420px; padding: 40px; display: flex; flex-direction: column; justify-content: flex-end; background: linear-gradient(150deg, var(--blue-400) 0%, var(--blue-600) 55%, var(--blue-700) 100%); text-decoration: none; box-shadow: var(--shadow-lg);">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.18;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <svg style="position: relative; width: 40px; height: 40px; color: #fff; margin-bottom: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>
          <h3 style="position: relative; font-size: 30px; font-weight: 800; letter-spacing: -0.01em; color: #fff; margin: 0 0 10px;">Infraestrutura Microsoft</h3>
          <p style="position: relative; color: rgba(255,255,255,0.85); font-size: 15.5px; line-height: 1.5; margin: 0 0 20px; max-width: 300px;">Active Directory, Windows Server, Hyper-V e administração completa de ambientes corporativos.</p>
          <span class="sol-link" style="position: relative; display: inline-flex; align-items: center; gap: 8px; color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;">SAIBA MAIS <svg style="width: 17px; height: 17px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        </a>

        <!-- Tile 2 — Redes MikroTik (verde) -->
        <a href="/solucoes" class="sol-tile" style="position: relative; overflow: hidden; border-radius: var(--radius-2xl); min-height: 420px; padding: 40px; display: flex; flex-direction: column; justify-content: flex-end; background: linear-gradient(150deg, var(--green-400) 0%, var(--green-600) 55%, var(--green-700) 100%); text-decoration: none; box-shadow: var(--shadow-lg);">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.18;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <svg style="position: relative; width: 40px; height: 40px; color: #fff; margin-bottom: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/></svg>
          <h3 style="position: relative; font-size: 30px; font-weight: 800; letter-spacing: -0.01em; color: #fff; margin: 0 0 10px;">Redes MikroTik</h3>
          <p style="position: relative; color: rgba(255,255,255,0.85); font-size: 15.5px; line-height: 1.5; margin: 0 0 20px; max-width: 300px;">Configuração e otimização de redes corporativas com RouterOS, VPN, firewall e QoS.</p>
          <span class="sol-link" style="position: relative; display: inline-flex; align-items: center; gap: 8px; color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;">SAIBA MAIS <svg style="width: 17px; height: 17px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        </a>

        <!-- Tile 3 — Segurança Fortinet (laranja) -->
        <a href="/solucoes" class="sol-tile" style="position: relative; overflow: hidden; border-radius: var(--radius-2xl); min-height: 420px; padding: 40px; display: flex; flex-direction: column; justify-content: flex-end; background: linear-gradient(150deg, var(--orange-400) 0%, var(--orange-500) 55%, var(--orange-700) 100%); text-decoration: none; box-shadow: var(--shadow-lg);">
          <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.18;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
          <svg style="position: relative; width: 40px; height: 40px; color: #fff; margin-bottom: 16px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
          <h3 style="position: relative; font-size: 30px; font-weight: 800; letter-spacing: -0.01em; color: #fff; margin: 0 0 10px;">Segurança Fortinet</h3>
          <p style="position: relative; color: rgba(255,255,255,0.9); font-size: 15.5px; line-height: 1.5; margin: 0 0 20px; max-width: 300px;">Firewalls FortiGate, IPS/IDS, SSL VPN e SD-WAN com monitoramento de ameaças 24/7.</p>
          <span class="sol-link" style="position: relative; display: inline-flex; align-items: center; gap: 8px; color: #fff; font-weight: 700; font-size: 14px; letter-spacing: 0.02em;">SAIBA MAIS <svg style="width: 17px; height: 17px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        </a>

      </div>
    </div>
  </section>
@endverbatim
@endsection

@push('scripts')
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
@endpush
