{{-- resources/views/pages/articles/banking/products/treasury-banking.blade.php --}}
@extends('layouts.banking-products')

@section('title', 'Treasury Services')
@section('breadcrumb_current', 'Treasury Services')
@section('hero_title', 'Treasury Services')
@section('hero_subtitle', 'How banks provide corporations with the tools to manage cash, optimize liquidity, hedge risk, and streamline payments — the invisible financial infrastructure behind every large enterprise.')
@section('hero_date', 'March 2026')
@section('hero_read_time', '9 min read')
@section('article_badge', 'Treasury Services')
@section('last_updated', 'March 2026')
@section('nav_treasury', 'active')

@section('hero_stats_cards')
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">$120B</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Global treasury mgmt revenue</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">92%</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Fortune 500 use TMS platforms</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Treasury Mgmt Revenue</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$120B</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">AI-Driven Cash Forecast</p>
                <p class="text-[16px] font-bold text-[#0a2417]">94%</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Global FX Notional/Day</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$7.5T</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3"/></svg>
            </div>
        </div>
    </div>
@endsection

@section('right_panel')
    <div class="bg-white rounded-2xl border border-[#e2ede8] p-5" style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Treasury Functions</p>
        <div class="space-y-2">
            @foreach([
                ['Cash Management', 'Forecasting & pooling'],
                ['Liquidity', 'Short-term investing'],
                ['FX Risk', 'Hedging exposures'],
                ['Interest Rate', 'Swap management'],
                ['Payments', 'Disbursements & collections'],
                ['Funding', 'Debt & capital structure'],
            ] as [$fn, $sub])
            <div class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-[#4f46e508]">
                <div class="w-1.5 h-1.5 rounded-full bg-[#4f46e5] shrink-0"></div>
                <div class="flex-1">
                    <span class="text-[13px] font-medium text-[#0a2417]">{{ $fn }}</span>
                    <span class="text-[11.5px] text-[#9ca3af] ml-2">· {{ $sub }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-[#1a1f59] rounded-2xl p-5 text-white">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-3">Leading TMS Providers</p>
        @foreach(['Kyriba', 'FIS (Quantum)', 'SAP Treasury', 'ION Group', 'Finastra'] as $i => $vendor)
        <div class="flex items-center gap-3 py-2 {{ $i < 4 ? 'border-b border-white/10' : '' }}">
            <span class="text-[11px] font-code text-[#4f46e5]/60 w-4">{{ $i + 1 }}</span>
            <span class="text-[13px] text-white/80">{{ $vendor }}</span>
        </div>
        @endforeach
    </div>
@endsection

@section('content')

<p class="text-[17px] text-[#0a2417] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f0faf4]">
    Treasury services represent one of the most profitable — and most relationship-intensive — product lines in corporate banking. For large corporations, treasury management is the financial nervous system: the infrastructure that ensures cash is always in the right place, at the right time, in the right currency, at the lowest possible cost.
</p>

<h2>What Treasury Services Encompasses</h2>
<p>
    Bank treasury services is an umbrella term covering the full suite of tools and platforms that banks provide to help corporate treasury departments manage their financial operations. Unlike credit products where the bank takes risk on the balance sheet, many treasury products are fee-based services — making them attractive, capital-light revenue sources.
</p>

<div class="grid grid-cols-3 gap-4 my-7">
    @foreach([
        ['emerald', 'Cash Management', 'Sweeps, pooling, ZBA', 'Optimize idle cash and reduce borrowing costs through automated liquidity structures.'],
        ['blue', 'Payment Solutions', 'ACH, wire, cards', 'High-volume payment processing for payroll, vendor payments, and global disbursements.'],
        ['amber', 'Risk Management', 'FX, rates, commodities', 'Hedging instruments that protect corporate earnings from currency and interest rate volatility.'],
    ] as [$color, $title, $tools, $desc])
    <div class="prod-card p-5 rounded-2xl border bg-[#4f46e508]
        {{ $color === 'emerald' ? 'border-emerald-200' : ($color === 'blue' ? 'border-blue-100' : 'border-amber-100') }}">
        <div class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide mb-3
            {{ $color === 'emerald' ? 'bg-emerald-100 text-emerald-700 border border-emerald-200' : ($color === 'blue' ? 'bg-blue-100 text-blue-700 border border-blue-200' : 'bg-amber-100 text-amber-700 border border-amber-200') }}">
            {{ $tools }}
        </div>
        <h3 class="!mt-0 text-[13.5px]
            {{ $color === 'emerald' ? 'text-emerald-700' : ($color === 'blue' ? 'text-blue-700' : 'text-amber-700') }}">{{ $title }}</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2>Cash Pooling Structures</h2>
<p>
    For multinational corporations managing dozens of bank accounts across multiple currencies and jurisdictions, cash pooling is one of the most powerful treasury tools available. Two primary structures dominate:
</p>

<div class="my-7 grid grid-cols-2 gap-5">
    <div class="prod-card p-6 rounded-2xl bg-[#4f46e508] border border-emerald-200">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
            </div>
            <div>
                <h3 class="!mt-0 !mb-0 text-[14px] text-emerald-800">Physical (Notional) Pooling</h3>
                <p class="text-[11.5px] text-[#9ca3af] font-code">Zero Balance Account</p>
            </div>
        </div>
        <p class="!text-[13px] !mb-3 text-[#6b7280]">Balances from multiple subsidiary accounts are physically swept into a master account daily. Interest is earned on the consolidated position. Idle cash is eliminated automatically.</p>
        <div class="text-[11.5px] text-emerald-700 font-semibold">Best for: Cross-entity cash centralization</div>
    </div>
    <div class="prod-card p-6 rounded-2xl bg-[#4f46e508] border border-blue-100">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
            </div>
            <div>
                <h3 class="!mt-0 !mb-0 text-[14px] text-blue-800">Notional Pooling</h3>
                <p class="text-[11.5px] text-[#9ca3af] font-code">Virtual Consolidation</p>
            </div>
        </div>
        <p class="!text-[13px] !mb-3 text-[#6b7280]">Account balances are not physically moved. The bank offsets positive and negative balances across accounts and calculates interest on the net position — preserving legal separation while delivering the economic benefit of pooling.</p>
        <div class="text-[11.5px] text-blue-600 font-semibold">Best for: Regulatory/tax-sensitive structures</div>
    </div>
</div>

<h2>FX and Risk Management</h2>
<p>
    For multinationals, currency risk is a continuous operational reality. A 5% appreciation in the USD against the EUR can materially impact reported earnings for a US company with significant European revenue — treasury's job is to reduce that volatility through systematic hedging programs.
</p>

<div class="my-6 overflow-hidden rounded-2xl border border-[#e2ede8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(140deg,#1b285c,#191656)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Instrument</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Risk Managed</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Mechanism</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Typical Users</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f0faf4]">
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">FX Forward</td>
                <td class="px-5 py-3.5 text-[#374151]">Currency exposure</td>
                <td class="px-5 py-3.5 text-[#374151]">Lock future exchange rate</td>
                <td class="px-5 py-3.5 text-[#374151]">Importers, exporters</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Interest Rate Swap</td>
                <td class="px-5 py-3.5 text-[#374151]">Floating rate debt</td>
                <td class="px-5 py-3.5 text-[#374151]">Convert float to fixed</td>
                <td class="px-5 py-3.5 text-[#374151]">Leveraged borrowers</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">FX Option</td>
                <td class="px-5 py-3.5 text-[#374151]">Currency downside</td>
                <td class="px-5 py-3.5 text-[#374151]">Right but not obligation</td>
                <td class="px-5 py-3.5 text-[#374151]">MNCs, M&A situations</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Commodity Hedge</td>
                <td class="px-5 py-3.5 text-[#374151]">Input price volatility</td>
                <td class="px-5 py-3.5 text-[#374151]">Futures/swaps on inputs</td>
                <td class="px-5 py-3.5 text-[#374151]">Airlines, manufacturers</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="my-7 p-6 rounded-2xl border-l-4 border-[#4f46e5]" style="background:linear-gradient(90deg, #4c44d505, #dbd9f870)">
    <div class="flex items-start gap-4">
        <div class="w-8 h-8 rounded-lg bg-[#f2f2fc] flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#065f46] mb-1">AI in Corporate Treasury — 2026</p>
            <p class="text-[13.5px] text-[#047857] !mb-0 leading-relaxed">AI-powered cash forecasting platforms now achieve 94%+ accuracy on 30-day rolling forecasts — dramatically reducing the "trapped cash" problem where subsidiaries hold excess liquidity as a buffer. Banks that embed AI-native treasury tools into their client platforms are winning mandates over those offering traditional TMS platforms.</p>
        </div>
    </div>
</div>

<h2>Why Treasury Services Matter for Banks</h2>
<p>
    From the bank's perspective, treasury management is strategically valuable beyond its direct revenue contribution. A corporate client that runs its entire payments infrastructure through a bank creates switching costs that entrench the relationship for years. Every payroll run, every vendor payment, every FX conversion that flows through the bank generates data — data that can be used to offer better credit pricing, identify cross-sell opportunities, and anticipate the client's financial needs before they ask.
</p>
<p>
    Banks with the deepest treasury management capabilities command the highest wallet share among large corporate clients — making treasury services one of the most important competitive battlegrounds in corporate banking today.
</p>

@endsection

@section('related')
<a href="{{ route('banking.products.corporate') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#4f46e5] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-emerald-600 mb-2 block">Corporate Banking</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Corporate Banking Services Overview</p>
</a>
<a href="{{ route('banking.products.cross-border') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#4f46e5] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-blue-500 mb-2 block">Cross-border Payments</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Global Payments & FX Infrastructure</p>
</a>
<a href="{{ route('banking.products.lending') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#4f46e5] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-amber-500 mb-2 block">Lending Framework</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Working Capital & Credit Facilities</p>
</a>
@endsection