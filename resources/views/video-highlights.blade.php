<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Highlights | Chick 'n Lick</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-[#fff8e7] text-[#1c1b1b]">
  <header class="border-b-2 border-[#1c1b1b] bg-white shadow-[0_4px_0_#1c1b1b]">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8">
      <a href="{{ route('home') }}" class="text-xl font-black uppercase">Chick ’n Lick</a>
      <a href="{{ route('franchise') }}" class="rounded-lg border-2 border-[#1c1b1b] bg-[#fe6a29] px-4 py-2 font-bold text-white shadow-[3px_3px_0_#1c1b1b]">Back to Franchise</a>
    </div>
  </header>
  <main class="mx-auto max-w-5xl px-5 py-12 sm:px-8 lg:py-16">
    <p class="mb-3 font-bold uppercase tracking-[0.2em] text-[#fe6a29]">Watch With Us</p>
    <h1 class="text-4xl font-black uppercase sm:text-6xl">Video Highlights</h1>
    <p class="mt-4 text-lg leading-8 text-gray-700">Watch Chick ’n Lick moments, celebrations, and franchise stories right here.</p>
    <div class="mt-10 overflow-hidden rounded-2xl border-2 border-[#1c1b1b] bg-black shadow-[6px_6px_0_#1c1b1b]">
      <video class="aspect-video w-full" controls playsinline preload="metadata">
        <source src="{{ asset('videos/chicknlick-reel.mp4') }}" type="video/mp4">
        Your browser does not support embedded video playback.
      </video>
    </div>
    <div class="mt-8">
      <a href="{{ route('franchise') }}" class="inline-flex items-center rounded-lg border-2 border-[#1c1b1b] bg-[#fe6a29] px-5 py-3 font-bold text-white shadow-[3px_3px_0_#1c1b1b] transition hover:-translate-y-0.5">
        ← Back to Franchise
      </a>
    </div>
  </main>
</body>
</html>
