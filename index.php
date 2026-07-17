<?php require __DIR__ . '/teams.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Consent Mode v2 — cookies stay off until the visitor chooses -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('consent', 'default', {
      'ad_storage': 'denied',
      'ad_user_data': 'denied',
      'ad_personalization': 'denied',
      'analytics_storage': 'denied',
      'wait_for_update': 500
    });
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Primary SEO -->
  <title>Pure Taste Table — Honest, Wholesome Recipes for Real Home Kitchens</title>
  <meta name="description" content="Pure Taste Table shares tested, wholesome recipes made with everyday ingredients. Simple techniques, honest flavours, and cooking guides written for real home kitchens.">
  <meta name="keywords" content="wholesome recipes, home cooking, easy dinner ideas, healthy recipes, seasonal cooking, Pure Taste Table">
  <meta name="author" content="Pure Taste Table">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://www.puretastetable.com/">

  <!-- Open Graph / Social -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Pure Taste Table — Honest, Wholesome Recipes">
  <meta property="og:description" content="Tested recipes, simple techniques and honest flavours for real home kitchens.">
  <meta property="og:url" content="https://www.puretastetable.com/">
  <meta property="og:image" content="https://picsum.photos/seed/puretaste-hero/1200/630">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="site-header">
    <div class="container nav-wrap">
      <a href="index.php" class="brand">Pure<span>Taste</span>Table</a>
      <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">&#9776;</button>
      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="recipes.html">Recipes</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <!-- Hero -->
    <section class="container hero">
      <div>
        <span class="hero-kicker">✦ Tested in a real home kitchen</span>
        <h1>Good food doesn't need to shout. <em>It just needs to be honest.</em></h1>
        <p>Welcome to Pure Taste Table — a quiet corner of the internet where every recipe is cooked, tasted and tweaked in a real home kitchen before it ever reaches you. No fads, no fifteen-ingredient sauces. Just food that tastes like someone cared.</p>
        <div class="btn-row">
          <a href="recipes.html" class="btn btn-primary">Browse Recipes</a>
          <a href="about.html" class="btn btn-ghost">Our Story</a>
        </div>
      </div>
      <div class="hero-img">
        <img src="https://picsum.photos/seed/puretaste-hero/800/600" alt="A rustic wooden dining table set with fresh, home-cooked seasonal dishes" loading="eager">
      </div>
    </section>

    <!-- Stats -->
    <section class="container stats" aria-label="Pure Taste Table in numbers">
      <div class="stat"><b>120+</b><span>Tested recipes</span></div>
      <div class="stat"><b>3&times;</b><span>Every recipe cooked before publishing</span></div>
      <div class="stat"><b>&lt;10</b><span>Ingredients in most dishes</span></div>
      <div class="stat"><b>100%</b><span>Honest write-ups, zero fluff</span></div>
    </section>

    <!-- Featured Recipes -->
    <section class="container section" id="featured">
      <div class="section-head">
        <span class="eyebrow">From Our Kitchen</span>
        <h2>Recipes people actually come back to</h2>
        <p>These are the dishes our readers cook on repeat — tested until the method is foolproof and the ingredient list is as short as it can honestly be.</p>
      </div>

      <div class="grid-3">
        <article class="card">
          <img src="https://picsum.photos/seed/puretaste-soup/800/600" alt="Bowl of slow-simmered tomato and basil soup with crusty bread" loading="lazy">
          <div class="card-body">
            <span class="card-tag">Comfort Food</span>
            <h3>Slow-Simmered Tomato &amp; Basil Soup</h3>
            <p>The kind of soup that makes a rainy Tuesday feel like an occasion. One pot, seven ingredients, zero shortcuts on flavour.</p>
            <div class="card-meta">40 mins &middot; Serves 4</div>
          </div>
        </article>

        <article class="card">
          <img src="https://picsum.photos/seed/puretaste-salad/800/600" alt="Fresh garden salad with roasted vegetables and lemon dressing" loading="lazy">
          <div class="card-body">
            <span class="card-tag">Fresh &amp; Light</span>
            <h3>Roasted Veg &amp; Lemon Grain Bowl</h3>
            <p>Proof that a "healthy bowl" doesn't have to taste like a compromise. Charred edges, bright dressing, proper crunch.</p>
            <div class="card-meta">35 mins &middot; Serves 2</div>
          </div>
        </article>

        <article class="card">
          <img src="https://picsum.photos/seed/puretaste-bread/800/600" alt="Golden homemade sourdough-style bread loaf on a cooling rack" loading="lazy">
          <div class="card-body">
            <span class="card-tag">Baking</span>
            <h3>No-Fuss Overnight Bread</h3>
            <p>Mix it before bed, bake it after breakfast. A crackly, golden loaf that will quietly ruin supermarket bread for you.</p>
            <div class="card-meta">12 hrs rest &middot; 45 mins bake</div>
          </div>
        </article>

        <article class="card">
          <img src="https://picsum.photos/seed/puretaste-curry/800/600" alt="Fragrant homestyle vegetable curry served with steamed rice" loading="lazy">
          <div class="card-body">
            <span class="card-tag">Weeknight Dinner</span>
            <h3>Everyday Homestyle Curry</h3>
            <p>Built on pantry spices and whatever vegetables are looking hopeful in your fridge. Forgiving, fragrant, and fast.</p>
            <div class="card-meta">30 mins &middot; Serves 4</div>
          </div>
        </article>

        <article class="card">
          <img src="https://picsum.photos/seed/puretaste-pasta/800/600" alt="Plate of fresh pasta tossed with garlic, olive oil and herbs" loading="lazy">
          <div class="card-body">
            <span class="card-tag">15-Minute Meals</span>
            <h3>Midnight Garlic &amp; Herb Pasta</h3>
            <p>The dish we make when the fridge is nearly empty and the day was long. Five ingredients, one unforgettable plate.</p>
            <div class="card-meta">15 mins &middot; Serves 2</div>
          </div>
        </article>

        <article class="card">
          <img src="https://picsum.photos/seed/puretaste-dessert/800/600" alt="Warm baked apple dessert with cinnamon and cream" loading="lazy">
          <div class="card-body">
            <span class="card-tag">Dessert</span>
            <h3>Warm Cinnamon Baked Apples</h3>
            <p>Dessert that feels like a hug — no mixer, no pastry skills, no stress. Just apples doing what apples do best.</p>
            <div class="card-meta">25 mins &middot; Serves 4</div>
          </div>
        </article>
      </div>
    </section>

    <!-- Philosophy -->
    <section class="container section">
      <div class="split">
        <img src="https://picsum.photos/seed/puretaste-kitchen/800/800" alt="Sunlit home kitchen counter with fresh seasonal ingredients being prepared" loading="lazy">
        <div>
          <span class="eyebrow">Why We Cook This Way</span>
          <h2>Fewer ingredients. More intention.</h2>
          <p>Somewhere along the way, home cooking got complicated. Recipes started demanding equipment nobody owns and ingredients nobody can pronounce. We think that's a shame — because the best meals most of us remember were made from almost nothing, by someone who simply paid attention.</p>
          <p>Every recipe on Pure Taste Table follows three quiet rules: ingredients you can find at a normal shop, steps a tired person can follow on a weeknight, and flavour that doesn't need a filter.</p>

          <div class="values">
            <div class="value-item">
              <h3>Tested, not guessed</h3>
              <p>Each recipe is cooked at least three times before publishing — including once deliberately in a hurry.</p>
            </div>
            <div class="value-item">
              <h3>Seasonal by default</h3>
              <p>We lean on what's fresh and affordable right now, so your food tastes better and costs less.</p>
            </div>
            <div class="value-item">
              <h3>Honest write-ups</h3>
              <p>If a step can go wrong, we tell you how — and exactly how to rescue it.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="container">
      <div class="cta-band">
        <h2>Got a question about a recipe?</h2>
        <p>We read every message that comes through — whether it's a substitution question, a success story, or a polite complaint that our bread recipe made you buy a Dutch oven.</p>
        <a href="contact.html" class="btn btn-primary">Get in Touch</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <a href="index.php" class="brand">Pure<span>Taste</span>Table</a>
          <p>Honest, wholesome recipes tested in a real home kitchen. Simple food, made with intention, shared with care.</p>
        </div>
        <div>
          <h4>Explore</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="recipes.html">Recipes</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4>Legal</h4>
          <ul>
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms &amp; Conditions</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="cookies.html">Cookies Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>&copy; <span id="year">2026</span> Pure Taste Table. All rights reserved.</span>
        <span>Made with patience and quite a lot of garlic.</span>
      </div>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
