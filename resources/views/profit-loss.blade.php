<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monthly Profit &amp; Loss Simulation | Chick 'n Lick</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-[#fff8e7] text-[#1c1b1b]">
  <header class="border-b-2 border-[#1c1b1b] bg-white shadow-[0_4px_0_#1c1b1b]">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8">
      <a href="{{ route('home') }}" class="text-xl font-black uppercase tracking-tight">Chick ’n Lick</a>
      <a href="{{ route('franchise') }}" class="rounded-lg border-2 border-[#1c1b1b] bg-[#fe6a29] px-4 py-2 font-bold text-white shadow-[3px_3px_0_#1c1b1b]">Franchise Page</a>
    </div>
  </header>

  <main class="mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:py-16">
    <div class="mx-auto mb-10 max-w-3xl text-center">
      <p class="mb-3 font-bold uppercase tracking-[0.2em] text-[#fe6a29]">Transparent Capital Investment</p>
      <h1 class="text-4xl font-black uppercase leading-tight sm:text-6xl">Monthly Profit &amp; Loss Simulation</h1>
      <p class="mt-4 text-lg leading-8 text-gray-700">Adjust the assumptions below to estimate your monthly sales, operating expenses, and potential net income.</p>
    </div>

    <div class="grid gap-8 lg:grid-cols-12">
      <section class="rounded-3xl border-2 border-[#1c1b1b] bg-white p-6 shadow-[5px_5px_0_#1c1b1b] sm:p-8 lg:col-span-5">
        <h2 class="mb-6 text-2xl font-black uppercase">Monthly Assumptions</h2>
        <div class="space-y-5">
          <label class="block font-bold">Average daily sales (₱)<input id="dailySales" type="number" value="12000" min="0" class="mt-2 w-full rounded-lg border-2 border-[#1c1b1b] p-3" /></label>
          <label class="block font-bold">Operating days per month<input id="operatingDays" type="number" value="30" min="1" max="31" class="mt-2 w-full rounded-lg border-2 border-[#1c1b1b] p-3" /></label>
          <label class="block font-bold">Food and packaging cost (%)<input id="costRate" type="number" value="38" min="0" max="100" class="mt-2 w-full rounded-lg border-2 border-[#1c1b1b] p-3" /></label>
          <label class="block font-bold">Staff wages (₱)<input id="wages" type="number" value="65000" min="0" class="mt-2 w-full rounded-lg border-2 border-[#1c1b1b] p-3" /></label>
          <label class="block font-bold">Rent and utilities (₱)<input id="rentUtilities" type="number" value="45000" min="0" class="mt-2 w-full rounded-lg border-2 border-[#1c1b1b] p-3" /></label>
          <label class="block font-bold">Other monthly expenses (₱)<input id="otherExpenses" type="number" value="15000" min="0" class="mt-2 w-full rounded-lg border-2 border-[#1c1b1b] p-3" /></label>
        </div>
        <p class="mt-6 text-sm text-gray-600">This is an illustrative planning tool only. Actual results vary by location, sales, costs, staffing, and operating conditions.</p>
      </section>

      <section class="lg:col-span-7">
        <div class="rounded-3xl border-4 border-[#1c1b1b] bg-[#ffc107] p-6 shadow-[6px_6px_0_#1c1b1b] sm:p-10">
          <p class="font-bold uppercase tracking-wider">Estimated Monthly Result</p>
          <p id="netProfit" class="mt-3 text-5xl font-black sm:text-7xl">₱0</p>
          <p id="resultLabel" class="mt-2 text-lg font-bold uppercase">Estimated net profit</p>
        </div>
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="rounded-2xl border-2 border-[#1c1b1b] bg-white p-5"><p class="font-bold uppercase text-gray-600">Monthly revenue</p><p id="revenue" class="mt-2 text-3xl font-black">₱0</p></div>
          <div class="rounded-2xl border-2 border-[#1c1b1b] bg-white p-5"><p class="font-bold uppercase text-gray-600">Cost of goods sold</p><p id="cogs" class="mt-2 text-3xl font-black">₱0</p></div>
          <div class="rounded-2xl border-2 border-[#1c1b1b] bg-white p-5"><p class="font-bold uppercase text-gray-600">Total operating expenses</p><p id="opex" class="mt-2 text-3xl font-black">₱0</p></div>
          <div class="rounded-2xl border-2 border-[#1c1b1b] bg-white p-5"><p class="font-bold uppercase text-gray-600">Estimated margin</p><p id="margin" class="mt-2 text-3xl font-black">0%</p></div>
        </div>
        <a href="{{ route('franchise') }}#franchise-form" class="mt-8 inline-flex rounded-xl border-2 border-[#1c1b1b] bg-[#fe6a29] px-7 py-4 font-black uppercase text-white shadow-[3px_3px_0_#1c1b1b] hover:bg-[#1c1b1b]">Start Your Franchise Inquiry →</a>
      </section>
    </div>
  </main>
  <script>
    const peso = value => '₱' + Math.round(value).toLocaleString('en-PH');
    function calculate() {
      const daily = Number(document.getElementById('dailySales').value) || 0;
      const days = Number(document.getElementById('operatingDays').value) || 0;
      const revenue = daily * days;
      const cogs = revenue * ((Number(document.getElementById('costRate').value) || 0) / 100);
      const opex = (Number(document.getElementById('wages').value) || 0) + (Number(document.getElementById('rentUtilities').value) || 0) + (Number(document.getElementById('otherExpenses').value) || 0);
      const net = revenue - cogs - opex;
      document.getElementById('revenue').textContent = peso(revenue);
      document.getElementById('cogs').textContent = peso(cogs);
      document.getElementById('opex').textContent = peso(opex);
      document.getElementById('netProfit').textContent = peso(net);
      document.getElementById('margin').textContent = (revenue ? ((net / revenue) * 100).toFixed(1) : 0) + '%';
      document.getElementById('resultLabel').textContent = net >= 0 ? 'Estimated net profit' : 'Estimated net loss';
    }
    document.querySelectorAll('input').forEach(input => input.addEventListener('input', calculate));
    calculate();
  </script>
</body>
</html>
