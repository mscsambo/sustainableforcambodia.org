@extends('layouts.site')

@section('title', 'Sustainable for Cambodia')
@section('description', 'A non-profit helping rural Cambodian children finish school through scholarships, libraries, teacher training and youth programs.')

@section('content')
<main id="main">
<section class="hero"><div class="wrap">
  <div>
    <span class="khmer">ការអប់រំ ជាពន្លឺនៃជីវិត · Education lights the way</span>
    <h1>Every rural child in Cambodia deserves to <span>finish school.</span></h1>
    <p class="lede">We help children in farming villages stay in class from grade 1 through the grade 12 BacII exam, with scholarships, libraries, trained teachers and youth leadership programs run by local staff.</p>
    <div class="btn-row">
      <a class="btn btn-gold" href="{{ route('donate') }}">Donate</a>
      <a class="btn btn-ghost" href="{{ route('donate') }}#sponsor">Sponsor a Student</a>
      <a class="btn btn-ghost" href="{{ route('programs') }}">Our Programs</a>
      <a class="btn btn-ghost" href="{{ route('get-involved') }}#visit">Visit a School</a>
    </div>
  </div>
  <div class="hero-media">
    <!-- <p class="hero-tag"><b>Kampong Kdei Primary</b> · a 7 km walk for many of its 312 students</p> -->
    <figure class="hero-photo">
      <img src="https://cdn.kiripost.com/static/images/BacII-02780.2e16d0ba.fill-960x540.jpg" width="960" height="540" alt="The first day of Cambodia’s High School Diploma Exam (Bac II)">
      <figcaption>The first day of the High School Diploma Exam (Bac II), October 8 2024. Kiripost/Vann ChanThada</figcaption>
    </figure>
  </div>
</div></section>

<section class="band"><div class="wrap">
  <div class="section-head"><span class="eyebrow">Our impact so far</span><h2>See what a difference you can make</h2>
  <p class="lede">Too many rural students leave school around grade 6 to work on the farm or migrate for jobs. Our programs remove the barriers that push them out, one village at a time.</p></div>
  <div class="stats" data-impact-stats>
    <div class="stat"><b>1,240</b><span>students on scholarship</span></div>
    <div class="stat"><b>38</b><span>village libraries opened</span></div>
    <div class="stat"><b>210</b><span>teachers trained</span></div>
    <div class="stat"><b>91%</b><span>of our grade 12 students pass the Bac II exam</span></div>
  </div>
  <p class="sample-note stats-note">Illustrative figures.</p>
</div></section>

<section class="band alt"><div class="wrap">
  <div class="section-head"><span class="eyebrow">What we do</span><h2>Our programs</h2></div>
  <div class="grid g4">
    <article class="card"><div class="photo program-photo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCQGrlSVd3U3fL2FSdrYnWJhz7RC_cEWC_f-FofaE3qRjd8otj7cfr6g&amp;s=10" alt="" loading="lazy" decoding="async"></div><div class="card-body"><h3>Student Scholarships</h3><ul><li>Uniforms, books and bicycles</li><li>Monthly study stipends</li><li>Mentors who check in each term</li></ul><a class="more" href="{{ route('programs') }}#scholarships">Learn more &rarr;</a></div></article>
    <article class="card"><div class="photo program-photo"><img src="https://img.cambodianess.com/uploads/article/12-2025/1765081964.jpg" alt="" loading="lazy" decoding="async"></div><div class="card-body"><h3>Village Libraries</h3><ul><li>Khmer and English books</li><li>Weekend reading clubs</li><li>Run by trained volunteers</li></ul><a class="more" href="{{ route('programs') }}#libraries">Learn more &rarr;</a></div></article>
    <article class="card"><div class="photo program-photo"><img src="https://www.khmertimeskh.com/wp-content/uploads/2026/06/123357-750x440.jpg" alt="" loading="lazy" decoding="async"></div><div class="card-body"><h3>Teacher Training</h3><ul><li>Active-learning workshops</li><li>Classroom coaching visits</li><li>Teaching kits for every school</li></ul><a class="more" href="{{ route('programs') }}#teachers">Learn more &rarr;</a></div></article>
    <article class="card"><div class="photo program-photo"><img src="https://www.khmertimeskh.com/wp-content/uploads/2025/02/98550.jpg" alt="" loading="lazy" decoding="async"></div><div class="card-body"><h3>English &amp; Digital Skills</h3><ul><li>After-school English classes</li><li>Solar-powered computer labs</li><li>Job and university readiness</li></ul><a class="more" href="{{ route('programs') }}#digital">Learn more &rarr;</a></div></article>
  </div>
</div></section>

<section class="band forest"><div class="wrap">
  <div class="section-head"><span class="eyebrow">Our model</span><h2>Communities lead. We support.</h2><p class="lede">Each village partnership follows the same path, so the work keeps going after our team steps back.</p></div>
  <div class="steps">
    <div class="step"><h3>Listen</h3><p>Parents, teachers and the commune council tell us why children are leaving school.</p></div>
    <div class="step"><h3>Build together</h3><p>The village contributes labor and land; we bring funding, materials and training.</p></div>
    <div class="step"><h3>Pass it on</h3><p>Local youth leaders take over the library and mentoring, then help the next village start.</p></div>
  </div>
</div></section>

<section class="band"><div class="wrap">
  <div class="section-head"><span class="eyebrow">How you can help</span><h2>Get to know us</h2></div>
  <div class="grid g2">
    <article class="card"><div class="card-body"><h3>Latest updates</h3><p>Read field reports from our Siem Reap team, exam results and stories from the students you support.</p><a class="btn btn-forest" href="{{ route('news') }}" style="justify-self:start">Read the news</a></div></article>
    <article class="card"><div class="card-body"><h3>Meet the team</h3><p>Most of our staff grew up in the provinces where we work. Meet the people behind the programs.</p><a class="btn btn-forest" href="{{ route('about') }}#team" style="justify-self:start">Our team</a></div></article>
  </div>
</div></section>

<section class="band alt"><div class="wrap split">
  <div class="photo program-photo"><img src="{{ asset('sreymom.png') }}" width="1448" height="1086" alt="Sreymom" loading="lazy" decoding="async"></div>
  <div class="stack"><span class="eyebrow">Student story</span>
  <p class="quote">“My parents thought I would stop after grade 9. Now I am the first in my family to sit the BacII exam.”</p>
  <p class="quote-by">Sreymom, grade 12, Kampong Thom province</p>
  <a class="btn btn-forest" href="{{ route('donate') }}#sponsor" style="justify-self:start">Sponsor a student like Sreymom</a></div>
</div></section>

<section class="band"><div class="wrap">
  <div class="section-head" style="display:flex;justify-content:space-between;align-items:end;max-width:none;flex-wrap:wrap;gap:16px"><div class="stack" style="gap:12px"><span class="eyebrow">Latest news</span><h2>From the field</h2></div><a class="more" href="{{ route('news') }}" style="font-weight:700">View all news &rarr;</a></div>
  <div class="grid g3">
    <article class="card"><div class="photo ph-1" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M6 26 32 10l26 16"/><path d="M12 26v28h40V26"/><path d="M26 54V40h12v14"/><circle cx="32" cy="28" r="4"/></svg></div><div class="card-body"><span class="news-meta">Oct 28, 2026</span><h3>BacII results: 47 of our students passed</h3><a class="more" href="{{ route('news') }}">Read more &rarr;</a></div></article>
    <article class="card"><div class="photo ph-2" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M8 14c8-3 16-3 24 2v36c-8-5-16-5-24-2z"/><path d="M56 14c-8-3-16-3-24 2v36c8-5 16-5 24-2z"/></svg></div><div class="card-body"><span class="news-meta">Sep 15, 2026</span><h3>Our 38th village library opens in Prasat Bakong</h3><a class="more" href="{{ route('news') }}">Read more &rarr;</a></div></article>
    <article class="card"><div class="photo ph-3" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="16" cy="42" r="10"/><circle cx="48" cy="42" r="10"/><path d="M16 42l10-18h14l8 18M26 24l8 18h-6M38 16h6"/></svg></div><div class="card-body"><span class="news-meta">Aug 2, 2026</span><h3>120 bicycles delivered before the new school year</h3><a class="more" href="{{ route('news') }}">Read more &rarr;</a></div></article>
  </div>
</div></section>

<section class="band alt" hidden><div class="wrap">
  <div class="section-head center" style="margin-inline:auto"><span class="eyebrow">Our partners</span><h2>Supported by</h2></div>
  <div class="partners"><div class="partner">Partner logo</div><div class="partner">Partner logo</div><div class="partner">Partner logo</div><div class="partner">Partner logo</div><div class="partner">Partner logo</div><div class="partner">Partner logo</div></div>
  <p class="center mt"><a class="btn btn-forest" href="{{ route('get-involved') }}#partner">Become a partner</a></p>
</div></section>
<section class="band forest"><div class="wrap">
<div class="section-head"><span class="eyebrow">Ways to give</span><h2>Choose how you help</h2></div>
<div class="give-list">
<a class="give" href="{{ route('donate') }}#give"><b>Donate</b><span>Fund where the need is greatest.</span></a>
<a class="give" href="{{ route('donate') }}#sponsor"><b>Sponsor a Student</b><span>$35 a month keeps one teen in high school.</span></a>
<a class="give" href="{{ route('donate') }}#gifts"><b>Gift a Library</b><span>Books and shelves for one village.</span></a>
<a class="give" href="{{ route('donate') }}#gifts"><b>Gift a Bicycle</b><span>Get a student to a school 12 km away.</span></a>
<a class="give" href="{{ route('donate') }}#legacy"><b>Give in Honor</b><span>Celebrate someone with a gift of learning.</span></a>
</div></div></section>
<section class="band alt"><div class="wrap newsletter">
<div class="stack"><span class="eyebrow">Newsletter</span><h2>Letters from the classroom</h2><p class="lede">One short email a month with student stories, exam results and photos from the villages.</p></div>
<form data-msg="Thanks! You're on the list. (Connect this form to your email service when you host the site.)"><div class="field"><label for="nl-email">Email address</label><input id="nl-email" type="email" required placeholder="you@example.com"></div><button class="btn btn-forest" type="submit" style="align-self:end">Subscribe</button><p class="form-msg" hidden style="grid-column:1/-1"></p></form>
</div></section>
</main>
@endsection
