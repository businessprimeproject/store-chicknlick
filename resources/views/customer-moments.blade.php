<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Moments | Chick 'n Lick</title>
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
  <main class="mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:py-16">
    <div class="mb-10 max-w-3xl">
      <p class="mb-3 font-bold uppercase tracking-[0.2em] text-[#fe6a29]">Shared With Love</p>
      <h1 class="text-4xl font-black uppercase sm:text-6xl">Customer Moments</h1>
      <p class="mt-4 text-lg leading-8 text-gray-700">Real moments and memorable experiences shared by our customers across the Chick ’n Lick community.</p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <figure class="overflow-hidden rounded-2xl border-2 border-[#1c1b1b] bg-white shadow-[5px_5px_0_#1c1b1b]"><img class="h-72 w-full object-cover" src="{{ asset('images/full-house-full-of-flavor.jpg') }}" alt="A full house enjoying Chick ’n Lick"><figcaption class="p-4 font-bold">FULL HOUSE, FULL OF FLAVOR</figcaption></figure>
      <figure class="overflow-hidden rounded-2xl border-2 border-[#1c1b1b] bg-white shadow-[5px_5px_0_#1c1b1b]"><img class="h-72 w-full object-cover" src="{{ asset('images/no-1-student-favorite.jpg') }}" alt="Students enjoying Chick ’n Lick"><figcaption class="p-4 font-bold">No. 1 Student Favorite</figcaption></figure>
      <figure class="overflow-hidden rounded-2xl border-2 border-[#1c1b1b] bg-white shadow-[5px_5px_0_#1c1b1b]"><img class="h-72 w-full object-cover" src="{{ asset('images/serving-community-with-love.jpg') }}" alt="Chick ’n Lick serving the community"><figcaption class="p-4 font-bold">Serving our community with love</figcaption></figure>
      <figure class="overflow-hidden rounded-2xl border-2 border-[#1c1b1b] bg-white shadow-[5px_5px_0_#1c1b1b]"><img class="h-72 w-full object-cover" src="{{ asset('images/barkada-cravings-satisfied.jpg') }}" alt="Friends enjoying Chick ’n Lick together"><figcaption class="p-4 font-bold">Barkada Cravings Satisfied</figcaption></figure>
      <figure class="overflow-hidden rounded-2xl border-2 border-[#1c1b1b] bg-white shadow-[5px_5px_0_#1c1b1b]"><img class="h-72 w-full object-cover" src="{{ asset('images/perfect-date-spot.jpg') }}" alt="A couple enjoying Chick ’n Lick together"><figcaption class="p-4 font-bold">Perfect Date Spot ❤️</figcaption></figure>
      <div class="flex h-72 items-center justify-center rounded-2xl border-2 border-dashed border-[#1c1b1b] bg-[#ffc107] text-center shadow-[5px_5px_0_#1c1b1b]"><span class="text-4xl font-black uppercase">+ More Photos</span></div>
    </div>
  </main>
</body>
</html>
