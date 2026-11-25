(function () {
  // Count up once when the homepage impact figures come into view.
  var impactStats = document.querySelector('[data-impact-stats]');
  if (impactStats && 'IntersectionObserver' in window) {
    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    var observer = new IntersectionObserver(function (entries) {
      if (!entries[0].isIntersecting) return;
      observer.disconnect();
      if (reducedMotion.matches) return;

      var formatter = new Intl.NumberFormat('en');
      var counts = Array.from(impactStats.querySelectorAll('.stat b'), function (stat) {
        var total = stat.textContent.trim();
        var accessibleTotal = document.createElement('span');
        accessibleTotal.className = 'stat-total';
        accessibleTotal.textContent = total;
        var count = document.createElement('span');
        count.className = 'stat-count';
        count.setAttribute('aria-hidden', 'true');
        count.textContent = total;
        stat.replaceChildren(accessibleTotal, count);
        return { element: count, total: total, value: Number(total.replace(/[,%]/g, '')), suffix: total.endsWith('%') ? '%' : '' };
      });
      var start;
      function update(now) {
        if (start === undefined) start = now;
        var progress = reducedMotion.matches ? 1 : Math.min((now - start) / 1050, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        counts.forEach(function (count) {
          count.element.textContent = progress === 1 ? count.total : formatter.format(Math.floor(count.value * eased)) + count.suffix;
        });
        if (progress < 1) window.requestAnimationFrame(update);
      }
      window.requestAnimationFrame(update);
    }, { threshold: 0.25 });
    observer.observe(impactStats);
  }


  // Mobile menu
  var toggle = document.querySelector('.menu-toggle');
  var nav = document.querySelector('.nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.textContent = open ? 'Close' : 'Menu';
    });
  }
  // Dropdown buttons (click / tap)
  document.querySelectorAll('.drop-btn').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var li = btn.parentElement;
      var wasOpen = li.classList.contains('open');
      document.querySelectorAll('.has-drop.open').forEach(function (x) { x.classList.remove('open'); x.querySelector('.drop-btn').setAttribute('aria-expanded', 'false'); });
      if (!wasOpen) { li.classList.add('open'); btn.setAttribute('aria-expanded', 'true'); }
    });
  });
  document.addEventListener('click', function () {
    document.querySelectorAll('.has-drop.open').forEach(function (x) { x.classList.remove('open'); x.querySelector('.drop-btn').setAttribute('aria-expanded', 'false'); });
  });

  var contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
      event.preventDefault();
      var fields = new FormData(contactForm);
      var subject = 'Support inquiry: ' + fields.get('Topic');
      var lines = ['Name: ' + fields.get('Name'), 'Email: ' + fields.get('Email')];
      var organization = fields.get('Organization').trim();
      if (organization) lines.push('Organization: ' + organization);
      lines.push('', fields.get('Message'));
      window.location.href = contactForm.getAttribute('action') +
        '?subject=' + encodeURIComponent(subject) +
        '&body=' + encodeURIComponent(lines.join('\r\n'));
    });
  }

  // Forms: show a confirmation in the page (connect a real form service when you host the site)
  document.querySelectorAll('form[data-msg]').forEach(function (f) {
    f.addEventListener('submit', function (e) {
      e.preventDefault();
      var out = f.querySelector('.form-msg');
      if (out) { out.textContent = f.getAttribute('data-msg'); out.hidden = false; }
      f.reset();
      if (f.id === 'donate-form') updateDonate();
    });
  });

  // Donate widget
  var amount = 50, monthly = true;
  var impacts = [
    [10, 'buys notebooks, pens and a school bag for one student'],
    [25, 'stocks a village reading corner with 20 Khmer-language books'],
    [50, 'covers one month of a high-school scholarship: uniform, bike repairs and study fees'],
    [100, 'funds a weekend teacher-training workshop for 5 primary teachers'],
    [250, 'pays a term of BacII exam tutoring for an entire grade 12 class']
  ];
  function impactFor(a) {
    var text = impacts[0][1];
    impacts.forEach(function (i) { if (a >= i[0]) text = i[1]; });
    return text;
  }
  function updateDonate() {
    var line = document.getElementById('impact-line');
    if (!line) return;
    line.textContent = '$' + amount + (monthly ? ' a month ' : ' ') + impactFor(amount) + '.';
    var submit = document.getElementById('donate-submit');
    if (submit) submit.textContent = 'Give $' + amount + (monthly ? ' monthly' : ' once');
  }
  document.querySelectorAll('.chip[data-amt]').forEach(function (c) {
    c.addEventListener('click', function () {
      document.querySelectorAll('.chip[data-amt]').forEach(function (x) { x.setAttribute('aria-pressed', 'false'); });
      c.setAttribute('aria-pressed', 'true');
      amount = parseInt(c.dataset.amt, 10);
      var other = document.getElementById('other-amt'); if (other) other.value = '';
      updateDonate();
    });
  });
  var other = document.getElementById('other-amt');
  if (other) other.addEventListener('input', function () {
    var v = parseInt(other.value, 10);
    if (v > 0) {
      amount = v;
      document.querySelectorAll('.chip[data-amt]').forEach(function (x) { x.setAttribute('aria-pressed', 'false'); });
      updateDonate();
    }
  });
  document.querySelectorAll('.seg button').forEach(function (b) {
    b.addEventListener('click', function () {
      b.parentElement.querySelectorAll('button').forEach(function (x) { x.setAttribute('aria-pressed', 'false'); });
      b.setAttribute('aria-pressed', 'true');
      monthly = b.dataset.freq === 'monthly';
      updateDonate();
    });
  });
  updateDonate();

  var y = document.getElementById('year'); if (y) y.textContent = new Date().getFullYear();
})();
