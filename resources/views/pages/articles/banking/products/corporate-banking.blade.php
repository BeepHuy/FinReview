{{-- resources/views/pages/articles/banking/products/corporate-banking.blade.php --}}
@extends('layouts.banking-products')

@section('title', 'Corporate Banking Services')
@section('breadcrumb_current', 'Corporate Banking')
@section('hero_title', 'Corporate Banking Services')
@section('hero_subtitle', 'How banks serve large corporations with bespoke financial solutions — from revolving credit facilities and cash management to M&A advisory and capital market access.')
@section('hero_date', 'March 2026')
@section('hero_read_time', '9 min read')
@section('article_badge', 'Corporate Banking')
@section('last_updated', 'March 2026')
@section('nav_corporate', 'active')

@section('hero_stats_cards')
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">$4.8T</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Global corporate loans 2026</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">38%</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Bank revenue from corporate</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Corporate Loan Volume</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$4.8T</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Revenue per Corp Client</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$2.4M</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
        </div>
    </div>
@endsection

@section('right_panel')
    <div class="bg-white rounded-2xl border border-[#e2ede8] p-5" style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Corporate Service Lines</p>
        <div class="space-y-2">
            @foreach([
                ['Credit & Lending', 'Term loans, revolvers, bridge'],
                ['Treasury & Cash Mgmt', 'Sweeps, liquidity, FX'],
                ['Trade Finance', 'L/C, guarantees, forfaiting'],
                ['Capital Markets', 'DCM, ECM, syndication'],
                ['Advisory', 'M&A, restructuring'],
            ] as [$svc, $detail])
            <div class="flex items-center justify-between px-3 py-2.5 rounded-lg bg-[#4f46e508]">
                <span class="text-[13px] font-medium text-[#0a2417]">{{ $svc }}</span>
                <span class="text-[11.5px] text-[#9ca3af]">{{ $detail }}</span>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-[#1a1f59] rounded-2xl p-5 text-white">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-2">Top Corporate Banks</p>
        <p class="text-[12.5px] text-white/50 mb-3 leading-relaxed">By global corporate banking revenue.</p>
        @foreach(['JPMorgan Chase', 'Bank of America', 'Citi', 'Wells Fargo', 'HSBC'] as $i => $bank)
        <div class="flex items-center gap-3 py-2 {{ $i < 4 ? 'border-b border-white/10' : '' }}">
            <span class="text-[11px] font-code text-[#4f46e5] w-4">{{ $i + 1 }}</span>
            <span class="text-[13px] text-white/80">{{ $bank }}</span>
        </div>
        @endforeach
    </div>
@endsection

@section('content')

<p class="text-[17px] text-[#0a2417] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f0faf4]">
    Corporate banking sits at the high-value end of the banking spectrum, providing large enterprises, multinational corporations, and institutional clients with sophisticated financial solutions tailored to complex operational and strategic needs. A single corporate relationship can generate millions in annual revenue for a bank across lending, treasury, and advisory fee streams.
</p>

<h2>What Sets Corporate Banking Apart</h2>
<p>
    Unlike retail banking's standardized product catalogue, corporate banking is fundamentally bespoke. Each corporate client receives a dedicated relationship team — typically a Relationship Manager (RM), Credit Officer, and product specialists — who work to understand the client's business model, financial cycles, and strategic objectives deeply.
</p>
<p>
    Corporate clients are segmented by revenue size: middle market (typically $50M–$500M revenue), large corporate ($500M–$2B), and global corporates ($2B+). Each segment receives progressively more sophisticated products and dedicated coverage from specialized industry teams.
</p>

<div class="grid grid-cols-2 gap-5 my-7">
    @foreach([
        ['emerald', 'Credit Solutions', 'Revolving credit facilities, term loans (A and B), bridge financing, acquisition finance, and leverage buyout (LBO) financing — all structured around the corporate\'s cash flow profile and strategic timeline.'],
        ['blue', 'Treasury Management', 'Enterprise cash pooling, controlled disbursement, lockbox services, commercial card programs, and working capital optimization tools that help CFOs manage liquidity with precision.'],
        ['amber', 'Trade Finance', 'Letters of credit, bank guarantees, documentary collections, supply chain finance, and export credit agency (ECA) backed structures for companies with complex cross-border supply chains.'],
        ['violet', 'Capital Markets Access', 'Banks act as bookrunners and arrangers for corporate bond issuances, syndicated loans, and equity raises — leveraging their distribution networks to connect corporate clients with institutional investors.'],
    ] as [$color, $title, $desc])
    <div class="prod-card p-5 rounded-2xl border bg-[#4f46e508]
        {{ $color === 'emerald' ? 'border-emerald-200' : ($color === 'blue' ? 'border-blue-100' : ($color === 'amber' ? 'border-amber-100' : 'border-violet-100')) }}">
        <h3 class="!mt-0 text-[13.5px]
            {{ $color === 'emerald' ? 'text-emerald-700' : ($color === 'blue' ? 'text-blue-700' : ($color === 'amber' ? 'text-amber-700' : 'text-violet-700')) }}">{{ $title }}
        </h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2>The Relationship Banking Model</h2>
<p>
    The economics of corporate banking depend on cross-selling across the full product suite. A bank that only holds a company's revolving credit line earns minimal return — the real profitability comes from layering on treasury management, trade finance, FX hedging, and capital markets mandates.
</p>

<div class="my-6 overflow-hidden rounded-2xl border border-[#e2ede8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(140deg,#1b285c,#191656)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Product</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Revenue Type</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Margin Profile</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Stickiness</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f0faf4]">
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Revolving Credit</td>
                <td class="px-5 py-3.5 text-[#374151]">NIM + commitment fees</td>
                <td class="px-5 py-3.5 text-[#374151]">Low</td>
                <td class="px-5 py-3.5"><span class="bg-[#f2f2fc] text-indigo-600 border border-[rgba(5,150,105,0.2)] text-[9.5px] font-bold tracking-[0.12em] uppercase px-[9px] py-[3px] rounded-[20px]">Very High</span></td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Treasury Mgmt</td>
                <td class="px-5 py-3.5 text-[#374151]">Fee income, float</td>
                <td class="px-5 py-3.5 text-[#374151]">High</td>
                <td class="px-5 py-3.5"><span class="bg-[#f2f2fc] text-indigo-600 border border-[rgba(5,150,105,0.2)] text-[9.5px] font-bold tracking-[0.12em] uppercase px-[9px] py-[3px] rounded-[20px]">Very High</span></td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">FX Hedging</td>
                <td class="px-5 py-3.5 text-[#374151]">Bid-ask spread, fees</td>
                <td class="px-5 py-3.5 text-[#374151]">Moderate–High</td>
                <td class="px-5 py-3.5"><span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide bg-blue-100 text-blue-700 border border-blue-200">Moderate</span></td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Bond Issuance</td>
                <td class="px-5 py-3.5 text-[#374151]">Underwriting fees</td>
                <td class="px-5 py-3.5 text-[#374151]">Very High</td>
                <td class="px-5 py-3.5"><span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide bg-amber-100 text-amber-700 border border-amber-200">Event-driven</span></td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">M&A Advisory</td>
                <td class="px-5 py-3.5 text-[#374151]">Success fee</td>
                <td class="px-5 py-3.5 text-[#374151]">Exceptional</td>
                <td class="px-5 py-3.5"><span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide bg-amber-100 text-amber-700 border border-amber-200">Event-driven</span></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="my-7 p-6 rounded-2xl border-l-4 border-[#4f46e5]" style="background:linear-gradient(90deg, #4c44d505, #dbd9f870)">
    <div class="flex items-start gap-4">
        <div class="w-8 h-8 rounded-lg bg-[#f2f2fc] flex items-center justify-center shrink-0 mt-0.5">
            <svg class="w-4 h-4 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#065f46] mb-1">The Wallet Share Imperative</p>
            <p class="text-[13.5px] text-[#047857] !mb-0 leading-relaxed">Top-tier banks measure success in corporate banking not just by individual product revenue, but by "wallet share" — the percentage of a client's total banking spend captured by the bank. A bank with 40% wallet share on a Fortune 500 client is deeply embedded in that company's financial operations and commands pricing power across its entire product suite.</p>
        </div>
    </div>
</div>

<h2>2026 Corporate Banking Trends</h2>
<p>
    Corporate banking is evolving rapidly under several converging forces. ESG-linked financing — where loan terms adjust based on sustainability performance metrics — has moved from niche to mainstream, with ESG-linked loans representing over 15% of new corporate credit origination. Simultaneously, AI-powered treasury platforms are automating cash forecasting and liquidity management, raising the bar for what banks must deliver in their treasury product suites to remain competitive with specialist fintech providers.
</p>

@endsection

@section('related')
<a href="{{ route('banking.products.lending') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-emerald-600 mb-2 block">Lending Framework</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Corporate Lending & Credit Structures</p>
</a>
<a href="{{ route('banking.products.cross-border') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-blue-500 mb-2 block">Cross-border Payments</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">International Trade Finance & Payments</p>
</a>
<a href="{{ route('banking.products.treasury') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-amber-500 mb-2 block">Treasury Services</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Enterprise Treasury & Cash Management</p>
</a>
@endsection