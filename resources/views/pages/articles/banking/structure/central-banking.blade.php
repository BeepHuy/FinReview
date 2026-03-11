@extends('layouts.banking-structure')

@section('title',       'Central Banking Systems 2026 – Express Fintech')
@section('description', 'How central banks set monetary policy, regulate the financial system, and act as lenders of last resort — analysis of the Fed, ECB, and global central banking in 2026.')
@section('hero_img',    'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=1400&q=85&auto=format&fit=crop')
@section('breadcrumb',  'Central Banking Systems')
@section('badge',       'Banking Structure')
@section('hero_title',  'Central Banking Systems')
@section('hero_subtitle','Central banks are the cornerstone of the modern financial system — setting interest rates, regulating commercial banks, managing currency supply, and acting as lenders of last resort when private markets fail.')
@section('meta_date',   'March 2026')
@section('meta_read',   '15 min read')
@section('meta_tags')
    <span class="text-surface-card text-[11px] px-3 py-1.5 rounded-[6px] border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Monetary Policy</span>
    <span class="text-surface-card text-[11px] px-3 py-1.5 rounded-[6px] border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Financial Regulation</span>
@endsection

@section('page_content')
<div>
    <div class="bs-label">What Is a Central Bank?</div>
    <h2 class="bs-h2">The Apex of the Financial System</h2>
    <p class="bs-body">
        A central bank is a national financial institution that manages a country's money supply, sets benchmark interest rates, and oversees the stability of the broader banking system. Unlike commercial banks that serve retail and corporate clients, central banks serve governments and the financial system itself — their customers are the banking sector and the macroeconomy.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-6">
        @foreach([
            ['🎯', 'Price Stability',    'Central banks target 2% inflation in most developed markets, using interest rate policy, QE, and forward guidance to anchor expectations across the economic cycle.'],
            ['💼', 'Full Employment',    'The U.S. Federal Reserve is unusual in its explicit employment mandate. Most central banks consider employment indirectly through their growth and inflation objectives.'],
            ['🏛️', 'Financial Stability', 'Post-2008, central banks dramatically expanded their stability roles — stress testing banks, macroprudential oversight, and acting as buyers of last resort during dislocations.'],
        ] as [$icon, $title, $body])
        <div class="bs-info-card">
            <div class="text-[22px] mb-3">{{ $icon }}</div>
            <h3>{{ $title }}</h3>
            <p>{{ $body }}</p>
        </div>
        @endforeach
    </div>

    <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?w=1200&q=85&auto=format&fit=crop" alt="Central bank monetary policy" class="bs-img">
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">Policy Toolkit</div>
    <h2 class="bs-h2">Four Tools of Monetary Policy</h2>

    <p class="bs-body">
        Central banks deploy a hierarchy of tools depending on economic conditions. Conventional tools — primarily interest rate setting — are the first line of response. When conventional tools are exhausted at the zero lower bound, unconventional tools including quantitative easing and forward guidance become the primary mechanism.
    </p>
    <ul class="flex flex-col gap-2.5 my-5">
        @foreach([
            'Policy Rate (Federal Funds Rate, ECB Deposit Rate) — the primary lever for conventional monetary policy and the benchmark for all short-term lending in the economy',
            'Reserve Requirements — minimum reserves commercial banks must hold at the central bank, controlling broad money creation capacity',
            'Open Market Operations — buying or selling government securities to inject or withdraw liquidity from the banking system daily',
            'Quantitative Easing (QE) — large-scale asset purchases of government and sometimes corporate bonds to lower long-term yields when policy rates are near zero',
            'Forward Guidance — communication strategy to shape market expectations about the future path of policy rates, influencing long-term rates without asset purchases',
            'Discount Window — emergency lending facility for solvent but temporarily illiquid banks, carrying a penalty rate per Bagehot\'s principle',
        ] as $item)
        <li class="bs-list-item">{{ $item }}</li>
        @endforeach
    </ul>
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">Global Landscape</div>
    <h2 class="bs-h2">The Big Four: Fed, ECB, BoJ, PBoC</h2>

    <p class="bs-body">
        Four central banks dominate global monetary conditions. The Federal Reserve sets the benchmark for dollar-denominated finance globally — when the Fed moves rates, every central bank with dollar-pegged currency or USD-denominated debt faces transmitted pressure. This "dollar dominance" dynamic is one of the most consequential structural features of the international monetary system.
    </p>
    <img src="https://images.unsplash.com/photo-1549421263-5ec394a5ad4c?w=1200&q=85&auto=format&fit=crop" alt="Major central banks" class="bs-img">

    <p class="bs-body">
        The Bank of Japan pioneered negative interest rate policy (NIRP) and yield curve control (YCC). The People's Bank of China operates with a unique dual mandate: supporting the Communist Party's economic targets while managing financial stability in the world's second-largest economy.
    </p>
</div>

<div class="mb-12">
    <div class="bs-label">Comparative Analysis</div>
    <h2 class="bs-h2">Major Central Banks — 2026 Policy Snapshot</h2>

    <div class="bs-table">
        <table>
            <thead>
                <tr>
                    <th>Central Bank</th>
                    <th>Policy Rate</th>
                    <th>Inflation Target</th>
                    <th>Balance Sheet</th>
                    <th>Primary Mandate</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['Federal Reserve',  '4.25–4.50%', '2.0% PCE',  '$7.1T', 'Dual: inflation + employment', 'col-amber'],
                    ['European CB',      '2.50%',      '2.0% HICP', '€6.4T', 'Price stability',              'col-green'],
                    ['Bank of Japan',    '0.50%',      '2.0% CPI',  '¥745T', 'Price stability + growth',     'col-green'],
                    ['Bank of England',  '4.50%',      '2.0% CPI',  '£890B', 'Price stability',              'col-amber'],
                    ['PBoC (China)',     '3.10%',      '3.0% CPI',  '¥44T',  'Growth + stability',           'col-green'],
                ] as [$bank, $rate, $target, $sheet, $mandate, $rateClass])
                <tr>
                    <td>{{ $bank }}</td>
                    <td class="{{ $rateClass }}">{{ $rate }}</td>
                    <td>{{ $target }}</td>
                    <td class="col-accent">{{ $sheet }}</td>
                    <td>{{ $mandate }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="bs-stats-row grid-cols-2 md:grid-cols-4">
    @foreach([
        ['$30T+', 'G7 Central Bank Balance Sheets'],
        ['2.0%',  'Common Inflation Target'],
        ['148',   'Countries with Central Banks'],
        ['2022',  'Year Global Hiking Began'],
    ] as [$val, $label])
    <div>
        <span class="bs-stat-val">{{ $val }}</span>
        <span class="bs-stat-lbl">{{ $label }}</span>
    </div>
    @endforeach
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">Crisis Management</div>
    <h2 class="bs-h2">Lender of Last Resort</h2>

    <div class="bs-highlight">
        <p>
            Walter Bagehot's 1873 principle — "lend freely at a penalty rate against good collateral" — remains the foundation of central bank crisis management. In 2008 and 2020, central banks dramatically expanded this mandate: purchasing corporate bonds, supporting money markets, and providing unlimited liquidity commitments to prevent systemic collapse.
        </p>
    </div>

    <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?w=1200&q=85&auto=format&fit=crop" alt="Central bank crisis response" class="bs-img">

    <p class="bs-body">
        The Fed's 2022–2025 quantitative tightening (QT) cycle — reducing its balance sheet from $9T toward $7T — is the largest attempted normalization in history. Market participants continue to debate how far QT can proceed before liquidity conditions tighten sufficiently to impair critical markets like Treasury repo.
    </p>
</div>

<div class="bs-cta">
    <div class="bs-cta-text">
        <p class="bs-cta-eyebrow">Macro Analysis</p>
        <h3>How Does the Fed's Rate Policy Affect Your Finances?</h3>
        <span>Every Fed rate move transmits directly into mortgage rates, savings yields, credit card APRs, and investment valuations. Our analysts explain what the current cycle means for you.</span>
    </div>
    <a href="{{ route('consultation') }}" class="bs-cta-btn">
        Get Rate Analysis
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
</div>

@endsection

@section('conclusion_title', 'Central Banks as the Backbone of Modern Finance')
@section('conclusion_body',  'Central banking systems are not a background mechanism — they are the active force shaping interest rates, credit availability, currency values, and financial stability globally. Understanding how the Fed, ECB, BoJ, and PBoC operate, what their mandates require, and what tools they deploy is foundational knowledge for any serious investor, borrower, or financial professional.')

@section('related_cards')
    @foreach([
        ['Retail vs Commercial Banking', 'How central bank policy transmits into commercial bank lending and deposit pricing.', route('banking.structure.retail-commercial')],
        ['Digital Banking Evolution',    'Central bank digital currencies (CBDCs) and the future of money.',                   route('banking.structure.digital-banking')],
        ['Open Banking',                 'How central banks and regulators are shaping the open banking mandate globally.',    route('banking.structure.open-banking')],
    ] as [$title, $desc, $href])
    <a href="{{ $href }}" class="bs-related-card">
        <h4>{{ $title }}</h4>
        <p>{{ $desc }}</p>
    </a>
    @endforeach
@endsection