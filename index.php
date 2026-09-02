<?php
// CandleMealCove - Main Homepage
$current_year = date('Y');
$page_title = "CandleMealCove — Mindful Candlelit Suppers, Intimate Table Aesthetics & Slow Evening Dining";
$page_desc = "Reclaim the restorative magic of candlelit evening meals. Explore seasonal slow supper recipes, ambient table styling, and mindful dining rituals.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <link rel="canonical" href="https://candlemealcove.com/">
  
  <!-- Open Graph Meta -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://candlemealcove.com/">
  <meta property="og:image" content="https://candlemealcove.com/images/hero-candlelit-dinner.jpg">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>

  <div class="reading-progress-bar" aria-hidden="true"></div>

  <!-- Announcement Bar -->
  <aside class="announcement-bar">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
      <span>🕯️ Welcome to CandleMealCove — Cultivating mindful candlelit suppers and slow evening dining rituals.</span>
      <div class="meta-contact">
        <span>📍 181 Mercer Street, New York, NY 10012</span>
        <a href="tel:+18887775845">📞 +1-888-777-5845</a>
      </div>
    </div>
  </aside>

  <!-- Site Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" aria-label="CandleMealCove Homepage">
          <div class="logo-candle-icon">🕯️</div>
          <div class="logo-text-group">
            <span class="logo-title">CandleMealCove</span>
            <span class="logo-tagline">Slow Evening Dining</span>
          </div>
        </a>

        <nav class="nav-menu" aria-label="Main Navigation">
          <a href="index.php" class="nav-link active">Hearth Home</a>
          <a href="about.html" class="nav-link">Our Philosophy</a>
          <a href="blog.html" class="nav-link">Supper Guides</a>
          <a href="#planner" class="nav-link">Ambiance Planner</a>
          <a href="contact.html" class="nav-link">Contact</a>
        </nav>

        <div class="nav-actions">
          <button class="theme-toggle-btn" aria-label="Toggle Candlelight Ambiance Mode" title="Switch Lighting Mode">🕯️</button>
          <a href="blog.html" class="btn btn-amber" style="padding: 0.55rem 1.1rem; font-size: 0.85rem;">View Suppers</a>
          <button class="mobile-menu-btn" aria-label="Open Navigation Menu">☰</button>
        </div>
      </div>
    </div>
  </header>

  <main id="main-content">
    
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <span class="section-eyebrow">The Evening Supper Ritual</span>
            <h1 class="hero-heading">Reclaim the Restorative Magic of Candlelit Dining</h1>
            <p class="hero-lead">
              CandleMealCove is a dedicated culinary sanctuary celebrating slow evening cookery, warm candle ambiance, unhurried conversation, and mindful dining rituals.
            </p>
            <div class="hero-ctas">
              <a href="blog.html" class="btn btn-primary">Explore Supper Guides</a>
              <a href="#planner" class="btn btn-outline">Plan Your Evening Ambiance</a>
            </div>
            
            <div class="hero-metrics">
              <div class="metric-item">
                <div class="metric-num">6+</div>
                <div class="metric-label">Master Supper Guides</div>
              </div>
              <div class="metric-item">
                <div class="metric-num">100%</div>
                <div class="metric-label">Unhurried Mindful Pacing</div>
              </div>
              <div class="metric-item">
                <div class="metric-num">Zero</div>
                <div class="metric-label">Screen Distraction</div>
              </div>
            </div>
          </div>

          <div class="hero-visual-card">
            <img src="images/hero-candlelit-dinner.jpg" alt="Atmospheric candlelit dining table with glowing beeswax tapers and warm meal" width="1200" height="800">
            <div class="hero-floating-quote">
              <p style="font-family: var(--font-serif); font-size: 1.05rem; font-style: italic; margin-bottom: 0.35rem;">"When we dim harsh overhead lights and strike a match, supper transforms from a routine chore into a sacred evening sanctuary."</p>
              <span style="font-size: 0.75rem; color: var(--accent-glow); text-transform: uppercase; letter-spacing: 0.08em;">— CandleMealCove Hearth Editorial</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Pillars Section -->
    <section class="section-py">
      <div class="container">
        <div class="section-header text-center" style="max-width: 750px; margin: 0 auto 3.5rem;">
          <span class="section-eyebrow">The Hearth Method</span>
          <h2 class="section-title">The Three Pillars of Candlelit Dining</h2>
          <p class="section-subtitle" style="margin: 0 auto;">
            Elevating everyday evening meals through sensory lighting, unhurried culinary pacing, and intentional presence.
          </p>
        </div>

        <div class="feature-pillars-grid">
          <div class="pillar-card">
            <div class="pillar-icon">🕯️</div>
            <h3 class="pillar-title">Low Warm Luminescence</h3>
            <p class="pillar-desc">
              Soft 1800K candle flames signal your nervous system to downshift from daytime fight-or-flight cortisol into nighttime parasympathetic digestion.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">🍲</div>
            <h3 class="pillar-title">Seasonal Hearth Cookery</h3>
            <p class="pillar-desc">
              Wholesome roasted vegetable bakes, fragrant herb-braised grains, and nourishing rustic stews designed for relaxed, unhurried enjoyment.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">✨</div>
            <h3 class="pillar-title">Digital-Free Presence</h3>
            <p class="pillar-desc">
              Creating an intentional boundary between the workday screen and the dining table, fostering rich reflection and deeper human connection.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Masterclasses -->
    <section class="section-py" style="background: var(--bg-surface-alt); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
      <div class="container">
        <div class="section-header" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
          <div>
            <span class="section-eyebrow">Hearth Masterclasses</span>
            <h2 class="section-title" style="margin-bottom: 0.5rem;">Featured Evening Guides</h2>
            <p class="section-subtitle">Comprehensive masterclasses for mindful cooks, evening hosts, and solitary diners.</p>
          </div>
          <a href="blog.html" class="btn btn-outline" style="border-color: var(--accent-amber); color: var(--accent-amber-dark);">View All 6 Guides &rarr;</a>
        </div>

        <div class="blog-grid">
          
          <!-- Card 1 -->
          <article class="blog-card" data-category="rituals">
            <div class="blog-card-media">
              <img src="images/blog-candlelit-supper.jpg" alt="Warm candlelit dining table with evening supper spread" width="1200" height="800" loading="lazy">
              <span class="badge badge-amber blog-card-badge">Supper Rituals</span>
            </div>
            <div class="blog-card-body">
              <div class="blog-meta-row">
                <span>11 Min Read</span>
                <span class="blog-meta-dot">•</span>
                <span>Mindful Dining</span>
              </div>
              <h3 class="blog-card-title">
                <a href="blog/the-art-of-the-candlelit-evening-supper.html">The Art of the Candlelit Evening Supper: Transforming Dinner into a Sanctuary</a>
              </h3>
              <p class="blog-card-excerpt">
                Why dimming modern electric glare and dining by candle flame resets circadian rhythms, improves digestive ease, and restores evening peace.
              </p>
              <div class="blog-card-footer">
                <span>By CandleMealCove</span>
                <a href="blog/the-art-of-the-candlelit-evening-supper.html" class="read-more-link">Read Guide &rarr;</a>
              </div>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="blog-card" data-category="mindful">
            <div class="blog-card-media">
              <img src="images/blog-mindful-dining.jpg" alt="Solitary quiet dining setting with ceramic bowl and warm single candle" width="1200" height="800" loading="lazy">
              <span class="badge badge-dark blog-card-badge">Solitary Dining</span>
            </div>
            <div class="blog-card-body">
              <div class="blog-meta-row">
                <span>10 Min Read</span>
                <span class="blog-meta-dot">•</span>
                <span>Slow Living</span>
              </div>
              <h3 class="blog-card-title">
                <a href="blog/mindful-slow-dining-rituals-for-unwinding.html">Mindful Slow Dining Rituals: Unwinding After Demanding Days Without Screens</a>
              </h3>
              <p class="blog-card-excerpt">
                Practical techniques for dining alone with intention, practicing sensory mastication, and establishing a tranquil transition between work and rest.
              </p>
              <div class="blog-card-footer">
                <span>By CandleMealCove</span>
                <a href="blog/mindful-slow-dining-rituals-for-unwinding.html" class="read-more-link">Read Guide &rarr;</a>
              </div>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="blog-card" data-category="menus">
            <div class="blog-card-media">
              <img src="images/blog-seasonal-menus.jpg" alt="Hearty autumn roasted vegetable and herb stew in ceramic pot" width="1200" height="800" loading="lazy">
              <span class="badge badge-amber blog-card-badge">Seasonal Menus</span>
            </div>
            <div class="blog-card-body">
              <div class="blog-meta-row">
                <span>12 Min Read</span>
                <span class="blog-meta-dot">•</span>
                <span>Hearth Cookery</span>
              </div>
              <h3 class="blog-card-title">
                <a href="blog/candlelight-friendly-seasonal-supper-menus.html">Candlelight-Friendly Seasonal Supper Menus: Hearty Bakes, Grain Bowls & Broths</a>
              </h3>
              <p class="blog-card-excerpt">
                Curated one-pot bakes, rustic root vegetable stews, and herbal grain bowls engineered specifically for relaxed, unhurried candlelit dining.
              </p>
              <div class="blog-card-footer">
                <span>By CandleMealCove</span>
                <a href="blog/candlelight-friendly-seasonal-supper-menus.html" class="read-more-link">Read Guide &rarr;</a>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- Interactive Ambiance & Supper Pacing Tool -->
    <section id="planner" class="section-py">
      <div class="container">
        <div class="supper-planner-box">
          <div class="planner-grid">
            <div>
              <span class="section-eyebrow">Interactive Hearth Tool</span>
              <h2 style="font-size: 2rem; margin-bottom: 0.75rem;">Evening Ambiance & Supper Pacing Planner</h2>
              <p style="color: var(--text-muted); font-size: 0.98rem; margin-bottom: 1.5rem;">
                Select your intended evening supper mood to receive tailored lighting configurations, botanical tea pairings, and unhurried pacing intervals.
              </p>

              <div class="form-group" style="margin-bottom: 1rem;">
                <label for="supperMoodSelect">Select Evening Dining Mood:</label>
                <select id="supperMoodSelect" class="form-control">
                  <option value="solitary" selected>The Quiet Solitary Hearth Supper</option>
                  <option value="intimate">The Candlelit Conversation Supper</option>
                  <option value="seasonal">The Autumn Equinox Slow Feast</option>
                  <option value="reflective">The Twilight Mindful Reset Meal</option>
                </select>
              </div>
            </div>

            <div class="planner-output-card">
              <span style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--accent-amber); font-weight: 700;">Tailored Supper Architecture</span>
              <div id="plannerTitleOutput" class="planner-output-title">The Quiet Solitary Hearth Supper</div>
              <div id="plannerCandleOutput" style="font-size: 0.92rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.6rem;">
                🕯️ Lighting: Single unscented beeswax pillar placed at 45° offset to prevent direct glare.
              </div>
              <div id="plannerElixirOutput" style="font-size: 0.92rem; font-weight: 600; color: var(--accent-amber-dark); margin-bottom: 0.6rem;">
                🍵 Elixir: Warm Chamomile Blossom & Fresh Thyme Tisane with a slice of lemon.
              </div>
              <p id="plannerRhythmOutput" style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">
                ⏳ Pacing: 30-minute slow progression: 5 minutes breathing, gentle rustic bowl course, 15 minutes reflective journal pause.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ethos Section -->
    <section class="section-py" style="background: var(--bg-surface); border-top: 1px solid var(--border-subtle);">
      <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
          <div>
            <span class="section-eyebrow">The Philosophy of the Hearth</span>
            <h2 style="font-size: 2.2rem; margin-bottom: 1.25rem;">Replacing Blue-Light Hurry with Golden Glow</h2>
            <p style="font-family: var(--font-serif); font-size: 1.15rem; line-height: 1.75; color: var(--text-muted);">
              Modern evenings have become extensions of the workday—illuminated by harsh fluorescent bulbs, interrupted by notifications, and characterized by hurried swallowing.
            </p>
            <p style="font-size: 0.98rem; color: var(--text-muted); line-height: 1.7;">
              At CandleMealCove, we believe that dinner should be an island of tranquility. By striking a match and eating whole seasonal foods at an unhurried tempo, we invite deep relaxation, mindful gratitude, and genuine human connection back into daily life.
            </p>
            <div style="margin-top: 2rem;">
              <a href="about.html" class="btn btn-primary">Read Our Hearth Story</a>
            </div>
          </div>

          <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-subtle);">
            <img src="images/about-slow-dining.jpg" alt="Mindful individual enjoying a peaceful evening meal by warm candlelight" width="1200" height="800" loading="lazy">
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        
        <!-- Col 1: Brand -->
        <div class="footer-brand">
          <div class="brand-logo" style="margin-bottom: 1rem;">
            <div class="logo-candle-icon">🕯️</div>
            <div class="logo-text-group">
              <span class="logo-title">CandleMealCove</span>
              <span class="logo-tagline">Slow Evening Dining</span>
            </div>
          </div>
          <p class="footer-desc">
            An independent culinary publication dedicated to the art of candlelit evening suppers, mindful dining rituals, ambient table aesthetics, and unhurried hearth cookery.
          </p>
        </div>

        <!-- Col 2: Navigation -->
        <div>
          <h4 class="footer-heading">Hearth Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Hearth Sanctuary</a></li>
            <li><a href="about.html">About CandleMealCove</a></li>
            <li><a href="blog.html">Supper Guides Archive</a></li>
            <li><a href="#planner">Evening Ambiance Planner</a></li>
            <li><a href="contact.html">Contact Hearth Desk</a></li>
          </ul>
        </div>

        <!-- Col 3: Legal & Trust -->
        <div>
          <h4 class="footer-heading">Trust & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="disclaimer.html">Culinary Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
          </ul>
        </div>

        <!-- Col 4: Contact -->
        <div>
          <h4 class="footer-heading">Hearth Desk</h4>
          <p class="footer-contact-text">
            <strong>Address:</strong><br>
            181 Mercer Street,<br>
            New York, NY 10012,<br>
            United States
          </p>
          <p class="footer-contact-text">
            <strong>Correspondence:</strong><br>
            <a href="tel:+18887775845" style="color: var(--accent-glow);">+1-888-777-5845</a>
          </p>
        </div>

      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo $current_year; ?> CandleMealCove. All rights reserved. Crafted with mindful culinary integrity.
        </div>
        <div class="footer-bottom-links">
          <a href="privacy.html">Privacy</a>
          <a href="terms.html">Terms</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookies.html">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
