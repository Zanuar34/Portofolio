<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $project['title'] }} — Detail Project</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
  <style>
    .back-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 32px;
      color: var(--accent2);
      font-family: var(--font-mono);
      font-size: 14px;
      transition: color 0.2s ease;
    }
    
    .back-btn:hover {
      color: var(--accent);
    }
    
    .project-header {
      margin-bottom: 40px;
      padding-bottom: 24px;
      border-bottom: 1px dashed var(--border);
    }

    .project-title {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 12px;
      color: var(--text);
    }

    .project-hash {
      color: var(--accent);
      font-family: var(--font-mono);
      margin-right: 12px;
    }

    .project-meta {
      font-family: var(--font-mono);
      font-size: 13px;
      color: var(--text-dim);
      margin-bottom: 24px;
    }

    .project-content {
      font-size: 16px;
      line-height: 1.8;
      color: #c7c5c0;
    }
    
    .project-content p:first-child {
      margin-top: 0;
    }

    .project-content h3 {
      font-family: var(--font-display);
      color: var(--text);
      font-size: 1.5rem;
      margin-top: 32px;
      margin-bottom: 16px;
    }

    .diff-box {
      margin-top: 48px;
      background: var(--bg-panel-2);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 24px;
      font-family: var(--font-mono);
    }
    
    .diff-box .diff-title {
      color: var(--text-dim);
      margin-bottom: 16px;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
  </style>
</head>

<body>

  <div class="tabbar">
    <div class="dots"><span class="dot r"></span><span class="dot y"></span><span class="dot g"></span></div>
    <div class="tabs" id="tabs">
      <a href="{{ url('/') }}" class="tab">portfolio.blade.php<span class="ext"></span></a>
      <a class="tab active">project-detail.blade.php<span class="ext"></span></a>
    </div>
  </div>

  <div class="shell">
    <aside class="sidebar">
      <div class="explorer-title">Explorer</div>
      <div class="tree">
        <div class="folder">📁 projects</div>
        <a href="{{ url('/') }}#projects" class="file">← Back to Portfolio</a>
        <a class="file active" data-target="detail">{{ Str::slug($project['title']) }}.md</a>
      </div>
    </aside>

    <main>
      <section class="pane hero" id="detail">
        <div class="gutter-label">01</div>
        
        <a href="{{ url('/') }}#projects" class="back-btn">
          <span>&larr;</span> Kembali ke Daftar Project
        </a>

        <div class="project-header">
          <h1 class="project-title">
            <span class="project-hash">{{ $project['hash'] }}</span>{{ $project['title'] }}
          </h1>
          <div class="project-meta">{{ $project['meta'] }}</div>
          
          <div class="tags">
            @foreach($project['tags'] as $tag)
              <span class="tag">{{ $tag }}</span>
            @endforeach
          </div>
        </div>

        <div class="project-content">
          {!! \Illuminate\Support\Str::markdown($project['content']) !!}  
        </div>

        <div class='project-photo'>
          <img src="images/profile.png" alt="Bentuyuns">
        </div>

        @if(!empty($project['diff']))
        <div class="diff-box">
          <div class="diff-title">Git Diff Log</div>
          <div class="diffstat" style="flex-direction: column; gap: 8px;">
            @foreach($project['diff'] as $type => $msg)
              @if($type == 'add')
                <span class="add">{{ $msg }}</span>
              @elseif($type == 'del')
                <span class="del">{{ $msg }}</span>
              @else
                <span>· {{ $msg }}</span>
              @endif
            @endforeach
          </div>
        </div>
        @endif

      </section>
    </main>
  </div>

  <div class="statusbar">
    <span>🌿 main</span>
    <span>detail-view</span>
    <span>Made with care in Jember, ID</span>
  </div>

</body>
</html>
