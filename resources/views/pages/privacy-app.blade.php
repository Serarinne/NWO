<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Privacy Policy Playstore - {{ env('APP_NAME') }}</title>

    <meta name="description" content="Read the Privacy Policy for {{ env('APP_NAME') }}. Understand what information we collect, how we use it, and your rights related to your data on our Neverness to Everness wallpaper platform.">
    <meta name="keywords" content="nte wallpapers, privacy policy, nte wallpapers privacy, data protection, user privacy, nte wallpaper privacy, neverness to everness privacy">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Privacy Policy Playstore - {{ env('APP_NAME') }}">
    <meta property="og:description" content="Understand what information we collect at {{ env('APP_NAME') }}, how we use it, and your rights related to your data.">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Privacy Policy Playstore - {{ env('APP_NAME') }}">
    <meta name="twitter:description" content="Understand what information we collect at {{ env('APP_NAME') }}, how we use it, and your rights related to your data.">

    @include('components.file-assets')

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org/",
        "@@type": "WebPage",
        "name": "Privacy Policy Playstore",
        "description": "Privacy Policy Playstore for {{ env('APP_NAME') }}.",
        "url": "{{ url()->current() }}",
        "breadcrumb": {
            "@@type": "BreadcrumbList",
            "itemListElement": [{
                "@@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{ route('wallpapers.index') }}"
            }, {
                "@@type": "ListItem",
                "position": 2,
                "name": "Privacy Policy",
                "item": "{{ url()->current() }}"
            }]
        }
    }
    </script>
</head>

<body class="bg-[#0f172a] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-cyan-500 selection:text-white">

    @include('components.navigation')

    <main class="flex-grow relative overflow-hidden py-12">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-cyan-900/10 blur-[120px] rounded-full pointer-events-none -z-10"></div>

        <div class="container mx-auto px-4 max-w-4xl">

            <div class="text-center mb-10">
                <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500 mb-4">
                    Privacy Policy
                </h1>
                <p class="text-gray-400">
                    Effective date: <span class="text-gray-300 font-medium">May 19, 2026</span>
                </p>
            </div>

            <article class="bg-gray-800/50 backdrop-blur-md border border-gray-700/50 rounded-2xl shadow-2xl p-8 md:p-12 relative overflow-hidden">

                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-cyan-500 to-transparent opacity-50"></div>

                <div class="space-y-8 text-gray-300 leading-relaxed text-lg">

                    {{-- Intro --}}
                    <p class="border-b border-gray-700/50 pb-6">
                        This privacy policy applies to the <strong class="text-white">NTE Wallpaper</strong> app (hereby referred to as &ldquo;Application&rdquo;) for mobile devices that was created by <strong class="text-white">Serarinne</strong> (hereby referred to as &ldquo;Service Provider&rdquo;) as a Free service. This service is intended for use &ldquo;AS IS&rdquo;.
                    </p>

                    {{-- 01 Information Collection and Use --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">01</span>
                            Information Collection and Use
                        </h2>
                        <p class="mb-4">The Application collects information when you download and use it. This information may include:</p>
                        <ul class="list-none space-y-3 pl-2 mb-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Your device&rsquo;s Internet Protocol address (e.g. IP address)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>The pages of the Application that you visit, the time and date of your visit, the time spent on those pages</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>The time spent on the Application</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>The operating system you use on your mobile device</span>
                            </li>
                        </ul>
                        <p class="mb-3">The Application does <strong class="text-white">not</strong> gather precise information about the location of your mobile device.</p>
                        <p class="mb-3">The Application does <strong class="text-white">not</strong> use Artificial Intelligence (AI) technologies to process your data or provide features.</p>
                        <p class="mb-3">The Service Provider may use the information you provided to contact you from time to time to provide you with important information, required notices and marketing promotions.</p>
                        <p>For a better experience, while using the Application, the Service Provider may require you to provide us with certain personally identifiable information, including but not limited to email and name. The information that the Service Provider requests will be retained by them and used as described in this privacy policy.</p>
                    </section>

                    {{-- 02 Third Party Access --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">02</span>
                            Third Party Access
                        </h2>
                        <p class="mb-4">Only aggregated, anonymized data is periodically transmitted to external services to aid the Service Provider in improving the Application and their service. The Service Provider may share your information with third parties in the ways that are described in this privacy statement.</p>
                        <p class="mb-4">Please note that the Application utilizes third-party services that have their own Privacy Policy about handling data. Below are the links to the Privacy Policy of the third-party service providers used by the Application:</p>
                        <ul class="list-none space-y-3 pl-2 mb-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                                <a href="https://support.google.com/admob/answer/6128543?hl=en" target="_blank" rel="noopener noreferrer" class="text-cyan-400 hover:text-white transition-colors underline underline-offset-2">AdMob</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                                <a href="https://firebase.google.com/support/privacy" target="_blank" rel="noopener noreferrer" class="text-cyan-400 hover:text-white transition-colors underline underline-offset-2">Google Analytics for Firebase</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                                <a href="https://onesignal.com/privacy_policy" target="_blank" rel="noopener noreferrer" class="text-cyan-400 hover:text-white transition-colors underline underline-offset-2">One Signal</a>
                            </li>
                        </ul>
                        <p class="mb-3">The Service Provider may disclose User Provided and Automatically Collected Information:</p>
                        <ul class="list-none space-y-3 pl-2">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>As required by law, such as to comply with a subpoena, or similar legal process;</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>When they believe in good faith that disclosure is necessary to protect their rights, protect your safety or the safety of others, investigate fraud, or respond to a government request;</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>With their trusted service providers who work on their behalf, do not have an independent use of the information we disclose to them, and have agreed to adhere to the rules set forth in this privacy statement.</span>
                            </li>
                        </ul>
                    </section>

                    {{-- 03 Opt-Out Rights --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">03</span>
                            Opt-Out Rights
                        </h2>
                        <p>
                            You can stop all collection of information by the Application easily by uninstalling it. You may use the standard uninstall processes as may be available as part of your mobile device or via the mobile application marketplace or network.
                        </p>
                    </section>

                    {{-- 04 Data Retention Policy --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">04</span>
                            Data Retention Policy
                        </h2>
                        <p>
                            The Service Provider will retain User Provided data for as long as you use the Application and for a reasonable time thereafter. If you&rsquo;d like them to delete User Provided Data that you have provided via the Application, please contact them at
                            <a href="mailto:admin@ntewallpaper.com" class="text-cyan-400 hover:text-white transition-colors underline underline-offset-2">admin@ntewallpaper.com</a>
                            and they will respond in a reasonable time.
                        </p>
                    </section>

                    {{-- 05 Children --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">05</span>
                            Children
                        </h2>
                        <p class="mb-3">
                            The Service Provider does not use the Application to knowingly solicit data from or market to children under the age of 13.
                        </p>
                        <p>
                            The Application does not address anyone under the age of 13. The Service Provider does not knowingly collect personally identifiable information from children under 13 years of age. In the case the Service Provider discovers that a child under 13 has provided personal information, the Service Provider will immediately delete this from their servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact the Service Provider at
                            <a href="mailto:admin@ntewallpaper.com" class="text-cyan-400 hover:text-white transition-colors underline underline-offset-2">admin@ntewallpaper.com</a>
                            so that they will be able to take the necessary actions.
                        </p>
                    </section>

                    {{-- 06 Security --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">06</span>
                            Security
                        </h2>
                        <p>
                            The Service Provider is concerned about safeguarding the confidentiality of your information. The Service Provider provides physical, electronic, and procedural safeguards to protect information the Service Provider processes and maintains.
                        </p>
                    </section>

                    {{-- 07 Changes --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">07</span>
                            Changes
                        </h2>
                        <p class="mb-3">
                            This Privacy Policy may be updated from time to time for any reason. The Service Provider will notify you of any changes to the Privacy Policy by updating this page with the new Privacy Policy. You are advised to consult this Privacy Policy regularly for any changes, as continued use is deemed approval of all changes.
                        </p>
                        <p>
                            This privacy policy is effective as of <strong class="text-white">2026-05-19</strong>.
                        </p>
                    </section>

                    {{-- 08 Your Consent --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">08</span>
                            Your Consent
                        </h2>
                        <p>
                            By using the Application, you are consenting to the processing of your information as set forth in this Privacy Policy now and as amended by us.
                        </p>
                    </section>

                    {{-- 09 Contact Us --}}
                    <section>
                        <h2 class="text-2xl font-bold mb-4 text-white flex items-center">
                            <span class="bg-gray-700/50 p-2 rounded-lg mr-3 text-cyan-400 text-sm">09</span>
                            Contact Us
                        </h2>
                        <p class="mb-4">
                            If you have any questions regarding privacy while using the Application, or have questions about the practices, please contact the Service Provider via email at the address below.
                        </p>
                        <div>
                            <a href="mailto:admin@ntewallpaper.com" class="inline-flex items-center text-cyan-400 hover:text-white transition-colors bg-gray-900/50 px-6 py-3 rounded-lg border border-cyan-900/30 hover:border-cyan-500/50">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                admin@ntewallpaper.com
                            </a>
                        </div>
                    </section>

                </div>
            </article>

        </div>
    </main>

    @include('components.footer')
</body>
</html>
