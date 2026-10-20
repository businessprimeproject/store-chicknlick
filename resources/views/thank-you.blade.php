<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You | Chick 'n Lick</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-[#fff8e7] text-[#1c1b1b]">
  <main class="min-h-screen flex items-center justify-center px-6 py-16">
    <section class="w-full max-w-2xl rounded-3xl border-2 border-[#1c1b1b] bg-white p-8 text-center shadow-[6px_6px_0px_#1c1b1b] sm:p-14">
      <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full border-2 border-[#1c1b1b] bg-[#ffc107] text-4xl">✓</div>
      <p class="mb-3 font-bold uppercase tracking-[0.2em] text-[#fe6a29]">Inquiry received</p>
      <h1 class="mb-5 text-4xl font-black uppercase sm:text-5xl">Thank You!</h1>
      <p class="mx-auto max-w-xl text-lg leading-8 text-gray-700">
        Salamat for your interest in Chick ’n Lick. Our franchise team has received your application and will contact you within 24–48 hours.
      </p>
      <div class="mt-9 flex flex-col justify-center gap-4 sm:flex-row">
        <a href="{{ route('home') }}" class="rounded-xl border-2 border-[#1c1b1b] bg-[#fe6a29] px-7 py-3 font-bold uppercase text-white shadow-[3px_3px_0px_#1c1b1b] hover:bg-[#ffc107] hover:text-[#1c1b1b]">Back to Home</a>
        <a href="{{ route('franchise') }}" class="rounded-xl border-2 border-[#1c1b1b] bg-white px-7 py-3 font-bold uppercase shadow-[3px_3px_0px_#1c1b1b] hover:bg-[#fff8e7]">View Franchise Page</a>
      </div>
    </section>
  </main>
</body>
</html>
