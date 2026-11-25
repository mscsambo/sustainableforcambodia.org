@extends('layouts.site')

@section('title', 'Programs · Sustainable for Cambodia')
@section('description', 'Scholarships, village libraries, teacher training, English & digital skills, and youth leadership in rural Cambodia.')

@section('content')
<main id="main">
<section class="page-hero"><div class="wrap">
<div class="crumbs"><a href="{{ route('home') }}">Home</a> / Programs</div>
<span class="eyebrow">Programs</span><h1>Five programs, one goal: a finished education</h1><p class="lede">Each program targets a different reason students leave school. Together they support a child from first reader to final exam.</p></div></section><section class="band" id="scholarships"><div class="wrap split">
<div class="photo ph-1" role="img" aria-label="Student Scholarships"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="16" cy="42" r="10"/><circle cx="48" cy="42" r="10"/><path d="M16 42l10-18h14l8 18M26 24l8 18h-6M38 16h6"/></svg></div>
<div class="stack"><span class="eyebrow">Grades 7 to 12</span><h2>Student Scholarships</h2><p>For a family earning from one rice harvest a year, a $15 uniform and a bicycle can decide whether a daughter stays in school. Our scholarships cover what keeps students in class.</p><ul style="margin:0;padding-left:20px;display:grid;gap:6px"><li>School uniform, bag and supplies each year</li><li>A bicycle for students living over 3 km from school</li><li>A monthly study stipend tied to attendance</li><li>A mentor visit every school term</li></ul><a class="btn btn-forest" href="{{ route('donate') }}#give" style="justify-self:start">Support this program</a></div>
</div></section><section class="band alt" id="libraries"><div class="wrap split reverse">
<div class="photo ph-2" role="img" aria-label="Village Libraries"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M8 14c8-3 16-3 24 2v36c-8-5-16-5-24-2z"/><path d="M56 14c-8-3-16-3-24 2v36c8-5 16-5 24-2z"/></svg></div>
<div class="stack"><span class="eyebrow">All ages</span><h2>Village Libraries</h2><p>Most rural primary schools have few books outside the textbook. We build reading corners and village libraries with the community, then train local volunteers to run them.</p><ul style="margin:0;padding-left:20px;display:grid;gap:6px"><li>Khmer picture books, novels and English readers</li><li>Saturday reading clubs and story time</li><li>Homework space with solar lighting</li><li>Run by trained youth volunteers</li></ul><a class="btn btn-forest" href="{{ route('donate') }}#give" style="justify-self:start">Support this program</a></div>
</div></section><section class="band" id="teachers"><div class="wrap split">
<div class="photo ph-3" role="img" aria-label="Teacher Training"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><rect x="20" y="8" width="38" height="26" rx="2"/><circle cx="16" cy="30" r="6"/><path d="M6 56c0-9 4-16 10-16s10 7 10 16"/><path d="M22 44l14-14"/></svg></div>
<div class="stack"><span class="eyebrow">Primary & secondary teachers</span><h2>Teacher Training</h2><p>Good teachers keep students coming back. We run workshops with the Provincial Office of Education and follow up with in-class coaching.</p><ul style="margin:0;padding-left:20px;display:grid;gap:6px"><li>Active-learning and reading-instruction workshops</li><li>Classroom coaching visits each term</li><li>Teaching kits: maps, science sets, readers</li><li>Small grants for teacher-led projects</li></ul><a class="btn btn-forest" href="{{ route('donate') }}#give" style="justify-self:start">Support this program</a></div>
</div></section><section class="band alt" id="digital"><div class="wrap split reverse">
<div class="photo ph-4" role="img" aria-label="English & Digital Skills"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><rect x="12" y="14" width="40" height="26" rx="3"/><path d="M4 48h56l-4-8H8z"/><path d="M26 27l4 4 8-8"/></svg></div>
<div class="stack"><span class="eyebrow">Grades 9 to 12</span><h2>English & Digital Skills</h2><p>English and computer skills open doors to university scholarships and jobs in tourism and business. Our after-school centers teach both.</p><ul style="margin:0;padding-left:20px;display:grid;gap:6px"><li>After-school English classes, levels 1–6</li><li>Solar-powered computer labs</li><li>Typing, email, documents and safe internet use</li><li>University and job application coaching</li></ul><a class="btn btn-forest" href="{{ route('donate') }}#give" style="justify-self:start">Support this program</a></div>
</div></section><section class="band" id="leaders"><div class="wrap split">
<div class="photo ph-5" role="img" aria-label="Youth Leaders"><svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><circle cx="22" cy="20" r="7"/><circle cx="44" cy="20" r="7"/><path d="M8 54c0-10 6-18 14-18s14 8 14 18"/><path d="M30 54c0-10 6-18 14-18s12 8 12 18"/></svg></div>
<div class="stack"><span class="eyebrow">Ages 15 to 24</span><h2>Youth Leaders</h2><p>Graduates of our programs become the next mentors. Youth leaders run library clubs, tutor younger students and plan community projects.</p><ul style="margin:0;padding-left:20px;display:grid;gap:6px"><li>Leadership and facilitation training</li><li>Tutoring younger students for the BacII</li><li>Community projects chosen by youth</li><li>Pathway to paid staff roles</li></ul><a class="btn btn-forest" href="{{ route('donate') }}#give" style="justify-self:start">Support this program</a></div>
</div></section><section class="band forest"><div class="wrap">
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
