<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Viral Launchpad</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-white:255 255 255;--color-slate-50:248 250 252;--color-slate-100:241 245 249;--color-slate-200:226 232 240;--color-slate-300:203 213 225;--color-slate-400:148 163 184;--color-slate-500:100 116 139;--color-slate-600:71 85 105;--color-slate-700:51 65 85;--color-slate-800:30 41 59;--color-slate-900:15 23 42;--color-slate-950:2 6 23;--color-gray-50:249 250 251;--color-gray-100:243 244 246;--color-gray-200:229 231 235;--color-gray-300:209 213 219;--color-gray-400:156 163 175;--color-gray-500:107 114 128;--color-gray-600:75 85 99;--color-gray-700:55 65 81;--color-gray-800:31 41 55;--color-gray-900:17 24 39;--color-gray-950:3 7 18;--color-zinc-50:250 250 250;--color-zinc-100:244 244 245;--color-zinc-200:228 228 231;--color-zinc-300:212 212 216;--color-zinc-400:161 161 170;--color-zinc-500:113 113 122;--color-zinc-600:82 82 91;--color-zinc-700:63 63 70;--color-zinc-800:39 39 42;--color-zinc-900:24 24 27;--color-zinc-950:9 9 11;--color-neutral-50:250 250 250;--color-neutral-100:245 245 245;--color-neutral-200:229 229 229;--color-neutral-300:212 212 212;--color-neutral-400:163 163 163;--color-neutral-500:115 115 115;--color-neutral-600:82 82 82;--color-neutral-700:64 64 64;--color-neutral-800:38 38 38;--color-neutral-900:23 23 23;--color-neutral-950:10 10 10;--color-stone-50:250 250 249;--color-stone-100:245 245 244;--color-stone-200:231 229 228;--color-stone-300:214 211 209;--color-stone-400:168 162 158;--color-stone-500:120 113 108;--color-stone-600:87 83 78;--color-stone-700:68 64 60;--color-stone-800:41 37 36;--color-stone-900:28 25 23;--color-stone-950:12 10 9;--color-red-50:254 242 242;--color-red-100:254 226 226;--color-red-200:254 202 202;--color-red-300:252 165 165;--color-red-400:248 113 113;--color-red-500:239 68 68;--color-red-600:220 38 38;--color-red-700:185 28 28;--color-red-800:153 27 27;--color-red-900:127 29 29;--color-red-950:69 10 10;--color-orange-50:255 247 237;--color-orange-100:255 237 213;--color-orange-200:254 215 170;--color-orange-300:253 186 116;--color-orange-400:251 146 60;--color-orange-500:249 115 22;--color-orange-600:234 88 12;--color-orange-700:194 65 12;--color-orange-800:154 52 18;--color-orange-900:124 45 18;--color-orange-950:67 20 7;--color-amber-50:255 251 235;--color-amber-100:254 243 199;--color-amber-200:253 230 138;--color-amber-300:252 211 77;--color-amber-400:251 191 36;--color-amber-500:245 158 11;--color-amber-600:217 119 6;--color-amber-700:180 83 9;--color-amber-800:146 64 14;--color-amber-900:120 53 15;--color-amber-950:69 26 3;--color-yellow-50:254 252 232;--color-yellow-100:254 249 195;--color-yellow-200:254 240 138;--color-yellow-300:253 224 71;--color-yellow-400:250 204 21;--color-yellow-500:234 179 8;--color-yellow-600:202 138 4;--color-yellow-700:161 98 7;--color-yellow-800:133 77 14;--color-yellow-900:113 63 18;--color-yellow-950:66 32 6;--color-lime-50:247 254 231;--color-lime-100:236 252 203;--color-lime-200:217 249 157;--color-lime-300:190 242 100;--color-lime-400:163 230 53;--color-lime-500:132 204 22;--color-lime-600:101 163 13;--color-lime-700:77 124 15;--color-lime-800:63 98 18;--color-lime-900:54 83 20;--color-lime-950:26 46 5;--color-green-50:240 253 244;--color-green-100:220 252 231;--color-green-200:187 247 208;--color-green-300:134 239 172;--color-green-400:74 222 128;--color-green-500:34 197 94;--color-green-600:22 163 74;--color-green-700:21 128 61;--color-green-800:22 101 52;--color-green-900:20 83 45;--color-green-950:5 46 22;--color-emerald-50:236 253 245;--color-emerald-100:209 250 229;--color-emerald-200:167 243 208;--color-emerald-300:110 231 183;--color-emerald-400:52 211 153;--color-emerald-500:16 185 129;--color-emerald-600:5 150 105;--color-emerald-700:4 120 87;--color-emerald-800:6 95 70;--color-emerald-900:6 78 59;--color-emerald-950:2 44 34;--color-teal-50:240 253 250;--color-teal-100:204 251 241;--color-teal-200:153 246 228;--color-teal-300:94 234 212;--color-teal-400:45 212 191;--color-teal-500:20 184 166;--color-teal-600:13 148 136;--color-teal-700:15 118 110;--color-teal-800:17 94 89;--color-teal-900:19 78 74;--color-teal-950:4 47 46;--color-cyan-50:236 254 255;--color-cyan-100:207 250 254;--color-cyan-200:165 243 252;--color-cyan-300:103 232 249;--color-cyan-400:34 211 238;--color-cyan-500:6 182 212;--color-cyan-600:8 145 178;--color-cyan-700:14 116 144;--color-cyan-800:21 94 117;--color-cyan-900:22 78 99;--color-cyan-950:8 51 68;--color-sky-50:240 249 255;--color-sky-100:224 242 254;--color-sky-200:186 230 253;--color-sky-300:125 211 252;--color-sky-400:56 189 248;--color-sky-500:14 165 233;--color-sky-600:2 132 199;--color-sky-700:3 105 161;--color-sky-800:7 89 133;--color-sky-900:12 74 110;--color-sky-950:8 47 73;--color-blue-50:239 246 255;--color-blue-100:219 234 254;--color-blue-200:191 219 254;--color-blue-300:147 197 253;--color-blue-400:96 165 250;--color-blue-500:59 130 246;--color-blue-600:37 99 235;--color-blue-700:29 78 216;--color-blue-800:30 64 175;--color-blue-900:30 58 138;--color-blue-950:23 37 84;--color-indigo-50:238 242 255;--color-indigo-100:224 231 255;--color-indigo-200:199 210 254;--color-indigo-300:165 180 252;--color-indigo-400:129 140 248;--color-indigo-500:99 102 241;--color-indigo-600:79 70 229;--color-indigo-700:67 56 202;--color-indigo-800:55 48 163;--color-indigo-900:49 46 129;--color-indigo-950:30 27 75;--color-violet-50:245 243 255;--color-violet-100:237 233 254;--color-violet-200:221 214 254;--color-violet-300:196 181 253;--color-violet-400:167 139 250;--color-violet-500:139 92 246;--color-violet-600:124 58 237;--color-violet-700:109 40 217;--color-violet-800:91 33 182;--color-violet-900:76 29 149;--color-violet-950:46 16 101;--color-purple-50:250 245 255;--color-purple-100:243 232 255;--color-purple-200:233 213 255;--color-purple-300:216 180 254;--color-purple-400:192 132 252;--color-purple-500:168 85 247;--color-purple-600:147 51 234;--color-purple-700:126 34 206;--color-purple-800:107 33 168;--color-purple-900:88 28 135;--color-purple-950:59 7 100;--color-fuchsia-50:253 244 255;--color-fuchsia-100:250 232 255;--color-fuchsia-200:245 208 254;--color-fuchsia-300:240 171 252;--color-fuchsia-400:232 121 249;--color-fuchsia-500:217 70 239;--color-fuchsia-600:192 38 211;--color-fuchsia-700:162 28 175;--color-fuchsia-800:134 25 143;--color-fuchsia-900:112 26 117;--color-fuchsia-950:74 4 78;--color-pink-50:253 242 248;--color-pink-100:252 231 243;--color-pink-200:251 207 232;--color-pink-300:249 168 212;--color-pink-400:244 114 182;--color-pink-500:236 72 153;--color-pink-600:219 39 119;--color-pink-700:190 24 93;--color-pink-800:157 23 77;--color-pink-900:131 24 67;--color-pink-950:80 7 36;--color-rose-50:255 241 242;--color-rose-100:255 228 230;--color-rose-200:254 205 211;--color-rose-300:253 164 175;--color-rose-400:251 113 133;--color-rose-500:244 63 94;--color-rose-600:225 29 72;--color-rose-700:190 18 60;--color-rose-800:159 18 57;--color-rose-900:136 19 55;--color-rose-950:76 5 25}}*,:before,:after{box-sizing:border-box;border:0 solid #e5e7eb}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Instrument Sans,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";scroll-behavior:smooth}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type="button"],[type="reset"],[type="submit"]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type="search"]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role="button"]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,::before,::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / .5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / .5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }
            </style>
        @endif
    </head>
    <body class="bg-[#070707] text-[#F5F3EF] antialiased">
        <div class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-x-0 top-[-10rem] flex justify-center opacity-70 blur-3xl">
                <div class="h-64 w-[28rem] rounded-full bg-gradient-to-br from-[#FF6B4A] via-[#FF9A5C] to-[#FFD56B]"></div>
            </div>
            <div class="pointer-events-none absolute bottom-[-14rem] right-[-6rem] h-[28rem] w-[28rem] rounded-full bg-gradient-to-br from-[#124E66] via-[#1B6A7A] to-[#2AA198] opacity-50 blur-3xl"></div>

            <div class="relative mx-auto flex min-h-screen w-full max-w-6xl flex-col px-6 pb-20 pt-10 sm:px-8 lg:px-10">
                <header>
                    <nav class="flex flex-wrap items-center justify-between gap-6 text-sm font-medium text-white/70">
                        <a href="/" class="flex items-center gap-3 text-white">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#161B22] text-lg font-semibold text-white shadow-[0_10px_30px_rgba(16,17,20,0.45)] ring-1 ring-white/10">VA</span>
                            <div class="flex flex-col">
                                <span class="text-xs font-medium uppercase tracking-[0.6em] text-white/60">Viralapp</span>
                                <span class="text-base font-semibold">Referral Studio</span>
                            </div>
                        </a>

                        @if (Route::has('login'))
                            <div class="flex flex-wrap items-center gap-3">
                                <a href="#product" class="rounded-full px-4 py-2 transition hover:text-white">Product</a>
                                <a href="#solution" class="rounded-full px-4 py-2 transition hover:text-white">Solution</a>
                                <a href="#how-it-works" class="rounded-full px-4 py-2 transition hover:text-white">How it works</a>
                                <a href="#faq" class="rounded-full px-4 py-2 transition hover:text-white">FAQs</a>

                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="inline-flex items-center rounded-full bg-white px-5 py-2 text-sm font-semibold text-[#0D0E10] shadow-[0_10px_30px_rgba(255,255,255,0.12)] transition hover:-translate-y-0.5"
                                    >
                                        Open dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="inline-flex items-center rounded-full bg-white/10 px-5 py-2 text-sm font-semibold text-white transition hover:bg-white/20"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="inline-flex items-center rounded-full bg-[#FF6B4A] px-5 py-2 text-sm font-semibold text-[#0D0E10] shadow-[0_10px_35px_rgba(255,107,74,0.35)] transition hover:-translate-y-0.5 hover:bg-[#FF835C]"
                                        >
                                            Create account
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </nav>
                </header>

                <main class="flex-1 space-y-24 pt-12">
                    <section id="hero" class="grid gap-12 lg:grid-cols-[1.1fr_1fr] lg:items-center">
                        <div class="space-y-7">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">
                                High-converting launch system
                            </span>
                            <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
                                Design referral landing pages that convert like your best closer.
                            </h1>
                            <p class="max-w-xl text-base text-white/70 sm:text-lg">
                                Viral Launchpad blends AI-guided design with referral intelligence so every campaign feels on-brand and obsessively measured. Each advocate receives a unique URL that only increments their count after a conversion on their personal page—no vanity numbers, just verified momentum.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a
                                    href="#product"
                                    class="inline-flex items-center gap-2 rounded-full bg-[#FF6B4A] px-6 py-3 text-sm font-semibold text-[#0D0E10] shadow-[0_15px_40px_rgba(255,107,74,0.35)] transition hover:-translate-y-0.5 hover:bg-[#FF835C]"
                                >
                                    Plan my launch
                                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <a
                                    href="#how-it-works"
                                    class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3 text-sm font-semibold text-white/80 transition hover:border-white/40 hover:text-white"
                                >
                                    See how it works
                                </a>
                            </div>
                            <dl class="grid gap-6 text-sm text-white/60 sm:grid-cols-3">
                                <div>
                                    <dt class="font-medium text-white/60">Avg. conversion lift</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">+38%</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-white/60">Landing pages shipped</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">1.2K+</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-white/60">Launch time</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">72 hours</dd>
                                </div>
                            </dl>
                        </div>
                        <div class="relative">
                            <div class="absolute -inset-x-6 top-8 h-96 rounded-[2.5rem] bg-gradient-to-br from-[#1A2938] via-[#11202B] to-[#0A0E13] opacity-80 blur-3xl"></div>
                            <div class="relative overflow-hidden rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_25px_80px_rgba(9,10,12,0.65)]">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Advocate spotlight</p>
                                        <h3 class="mt-1 text-lg font-semibold text-white">Jordan M. → 3 conversions</h3>
                                    </div>
                                    <span class="rounded-full bg-[#0E131A] px-3 py-1 text-xs font-semibold text-[#61F4DE]">Verified</span>
                                </div>
                                <div class="mt-7 space-y-6">
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                        <div class="flex items-center justify-between text-sm text-white/70">
                                            <span class="font-semibold text-white">Referral URL</span>
                                            <span class="font-mono text-xs text-[#61F4DE]">viral.app/ref/jordan</span>
                                        </div>
                                        <p class="mt-3 text-xs text-white/60">
                                            Counter increases after a visitor converts on Jordan’s dedicated page—no accidental clicks.
                                        </p>
                                    </div>
                                    <div class="space-y-4">
                                        <div class="flex items-center justify-between rounded-2xl bg-gradient-to-r from-[#0F1924] via-[#123146] to-[#163D54] px-5 py-4 text-white">
                                            <div>
                                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/60">Conversion recorded</p>
                                                <p class="mt-1 text-sm text-white/90">Lydia completed onboarding</p>
                                            </div>
                                            <span class="text-3xl font-semibold text-[#61F4DE]">+1</span>
                                        </div>
                                        <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/60">Auto reward</p>
                                            <p class="mt-2 text-sm text-white/80">$20 eGift queued 04:12 after confirmation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="social-proof" class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-[0_20px_60px_rgba(10,11,13,0.45)]">
                        <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">Social proof</p>
                                <p class="mt-3 text-lg font-semibold text-white">Loved by growth teams shipping bold referral drops</p>
                                <div class="mt-3 flex items-center gap-3 text-sm text-white/60">
                                    <span class="flex items-center gap-1 text-[#FFB973]">
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.667l2.317 5.108 5.35.459-4.066 3.74 1.226 5.26L10 13.75l-4.827 2.484 1.226-5.26-4.066-3.74 5.35-.459L10 1.667z"/></svg>
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.667l2.317 5.108 5.35.459-4.066 3.74 1.226 5.26L10 13.75l-4.827 2.484 1.226-5.26-4.066-3.74 5.35-.459L10 1.667z"/></svg>
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.667l2.317 5.108 5.35.459-4.066 3.74 1.226 5.26L10 13.75l-4.827 2.484 1.226-5.26-4.066-3.74 5.35-.459L10 1.667z"/></svg>
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.667l2.317 5.108 5.35.459-4.066 3.74 1.226 5.26L10 13.75l-4.827 2.484 1.226-5.26-4.066-3.74 5.35-.459L10 1.667z"/></svg>
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10 1.667l2.317 5.108 5.35.459-4.066 3.74 1.226 5.26L10 13.75l-4.827 2.484 1.226-5.26-4.066-3.74 5.35-.459L10 1.667z"/></svg>
                                    </span>
                                    <span>4.9/5 from 280 product marketing teams</span>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-4 text-sm font-semibold text-white/60">
                                <span class="rounded-full border border-white/10 px-4 py-2">Figma</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Webflow</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Shopify Plus</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Klaviyo</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Stripe</span>
                            </div>
                        </div>
                    </section>

                    <section id="product" class="grid gap-12 lg:grid-cols-2 lg:items-center">
                        <div class="space-y-6">
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FF6B4A]">Objection handled</p>
                            <h2 class="text-3xl font-semibold text-white sm:text-4xl">Referral programs shouldn’t feel like a black box.</h2>
                            <p class="text-base text-white/70 sm:text-lg">Viral Launchpad keeps attribution honest by tying every share to a verified landing page experience. Advocates see live progress, while you decide exactly which conversion unlocks the reward.</p>
                            <ul class="space-y-4 text-sm text-white/70">
                                <li class="flex gap-3">
                                    <span class="mt-1 h-6 w-6 rounded-full bg-white/10 text-center text-xs font-semibold text-white">1</span>
                                    <div>
                                        <p class="font-semibold text-white">Clean attribution</p>
                                        <p class="mt-1">Unique URLs only increment after the conversion you define—no double counting, no guesswork.</p>
                                    </div>
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-1 h-6 w-6 rounded-full bg-white/10 text-center text-xs font-semibold text-white">2</span>
                                    <div>
                                        <p class="font-semibold text-white">On-brand experiences</p>
                                        <p class="mt-1">Start from your brand kit, then adjust copy, layout, and motion in minutes without engineering.</p>
                                    </div>
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-1 h-6 w-6 rounded-full bg-white/10 text-center text-xs font-semibold text-white">3</span>
                                    <div>
                                        <p class="font-semibold text-white">Automated rewards</p>
                                        <p class="mt-1">Trigger perks immediately after verified conversions so advocates feel the hype right away.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="rounded-[2.5rem] border border-white/10 bg-gradient-to-br from-[#10151B] via-[#141D1F] to-[#090B0F] p-8 shadow-[0_25px_70px_rgba(10,11,13,0.55)]">
                            <div class="grid gap-6 text-sm text-white/70">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FFB973]">Before Viralapp</p>
                                    <p class="mt-2 rounded-2xl bg-white/5 px-5 py-4 text-white/60">Manual spreadsheets, unclear attribution, delays in rewarding advocates.</p>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#61F4DE]">After Viralapp</p>
                                    <div class="mt-2 space-y-4">
                                        <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                            <p class="text-sm font-semibold text-white">Guided page builder</p>
                                            <p class="mt-1 text-xs text-white/60">AI suggests sections, copy, and gradients that mirror your kit.</p>
                                        </div>
                                        <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                            <p class="text-sm font-semibold text-white">Conversion checkpoints</p>
                                            <p class="mt-1 text-xs text-white/60">Counts unlock after signup, purchase, or custom milestones you set.</p>
                                        </div>
                                        <div class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                            <p class="text-sm font-semibold text-white">Instant fulfillment</p>
                                            <p class="mt-1 text-xs text-white/60">Automatically deliver rewards or trigger CRM plays the moment a conversion hits.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="solution" class="space-y-10">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">Solution</p>
                                <h2 class="mt-2 max-w-3xl text-3xl font-semibold text-white sm:text-4xl">Everything you need to spin up a high-performing referral drop in one flow.</h2>
                            </div>
                            <a href="#how-it-works" class="inline-flex items-center gap-2 text-sm font-semibold text-white/70 transition hover:text-white">
                                Explore the workflow
                                <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="grid gap-6 lg:grid-cols-3">
                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.55)]">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FF6B4A] text-[#0D0E10] shadow-[0_12px_30px_rgba(255,107,74,0.35)]">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12H19M12 5L19 12L12 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="mt-6 text-xl font-semibold text-white">Guided hero builder</h3>
                                <p class="mt-3 text-sm text-white/70">Drop in your brand kit and watch layouts, gradients, and typography snap into place instantly.</p>
                            </article>
                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.55)]">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#61F4DE] text-[#05212A] shadow-[0_12px_30px_rgba(97,244,222,0.35)]">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5H19V19H5V5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                        <path d="M9 9H15V15H9V9Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <h3 class="mt-6 text-xl font-semibold text-white">Conversion checkpoints</h3>
                                <p class="mt-3 text-sm text-white/70">Select the exact action that counts as success and we’ll only increment when it happens.</p>
                            </article>
                            <article class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.55)]">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15 text-white shadow-[0_12px_30px_rgba(255,255,255,0.25)]">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 3V21M21 12H3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h3 class="mt-6 text-xl font-semibold text-white">Insights in context</h3>
                                <p class="mt-3 text-sm text-white/70">Spot top advocates, revenue influenced, and campaign velocity without leaving the builder.</p>
                            </article>
                        </div>
                    </section>

                    <section id="stats" class="grid gap-6 rounded-3xl border border-white/10 bg-white/5 p-8 text-sm text-white/70 shadow-[0_20px_60px_rgba(10,11,13,0.45)] sm:grid-cols-3">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Boost</p>
                            <p class="mt-2 text-3xl font-semibold text-white">179% ↑</p>
                            <p class="mt-2">Average lift in referred conversions after relaunching the landing page.</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Time saved</p>
                            <p class="mt-2 text-3xl font-semibold text-white">28 hrs</p>
                            <p class="mt-2">Per campaign reclaimed by automating design, testing, and fulfillment.</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Retention</p>
                            <p class="mt-2 text-3xl font-semibold text-white">92%</p>
                            <p class="mt-2">Advocates who keep sharing after receiving their first automated reward.</p>
                        </div>
                    </section>

                    <section id="benefits" class="grid gap-10 lg:grid-cols-[1fr_1.1fr] lg:items-center">
                        <div class="space-y-6">
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">Benefits</p>
                            <h2 class="text-3xl font-semibold text-white sm:text-4xl">Set up once, then let the referral engine run on autopilot.</h2>
                            <p class="text-base text-white/70">We trim away optional steps so you can focus on storytelling and reward strategy. Viral Launchpad handles the mechanics.</p>
                        </div>
                        <ul class="space-y-5 text-sm text-white/70">
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                <p class="font-semibold text-white">Live status cards</p>
                                <p class="mt-2">Monitor every advocate’s progress with automated fraud prevention baked in.</p>
                            </li>
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                <p class="font-semibold text-white">Dynamic copy blocks</p>
                                <p class="mt-2">Use AI-assisted variants to speak to objectors, buyers, and power users at the same time.</p>
                            </li>
                            <li class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4">
                                <p class="font-semibold text-white">Analytics without extra tools</p>
                                <p class="mt-2">Visualize drop-off, revenue influenced, and average reward delivery from one dashboard.</p>
                            </li>
                        </ul>
                    </section>

                    <section id="how-it-works" class="space-y-10">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">How it works</p>
                                <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">Launch in three guided sprints.</h2>
                            </div>
                            <p class="max-w-md text-sm text-white/70">Every step is documented inside the app with guardrails so your team can iterate without risking the conversion math.</p>
                        </div>
                        <ol class="grid gap-6 lg:grid-cols-3">
                            <li class="rounded-3xl border border-white/10 bg-white/5 p-6">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-sm font-semibold text-white">1</span>
                                <h3 class="mt-4 text-lg font-semibold text-white">Import your kit</h3>
                                <p class="mt-2 text-sm text-white/70">Connect your brand board or upload inspo shots. We translate colors, gradients, and typography automatically.</p>
                            </li>
                            <li class="rounded-3xl border border-white/10 bg-white/5 p-6">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-sm font-semibold text-white">2</span>
                                <h3 class="mt-4 text-lg font-semibold text-white">Define the conversion</h3>
                                <p class="mt-2 text-sm text-white/70">Choose signup, purchase, or a custom milestone—counts only tick up once it’s completed on the unique URL.</p>
                            </li>
                            <li class="rounded-3xl border border-white/10 bg-white/5 p-6">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-sm font-semibold text-white">3</span>
                                <h3 class="mt-4 text-lg font-semibold text-white">Automate fulfillment</h3>
                                <p class="mt-2 text-sm text-white/70">Link Stripe, gift cards, or CRM flows so rewards send instantly and your advocates keep sharing.</p>
                            </li>
                        </ol>
                    </section>

                    <section id="integrations" class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-[0_20px_60px_rgba(10,11,13,0.45)]">
                        <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">Integrations</p>
                                <h2 class="mt-2 text-2xl font-semibold text-white">Plug Viral Launchpad into the stack you already use.</h2>
                                <p class="mt-3 text-sm text-white/70">Sync data with your CRM, payments, and lifecycle marketing tools without custom builds.</p>
                            </div>
                            <div class="grid grid-cols-3 gap-4 text-sm font-semibold text-white/70 sm:grid-cols-4">
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">HubSpot</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Salesforce</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Segment</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Amplitude</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Zapier</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Shopify</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Notion</span>
                                <span class="rounded-xl bg-[#0E131A] px-4 py-3 text-center">Webflow</span>
                            </div>
                        </div>
                    </section>

                    <section id="testimonials" class="space-y-8">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">Testimonials</p>
                            <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">What launch leaders say</h2>
                        </div>
                        <div class="grid gap-6 lg:grid-cols-2">
                            <figure class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.45)]">
                                <blockquote class="text-base text-white/80">“We rebuilt our referral landing experience in a weekend. Every advocate now has a destination that looks like our product marketing site—and only verified conversions hit the leaderboard.”</blockquote>
                                <figcaption class="mt-4 text-sm font-semibold text-white">
                                    Priya Desai, Director of Growth @ Loomly
                                </figcaption>
                            </figure>
                            <figure class="rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.45)]">
                                <blockquote class="text-base text-white/80">“The automation around rewards removed so much manual work. We see exactly which advocates drive revenue, and they get perks minutes after a conversion hits.”</blockquote>
                                <figcaption class="mt-4 text-sm font-semibold text-white">
                                    Marcus Hill, Lifecycle Lead @ Beacon
                                </figcaption>
                            </figure>
                        </div>
                    </section>

                    <section id="faq" class="space-y-10">
                        <div class="grid gap-8 lg:grid-cols-[1fr_1fr]">
                            <div class="space-y-6">
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">FAQ</p>
                                <h2 class="text-3xl font-semibold text-white sm:text-4xl">Answers for fast-moving teams</h2>
                                <p class="max-w-xl text-base text-white/70">Still curious? Here’s how Viral Launchpad keeps your referral engine precise, protected, and on-brand.</p>
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-7 shadow-[0_18px_60px_rgba(10,11,13,0.45)]">
                                    <h3 class="text-lg font-semibold text-white">Need a live walkthrough?</h3>
                                    <p class="mt-3 text-sm text-white/70">Book a 20-minute session with our strategists to tailor the landing structure to your campaign.</p>
                                    <a href="mailto:hello@viral.app" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#FFB973] transition hover:text-[#FFD56B]">
                                        hello@viral.app
                                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                        <span class="text-base font-semibold text-white">How do unique referral URLs update counts?</span>
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-4 text-sm text-white/70">Every advocate has a dedicated landing experience. We only increment their total after your conversion event fires on that page, preventing accidental or duplicate credit.</p>
                                </details>
                                <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                        <span class="text-base font-semibold text-white">Can I customize the layout beyond the defaults?</span>
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-4 text-sm text-white/70">Yes—swap sections, update copy, and layer motion assets while keeping accessibility and conversion best practices intact.</p>
                                </details>
                                <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                        <span class="text-base font-semibold text-white">What about fraud or self-referrals?</span>
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-4 text-sm text-white/70">We fingerprint referral traffic, block risky submissions, and require conversions to be completed on the advocate’s URL before approving rewards.</p>
                                </details>
                                <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                        <span class="text-base font-semibold text-white">Do we need engineering resources?</span>
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-4 text-sm text-white/70">Launch without code. When you’re ready for deeper integrations, developers can extend the experience through our API.</p>
                                </details>
                            </div>
                        </div>
                    </section>
                </main>

                <footer class="mt-24 rounded-3xl border border-white/10 bg-gradient-to-br from-[#10151B] via-[#111922] to-[#090B0F] p-10 text-sm text-white/60">
                    <div class="flex flex-col gap-8 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-white/40">Call to value</p>
                            <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">Spin up your next viral launch in days, not months.</h2>
                            <p class="mt-3 max-w-xl text-sm text-white/70">Give every advocate a landing page worth sharing and reward them the moment conversions hit.</p>
                        </div>
                        <a href="mailto:hello@viral.app" class="inline-flex items-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-semibold text-[#0D0E10] shadow-[0_15px_45px_rgba(255,255,255,0.25)] transition hover:-translate-y-0.5">
                            Talk to a strategist
                            <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="mt-10 grid gap-6 text-xs text-white/50 sm:grid-cols-2">
                        <p>© {{ date('Y') }} Viralapp. Crafted for teams ready to ship legendary referral drops.</p>
                        <div class="flex flex-wrap items-center gap-4">
                            <a href="#product" class="hover:text-white">Product</a>
                            <a href="#solution" class="hover:text-white">Solution</a>
                            <a href="#how-it-works" class="hover:text-white">How it works</a>
                            <a href="#faq" class="hover:text-white">Support</a>
                            <a href="mailto:legal@viral.app" class="hover:text-white">Legal</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
