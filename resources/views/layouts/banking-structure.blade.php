<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <title>@yield('title', 'Express Fintech – Banking')</title>
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.header')
    <header class="relative overflow-hidden min-h-[40vh]">
        <img src="@yield('hero_img')" alt="@yield('breadcrumb')" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bs-hero-overlay"></div>
        <div class="relative max-w-screen-xl mx-auto py-12 px-12">
            <nav class="flex items-center gap-2 text-[12px] mb-7 text-surface-card">
                <a href="{{ route('home') }}" class="hover:text-[#818cf8] transition-colors">Home</a>
                <span>/</span>
                <a href="{{ route('banking') }}" class="hover:text-[#818cf8] transition-colors">Banking</a>
                <span>/</span>
                <span>Banking Structure</span>
                <span>/</span>
                <span class="text-white font-medium">@yield('breadcrumb')</span>
            </nav>
            <div>
                <div class="bs-badge-pill">✦ @yield('badge', 'Banking Structure')</div>
                @yield('meta_tags')

            </div>
            <h1 class="bs-hero-title">@yield('hero_title')</h1>
            <p class="bs-hero-subtitle">@yield('hero_subtitle')</p>
        </div>
    </header>
    <div class="bg-white border-b border-[#e5e7eb] sticky top-[68px] z-30 bs-subnav-shadow">
        <div class="max-w-screen-xl mx-auto py-2.5 flex items-center gap-2 flex-wrap">
            <span class="text-[11px] font-bold uppercase tracking-[.1em] text-[#9ca3af] mr-2 whitespace-nowrap">
                Structure:
            </span>

            @php $bsNav = [
            ['Retail vs Commercial', 'banking.structure.retail-commercial'],
            ['Central Banking', 'banking.structure.central-banking'],
            ['Digital Banking', 'banking.structure.digital-banking'],
            ['Open Banking', 'banking.structure.open-banking'],
            ]; @endphp

            @foreach($bsNav as [$label, $routeName])
            <a href="{{ route($routeName) }}"
                class="text-[12.5px] font-medium px-3 py-1.5 rounded-md border whitespace-nowrap transition-all
                  {{ request()->routeIs($routeName) ? 'bs-nav-active' : 'bs-nav-link' }}">
                {{ $label }}
            </a>
            @endforeach
        </div>
    </div>

    <div class="bg-white">
        <article class="max-w-screen-xl mx-auto py-12">
            @yield('page_content')
            @hasSection('conclusion_title')
            <div class="bs-conclusion">
                <h2>@yield('conclusion_title')</h2>
                <p>@yield('conclusion_body')</p>
            </div>
            @endif
        </article>
    </div>

    <section class="bg-[#f4f5f7] border-t border-[#e5e7eb]">
        <div class="max-w-screen-xl mx-auto py-12">
            <h2 class="familyfont font-bold text-[#0f1f35] text-[22px] mb-6">Related Research</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @yield('related_cards')
            </div>
        </div>
    </section>
    @include('partials.footer')
</body>

</html>