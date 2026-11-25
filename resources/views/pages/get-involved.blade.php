@extends('layouts.site')

@section('title', 'Get Involved · Sustainable for Cambodia')
@section('description', 'Volunteer, visit a school, fundraise or partner with us.')

@section('content')
<main id="main">
<section class="page-hero"><div class="wrap">
<div class="crumbs"><a href="{{ route('home') }}">Home</a> / Get Involved</div>
<span class="eyebrow">Get involved</span><h1>Bring your time, skills or community</h1><p class="lede">Volunteer with us in Cambodia or from home, visit our partner schools, or rally your friends and workplace.</p></div></section>
<section class="band" id="volunteer"><div class="wrap split">
  <div class="stack"><span class="eyebrow">Volunteer on site</span><h2>Volunteer in Siem Reap</h2>
  <p>We welcome volunteers for stays of 4 weeks or longer who support our local teachers rather than replace them. Common roles: English conversation partner, library club helper, computer lab assistant, photographer.</p>
  <ul style="margin:0;padding-left:20px"><li>Minimum stay: 4 weeks</li><li>Background check required for all roles with children</li><li>Volunteers cover their own travel and housing</li></ul>
  <a class="btn btn-forest" href="{{ route('contact') }}" style="justify-self:start">Apply to volunteer</a></div>
  <div class="photo ph-3" role="img" aria-label="Volunteer helping in class"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><rect x="20" y="8" width="38" height="26" rx="2"/><circle cx="16" cy="30" r="6"/><path d="M6 56c0-9 4-16 10-16s10 7 10 16"/><path d="M22 44l14-14"/></svg></div>
</div></section>
<section class="band alt" id="visit"><div class="wrap split reverse">
  <div class="stack"><span class="eyebrow">School visits &amp; trips</span><h2>Visit a partner school</h2>
  <p>Traveling to Cambodia? Join a half-day visit to a village library and school near Siem Reap, led by our staff. Visits run Tuesday to Thursday mornings during term time.</p>
  <p>We also host small group trips once a year for supporters, including school visits, a library opening and time at Angkor.</p>
  <a class="btn btn-forest" href="{{ route('contact') }}" style="justify-self:start">Ask about a visit</a></div>
  <div class="photo ph-1" role="img" aria-label="Visitors at a village school"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M6 26 32 10l26 16"/><path d="M12 26v28h40V26"/><path d="M26 54V40h12v14"/><circle cx="32" cy="28" r="4"/></svg></div>
</div></section>
<section class="band" id="fundraise"><div class="wrap">
  <div class="section-head"><span class="eyebrow">Fundraise</span><h2>Raise money your way</h2></div>
  <div class="grid g3">
    <div class="card"><div class="photo ph-2" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="16" cy="42" r="10"/><circle cx="48" cy="42" r="10"/><path d="M16 42l10-18h14l8 18M26 24l8 18h-6M38 16h6"/></svg></div><div class="card-body"><h3>Ride or run</h3><p>Sign up for a race or cycle challenge and ask friends to sponsor each kilometer.</p></div></div>
    <div class="card"><div class="photo ph-4" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M32 54S8 40 8 24a12 12 0 0 1 24-4 12 12 0 0 1 24 4c0 16-24 30-24 30z"/></svg></div><div class="card-body"><h3>Birthday fundraiser</h3><p>Ask for school bags and books instead of gifts this year.</p></div></div>
    <div class="card"><div class="photo ph-5" role="img" aria-label="Photo placeholder"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="22" cy="20" r="7"/><circle cx="44" cy="20" r="7"/><path d="M8 54c0-10 6-18 14-18s14 8 14 18"/><path d="M30 54c0-10 6-18 14-18s12 8 12 18"/></svg></div><div class="card-body"><h3>School-to-school</h3><p>Partner your class or school with one of ours and exchange letters and projects.</p></div></div>
  </div>
</div></section>
<section class="band forest" id="partner"><div class="wrap split">
  <div class="stack"><span class="eyebrow">Organizations</span><h2>Partner with us</h2><p class="lede">Companies, Rotary and Lions clubs, schools and foundations can sponsor a program, a library or a full village partnership. We report back with photos and results each term.</p>
  <a class="btn btn-gold" href="{{ route('contact') }}" style="justify-self:start">Start a conversation</a></div>
  <div class="give-list"><div class="give"><b>Library sponsor</b><span>Name a village library.</span></div><div class="give"><b>Program sponsor</b><span>Fund a full year of one program.</span></div><div class="give"><b>Matching gifts</b><span>Double your staff donations.</span></div><div class="give"><b>In-kind</b><span>Laptops, books, solar kits.</span></div></div>
</div></section>
<section class="band alt"><div class="wrap newsletter">
<div class="stack"><span class="eyebrow">Newsletter</span><h2>Letters from the classroom</h2><p class="lede">One short email a month with student stories, exam results and photos from the villages.</p></div>
<form data-msg="Thanks! You're on the list. (Connect this form to your email service when you host the site.)"><div class="field"><label for="nl-email">Email address</label><input id="nl-email" type="email" required placeholder="you@example.com"></div><button class="btn btn-forest" type="submit" style="align-self:end">Subscribe</button><p class="form-msg" hidden style="grid-column:1/-1"></p></form>
</div></section>
</main>
@endsection
