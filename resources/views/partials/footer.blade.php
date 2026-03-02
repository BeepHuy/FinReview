<footer class="bg-[#1a1a1a] text-[#f5f0eb]">

    {{-- Main footer --}}
    <div class="max-w-screen-xl mx-auto px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-12">

            {{-- Left: Logo + desc + subscribe --}}
            <div>
                <a href="/" class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 bg-white/10 border border-white/20 rounded-lg flex items-center justify-center text-[13px] font-bold" style="font-family:'Playfair Display',serif">FR</div>
                    <span class="text-[18px] font-bold" style="font-family:'Playfair Display',serif">FinReview</span>
                </a>
                <p class="text-white/50 text-[13.5px] leading-relaxed mb-6 max-w-[240px]">
                    Your trusted source for expert reviews and comparisons across finance, insurance, banking, credit cards, and home improvement.
                </p>
                {{-- Subscribe --}}
                <div class="flex gap-2">
                    <input type="email" placeholder="Your email"
                           class="flex-1 bg-white/8 border border-white/15 rounded-lg px-4 py-2.5 text-[13px] text-white placeholder-white/35 outline-none focus:border-[#c9a96e] transition-colors min-w-0"
                           style="background:rgba(255,255,255,0.06)">
                    <button class="bg-[#c9a96e] hover:bg-[#b8934a] text-[#1a1a1a] font-semibold text-[13px] px-4 py-2.5 rounded-lg transition-colors whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </div>

            {{-- Right: 4 columns --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.13em] text-white/40 mb-4">Insurance</h4>
                    <ul class="space-y-2.5">
                        @foreach(['Life Insurance','Health Insurance','Auto Insurance','Home Insurance','Pet Insurance','Travel Insurance','Business Insurance'] as $l)
                        <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors">{{ $l }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.13em] text-white/40 mb-4">Banking & Cards</h4>
                    <ul class="space-y-2.5">
                        @foreach(['Savings Accounts','Checking Accounts','Online Banks','Travel Rewards Cards','Cash Back Cards','Balance Transfer','Business Cards'] as $l)
                        <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors">{{ $l }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.13em] text-white/40 mb-4">Investing</h4>
                    <ul class="space-y-2.5">
                        @foreach(['Robo-Advisors','Brokerage Accounts','Retirement Plans','Mutual Funds','ETFs','Financial Advisors','Tax Planning'] as $l)
                        <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors">{{ $l }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="text-[11px] font-bold uppercase tracking-[0.13em] text-white/40 mb-4">Company</h4>
                    <ul class="space-y-2.5">
                        @foreach(['About Us','Contact','Search Reviews','Methodology','Editorial Policy','Advertise','Careers'] as $l)
                        <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors">{{ $l }}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-screen-xl mx-auto px-8 py-5 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-[12px] text-white/35">© {{ date('Y') }} FinReview. All rights reserved. Expert reviews you can trust.</p>
            <div class="flex items-center gap-5">
                @foreach(['Terms of Service','Privacy Policy','Cookie Policy','Disclosure','Sitemap'] as $l)
                <a href="#" class="text-[12px] text-white/35 hover:text-white/70 transition-colors">{{ $l }}</a>
                @endforeach
            </div>
        </div>
    </div>

</footer>