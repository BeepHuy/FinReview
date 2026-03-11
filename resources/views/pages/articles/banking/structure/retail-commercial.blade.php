@extends('layouts.banking-structure')

@section('title',       'Retail vs Commercial Banking 2026 – Express Fintech')
@section('description', 'Understanding the structural differences between retail and commercial banking — products, customers, risk profiles, and competitive dynamics in 2026.')
@section('hero_img',    'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1400&q=85&auto=format&fit=crop')
@section('breadcrumb',  'Retail vs Commercial Banking')
@section('badge',       'Banking Structure')
@section('hero_title',  'Retail vs Commercial Banking')
@section('hero_subtitle','Understanding the difference between retail banking and commercial banking is essential for anyone navigating the modern financial system. While retail banking focuses on individuals and everyday financial services, commercial banking provides capital and financial tools for businesses.')
@section('meta_tags')
    <span class="text-surface-card text-[11px] px-3 py-1.5 rounded-[6px] border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Retail Banking</span>
    <span class="text-surface-card text-[11px] px-3 py-1.5 rounded-[6px] border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Commercial Banking</span>
@endsection

@section('page_content')

<div>
    <div class="bs-label">What Is Retail Banking?</div>
    <h2 class="bs-h2">Serving Individuals and Households</h2>
    <p class="bs-body">
        Retail banking is the most visible segment of the banking industry — it serves individual consumers and households with standardized financial products. Every checking account, savings deposit, personal loan, and credit card you hold is a retail banking product. The model runs on volume: millions of small accounts, thin per-account margins, and efficiency gains from automation and digital channels.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-6">
        @foreach([
            ['🏦', 'Personal Accounts',  'Savings accounts, checking accounts, and personal financial management services designed for everyday consumer use.'],
            ['💳', 'Consumer Credit',    'Credit cards, personal loans, and mortgages — assessed using credit bureau data and automated scoring models.'],
            ['📱', 'Digital Banking',    'Mobile apps and online platforms allowing customers to manage finances anywhere — handling over 80% of retail transactions.'],
        ] as [$icon, $title, $body])
        <div class="bs-info-card">
            <div class="text-[22px] mb-3">{{ $icon }}</div>
            <h3>{{ $title }}</h3>
            <p>{{ $body }}</p>
        </div>
        @endforeach
    </div>
    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=1200&q=85&auto=format&fit=crop" class="bs-img">
    <p class="bs-body">
        Retail banking enables people to save money, access loans, and perform everyday financial transactions securely. Banks generate revenue through net interest margin (NIM) on loans and deposits, card interchange fees, and a growing range of non-interest fee income.
    </p>
    <p class="bs-body">
        Digital transformation has restructured the retail banking cost model. Banks that built mobile-first operations achieve cost-to-serve of $15–$20 per customer annually, compared to $250–$400 for traditional branch-heavy models. This cost gap is the primary driver behind neobank market entry and incumbent branch network reduction.
    </p>
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">What Is Commercial Banking?</div>
    <h2 class="bs-h2">Financing Business Growth and Corporate Operations</h2>
    <p class="bs-body">
        Commercial banking focuses on providing financial services for businesses and corporations. These institutions help companies manage cash flow, finance growth, and facilitate large financial transactions. Unlike retail banking's standardized catalogue, commercial banking is a relationship business — dedicated managers coordinate complex, customized solutions across lending, treasury, FX, and payments.
    </p>
    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1200&q=85&auto=format&fit=crop" class="bs-img">

    <ul class="flex flex-col gap-2.5 my-5">
        @foreach([
            'Business loans and revolving credit lines for working capital and term financing',
            'Corporate banking services and dedicated relationship management',
            'Treasury management — cash positioning, liquidity, and sweep accounts',
            'Trade financing — letters of credit, documentary collections, supply chain finance',
            'Merchant payment solutions and acquiring services',
            'Foreign exchange and interest rate hedging products',
        ] as $item)
        <li class="bs-list-item">{{ $item }}</li>
        @endforeach
    </ul>
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">Key Differences</div>
    <h2 class="bs-h2">Retail vs Commercial Banking — Structural Comparison</h2>
    <div class="bs-table">
        <table>
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Retail Banking</th>
                    <th>Commercial Banking</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['Customers',       'Individuals & households',         'Businesses, corporates, institutions'],
                    ['Loan Size',       'Small to medium ($500–$250K)',     'Large scale ($1M–$500M+)'],
                    ['Products',        'Personal accounts, credit cards',  'Corporate loans, treasury services'],
                    ['Relationship',    'Standardized, self-serve',         'Customized financial solutions'],
                    ['Risk Assessment', 'Credit scoring models',            'Credit analysis + RAROC framework'],
                    ['Revenue Model',   'NIM + fees + interchange',         'NIM + fees + FX + advisory'],
                    ['Margin Profile',  '1.8–3.2% NIM, high volume',       '2.5–4.5% NIM, concentrated book'],
                ] as [$feature, $retail, $commercial])
                <tr>
                    <td>{{ $feature }}</td>
                    <td>{{ $retail }}</td>
                    <td>{{ $commercial }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="bs-stats-row grid-cols-2 md:grid-cols-4">
    @foreach([
        ['$23.8T', 'Total U.S. Bank Assets'],
        ['2.8%',   'Avg Retail NIM 2025'],
        ['$2.4M',  'Avg Commercial Loan'],
        ['82%',    'Mobile Transaction Share'],
    ] as [$val, $label])
    <div>
        <span class="bs-stat-val">{{ $val }}</span>
        <span class="bs-stat-lbl">{{ $label }}</span>
    </div>
    @endforeach
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">The Future of Banking</div>
    <h2 class="bs-h2">Convergence, Competition, and the Digital Shift</h2>
    <div class="bs-highlight">
        <p>
            Digital transformation is rapidly reshaping both segments. Fintech companies, mobile banking apps, artificial intelligence, and embedded finance platforms are changing how both consumers and businesses interact with financial institutions — threatening retail margins while accelerating product commoditization in commercial banking.
        </p>
    </div>
    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1200&q=85&auto=format&fit=crop" class="bs-img">
    <p class="bs-body">
        Universal banks — JPMorgan Chase, Bank of America, HSBC — serve both retail and commercial clients under one roof, leveraging shared infrastructure and cross-segment data advantages. This creates powerful network effects but increasing regulatory complexity as supervisors scrutinize systemic risk concentration.
    </p>
    <p class="bs-body">
        The strategic question for traditional banks is which segments they can defend profitably as fintech competitors expand their product suites. The window for incumbents to build digital moats is narrowing.
    </p>
</div>

<div class="bs-cta">
    <div class="bs-cta-text">
        <p class="bs-cta-eyebrow">Free Banking Review</p>
        <h3>Not Sure Which Products Are Right for You?</h3>
        <span>Our analysts compare retail and business banking options across 25+ institutions — matching the right account structure for your situation.</span>
    </div>
    <a href="{{ route('consultation') }}" class="bs-cta-btn">
        Get Free Review
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
</div>

@endsection

@section('conclusion_title', 'Retail and Commercial Banking — Two Pillars of the Financial System')
@section('conclusion_body',  'Retail and commercial banking together form the backbone of the global financial system. While retail banking supports individuals and households through standardized, high-volume products, commercial banking drives business growth through customized capital solutions and relationship-driven service.')

@section('related_cards')
    @foreach([
        ['Central Banking Systems',   'How central banks set monetary policy and regulate commercial banks.',          route('banking.structure.central-banking')],
        ['Digital Banking Evolution', 'From branch-first to mobile-first — the structural shift in banking delivery.', route('banking.structure.digital-banking')],
        ['Open Banking',              'API-driven data sharing transforming the competitive dynamics of banking.',      route('banking.structure.open-banking')],
    ] as [$title, $desc, $href])
    <a href="{{ $href }}" class="bs-related-card">
        <h4>{{ $title }}</h4>
        <p>{{ $desc }}</p>
    </a>
    @endforeach
@endsection