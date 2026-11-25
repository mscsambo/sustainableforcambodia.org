@extends('layouts.site')

@section('title', 'Donate · Sustainable for Cambodia')
@section('description', 'Donate, sponsor a student, give a gift or leave a legacy.')

@section('content')
<main id="main">
<section class="page-hero"><div class="wrap">
<div class="crumbs"><a href="{{ route('home') }}">Home</a> / Contribute</div>
<span class="eyebrow">Contribute</span><h1>Your gift keeps a student in class</h1><p class="lede">Most of our students are the first in their families to reach high school. A gift today helps them get to graduation.</p></div></section>
<section class="band" id="give"><div class="wrap split" style="align-items:start">
  <div class="panel">
    <form id="donate-form" data-msg="Thank you! Online payment is not connected yet. Link this form to your payment provider when you host the site.">
      <div class="seg" role="group" aria-label="Gift frequency"><button type="button" data-freq="monthly" aria-pressed="true">Monthly</button><button type="button" data-freq="once" aria-pressed="false">One time</button></div>
      <div class="amounts" role="group" aria-label="Amount in US dollars"><button type="button" class="chip" data-amt="10" aria-pressed="false">$10</button><button type="button" class="chip" data-amt="25" aria-pressed="false">$25</button><button type="button" class="chip" data-amt="50" aria-pressed="true">$50</button><button type="button" class="chip" data-amt="100" aria-pressed="false">$100</button></div>
      <div class="field"><label for="other-amt">Other amount (USD)</label><input id="other-amt" type="number" min="1" inputmode="numeric" placeholder="e.g. 250"></div>
      <p class="impact-line" id="impact-line" aria-live="polite"></p>
      <div class="row2"><div class="field"><label for="d-name">Full name</label><input id="d-name" required></div><div class="field"><label for="d-email">Email</label><input id="d-email" type="email" required></div></div>
      <div class="field"><label for="d-fund">Direct my gift to</label><select id="d-fund"><option>Where it's needed most</option><option>Student Scholarships</option><option>Village Libraries</option><option>Teacher Training</option><option>English &amp; Digital Skills</option><option>Youth Leaders</option></select></div>
      <div class="field"><label for="d-honor">In honor of (optional)</label><input id="d-honor" placeholder="Name of the person you're honoring"></div>
      <button class="btn btn-gold" id="donate-submit" type="submit">Give $50 monthly</button>
      <p class="form-msg" hidden></p>
    </form>
  </div>
  <div class="stack"><span class="eyebrow">What your gift does</span><h2>Real costs, real results</h2>
  <table class="impact-table"><tbody>
  <tr><td>$10</td><td>Notebooks, pens and a school bag for one student</td></tr>
  <tr><td>$25</td><td>20 Khmer-language books for a village reading corner</td></tr>
  <tr><td>$50</td><td>One month of a high-school scholarship</td></tr>
  <tr><td>$80</td><td>A new bicycle for a student who lives 12 km from school</td></tr>
  <tr><td>$100</td><td>A teacher-training workshop for 5 primary teachers</td></tr>
  <tr><td>$250</td><td>A term of BacII exam tutoring for a grade 12 class</td></tr>
  </tbody></table>
  <p class="sample-note">Sample costs. Update them to match your programs.</p></div>
</div></section>
<section class="band alt" id="sponsor"><div class="wrap split">
  <div class="photo ph-5" role="img" aria-label="Sponsored student"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="22" cy="20" r="7"/><circle cx="44" cy="20" r="7"/><path d="M8 54c0-10 6-18 14-18s14 8 14 18"/><path d="M30 54c0-10 6-18 14-18s12 8 12 18"/></svg></div>
  <div class="stack"><span class="eyebrow">Sponsor a student</span><h2>$35 a month. One student. All the way to grade 12.</h2>
  <p>Sponsorship covers a student's uniform, supplies, bicycle, stipend and mentoring. You'll receive a photo and letter from your student twice a year and their school report each term.</p>
  <div class="btn-row"><a class="btn btn-forest" href="{{ route('contact') }}">Sponsor a student</a><a class="btn btn-ghost" href="#">Sponsor login</a></div></div>
</div></section>
<section class="band" id="gifts"><div class="wrap">
  <div class="section-head"><span class="eyebrow">Village gift program</span><h2>Give a gift that lasts</h2><p class="lede">Buy a gift in someone's name and we'll send them a card about the difference it made.</p></div>
  <div class="grid g4">
    <div class="card"><div class="photo ph-1" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="16" cy="42" r="10"/><circle cx="48" cy="42" r="10"/><path d="M16 42l10-18h14l8 18M26 24l8 18h-6M38 16h6"/></svg></div><div class="card-body"><h3>A bicycle</h3><p>$80. Cuts a 90-minute walk to 25 minutes.</p></div></div>
    <div class="card"><div class="photo ph-2" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M8 14c8-3 16-3 24 2v36c-8-5-16-5-24-2z"/><path d="M56 14c-8-3-16-3-24 2v36c8-5 16-5 24-2z"/></svg></div><div class="card-body"><h3>A bookshelf</h3><p>$150. A full shelf of books for a reading corner.</p></div></div>
    <div class="card"><div class="photo ph-3" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><rect x="12" y="14" width="40" height="26" rx="3"/><path d="M4 48h56l-4-8H8z"/><path d="M26 27l4 4 8-8"/></svg></div><div class="card-body"><h3>A computer</h3><p>$400. One refurbished laptop for a solar lab.</p></div></div>
    <div class="card"><div class="photo ph-4" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M6 26 32 10l26 16"/><path d="M12 26v28h40V26"/><path d="M26 54V40h12v14"/><circle cx="32" cy="28" r="4"/></svg></div><div class="card-body"><h3>A library</h3><p>$3,500. A complete village library, built with the community.</p></div></div>
  </div>
</div></section>
<section class="band forest" id="legacy"><div class="wrap split">
  <div class="stack"><span class="eyebrow">Legacy giving</span><h2>Leave a legacy of learning</h2><p class="lede">A gift in your will or from a retirement account can fund scholarships for years to come. We're happy to talk through the options with you and your advisor.</p><a class="btn btn-gold" href="{{ route('contact') }}" style="justify-self:start">Talk to us</a></div>
  <div class="stack"><span class="eyebrow">Other ways to give</span><div class="give-list"><div class="give"><b>Bank transfer</b><span>Details on request.</span></div><div class="give"><b>Workplace giving</b><span>Payroll and matching gifts.</span></div><div class="give"><b>Shop &amp; give</b><span>Charity shopping programs.</span></div></div></div>
</div></section>
</main>
@endsection
