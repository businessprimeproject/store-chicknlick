<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profit &amp; Loss Statement | Chick 'n Lick</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-[#fff8e7] text-[#1c1b1b]">
  <header class="border-b-2 border-[#1c1b1b] bg-white shadow-[0_4px_0_#1c1b1b]">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8">
      <a href="{{ route('home') }}" class="text-xl font-black uppercase tracking-tight">Chick ’n Lick</a>
      <div class="flex gap-3">
        <a href="{{ route('profit-loss') }}" class="rounded-lg border-2 border-[#1c1b1b] bg-[#ffc107] px-4 py-2 font-bold shadow-[3px_3px_0_#1c1b1b]">Simulation</a>
        <a href="{{ route('franchise') }}" class="hidden rounded-lg border-2 border-[#1c1b1b] bg-[#fe6a29] px-4 py-2 font-bold text-white shadow-[3px_3px_0_#1c1b1b] sm:block">Franchise Page</a>
      </div>
    </div>
  </header>

  <main class="mx-auto max-w-5xl px-5 py-12 sm:px-8 lg:py-16">
    <div class="mb-10 text-center">
      <p class="mb-3 font-bold uppercase tracking-[0.2em] text-[#fe6a29]">Financial Planning Overview</p>
      <h1 class="text-4xl font-black uppercase sm:text-6xl">Profit &amp; Loss Statement</h1>
      <p class="mt-4 text-lg text-gray-700">Illustrative monthly statement for a Chick ’n Lick franchise location</p>
    </div>

    <section class="overflow-hidden rounded-3xl border-2 border-[#1c1b1b] bg-white shadow-[6px_6px_0_#1c1b1b]">
      <div class="border-b-2 border-[#1c1b1b] bg-[#ffc107] p-6 sm:p-8">
        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
          <div><p class="font-black uppercase">Chick ’n Lick Franchise</p><p class="text-gray-700">Monthly Profit &amp; Loss Statement</p></div>
          <div class="text-left sm:text-right"><p class="font-bold uppercase">Period</p><p class="text-gray-700">Sample Monthly Estimate</p></div>
        </div>
      </div>

      <div class="p-6 sm:p-10">
        <div class="mb-8 flex items-center justify-between border-b-4 border-[#1c1b1b] pb-3"><h2 class="text-2xl font-black uppercase">Revenue</h2><span class="font-bold">Amount</span></div>
        <div class="space-y-3 text-lg">
          <div class="flex justify-between gap-4"><span>Food and beverage sales</span><span class="font-bold">₱360,000</span></div>
          <div class="flex justify-between gap-4 border-b-2 border-gray-200 pb-4"><span>Other sales</span><span class="font-bold">₱0</span></div>
          <div class="flex justify-between gap-4 pt-1 text-xl font-black"><span>Total Revenue</span><span>₱360,000</span></div>
        </div>

        <div class="mb-8 mt-12 flex items-center justify-between border-b-4 border-[#1c1b1b] pb-3"><h2 class="text-2xl font-black uppercase">Cost of Sales</h2><span class="font-bold">Amount</span></div>
        <div class="space-y-3 text-lg">
          <div class="flex justify-between gap-4"><span>Food and ingredients</span><span class="font-bold">₱118,800</span></div>
          <div class="flex justify-between gap-4 border-b-2 border-gray-200 pb-4"><span>Packaging and consumables</span><span class="font-bold">₱18,000</span></div>
          <div class="flex justify-between gap-4 pt-1 text-xl font-black"><span>Total Cost of Sales</span><span>₱136,800</span></div>
          <div class="mt-4 flex justify-between gap-4 rounded-xl bg-[#fff8e7] p-4 text-xl font-black"><span>Gross Profit</span><span>₱223,200</span></div>
        </div>

        <div class="mb-8 mt-12 flex items-center justify-between border-b-4 border-[#1c1b1b] pb-3"><h2 class="text-2xl font-black uppercase">Operating Expenses</h2><span class="font-bold">Amount</span></div>
        <div class="space-y-3 text-lg">
          <div class="flex justify-between gap-4"><span>Staff wages and benefits</span><span class="font-bold">₱65,000</span></div>
          <div class="flex justify-between gap-4"><span>Rent and utilities</span><span class="font-bold">₱45,000</span></div>
          <div class="flex justify-between gap-4"><span>Marketing and promotions</span><span class="font-bold">₱8,000</span></div>
          <div class="flex justify-between gap-4"><span>Other operating expenses</span><span class="font-bold">₱7,000</span></div>
          <div class="flex justify-between gap-4 border-b-2 border-gray-200 pb-4"><span>Estimated miscellaneous expenses</span><span class="font-bold">₱5,000</span></div>
          <div class="flex justify-between gap-4 pt-1 text-xl font-black"><span>Total Operating Expenses</span><span>₱130,000</span></div>
        </div>

        <div class="mt-10 flex justify-between gap-4 rounded-2xl border-2 border-[#1c1b1b] bg-[#fe6a29] p-5 text-2xl font-black text-white shadow-[4px_4px_0_#1c1b1b] sm:p-6 sm:text-3xl"><span>Estimated Net Profit</span><span>₱93,200</span></div>
        <div class="mt-4 flex justify-between gap-4 text-lg font-bold"><span>Estimated net profit margin</span><span>25.9%</span></div>
      </div>
    </section>

    <div class="mt-8 rounded-2xl border-2 border-[#1c1b1b] bg-white p-5 text-sm leading-6 text-gray-600">
      <strong class="text-[#1c1b1b]">Important:</strong> This statement is an illustrative estimate for planning purposes only. Actual results depend on location, sales volume, pricing, staffing, rent, supplier costs, taxes, permits, and other operating conditions. Review final projections with the Chick ’n Lick franchise team and your financial adviser.
    </div>
  </main>
</body>
</html>
