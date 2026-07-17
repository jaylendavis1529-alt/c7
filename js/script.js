/* Pure Taste Table — site behaviour (dark theme edition) */

document.addEventListener("DOMContentLoaded", function () {
  /* ---------- Mobile navigation ---------- */
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.querySelector(".main-nav");

  if (toggle && nav) {
    toggle.addEventListener("click", function () {
      var isOpen = nav.classList.toggle("open");
      toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  }

  /* ---------- Highlight current page in nav ---------- */
  var current = window.location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".main-nav a").forEach(function (link) {
    if (link.getAttribute("href") === current) link.classList.add("active");
  });

  /* ---------- Auto-update copyright year ---------- */
  var yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  /* ---------- Contact form (opens visitor's own email app) ---------- */
  var form = document.getElementById("contact-form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var name = document.getElementById("cf-name").value.trim();
      var subject = encodeURIComponent("Message from " + name + " via puretastetable.com");
      var body = encodeURIComponent(document.getElementById("cf-message").value.trim());
      window.location.href =
        "mailto:hello@puretastetable.com?subject=" + subject + "&body=" + body;
    });
  }

  /* ---------- Reveal-on-scroll animations ---------- */
  var revealTargets = document.querySelectorAll(
    ".card, .value-item, .section-head, .split, .cta-band, .stat, .form-card, .page-hero"
  );
  revealTargets.forEach(function (el) { el.classList.add("reveal"); });

  if ("IntersectionObserver" in window) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    revealTargets.forEach(function (el) { observer.observe(el); });
  } else {
    revealTargets.forEach(function (el) { el.classList.add("visible"); });
  }

  /* ==========================================================
     Cookie Consent Banner  (Google Consent Mode v2 compatible)
     ========================================================== */
  var CONSENT_KEY = "ptt-cookie-consent"; // "granted" | "denied"

  function gtagSafe() {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(arguments);
  }

  function applyConsent(state) {
    var value = state === "granted" ? "granted" : "denied";
    gtagSafe("consent", "update", {
      ad_storage: value,
      ad_user_data: value,
      ad_personalization: value,
      analytics_storage: value
    });
  }

  function saveConsent(state) {
    try { localStorage.setItem(CONSENT_KEY, state); } catch (e) { /* private mode */ }
  }

  function getConsent() {
    try { return localStorage.getItem(CONSENT_KEY); } catch (e) { return null; }
  }

  var savedConsent = getConsent();

  if (savedConsent === "granted" || savedConsent === "denied") {
    // Visitor already chose — respect it silently.
    applyConsent(savedConsent);
  } else {
    // First visit — build and show the banner.
    var banner = document.createElement("div");
    banner.className = "cookie-banner";
    banner.setAttribute("role", "dialog");
    banner.setAttribute("aria-live", "polite");
    banner.setAttribute("aria-label", "Cookie consent");
    banner.innerHTML =
      '<h3>🍪 A quick word about cookies</h3>' +
      '<p>We use cookies for anonymous analytics (Google Analytics) and, where shown, advertising. ' +
      'Nothing is enabled until you choose. Read our ' +
      '<a href="cookies.html">Cookies Policy</a> and ' +
      '<a href="privacy.html">Privacy Policy</a> for details.</p>' +
      '<div class="cookie-actions">' +
      '<button type="button" class="btn btn-primary" id="cookie-accept">Accept all</button>' +
      '<button type="button" class="btn btn-muted" id="cookie-decline">Necessary only</button>' +
      "</div>";

    document.body.appendChild(banner);

    // Slide it up after a beat so the animation is visible
    setTimeout(function () { banner.classList.add("show"); }, 600);

    function closeBanner(state) {
      saveConsent(state);
      applyConsent(state);
      banner.classList.remove("show");
      setTimeout(function () { banner.remove(); }, 600);
    }

    document.getElementById("cookie-accept").addEventListener("click", function () {
      closeBanner("granted");
    });

    document.getElementById("cookie-decline").addEventListener("click", function () {
      closeBanner("denied");
    });
  }
});
