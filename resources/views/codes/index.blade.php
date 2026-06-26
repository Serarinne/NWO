<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Active Redeem Codes | {{ env('APP_NAME') }}</title>

    <link rel="canonical" href="{{ route('codes.index') }}" />
  	<meta name="description" content="Get the latest active Neverness to Everness (NTE) promo codes. Redeem for free premium currency, credits, and exclusive in-game rewards.">
    <meta name="keywords" content="nte codes, neverness to everness redeem code, nte promo codes, free nte rewards, gift codes">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Active Redeem Codes for Neverness to Everness" />
    <meta property="og:description" content="Get the latest active Neverness to Everness (NTE) promo codes. Redeem for free premium currency, credits, and exclusive in-game rewards." />
    <meta property="og:url" content="{{ route('codes.index') }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Active Redeem Codes | {{ env('APP_NAME') }}" />

    @include('components.file-assets')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-[#0f172a] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-cyan-500 selection:text-white">

    @include('components.navigation')

    <main class="flex-grow relative overflow-hidden py-12">
        
        {{-- Background Effects dari Halaman Character --}}
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-cyan-900/10 blur-[120px] rounded-full pointer-events-none -z-10"></div>
        <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-purple-900/10 blur-[120px] rounded-full pointer-events-none -z-10"></div>
        <div class="absolute inset-0 bg-[url('https://storage.ntewallpapers.com/assets/pattern.svg')] opacity-[0.03] pointer-events-none -z-10"></div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            
            {{-- Header Section disesuaikan dengan Halaman Character --}}
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center p-3.5 bg-gray-800/60 backdrop-blur-md rounded-2xl border border-gray-700/50 mb-6 shadow-[0_0_30px_-5px_rgba(234,179,8,0.2)] text-yellow-500 hover:scale-105 transition-transform duration-300">
                    <svg class="w-8 h-8 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                    </svg>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500 mb-4 tracking-tight drop-shadow-lg">
                    Active Promo Codes
                </h1>
                
                <p class="text-gray-400 text-lg mb-8 max-w-2xl mx-auto">
                    Grab your free in-game loot! Here is the updated list of working redeem codes for <span class="text-gray-200">Neverness to Everness</span>.
                </p>

                <div class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full bg-gray-900/80 border border-emerald-500/30 text-emerald-400 text-sm font-semibold shadow-lg shadow-emerald-900/20 backdrop-blur-sm">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500 shadow-[0_0_10px_rgba(16,185,129,0.8)]"></span>
                    </span>
                    Last checked: <span class="text-white">{{ now()->format('F j, Y') }}</span>
                </div>
            </div>

            {{-- Wrap Konten Utama agar tidak terlalu lebar di Desktop --}}
            <div class="max-w-4xl mx-auto">
                
                {{-- Active Codes Section --}}
                <div class="mb-16">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-white flex items-center gap-3">
                            <div class="p-2 bg-cyan-500/10 rounded-lg border border-cyan-500/20">
                                <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                            </div>
                            Working Codes
                        </h2>
                        <span class="text-sm font-medium text-gray-300 bg-gray-800/80 px-3 py-1 rounded-full border border-gray-700/80">
                            {{ $activeCodes->count() }} Available
                        </span>
                    </div>

                    <div class="grid grid-cols-1 gap-5">
                        @forelse($activeCodes as $promo)
                        <div class="group relative bg-gray-800/60 backdrop-blur-xl border border-gray-700/50 rounded-2xl p-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 hover:border-cyan-500/50 transition-all duration-300 hover:shadow-[0_0_30px_-5px_rgba(6,182,212,0.15)] overflow-hidden">
                            
                            {{-- Decorative Glow Background --}}
                            <div class="absolute -right-20 -top-20 w-40 h-40 bg-cyan-500/5 rounded-full blur-2xl group-hover:bg-cyan-500/10 transition-colors duration-500"></div>

                            <div class="flex-grow relative z-10">
                                <h3 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">Rewards Included</h3>
                                <div class="flex items-center gap-3 text-white font-semibold text-lg md:text-xl">
                                    <div class="bg-yellow-500/10 p-1.5 rounded-lg border border-yellow-500/20">
                                        <svg class="w-5 h-5 text-yellow-500 drop-shadow-md" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    </div>
                                    {{ $promo->reward_description }}
                                </div>
                                <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-medium px-2.5 py-1 rounded-md bg-gray-900/50 border border-gray-700/50 {{ $promo->expired_at ? 'text-red-400' : 'text-gray-400' }}">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Expires: {{ $promo->expired_at ? $promo->expired_at->format('M d, Y') : 'No Expiry' }}
                                </div>
                            </div>

                            {{-- Click to Copy Feature (Sekarang menggunakan Fallback Copy Script) --}}
                            <div class="w-full md:w-auto shrink-0 relative z-10" x-data="{ copied: false, codeText: '{{ $promo->code }}' }">
                                <button @click="copyToClipboardSecure(codeText).then(() => { copied = true; setTimeout(() => copied = false, 2000) })" 
                                        class="group/copy w-full md:w-[280px] flex items-center justify-between bg-gray-900/80 border border-gray-600/80 hover:border-cyan-500 rounded-xl p-2 shadow-inner transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 active:scale-[0.98]">
                                    
                                    <span class="px-4 py-2 font-mono text-cyan-400 font-bold text-lg tracking-widest truncate w-full text-center md:text-left select-none">
                                        {{ $promo->code }}
                                    </span>
                                    
                                    <span class="bg-gray-700/50 group-hover/copy:bg-cyan-500 text-gray-300 group-hover/copy:text-white px-4 py-2.5 rounded-lg font-bold text-sm transition-all duration-300 flex items-center justify-center min-w-[100px] shrink-0">
                                        <span x-show="!copied" class="flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                            COPY
                                        </span>
                                        <span x-show="copied" x-cloak class="flex items-center gap-1 text-white">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            COPIED
                                        </span>
                                    </span>
                                </button>
                            </div>

                        </div>
                        @empty
                        {{-- Empty State --}}
                        <div class="relative overflow-hidden bg-gray-800/40 backdrop-blur-sm border border-gray-700/50 border-dashed rounded-3xl p-12 text-center flex flex-col items-center justify-center group hover:border-gray-600/50 transition-colors duration-500">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-800/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <div class="w-20 h-20 mb-6 rounded-full bg-gray-900/80 border border-gray-700/80 flex items-center justify-center shadow-inner relative group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 rounded-full bg-cyan-500/10 animate-ping opacity-20"></div>
                                <svg class="w-10 h-10 text-gray-500 group-hover:text-cyan-400 transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            
                            <h3 class="text-xl font-bold text-white mb-2 relative z-10">No Active Codes Currently</h3>
                            <p class="text-gray-400 max-w-sm mx-auto relative z-10">We're keeping a close eye on developer announcements. Check back soon for new loot!</p>
                        </div>
                        @endforelse
                    </div>
                </div>

                {{-- How to Redeem Guide (Horizontal Layout) --}}
                <div class="mb-16 relative bg-gray-800/40 backdrop-blur-xl border border-gray-700/50 rounded-3xl p-8 md:p-10 overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="text-center mb-10 relative z-10">
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-3">How to Redeem Codes</h2>
                        <p class="text-gray-400">Follow these simple steps to claim your rewards in Neverness to Everness.</p>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-8 md:gap-4 relative z-10">
                        
                        {{-- Step 1 --}}
                        <div class="flex-1 flex flex-col items-center text-center group w-full">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gray-900 text-cyan-400 font-black text-2xl flex items-center justify-center border border-gray-700 shadow-lg group-hover:border-cyan-500/50 transition-all duration-300">
                                1
                            </div>
                            <div class="mt-5">
                                <h3 class="font-bold text-white text-lg mb-2 group-hover:text-cyan-400 transition-colors">Open the Game</h3>
                                <p class="text-sm text-gray-400 leading-relaxed px-2">Launch NTE and log in. Open the <span class="text-gray-300 font-semibold">Phone Menu</span>.</p>
                            </div>
                        </div>

                        {{-- Arrow 1 --}}
                        <div class="hidden md:flex shrink-0 items-center justify-center text-gray-600 mt-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>

                        {{-- Step 2 --}}
                        <div class="flex-1 flex flex-col items-center text-center group w-full">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gray-900 text-cyan-400 font-black text-2xl flex items-center justify-center border border-gray-700 shadow-lg group-hover:border-cyan-500/50 transition-all duration-300">
                                2
                            </div>
                            <div class="mt-5">
                                <h3 class="font-bold text-white text-lg mb-2 group-hover:text-cyan-400 transition-colors">Go to Settings</h3>
                                <p class="text-sm text-gray-400 leading-relaxed px-2">Navigate to <span class="text-gray-300 font-semibold">Settings</span> > <span class="text-gray-300 font-semibold">Account</span> > <span class="text-gray-300 font-semibold">Redeem</span>.</p>
                            </div>
                        </div>

                        {{-- Arrow 2 --}}
                        <div class="hidden md:flex shrink-0 items-center justify-center text-gray-600 mt-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>

                        {{-- Step 3 --}}
                        <div class="flex-1 flex flex-col items-center text-center group w-full">
                            <div class="w-16 h-16 shrink-0 rounded-2xl bg-gray-900 text-cyan-400 font-black text-2xl flex items-center justify-center border border-gray-700 shadow-lg group-hover:border-cyan-500/50 transition-all duration-300">
                                3
                            </div>
                            <div class="mt-5">
                                <h3 class="font-bold text-white text-lg mb-2 group-hover:text-cyan-400 transition-colors">Enter Code</h3>
                                <p class="text-sm text-gray-400 leading-relaxed px-2">Paste your code and click <span class="text-gray-300 font-semibold">Exchange</span>. Check mailbox!</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    @include('components.footer')

    {{-- Fallback Copy Script untuk Localhost (HTTP) --}}
    <script>
        function copyToClipboardSecure(text) {
            // Coba gunakan modern Clipboard API jika tersedia & secure context (HTTPS)
            if (navigator.clipboard && window.isSecureContext) {
                return navigator.clipboard.writeText(text);
            } else {
                // Fallback untuk HTTP/Localhost menggunakan document.execCommand
                return new Promise((resolve, reject) => {
                    let textArea = document.createElement("textarea");
                    textArea.value = text;
                    
                    // Sembunyikan textarea dari layar
                    textArea.style.position = "fixed";
                    textArea.style.left = "-999999px";
                    textArea.style.top = "-999999px";
                    
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();
                    
                    try {
                        let successful = document.execCommand('copy');
                        if(successful) {
                            resolve();
                        } else {
                            reject(new Error("Copy failed"));
                        }
                    } catch (err) {
                        reject(err);
                    } finally {
                        textArea.remove();
                    }
                });
            }
        }
    </script>
</body>
</html>