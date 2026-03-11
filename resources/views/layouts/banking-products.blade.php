{{-- resources/views/layouts/banking-products.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Banking Products') — Express Fintech</title>
    <link rel="icon" type="image/png" href="{{ asset('expressfintech.png') }}">
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .sidebar-link {
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
        }

        .sidebar-link:hover {
            border-left-color: #4f46e5;
            background: #dbd9f870;
            color: #4f46e5;
        }

        .sidebar-link.active {
            background: linear-gradient(90deg, #4c44d505, #dbd9f870);
            color: #4f46e5;
            border-left-color: #4f46e5;
        }

        .prose-products h2 {
            font-family: 'Fraunces', serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: #0a2417;
            margin: 2.5rem 0 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #aca9e2;
        }

        .prose-products h3 {
            font-size: 1.08rem;
            font-weight: 600;
            color: #4f46e5;
            margin: 1.75rem 0 0.6rem;
        }

        .prose-products p {
            color: #374151;
            line-height: 1.85;
            margin-bottom: 1.1rem;
        }

        .prose-products ul,
        .prose-products ol {
            padding-left: 1.5rem;
            margin-bottom: 1.2rem;
        }

        .prose-products li {
            color: #374151;
            margin-bottom: 0.45rem;
            line-height: 1.7;
        }

        .prod-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .prod-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(10, 36, 23, 0.12);
        }

        .step-num {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #050e96, #4f46e5);
            color: white;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .compare-table tr:hover td {
            background: #f9fffe;
        }
        /* Breadcrumb sep */
        .bsep::before {
            content: '/';
            margin: 0 8px;
            opacity: 0.35;
        }

        /* Scrollbar thin */
        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #a7f3d0;
            border-radius: 2px;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-surface">

    @include('partials.header')

    {{-- ══ HERO ══ --}}
    <div class="relative overflow-hidden" style="background: linear-gradient(135deg,#F8FAFC 0%,#E2E8F0 40%,#CBD5F5 100%);">
        <div class="absolute inset-0"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] -translate-y-1/2 translate-x-1/3 rounded-full opacity-[0.05]"
            style="background:radial-gradient(circle,#4f46e5,#4f46e5)"></div>
        <div class="absolute bottom-0 left-1/4 w-80 h-80 rounded-full opacity-[0.07]"
            style="background:radial-gradient(circle,#4f46e5,#d4ddf3)"></div>

        <div class="max-w-screen-xl mx-auto px-8 py-14 relative z-10">
            <nav class="flex items-center text-[11.5px] text-[#334155] mb-6 font-code tracking-wide">
                <a href="{{ route('home') }}" class="hover:text-[#818cf8] transition-colors">Home</a>
                <span class="bsep"></span>
                <a href="{{ route('banking') }}" class="hover:text-[#818cf8] transition-colors">Banking</a>
                <span class="bsep"></span>
                <span>Banking Products</span>
                @hasSection('breadcrumb_current')
                <span class="bsep"></span>
                <span class="text-[#0F172A] font-semibold">@yield('breadcrumb_current')</span>
                @endif
            </nav>

            <div class="grid grid-cols-[1fr_auto] gap-10 items-start">
                <div>
                    <div class="inline-flex items-center gap-2 text-[11px] font-semibold uppercase tracking-[0.15em] text-[#0F172A] mb-4 anim-3">
                        <span class="w-5 h-px bg-[#0F172A] opacity-60"></span>
                        Banking Products · Deep Analysis
                    </div>
                    <h1 class="familyfont text-4xl md:text-[2.9rem] font-bold text-white leading-[1.15] mb-4 anim-3">
                        @yield('hero_title', 'Banking Products')
                    </h1>
                    <p class="text-[#334155] text-[15.5px] max-w-xl leading-relaxed anim-4">
                        @yield('hero_subtitle', 'In-depth analysis of core banking products — how they are structured, priced, regulated, and what they mean for financial institutions and their customers.')
                    </p>

                    {{-- Meta row --}}
                    <div class="flex items-center gap-6 mt-6 text-[12px] text-[#334155] font-code anim-5">
                        <span class="flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            @yield('hero_date', 'March 2026')
                        </span>
                        <span class="flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            @yield('hero_read_time', '8 min read')
                        </span>
                        <span class="flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Expert Verified
                        </span>
                    </div>
                </div>

                {{-- Hero stat cards --}}
                <div class="hidden lg:flex flex-col gap-3 anim-3 shrink-0">
                    @yield('hero_stats_cards')
                </div>
            </div>
        </div>
    </div>

    {{-- ══ MAIN LAYOUT ══ --}}
    <div class="max-w-screen-xl mx-auto px-8 py-10">
        <div class="flex gap-10">

            {{-- ─── SIDEBAR ─── --}}
            <aside class="w-[255px] shrink-0">
                <div class="sticky top-24 space-y-5">

                    {{-- Nav card --}}
                    <div class="bg-white rounded-2xl border border-[#e2ede8] overflow-hidden"
                        style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
                        <div class="px-5 py-4 border-b border-[#f0faf4]">
                            <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5]">Banking Products</p>
                        </div>
                        <nav class="p-2">
                            <a href="{{ route('banking.products.deposit') }}"
                                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_deposit')">
                                <svg class="w-4 h-4 text-[#9ca3af] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75" />
                                </svg>
                                Deposit Products
                            </a>
                            <a href="{{ route('banking.products.lending') }}"
                                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_lending')">
                                <svg class="w-4 h-4 text-[#9ca3af] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Lending Framework
                            </a>
                            <a href="{{ route('banking.products.corporate') }}"
                                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_corporate')">
                                <svg class="w-4 h-4 text-[#9ca3af] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                                Corporate Banking
                            </a>
                            <a href="{{ route('banking.products.cross-border') }}"
                                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] mb-0.5 @yield('nav_cross')">
                                <svg class="w-4 h-4 text-[#9ca3af] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253" />
                                </svg>
                                Cross-border Payments
                            </a>
                            <a href="{{ route('banking.products.treasury') }}"
                                class="sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-lg text-[13px] font-medium text-[#374151] @yield('nav_treasury')">
                                <svg class="w-4 h-4 text-[#9ca3af] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5" />
                                </svg>
                                Treasury Services
                            </a>
                        </nav>
                    </div>

                    {{-- Key stats --}}
                    @hasSection('sidebar_stats')
                    <div class="bg-white rounded-2xl border border-[#e2ede8] p-5"
                        style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
                        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Key Statistics</p>
                        @yield('sidebar_stats')
                    </div>
                    @endif

                    {{-- Hub CTA --}}
                    <div class="rounded-2xl p-5 text-white"
                        style="background:linear-gradient(140deg,#1b285c,#191656)">
                        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-2">Banking Hub</p>
                        <p class="text-[12.5px] text-white/55 mb-4 leading-relaxed">Explore all banking segments and industry analysis.</p>
                        <a href="{{ route('banking') }}"
                            class="flex items-center gap-2 text-[13px] font-semibold text-[#4f46e5] hover:text-white transition-colors">
                            View Banking Hub
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    {{-- Consultation CTA --}}
                    <div class="rounded-2xl p-5 border border-indigo"
                        style="background:linear-gradient(135deg,#eeecfd,#eaeaf1)">
                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#4f46e5] mb-2">Free Consultation</p>
                        <p class="text-[12.5px] text-[#374151] mb-4 leading-relaxed">Questions about banking products and financial strategy?</p>
                        <a href="{{ route('consultation') }}"
                            class="block w-full text-center bg-indigo hover:bg-[#4f46e5] text-white text-[13px] font-semibold py-2.5 rounded-xl transition-colors">
                            Book Free Call
                        </a>
                    </div>

                </div>
            </aside>

            {{-- ─── MAIN CONTENT ─── --}}
            <main class="flex-1 min-w-0">

                {{-- Hero two-col layout (image + stats) --}}
                <div class="grid grid-cols-[1fr_260px] gap-6 mb-6">

                    {{-- Article card --}}
                    <div class="bg-white rounded-2xl border border-[#e2ede8] overflow-hidden"
                        style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">

                        {{-- Article top bar --}}
                        <div class="border-b border-[#f0faf4] px-8 py-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="bg-[#f2f2fc] text-indigo-600 border border-[#05966933] text-[9.5px] font-bold tracking-[0.12em] uppercase px-[9px] py-[3px] rounded-[20px]">@yield('article_badge', 'Banking Products')</span>
                                <span class="text-[12px] text-[#9ca3af] font-code">Expert Analysis</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="p-2 rounded-lg text-[#9ca3af] hover:text-[#4f46e5] hover:bg-[#f2f2fc] transition-all border-0 bg-transparent cursor-pointer" title="Share">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                    </svg>
                                </button>
                                <button class="p-2 rounded-lg text-[#9ca3af] hover:text-[#4f46e5] hover:bg-[#f2f2fc] transition-all border-0 bg-transparent cursor-pointer" title="Bookmark">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="px-8 py-8 prose-products">
                            @yield('content')
                        </div>

                        {{-- Article footer --}}
                        <div class="border-t border-[#f0faf4] px-8 py-5 bg-[#f2f2fc]">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-[11px] text-[#9ca3af] font-code uppercase tracking-wide mb-1.5">Was this helpful?</p>
                                    <div class="flex items-center gap-2">
                                        <button class="flex items-center gap-1.5 text-[13px] font-medium text-[#374151] hover:text-[#4f46e5] px-3 py-1.5 rounded-lg hover:bg-emerald-50 transition-all border border-[#e2ede8] hover:border-emerald-300 bg-white cursor-pointer">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                            Helpful
                                        </button>
                                        <button class="flex items-center gap-1.5 text-[13px] font-medium text-[#374151] hover:text-[#4f46e5] px-3 py-1.5 rounded-lg hover:bg-emerald-50 transition-all border border-[#e2ede8] hover:border-emerald-300 bg-white cursor-pointer">
                                            <svg class="w-4 h-4 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                            Needs work
                                        </button>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-[11px] text-[#9ca3af] font-code mb-1">Last Updated</p>
                                    <p class="text-[13px] font-semibold text-[#374151]">@yield('last_updated', 'March 2026')</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right column: hero stat panel --}}
                    <div class="space-y-4">
                        @yield('right_panel')
                    </div>

                </div>

                {{-- Related articles --}}
                @hasSection('related')
                <div class="mt-2">
                    <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Related Articles</p>
                    <div class="grid grid-cols-3 gap-4">
                        @yield('related')
                    </div>
                </div>
                @endif

            </main>
        </div>
    </div>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>