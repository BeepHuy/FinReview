@extends('layouts.finreview')
@section('title', 'FinReview – Expert Financial Reviews You Can Trust')

@section('content')

{{-- ════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ --}}
<section class="relative bg-[#0f0f0f] overflow-hidden flex flex-col items-center justify-center text-center px-6 pt-12 pb-20">

    {{-- Background grain texture --}}
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none"></div>

    {{-- Gold glow top --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] pointer-events-none" ></div>

    {{-- Badge --}}
    <div class="relative inline-flex items-center gap-2.5 border border-[#c9a96e]/30 bg-[#c9a96e]/8 text-[#c9a96e] text-[12.5px] font-medium px-5 py-2 rounded-full mb-10 tracking-wide">
        <span class="w-1.5 h-1.5 rounded-full bg-[#c9a96e] animate-pulse shrink-0"></span>
        Trusted by 100,000+ readers worldwide
    </div>

    {{-- Title --}}
    <h1 class="relative max-w-[800px] hero-title mx-auto mb-6" >
        Expert Financial Reviews<br>
        <span class="text-[#c9a96e]">You Can Trust</span>
    </h1>

    {{-- Desc --}}
    <p class="relative text-white/50 max-w-[560px] leading-[1.9] mb-12 text-[16px] font-light">
        In-depth analysis and honest comparisons of financial products, insurance policies,
        banking services, and credit cards to help you make smarter decisions.
    </p>

    {{-- Buttons --}}
    <div class="relative flex items-center gap-4 flex-wrap justify-center">
        <a href="{{ route('reviews') }}"
           class="inline-flex items-center gap-2.5 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0f0f0f] font-bold text-[14.5px] px-8 py-4 rounded-xl transition-all hover:-translate-y-0.5 hover:shadow-lg hover:shadow-[#c9a96e]/25">
            Explore Reviews
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="{{ route('consultation') }}"
           class="inline-flex items-center gap-2.5 text-white/80 border border-white/20 hover:border-white/45 hover:text-white hover:bg-white/5 font-medium text-[14.5px] px-8 py-4 rounded-xl transition-all">
            Get Free Consultation
        </a>
    </div>

    {{-- Stats --}}
    <div class="relative flex items-stretch mt-12 w-full max-w-[760px] border border-white/10 rounded-2xl overflow-hidden">
        @foreach([['1,200+','Reviews Published'],['100K+','Monthly Readers'],['98%','Accuracy Rate'],['210+','Products Compared']] as $i => $s)
        <div class="flex-1 text-center py-6 px-4 {{ $i < 3 ? 'border-r border-white/10' : '' }}">
            <div class="font-extrabold leading-none mb-2 text-[#c9a96e] familyfont text-4xl">{{ $s[0] }}</div>
            <div class="text-white/35 text-[11px] tracking-widest uppercase">{{ $s[1] }}</div>
        </div>
        @endforeach
    </div>

</section>

{{-- ════════════════════════════════════════════════════
     FEATURED REVIEWS  (bài viết tài chính)
     Layout: 1 lớn trái | 2 nhỏ phải — chiều cao bằng nhau
════════════════════════════════════════════════════ --}}
<section class="bg-[#f5f0eb] py-8 px-6">
    <div class="max-w-screen-xl mx-auto">

        {{-- Section header --}}
        <div class="flex items-end justify-between mb-12">
            <div>
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-[3px] bg-[#c9a96e] rounded-full"></div>
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#c9a96e]">Editor's Pick</span>
                </div>
                <h2 class="text-[38px] font-bold text-[#1a1a1a] leading-tight familyfont">
                    Featured Reviews
                </h2>
                <p class="text-[#6b6560] text-[15px] mt-3 max-w-[480px] leading-relaxed">
                    In-depth financial reviews hand-picked by our editorial team for their accuracy, depth, and real-world relevance.
                </p>
            </div>
            <a href="{{ route('reviews') }}"
               class="hidden lg:inline-flex items-center gap-2 text-[13.5px] font-semibold text-[#1a1a1a] border border-[#1a1a1a] hover:bg-[#1a1a1a] hover:text-white px-5 py-2.5 rounded-lg transition-colors shrink-0">
                View All Reviews
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        {{-- Grid: 1 bài lớn trái (full height) + 2 bài nhỏ phải --}}
        <div class="grid grid-cols-1 lg:grid-cols-[1.15fr_1fr] gap-6 items-stretch">

            {{-- ══ BÀI LỚN TRÁI ══ --}}
            <a href="{{ route('article.fed-rate') }}" class="group bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">

                {{-- Cover ảnh thực tế --}}
                <div class="relative overflow-hidden shrink-0" style="height:240px">
                    <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=800&q=80&auto=format&fit=crop"
                         alt="Federal Reserve Rate Analysis"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0" style="background:linear-gradient(to top, rgba(13,27,42,0.75) 0%, transparent 50%)"></div>
                    <div class="absolute top-5 left-5 flex items-center gap-2">
                        <span class="bg-[#c9a96e] text-[#0d1b2a] text-[10px] font-black uppercase tracking-[0.12em] px-3 py-1.5 rounded-lg">In-Depth Analysis</span>
                        <span class="bg-white/15 backdrop-blur-sm text-white/90 text-[10px] font-semibold px-3 py-1.5 rounded-lg border border-white/20">Investing</span>
                    </div>
                </div>

                {{-- Body --}}
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="text-[23px] font-bold text-[#1a1a1a] leading-[1.3] mb-4 group-hover:text-[#c9a96e] transition-colors" style="font-family:'Playfair Display',serif">
                        How the Fed's 2026 Rate Decision Will Reshape Your Savings, Mortgage, and Investment Strategy
                    </h3>
                    <p class="text-[#6b6560] text-[14.5px] leading-[1.8] mb-6 flex-1">
                        With a 78% market probability of a Q2 rate cut, our analysts break down exactly how each 25bps move affects high-yield savings accounts, 30-year mortgages, bond portfolios, and equity valuations — and what you should rebalance now before the announcement.
                    </p>
                    <div class="flex items-center justify-between pt-5 border-t border-[#f0e8df]">
                        <span class="text-[12px] text-[#6b6560]">Mar 1, 2026</span>
                        <span class="inline-flex items-center gap-1.5 text-[13px] font-bold text-[#c9a96e] group-hover:gap-3 transition-all">
                            Read Analysis
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </div>
            </a>

            {{-- ══ 2 BÀI NHỎ PHẢI — flex-1 cùng chiều cao bài lớn ══ --}}
            <div class="flex flex-col gap-6">

                {{-- Bài nhỏ 1 --}}
                <a href="{{ route('article.emergency-fund') }}" class="group bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 flex flex-1 min-h-0">
                    {{-- Ảnh dọc - cố định width + height 100% --}}
                    <div class="shrink-0 relative overflow-hidden" style="width:130px; min-height:100%">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=300&h=500&q=80&auto=format&fit=crop&crop=center"
                             alt="Personal Finance Savings"
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute top-3 left-3 right-3">
                            <span class="bg-[#c9a96e] text-[#0f0f0f] text-[8.5px] font-black uppercase tracking-[0.1em] px-2 py-1 rounded-md block text-center">Analysis</span>
                        </div>
                    </div>
                    {{-- Content --}}
                    <div class="p-5 flex flex-col flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-[11px] font-semibold text-[#6b6560] bg-[#f5f0eb] px-2.5 py-0.5 rounded-full border border-[#e8e0d8]">Personal Finance</span>
                        </div>
                        <h3 class="text-[15.5px] font-bold text-[#1a1a1a] leading-snug mb-2.5 group-hover:text-[#c9a96e] transition-colors" style="font-family:'Playfair Display',serif">
                            Emergency Fund vs. High-Yield Savings in 2026: Where Should Your $10K Go?
                        </h3>
                        <p class="text-[12.5px] text-[#6b6560] leading-relaxed flex-1 line-clamp-3">
                            With rates still above 4.5% APY, we model four scenarios — liquid savings, T-bills, money market funds, and CDs — to find the optimal split for your financial safety net.
                        </p>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-[#f5f0eb]">
                            <span class="text-[11.5px] text-[#6b6560]">Feb 20, 2026</span>
                            <span class="text-[12px] font-bold text-[#c9a96e] flex items-center gap-1 group-hover:gap-2 transition-all shrink-0">
                                Read <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>
                </a>

                {{-- Bài nhỏ 2 --}}
                <a href="{{ route('article.home-insurance') }}" class="group bg-white rounded-2xl border border-[#e8e0d8] overflow-hidden hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 flex flex-1 min-h-0">
                    {{-- Ảnh dọc - cố định width + height 100% --}}
                    <div class="shrink-0 relative overflow-hidden" style="width:130px; min-height:100%">
                        <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=300&h=500&q=80&auto=format&fit=crop&crop=center"
                             alt="Home Insurance"
                             class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute top-3 left-3 right-3">
                            <span class="bg-white/90 text-[#1a1a1a] text-[8.5px] font-black uppercase tracking-[0.1em] px-2 py-1 rounded-md block text-center">Deep Dive</span>
                        </div>
                    </div>
                    {{-- Content --}}
                    <div class="p-5 flex flex-col flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-[11px] font-semibold text-[#6b6560] bg-[#f5f0eb] px-2.5 py-0.5 rounded-full border border-[#e8e0d8]">Insurance</span>
                        </div>
                        <h3 class="text-[15.5px] font-bold text-[#1a1a1a] leading-snug mb-2.5 group-hover:text-[#c9a96e] transition-colors" style="font-family:'Playfair Display',serif">
                            Why Home Insurance Premiums Rose 18% in 2025 — And What to Do Before Renewal
                        </h3>
                        <p class="text-[12.5px] text-[#6b6560] leading-relaxed flex-1 line-clamp-3">
                            Climate risk repricing is permanent. We analyzed 14 carriers across 8 high-risk states and found three negotiation strategies that saved policyholders an average of $340/year.
                        </p>
                        <div class="flex items-center justify-between mt-3 pt-3 border-t border-[#f5f0eb]">
                            <span class="text-[11.5px] text-[#6b6560]">Feb 27, 2026</span>
                            <span class="text-[12px] font-bold text-[#c9a96e] flex items-center gap-1 group-hover:gap-2 transition-all shrink-0">
                                Read <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        {{-- Mobile view all --}}
        <div class="lg:hidden text-center mt-8">
            <a href="{{ route('reviews') }}" class="inline-flex items-center gap-2 text-[13.5px] font-semibold text-[#1a1a1a] border border-[#1a1a1a] hover:bg-[#1a1a1a] hover:text-white px-6 py-3 rounded-lg transition-colors">
                View All Reviews <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════════════
     WHY TRUST US — nền tối xen kẽ tạo rhythm
════════════════════════════════════════════════════ --}}
<section class="bg-[#1a1a1a] py-8 px-6">
    <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-[3px] bg-[#c9a96e] rounded-full"></div>
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#c9a96e]">Our Promise</span>
                </div>
                <h2 class="text-[40px] font-bold text-white leading-[1.15] mb-6 familyfont">
                    Why Readers Trust<br>Our Reviews
                </h2>
                <p class="text-white/50 text-[15.5px] leading-relaxed mb-8 max-w-[400px]">
                    Since our founding, we have been committed to providing transparent, accurate, and actionable financial reviews that help consumers make confident decisions.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-[#c9a96e] font-semibold text-[14px] hover:gap-3 transition-all">
                    Learn about our methodology
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Right: 4 cards --}}
            <div class="grid grid-cols-2 gap-4">

                @php
                $trustItems = [
                    ['icon'=>'<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>',
                     'title'=>'Thoroughly Researched',
                     'desc'=>'Every review involves hours of research, real product testing, and verification before publication.'],
                    ['icon'=>'<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                     'title'=>'Expert Team',
                     'desc'=>'Certified financial analysts and industry professionals with decades of combined experience.'],
                    ['icon'=>'<polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>',
                     'title'=>'Unbiased Analysis',
                     'desc'=>'Strict editorial independence. Our reviews are never influenced by advertisers or product providers.'],
                    ['icon'=>'<circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>',
                     'title'=>'Award-Winning',
                     'desc'=>'Recognized for excellence in financial journalism by leading industry organizations.'],
                ];
                @endphp

                @foreach($trustItems as $item)
                <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-[#c9a96e]/40 hover:bg-white/[0.07] transition-all group">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:rgba(201,169,110,0.12)">
                        <svg class="w-5 h-5 text-[#c9a96e]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">{!! $item['icon'] !!}</svg>
                    </div>
                    <h3 class="text-[14.5px] font-bold text-white mb-2">{{ $item['title'] }}</h3>
                    <p class="text-[12.5px] text-white/45 leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════
     SECTOR ANALYSIS — nền sáng
════════════════════════════════════════════════════ --}}
<section class="bg-[#f5f0eb] py-8 px-6 border-t border-[#e8e0d8]">
    <div class="max-w-screen-xl mx-auto">

        <div class="flex items-end justify-between mb-12">
            <div>
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-8 h-[3px] bg-[#c9a96e] rounded-full"></div>
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#c9a96e]">Updated Weekly</span>
                </div>
                <h2 class="text-[36px] font-bold text-[#1a1a1a] leading-tight mb-3 familyfont">Sector Analysis & Key Indicators</h2>
                <p class="text-[#6b6560] text-[15px] max-w-[500px] leading-relaxed">Real-time sector insights compiled by our research team with expert commentary and forward-looking analysis.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            @php
            $sectors = [
                ['icon'=>'<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
                 'cat'=>'Interest Rates & Banking',
                 'badge'=>'Cautiously Optimistic', 'badge_color'=>'text-amber-700 bg-amber-50 border-amber-200',
                 'title'=>'Fed Signals Potential Rate Cuts in Q2 2026',
                 'desc'=>'Markets are pricing in a 78% probability of a 25bps cut by June. Our analysts examine what this means for savings yields and mortgage rates.',
                 'metrics'=>[['Fed Funds Rate','4.25%','↘','red'],['10Y Treasury','3.92%','↘','red'],['Avg 30Y Mortgage','6.12%','↘','red']]],
                ['icon'=>'<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>',
                 'cat'=>'Insurance Industry',
                 'badge'=>'Under Pressure', 'badge_color'=>'text-red-700 bg-red-50 border-red-200',
                 'title'=>'Climate Events Drive 18% Surge in Home Insurance Premiums',
                 'desc'=>'Catastrophic weather patterns are reshaping the insurance landscape. Florida, California, and Louisiana face the steepest increases with some carriers exiting.',
                 'metrics'=>[['Avg Premium Increase','+18.3%','↗','green'],['Carrier Exits','12','↗','green'],['Market Hardening','High','—','gray']]],
                ['icon'=>'<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
                 'cat'=>'Real Estate & Housing',
                 'badge'=>'Transitioning', 'badge_color'=>'text-blue-700 bg-blue-50 border-blue-200',
                 'title'=>'Housing Inventory Rises 22% YoY, Signaling Shift Toward Buyers',
                 'desc'=>'After years of historically low supply, housing inventory is finally expanding in key metro areas. Prices remain elevated but appreciation pace is slowing.',
                 'metrics'=>[['Inventory (YoY)','+22.4%','↗','green'],['Median Home Price','$412K','—','gray'],['Days on Market','38','↗','green']]],
                ['icon'=>'<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>',
                 'cat'=>'Investment Markets',
                 'badge'=>'Bullish', 'badge_color'=>'text-green-700 bg-green-50 border-green-200',
                 'title'=>'S&P 500 Earnings Growth Outpaces Expectations for Third Consecutive Quarter',
                 'desc'=>'Corporate earnings resilience continues to surprise analysts. Tech and healthcare lead the way while energy faces headwinds from commodity price volatility.',
                 'metrics'=>[['S&P 500 YTD','+8.4%','↗','green'],['Earnings Growth','+11.2%','↗','green'],['P/E Ratio (Fwd)','21.3x','—','gray']]],
            ];
            @endphp

            @foreach($sectors as $sector)
            <div class="bg-white border border-[#e8e0d8] rounded-2xl p-6 hover:border-[#c9a96e] hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-2.5">
                        <div class="w-8 h-8 bg-[#fdf6ec] rounded-lg flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-[#c9a96e]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $sector['icon'] !!}</svg>
                        </div>
                        <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-[#6b6560]">{{ $sector['cat'] }}</span>
                    </div>
                    <span class="text-[10.5px] font-semibold px-2.5 py-1 rounded-full border shrink-0 {{ $sector['badge_color'] }}">{{ $sector['badge'] }}</span>
                </div>
                <h3 class="text-[17px] font-bold text-[#1a1a1a] mb-2.5 leading-snug group-hover:text-[#c9a96e] transition-colors familyfont">{{ $sector['title'] }}</h3>
                <p class="text-[13px] text-[#6b6560] leading-relaxed mb-5">{{ $sector['desc'] }}</p>
                <div class="grid grid-cols-3 gap-2 bg-[#f9f7f4] rounded-xl p-4 mb-5">
                    @foreach($sector['metrics'] as $idx => $m)
                    <div class="text-center {{ $idx>0 ? 'border-l border-[#e8e0d8]' : '' }}">
                        <div class="text-[10px] text-[#6b6560] mb-1.5 leading-tight">{{ $m[0] }}</div>
                        <div class="text-[14.5px] font-bold text-[#1a1a1a]">
                            {{ $m[1] }}
                            <span class="{{ $m[3]==='green'?'text-green-500':($m[3]==='red'?'text-red-400':'text-[#6b6560]') }} text-[11px]">{{ $m[2] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="#" class="inline-flex items-center gap-1.5 text-[13px] font-semibold text-[#c9a96e] hover:gap-3 transition-all">
                    Read full analysis
                    <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════════════
     CTA BANNER — tối, accent mạnh
════════════════════════════════════════════════════ --}}
<section class="bg-[#1a1a1a] py-8 px-6 relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none" style="background:radial-gradient(ellipse 60% 80% at 50% 50%, rgba(201,169,110,0.07) 0%, transparent 70%)"></div>
    <div class="max-w-screen-xl mx-auto text-center relative">
        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#c9a96e] mb-4">Get Expert Advice</p>
        <h2 class="text-[38px] font-bold text-white mb-5 familyfont">
            Not Sure Where to Start?
        </h2>
        <p class="text-white/50 text-[16px] max-w-[500px] mx-auto leading-relaxed mb-10">
            Our financial experts can help you compare products and find the best option for your specific situation — completely free.
        </p>
        <div class="flex items-center gap-4 justify-center flex-wrap">
            <a href="{{ route('consultation') }}"
               class="inline-flex items-center gap-2 bg-[#c9a96e] hover:bg-[#b8934a] text-[#0f0f0f] font-bold text-[15px] px-8 py-4 rounded-xl transition-all hover:-translate-y-0.5 hover:shadow-lg hover:shadow-[#c9a96e]/25">
                Get Free Consultation
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="{{ route('reviews') }}"
               class="inline-flex items-center gap-2 text-white/75 hover:text-white border border-white/20 hover:border-white/40 font-medium text-[15px] px-8 py-4 rounded-xl transition-all">
                Browse All Reviews
            </a>
        </div>
    </div>
</section>

@endsection