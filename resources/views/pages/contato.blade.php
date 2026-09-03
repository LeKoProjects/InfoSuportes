@extends('layouts.site')

@section('title', 'Contato — InfoSuportes')

@section('content')
  <!-- Hero -->
  <section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container-x" style="position: relative; z-index: 2; padding-top: 88px; padding-bottom: 104px;">
      <p class="eyebrow" style="color: var(--green-400);">Fale com a gente</p>
      <h1 class="hero-h1" style="font-size: 52px; line-height: 1.08; letter-spacing: -0.02em; font-weight: 800; color: #fff; margin: 0; max-width: 720px;">
        Vamos resolver a sua TI <span style="color: var(--blue-300);">juntos</span>
      </h1>
      <p class="lead" style="color: var(--gray-300); max-width: 620px; margin: 22px 0 0;">
        Preencha o formulário ou use um dos nossos canais. Respondemos rápido — e o diagnóstico inicial é gratuito.
      </p>
    </div>
  </section>

  <!-- Contact grid -->
  <section class="section">
    <div class="container-x">
      <div class="grid-2" style="grid-template-columns: 1.1fr 0.9fr; gap: 48px; align-items: start;">

        <!-- Form -->
        <div class="card" style="padding: 40px;">
          <h2 style="font-size: 24px; font-weight: 800; color: var(--text-strong); margin: 0 0 24px;">Envie uma mensagem</h2>
          <form>
            <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
              <div>
                <label class="field-label" for="nome">Nome</label>
                <input class="field" id="nome" name="nome" type="text" placeholder="Seu nome" autocomplete="name">
              </div>
              <div>
                <label class="field-label" for="empresa">Empresa</label>
                <input class="field" id="empresa" name="empresa" type="text" placeholder="Nome da empresa" autocomplete="organization">
              </div>
            </div>
            <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
              <div>
                <label class="field-label" for="email">E-mail</label>
                <input class="field" id="email" name="email" type="email" placeholder="voce@empresa.com.br" autocomplete="email">
              </div>
              <div>
                <label class="field-label" for="telefone">Telefone</label>
                <input class="field" id="telefone" name="telefone" type="tel" placeholder="(71) 90000-0000" autocomplete="tel">
              </div>
            </div>
            <div style="margin-bottom: 20px;">
              <label class="field-label" for="assunto">Assunto</label>
              <select class="field" id="assunto" name="assunto">
                <option value="">Selecione…</option>
                <option>Diagnóstico gratuito</option>
                <option>Infraestrutura Microsoft</option>
                <option>Redes MikroTik</option>
                <option>Segurança Fortinet</option>
                <option>Suporte / emergência</option>
                <option>Outro assunto</option>
              </select>
            </div>
            <div style="margin-bottom: 24px;">
              <label class="field-label" for="mensagem">Mensagem</label>
              <textarea class="field" id="mensagem" name="mensagem" rows="5" placeholder="Conte um pouco sobre o seu cenário e o que você precisa."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Enviar mensagem</button>
            <p style="color: var(--text-muted); font-size: 13px; text-align: center; margin: 14px 0 0;">Ao enviar, você concorda em ser contatado pela nossa equipe.</p>
          </form>
        </div>

        <!-- Info -->
        <div style="display: flex; flex-direction: column; gap: 20px;">
          @foreach ([
            ['Telefone', '(71) 98419-8239', 'Seg a Sex, 8h às 18h — emergência 24/7', 'tel:+5571999999999', 'M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z'],
            ['E-mail', 'contato@infosuportes.com.br', 'Respondemos em até 1 dia útil', 'mailto:contato@infosuportes.com.br', 'M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z M22 7l-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7'],
            ['Endereço', 'Salvador, Bahia', 'Atendimento em toda a região metropolitana', '#', 'M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0z M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'],
          ] as [$title, $value, $sub, $href, $icon])
            <a href="{{ $href }}" class="card" style="display: flex; align-items: center; gap: 18px; text-decoration: none;">
              <span class="icon-badge" style="background: var(--accent-soft); color: var(--green-600); flex: none;">
                <svg style="width: 24px; height: 24px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="{{ $icon }}"/></svg>
              </span>
              <div>
                <p style="font-size: 13px; color: var(--text-muted); margin: 0 0 3px; text-transform: uppercase; letter-spacing: 0.04em; font-weight: 600;">{{ $title }}</p>
                <p style="font-size: 17px; font-weight: 700; color: var(--text-strong); margin: 0 0 3px;">{{ $value }}</p>
                <p style="font-size: 13.5px; color: var(--text-body); margin: 0;">{{ $sub }}</p>
              </div>
            </a>
          @endforeach

          <div style="border-radius: var(--radius-xl); overflow: hidden; min-height: 180px; background: linear-gradient(150deg, var(--green-400) 0%, var(--green-600) 60%, var(--green-800) 100%); position: relative;">
            <svg viewBox="0 0 400 400" preserveAspectRatio="xMidYMid slice" style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.16;"><path d="M-40 210 L150 20 L250 20 L60 210 L250 400 L150 400 Z" fill="#fff"></path><path d="M120 210 L310 20 L410 20 L220 210 L410 400 L310 400 Z" fill="#fff"></path></svg>
            <div style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.9); font-weight: 700; gap: 10px;">
              <svg style="width: 22px; height: 22px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Salvador — BA
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
