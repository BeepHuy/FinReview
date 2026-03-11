@extends('layouts.banking-structure')

@section('title',       'Open Banking 2026 – Express Fintech')
@section('description', 'How open banking APIs, PSD2, and data portability mandates are restructuring financial services competition — a comprehensive analysis of the global open banking landscape in 2026.')
@section('hero_img',    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=1400&q=85&auto=format&fit=crop')
@section('breadcrumb',  'Open Banking')
@section('badge',       'Banking Structure')
@section('hero_title',  'Open Banking')
@section('hero_subtitle','Open banking mandates consumers\' right to share their financial data with third-party providers — transforming banking from a closed, proprietary system into an interconnected ecosystem of specialized financial services built on shared infrastructure.')
@section('meta_date',   'March 2026')
@section('meta_read',   '13 min read')
@section('meta_tags')
    <span class="text-surface-card text-[11px] px-3 py-1.5 rounded-[6px] border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">PSD2</span>
    <span class="text-surface-card text-[11px] px-3 py-1.5 rounded-[6px] border border-[rgba(255,255,255,.15)]" style="background:rgba(255,255,255,.1)">Data Portability</span>
@endsection

@section('page_content')

<div>
    <div class="bs-label">What Is Open Banking?</div>
    <h2 class="bs-h2">Breaking the Data Monopoly of Incumbent Banks</h2>
    <p class="bs-body">
        Open banking is a regulatory and technical framework that requires financial institutions to share customer-permissioned data with third-party providers (TPPs) through secure, standardized APIs. By decoupling financial data from the institution that holds it, open banking breaks the information monopoly that gave incumbent banks structural advantages over competitors for decades.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-6">
        @foreach([
            ['⚖️', 'Regulatory Framework', 'PSD2 (Europe), Open Banking Standard (UK), FDX / CFPB 1033 (U.S.), and CDR (Australia) establish the legal right of consumers to share their banking data.'],
            ['🔌', 'API Infrastructure',   'Standardized REST APIs allow third-party apps to securely read account data and initiate payments on behalf of consenting customers, using OAuth 2.0 and OpenID Connect.'],
            ['🏪', 'Third-Party Providers','AISPs aggregate financial data across banks; PISPs initiate payments directly from accounts, bypassing card network interchange fees and enabling new payment experiences.'],
        ] as [$icon, $title, $body])
        <div class="bs-info-card">
            <div class="text-[22px] mb-3">{{ $icon }}</div>
            <h3>{{ $title }}</h3>
            <p>{{ $body }}</p>
        </div>
        @endforeach
    </div>

    <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=1200&q=85&auto=format&fit=crop" class="bs-img">
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">Global Regulatory Landscape</div>
    <h2 class="bs-h2">PSD2 Pioneered the Model — Now It Is Global</h2>
    <p class="bs-body">
        The EU's PSD2 directive (2018) was the catalyst for global open banking adoption. By legally compelling banks to expose APIs and give customers data portability rights, PSD2 broke open a market that incumbents had no incentive to create voluntarily. The UK implemented a stricter, more prescriptive standard through the Open Banking Implementation Entity (OBIE), widely regarded as the global gold standard.
    </p>
    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1200&q=85&auto=format&fit=crop" class="bs-img">
    <p class="bs-body">
        Australia's Consumer Data Right (CDR) is the most ambitious: it extends the open data mandate beyond banking to energy and telecommunications, aiming to create a consumer-owned data economy across multiple sectors.
    </p>
</div>

<div class="mb-12">
    <div class="bs-label">Framework Comparison</div>
    <h2 class="bs-h2">Open Banking Frameworks by Region — 2026</h2>
    <div class="bs-table">
        <table>
            <thead>
                <tr>
                    <th>Region</th>
                    <th>Framework</th>
                    <th>Mandate Type</th>
                    <th>Launch</th>
                    <th>Maturity</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['United Kingdom', 'OBIE Standard',    'Regulatory Mandate', '2018', 'Advanced',   'col-green'],
                    ['European Union', 'PSD2 / Berlin Grp','Regulatory Mandate', '2019', 'Advanced',   'col-green'],
                    ['Brazil',         'Open Finance BR',  'Regulatory Mandate', '2021', 'Advanced',   'col-green'],
                    ['Australia',      'CDR',              'Regulatory Mandate', '2020', 'Developing', 'col-amber'],
                    ['United States',  'FDX / CFPB 1033', 'Hybrid (2024–26)',   '2024', 'Developing', 'col-amber'],
                    ['India',          'Account Aggregator','Regulatory Mandate','2021', 'Developing', 'col-amber'],
                    ['Singapore',      'MAS API Playbook', 'Voluntary',          '2019', 'Moderate',   'col-amber'],
                ] as [$region, $framework, $mandate, $launch, $maturity, $maturityClass])
                <tr>
                    <td>{{ $region }}</td>
                    <td>{{ $framework }}</td>
                    <td>{{ $mandate }}</td>
                    <td>{{ $launch }}</td>
                    <td class="{{ $maturityClass }}">{{ $maturity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="bs-stats-row grid-cols-2 md:grid-cols-4">
    @foreach([
        ['57+',  'Countries with Open Banking'],
        ['$43B', 'Global OB Revenue 2025'],
        ['1.2B+','UK Monthly API Calls'],
        ['2030', 'Open Finance Horizon'],
    ] as [$val, $label])
    <div>
        <span class="bs-stat-val">{{ $val }}</span>
        <span class="bs-stat-lbl">{{ $label }}</span>
    </div>
    @endforeach
</div>

<div class="bs-divider"></div>

<div class="mb-12">
    <div class="bs-label">Consumer Impact</div>
    <h2 class="bs-h2">What Open Banking Enables for Consumers and Businesses</h2>
    <p class="bs-body">
        Open banking enables a new category of financial services that were structurally impossible when data was locked inside individual bank silos. Aggregation apps like Plaid, TrueLayer, and Yolt allow consumers to see all accounts in one unified view — enabling genuine whole-of-wallet analysis that financial advisors previously could only approximate from statements.
    </p>
    <ul class="flex flex-col gap-2.5 my-5">
        @foreach([
            'Multi-bank account aggregation — unified financial dashboard across all institutions in a single app view',
            'Account-to-account payments bypassing card network interchange fees — cheaper for merchants, faster for consumers',
            'Variable recurring payments (VRPs) enabling automatic savings optimization and intelligent payment timing',
            'Instant income and employment verification for credit applications — replacing payslips with live API reads, cutting mortgage application times from weeks to hours',
            'Personalized product switching — apps that automatically identify better savings rates or cheaper accounts and facilitate the switch',
        ] as $item)
        <li class="bs-list-item">{{ $item }}</li>
        @endforeach
    </ul>

    <div class="bs-highlight">
        <p>
            The strategic risk for incumbent banks is not losing the data — it is losing the customer relationship. When an aggregator app becomes the primary financial interface, the bank risks becoming a utility: a balance sheet and a regulatory license, with no direct customer touchpoint or ownership.
        </p>
    </div>
</div>

<div class="bs-cta">
    <div class="bs-cta-text">
        <p class="bs-cta-eyebrow">Open Banking Tools</p>
        <h3>Are You Getting the Best Rates Across All Your Accounts?</h3>
        <span>Open banking aggregation gives a complete financial picture. Our advisors identify rate gaps, unnecessary fees, and optimization opportunities across all your products.</span>
    </div>
    <a href="{{ route('consultation') }}" class="bs-cta-btn">
        Get Full Review
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
</div>

@endsection

@section('conclusion_title', 'Open Banking Is Reshaping Financial Services Competition')
@section('conclusion_body',  'Open banking represents one of the most significant structural interventions in financial services regulation in modern history. By mandating data portability, regulators have shifted the competitive advantage from data hoarding to service quality — banks that build the best products will win, regardless of which institution holds the underlying accounts.')

@section('related_cards')
    @foreach([
        ['Digital Banking Evolution',    'Neobanks and embedded finance — the commercial ecosystem built on open APIs.',    route('banking.structure.digital-banking')],
        ['Retail vs Commercial Banking', 'How open banking is changing account portability and customer switching costs.',   route('banking.structure.retail-commercial')],
        ['Central Banking Systems',      'How central banks and regulators are shaping the open banking mandate globally.', route('banking.structure.central-banking')],
    ] as [$title, $desc, $href])
    <a href="{{ $href }}" class="bs-related-card">
        <h4>{{ $title }}</h4>
        <p>{{ $desc }}</p>
    </a>
    @endforeach
@endsection