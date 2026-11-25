@extends('layouts.site')

@section('title', 'Contact · Sustainable for Cambodia')
@section('description', 'Contact Sustainable for Cambodia.')

@section('content')
<main id="main">
<section class="page-hero"><div class="wrap">
<div class="crumbs"><a href="{{ route('home') }}">Home</a> / Contact</div>
<span class="eyebrow">Contact</span><h1>Get in touch</h1><p class="lede">Want to donate, sponsor a program or partner with us? Tell us how you would like to support Sustainable for Cambodia.</p></div></section>
<section class="band"><div class="wrap split" style="align-items:start">
  <div class="panel">
    <h2>How would you like to help?</h2><form id="contact-form" action="mailto:info@sustainableforcambodia.org" method="post" enctype="text/plain" aria-describedby="contact-help">
      <div class="row2"><div class="field"><label for="c-name">Your name</label><input id="c-name" name="Name" autocomplete="name" required></div><div class="field"><label for="c-email">Email</label><input id="c-email" name="Email" type="email" autocomplete="email" required></div></div>
      <div class="field"><label for="c-topic">I'm asking about</label><select id="c-topic" name="Topic" required><option value="">Choose a topic</option><option>Making a donation</option><option>Sponsoring a student</option><option>Sponsoring a program</option><option>Volunteering</option><option>Visiting a school</option><option>Partnering as an organization</option><option>Something else</option></select></div>
      <div class="field"><label for="c-org">Organization (optional)</label><input id="c-org" name="Organization" autocomplete="organization"></div><div class="field"><label for="c-msg">Message</label><textarea id="c-msg" name="Message" required></textarea></div>
      <button class="btn btn-forest" type="submit" style="justify-self:start">Open email draft</button>
      <p id="contact-help">This opens a draft in your email app. Review it and select Send, or email us directly at the address on this page.</p>
    </form>
  </div>
  <div class="stack">
    <div class="card"><div class="card-body"><span class="eyebrow">Cambodia office</span><h3>Siem Reap</h3><p>Street and village address to be added<br>Siem Reap Province, Cambodia</p><p>Phone: <a href="tel:+85563874654">+855 (0) 63 87 46 54</a></p></div></div>
    <div class="card"><div class="card-body"><span class="eyebrow">Email</span><h3 style="user-select:all;word-break:break-all"><a href="mailto:info@sustainableforcambodia.org">info@sustainableforcambodia.org</a></h3><p>Office hours: Monday to Friday, 8:00–17:00 (Cambodia time, UTC+7)</p></div></div>
  </div>
</div></section>
</main>
@endsection
