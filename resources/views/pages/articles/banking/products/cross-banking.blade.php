{{-- resources/views/pages/articles/banking/products/cross-banking.blade.php --}}
@extends('layouts.banking-products')

@section('title', 'Cross-border Payments')
@section('breadcrumb_current', 'Cross-border Payments')
@section('hero_title', 'Cross-border Payments')
@section('hero_subtitle', 'The infrastructure, economics, and rapid innovation reshaping how money moves across borders — from SWIFT correspondent banking to instant payment rails and crypto settlement.')
@section('hero_date', 'March 2026')
@section('hero_read_time', '10 min read')
@section('article_badge', 'Cross-border Payments')
@section('last_updated', 'March 2026')
@section('nav_cross', 'active')

@section('hero_stats_cards')
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">$250T</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Annual cross-border volume</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">2–5%</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Avg. transaction cost (retail)</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">3–5d</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Legacy SWIFT settlement time</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">B2B Cross-border 2026</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$40T</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">SWIFT Member Banks</p>
                <p class="text-[16px] font-bold text-[#0a2417]">11,500+</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Remittance Market</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$860B</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
        </div>
    </div>
@endsection

@section('right_panel')
    <div class="bg-white rounded-2xl border border-[#e2ede8] p-5" style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Payment Rail Comparison</p>
        <div class="space-y-3">
            @foreach([
                ['SWIFT', '3–5 days', '0.5–2%', 'amber'],
                ['SEPA Instant', '< 10 sec', '< 0.1%', 'emerald'],
                ['RippleNet', '< 5 min', '< 0.01%', 'emerald'],
                ['Wise/Fintechs', '1–2 days', '0.3–1%', 'blue'],
            ] as [$rail, $time, $cost, $color])
            <div class="flex items-center justify-between p-2.5 rounded-lg bg-[#4f46e508]">
                <span class="text-[13px] font-semibold text-[#0a2417]">{{ $rail }}</span>
                <div class="flex items-center gap-3 text-[11.5px]">
                    <span class="text-[#9ca3af]">{{ $time }}</span>
                    <span class="font-code font-semibold
                        {{ $color === 'emerald' ? 'text-emerald-600' : ($color === 'blue' ? 'text-blue-500' : 'text-amber-600') }}">
                        {{ $cost }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-[#1a1f59] rounded-2xl p-5 text-white">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-3">G20 Roadmap Targets</p>
        <p class="text-[12.5px] text-white/50 mb-3">By 2027 cross-border payment goals:</p>
        @foreach([['< $3', 'Average transaction cost'], ['< 1hr', 'Settlement speed (majority)'], ['100%', 'Transparency on fees'], ['No exclusions', 'Universal access']] as [$val, $label])
        <div class="flex items-center gap-3 py-2 border-b border-white/10 last:border-0">
            <span class="text-[13px] font-bold text-[#4f46e5] w-20 shrink-0">{{ $val }}</span>
            <span class="text-[12px] text-white/60">{{ $label }}</span>
        </div>
        @endforeach
    </div>
@endsection

@section('content')

<p class="text-[17px] text-[#0a2417] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f0faf4]">
    Moving money across borders remains one of the most expensive, slow, and friction-filled processes in global finance — despite the fact that over $250 trillion flows internationally each year. Understanding how the existing infrastructure works, and why challengers are rapidly dismantling it, is essential for anyone in global banking or international business.
</p>

<h2>How Cross-border Payments Work Today</h2>
<p>
    The dominant model for international payments is the correspondent banking network — a web of bilateral relationships between banks in different countries that allows them to hold accounts (nostro/vostro accounts) with each other and settle transactions on behalf of their customers.
</p>

<div class="my-7 space-y-0">
    @foreach([
        ['Payer Initiates', 'A US company instructs its bank (Bank A) to send $1 million to a supplier in Germany.', 'blue'],
        ['SWIFT Messaging', 'Bank A sends a SWIFT MT103 message to its German correspondent bank (Bank B) with payment instructions.', 'emerald'],
        ['Correspondent Settlement', 'Bank B debits Bank A\'s nostro account held in euros and credits the recipient\'s bank. Multiple correspondent hops may be required.', 'amber'],
        ['Final Credit', 'After 1–5 business days (and potentially 2–3 bank fees), the German supplier receives funds — often less than the original amount due to FX costs.', 'violet'],
    ] as $i => [$title, $desc, $color])
    <div class="flex gap-4 mb-0">
        <div class="flex flex-col items-center">
            <div class="w-9 h-9 rounded-full flex items-center justify-center text-white text-[12px] font-bold shrink-0
                {{ $color === 'blue' ? 'bg-blue-500' : ($color === 'emerald' ? 'bg-emerald-600' : ($color === 'amber' ? 'bg-amber-500' : 'bg-violet-500')) }}">
                {{ $i + 1 }}
            </div>
            @if($i < 3)
            <div class="w-px flex-1 bg-gradient-to-b
                {{ $color === 'blue' ? 'from-blue-300 to-emerald-300' : ($color === 'emerald' ? 'from-emerald-300 to-amber-300' : 'from-amber-300 to-violet-300') }}
                my-1" style="min-height:24px"></div>
            @endif
        </div>
        <div class="pb-5 flex-1">
            <p class="text-[13.5px] font-semibold text-[#0a2417] mb-1">{{ $title }}</p>
            <p class="text-[13px] text-[#6b7280] !mb-0">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<h2>The Correspondent Banking Problem</h2>
<p>
    The correspondent banking model, while globally ubiquitous, has fundamental structural weaknesses that create friction, cost, and exclusion:
</p>

<div class="grid grid-cols-2 gap-4 my-7">
    @foreach([
        ['Speed', 'Batch processing during business hours means transfers initiated after 3pm Friday might not settle until Monday — a multi-day freeze of working capital.'],
        ['Cost', 'Each correspondent in the chain charges fees. A $1,000 remittance to a developing country can lose 5–8% to combined FX margins and correspondent bank fees.'],
        ['Transparency', 'Payers often don\'t know exactly how much will be received at the other end, making cash flow planning difficult for businesses and families alike.'],
        ['De-risking', 'Banks have withdrawn from 25% of correspondent relationships since 2010 due to AML compliance costs, leaving many countries with reduced access.'],
    ] as [$title, $desc])
    <div class="prod-card p-5 rounded-2xl border border-[#e2ede8] bg-[#4f46e508]">
        <h3 class="!mt-0 text-[13.5px] text-emerald-700">{{ $title }}</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2>The New Payment Infrastructure</h2>

<div class="my-6 overflow-hidden rounded-2xl border border-[#e2ede8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(140deg,#1b285c,#191656)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Rail / Network</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Settlement</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Best For</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Coverage</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f0faf4]">
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">SWIFT GPI</td>
                <td class="px-5 py-3.5 text-[#374151]">Same day (improved)</td>
                <td class="px-5 py-3.5 text-[#374151]">Large B2B, bank-to-bank</td>
                <td class="px-5 py-3.5 text-[#374151]">200+ countries</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">RippleNet / XRP</td>
                <td class="px-5 py-3.5 text-[#374151]">3–5 seconds</td>
                <td class="px-5 py-3.5 text-[#374151]">Mid-value B2B corridors</td>
                <td class="px-5 py-3.5 text-[#374151]">55+ countries</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Wise (Business)</td>
                <td class="px-5 py-3.5 text-[#374151]">Minutes–1 day</td>
                <td class="px-5 py-3.5 text-[#374151]">SMB, mid-market</td>
                <td class="px-5 py-3.5 text-[#374151]">160+ countries</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">CBDC Networks</td>
                <td class="px-5 py-3.5 text-[#374151]">Near-instant</td>
                <td class="px-5 py-3.5 text-[#374151]">Government, wholesale</td>
                <td class="px-5 py-3.5 text-[#374151]">Emerging (mBridge)</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="my-7 p-6 rounded-2xl border-l-4 border-[#4f46e5]" style="background:linear-gradient(90deg, #4c44d505, #dbd9f870)">
    <div class="flex items-start gap-4">
        <div class="w-8 h-8 rounded-lg bg-[#f2f2fc] flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#065f46] mb-1">The mBridge Project</p>
            <p class="text-[13.5px] text-[#047857] !mb-0 leading-relaxed">The Bank for International Settlements and four central banks (China, Hong Kong, UAE, Thailand) have developed mBridge — a multi-CBDC platform for instant cross-border settlement. If scaled, this could disintermediate SWIFT entirely for participating corridors, representing the most significant threat to the existing correspondent banking model in decades.</p>
        </div>
    </div>
</div>

<h2>What This Means for Banks</h2>
<p>
    Traditional banks face a stark choice: build or buy capabilities to compete with payment fintechs, or risk losing a high-margin business line to faster, cheaper competitors. Many large banks have responded by investing in or acquiring payment technology companies, partnering with networks like RippleNet, or building proprietary real-time payment corridors for their most important client corridors.
</p>
<p>
    The winners in cross-border payments will be those who combine the trust, compliance infrastructure, and banking relationships of traditional institutions with the speed, transparency, and cost efficiency of modern payment technology.
</p>

@endsection

@section('related')
<a href="{{ route('banking.products.corporate') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#4f46e5] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-emerald-600 mb-2 block">Corporate Banking</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Trade Finance & Global Corporate Banking</p>
</a>
<a href="{{ route('banking.products.treasury') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#4f46e5] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-blue-500 mb-2 block">Treasury Services</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">FX & Liquidity Management in Treasury</p>
</a>
<a href="{{ route('banking.products.deposit') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#4f46e5] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-amber-500 mb-2 block">Deposit Products</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Nostro/Vostro Accounts & Correspondent Deposits</p>
</a>
@endsection