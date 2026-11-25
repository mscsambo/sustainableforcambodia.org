@extends('layouts.site')

@section('title', 'About · Sustainable for Cambodia')
@section('description', 'About Sustainable for Cambodia: our story, team, board and finances.')

@section('content')
<main id="main">
<section class="page-hero"><div class="wrap">
<div class="crumbs"><a href="{{ route('home') }}">Home</a> / Who We Are</div>
<span class="eyebrow">Who we are</span><h1>Local people, keeping local kids in school</h1><p class="lede">We started in 2026 with one reading room in a Siem Reap village. Today we work alongside schools and families across three provinces.</p></div></section>
<section class="band" id="story"><div class="wrap split">
  <div class="stack"><span class="eyebrow">Our story</span><h2>Why we exist</h2>
  <p>In many rural communes, the nearest lower-secondary school is more than 5 km away, and families need teenagers to help with the rice harvest. By grade 9, many students have stopped coming.</p>
  <p>Sustainable for Cambodia was founded by Cambodian teachers and international supporters who believed those students only needed a little help to stay: a bicycle, a uniform, a library to study in, and an adult who checks in.</p>
  {{-- <p class="sample-note">Sample history. Replace with your organization's own story.</p> --}}
</div>
  <div class="photo ph-1" role="img" aria-label="Founding village school"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M6 26 32 10l26 16"/><path d="M12 26v28h40V26"/><path d="M26 54V40h12v14"/><circle cx="32" cy="28" r="4"/></svg></div>
</div></section>
<section class="band alt"><div class="wrap">
  <div class="grid g3">
    <div class="card"><div class="card-body"><span class="eyebrow">Mission</span><h3>Keep every child learning</h3><p>Remove the money, distance and confidence barriers that push rural Cambodian children out of school.</p></div></div>
    <div class="card"><div class="card-body"><span class="eyebrow">Vision</span><h3>Villages led by graduates</h3><p>Every village has young people who finished grade 12 and came back to teach, lead and build.</p></div></div>
    <div class="card"><div class="card-body"><span class="eyebrow">Values</span><h3>Local, honest, lasting</h3><p>Local staff make decisions, we report every dollar, and every program is designed to be handed over.</p></div></div>
  </div>
</div></section>
<section class="band" id="team"><div class="wrap">
  <div class="section-head"><span class="eyebrow">On-site team</span><h2>Our team in Cambodia</h2><p class="lede">Placeholder names and roles. Swap in your staff and their photos.</p></div>
  <div class="grid g4"><div class="person"><div class="avatar" style="background:var(--forest)">SC</div><h3 style="font-size:1.05rem">Sophea Chan</h3><small>Country Director</small></div><div class="person"><div class="avatar" style="background:#705613">DK</div><h3 style="font-size:1.05rem">Dara Kim</h3><small>Programs Manager</small></div><div class="person"><div class="avatar" style="background:var(--trust-blue)">MS</div><h3 style="font-size:1.05rem">Malis Sok</h3><small>Scholarship Coordinator</small></div><div class="person"><div class="avatar" style="background:var(--forest-deep)">VL</div><h3 style="font-size:1.05rem">Vannak Ly</h3><small>Teacher Trainer</small></div><div class="person"><div class="avatar" style="background:#45612f">CH</div><h3 style="font-size:1.05rem">Chenda Heng</h3><small>Library Program Lead</small></div><div class="person"><div class="avatar" style="background:var(--forest)">RP</div><h3 style="font-size:1.05rem">Rithy Pen</h3><small>Finance Officer</small></div><div class="person"><div class="avatar" style="background:#705613">BO</div><h3 style="font-size:1.05rem">Bopha Ouk</h3><small>Youth Mentor</small></div><div class="person"><div class="avatar" style="background:var(--trust-blue)">YN</div><h3 style="font-size:1.05rem">Your Name</h3><small>Volunteer Coordinator</small></div></div>
</div></section>
<section class="band alt" id="board"><div class="wrap">
  <div class="section-head"><span class="eyebrow">Governance</span><h2>Board of Directors</h2></div>
  <div class="grid g4"><div class="card"><div class="card-body"><h3 style="font-size:1.05rem">Edward Clarkson</h3><p>Board Chair</p></div></div><div class="card"><div class="card-body"><h3 style="font-size:1.05rem">Brandon Adams</h3><p>Treasurer</p></div></div><div class="card"><div class="card-body"><h3 style="font-size:1.05rem">Nash Shirley</h3><p>Secretary</p></div></div><div class="card"><div class="card-body"><h3 style="font-size:1.05rem">Tyler Marks</h3><p>Member, Education Advisor</p></div></div></div>
</div></section>
<section class="band" id="finances"><div class="wrap split">
  <div class="stack"><span class="eyebrow">Finances</span><h2>Where your money goes</h2><p>We publish an audited annual report every year. In our last financial year, 84 cents of every dollar went directly to programs.</p>
  <div><div class="bar" role="img" aria-label="Spending: 84% programs, 10% operations, 6% fundraising"><span style="width:84%;background:var(--accent)"></span><span style="width:10%;background:var(--gold)"></span><span style="width:6%;background:var(--muted)"></span></div>
  <div class="legend"><span><i style="background:var(--accent)"></i>Programs 84%</span><span><i style="background:var(--gold)"></i>Operations 10%</span><span><i style="background:var(--muted)"></i>Fundraising 6%</span></div></div>
  <p class="sample-note">Sample figures. Replace with your audited numbers.</p>
  <a class="btn btn-forest" href="#" style="justify-self:start">Annual Report (PDF)</a></div>
  <div class="photo ph-2" role="img" aria-label="Annual report cover"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M32 54S8 40 8 24a12 12 0 0 1 24-4 12 12 0 0 1 24 4c0 16-24 30-24 30z"/></svg></div>
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
</main>
@endsection
