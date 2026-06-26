<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>About Us - {{ env('APP_NAME') }}</title>
    
    <meta name="title" content="About Us - {{ env('APP_NAME') }}">
    <meta name="description" content="Discover {{ env('APP_NAME') }}, the premier community hub for sharing and appreciating high-quality Neverness to Everness wallpapers and art. Join us today.">
    <meta name="keywords" content="nte wallpapers, about nte wallpapers, nte wallpaper, neverness to everness art, wallpaper community, high quality nte wallpaper, game fanart gallery">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route('about') }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('about') }}">
    <meta property="og:title" content="About Us - {{ env('APP_NAME') }}">
    <meta property="og:description" content="Discover {{ env('APP_NAME') }}, the premier community hub for sharing and appreciating high-quality Neverness to Everness wallpapers and art.">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ route('about') }}">
    <meta name="twitter:title" content="About Us - {{ env('APP_NAME') }}">
    <meta name="twitter:description" content="Discover {{ env('APP_NAME') }}, the premier community hub for sharing and appreciating high-quality Neverness to Everness wallpapers and art.">

    @include('components.file-assets')

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org/",
        "@@type": "BreadcrumbList",
        "itemListElement": [{
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ route('wallpapers.index') }}"
        }, {
            "@@type": "ListItem",
            "position": 2,
            "name": "About Us",
            "item": "{{ route('about') }}"
        }]
    }
    </script>
</head>

<body class="bg-[#0f172a] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-cyan-500 selection:text-white">

    @include('components.navigation')

    <main class="flex-grow relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-cyan-900/20 blur-[100px] rounded-full pointer-events-none -z-10"></div>

        <div class="container mx-auto px-4 py-12 max-w-5xl">

            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 mb-4 tracking-tight drop-shadow-sm">
                    About {{ env('APP_NAME') }}
                </h1>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto leading-relaxed">
                    The community-driven hub for fans to discover, share, and appreciate high-quality Neverness to Everness (NTE) wallpapers and art.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <div class="md:col-span-2 bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-8 shadow-xl hover:border-cyan-500/30 transition-all duration-300">
                    <h2 class="text-2xl font-semibold mb-4 text-white flex items-center">
                        <span class="bg-cyan-500/10 text-cyan-400 p-2 rounded-lg mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </span>
                        Our Mission
                    </h2>
                    <p class="text-gray-300 leading-relaxed">
                        <strong>{{ env('APP_NAME') }}</strong> was born from a simple passion: a love for Neverness to Everness and its breathtaking urban open-world aesthetics. We wanted to create a dedicated space where fans could discover, share, and appreciate high-quality NTE wallpapers. Our mission is to be the ultimate, community-driven hub for Esper enthusiasts around the world, free from clutter and focused entirely on the unique vibes of Hethereau.
                    </p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-8 shadow-xl hover:border-purple-500/30 transition-all duration-300">
                    <h2 class="text-xl font-semibold mb-3 text-white">Our Vision</h2>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        We envision a platform that not only serves as a massive gallery but also as a community that respects and celebrates the artists. Every wallpaper is a piece of art, and we strive to connect fans with the talented individuals who bring the characters and environments of Neverness to Everness to life.
                    </p>
                </div>

                <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700/50 rounded-2xl p-8 shadow-xl hover:border-purple-500/30 transition-all duration-300">
                    <h2 class="text-xl font-semibold mb-3 text-white">A Community Effort</h2>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        This platform is powered by <strong>you</strong>. Every upload helps our library grow. We are grateful to every user who shares their finds. By properly tagging characters, locations, and artists, you help make this collection easily searchable and enjoyable for everyone exploring the anomaly-filled city.
                    </p>
                </div>
            </div>

            @guest
                <div class="mt-12 text-center bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 relative overflow-hidden">
                    <div class="relative z-10">
                        <h2 class="text-2xl font-bold text-white mb-3">Ready to Join?</h2>
                        <p class="text-gray-400 mb-6 max-w-lg mx-auto">
                            Whether you're here to find the perfect background or share a masterpiece, you're a vital part of {{ env('APP_NAME') }}.
                        </p>
                        <a href="{{ route('login.index') }}"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold rounded-md text-slate-900 bg-cyan-400 hover:bg-cyan-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-colors shadow-lg shadow-cyan-500/20">
                            Login to Account
                        </a>
                    </div>
                </div>
            @endguest

        </div>
    </main>

    @include('components.footer')
</body>
</html>