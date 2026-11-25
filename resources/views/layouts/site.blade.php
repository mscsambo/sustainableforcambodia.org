<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700;12..96,800&family=Kantumruy+Pro:wght@500;600&family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700;6..12,800&display=swap">
<link rel="icon" type="image/jpeg" href="{{ asset('logo.jpg') }}">
<link rel="stylesheet" href="{{ asset('site-theme.css') }}">
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
<script src="{{ asset('main.js') }}"></script>
</body>
</html>
