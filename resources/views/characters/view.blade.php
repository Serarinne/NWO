<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $character->seo_title ?? $character->name . ' Wallpapers' }} | {{ env('APP_NAME') }}</title>
    <link rel="canonical" href="{{ route('characters.view', $character->slug) }}" />
    <meta name="description"
        content="{{ $character->seo_description ?? 'Download high-quality wallpapers of ' . $character->name }}">
    <meta name="keywords" content="{{ $character->seo_keywords }}">

    {{-- Social Metadata --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $character->name }} Wallpapers" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($character->seo_description), 150) }}" />
    <meta property="og:image" content="{{ $character->image['jpg'] }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta name="twitter:card" content="summary_large_image">

    @include('components.file-assets')

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "CollectionPage",
      "@@id": "{{ route('characters.view', $character->slug) }}#webpage",
      "url": "{{ route('characters.view', $character->slug) }}",
      "name": "{{ $character->name }} NTE Wallpaper",
      "description": "Browse {{ $character->name }} NTE wallpapers and discover Neverness to Everness backgrounds, fanart, and related wallpaper collections.",
      "isPartOf": {
        "@@id": "{{ route('wallpapers.index') }}#website"
      },
      "about": [
        {
          "@@type": "Person",
          "name": "{{ $character->name }}"
        },
        {
          "@@type": "Thing",
          "name": "{{ $character->name }} NTE Wallpaper"
        },
        {
          "@@type": "Thing",
          "name": "{{ $character->name }} Neverness to Everness Wallpaper"
        }
      ],
      "primaryImageOfPage": {
        "@@id": "{{ route('characters.view', $character->slug) }}#primaryimage"
      },
      "inLanguage": "en"
    },
    {
      "@@type": "ImageObject",
      "@@id": "{{ route('characters.view', $character->slug) }}#primaryimage",
      "name": "{{ $character->name }} NTE wallpaper 4K portrait",
      "contentUrl": "{{ $character->image['jpg'] }}",
      "thumbnailUrl": "{{ $character->image['jpg'] }}"
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "{{ route('characters.view', $character->slug) }}#breadcrumb",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ route('wallpapers.index') }}"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "Characters",
          "item": "{{ route('characters.index') }}"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "{{ $character->name }}",
          "item": "{{ route('characters.view', $character->slug) }}"
        }
      ]
    }
  ]
}
</script>
</head>

<body
    class="bg-[#0f172a] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-cyan-500 selection:text-white">

    @include('components.navigation')

    <main class="flex-grow">
        {{-- Hero Section --}}
        <div class="relative bg-gray-900 border-b border-gray-800 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-cover bg-center opacity-30 blur-3xl scale-110"
                    style="background-image: url('{{ $character->image['webp'] }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent"></div>
            </div>

            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 relative z-10">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-8">

                    {{-- Avatar / Image --}}
                    <div class="flex-shrink-0 relative group">
                        <div
                            class="w-32 h-32 md:w-48 md:h-48 rounded-2xl overflow-hidden border-4 border-gray-800 shadow-2xl relative z-10 bg-gray-800">
                            <picture>
                                <source srcset="{{ $character->image['webp'] }}" type="image/webp">
                                <img src="{{ $character->image['jpg'] }}"
                                    alt="{{ $character->name }} NTE wallpaper 4K portrait"
                                    class="w-full h-full object-cover">
                            </picture>
                        </div>
                        <div
                            class="absolute inset-0 bg-cyan-500 blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-500 -z-10 rounded-full">
                        </div>
                    </div>

                    <div class="flex-grow text-center md:text-left pt-1 w-full md:w-auto">
                        <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                            <span
                                class="px-2 py-0.5 rounded bg-purple-900/50 text-purple-300 text-xs font-medium border border-purple-700/50">Character</span>
                        </div>

                        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-2">
                            {{ $character->name }} NTE Wallpaper</h1>

                        {{-- Variants Logic --}}
                        @if (isset($character->variants) && $character->variants->isNotEmpty())
                            <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 mb-5">
                                <span class="text-sm text-gray-400 mr-1">Variant of:</span>
                                @foreach ($character->variants as $variant)
                                    <a href="{{ route('characters.view', [$character->series->first()->slug, $variant->slug]) }}"
                                        class="inline-flex items-center gap-2 px-2.5 py-1 rounded-lg bg-gray-800 hover:bg-gray-750 border border-gray-700 hover:border-cyan-500/50 transition-all group">
                                        <div class="w-5 h-5 rounded-full overflow-hidden flex-shrink-0 bg-gray-700">
                                            <img src="{{ $variant->image['webp'] }}" alt="{{ $variant->name }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                                        </div>
                                        <span
                                            class="text-sm font-medium text-gray-300 group-hover:text-white truncate max-w-[120px]">{{ $variant->name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endif

                        {{-- Description --}}
                        <div class="max-w-xl mx-auto md:mx-0">
                            <div id="char-desc-container" class="relative">
                                <p id="char-desc-text"
                                    class="text-gray-300 text-sm md:text-base leading-relaxed line-clamp-3 transition-all duration-300">
                                    {!! nl2br(e($character->description)) ?? 'No description available for this character.' !!}
                                </p>
                                @if (strlen(strip_tags($character->description)) > 160)
                                    <button id="read-more-btn"
                                        class="mt-2 text-cyan-400 hover:text-cyan-300 text-sm font-medium focus:outline-none flex items-center gap-1 mx-auto md:mx-0">
                                        <span>Read more</span>
                                        <svg class="w-4 h-4 transition-transform duration-300" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Gallery Header --}}
        <div class="border-b border-gray-800 bg-gray-900/90 top-16 z-40 backdrop-blur-md shadow-md">
            <div
                class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-3">
                    <h2 class="text-lg font-bold text-white tracking-wide">All {{ $character->name }} NTE Wallpaper</h2>
                    <span
                        class="flex items-center justify-center px-2.5 py-0.5 rounded-full bg-gray-800 border border-gray-700 text-cyan-400 text-xs font-bold shadow-sm">
                        {{ number_format($wallpapers->total()) }}
                    </span>
                </div>
            </div>
        </div>

        {{-- Gallery Grid --}}
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @if ($wallpapers->count() > 0)
                <div class="columns-2 md:columns-3 lg:columns-4 xl:columns-5 gap-6 space-y-6">
                    @foreach ($wallpapers as $wallpaper)
                        <div class="break-inside-avoid mb-6">
                            <x-wallpaper-card :wallpaper="$wallpaper" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="w-full py-20 text-center bg-gray-800/30 rounded-2xl border border-gray-700/50 border-dashed">
                    <p class="text-gray-400 text-lg font-medium">No wallpapers found for this character yet.</p>
                    <a href="{{ route('wallpaper.create') }}" class="inline-block mt-4 text-cyan-400 hover:text-cyan-300 hover:underline">Upload one now</a>
                </div>
            @endif

            {{-- Pagination --}}
            @if ($wallpapers->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $wallpapers->appends(request()->query())->links('components.pagination') }}
                </div>
            @endif
        </div>
    </main>

    @include('components.footer')

    <script>
        // Read More Toggle
        const readMoreBtn = document.getElementById('read-more-btn');
        const charDescText = document.getElementById('char-desc-text');
        if (readMoreBtn && charDescText) {
            readMoreBtn.addEventListener('click', () => {
                const isClamped = charDescText.classList.contains('line-clamp-3');
                charDescText.classList.toggle('line-clamp-3');
                readMoreBtn.querySelector('span').textContent = isClamped ? 'Show less' : 'Read more';
                readMoreBtn.querySelector('svg').style.transform = isClamped ? 'rotate(180deg)' : 'rotate(0deg)';
            });
        }
    </script>
</body>

</html>
