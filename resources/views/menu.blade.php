<!DOCTYPE html><html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Our Menu - Chick 'n Lick | Crispy Fried Chicken &amp; Fast-Casual Franchise</title>
<!-- Google Fonts: Rubik & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&amp;family=Rubik:ital,wght@0,500;0,700;0,800;0,900;1,700&amp;display=swap" rel="stylesheet">
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface": "#fcf9f8",
            "on-error-container": "#93000a",
            "on-secondary-container": "#5b1b00",
            "primary-fixed": "#ffe169",
            "surface-container": "#f0edec",
            "on-error": "#ffffff",
            "tertiary-fixed-dim": "#ccc6b6",
            "on-surface": "#1c1b1b",
            "on-secondary": "#ffffff",
            "primary-fixed-dim": "#e8c400",
            "primary": "#6f5d00",
            "surface-container-high": "#ebe7e7",
            "primary-container": "#ffd91f",
            "surface-container-lowest": "#ffffff",
            "on-background": "#1c1b1b",
            "inverse-primary": "#e8c400",
            "on-primary-fixed": "#221b00",
            "surface-container-highest": "#e5e2e1",
            "on-tertiary": "#ffffff",
            "on-secondary-fixed-variant": "#802a00",
            "on-primary": "#ffffff",
            "tertiary-fixed": "#e9e2d2",
            "secondary": "#a83900",
            "outline": "#7e7760",
            "inverse-on-surface": "#f3f0ef",
            "on-secondary-fixed": "#380d00",
            "surface-variant": "#e5e2e1",
            "secondary-container": "#fe6a29",
            "surface-container-low": "#f6f3f2",
            "outline-variant": "#cfc6ab",
            "on-primary-container": "#715f00",
            "surface-dim": "#dcd9d9",
            "on-tertiary-fixed-variant": "#4a473b",
            "tertiary-container": "#e1dbcb",
            "secondary-fixed-dim": "#ffb59a",
            "surface-tint": "#6f5d00",
            "surface-bright": "#fcf9f8",
            "inverse-surface": "#313030",
            "error-container": "#ffdad6",
            "tertiary": "#625e51",
            "on-surface-variant": "#4c4732",
            "on-primary-fixed-variant": "#544600",
            "error": "#ba1a1a",
            "on-tertiary-container": "#646053",
            "background": "#fcf9f8",
            "on-tertiary-fixed": "#1e1c12",
            "secondary-fixed": "#ffdbce"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "margin-mobile": "1.25rem",
            "margin": "3rem",
            "space-sm": "0.5rem",
            "gutter-mobile": "1rem",
            "space-md": "1rem",
            "space-xs": "0.25rem",
            "space-xl": "2.5rem",
            "gutter": "1.5rem",
            "space-lg": "1.5rem"
          },
          "fontFamily": {
            "body-lg": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Rubik"],
            "body-sm": ["Plus Jakarta Sans"],
            "headline-lg": ["Rubik"],
            "display-lg-mobile": ["Rubik"],
            "body-md": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "headline-sm": ["Rubik"],
            "label-sm": ["Plus Jakarta Sans"],
            "label-lg": ["Rubik"],
            "display-lg": ["Rubik"],
            "headline-md": ["Rubik"]
          },
          "fontSize": {
            "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "500"}],
            "label-md": ["13px", {"lineHeight": "16px", "letterSpacing": "0.04em", "fontWeight": "700"}],
            "headline-lg-mobile": ["28px", {"lineHeight": "34px", "letterSpacing": "0", "fontWeight": "800"}],
            "body-sm": ["14px", {"lineHeight": "20px", "letterSpacing": "0", "fontWeight": "400"}],
            "headline-lg": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
            "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.01em", "fontWeight": "900"}],
            "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
            "title-md": ["18px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "700"}],
            "headline-sm": ["22px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "700"}],
            "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.06em", "fontWeight": "700"}],
            "label-lg": ["16px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "700"}],
            "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "900"}],
            "headline-md": ["28px", {"lineHeight": "36px", "letterSpacing": "0", "fontWeight": "700"}]
          }
        }
      }
    }
  </script>
<style>
    .tactile-card {
      box-shadow: 4px 4px 0px #1c1b1b;
      border: 2px solid #1c1b1b;
      transition: transform 0.15s ease, box-shadow 0.15s ease;
    }
    .tactile-card:hover {
      box-shadow: 6px 6px 0px #1c1b1b;
      transform: translate(-2px, -2px);
    }
    .tactile-btn {
      box-shadow: 3px 3px 0px #1c1b1b;
      border: 2px solid #1c1b1b;
      transition: transform 0.1s ease, box-shadow 0.1s ease;
    }
    .tactile-btn:active {
      transform: translate(2px, 2px);
      box-shadow: 1px 1px 0px #1c1b1b;
    }
    .tactile-chip {
      box-shadow: 3px 3px 0px #1c1b1b;
      border: 2px solid #1c1b1b;
      transition: all 0.15s ease;
    }
    .tactile-chip:hover {
      transform: translate(-1px, -1px);
      box-shadow: 4px 4px 0px #1c1b1b;
    }
    .tactile-chip.active {
      background-color: #ffd91f !important;
      color: #1c1b1b !important;
      font-weight: 800;
      box-shadow: 3px 3px 0px #1c1b1b;
    }
    .sticker-badge {
      box-shadow: 2px 2px 0px #1c1b1b;
      border: 2px solid #1c1b1b;
      transform: rotate(3deg);
    }
  </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased selection:bg-primary-container selection:text-on-surface">
<!-- TOP APP BAR -->
<header class="bg-surface dark:bg-inverse-surface border-b-2 border-on-surface dark:border-outline shadow-[0_4px_0_0_#1c1b1b] dark:shadow-none docked full-width top-0 sticky z-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-20">
<!-- Brand Logo Anchor -->
<a class="flex items-center gap-3 group active:translate-x-[2px] active:translate-y-[2px] transition-transform sm:px-6 pl-4 sm:pl-8" href="{{ route('home') }}">
<img alt="Chick 'n Lick Logo" class="h-16 md:h-20 w-auto object-contain transition-transform hover:scale-105 drop-shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0Vu6jIwYNFUaa6QcNva7nNjQ6Zc3rl9Um9d6v2d0YtcQi98storhCUptzZG5-Rx1Jdcl8Jd2ORWcu-PLx5tQneSscCKFtDyuSlQn_2M7XChBfLgSnKJVdLNkdwuhjq2wq_kscrPHixvVUZW02NVzbgu2UiTdgTBb0TrwPguCywPTTy_eSUG1owWbcn2gBDuvlOlDeFfx3Cv7SGm2OfihsnsInK5wQ2IM11bd9C1B-mClcVlS2dP2BzkHUGzxolRRQOA">
</a>
<!-- Desktop Navigation Links -->
<nav class="hidden md:flex items-center gap-6 lg:gap-8 font-label-lg text-label-lg">
<a class="text-on-surface dark:text-inverse-on-surface hover:text-secondary hover:text-secondary-container dark:hover:text-secondary-fixed-dim transition-colors active:translate-x-[2px] active:translate-y-[2px]" href="{{ route('home') }}">Home</a>
<a class="text-secondary dark:text-secondary-fixed font-bold border-b-2 border-secondary pb-1 active:translate-x-[2px] active:translate-y-[2px]" href="{{ route('menu') }}">Our Menu</a>
<a class="text-on-surface dark:text-inverse-on-surface hover:text-secondary hover:text-secondary-container dark:hover:text-secondary-fixed-dim transition-colors active:translate-x-[2px] active:translate-y-[2px]" href="{{ route('about') }}">About Us</a>
<a class="text-on-surface dark:text-inverse-on-surface hover:text-secondary hover:text-secondary-container dark:hover:text-secondary-fixed-dim transition-colors active:translate-x-[2px] active:translate-y-[2px]" href="{{ route('franchise') }}">Franchise Opportunities</a>
</nav>
<!-- Trailing Action Buttons -->
<div class="flex items-center gap-3">
<a class="hidden sm:inline-flex items-center justify-center bg-secondary-container text-on-secondary px-5 py-2.5 rounded-lg font-label-lg text-label-lg border-2 border-[#101010] shadow-[3px_3px_0_0_#101010] hover:bg-primary-container hover:text-on-surface transition-all active:translate-x-[2px] active:translate-y-[2px]" href="{{ route('franchise') }}#franchise-form">
          Franchise With Us
        </a>
<button aria-label="Toggle menu" class="md:hidden p-2 text-on-surface border-2 border-[#101010] rounded-lg bg-surface-container active:translate-x-0.5 active:translate-y-0.5" onclick="document.getElementById('mobile-nav').classList.toggle('hidden')" type="button">
<span class="material-symbols-outlined text-2xl">menu</span>
</button>
</div>
</div>
<!-- Mobile Dropdown Navigation -->
<div class="hidden md:hidden bg-surface border-t-2 border-on-surface px-4 py-4 space-y-2" id="mobile-nav">
<a class="block px-3 py-2 text-on-surface font-label-lg hover:bg-surface-container rounded" href="{{ route('home') }}">Home</a>
<a class="block px-3 py-2 text-secondary font-bold bg-primary-container/20 rounded" href="{{ route('menu') }}">Our Menu</a>
<a class="block px-3 py-2 text-on-surface font-label-lg hover:bg-surface-container rounded" href="{{ route('about') }}">About Us</a>
<a class="block px-3 py-2 text-on-surface font-label-lg hover:bg-surface-container rounded" href="{{ route('franchise') }}">Franchise Opportunities</a>
<div class="pt-2">
<a class="w-full inline-flex justify-center items-center bg-secondary text-on-secondary font-label-lg py-2.5 rounded-lg border-2 border-[#101010] shadow-[2px_2px_0px_#101010]" href="{{ route('franchise') }}#franchise-form">
          Franchise With Us
        </a>
</div>
</div>
</header>
<main>
<!-- HERO SECTION -->
<section class="relative bg-surface-container-low border-b-2 border-on-surface overflow-hidden py-10 lg:py-16">
<!-- Decorative geometric accents -->
<div class="absolute -right-12 -top-12 w-64 h-64 rounded-full bg-primary-container/30 pointer-events-none"></div>
<div class="absolute left-1/3 -bottom-16 w-80 h-80 rounded-full bg-secondary-fixed/40 pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
<!-- Left Column: Copy & Value Proposition -->
<div class="lg:col-span-6 space-y-6 text-left">
<div class="inline-flex items-center gap-2 bg-primary-container text-on-primary-fixed border-2 border-[#101010] px-4 py-1.5 rounded-full font-label-md text-label-md shadow-[3px_3px_0px_#101010]">
<span class="material-symbols-outlined text-lg">local_fire_department</span>
<span class="">100% PINOY FLAVOR &amp; CRISPY CRUNCH</span>
</div>
<h1 class="font-display-lg-mobile lg:font-display-lg text-display-lg-mobile lg:text-display-lg text-on-surface uppercase tracking-tight leading-none"><span class="underline decoration-primary-container decoration-wavy decoration-4">dip into</span><div><span class="underline decoration-primary-container decoration-wavy decoration-4">something</span></div><div><span class="underline decoration-primary-container decoration-wavy decoration-4">delicious.</span></div></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl"></p><p class="">Discover our crispy fried chicken and delicious meals, made even more irresistible with our four signature sauces: rich gravy, spicy buffalo, creamy cheese, and tangy mustard.</p><p class=""></p>
<!-- Key Feature Badges -->
<div class="flex flex-wrap gap-3 pt-2">



</div>
</div>
<!-- Right Column: Appetizing Bento Food Display -->
<div class="lg:col-span-6 grid grid-cols-12 gap-4">
<!-- Hero Feature 1 (Plate of Fried Chicken & Java Rice) -->
<div class="col-span-12 sm:col-span-7 bg-surface-container-lowest border-2 border-[#101010] rounded-xl p-3 shadow-[5px_5px_0px_#101010] relative">
<div class="relative overflow-hidden rounded-lg aspect-[4/3] border border-[#101010]">
<img alt="Signature Chick 'n Lick Crispy Fried Chicken with yellow java rice and thick gravy on banana leaf" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjTqsvp693bd8gQyaqk7470LgzlZnD573d7wD4_cADN2TM2XqFo0sppUsgTFPEWBGAdsDHRP3fSL0iyXs6jUBxzTn1dViKHc4cCvcvtWM24SunGsaLBjtKzrzu2iHGtgMXgZ2pt17AF4ww83Pom6vv-hPklN38KQmH6JZmZGK9uwOIHMhVTBrBjEfU7dK435e0tCTW4rXxntYbkOAXCMcARGnhKs-87qN7ibL0-jyXx0Cj8oJ3dVfKma_QnQ3XO3NCzg">
<span class="absolute top-2 right-2 bg-secondary text-on-secondary font-label-sm text-label-sm px-2.5 py-1 rounded border border-[#101010] shadow-[2px_2px_0px_#101010]">
                  SIGNATURE MEAL
                </span>
</div>
<div class="mt-2.5 flex justify-between items-center px-1">
<h2 class="font-headline-sm text-headline-sm text-on-surface leading-tight">Crispy Sarap Meal</h2>
<span class="font-label-lg text-label-lg text-secondary bg-secondary-fixed px-2 py-0.5 rounded border border-[#101010]">₱89*</span>
</div>
</div>
<!-- Hero Feature 2 (Fiesta Platter & Street Bites) -->
<div class="col-span-12 sm:col-span-5 flex flex-col gap-4">
<div class="bg-surface-container-lowest border-2 border-[#101010] rounded-xl p-3 shadow-[5px_5px_0px_#101010] flex-1">
<div class="relative overflow-hidden rounded-lg aspect-[4/3] border border-[#101010]">
<img alt="Party Platter with crunchy lumpia shanghai, savory siomai dimsum, and glazed porkchops" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzxhSCO1zvcZXaruTQIZfXbM8wVI_F6UK5vhZKiWnWgqLcfjLqdoGDtd8QW6kJO9aPZ5Wd7oQPTBl6cEUfQtJG6NFc_Ch-F7h2VuF2-wD4XFF1AnAdDWOki8OiUHJvazWIrK6qcH5afBPkWZem1mQzk26a2Q96I_1H2_kuX2s9SvBjgfhxyOj0UEF9g-grFqGkkbMWIoSwKwz2mO3TXvZpCiwC64qYhE8lAqFyTWfU24rs0P-JjEN4Nr4fJaLxgYUE8w">

</div>
<div class="mt-2 text-left px-1">
<p class="font-label-md text-label-md text-on-surface font-bold">Chicken Tenders with Fries</p>
<p class="font-body-sm text-body-sm text-tertiary"><br></p>
</div>
</div>
<!-- Quick Franchise Alert Capsule -->
<div class="bg-primary-container border-2 border-[#101010] rounded-xl p-3.5 shadow-[4px_4px_0px_#101010] flex items-center gap-3">
<span class="material-symbols-outlined text-3xl text-on-primary-container">store</span>
<div>
<p class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant"><br></p>
<p class="font-label-md text-label-md text-on-surface font-black">Affordable Franchise Investment</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CATEGORY NAVIGATION & FILTER TABS -->
<section class="sticky top-20 z-40 bg-surface/95 backdrop-blur-sm border-b-2 border-on-surface px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
<div class="max-w-7xl mx-auto">
<div class="flex items-center overflow-x-auto pb-2 scrollbar-none gap-3 sm:gap-4" id="filter-container">
<button class="tactile-chip active px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-bold text-sm sm:text-base whitespace-nowrap text-on-surface bg-surface-container-lowest" onclick="filterMenu('all', this)">
    All Favorites
  </button>
<button class="tactile-chip text-on-surface px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-bold text-sm sm:text-base whitespace-nowrap hover:bg-surface-container bg-surface-container-lowest" onclick="filterMenu('chicken', this)">
    Crispy Fried Chicken
  </button>
<button class="tactile-chip text-on-surface px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-bold text-sm sm:text-base whitespace-nowrap hover:bg-surface-container" onclick="filterMenu('porkchop', this)">
    Porkchop Meals
  </button>
<button class="tactile-chip text-on-surface px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-bold text-sm sm:text-base whitespace-nowrap hover:bg-surface-container bg-surface-container-lowest" onclick="filterMenu('tenders', this)">
    Chicken Tenders
  </button>
<button class="tactile-chip text-on-surface px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-bold text-sm sm:text-base whitespace-nowrap hover:bg-surface-container bg-surface-container-lowest" onclick="filterMenu('combos', this)">
    Sulit Combo Meals
  </button>


</div>
</div>
</section>
<!-- PRODUCT CATALOG GRID: CRAVE-WORTHY SELECTIONS -->
<section class="py-12 lg:py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="crave-worthy-meals-section">
<div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
<div>

<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface font-black uppercase tracking-tight">
    CRAVE-WORTHY SELECTIONS
  </h2>
</div>
<div class="text-right">
<p class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-high px-3 py-1.5 rounded-lg border border-[#101010] shadow-[2px_2px_0px_#101010]">
    *Prices displayed are standard suggested SRP (sample)
  </p>
</div>
</div>
<!-- Bento Product Cards Grid (4 columns) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="product-grid">
<!-- 1. Student Meal (₱40) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between overflow-hidden" data-category="chicken" style="display: none;">
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Student Meal Crispy Chicken with Java Rice" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuMBYNx5s-NSmpDAgj2Wt-HEhsrOZeWOuf6BiU4oDJOakSeTOKOTg_sxvzudhyIFQ_ZMRyzh2xOGiPlb8dsfh0yjovJRMbdaaya0Ambh5ZFDbIq6-sIrofFNRE8RfKvmxSU6BDJolaVgtps4lJ4KCfuQKiTAlTQnktq7N91ldSIn8a9onpoai8jFkbgXMyrXOjvRN2ljF_Tjg4HQovSYVV_IHx94m4jN0RwqnB-sw6zrmWEVwo3bMF6sgDLSVO4cLjPw">

</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">STUDENT- MEAL</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p data-pm-slice="0 0 []" class=""><span data-prompt-literal-paste="" class="">A student-friendly meal featuring our crispy chicken, served with java rice and your favorite signature sauce—perfect for a satisfying meal on a budget.</span></p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱40</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 2. Solo Meal (₱65) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="chicken" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">
<span class="sticker-badge inline-block bg-secondary-container text-on-secondary font-label-sm text-label-sm px-3 py-1 rounded uppercase tracking-wider font-extrabold">
        Bestseller
      </span>
</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Solo Meal Double Crunch Chicken" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjTqsvp693bd8gQyaqk7470LgzlZnD573d7wD4_cADN2TM2XqFo0sppUsgTFPEWBGAdsDHRP3fSL0iyXs6jUBxzTn1dViKHc4cCvcvtWM24SunGsaLBjtKzrzu2iHGtgMXgZ2pt17AF4ww83Pom6vv-hPklN38KQmH6JZmZGK9uwOIHMhVTBrBjEfU7dK435e0tCTW4rXxntYbkOAXCMcARGnhKs-87qN7ibL0-jyXx0Cj8oJ3dVfKma_QnQ3XO3NCzg">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">star</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">Crowd Favorite</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">SOLO MEAL</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p data-pm-slice="1 1 []" class="">Enjoy our signature crispy chicken paired with java rice and your choice of our four signature sauces: gravy, buffalo, cheese, or mustard.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱65</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 3. Sakto Meal (₱89) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="chicken" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">
<span class="sticker-badge inline-block bg-primary-container text-on-surface font-label-sm text-label-sm px-3 py-1 rounded uppercase tracking-wider font-extrabold">
        Bestseller
      </span>
</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Sakto Meal Fried Chicken Feast" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5nFJ6G6hMpIfvWgQOHnl_hzPjN8hzPY70U2UV43AL70raOU2LXLfW7MOiucRjG6lL5-isSmrj_s8CT7tSTtlA8d5bLDXUcehpzVmwHLUone0tx8_26973p6RmqTjBrEjNAH59Zx4VqHbmsOr7XEJ2YE7BwV5w1kcWxxRJBZYIJK7eO4qynbgqspWF3fyBtkrvN7S8Bu1xK_6Fa6jGarKUa0dAq0FrM6DORZt9-iUqZOYKcdcwSd5bTy5EDpqNSHxTOA">

</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">SAKTO MEAL</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><p class="">Crispy chicken with java rice and your choice of gravy, buffalo, cheese, or mustard sauce.</p></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱89</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 4. Sarap Meal (₱119) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="combos" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">
<span class="sticker-badge inline-block bg-primary-container text-on-surface font-label-sm text-label-sm px-3 py-1 rounded uppercase tracking-wider font-extrabold">
        SNACK HIT
      </span>
</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Crispy Fried Chicken Skin Basket" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2cRkEyRnYyb4cH0kYmk3DWMayJW9PnG5873sE4lj3ExBqBQvPHgdOyCtHXetoqrs8WeGjsftcs62DLGXdU9Qm76AThNrz0dn6kdvKgjZ33wIoNpiVH3ud2OKGd4YJo3YLxkEZ09j3m8O2YlFEMzLJ31LvQHMSXsL6ooWgPXSvyUhimrT1rQA0kE7isQaW6DPAFqbPfho1pBZf7dc5ZvBhjYzjMZNNt_kRoDhJ6StZqqFjc_lQXihKr9YmW3dlKlB3_PK7DAcEnHWzWQ">

</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">chicken pastil</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Tender shredded chicken served over warm steamed rice, topped with savory spices for a simple, satisfying Filipino favorite.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱30</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 5. Super Sarap Meal (₱115) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="combos" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Super Sarap Meal 1-Pc Chicken + Pork Siomai + Rice" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF7HGp8mD2LHjXVJPlMhYCZ6asqhRe4NVPeXmASzMNsYUkuQG35qIQ_vTlYgIrnKNrwki-sMas9XFXb51_gQtLKz5Q1K8sHQ6mx5YVR0k04G9ThLnxCq7VOZ17HHq-CHWXbaDseNAF1a-jGy3-rXZ-zjYcPcsIFjw78-j-gEdw7zdYRhlPd_v8FzUyik_FINrhnMfQsXXsqOxRPVueg5TETeMxZW0pEdAWcb9EJu5CAs3iPb0NGosAFzsDDDhWgGHJACZ9Nas4kj8zJQ">

</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">burger steak</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Juicy, savory burger steak smothered in rich gravy, served hot for a comforting and satisfying meal.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">SAMPLE SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱55</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 6. Crispy Sisig Bowl with Egg (₱99) -->

<!-- 7. Garlic Butter Chicken Poppers Bowl (₱85) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="chicken" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Garlic Butter Chicken Poppers Bowl" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjrUdoTEkSfZTE91BObGVbXK-YEqjWIVGFHZpHeYWKfqN_ZTlSwcdxLvnmpYZbyME0cjsvS2t-w-7jnPKIuUv_btudSQ3tqh8cKEqE6FT4bxBdrkDBP7WIqN02Z0sdz8cPf008XD8-PX20EJsEG-HmHYqBEtuo2F9WfXJAPx0ycbrJ2o4tdtXwyp1YAlPflsEyBRgClK4X5EWEMQv1ZAwmNhlBl9Kq5av8_53BLuy7HYRSEY047evoxaPpiLYghB1uy3H9k0UIfl1csA">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">local_fire_department</span>

</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">sarap meal</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><p class="">Crispy chicken with java rice, a refreshing drink, and your choice of gravy, buffalo, cheese, or mustard sauce.</p></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">SAMPLE SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱119</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 8. Barkada Crunch Bucket (₱369) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="combos" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Barkada Crunch Bucket" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8cKesgESn9zfj4rr0Pf-ltBZZudaj0zpOiVrI7rbZ-9r7Epq2eB2kJEV3wMUnXhTvtl2gifT66S3-duLyaO1RQYYtx6nhoTVjfVFaQiO_BBiTmHxnBeGKekkFVOuWdyfZ39zBNutctt6S0W62LPCRXCT26EsDVedZbvaeTgQgIbbaLz1qmkB-tTIsdO5qqKBCmg7EgqKqsfKHgGyvFoXcY8qoiAkQJy_q_dZ3vUxa3Jv9qX_q7eFHZBAio4HpMG8oTvhGFspOu3EO7A">

</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">siomai meal</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Steamed, savory siomai served with warm rice and a flavorful dipping sauce for a simple and satisfying meal.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">SAMPLE SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱49</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 9. Crispy Porkchop Meal (₱115) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between overflow-hidden" data-category="porkchop" style="display: flex;">
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Crispy Porkchop Meal" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4Ww3k_S3tv9fmMM84XMZXHJdbBx5E7vyws5EDk-Zc9WGOMxBBdRxYgRQcwnbZW1Vgg99B5hjye33JDdi_-MOYpN1YlZsUX72ddvFHvwRb04zZKXGobdqla8GWZo5GlMPE0DkjnkE-KlOEbGas29Nw5Bwa3tBeXPV2C3C6XnI-Y4jraaXKNXiQr0aKsomfe0MjohHYS9Uj5gTAhkZVwXIUVMnzBqUicOJYtvaMEhxXFZ8bVgmepl5igUjfSq9brw03gA">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">skillet</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">Porkchop Favorite</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">classic meal</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug">
          Juicy, seasoned porkchop breaded with house crunch coating, served with&nbsp; java rice and tonkatsu sauce</p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱90</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 10. Garlic Butter Parmesan Tenders (4pcs) (₱135) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="tenders" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Garlic Butter Parmesan Tenders" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3nKdgMAfYnQ0gmFjWH4schoyQ4hcqOzL5GKqrFuhfx3O81Q7S8jEAqos_2dl5byjWoDZ5hx5fGhNrBxQRCcbkFw4MGwggKfVC4SUDyp5ihYy020-9-atipSndhgOeDpnNCGKNEAb3iYbgCX6V_brmcnpbGsbWXHs1F5opNM96gbT07NmR0fQ7_3NLBhp3wdfirSkXJbqcYWlQi14HObDuz2E_WssezIpKgfGtHXiYmxWUtFOGdIkeZqXiLfRVFEuKxPu8u12wfC6ydQ">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">star</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">Top Tender</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">chicken tenders with rice (2PCS)</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Enjoy boneless chicken tenders, crispy on the outside and juicy on the inside, served with bold flavors that satisfy every craving.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱99</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 11. Honey Mustard Glazed Tenders (₱129) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="tenders" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Honey Mustard Glazed Tenders" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrEsintggatt-oqIIDNIr4jP5I_nEqne-NmDSZUhMcXQTKWaHbAz8EYJ_UYxB5Hdzubf1jUnAIB4hrFOxONoMVoxgUBAkyyNBBBZYRH1kOP2KJSE0GoVa4ahSL9nQ78iHrNWcK_NFNVU2l8KBCkQvxwM_mKS5hFmEPmx7FawFC5ppHWXvVa4JaYswfS9Dt1cg9NlBhm67cA1x1lIzpWkjFD0QxX_oDIhrVBLnqAQHtWyd2gAuohu7df4fVe0ELRa4E5_s6htzx2nagXA">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">award_star</span>

</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">CHICKEN TENDERS WITH RICE (3PCS)</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Enjoy boneless chicken tenders, crispy on the outside and juicy on the inside, served with bold flavors that satisfy every craving.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱129</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 12. Pinoy Sweet Chili Crispy Tenders (4pcs) (₱125) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="tenders" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Pinoy Sweet Chili Crispy Tenders" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzxhSCO1zvcZXaruTQIZfXbM8wVI_F6UK5vhZKiWnWgqLcfjLqdoGDtd8QW6kJO9aPZ5Wd7oQPTBl6cEUfQtJG6NFc_Ch-F7h2VuF2-wD4XFF1AnAdDWOki8OiUHJvazWIrK6qcH5afBPkWZem1mQzk26a2Q96I_1H2_kuX2s9SvBjgfhxyOj0UEF9g-grFqGkkbMWIoSwKwz2mO3TXvZpCiwC64qYhE8lAqFyTWfU24rs0P-JjEN4Nr4fJaLxgYUE8w">

</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">chicken ternders with rice &amp; fries&nbsp;</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Boneless chicken tenders, crispy on the outside and juicy on the inside, served with golden, crispy fries for the perfect satisfying meal.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱159</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 13. Crispy Salted Egg Chicken Tenders (4pcs) (₱139) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="tenders" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Crispy Salted Egg Chicken Tenders" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8btEz3CjdwDn0LNacP2Pi7LEpGs18rgQ1p86mT7pWwqmNwUEEkBupSSzx8iuhmTA2FAnxRekyvIk81nheukpXbaCD0T0vBImmTaETahGXgw_R_T_6E4ng3scanGzpdWkgTpfRrwMCI6Scbi_d_mHoAmsDlWVnH1rMQyInXjAnbays7S8FvDvFCpvVCF7dljgdfEkulLL8EF95YjzQy6gD0MHFfLVPygX20P6YClooe9u_yhlqa3_nFvzg9kcp_h1ryXmLMNep2wzNqg">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">star</span>

</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">a la carte tenders (4PCS)</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><p class="">Boneless chicken tenders, crispy on the outside and juicy on the inside, perfect for dipping in your favorite signature sauce. Served without rice or fries.</p></div><div><div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱139</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 14. Steamed Pork & Shrimp Siomai (4pcs) (₱55) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between overflow-hidden" data-category="addons" style="display: none;">
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Steamed Pork &amp; Shrimp Siomai" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuArJzRCghUhkrTZqJUiF48vDJ7yRmgum6pqYY5oucqRWQCiWAfz4FRWy-rNh7akWUOjhTaUz0wPxYW1YP909oFZRX7_8iRaalQza14xN5raK53XrMmoGVzoXrZ70Ikn7Mi4TvdAbUm0usDzccHVqzkHdGZOmO_GQLMAmP_QEUok_MR8mmKFvlJFx7UiKC-UAKsvSUmBduti23LxtBjDS_6FKtr-Jq-LVX8TC3ZVweKlKPf8JnbeRk7HG524j1NfATkwOw">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">local_fire_department</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">Chili Garlic Dip</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">STEAMED PORK &amp; SHRIMP SIOMAI (4PCS)</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug">
          Juicy handmade dimsum dumplings stuffed with savory ground pork and shrimp, topped with crunchy chili garlic oil and calamansi.
        </p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱55</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<!-- 15. Crispy Ngohiong Roll (₱59) -->
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between overflow-hidden" data-category="lumpia" style="display: none;">
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Crispy Ngohiong Roll" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyiZCjfjEeBfxzPh_SbLeit2Khui-NGDRHC7MmoRaPq3ZX6Uj0fqSQkiFVIXG3LaEVWY_fkfr8uR5DxR6ACY9I33nO0BPqz9cSDrZUU_Lm5ajHKYTx_sHpEJglJ1Fz3d6OEewG_RoXqdlvNW-4wRXVgZYxWW_Mpe4vl9QG-hB1IoOHxy_9AgpLTW9uLGhaDEcZBR9tuEkNrQCkk-yTIZqJGu5w08cpAIxQogeDTsodNwYy8VSfpgIWNg6tWetCJqIz7w">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">restaurant_menu</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">Cebu Classic</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">CRISPY NGOHIONG ROLL</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug">
          Authentic Cebu-style crispy battered rolls packed with spiced jicama, five-spice aromatics, paired with spicy sweet ngohiong sauce.
        </p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱59</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="combos" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Chicken &amp; Lumpia Combo Meal" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyPQW8KjFOWBgpMpTsivxxi39N89445wDAQ4C6Y6Hb06DlZXTLBn3P0peKh77Mrh9ZyvjsdyMf4tdjQ3tXiPhl3Yn9tIGjPDwTE2NS5JJpdsc8ydTZB_LRCpEUPGAKVWm59w7r8dIEZH6e2JJ0VUR1kj1C7lFoQlU9qOJFWSeIlpQH2483V_Hq_IcmbiyuvWb6o_qMre_ELAF_LNuT7zZYJwqJNFBI8VKLE5GHwVFHYh-qDfNciRfR46qq6uvz-TXaLk2VKuztf5L_UA">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">star</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">⭐ Double Sarap</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">ngohiong meal</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><div><div><p class="">Crispy Cebuano-style ngohiong filled with savory goodness, served with warm rice and our flavorful dipping sauce for a satisfying local favorite.</p></div><div><div></div></div></div></p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱55</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article>
<article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="lumpia" style="display: none;">
<div class="absolute -top-1 -right-1 z-10">

</div>
<div>
<div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container">
<img alt="Crispy Fried Lumpia Shanghai" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfsJdtL3M_txGsFeti5OCIH7eQQFts0TdrafHeFmefotX0gGnhMviDEm1v3mqLy2B060rQOKde0N5CTD3-sThvrySlwYXdJuhB2tE4E3O4MuCJWBxGJvaxTn6s_SkfXZUv8Z6V0q5_oP9GuvsCcaVeZ0IwKRSb-CwpY7H3PVx5S_k5qmpLi3vVwClZzXKsZPBZzPS4eJdOFCqMFESaqBYWoR4qmsjehMNu9JA9d7qHqdH0DumiDEG4CVRCLqemmHVrQQ">
<div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]">
<span class="material-symbols-outlined text-xs text-secondary-container">restaurant_menu</span>
<span class="font-label-sm text-label-sm text-on-surface font-bold">🥢 Pinoy Comfort</span>
</div>
</div>
<div class="mt-4">
<h3 class="font-title-md text-title-md text-on-surface font-black uppercase">CRISPY FRIED LUMPIA SHANGHAI (6PCS)</h3>
<p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug">
          Six pieces of golden fried crispy spring rolls loaded with savory minced pork and carrots, served with sweet chili dip.
        </p>
</div>
</div>
<div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between">
<div>
<span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">Sample SRP</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱75</span>
</div>
<button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors">
<span class="">Order Now</span>
<span class="material-symbols-outlined text-base">arrow_forward</span>
</button>
</div>
</article><article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="porkchop" style="display: flex;"><div class="absolute -top-1 -right-1 z-10"></div><div><div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container"><img alt="Garlic Glazed Sizzling Porkchop" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYdueJVv0nqBrkj7txcb5K4laGhtUBwE7THNLy5uOQG8kaNzP5xt4iXen_TO1KKFicms7hGC9BolEMJ8AYkgtqqSN09x10hPmziE8Y1NAXsm5N1ySaIE7QTlzksHDK7ElqRBa62DAEw2aF2qY_3qlA0p2q_9PWVbGnpuoPX9MI_Z4vepeRvEy7n9ng8Vl0UWz_dTKJsR936G0_xJ46NbWhx5XirThViyWxcJBHMYNhtlVpBqV7XxIIHaFMj0-nDKzsHid0V5ga31ULbQ"></div><div class="mt-4"><h3 class="font-title-md text-title-md text-on-surface font-black uppercase">combo meal</h3><p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug">Juicy, seasoned porkchop breaded with house crunch coating, served with&nbsp; java rice, tonkatsu sauce, and softdrinks.</p></div></div><div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between"><div><span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">SAMPLE SRP</span><span class="font-headline-sm text-headline-sm text-secondary font-black">₱119</span></div><button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors"><span class="">Order Now</span><span class="material-symbols-outlined text-base">arrow_forward</span></button></div></article><article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="porkchop" style="display: flex;"><div class="absolute -top-1 -right-1 z-10"></div><div><div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container"><img alt="Spicy Honey Butter Porkchop Meal" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDosGEzDODeOvDVRb7SuSScLpI801tHJL10XF7sHyhQrDREOeFCRuJxdGbn24Urc0sEuq5u1712OTD-6CGgV1pwjJlego4MZwQZQirQjO0HbescJ9FD54BjwHPS50kO7NSwZ1jVZ4r4DldKK_E61jIgzdruRtZZAlhTIk_LxfbuATcUFDUbCaW_eNcsm4Sx6N3lq5tTf_CXA0VDfa06Vh9Hkq9W_gtKYumTGILEH2_vEYo_JEP5vx6UqHxw9c1rMuGu32glIrQjLNiOMg"><div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]"><span class="material-symbols-outlined text-xs text-secondary-container">local_fire_department</span></div></div><div class="mt-4"><h3 class="font-title-md text-title-md text-on-surface font-black uppercase">carga MEAL</h3><p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><p data-pm-slice="0 0 []" class=""><span data-prompt-literal-paste="" class="">Juicy, crispy breaded porkchop served with unli java rice and savory tonkatsu sauce.</span></p></p></div></div><div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between"><div><span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">SAMPLE SRP</span><span class="font-headline-sm text-headline-sm text-secondary font-black">₱119</span></div><button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors"><span class="">Order Now</span><span class="material-symbols-outlined text-base">arrow_forward</span></button></div></article><article class="tactile-card bg-surface-container-lowest rounded-2xl p-4 flex flex-col justify-between relative overflow-hidden" data-category="porkchop" style="display: flex;"><div class="absolute -top-1 -right-1 z-10"><span class="sticker-badge inline-block bg-primary-container text-on-surface font-label-sm text-label-sm px-3 py-1 rounded uppercase tracking-wider font-extrabold">CHEF'S PICK</span></div><div><div class="relative overflow-hidden rounded-xl aspect-[4/3] border-2 border-[#101010] bg-surface-container"><img alt="Garlic Pepper Porkchop Meal" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYJUisRfLdViMgXDNi5TJyzrGp8QqI3zfUhRcXBtKYOXs1cA6YY4HUV5hG7mTJWhLrKdmZmJKcWihcVyVCudowFlZXirDF-AnYIhr-yMPdIPWp-p8xbhQZKEJHdFa5WVoAD7ZmkNnC8FQBxkwZ5IFNXb3cMhm6qglt-fazgGXFs6mQkivk87sBYTbEhtPU320rxOFH9ACbFg2-kkYz6SODRU8bj-eRmDjXrJjXEuD9PdnOs5JtSQug83x4bGIoG5pbCv3VdR1AIiz-tw"><div class="absolute bottom-2 left-2 bg-[#FFF8E7] border border-[#101010] px-2 py-0.5 rounded-full flex items-center gap-1 shadow-[1px_1px_0px_#101010]"><span class="material-symbols-outlined text-xs text-secondary-container">skillet</span><span class="font-label-sm text-label-sm text-on-surface font-bold">Toasted Garlic Gravy</span></div></div><div class="mt-4"><h3 class="font-title-md text-title-md text-on-surface font-black uppercase">chibog meal</h3><p class="font-body-sm text-body-sm text-tertiary mt-1.5 leading-snug"><p data-pm-slice="0 0 []" class=""><span data-prompt-literal-paste="" class="">Juicy, crispy breaded porkchop served with unli java rice, savory tonkatsu sauce and softdrinks.</span></p></p></div></div><div class="mt-5 pt-3 border-t-2 border-[#101010]/10 flex items-center justify-between"><div><span class="text-xs text-on-surface-variant uppercase font-label-sm block font-bold">SAMPLE SRP</span><span class="font-headline-sm text-headline-sm text-secondary font-black">₱139</span></div><button class="tactile-btn bg-secondary-container text-on-secondary px-3.5 py-2 rounded-lg font-label-md text-label-md flex items-center gap-1 font-bold hover:bg-secondary transition-colors"><span class="">Order Now</span><span class="material-symbols-outlined text-base">arrow_forward</span></button></div></article></div>
</section>
<!-- MEAL COMBINATIONS & ADD-ONS (BUNDLES & SHARING PACKAGES) -->

<!-- FRANCHISE CALLOUT BANNER -->
<section class="py-12 lg:py-16 bg-surface" id="franchise-callout">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="tactile-card bg-primary-container rounded-3xl p-8 lg:p-12 border-4 border-[#101010] relative overflow-hidden">
<!-- Diagonal decorative pattern stripes -->
<div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-secondary-container/20 pointer-events-none"></div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
<div class="lg:col-span-8 space-y-4 text-left">

<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg font-black leading-tight text-on-primary">
                Bring Chick 'N Lick To Your City&nbsp;</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                <strong>Inquire About Our Franchise Packages Today!</strong> Join the growing Chick ’n Lick family and start your business journey with an affordable setup, reliable commissary support, and streamlined operating systems designed to help you grow.
              </p>
<div class="flex flex-wrap gap-4 pt-2">
<div class="bg-surface-container-lowest border-2 border-[#101010] px-4 py-2 rounded-xl shadow-[3px_3px_0px_#101010]">
<span class="font-label-sm text-label-sm block text-tertiary">Kiosk / Food Court</span>
<span class="font-headline-sm text-headline-sm text-secondary font-black">₱199k - ₱499k</span>
</div>

</div>
</div>
<div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-4 justify-center items-stretch">
<a class="tactile-btn bg-secondary text-on-secondary px-8 py-4 rounded-xl font-headline-sm text-headline-sm text-center uppercase tracking-wide hover:bg-[#101010] hover:text-[#FFFFFF] transition-all flex items-center justify-center gap-2 font-black" href="{{ route('franchise') }}#franchise-form">
<span class="">FRANCHISE INQUIRY</span>
<span class="material-symbols-outlined text-xl">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- FOOTER -->
<footer class="bg-inverse-surface dark:bg-surface-container-lowest border-t-4 border-secondary full-width">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
<!-- Brand Identity Column -->
<div class="lg:col-span-2 space-y-4">
<img alt="Chick 'n Lick Logo" class="h-16 md:h-20 w-auto object-contain drop-shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0Vu6jIwYNFUaa6QcNva7nNjQ6Zc3rl9Um9d6v2d0YtcQi98storhCUptzZG5-Rx1Jdcl8Jd2ORWcu-PLx5tQneSscCKFtDyuSlQn_2M7XChBfLgSnKJVdLNkdwuhjq2wq_kscrPHixvVUZW02NVzbgu2UiTdgTBb0TrwPguCywPTTy_eSUG1owWbcn2gBDuvlOlDeFfx3Cv7SGm2OfihsnsInK5wQ2IM11bd9C1B-mClcVlS2dP2BzkHUGzxolRRQOA">
<p class="font-body-sm text-body-sm text-inverse-on-surface opacity-80 max-w-sm">
            Serving irresistible Filipino crispy fried chicken, specialty garlic java rice, and homegrown street bites with unmatched crunch and authentic taste.
          </p>
<div class="flex items-center gap-3 pt-2">


</div>
</div>
<!-- Quick Links -->
<div class="space-y-3">
<p class="font-title-md text-title-md text-primary-container dark:text-primary font-bold">Quick Links</p>
<ul class="space-y-2 font-body-sm text-body-sm">
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="{{ route('home') }}">Home</a></li>
<li class=""><a class="text-primary-container font-bold hover:underline transition-all" href="{{ route('menu') }}">Our Menu</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="{{ route('about') }}">About Us</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="{{ route('franchise') }}">Franchise Opportunities</a></li>
</ul>
</div>
<!-- Franchise & Support Links -->
<div class="space-y-3">
<p class="font-title-md text-title-md text-primary-container dark:text-primary font-bold">Legal &amp; Quality</p>
<ul class="space-y-2 font-body-sm text-body-sm">
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="#">Privacy Policy</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="#">Terms of Service</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="#">Franchise Disclosure</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="#">Branch Directory</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="#">Food Safety</a></li>
<li class=""><a class="text-inverse-on-surface dark:text-on-surface opacity-80 hover:opacity-100 hover:text-primary-fixed hover:underline transition-all" href="#">Careers</a></li>
</ul>
</div>
<!-- Contact & Commissary Info -->
<div class="space-y-3">
<p class="font-title-md text-title-md text-primary-container dark:text-primary font-bold">Franchise Inquiries</p>
<div class="font-body-sm text-body-sm text-inverse-on-surface opacity-80 space-y-2">
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary-container">mail</span>
<span class="">business.chicknlick@gmail.com</span>
</p>
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary-container">call</span>
<span class="">0953-882-9709</span>
</p>
<p class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary-container">schedule</span>
<span class="">Mon-Sat: 8:00 AM - 6:00 PM</span>
</p>
</div>
</div>
</div>
<!-- Bottom Bar -->
<div class="pt-8 border-t border-inverse-on-surface/20 flex flex-col md:flex-row items-center justify-between gap-4">
<p class="font-body-sm text-body-sm text-inverse-on-surface opacity-80 text-center md:text-left">
          © 2024 Chick 'n Lick Franchise Systems Inc. All rights reserved. Crafted for craveable crunch.
        </p>
<div class="flex items-center gap-4 text-xs text-inverse-on-surface opacity-60">
<span class="">Manila</span>
<span class="">•</span>
<span class="">Cebu</span>
<span class="">•</span>
<span class="">Davao</span>
<span class="">•</span>
<span class="">Iloilo</span>
</div>
</div>
</div>
</footer>
<!-- Interactive Filter Script -->
<script>
    function filterMenu(category, clickedButton) {
      // Toggle active states on chip buttons
      const buttons = document.querySelectorAll('#filter-container button');
      buttons.forEach(btn => {
        btn.classList.remove('active');
        btn.classList.add('bg-surface-container-lowest', 'text-on-surface');
      });
      clickedButton.classList.add('active');
      clickedButton.classList.remove('bg-surface-container-lowest');

      // Filter catalog articles
      const articles = document.querySelectorAll('#product-grid article');
      articles.forEach(article => {
        const itemCategories = article.getAttribute('data-category') || '';
        if (category === 'all' || itemCategories.includes(category)) {
          article.style.display = 'flex';
        } else {
          article.style.display = 'none';
        }
      });
    }

    document.addEventListener('DOMContentLoaded', function () {
      const allFavoritesButton = document.querySelector('#filter-container button[onclick*="filterMenu(\'all\'"]');
      if (allFavoritesButton) {
        filterMenu('all', allFavoritesButton);
      }
    });
</script>






</body></html>
