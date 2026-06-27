<?php session_start();
$_SESSION['csrf_token'] = $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32)); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script>
    if (localStorage.getItem('theme') === 'dark') {
      document.documentElement.setAttribute('data-theme', 'dark');
    }
  </script>
  <title>YetiCloud.AI — Nepal’s Own AI Cloud</title>
  <meta name="description"
    content="Nepal's sovereign AI cloud platform. NVIDIA H100, RTX PRO 6000 Blackwell, and L4 GPUs. Billed in NPR. Hosted in Kathmandu. AI Lab and GPU Workspace for Nepali businesses, researchers, and developers." />
  <meta name="keywords"
    content="GPU Nepal, AI cloud Nepal, GPU as a service Nepal, NVIDIA H100 Nepal, RTX PRO 6000, DataHub Nepal, cloud GPU Kathmandu, AI training Nepal, GPU rental Nepal, deep learning Nepal, NPR GPU pricing, Nepal data center" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="DataHub Nepal" />
  <link rel="canonical" href="https://gpu.datahub.com.np/" />
  <meta property="og:title" content="DataHub Nepal — Nepal's Complete AI Cloud | GPU as a Service" />
  <meta property="og:description"
    content="Nepal's sovereign AI cloud platform. NVIDIA H100, RTX PRO 6000, and L4 GPUs. Billed in NPR. Hosted in Kathmandu." />
  <meta property="og:url" content="https://gpu.datahub.com.np/" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://gpu.datahub.com.np/images/og-image.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="DataHub Nepal — Nepal's Complete AI Cloud" />
  <meta name="twitter:description"
    content="Nepal's sovereign AI cloud platform. NVIDIA GPUs billed in NPR. Hosted in Kathmandu." />
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link rel="apple-touch-icon" href="images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="css/landing.css" />
</head>

<body>

  <nav>
    <div class="nav-inner">
      <a href="/" class="nav-logo">
        <img src="images/web-logo.png" alt="YetiCloud.AI" style="height:52px;width:auto;" />
      </a>

      <img src="images/dhlogo.png" alt="DH" style="height:40px;width:auto;margin-left:auto;" />
      <img src="images/flag-nepal.png" alt=""
        style="height:20px;width:auto;margin-left:8px;display:inline;vertical-align:middle;">
      <span class="nav-sep">|</span>
      <button id="themeToggle" aria-label="Toggle theme"
        style="background:transparent;border:1px solid var(--toggle-border, #e2e8f0);border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;margin-left:8px;padding:8px;transition:0.2s;">
        <svg class="icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="#3B82F6" stroke="none">
          <path d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
        </svg>
        <svg class="icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="#3B82F6" stroke="none">
          <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18.75a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-1.5a.75.75 0 01.75-.75zM6.166 17.834a.75.75 0 00-1.06 1.06l1.59 1.591a.75.75 0 101.061-1.06l-1.59-1.591zM4.5 12a.75.75 0 01-.75-.75H1.5a.75.75 0 010 1.5h2.25a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 001.06 1.06l-1.59 1.591a.75.75 0 10-1.061-1.06l1.59-1.591z" />
        </svg>
      </button>

    </div>
  </nav>



  <section class="hero" style="padding-top:80px;">
    <canvas class="hero-particles"></canvas>
    <div class="lens-flare">
      <div class="flare flare-1"></div>
      <div class="flare flare-2"></div>
      <div class="flare flare-3"></div>
      <div class="flare flare-4"></div>
    </div>
    <div class="container">
      <div class="hero-content">
        <div class="pre">Nepal’s Own AI Cloud</div>
        <h1>High-Performance <span class="gradient-text">GPU Cloud</span>. Hosted in Nepal <img
            src="images/flag-nepal.png" alt="" class="flag-icon">.<br />Built for AI.</h1>
        <p>Nepal's first sovereign AI cloud — access powerful NVIDIA GPUs hosted right here in Kathmandu. Train models,
          deploy LLMs, run inference, and accelerate research without expensive hardware imports or foreign cloud
          latency. Built for Nepali businesses, researchers, and developers.</p>

        <div class="mb-24 fs-body text-white hero-badges"
          style="display:flex;flex-wrap:wrap;gap:8px;color:rgba(255,255,255,0.8);font-weight:500;padding:8px 0px;border-radius:9999px;width:100%;">

          <span
            style="display:flex;align-items:center;gap:6px;color:#fff;background:rgba(255,255,255,0.12);padding:4px 12px;border-radius:9999px;white-space:nowrap;flex-shrink:0;">&#10003;
            Flexible hourly &amp; monthly billing</span>
          <span
            style="display:flex;align-items:center;gap:6px;color:#fff;background:rgba(255,255,255,0.12);padding:4px 12px;border-radius:9999px;white-space:nowrap;flex-shrink:0;">&#10003;
            Instant provisioning</span>
          <span
            style="display:flex;align-items:center;gap:6px;color:#fff;background:rgba(255,255,255,0.12);padding:4px 12px;border-radius:9999px;white-space:nowrap;flex-shrink:0;">&#10003;
            Local support</span>
        </div>

      </div>

    </div>
  </section>
  <section id="why-choose" class="page-section" style="background: var(--bg-section-dark);">
    <style>
      #why-choose .section-label {
        color: #fff;
        background: rgba(255, 255, 255, 0.12);
      }

      #why-choose .section-title {
        color: #fff;
      }

      #why-choose .section-sub {
        color: rgba(255, 255, 255, 0.8);
      }
    </style>
    <div class="container">
      <div class="section-label reveal">Why Choose DataHub GPU Cloud</div>
      <h2 class="section-title reveal delay-100">Enterprise-Grade GPU Infrastructure</h2>
      <p class="section-sub reveal delay-200" style="margin-bottom:32px;color:#fff;">Access the latest NVIDIA GPU
        technologies designed for AI training, inference, data science, simulation, rendering, and high-performance
        computing — now available in Nepal <img src="images/flag-nepal.png" alt="" class="flag-icon">.</p>

      <div class="gpu-grid reveal delay-300">
        <div class="gpu-card bg-card-1">
          <div class="icon">&#128176;</div>
          <h3>Pay Only for What You Use</h3>
          <p>Eliminate large capital investments. Scale GPU resources up or down based on your workload requirements.
          </p>
        </div>
        <div class="gpu-card bg-card-2">
          <div class="icon">&#9889;</div>
          <h3>Instant Deployment</h3>
          <p>Deploy GPU instances, virtual machines, containers, and AI environments within minutes.</p>
        </div>
        <div class="gpu-card bg-card-3">
          <div class="icon">&#128222;</div>
          <h3>Local Support Team</h3>
          <p>Get support from engineers who understand your business and can respond quickly when you need assistance.
          </p>
        </div>
        <div class="gpu-card bg-card-4">
          <div class="icon">&#128274;</div>
          <h3>Secure &amp; Reliable</h3>
          <p>Enterprise-grade infrastructure with secure multi-tenant environments, isolated workloads, continuous
            monitoring, and SLA-backed availability.</p>
        </div>
        <div class="gpu-card bg-card-5">
          <div class="icon">&#129302;</div>
          <h3>Built for AI</h3>
          <p>Pre-configured environments for Large Language Models (LLMs), Generative AI, Machine Learning, Deep
            Learning, Computer Vision, Data Science, AI Agents, and MLOps.</p>
        </div>
        <div class="gpu-card bg-card-6">
          <div class="icon">&#128421;&#65039;</div>
          <h3>Enterprise GPU Infrastructure</h3>
          <p>Access the latest NVIDIA GPU technologies designed for AI training, inference, and high-performance
            computing.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="hardware" class="page-section" style="background: var(--bg-section-hw);">
    <div class="container">
      <div class="section-label reveal" style="color:#142958;background:rgba(255,255,255,0.85);">The Hardware</div>
      <h2 class="section-title reveal delay-100">Five NVIDIA GPUs. One Purpose: To Make Nepal's AI Builders World-Class.
      </h2>
      <p class="section-sub reveal delay-200" style="margin-bottom:8px;color:#1E293B;">The same GPUs powering the
        world's leading AI labs &mdash; now available in Nepal <img src="images/flag-nepal.png" alt=""
          class="flag-icon">.</p>

      <div class="hw-grid reveal delay-300">

        <!-- H200 NVL -->
        <div class="hw-card bg-card-1">
          <span class="badge badge-soon">Coming Soon</span>
          <h3>NVIDIA H200 NVL 141GB</h3>
          <p class="sub">Hopper · Data Center · Enterprise AI Training</p>
          <div class="hw-divider"></div>
          <div class="hw-specs">
            <div class="sp">
              <div class="sl">VRAM</div>
              <div class="sv">141 GB</div>
            </div>
            <div class="sp">
              <div class="sl">Memory</div>
              <div class="sv">HBM3e</div>
            </div>
            <div class="sp">
              <div class="sl">Bandwidth</div>
              <div class="sv">4.8 TB/s</div>
            </div>
            <div class="sp">
              <div class="sl">Ideal for</div>
              <div class="sv">Large-scale training</div>
            </div>
          </div>
          <div class="hw-divider"></div>
          <div class="hw-foot">
            <a href="#contact" class="btn-pri">Get Early Access →</a>
          </div>
        </div>

        <!-- H100 PCIe -->
        <div class="hw-card bg-card-2">
          <span class="badge badge-pop">Popular</span>
          <h3>NVIDIA H100 PCIe 80GB</h3>
          <p class="sub">Hopper · Data Center · AI Training Benchmark</p>
          <div class="hw-divider"></div>
          <div class="hw-specs">
            <div class="sp">
              <div class="sl">VRAM</div>
              <div class="sv">80 GB</div>
            </div>
            <div class="sp">
              <div class="sl">Memory</div>
              <div class="sv">HBM2e</div>
            </div>
            <div class="sp">
              <div class="sl">Bandwidth</div>
              <div class="sv">2 TB/s</div>
            </div>
            <div class="sp">
              <div class="sl">Ideal for</div>
              <div class="sv">LLM fine-tuning</div>
            </div>
          </div>
          <div class="hw-divider"></div>
          <div class="hw-foot">
            <a href="#contact" class="btn-pri">Contact Us →</a>
          </div>
        </div>

        <!-- RTX PRO 6000 Blackwell -->
        <div class="hw-card bg-card-3">
          <span class="badge badge-new">New</span>
          <h3>NVIDIA RTX PRO 6000 Blackwell 96GB</h3>
          <p class="sub">Blackwell · Workstation · Memory Champion</p>
          <div class="hw-divider"></div>
          <div class="hw-specs">
            <div class="sp">
              <div class="sl">VRAM</div>
              <div class="sv">96 GB</div>
            </div>
            <div class="sp">
              <div class="sl">Memory</div>
              <div class="sv">GDDR7</div>
            </div>
            <div class="sp">
              <div class="sl">Bandwidth</div>
              <div class="sv">~1.8 TB/s</div>
            </div>
            <div class="sp">
              <div class="sl">Ideal for</div>
              <div class="sv">Inference + Rendering</div>
            </div>
          </div>
          <div class="hw-divider"></div>
          <div class="hw-foot">
            <a href="#contact" class="btn-pri">Contact Us →</a>
          </div>
        </div>

        <!-- L40S -->
        <div class="hw-card bg-card-4">
          <span class="badge badge-soon">Coming Soon</span>
          <h3>NVIDIA L40S 48GB</h3>
          <p class="sub">Ada Lovelace · Data Center · Universal GPU</p>
          <div class="hw-divider"></div>
          <div class="hw-specs">
            <div class="sp">
              <div class="sl">VRAM</div>
              <div class="sv">48 GB</div>
            </div>
            <div class="sp">
              <div class="sl">Memory</div>
              <div class="sv">GDDR6</div>
            </div>
            <div class="sp">
              <div class="sl">Bandwidth</div>
              <div class="sv">864 GB/s</div>
            </div>
            <div class="sp">
              <div class="sl">Ideal for</div>
              <div class="sv">Training & Inference</div>
            </div>
          </div>
          <div class="hw-divider"></div>
          <div class="hw-foot">
            <a href="#contact" class="btn-pri">Get Early Access →</a>
          </div>
        </div>

        <!-- L4 -->
        <div class="hw-card bg-card-5">
          <span class="badge badge-value">Best Value</span>
          <h3>NVIDIA L4 24GB</h3>
          <p class="sub">Ada Lovelace · Data Center · Efficiency Expert</p>
          <div class="hw-divider"></div>
          <div class="hw-specs">
            <div class="sp">
              <div class="sl">VRAM</div>
              <div class="sv">24 GB</div>
            </div>
            <div class="sp">
              <div class="sl">Memory</div>
              <div class="sv">GDDR6</div>
            </div>
            <div class="sp">
              <div class="sl">Bandwidth</div>
              <div class="sv">300 GB/s</div>
            </div>
            <div class="sp">
              <div class="sl">Ideal for</div>
              <div class="sv">Inference serving</div>
            </div>
          </div>
          <div class="hw-divider"></div>
          <div class="hw-foot">
            <a href="#contact" class="btn-pri">Contact Us →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="problem" class="page-section" style="background: var(--bg-section-dark);">
    <style>
      #problem .section-label {
        color: #fff;
        background: rgba(255, 255, 255, 0.12);
      }
    </style>
    <div class="container">
      <div class="section-label reveal">The Problem</div>
      <h2 class="section-title reveal delay-100" style="color:#fff;">Nepal's AI Builders Deserve Better Than What They
        Have.</h2>
      <p class="section-sub reveal delay-200" style="color:#fff;margin-bottom:32px;">Every day, Nepali AI teams,
        researchers, and enterprises lose time, money, and opportunity to infrastructure that was never built for them.
        Here is what that costs &mdash; and why it matters.</p>

      <div class="why-grid reveal delay-200" style="margin-top:0;">
        <div class="why-card bg-card-1" style="border-left:3px solid #2563EB;border-right:3px solid #2563EB;">
          <h3>Wasting Weeks on Setup</h3>
          <p>Installing CUDA, configuring drivers, debugging dependency conflicts, managing container runtimes &mdash;
            the infrastructure tax on every AI project before real work can begin. Teams spend 30-40% of project time on
            environment setup that should take minutes.</p>
        </div>
        <div class="why-card bg-card-2" style="border-left:3px solid #2563EB;border-right:3px solid #2563EB;">
          <h3>Paying in USD with FX Risk</h3>
          <p>Foreign GPU clouds mean USD billing, foreign currency accounts, NRB approval friction, and unpredictable
            exchange rate exposure. For every NPR 1M in GPU spend, FX volatility alone can cost NPR 50,000-100,000. This
            is not how Nepali businesses should operate.</p>
        </div>
        <div class="why-card bg-card-3" style="border-left:3px solid #2563EB;border-right:3px solid #2563EB;">
          <h3>Your Data Leaves Nepal</h3>
          <p>Every training run, every dataset, every model &mdash; shipped across international borders because there
            was no sovereign GPU infrastructure. For regulated industries &mdash; banks, insurance, healthcare &mdash;
            this is a compliance risk that legal teams are increasingly unwilling to accept.</p>
        </div>
        <div class="why-card bg-card-4" style="border-left:3px solid #2563EB;border-right:3px solid #2563EB;">
          <h3>Support That Works in Nepal Time</h3>
          <p>Foreign cloud providers offer ticket portals and chatbots. When your training run crashes at 2 AM Nepal
            time, you wait hours for a response from someone in a different time zone who has never heard of Kathmandu.
            Production downtime should not be a cultural barrier.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="solution" class="page-section alt" style="position:relative;overflow:hidden;">
    <style>
      #solution .section-label {
        color: #142958;
        background: rgba(255, 255, 255, 0.85);
      }

      #solution .tier-card h3 {
        color: #fff;
      }

      #solution .tier-card .subtitle,
      #solution .tier-card p,
      #solution .tier-card ul li {
        color: #fff;
      }

      #solution .tier-card h4 {
        color: #fff;
      }

      #solution .tier-card ul li::before {
        color: #60a5fa;
      }
    </style>
    <video autoplay muted loop playsinline preload="none" poster="images/gpubg-poster.jpg"
      style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:0;opacity:1;">
      <source src="videos/gpubg.mp4" type="video/mp4" />
    </video>
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;"></div>
    <div class="container" style="position:relative;z-index:1;">
      <div class="section-label reveal">The Solution</div>
      <h2 class="section-title reveal delay-100" style="color:#1E293B;">DataHub GPU &mdash; Nepal's AI Cloud, Built for
        How Nepal <img src="images/flag-nepal.png" alt="" class="flag-icon"> Works.</h2>
      <p class="section-sub reveal delay-200" style="margin-bottom:32px;color:#1E293B;">Three tiers of GPU
        infrastructure. One platform. No FX &mdash; Billed in NPR. No data leaving the country. Support that answers in
        Nepali, in Nepal <img src="images/flag-nepal.png" alt="" class="flag-icon"> Standard Time.</p>

      <div class="reveal delay-300" style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:36px;">
        <div class="tier-card"
          style="background:url('images/bg1.jpg') center/cover no-repeat #1e293b;border-color:rgba(255,255,255,0.15);">
          <div class="icon">&#128300;</div>
          <div class="badge" style="background:rgba(255,255,255,0.12);color:#fff;">For Learners &amp; Researchers</div>
          <h3>DataHub AI Lab</h3>
          <p class="subtitle">Nepal's first managed AI experimentation environment</p>
          <p>GPU access, pre-built notebooks, monitoring tools, and collaborative workspaces &mdash; designed to remove
            every barrier between a curious mind and a running AI model. No infrastructure knowledge required. Start
            learning in minutes, not days.</p>
          <h4>Perfect for</h4>
          <ul>
            <li>Students &amp; Researchers</li>
            <li>University Labs</li>
            <li>AI Bootcamps</li>
            <li>Enterprise AI Upskilling Programs</li>
          </ul>
          <p style="margin-top:12px;font-size:0.86rem;color:#fff;">Includes pre-configured Jupyter environments,
            collaborative workspaces, GPU monitoring dashboards, and access to Nepal's sovereign AI infrastructure.</p>
        </div>

        <div class="tier-card"
          style="background:url('images/bg2.jpg') center/cover no-repeat #1e293b;border-color:rgba(255,255,255,0.15);">
          <div class="icon">&#128187;</div>
          <div class="badge" style="background:rgba(255,255,255,0.12);color:#fff;">For ML Engineers &amp; AI Teams</div>
          <h3>DataHub GPU Workspace</h3>
          <p class="subtitle">High-performance GPU virtual machines, on-demand</p>
          <p>NVIDIA H100, RTX PRO 6000 Blackwell, and L4 &mdash; provisioned on-demand, pre-configured with full AI
            stacks, and ready for serious training, fine-tuning, and inference workloads. Pay in NPR. Launch in minutes.
            Scale from one GPU to a cluster instantly.</p>
          <h4>Perfect for</h4>
          <ul>
            <li>ML Engineers &amp; Data Scientists</li>
            <li>AI Startups</li>
            <li>Enterprise Teams</li>
            <li>Production Inference APIs</li>
          </ul>
          <p style="margin-top:12px;font-size:0.86rem;color:#fff;">Includes pre-installed CUDA, PyTorch, TensorFlow,
            vLLM, DeepSpeed, Jupyter, and full root access. Deploy in minutes with billing in NPR.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="cost-comparison" class="page-section" style="background: var(--bg-section-cost);">
    <div class="container">
      <div class="section-label reveal" style="color:#142958;background:rgba(255,255,255,0.85);">Cost Comparison</div>
      <h2 class="section-title reveal delay-100">Why Rent GPUs Instead of Buying?</h2>
      <p class="section-sub reveal delay-200" style="margin-bottom:36px;color:#1E293B;">Purchasing enterprise GPUs
        requires significant upfront investment, ongoing maintenance, cooling, power, and infrastructure management.</p>

      <div class="reveal delay-300" style="display:grid;grid-template-columns:1fr 1fr;gap:24px;">
        <div class="cost-card"
          style="transition: all 0.25s; border:2px solid var(--border);border-radius:var(--radius-md);padding:32px;box-shadow:0 2px 10px rgba(0,0,0,0.06);background: var(--primary-light) url(&quot;data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='15' cy='15' r='2.5' fill='%232563EB' opacity='0.25'/%3E%3Ccircle cx='50' cy='35' r='4' fill='%232563EB' opacity='0.2'/%3E%3Ccircle cx='85' cy='75' r='2.5' fill='%232563EB' opacity='0.25'/%3E%3Ccircle cx='35' cy='95' r='5' fill='%232563EB' opacity='0.15'/%3E%3Ccircle cx='105' cy='25' r='2.5' fill='%232563EB' opacity='0.2'/%3E%3C/svg%3E&quot;) no-repeat right top / 120px 120px;">
          <h3
            style="font-size:1.1rem;font-weight:600;margin-bottom:20px;color:var(--text-secondary);display:flex;align-items:center;gap:8px;">
            <span style="font-size:1.2rem;">&#10060;</span> Buying GPUs</h3>
          <ul style="list-style:none;">
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Large capital investment required</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Ongoing maintenance costs</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Infrastructure complexity</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Slow deployment cycles</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Limited scalability</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Unpredictable total cost</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:var(--text-secondary);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:10px;">
              <span style="color:var(--text);font-weight:600;">&#10008;</span> Technology obsolescence risk</li>
          </ul>
        </div>

        <div class="cost-card"
          style="transition: all 0.25s; border:2px solid var(--primary-border);border-radius:var(--radius-md);padding:32px;box-shadow:0 2px 10px rgba(0,0,0,0.06);background: var(--bg-section-dark) url(&quot;data:image/svg+xml,%3Csvg width='130' height='110' viewBox='0 0 130 110' xmlns='http://www.w3.org/2000/svg'%3E%3Cline x1='10' y1='10' x2='40' y2='40' stroke='%233B82F6' stroke-width='1.5' opacity='0.3'/%3E%3Cline x1='60' y1='20' x2='100' y2='60' stroke='%233B82F6' stroke-width='1.5' opacity='0.25'/%3E%3Cline x1='30' y1='60' x2='70' y2='100' stroke='%233B82F6' stroke-width='1.5' opacity='0.3'/%3E%3Cline x1='90' y1='30' x2='120' y2='10' stroke='%233B82F6' stroke-width='1.5' opacity='0.2'/%3E%3C/svg%3E&quot;) no-repeat left bottom / 130px 110px;">
          <h3
            style="font-size:1.1rem;font-weight:600;margin-bottom:20px;color:#fff;display:flex;align-items:center;gap:8px;">
            <span style="font-size:1.2rem;">&#9989;</span> DataHub GPU Cloud</h3>
          <ul style="list-style:none;">
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> No hardware investment</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> No maintenance costs</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> No infrastructure complexity</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> Faster deployment</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> Better scalability</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> Predictable operating expenses</li>
            <li
              style="padding:8px 0;font-size:0.88rem;color:#fff;border-bottom:none;display:flex;align-items:center;gap:10px;">
              <span style="color:#4ade80;font-weight:600;">&#10003;</span> Always access modern GPU technology</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="benefits" class="page-section" style="background: var(--bg-section-dark);">
    <style>
      #benefits .section-label {
        color: #fff;
        background: rgba(255, 255, 255, 0.12);
      }

      #benefits .section-title {
        color: #fff;
      }

      #benefits .why-card {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(255, 255, 255, 0.1);
      }

      #benefits .why-card h3 {
        color: #fff;
      }

      #benefits .why-card:hover {
        background: rgba(255, 255, 255, 0.1);
      }
    </style>
    <div class="container">
      <div class="section-label reveal">Why Choose DataHub GPU</div>
      <h2 class="section-title reveal delay-100">Six Reasons Nepal's Smartest AI Teams Build on DataHub.</h2>

      <div class="why-grid reveal delay-200">
        <div class="why-card">
          <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;">&#128737;&#65039;</span>
            <h3 style="margin:0;">Sovereign by Default</h3>
          </div>
        </div>
        <div class="why-card">
          <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;">&#9889;</span>
            <h3 style="margin:0;">Global Hardware, Local Latency</h3>
          </div>
        </div>
        <div class="why-card">
          <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;display:flex;">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="9" stroke="url(#lc1)" stroke-width="1.8" fill="none" />
                <path d="M12 6v6l4 2" stroke="url(#lc2)" stroke-width="1.8" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M3 12h3M18 12h3M12 3v3M12 18v3" stroke="url(#lc1)" stroke-width="1.6" stroke-linecap="round" />
                <defs>
                  <linearGradient id="lc1" x1="0" y1="0" x2="24" y2="24">
                    <stop stop-color="#3b82f6" />
                    <stop offset="1" stop-color="#8b5cf6" />
                  </linearGradient>
                  <linearGradient id="lc2" x1="0" y1="0" x2="24" y2="24">
                    <stop stop-color="#60a5fa" />
                    <stop offset="1" stop-color="#a78bfa" />
                  </linearGradient>
                </defs>
              </svg>
            </span>
            <h3 style="margin:0;">One Platform, Full Lifecycle</h3>
          </div>
        </div>
        <div class="why-card">
          <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;">&#128176;</span>
            <h3 style="margin:0;">NPR Billing &mdash; No FX, No Friction</h3>
          </div>
        </div>
        <div class="why-card">
          <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;">&#128222;</span>
            <h3 style="margin:0;">Support That Answers &mdash; Always</h3>
          </div>
        </div>
        <div class="why-card">
          <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;">&#128274;</span>
            <h3 style="margin:0;">Enterprise Security, Nepali Standards</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="how-it-works" class="page-section" style="background: var(--bg-section-light);">
    <div class="container">
      <div class="section-label reveal" style="color:#142958;background:rgba(255,255,255,0.85);">How It Works</div>
      <h2 class="section-title reveal delay-100">Four Steps from Zero to Production AI.</h2>
      <p class="section-sub reveal delay-200" style="margin-bottom:8px;">DataHub GPU is designed to remove every
        obstacle between your team and running AI workloads. Here is how straightforward it is.</p>

      <div class="factory-steps reveal delay-300">
        <div class="factory-step bg-card-1">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:15px;">
            <span style="font-size:1.8rem;line-height:1;">&#128222;</span>
            <div class="num" style="margin:0;">Step 1</div>
          </div>
          <h3>Get in Touch</h3>
          <p>Contact our team through phone, WhatsApp, or the contact form. Tell us about your workload - training,
            inference, research, or production. We will recommend the right GPU tier and configuration for your specific
            use case.</p>
        </div>
        <div class="factory-step bg-card-2">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:15px;">
            <span style="font-size:1.8rem;line-height:1;">&#9889;</span>
            <div class="num" style="margin:0;">Step 2</div>
          </div>
          <h3>Get Started in Minutes</h3>
          <p>Receive your pre-configured environment with everything installed - CUDA, PyTorch, TensorFlow, Jupyter,
            vLLM. No setup, no configuration, no infrastructure tax. Your GPU hours start the moment you are ready.</p>
        </div>
        <div class="factory-step bg-card-3">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:15px;">
            <span style="font-size:1.8rem;line-height:1;">&#129302;</span>
            <div class="num" style="margin:0;">Step 3</div>
          </div>
          <h3>Build, Train, Deploy</h3>
          <p>Run experiments in AI Lab. Train models on H100 or RTX PRO 6000 Blackwell clusters in GPU Workspace. Deploy
            inference APIs with sub-30ms latency. Scale from one GPU to a cluster without changing your workflow.</p>
        </div>
        <div class="factory-step bg-card-4">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:15px;">
            <span style="font-size:1.8rem;line-height:1;">&#128200;</span>
            <div class="num" style="margin:0;">Step 4</div>
          </div>
          <h3>Scale with Confidence</h3>
          <p>Move from on-demand to reserved instances for production. Upgrade to Bare Metal for maximum performance.
            Our team in Kathmandu monitors your infrastructure 24/7. When you grow, your infrastructure grows with you
            &mdash; seamlessly.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="faq" class="page-section" style="background: var(--bg-section-dark);">
    <style>
      #faq .section-label {
        color: #fff;
        background: rgba(255, 255, 255, 0.12);
      }

      #faq .section-title {
        color: #fff;
      }
    </style>
    <div class="container">
      <div class="section-label reveal">Frequently Asked Questions</div>
      <h2 class="section-title reveal delay-100" style="color:#fff;">Everything You Need to Know About Nepal's AI Cloud.
      </h2>

      <div class="faq-list reveal delay-200">
        <div class="faq-item">
          <div class="faq-q">How is DataHub different from using AWS, GCP, or Azure GPUs?<span class="icon">+</span>
          </div>
          <div class="faq-a">
            <p>DataHub GPU is built inside Nepal for Nepal. Every GPU node is physically located in Kathmandu. You are
              billed in NPR, can pay with eSewa or Khalti, and do not need foreign currency or NRB approval. Your data
              stays in Nepal, which is critical for regulated industries. And you get local support in Nepal Standard
              Time &mdash; not a ticket portal in a different hemisphere.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">What GPUs are available and which one should I choose?<span class="icon"
              aria-hidden="true">+</span></div>
          <div class="faq-a">
            <p>We offer three GPU tiers: NVIDIA H100 80GB for enterprise AI training, RTX PRO 6000 Blackwell 96GB for
              large-model inference and rendering, and NVIDIA L4 24GB for cost-efficient inference and light training.
              If you are unsure which fits your workload, contact us &mdash; our team will help you choose.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Can I pay in NPR? What payment methods do you accept?<span class="icon">+</span></div>
          <div class="faq-a">
            <p>Yes &mdash; all pricing is in NPR. We accept eSewa, Khalti, bank transfer, and corporate invoices. No
              USD, no foreign currency, no NRB approval required. GPU compute priced and billed the way Nepali
              businesses operate.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">How fast can I get started?<span class="icon">+</span></div>
          <div class="faq-a">
            <p>Contact us, tell us about your workload, and we can have you running on a pre-configured GPU instance in
              minutes. AI Lab users get immediate access to Jupyter environments. Enterprise teams can have dedicated
              Bare Metal servers provisioned the same day.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Is my data secure and compliant with Nepali regulations?<span class="icon">+</span></div>
          <div class="faq-a">
            <p>Absolutely. All infrastructure is hosted in a Tier III equivalent data center in Kathmandu with biometric
              access, 2N UPS, and redundant fiber. Your data never leaves Nepal. Our architecture supports compliance
              with Nepal's IT Act, NRB data governance directives, and sector-specific regulations for banking,
              insurance, and healthcare.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Do you offer trials or credits?<span class="icon">+</span></div>
          <div class="faq-a">
            <p>Yes &mdash; new users receive GPU hours to explore the platform. Academic researchers and university labs
              may qualify for additional credits through our AI Lab program. Contact us to get started.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">What support options are available?<span class="icon">+</span></div>
          <div class="faq-a">
            <p>24/7 support in Nepal Standard Time via phone, WhatsApp, Viber, and email. Same team that has powered
              Nepal's banks, hospitals, and fintechs since 2017. Phone: +977-1-5970216 | WhatsApp: +977-9861492387 |
              Email: support@datahub.com.np</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Can I upgrade my GPU plan as my workloads grow?<span class="icon">+</span></div>
          <div class="faq-a">
            <p>Yes — you can scale from one GPU tier to another at any time. Need more VRAM mid-project? Move from L4 to
              H100 or RTX PRO 6000 without re-deploying your environment.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="contact" class="page-section">
    <div class="container">
      <div class="container">
        <div class="section-label reveal" style="color:#142958;background:rgba(255,255,255,0.85);">Get In Touch</div>
        <h2 class="section-title reveal delay-100">Always at your service</h2>

        <div class="contact-grid reveal delay-300">
          <div class="contact-details">
            <div class="contact-row">
              <div class="icon">&#128222;</div>
              <div>
                <div class="label">Phone</div>
                <div class="value">+977-1-5970216</div>
                <div class="hours">24/7 Support</div>
              </div>
            </div>
            <div class="contact-row">
              <div class="icon">&#9993;</div>
              <div>
                <div class="label">Email</div>
                <div class="value">info@datahub.com.np</div>
              </div>
            </div>
            <div class="contact-row">
              <div class="icon">&#128205;</div>
              <div>
                <div class="label">Location</div>
                <div class="value">2nd Floor, Shikhar Biz Center, Thapathali, Kathmandu, Nepal</div>
              </div>
            </div>
            <img src="images/contact.jpg" style="border-radius: var(--radius-sm);"
              alt="DataHub Nepal office — 2nd Floor, Shikhar Biz Center, Thapathali, Kathmandu" loading="lazy" />
          </div>

          <form id="contactForm" class="contact-form bg-light-blue"
            style="padding:28px;box-shadow:0 2px 10px rgba(0,0,0,0.17);">
            <div id="formMsg" class="form-msg" style="display:none;"></div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required />
            </div>
            <div style="display:flex;gap:16px;">
              <div class="form-group" style="flex:1;">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" required />
              </div>
              <div class="form-group" style="flex:1;">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
              </div>
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" id="company" name="company" />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="form-group">
              <label>CAPTCHA</label>
              <div style="display:flex;align-items:center;gap:10px;">
                <img src="captcha.php" alt="CAPTCHA" id="captchaImg"
                  style="border-radius:6px;cursor:pointer;flex-shrink:0;"
                  onclick="this.src='captcha.php?'+Date.now()" />
                <button type="button" onclick="document.getElementById('captchaImg').src='captcha.php?'+Date.now()"
                  style="background:#eef2ff;border:1px solid #3b82f6;border-radius:6px;padding:6px 10px;cursor:pointer;font-size:0.85rem;flex-shrink:0;color:#3b82f6;">&#8635;</button>
                <input type="text" id="captcha" name="captcha" placeholder="Enter code" required
                  style="flex:1;min-width:100px;" />
              </div>
            </div>
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>" />
            <button type="submit" class="btn btn-primary btn-large" id="submitBtn">Contact Us</button>
          </form>
        </div>
      </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-grid" style="grid-template-columns:1fr;">
        <div class="footer-brand" style="text-align:center;max-width:100%;">
          <div class="tagline">YetiCloud.AI &mdash; Nepal's Own AI Cloud</div>
          <p style="margin-top:8px;max-width:100%;"><em>Sovereign by Nature. Powerful by Design. Built for Nepal <img
                src="images/flag-nepal.png" alt="" class="flag-icon">.</em></p>
          <p style="margin-top:12px;max-width:100%;">The infrastructure behind Nepal's digital transformation for over
            two decades. Now available for AI.</p>
        </div>
      </div>
      <div class="footer-bottom" style="margin-top:32px;padding-top:20px;border-top:1px solid rgba(255,255,255,0.1);">
        <p>Copyright &copy; 2026, <b>YetiCloud.AI</b>. All rights reserved.</p>
        <div class="links" style="margin-top:8px;">
          <a href="https://www.facebook.com/datahubnepal" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          <a href="https://x.com/DataHubNepal" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/datahubnepal/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/data-hub-private-limited/" aria-label="LinkedIn"><i
              class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    (function () {
      const canvas = document.querySelector('.hero-particles');
      if (!canvas) return;
      const ctx = canvas.getContext('2d');
      let particles = [];
      let w, h;

      function resize() {
        const hero = canvas.parentElement;
        w = hero.offsetWidth;
        h = hero.offsetHeight;
        canvas.width = w;
        canvas.height = h;
      }

      const COUNT = 100;

      function init() {
        resize();
        particles = [];
        for (let i = 0; i < COUNT; i++) {
          particles.push({
            x: Math.random() * w,
            y: Math.random() * h,
            vx: (Math.random() - 0.5) * 0.4,
            vy: (Math.random() - 0.5) * 0.4,
            r: Math.random() * 2.5 + 1,
            a: Math.random() * 0.4 + 0.15,
          });
        }
      }

      function draw() {
        ctx.clearRect(0, 0, w, h);
        for (const p of particles) {
          p.x += p.vx;
          p.y += p.vy;
          if (p.x < -10) p.x = w + 10;
          if (p.x > w + 10) p.x = -10;
          if (p.y < -10) p.y = h + 10;
          if (p.y > h + 10) p.y = -10;
          ctx.beginPath();
          ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
          ctx.fillStyle = `rgba(147, 197, 253, ${p.a})`;
          ctx.fill();
        }
        requestAnimationFrame(draw);
      }

      resize();
      init();
      draw();
      window.addEventListener('resize', () => { resize(); init(); });
    })();
  </script>
  <script>
    const themeToggle = document.getElementById('themeToggle');
    themeToggle.addEventListener('click', () => {
      const currentTheme = document.documentElement.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', newTheme);
      localStorage.setItem('theme', newTheme);
    });
  </script>

  <script src="js/main.js"></script>
  <a href="#" class="back-to-top" aria-label="Back to top"><i class="fas fa-arrow-up"></i></a>
</body>

</html>