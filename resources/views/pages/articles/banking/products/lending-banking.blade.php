{{-- resources/views/pages/articles/banking/products/lending-banking.blade.php --}}
@extends('layouts.banking-products')

@section('title', 'Lending Framework')
@section('breadcrumb_current', 'Lending Framework')
@section('hero_title', 'Lending Framework')
@section('hero_subtitle', 'A structural analysis of how banks originate, underwrite, price, and manage loans — from consumer credit to syndicated corporate facilities worth billions.')
@section('hero_date', 'March 2026')
@section('hero_read_time', '10 min read')
@section('article_badge', 'Lending Framework')
@section('last_updated', 'March 2026')
@section('nav_lending', 'active')

@section('hero_stats_cards')
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">$12T</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">US bank loans outstanding</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">3.2%</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Average NIM 2026</p>
    </div>
    <div class="bg-surface rounded-xl px-5 py-4 text-center min-w-[130px]">
        <p class="text-[26px] font-bold text-[#0F172A] font-display">1.4%</p>
        <p class="text-[11.5px] text-[#334155] leading-tight mt-1">Non-performing loan rate</p>
    </div>
@endsection

@section('sidebar_stats')
    <div class="space-y-3">
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Prime Rate (2026)</p>
                <p class="text-[16px] font-bold text-[#0a2417]">7.75%</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">30-yr Mortgage Rate</p>
                <p class="text-[16px] font-bold text-[#0a2417]">6.85%</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
            </div>
        </div>
        <div class="prod-card flex items-center justify-between p-3 rounded-xl bg-[#4f46e508] border border-[#e2ede8]">
            <div>
                <p class="text-[10.5px] text-[#9ca3af] font-code">Avg. Personal Loan</p>
                <p class="text-[16px] font-bold text-[#0a2417]">11.5%</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
            </div>
        </div>
    </div>
@endsection

@section('right_panel')
    <div class="bg-white rounded-2xl border border-[#e2ede8] p-5" style="box-shadow:0 2px 14px rgba(10,36,23,0.07)">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-4">Loan Types at a Glance</p>
        <div class="space-y-2.5">
            @foreach([
                ['Consumer', 'Mortgage, auto, personal, student'],
                ['Commercial', 'Term loans, credit lines, SBA'],
                ['Corporate', 'Syndicated, revolving, bridge'],
                ['Specialty', 'Construction, agricultural, marine'],
            ] as [$type, $examples])
            <div class="flex items-start gap-2.5 p-2.5 rounded-lg bg-[#4f46e508]">
                <span class="w-1.5 h-1.5 rounded-full bg-[#4f46e5] mt-1.5 shrink-0"></span>
                <div>
                    <p class="text-[12.5px] font-semibold text-[#0a2417] mb-0">{{ $type }}</p>
                    <p class="text-[12px] text-[#9ca3af]">{{ $examples }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-[#1a1f59] rounded-2xl p-5 text-white">
        <p class="text-[10.5px] font-bold uppercase tracking-[0.14em] text-[#4f46e5] mb-3">Risk Rating Scale</p>
        <div class="space-y-2">
            @foreach([['Pass', 'bg-emerald-500', '85%'], ['Special Mention', 'bg-yellow-400', '9%'], ['Substandard', 'bg-orange-500', '4%'], ['Doubtful/Loss', 'bg-red-500', '2%']] as [$label, $color, $pct])
            <div class="flex items-center gap-3">
                <div class="w-2 h-2 rounded-full {{ $color }} shrink-0"></div>
                <span class="text-[12px] text-white/70 flex-1">{{ $label }}</span>
                <span class="text-[12px] font-code text-emerald-300">{{ $pct }}</span>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('content')

<p class="text-[17px] text-[#0a2417] font-medium leading-relaxed mb-8 pb-6 border-b border-[#f0faf4]">
    Lending is a bank's primary revenue-generating activity. Through the careful underwriting and pricing of credit risk, banks transform deposits into loans — earning a net interest margin that is the cornerstone of their profitability model. The framework governing how banks lend is one of the most consequential structures in modern finance.
</p>

<h2>The Lending Cycle</h2>
<p>
    Every loan begins with origination and ends with either full repayment or resolution. Understanding each stage of this cycle is critical for evaluating bank credit quality and risk management capability.
</p>

<div class="my-7 grid grid-cols-2 gap-4">
    @foreach([
        ['1', 'emerald', 'Origination', 'A borrower applies for credit. The bank collects financial information, employment history, collateral details, and the purpose of the loan.'],
        ['2', 'blue', 'Underwriting', 'Credit analysts evaluate the borrower\'s capacity (income/cash flow), capital (net worth), collateral, conditions (market), and character (credit history) — the 5 C\'s of credit.'],
        ['3', 'amber', 'Pricing & Structuring', 'The loan is priced at a risk-adjusted rate: base rate (SOFR or Prime) + credit spread + origination fees. Terms, covenants, and collateral requirements are structured.'],
        ['4', 'violet', 'Monitoring & Servicing', 'Post-origination, the bank monitors borrower financial health, covenant compliance, and collateral values. Problem loans are escalated for remediation.'],
    ] as [$num, $color, $title, $desc])
    <div class="prod-card p-5 rounded-2xl bg-[#4f46e508] border border-[#e2ede8]">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-8 h-8 rounded-full flex items-center justify-center text-[12px] font-bold text-white
                {{ $color === 'emerald' ? 'bg-emerald-600' : ($color === 'blue' ? 'bg-blue-500' : ($color === 'amber' ? 'bg-amber-500' : 'bg-violet-500')) }}">
                {{ $num }}
            </div>
            <h3 class="!mt-0 !mb-0 text-[13.5px]">{{ $title }}</h3>
        </div>
        <p class="!text-[13px] !mb-0 text-[#6b7280]">{{ $desc }}</p>
    </div>
    @endforeach
</div>

<h2>Loan Pricing: The Net Interest Margin</h2>
<p>
    A bank's lending profitability is captured in the net interest margin (NIM) — the difference between the yield earned on interest-earning assets (primarily loans) and the rate paid on interest-bearing liabilities (primarily deposits). For US commercial banks in 2026, the average NIM sits around 3.2%, though it varies widely by institution type and loan mix.
</p>

<div class="my-7 p-6 rounded-2xl border border-[#e2ede8] bg-[#4f46e508]">
    <p class="text-[11px] font-bold uppercase tracking-[0.13em] text-emerald-700 mb-5">NIM Anatomy — Example Business Loan</p>
    <div class="space-y-2">
        @foreach([
            ['Cost of Funds (Deposit Rate)', '4.50%', 'text-red-600', 'bg-red-50 border-red-100'],
            ['+ Credit Risk Spread', '1.80%', 'text-amber-700', 'bg-amber-50 border-amber-100'],
            ['+ Operational Overhead', '0.60%', 'text-orange-600', 'bg-orange-50 border-orange-100'],
            ['+ Profit Margin Target', '0.40%', 'text-blue-600', 'bg-blue-50 border-blue-100'],
            ['= Loan Interest Rate', '7.30%', 'text-emerald-700 font-bold', 'bg-emerald-50 border-emerald-200'],
        ] as [$label, $rate, $textColor, $bg])
        <div class="flex items-center justify-between px-4 py-3 rounded-xl border {{ $bg }}">
            <span class="text-[13px] text-[#374151]">{{ $label }}</span>
            <span class="font-code text-[14px] font-semibold {{ $textColor }}">{{ $rate }}</span>
        </div>
        @endforeach
    </div>
</div>

<h2>Major Loan Categories</h2>

<div class="my-6 overflow-hidden rounded-2xl border border-[#e2ede8]">
    <table class="w-full border-collapse text-[13.5px]">
        <thead>
            <tr style="background:linear-gradient(140deg,#1b285c,#191656)">
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Category</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Products</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Underwriting Basis</th>
                <th class="text-left px-5 py-4 text-[11px] font-bold uppercase tracking-[0.13em] text-white">Typical Rate</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-[#f0faf4]">
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Consumer</td>
                <td class="px-5 py-3.5 text-[#374151]">Mortgages, auto, personal</td>
                <td class="px-5 py-3.5 text-[#374151]">FICO score, DTI ratio</td>
                <td class="px-5 py-3.5 font-code text-[#374151]">6–22%</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Small Business</td>
                <td class="px-5 py-3.5 text-[#374151]">SBA loans, LOC, equipment</td>
                <td class="px-5 py-3.5 text-[#374151]">Revenue, cash flow, owners</td>
                <td class="px-5 py-3.5 font-code text-[#374151]">7–15%</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Commercial RE</td>
                <td class="px-5 py-3.5 text-[#374151]">Construction, bridge, perm</td>
                <td class="px-5 py-3.5 text-[#374151]">DSCR, LTV, NOI</td>
                <td class="px-5 py-3.5 font-code text-[#374151]">6.5–9%</td>
            </tr>
            <tr class="hover:bg-[#f2f2fc21] transition-colors">
                <td class="px-5 py-3.5 font-semibold text-[#0a2417] bg-[#f2f2fc21]">Corporate</td>
                <td class="px-5 py-3.5 text-[#374151]">Revolvers, term B, syndicated</td>
                <td class="px-5 py-3.5 text-[#374151]">EBITDA, leverage, covenants</td>
                <td class="px-5 py-3.5 font-code text-[#374151]">SOFR+150–450bps</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="my-7 p-6 rounded-2xl border-l-4 border-[#4f46e5]" style="background:linear-gradient(90deg, #4c44d505, #dbd9f870)">
    <div class="flex items-start gap-4">
        <div class="w-8 h-8 rounded-lg bg-[#f2f2fc] flex items-center justify-center shrink-0 mt-0.5">
            <svg class="w-4 h-4 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
        </div>
        <div>
            <p class="text-[13.5px] font-semibold text-[#92400e] mb-1">2026 Credit Environment</p>
            <p class="text-[13.5px] text-[#78350f] !mb-0 leading-relaxed">Higher-for-longer rates have compressed loan demand while increasing credit costs. Banks are tightening underwriting standards — particularly in commercial real estate, where office vacancy rates and declining valuations are creating elevated credit risk that regulators are actively monitoring.</p>
        </div>
    </div>
</div>

<h2>Credit Risk Management</h2>
<p>
    Managing credit risk — the probability that a borrower will fail to repay — is the defining challenge of banking. Banks deploy sophisticated systems to monitor portfolio concentration, segment performance, and early warning indicators of deteriorating borrower health.
</p>
<ul>
    <li><strong>Loan Loss Reserves (CECL)</strong> — Under the Current Expected Credit Loss standard, banks must reserve for lifetime expected losses at origination — a more forward-looking approach than the incurred loss model it replaced.</li>
    <li><strong>Stress Testing</strong> — Large banks run annual Dodd-Frank stress tests modeling severe economic scenarios to validate capital adequacy against loss estimates.</li>
    <li><strong>Portfolio Diversification</strong> — Concentration limits prevent excessive exposure to any single borrower, industry, or geography, reducing systemic portfolio risk.</li>
    <li><strong>Covenants & Collateral</strong> — Financial covenants (leverage ratios, interest coverage) and collateral requirements provide early warning triggers and recovery mechanisms when borrowers deteriorate.</li>
</ul>

@endsection

@section('related')
<a href="{{ route('banking.products.deposit') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-emerald-600 mb-2 block">Deposit Products</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Deposit Products — Funding the Loan Book</p>
</a>
<a href="{{ route('banking.products.corporate') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-blue-500 mb-2 block">Corporate Banking</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Corporate Lending & Syndicated Loans</p>
</a>
<a href="{{ route('banking.products.treasury') }}" class="block bg-white rounded-xl border border-[#e2ede8] p-4 hover:border-[#736cea] hover:shadow-md transition-all">
    <span class="text-[10.5px] font-bold uppercase tracking-[0.12em] text-amber-500 mb-2 block">Treasury Services</span>
    <p class="text-[13.5px] font-semibold text-[#0a2417] leading-snug">Treasury & Liquidity Management</p>
</a>
@endsection