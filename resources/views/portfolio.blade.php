<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Januar — Full-Stack & Mobile Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body>

  <div class="tabbar">
    <div class="dots"><span class="dot r"></span><span class="dot y"></span><span class="dot g"></span></div>
    <div class="tabs" id="tabs">
      <a class="tab active" data-target="about">About<span class="ext"></span></a>
      <a class="tab" data-target="projects">Projects<span class="ext"></span></a>
      <a class="tab" data-target="skills">Skills<span class="ext"></span></a>
      <a class="tab" data-target="contact">Contact<span class="ext"></span></a>
    </div>
  </div>

  <div class="shell">
    <aside class="sidebar">
      <div class="explorer-title">Explorer</div>
      <div class="tree">
        <div class="folder">📁 januaralfiansyah-dev</div>
        <a class="file active" data-target="about">About</a>
        <a class="file" data-target="projects">Projects</a>
        <a class="file" data-target="skills">Skills</a>
        <a class="file" data-target="contact">Contact<span class="badge"></span></a>
      </div>
    </aside>

    <main>
      <!-- ABOUT -->
      <section class="pane hero" id="about">
        <div class="gutter-label">01</div>
        <div class="hero-grid">
          <div>
            <div class="eyebrow">about.md</div>
            <h1 class="name">Muhammad Januar Alfiansyah<span class="accent">.</span></h1>
            <div class="role">Web Developer <span class="pipe">&</span> Mobile Developer <span class="pipe">|</span>
              Laravel <span class="pipe">·</span> Flutter <span class="pipe">·</span> React</div>
            <p class="lead">Saya seorang Fresh Graduate dari Fakultas Ilmu Komputer yang memiliki keahlian dibidang Front End Development dan Graphic Design. Saya mempunyai kemampuan pada pengembangan aplikasi, khususnya pada platform Android.
              Saya sangat menikmati ketika keahlian saya dalam merancang UI dipadukan dengan kemampuan saya dalam membangun aplikasi, sehingga mampu menciptakan produk digital yang menarik dan fungsional.
            </p>
            <div class="cta-row">
              <a href="#contact" class="btn btn-primary">Hubungi Saya →</a>
              <a href="#projects" class="btn btn-ghost">Lihat Projects</a>
            </div>
          </div>

          <div class="right-col">
            <div class="profile-photo-container">
              <img src="{{ asset('images/profile.png') }}" alt="Januar Alfiansyah" class="profile-photo">
              <div class="photo-glow"></div>
            </div>

            <div class="readme-card">          
              <div class="rc-head"><span>profile.json</span><span>UTF-8</span></div>
            <div class="rc-body">
              <div><span class="c">{</span></div>
              <div>&nbsp;&nbsp;<span class="k">"name"</span><span class="punc">:</span> <span
                  class="s">"Januar"</span><span class="punc">,</span></div>
              <div>&nbsp;&nbsp;<span class="k">"role"</span><span class="punc">:</span> <span class="s">"Intern
                  Developer"</span><span class="punc">,</span></div>
              <div>&nbsp;&nbsp;<span class="k">"stack"</span><span class="punc">:</span> <span
                  class="punc">[</span><span class="s">"Laravel"</span><span class="punc">,</span> <span
                  class="s">"Flutter"</span><span class="punc">,</span> <span class="s">"React"</span><span
                  class="punc">]</span><span class="punc">,</span></div>
              <div>&nbsp;&nbsp;<span class="k">"location"</span><span class="punc">:</span> <span class="s">"Jember,
                  ID"</span><span class="punc">,</span></div>
              <div>&nbsp;&nbsp;<span class="k">"status"</span><span class="punc">:</span> <span class="s">"open to
                  opportunities"</span></div>
              <div><span class="c">}</span><span class="cursor"></span></div>
            </div>
          </div>
          </div>
        </div>
      </section>

      <!-- PROJECTS -->
      <section class="pane" id="projects">
        <div class="gutter-label">02</div>
        <div class="sec-head">
          <h2>Projects</h2>
          <span class="path">~/januar-dev/projects — git log</span>
        </div>

        <div class="log">

          <a href="{{ route('project.detail', ['slug' => 'bentuyuns']) }}" class="commit featured">
            <div class="commit-head">
              <span class="commit-hash">#b3n7uy</span>
              <span class="commit-title">Bentuyuns — Platform Jual Beli Properti</span>
            </div>
            <div class="commit-meta">bentuyuns-mmm · bentuyuns-pt · Laravel</div>
            <p class="commit-desc">Platform multi-situs untuk transaksi properti dengan alur pembayaran KPR dan CASH.
              Menangani autentikasi manager, status transaksi, dan approval klien di sisi backend.</p>
            <div class="tags"><span class="tag">Laravel</span><span class="tag">MySQL</span><span class="tag">REST
                API</span></div>
            <div class="diffstat"><span class="add">+ fixed 401 unauthorized (param
                order)</span><span>·</span><span>added transaction status enum via migration</span></div>
          </a>

          <a href="{{ route('project.detail', ['slug' => 'lumajang-bersahabat']) }}" class="commit">
            <div class="commit-head">
              <span class="commit-hash">#lmj2v2</span>
              <span class="commit-title">Lumajang Bersahabat</span>
            </div>
            <div class="commit-meta">lumajang-bersahabat-android-v2 · Flutter</div>
            <p class="commit-desc">Aplikasi sipil untuk warga Lumajang. Menyelesaikan masalah layout overflow dan
              menyiapkan proses signing untuk build rilis Android dari nol.</p>
            <div class="tags"><span class="tag">Flutter</span><span class="tag">Dart</span><span
                class="tag">Android</span></div>
            <div class="diffstat"><span class="add">+ resolved RenderFlex overflow</span><span>·</span><span>configured
                keystore &amp; key.properties</span></div>
          </a>

          <a href="{{ route('project.detail', ['slug' => 'ecommerce']) }}" class="commit">
            <div class="commit-head">
              <span class="commit-hash">#ecomm1</span>
              <span class="commit-title">Ecommerce Website</span>
            </div>
            <div class="commit-meta">ecommerce-website · React · in progress</div>
            <p class="commit-desc">Proyek pribadi: toko online dengan React, dibangun untuk memperdalam arsitektur
              frontend modern di luar jam magang.</p>
            <div class="tags"><span class="tag">React</span><span class="tag">JavaScript</span></div>
            <div class="diffstat"><span>🚧 actively in development</span></div>
          </a>

          <a href="{{ route('project.detail', ['slug' => 'undangan-digital']) }}" class="commit">
            <div class="commit-head">
              <span class="commit-hash">#wed1ng</span>
              <span class="commit-title">Undangan Digital</span>
            </div>
            <div class="commit-meta">2 klien · HTML/CSS/JS · GitHub Pages &amp; Netlify</div>
            <p class="commit-desc">Undangan pernikahan digital custom — termasuk tema dark-gold dengan animasi Canvas,
              hitung mundur, dan bagian hadiah untuk Ryan & Istiqomah, serta undangan bertema klasik untuk Nadin dengan
              musik latar dan font Pinyon Script.</p>
            <div class="tags"><span class="tag">Canvas API</span><span class="tag">Vanilla JS</span><span
                class="tag">Deploy</span></div>
            <div class="diffstat"><span>2 site launched</span></div>
          </a>

          <a href="{{ route('project.detail', ['slug' => 'cuaca-tani']) }}" class="commit">
            <div class="commit-head">
              <span class="commit-hash">#cuacatani</span>
              <span class="commit-title">Cuaca Tani</span>
            </div>
            <div class="commit-meta">2 klien · Flutter · GitHub Pages &amp; Netlify</div>
            <p class="commit-desc">Aplikasi Cuaca Tani adalah aplikasi mobile berbasis Flutter yang saya kembangkan
              untuk memprediksi curah hujan menggunakan metode LSTM berdasarkan data suhu, kelembapan, dan lama
              penyinaran matahari. Aplikasi ini terintegrasi dengan backend Flask dan Firebase untuk menampilkan hasil
              prediksi serta pengelolaan data lahan pertanian.</p>
            <div class="tags"><span class="tag">Flutter</span><span class="tag">Flask</span><span
                class="tag">Deploy</span></div>
            <div class="diffstat"><span>2 site launched</span></div>
          </a>

        </div>
      </section>

      <!-- SKILLS -->
      <section class="pane" id="skills">
        <div class="gutter-label">03</div>
        <div class="sec-head">
          <h2>Skills</h2>
          <span class="path">~/januar-dev/skills.json</span>
        </div>
        <div class="skills-json">
          <div><span class="ln">1</span><span class="c">{</span></div>
          <div><span class="ln">2</span>&nbsp;&nbsp;<span class="key">"backend"</span><span class="punc">:</span> <span
              class="punc">[</span><span class="str">"Laravel"</span><span class="punc">,</span> <span
              class="str">"PHP"</span><span class="punc">,</span> <span class="str">"MySQL"</span><span
              class="punc">]</span><span class="punc">,</span></div>
          <div><span class="ln">3</span>&nbsp;&nbsp;<span class="key">"mobile"</span><span class="punc">:</span> <span
              class="punc">[</span><span class="str">"Flutter"</span><span class="punc">,</span> <span
              class="str">"Dart"</span><span class="punc">]</span><span class="punc">,</span></div>
          <div><span class="ln">4</span>&nbsp;&nbsp;<span class="key">"frontend"</span><span class="punc">:</span> <span
              class="punc">[</span><span class="str">"React"</span><span class="punc">,</span> <span
              class="str">"JavaScript"</span><span class="punc">,</span> <span class="str">"HTML"</span><span
              class="punc">,</span> <span class="str">"CSS"</span><span class="punc">]</span><span class="punc">,</span>
          </div>
          <div><span class="ln">5</span>&nbsp;&nbsp;<span class="key">"tools"</span><span class="punc">:</span> <span
              class="punc">[</span><span class="str">"Git"</span><span class="punc">,</span> <span
              class="str">"GitHub"</span><span class="punc">,</span> <span class="str">"Netlify"</span><span
              class="punc">]</span><span class="punc">,</span></div>
          <div><span class="ln">6</span>&nbsp;&nbsp;<span class="key">"currently_learning"</span><span
              class="punc">:</span> <span class="str">"Laravel — advanced"</span></div>
          <div><span class="ln">7</span><span class="c">}</span></div>
        </div>
      </section>

      <!-- CONTACT -->
      <section class="pane" id="contact">
        <div class="gutter-label">04</div>
        <div class="sec-head">
          <h2>Contact</h2>
          <span class="path">~/januar-dev/contact.md</span>
        </div>
        <div class="contact-wrap">
          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            @if(session('success'))
              <div style="background: var(--green); color: #191203; padding: 10px; border-radius: 6px; margin-bottom: 18px; font-family: var(--font-mono); font-size: 13px;">
                {{ session('success') }}
              </div>
            @endif
            @if($errors->any())
              <div style="background: #e5645a; color: #fff; padding: 10px; border-radius: 6px; margin-bottom: 18px; font-family: var(--font-mono); font-size: 13px;">
                <ul style="list-style-type: none; padding-left: 0;">
                  @foreach($errors->all() as $error)
                    <li>⚠️ {{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="field"><label>NAMA</label><input type="text" name="name" value="{{ old('name') }}" required></div>
            <div class="field"><label>EMAIL</label><input type="email" name="email" value="{{ old('email') }}" required></div>
            <div class="field"><label>PESAN</label><textarea name="message" rows="5" required>{{ old('message') }}</textarea></div>
            <button class="btn btn-primary" type="submit" style="border:none; cursor:pointer;">Kirim Pesan →</button>
          </form>
          <div class="links-list">
            <a href="mailto:hello@example.com">Email <span>januaralfiansyah34@gmail.com</span></a>
            <a href="#" target="_blank">GitHub <span>Zanuar34</span></a>
            <a href="#" target="_blank">LinkedIn <span>in/muhammad-januar-alfiansyah-88737a220/</span></a>
            <a href="#" target="_blank">Instagram <span>@zanuaralff</span></a>
          </div>
        </div>
      </section>
    </main>
  </div>

  <div class="statusbar">
    <span>🌿 main</span>
    <span id="clock">synced</span>
    <span>Made with care in Jember, ID</span>
  </div>

  <script src="{{ asset('js/portfolio.js') }}"></script>
</body>

</html>