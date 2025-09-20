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
                    <section id="hero" class="grid gap-12 lg:grid-cols-[1.05fr_1fr] lg:items-center">
                        <div class="space-y-7">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">
                                Launch-ready referral hub
                            </span>
                            <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
                                Ship a single referral page that feels handcrafted and tracks every win.
                            </h1>
                            <p class="max-w-xl text-base text-white/70 sm:text-lg">
                                Viral Launchpad turns your brand kit and campaign copy into a polished landing experience. Advocates share a unique URL, and their count only increases once someone converts on that page—zero fluff, no accidental credit.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a
                                    href="#product"
                                    class="inline-flex items-center gap-2 rounded-full bg-[#FF6B4A] px-6 py-3 text-sm font-semibold text-[#0D0E10] shadow-[0_15px_40px_rgba(255,107,74,0.35)] transition hover:-translate-y-0.5 hover:bg-[#FF835C]"
                                >
                                    Build my page
                                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <a
                                    href="#how-it-works"
                                    class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3 text-sm font-semibold text-white/80 transition hover:border-white/40 hover:text-white"
                                >
                                    See the workflow
                                </a>
                            </div>
                            <dl class="grid gap-6 text-sm text-white/60 sm:grid-cols-3">
                                <div>
                                    <dt class="font-medium text-white/60">Campaigns launched</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">1.2K+</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-white/60">Average lift</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">+38%</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-white/60">Time to ship</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">72 hrs</dd>


            <div class="relative mx-auto flex min-h-screen w-full max-w-6xl flex-col px-6 pb-16 pt-10 sm:px-8 lg:px-10">
                <header class="flex items-center justify-between gap-6 pb-12">
                    <a href="/" class="flex items-center gap-3">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#161B22] text-lg font-semibold text-white shadow-[0_10px_30px_rgba(16,17,20,0.45)] ring-1 ring-white/10">VA</span>
                        <div class="flex flex-col">
                            <span class="text-xs font-medium uppercase tracking-[0.6em] text-white/60">Viralapp</span>
                            <span class="text-base font-semibold text-white">Referral Studio</span>
                        </div>
                    </a>

                    @if (Route::has('login'))
                        <nav class="flex items-center gap-3 text-sm font-medium">
                            <a href="#features" class="hidden rounded-full px-4 py-2 text-white/70 transition hover:text-white sm:inline-flex">Features</a>
                            <a href="#playbook" class="hidden rounded-full px-4 py-2 text-white/70 transition hover:text-white sm:inline-flex">Playbook</a>
                            <a href="#faq" class="hidden rounded-full px-4 py-2 text-white/70 transition hover:text-white sm:inline-flex">FAQs</a>

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
                        </nav>
                    @endif
                </header>

                <main class="flex-1 space-y-24 pb-10">
                    <section class="grid gap-12 lg:grid-cols-[1.15fr_1fr] lg:items-center">
                        <div>
                            <p class="mb-4 inline-flex items-center gap-2 rounded-full bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">
                                Built for bold launches
                            </p>
                            <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
                                Transform your biggest fans into your sharpest growth channel.
                            </h1>
                            <p class="mt-6 max-w-xl text-base text-white/70 sm:text-lg">
                                Viral Launchpad pairs daring creative with smart referral automation so you can launch campaigns that feel on-brand, rewarding, and relentlessly trackable. Share a unique referral URL with every advocate—counts only climb when their invitees convert on their dedicated page.
                            </p>
                            <div class="mt-8 flex flex-wrap gap-4">
                                <a
                                    href="#playbook"
                                    class="inline-flex items-center gap-2 rounded-full bg-[#FF6B4A] px-6 py-3 text-sm font-semibold text-[#0D0E10] shadow-[0_15px_40px_rgba(255,107,74,0.35)] transition hover:-translate-y-0.5 hover:bg-[#FF835C]"
                                >
                                    Start your campaign
                                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <a
                                    href="#features"
                                    class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3 text-sm font-semibold text-white/80 transition hover:border-white/40 hover:text-white"
                                >
                                    See the features
                                </a>
                            </div>
                            <dl class="mt-10 grid gap-6 text-sm text-white/60 sm:grid-cols-3">
                                <div>
                                    <dt class="font-medium text-white/60">Avg. conversion lift</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">+38%</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-white/60">Launch-ready in</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">72 hours</dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-white/60">Integrations</dt>
                                    <dd class="mt-1 text-2xl font-semibold text-white">20+ stacks</dd>

                                </div>
                            </dl>
                        </div>
                        <div class="relative">

                            <div class="absolute -inset-x-10 top-10 h-96 rounded-[2.75rem] bg-gradient-to-br from-[#1F2F3F] via-[#13202D] to-[#0A1017] opacity-80 blur-3xl"></div>
                            <div class="relative overflow-hidden rounded-[2.75rem] border border-white/10 bg-white/5 p-8 shadow-[0_30px_80px_rgba(6,7,9,0.65)]">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Live referral snapshot</p>
                                        <h3 class="mt-1 text-lg font-semibold text-white">Jordan M. • 3 verified conversions</h3>
                                    </div>
                                    <span class="rounded-full bg-[#0F141B] px-3 py-1 text-xs font-semibold text-[#61F4DE]">Synced</span>
                                </div>
                                <div class="mt-7 space-y-6 text-sm text-white/70">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Referral link</p>
                                        <div class="mt-2 flex items-center justify-between rounded-2xl border border-white/10 bg-[#0E131A] px-5 py-4 text-white">
                                            <span class="font-mono text-xs text-[#61F4DE]">viral.app/ref/jordan</span>
                                            <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70">Copy</span>
                                        </div>
                                        <p class="mt-3 text-xs text-white/60">Count jumps only when this page records your chosen conversion event.</p>
                                    </div>
                                    <div class="space-y-5">
                                        <div class="relative pl-8">
                                            <span class="absolute left-0 top-2 flex h-3 w-3 items-center justify-center rounded-full bg-[#61F4DE]"></span>
                                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/60">Latest conversion</p>
                                            <p class="mt-1 text-sm text-white/90">Lydia completed onboarding • +1 reward</p>
                                            <p class="mt-1 text-xs text-white/60">Auto-triggered $20 eGift 04:12 post-confirmation.</p>
                                        </div>
                                        <div class="relative pl-8">
                                            <span class="absolute left-[0.35rem] top-0 h-full w-px bg-white/10"></span>
                                            <div class="relative">
                                                <span class="absolute -left-2 top-2 flex h-2 w-2 items-center justify-center rounded-full bg-white/30"></span>
                                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/60">Pipeline</p>
                                                <p class="mt-1 text-sm text-white/80">2 prospects viewing the referral page now</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="product" class="grid gap-12 rounded-[2.75rem] border border-white/10 bg-white/5 p-10 shadow-[0_22px_70px_rgba(8,9,11,0.55)] lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                        <div class="space-y-6">
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">Product walkthrough</p>
                            <h2 class="text-3xl font-semibold text-white sm:text-4xl">Start from the brand kit, end with a streamlined launch page.</h2>
                            <p class="text-base text-white/70 sm:text-lg">We reference your identity boards and restructure copy so the layout mirrors the creative direction from your inspo images—without stacking optional modules that slow decisions.</p>
                            <ul class="space-y-4 text-sm text-white/70">
                                <li class="flex gap-3">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 text-xs font-semibold text-white">1</span>
                                    <div>
                                        <p class="font-semibold text-white">Essential sections only</p>
                                        <p class="mt-1">Hero, proof, workflow, and CTA blocks land exactly where the infographic recommends—no clutter tiles.</p>
                                    </div>
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 text-xs font-semibold text-white">2</span>
                                    <div>
                                        <p class="font-semibold text-white">Reference-driven styling</p>
                                        <p class="mt-1">Gradient lighting, typography, and spacing follow the provided mood board for immediate visual consistency.</p>
                                    </div>
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 text-xs font-semibold text-white">3</span>
                                    <div>
                                        <p class="font-semibold text-white">Verified attribution</p>
                                        <p class="mt-1">Each advocate’s URL ties to a dedicated page, and we only increment once the conversion milestone fires.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-br from-[#13212F] via-[#152836] to-[#0A1118] opacity-70 blur-2xl"></div>
                            <div class="relative overflow-hidden rounded-[2.5rem] border border-white/10 bg-[#0D131B]/60 p-8">
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-white/50">Layout preview</p>
                                <div class="mt-6 space-y-4 text-sm text-white/70">
                                    <p class="text-white">Hero → Proof strip → How-it-works timeline → Closing CTA</p>
                                    <p>Automatically adapts to desktop and mobile with your color palette applied.</p>
                                    <p class="text-white/80">Optional cards stay hidden until you toggle them on, keeping the default experience focused.</p>

                            <div class="absolute inset-x-6 top-6 h-[420px] rounded-3xl bg-gradient-to-br from-[#1B2A3A] via-[#111923] to-[#0B0F14] opacity-90 blur-2xl"></div>
                            <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-[0_25px_80px_rgba(9,10,12,0.65)]">
                                <div class="flex items-center justify-between border-b border-white/10 px-6 py-5">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.4em] text-white/50">Live campaign</p>
                                        <h2 class="mt-1 text-lg font-semibold text-white">Aurora Drop launch</h2>
                                    </div>
                                    <span class="rounded-full bg-[#0E131A] px-3 py-1 text-xs font-semibold text-[#61F4DE]">On fire</span>
                                </div>
                                <div class="space-y-6 px-6 py-7">
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                        <div class="flex items-start justify-between">
                                            <div>
                                                <p class="text-xs font-semibold uppercase tracking-[0.35em] text-[#FFB973]">Referral link</p>
                                                <p class="mt-2 font-mono text-sm text-white/90">https://viral.app/ref/jordan</p>
                                            </div>
                                            <button type="button" class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/80 transition hover:bg-white/20">Copy</button>
                                        </div>
                                        <p class="mt-3 text-xs text-white/60">
                                            We only increase Jordan's referral count when invites convert on this personalized destination.
                                        </p>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2">
                                        <div class="rounded-2xl border border-white/5 bg-gradient-to-br from-[#11161F] to-[#1D2D3F] p-5">
                                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Referrals this week</p>
                                            <p class="mt-3 text-4xl font-semibold text-white">32</p>
                                            <p class="mt-2 text-xs text-[#61F4DE]">+12 vs last week</p>
                                        </div>
                                        <div class="rounded-2xl border border-white/5 bg-gradient-to-br from-[#1E2330] to-[#2C2E38] p-5">
                                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Reward claims</p>
                                            <p class="mt-3 text-4xl font-semibold text-white">18</p>
                                            <p class="mt-2 text-xs text-[#FFB973]">Triggered automatically</p>
                                        </div>
                                    </div>
                                    <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                        <p class="text-xs font-semibold uppercase tracking-[0.35em] text-white/50">Momentum</p>
                                        <div class="mt-4 flex items-center gap-3">
                                            <div class="flex -space-x-2 overflow-hidden">
                                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-[#FF6B4A] text-sm font-semibold text-[#0D0E10] shadow-[0_10px_30px_rgba(255,107,74,0.45)]">AK</span>
                                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-[#61F4DE] text-sm font-semibold text-[#05212A] shadow-[0_10px_30px_rgba(97,244,222,0.45)]">JD</span>
                                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/15 text-sm font-semibold text-white">+7</span>
                                            </div>
                                            <p class="text-xs leading-relaxed text-white/60">
                                                Advocates are bringing in 3.2 new sign-ups on average. Nudges and reminders keep their streak alive.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>


                    <section id="solution" class="space-y-10">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">Solution</p>
                                <h2 class="mt-2 max-w-3xl text-3xl font-semibold text-white sm:text-4xl">Give advocates a cinematic experience and give your team clarity.</h2>
                            </div>
                            <a href="#how-it-works" class="inline-flex items-center gap-2 text-sm font-semibold text-white/70 transition hover:text-white">
                                Explore the steps

                    <section id="features" class="space-y-12">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">What makes it different</p>
                                <h2 class="mt-2 max-w-2xl text-3xl font-semibold text-white sm:text-4xl">
                                    UI crafted to echo your brand kit, paired with automation that removes the busywork.
                                </h2>
                            </div>
                            <a href="#playbook" class="inline-flex items-center gap-2 text-sm font-semibold text-white/70 transition hover:text-white">
                                View the growth playbook

                                <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>

                        <div class="space-y-8">
                            <div class="flex flex-col gap-4 rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_20px_60px_rgba(9,10,12,0.45)] sm:flex-row sm:items-center sm:gap-8">
                                <div class="shrink-0 rounded-full bg-[#FF6B4A]/20 p-3 text-[#FFB59B]">

                        <div class="grid gap-6 lg:grid-cols-3">
                            <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.55)] transition hover:-translate-y-1 hover:border-white/20">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#FF6B4A] text-[#0D0E10] shadow-[0_12px_30px_rgba(255,107,74,0.35)]">

                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12H19M12 5L19 12L12 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div class="space-y-2 text-sm text-white/70">
                                    <p class="text-base font-semibold text-white">Hero &amp; story crafted together</p>
                                    <p>Import the copy from the reference doc and we match it with gradients, layering, and motion cues from your brand kit.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_20px_60px_rgba(9,10,12,0.45)] sm:flex-row sm:items-center sm:gap-8">
                                <div class="shrink-0 rounded-full bg-[#61F4DE]/20 p-3 text-[#8AF7E6]">

                                <h3 class="mt-6 text-xl font-semibold text-white">Design-forward starter kits</h3>
                                <p class="mt-3 text-sm text-white/70">
                                    Apply curated hero layouts, typographic scales, and color palettes inspired by your brand references in a single click.
                                </p>
                            </article>
                            <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.55)] transition hover:-translate-y-1 hover:border-white/20">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#61F4DE] text-[#05212A] shadow-[0_12px_30px_rgba(97,244,222,0.35)]">

                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5H19V19H5V5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                        <path d="M9 9H15V15H9V9Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div class="space-y-2 text-sm text-white/70">
                                    <p class="text-base font-semibold text-white">Counts tied to conversion moments</p>
                                    <p>Pick the milestone—signup, purchase, upgrade. We don’t add numbers until that exact action fires on the advocate’s page.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_20px_60px_rgba(9,10,12,0.45)] sm:flex-row sm:items-center sm:gap-8">
                                <div class="shrink-0 rounded-full bg-white/15 p-3 text-white">

                                <h3 class="mt-6 text-xl font-semibold text-white">Automations without clutter</h3>
                                <p class="mt-3 text-sm text-white/70">
                                    Smart defaults minimize optional fields—only add what amplifies delight. Everything else runs in the background.
                                </p>
                            </article>
                            <article class="group rounded-3xl border border-white/10 bg-white/5 p-6 shadow-[0_18px_60px_rgba(10,11,13,0.55)] transition hover:-translate-y-1 hover:border-white/20">
                                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15 text-white shadow-[0_12px_30px_rgba(255,255,255,0.25)]">

                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 3V21M21 12H3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </div>

                                <div class="space-y-2 text-sm text-white/70">
                                    <p class="text-base font-semibold text-white">All insight, no spreadsheet</p>
                                    <p>See trending advocates, pending rewards, and influenced revenue without toggling between optional widgets.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="how-it-works" class="space-y-10">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">How it works</p>
                                <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">Launch in three intentional passes.</h2>
                            </div>
                            <p class="max-w-md text-sm text-white/70">Documented checkpoints keep everyone aligned. You always know which pieces are mandatory and which are optional before going live.</p>
                        </div>
                        <ol class="space-y-6">
                            <li class="relative rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_18px_60px_rgba(9,10,12,0.45)]">
                                <span class="absolute -left-5 top-8 hidden h-10 w-10 items-center justify-center rounded-full bg-white/10 text-sm font-semibold text-white sm:flex">1</span>
                                <div class="space-y-2 text-sm text-white/70 sm:pl-10">
                                    <p class="text-base font-semibold text-white">Upload the brand references</p>
                                    <p>Drop in your infographic, brand kit, or past launch visuals. We map gradients, shadows, and typography onto the canvas instantly.</p>
                                </div>
                            </li>
                            <li class="relative rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_18px_60px_rgba(9,10,12,0.45)]">
                                <span class="absolute -left-5 top-8 hidden h-10 w-10 items-center justify-center rounded-full bg-white/10 text-sm font-semibold text-white sm:flex">2</span>
                                <div class="space-y-2 text-sm text-white/70 sm:pl-10">
                                    <p class="text-base font-semibold text-white">Define the conversion moment</p>
                                    <p>Select the action that proves success. The referral counter updates only when that milestone fires on the advocate’s unique URL.</p>
                                </div>
                            </li>
                            <li class="relative rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_18px_60px_rgba(9,10,12,0.45)]">
                                <span class="absolute -left-5 top-8 hidden h-10 w-10 items-center justify-center rounded-full bg-white/10 text-sm font-semibold text-white sm:flex">3</span>
                                <div class="space-y-2 text-sm text-white/70 sm:pl-10">
                                    <p class="text-base font-semibold text-white">Automate rewards and follow-up</p>
                                    <p>Connect payouts or lifecycle flows so rewards fire instantly and your team receives a digest with verified conversions.</p>
                                </div>
                            </li>
                        </ol>
                    </section>

                    <section id="proof" class="grid gap-12 rounded-[2.75rem] border border-white/10 bg-white/5 p-10 shadow-[0_20px_60px_rgba(9,10,12,0.45)] lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                        <div class="space-y-6">
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">Social proof</p>
                            <h2 class="text-3xl font-semibold text-white sm:text-4xl">Trusted by growth, lifecycle, and product marketing teams.</h2>
                            <div class="flex flex-wrap items-center gap-4 text-sm font-semibold text-white/60">
                                <span class="rounded-full border border-white/10 px-4 py-2">Notion</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Figma</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Webflow</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Shopify</span>
                                <span class="rounded-full border border-white/10 px-4 py-2">Klaviyo</span>
                            </div>
                        </div>
                        <div class="space-y-6 text-sm text-white/80">
                            <figure class="rounded-3xl border border-white/10 bg-[#0F151C]/60 p-6">
                                <blockquote>“The new layout looks exactly like the identity board we uploaded. Referral counts only move when the onboarding flow finishes, so our leaderboard finally reflects reality.”</blockquote>
                                <figcaption class="mt-3 text-xs font-semibold uppercase tracking-[0.3em] text-white/50">Priya Desai · Director of Growth</figcaption>
                            </figure>
                            <figure class="rounded-3xl border border-white/10 bg-[#0F151C]/60 p-6">
                                <blockquote>“We stopped over-designing optional blocks. Launchpad keeps the essentials, and rewards send within minutes of a verified conversion.”</blockquote>
                                <figcaption class="mt-3 text-xs font-semibold uppercase tracking-[0.3em] text-white/50">Marcus Hill · Lifecycle Lead</figcaption>
                            </figure>
                        </div>
                    </section>

                    <section id="faq" class="space-y-12">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">FAQ</p>
                                <h2 class="mt-2 text-3xl font-semibold text-white sm:text-4xl">Still have questions?</h2>
                            </div>
                            <a href="mailto:hello@viral.app" class="inline-flex items-center gap-2 rounded-full bg-white/10 px-6 py-3 text-sm font-semibold text-white/80 transition hover:bg-white/20">
                                Talk to a strategist
                                <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="grid gap-8 lg:grid-cols-[1fr_1fr]">
                            <div class="rounded-[2.5rem] border border-white/10 bg-white/5 p-8 shadow-[0_18px_60px_rgba(9,10,12,0.45)]">
                                <h3 class="text-lg font-semibold text-white">Need a live walkthrough?</h3>
                                <p class="mt-3 text-sm text-white/70">Book a 20-minute session and we’ll tailor the structure to your campaign assets.</p>
                                <a href="mailto:hello@viral.app" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-[#FFB973] transition hover:text-[#FFD56B]">
                                    hello@viral.app
                                    <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 12.5L12.5 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M5 3.5H12.5V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="space-y-4 text-sm text-white/70">
                                <details class="group border-b border-white/10 pb-4">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left text-base font-semibold text-white">
                                        How do unique referral URLs update counts?
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-3">Each advocate has a dedicated page. We wait for your defined conversion event to fire on that URL before crediting the share.</p>
                                </details>
                                <details class="group border-b border-white/10 pb-4">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left text-base font-semibold text-white">
                                        Can we adjust layouts without code?
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-3">Swap sections, edit copy, and update gradients directly inside the builder. Optional blocks stay tucked away until you enable them.</p>
                                </details>
                                <details class="group border-b border-white/10 pb-4">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left text-base font-semibold text-white">
                                        What prevents fraud or self-referrals?
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-3">We fingerprint traffic, monitor velocity, and require verified conversions on the advocate’s URL before releasing rewards.</p>
                                </details>
                                <details class="group border-b border-white/10 pb-4">
                                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left text-base font-semibold text-white">
                                        Does it plug into our stack?
                                        <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                    </summary>
                                    <p class="mt-3">Connect Stripe, HubSpot, Salesforce, Klaviyo, and more via native integrations or webhooks.</p>
                                </details>
                            </div>
                        </div>
                    </section>
                </main>

                <footer class="mt-24 rounded-3xl border border-white/10 bg-gradient-to-br from-[#10151B] via-[#111922] to-[#090B0F] p-10 text-sm text-white/60">
                    <div class="flex flex-col gap-8 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-white/40">Call to value</p>
                            <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">Launch a referral experience your advocates are proud to share.</h2>
                            <p class="mt-3 max-w-xl text-sm text-white/70">Stay true to the brand kit, streamline the flow, and reward only verified conversions.</p>

                                <h3 class="mt-6 text-xl font-semibold text-white">Insights you can pitch with</h3>
                                <p class="mt-3 text-sm text-white/70">
                                    Visualize trending advocates, campaign velocity, and incremental revenue in a single source of truth.
                                </p>
                            </article>
                        </div>
                    </section>

                    <section id="playbook" class="space-y-12">
                        <div class="grid gap-8 lg:grid-cols-[1.2fr_1fr] lg:items-center">
                            <div class="space-y-6">
                                <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#FFB973]">Launch blueprint</p>
                                <h2 class="text-3xl font-semibold text-white sm:text-4xl">How a referral drops comes to life</h2>
                                <p class="text-base text-white/70 sm:text-lg">
                                    Each advocate receives a dedicated landing page and unique URL. We only increment their referral count when their guests complete your defined conversion, so your leaderboards are honest and hype-worthy.
                                </p>
                                <ul class="space-y-5 text-sm text-white/70">
                                    <li class="flex items-start gap-3">
                                        <span class="mt-1 flex h-7 w-7 items-center justify-center rounded-full bg-white/10 text-xs font-semibold text-white">1</span>
                                        <div>
                                            <h3 class="text-base font-semibold text-white">Choose a starter layout</h3>
                                            <p class="mt-1">Pick a hero inspired by your brand references—our system adapts typography, contrast, and accent colors automatically.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="mt-1 flex h-7 w-7 items-center justify-center rounded-full bg-white/10 text-xs font-semibold text-white">2</span>
                                        <div>
                                            <h3 class="text-base font-semibold text-white">Launch your referral flow</h3>
                                            <p class="mt-1">Activate rewards, set guardrails, and publish personalised URLs for each advocate in seconds.</p>
                                        </div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="mt-1 flex h-7 w-7 items-center justify-center rounded-full bg-white/10 text-xs font-semibold text-white">3</span>
                                        <div>
                                            <h3 class="text-base font-semibold text-white">Track only what matters</h3>
                                            <p class="mt-1">We log referral counts exclusively after a completed conversion on the advocate's landing page—no accidental double counting.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-[#10151B] via-[#141D26] to-[#0F1318] p-8 shadow-[0_25px_70px_rgba(10,11,13,0.6)]">
                                <h3 class="text-lg font-semibold text-white">Campaign snapshot</h3>
                                <p class="mt-3 text-sm text-white/70">Track momentum without digging through spreadsheets.</p>
                                <dl class="mt-8 space-y-5">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm text-white/60">Unique referral pages live</dt>
                                        <dd class="text-xl font-semibold text-white">124</dd>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm text-white/60">Conversions protected from fraud</dt>
                                        <dd class="text-xl font-semibold text-[#61F4DE]">98.4%</dd>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <dt class="text-sm text-white/60">Average reward delivery</dt>
                                        <dd class="text-xl font-semibold text-white">12 min</dd>
                                    </div>
                                </dl>
                                <div class="mt-8 rounded-2xl border border-white/10 bg-white/5 p-6">
                                    <p class="text-xs font-semibold uppercase tracking-[0.45em] text-white/50">Integrates with</p>
                                    <div class="mt-4 grid grid-cols-3 gap-4 text-sm font-semibold text-white/70">
                                        <span class="rounded-lg bg-[#0E131A] px-3 py-2 text-center">Shopify</span>
                                        <span class="rounded-lg bg-[#0E131A] px-3 py-2 text-center">HubSpot</span>
                                        <span class="rounded-lg bg-[#0E131A] px-3 py-2 text-center">Stripe</span>
                                        <span class="rounded-lg bg-[#0E131A] px-3 py-2 text-center">Klaviyo</span>
                                        <span class="rounded-lg bg-[#0E131A] px-3 py-2 text-center">Segment</span>
                                        <span class="rounded-lg bg-[#0E131A] px-3 py-2 text-center">Webflow</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="faq" class="grid gap-10 lg:grid-cols-[1fr_1fr] lg:items-start">
                        <div class="space-y-6">
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-[#61F4DE]">Answers on deck</p>
                            <h2 class="text-3xl font-semibold text-white sm:text-4xl">FAQs for fast-moving teams</h2>
                            <p class="max-w-xl text-base text-white/70 sm:text-lg">
                                We designed Viral Launchpad to stay out of your way while still giving you the controls you need. Here are the essentials.
                            </p>
                            <div class="rounded-3xl border border-white/10 bg-white/5 p-7 shadow-[0_18px_60px_rgba(10,11,13,0.55)]">
                                <h3 class="text-lg font-semibold text-white">Need a live walkthrough?</h3>
                                <p class="mt-3 text-sm text-white/70">Book a 20-minute jam session with our strategists to tailor the starter kit to your brand's aesthetic.</p>
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
                                    <span class="text-base font-semibold text-white">How do unique referral URLs work?</span>
                                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                </summary>
                                <p class="mt-4 text-sm text-white/70">
                                    Each advocate receives a secure link routing to their personalized landing page. Referral counts increase only when a visitor completes the action on that page—no accidental clicks or self-referrals.
                                </p>
                            </details>
                            <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                    <span class="text-base font-semibold text-white">Can we remix the visuals?</span>
                                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                </summary>
                                <p class="mt-4 text-sm text-white/70">
                                    Absolutely. Use the brand kit-inspired palettes, swap imagery, and drop in motion assets. The layout adapts while preserving hierarchy and accessibility.
                                </p>
                            </details>
                            <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                    <span class="text-base font-semibold text-white">Do we need engineering help?</span>
                                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                </summary>
                                <p class="mt-4 text-sm text-white/70">
                                    Not for launch. Connect your tools, customize the copy, and hit publish. Developers can extend via our API when you're ready to scale further.
                                </p>
                            </details>
                            <details class="group rounded-2xl border border-white/10 bg-white/5 p-6 shadow-[0_12px_40px_rgba(10,11,13,0.45)]">
                                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-left">
                                    <span class="text-base font-semibold text-white">How are rewards delivered?</span>
                                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs font-semibold text-white/70 transition group-open:bg-[#FF6B4A] group-open:text-[#0D0E10]">Open</span>
                                </summary>
                                <p class="mt-4 text-sm text-white/70">
                                    Trigger digital or physical rewards automatically. Our automations trigger only on confirmed conversions so your budget is protected.
                                </p>
                            </details>
                        </div>
                    </section>
                </main>

                <footer class="mt-24 rounded-3xl border border-white/10 bg-gradient-to-br from-[#10151B] via-[#111922] to-[#090B0F] p-10 text-sm text-white/60">
                    <div class="flex flex-col gap-8 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.45em] text-white/40">Ready to go viral?</p>
                            <h2 class="mt-3 text-2xl font-semibold text-white">Let's build your next cult-favorite launch.</h2>

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
            <div class="mt-10 grid gap-6 sm:grid-cols-2">
                        <p class="text-xs text-white/40">© {{ date('Y') }} Viralapp. Crafted for teams ready to ship legendary referral drops.</p>
                        <div class="flex items-center gap-4 text-xs">
                            <a href="#features" class="hover:text-white">Platform</a>
                            <a href="#playbook" class="hover:text-white">Playbook</a>
                            <a href="#faq" class="hover:text-white">Support</a>
                            <a href="mailto:legal@viral.app" class="hover:text-white">Legal</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
