/**
 * CANDLEMEALCOVE — Client Scripting & Interactive Ambiance Tools
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileNav();
  initAmbianceThemeSwitcher();
  initReadingProgressBar();
  initFontSizeAdjuster();
  initSupperPacingPlanner();
  initBlogFilter();
  initContactForm();
});

// Mobile Nav Toggle
function initMobileNav() {
  const toggleBtn = document.querySelector('.mobile-menu-btn');
  const navMenu = document.querySelector('.nav-menu');
  if (!toggleBtn || !navMenu) return;

  toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    const isExpanded = navMenu.classList.contains('active');
    toggleBtn.setAttribute('aria-expanded', isExpanded);
    toggleBtn.innerHTML = isExpanded ? '✕' : '☰';
  });

  document.addEventListener('click', (e) => {
    if (!navMenu.contains(e.target) && !toggleBtn.contains(e.target) && navMenu.classList.contains('active')) {
      navMenu.classList.remove('active');
      toggleBtn.innerHTML = '☰';
    }
  });
}

// 3-Mode Ambiance Theme Switcher: Default (Hearth Cream), Amber (Candlelit Glow), Dark (Twilight Midnight)
function initAmbianceThemeSwitcher() {
  const themeBtn = document.querySelector('.theme-toggle-btn');
  if (!themeBtn) return;

  const themes = ['default', 'amber', 'dark'];
  let currentTheme = localStorage.getItem('cmc_theme') || 'default';
  applyTheme(currentTheme);

  themeBtn.addEventListener('click', () => {
    const nextIdx = (themes.indexOf(currentTheme) + 1) % themes.length;
    currentTheme = themes[nextIdx];
    applyTheme(currentTheme);
    localStorage.setItem('cmc_theme', currentTheme);
  });

  function applyTheme(theme) {
    if (theme === 'default') {
      document.documentElement.removeAttribute('data-theme');
      themeBtn.innerHTML = '🕯️';
      themeBtn.setAttribute('title', 'Switch to Candlelit Amber Glow');
    } else if (theme === 'amber') {
      document.documentElement.setAttribute('data-theme', 'amber');
      themeBtn.innerHTML = '✨';
      themeBtn.setAttribute('title', 'Switch to Twilight Midnight');
    } else {
      document.documentElement.setAttribute('data-theme', 'dark');
      themeBtn.innerHTML = '🌙';
      themeBtn.setAttribute('title', 'Switch to Warm Hearth Cream');
    }
  }
}

// Reading Progress Bar
function initReadingProgressBar() {
  const progressBar = document.querySelector('.reading-progress-bar');
  if (!progressBar) return;

  window.addEventListener('scroll', () => {
    const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
    progressBar.style.width = scrolled + '%';
  }, { passive: true });
}

// In-Article Font Scaler
function initFontSizeAdjuster() {
  const articleBody = document.querySelector('.article-body');
  const decreaseBtn = document.querySelector('.font-dec');
  const resetBtn = document.querySelector('.font-reset');
  const increaseBtn = document.querySelector('.font-inc');
  if (!articleBody || !decreaseBtn) return;

  let currentScale = 1.15;

  decreaseBtn.addEventListener('click', () => {
    if (currentScale > 1.0) {
      currentScale -= 0.08;
      articleBody.style.fontSize = `${currentScale}rem`;
    }
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      currentScale = 1.15;
      articleBody.style.fontSize = `${currentScale}rem`;
    });
  }

  increaseBtn.addEventListener('click', () => {
    if (currentScale < 1.45) {
      currentScale += 0.08;
      articleBody.style.fontSize = `${currentScale}rem`;
    }
  });
}

// Interactive Evening Ambiance & Supper Pacing Planner
function initSupperPacingPlanner() {
  const moodSelect = document.getElementById('supperMoodSelect');
  const planOutput = document.getElementById('plannerTitleOutput');
  const candleOutput = document.getElementById('plannerCandleOutput');
  const elixirOutput = document.getElementById('plannerElixirOutput');
  const rhythmOutput = document.getElementById('plannerRhythmOutput');

  if (!moodSelect || !planOutput) return;

  const plans = {
    solitary: {
      title: "The Quiet Solitary Hearth Supper",
      candles: "Single unscented beeswax pillar placed at 45° offset to prevent direct glare.",
      elixir: "Warm Chamomile Blossom & Fresh Thyme Tisane with a slice of lemon.",
      rhythm: "30-minute slow progression: 5 minutes breathing, gentle rustic bowl course, 15 minutes reflective journal pause."
    },
    intimate: {
      title: "The Candlelit Conversation Supper",
      candles: "Pair of tall, tapered ivory beeswax candles arranged at low eye level.",
      elixir: "Sparkling Rosemary & Blackberry Herbal Spritzer in vintage glassware.",
      rhythm: "45-minute shared pacing: family-style platter service, low background acoustic strings, warm conversation."
    },
    seasonal: {
      title: "The Autumn Equinox Slow Feast",
      candles: "Cluster of three graduated votives nestled in earthenware saucers with dried herbs.",
      elixir: "Spiced Hot Apple & Ceylon Cinnamon Botanical Infusion.",
      rhythm: "60-minute leisurely progression: roasted seasonal vegetable stew, warm sourdough crusts, and herbal infusion finish."
    },
    reflective: {
      title: "The Twilight Mindful Reset Meal",
      candles: "Subtle floating tea lights in shallow ceramic bowls with water.",
      elixir: "Lemon Balm, Lavender & Holy Basil Calming Decocotion.",
      rhythm: "40-minute digital-free sanctuary: sensory-focused chewing, gratitude pause, ambient silence."
    }
  };

  function updatePlan() {
    const val = moodSelect.value || 'solitary';
    const data = plans[val] || plans.solitary;

    if (planOutput) planOutput.innerText = data.title;
    if (candleOutput) candleOutput.innerText = `🕯️ Lighting: ${data.candles}`;
    if (elixirOutput) elixirOutput.innerText = `🍵 Elixir: ${data.elixir}`;
    if (rhythmOutput) rhythmOutput.innerText = `⏳ Pacing: ${data.rhythm}`;
  }

  moodSelect.addEventListener('change', updatePlan);
  updatePlan();
}

// Blog Filter & Search
function initBlogFilter() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const searchInput = document.getElementById('blogSearchInput');
  const blogCards = document.querySelectorAll('.blog-card');

  if (!filterBtns.length && !searchInput) return;

  let activeCategory = 'all';
  let searchTerm = '';

  function applyFilters() {
    blogCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category') || '';
      const cardTitle = (card.querySelector('.blog-card-title')?.innerText || '').toLowerCase();
      const cardExcerpt = (card.querySelector('.blog-card-excerpt')?.innerText || '').toLowerCase();

      const matchesCat = activeCategory === 'all' || cardCategory.toLowerCase() === activeCategory.toLowerCase();
      const matchesSearch = !searchTerm || cardTitle.includes(searchTerm) || cardExcerpt.includes(searchTerm);

      if (matchesCat && matchesSearch) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeCategory = btn.getAttribute('data-filter') || 'all';
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      searchTerm = e.target.value.toLowerCase().trim();
      applyFilters();
    });
  }
}

// Contact Form Feedback
function initContactForm() {
  const form = document.getElementById('cmcContactForm');
  const statusMsg = document.getElementById('contactStatusMsg');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (statusMsg) {
      statusMsg.innerHTML = '<div style="padding: 1rem; background: #fdf6ec; color: #8a4b08; border-radius: 6px; font-weight: 600; margin-top: 1rem; border: 1px solid #f9d8a7;">Thank you for writing to CandleMealCove. Your evening supper note has been received by our hearth editorial desk.</div>';
      form.reset();
    }
  });
}
