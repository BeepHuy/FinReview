{{-- resources/views/pages/articles/banking/products/deposit-banking.blade.php --}}
@extends('layouts.banking-products')

@section('title', 'Deposit Products Analysis')
@section('breadcrumb_current', 'Deposit Products')
@section('hero_title', 'Deposit Products Analysis')
@section('hero_subtitle', 'How banks structure savings accounts, checking accounts, and term deposits — their mechanics, interest dynamics, and role in the broader funding ecosystem.')
@section('hero_date', 'March 2026')
@section('hero_read_time', '8 min read')
@section('article_badge', 'Deposit Products')
@section('last_updated', 'March 2026')
@section('nav_deposit', 'active')

@section('hero_stats_cards')
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">70%+</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Bank funding from deposits</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">3</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Core deposit types</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">$19T</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">US deposit base 2026</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">US Savings Rate</p>
                <p class="text-[16px] font-bold text-[#0a2417]">4.85%</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">FDIC Insured Limit</p>
                <p class="text-[16px] font-bold text-[#0a2417]">$250K</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Online vs Traditional</p>
                <p class="text-[16px] font-bold text-[#0a2417]">+1.9%</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
            </div>
        </div>
    </div>
@endsection

@section('right_panel')
    {{-- Quick facts card --}}
    <div class="bg-white rounded-2xl border border-[#e2e3ed] p-5" style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Quick Facts</p>
        <div class="space-y-3">
            <div class="flex items-start gap-3">
                <div class="w-1.5 h-1.5 rounded-full bg-[#4f46e5] mt-2 shrink-0"></div>
                <p class="text-[13px] text-[#374151] leading-relaxed">Deposits represent the primary funding source for most commercial banks worldwide.</p>
            </div>
            <div class="flex items-start gap-3">
                <div class="w-1.5 h-1.5 rounded-full bg-[#4f46e5] mt-2 shrink-0"></div>
                <p class="text-[13px] text-[#374151] leading-relaxed">Online banks typically offer rates 1–2% higher than traditional brick-and-mortar competitors.</p>
            </div>
            <div class="flex items-start gap-3">
                <div class="w-1.5 h-1.5 rounded-full bg-[#4f46e5] mt-2 shrink-0"></div>
                <p class="text-[13px] text-[#374151] leading-relaxed">Deposit insurance protects consumers up to $250,000 per account category in the US.</p>
            </div>
        </div>
    </div>

    {{-- Rate comparison mini --}}
    <div class="bg-[#1a1f59] rounded-2xl p-5 text-white">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Avg. APY Comparison</p>
        <div class="space-y-3">
            @foreach([['Savings (traditional)', '0.45%', 15], ['Savings (online)', '4.85%', 80], ['1-yr CD', '5.10%', 85], ['Money Market', '4.50%', 75]] as [$label, $rate, $pct])
            <div>
                <div class="flex justify-between text-[12px] mb-1">
                    <span class="text-white/60">{{ $label }}</span>
                    <span class="font-semibold text-[#4f46e5]">{{ $rate }}</span>
                </div>
                <div class="h-1.5 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-[#4f46e5] to-[#4f46e5] rounded-full" style="width:{{ $pct }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('content')

<p class="text-[17px] text-[#0a2417] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f0faf4]">
    Deposit products are the bedrock of the banking system. They allow individuals and businesses to store funds safely while providing banks with a stable, low-cost funding base used to finance lending, investments, and operational activities. Understanding their mechanics is essential for both consumers seeking yield and analysts evaluating bank health.
</p>

<h2>Overview of Banking Deposit Products</h2>
<p>
    A bank deposit is a liability on the bank's balance sheet — the bank owes those funds to the depositor. In exchange for the use of customer funds, banks pay interest (on interest-bearing accounts) and provide payment infrastructure, security, and regulatory protection including government-backed deposit insurance.
</p>
<p>
    The aggregate deposit base determines a bank's capacity to lend. Banks are required to hold a fraction of deposits in reserve (either through regulatory minimums or the Fed's interest on reserves mechanism), with the remainder available for lending — the foundation of fractional reserve banking.
</p>

{{-- Three product cards --}}
<div class="grid grid-cols-3 gap-4 my-7">
    <div class="prod-card bg-[#f2f2fc] border border-[#e2ede8] rounded-2xl p-5">
        <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-5 h-5 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75"/></svg>
        </div>
        <h3 class="!mt-0 !mb-2 text-[13.5px]">Savings Accounts</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">Interest-earning accounts designed for personal savings. High liquidity with moderate yield.</p>
    </div>
    <div class="prod-card bg-[#f2f2fc] border border-[#e2ede8] rounded-2xl p-5">
        <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
        </div>
        <h3 class="!mt-0 !mb-2 text-[13.5px]">Checking Accounts</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">Transaction accounts for daily payments, transfers, and withdrawals. Maximum liquidity.</p>
    </div>
    <div class="prod-card bg-[#f2f2fc] border border-[#e2ede8] rounded-2xl p-5">
        <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center mb-4">
            <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="!mt-0 !mb-2 text-[13.5px]">Term Deposits (CDs)</h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">Fixed-term deposits offering higher rates in exchange for locked-in funds for a set period.</p>
    </div>
</div>

<h2>How Deposit Products Work</h2>
<p>
    The mechanics of a bank deposit follow a straightforward but critical cycle that underpins the entire lending economy:
</p>

<div class="my-7 space-y-3">
    @foreach([
        ['Customer Deposits Funds', 'Cash or electronic transfer is placed into a bank account. The bank records this as a liability (it owes the depositor) and simultaneously increases its asset base.'],
        ['Bank Securitizes & Manages', 'The bank holds required reserves at the Federal Reserve and deploys the remainder into interest-earning assets — primarily loans and securities.'],
        ['Interest Is Paid to Depositor', 'For interest-bearing accounts, the bank pays the depositor a rate reflecting market conditions, competitive pressure, and the bank\'s funding needs.'],
        ['Deposits Fund Lending', 'Loans issued against the deposit base generate interest income at rates above the deposit cost — the net interest margin (NIM) is the bank\'s core profitability driver.'],
    ] as $i => [$title, $desc])
    <div class="flex gap-4 p-4 rounded-2xl bg-[#f2f2fc] border border-[#e2ede8]">
        <div class="step-num shrink-0">{{ $i + 1 }}</div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#0a2417] mb-0.5">{{ $title }}</p>
            <p class="text-[13px] text-[#6b7280] !mb-0 leading-relaxed">{{ $desc }}</p>
        </div>
    </div>
    @endforeach
</div>

<h2>Key Features Compared</h2>
<div class="grid grid-cols-2 gap-4 my-7">
    @foreach([
        ['emerald', 'Security', 'Deposits are regulated by federal and state banking authorities and insured by the FDIC up to $250,000 per depositor per institution per account category.'],
        ['blue', 'Liquidity', 'Checking accounts offer unlimited access; savings accounts may limit monthly withdrawals; CDs lock funds for a defined term with early withdrawal penalties.'],
        ['amber', 'Interest Returns', 'Rates vary significantly by product type, bank type (online vs traditional), and prevailing Fed policy — currently at multi-decade highs in 2026.'],
        ['violet', 'Digital Access', 'All major deposit products now offer full online and mobile management, including real-time transaction notifications, instant transfers, and budgeting tools.'],
    ] as [$color, $title, $desc])
    <div class="prod-card p-5 rounded-2xl border bg-[#f2f2fc]
        {{ $color === 'emerald' ? 'border-emerald-200' : ($color === 'blue' ? 'border-blue-100' : ($color === 'amber' ? 'border-amber-100' : 'border-violet-100')) }}">
        <h3 class="!mt-0 text-[13.5px]
            {{ $color === 'emerald' ? 'text-emerald-700' : ($color === 'blue' ? 'text-blue-700' : ($color === 'amber' ? 'text-amber-700' : 'text-violet-700')) }}">
            {{ $title }}
        </h3>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2>Comparison of Major Deposit Products</h2>
<div class="my-6 overflow-hidden rounded-2xl border border-[#e2ede8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(140deg,#1b285c,#191656)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white w-[30%]">Product Type</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Liquidity</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Avg. APY (2026)</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Primary Use</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f0faf4]">
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Savings Account</td>
                <td class="px-5 py-3.5 text-[#374151]"><span class="bg-[#f2f2fc] text-indigo-600 border border-[rgba(5,150,105,0.2)] text-[9.5px] font-bold tracking-[0.12em] uppercase px-[9px] py-[3px] rounded-[20px]">High</span></td>
                <td class="px-5 py-3.5 text-[#374151] font-code">0.45–4.85%</td>
                <td class="px-5 py-3.5 text-[#374151]">Emergency fund, general savings</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Checking Account</td>
                <td class="px-5 py-3.5 text-[#374151]"><span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide bg-blue-100 text-blue-700 border border-blue-200">Very High</span></td>
                <td class="px-5 py-3.5 text-[#374151] font-code">0.01–0.50%</td>
                <td class="px-5 py-3.5 text-[#374151]">Daily transactions, bill pay</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">CD (Term Deposit)</td>
                <td class="px-5 py-3.5 text-[#374151]"><span class="inline-block px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide bg-amber-100 text-amber-700 border border-amber-200">Low</span></td>
                <td class="px-5 py-3.5 text-[#374151] font-code">4.50–5.25%</td>
                <td class="px-5 py-3.5 text-[#374151]">Long-term savings, fixed yield</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Money Market Account</td>
                <td class="px-5 py-3.5 text-[#374151]"><span class="bg-[#f2f2fc] text-indigo-600 border border-[rgba(5,150,105,0.2)] text-[9.5px] font-bold tracking-[0.12em] uppercase px-[9px] py-[3px] rounded-[20px]">High</span></td>
                <td class="px-5 py-3.5 text-[#374151] font-code">4.00–4.75%</td>
                <td class="px-5 py-3.5 text-[#374151]">High-yield savings, liquidity</td>
            </tr>
        </tbody>
    </table>
</div>

{{-- Insight box --}}
<div class="my-7 p-6 rounded-2xl border-l-4 border-[#4f46e5]" style="background:linear-gradient(90deg, #4c44d505, #dbd9f870)">
    <div class="flex items-start gap-4">
        <div class="w-8 h-8 rounded-lg bg-[#f2f2fc] flex items-center justify-center shrink-0 mt-0.5">
            <svg class="w-4 h-4 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#065f46] mb-1">Industry Insight — Digital Disruption</p>
            <p class="text-[13.5px] text-[#047857] !mb-0 leading-relaxed">Online banks and high-yield savings platforms have fundamentally repriced the deposit market. With no branch overhead, players like Ally, Marcus, and SoFi can offer rates 10× traditional competitors — forcing incumbent banks to respond or risk accelerating deposit outflows. The deposit competition of 2023–2026 has been the most intense since the 1980s.</p>
        </div>
    </div>
</div>

<h2>Conclusion</h2>
<p>
    Deposit products remain the cornerstone of modern banking. They provide financial security for customers while supplying banks with the capital needed to support lending, economic growth, and financial stability. In the current high-rate environment, consumers who actively shop deposit rates — particularly toward online high-yield savings and short-term CDs — can capture meaningful real returns that dramatically outpace traditional bank offerings.
</p>

@endsection

@section('related')
<a href="{{ route('banking.products.lending') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-emerald-600 mb-2 block">Lending Framework</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">How Banks Structure Lending Products</p>
</a>
<a href="{{ route('banking.products.corporate') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-blue-500 mb-2 block">Corporate Banking</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Corporate Deposit & Cash Management Services</p>
</a>
<a href="{{ route('banking.products.treasury') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea]hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-amber-500 mb-2 block">Treasury Services</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Treasury Management & Liquidity Optimization</p>
</a>
@endsection