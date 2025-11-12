<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <!-- minimal Tailwind fallback (kept from original) -->
            <style>/* Tailwind fallback omitted for brevity — keep existing fallback in your file */</style>
        @endif
        <style>
            /* small local tweaks */
            .card-hover:hover { transform: translateY(-8px); box-shadow: 0 16px 48px rgba(0,0,0,0.15); }
            .card-rounded { border-radius: 12px; }
        </style>
    </head>

    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen p-6 lg:p-8">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 rounded-sm border border-[#19140035] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 rounded-sm border border-transparent dark:text-[#EDEDEC]">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 rounded-sm border border-[#19140035] dark:border-[#3E3E3A] dark:text-[#EDEDEC]">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="w-full lg:max-w-4xl mx-auto">
            <section class="writers-container bg-white dark:bg-[#161615] p-6 lg:p-10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.06)]">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="font-medium text-3xl dark:text-[#EDEDEC]">Our Expert Writers</h2>
                    <p class="text-[#706f6c] dark:text-[#A1A09A] mt-2">Passionate educators crafting quality content</p>
                    <div class="mx-auto mt-4 h-1.5 w-16 rounded" style="background: linear-gradient(90deg,#667eea 0%,#764ba2 100%);"></div>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <article class="relative bg-white dark:bg-[#0b0b0b] card-rounded overflow-hidden card-hover transition-all">
                        <div class="h-[120px]" style="background: linear-gradient(135deg,#667eea 0%,#764ba2 100%);"></div>
                        <div class="p-6 pt-0 text-center">
                            <div class="mx-auto -mt-10 w-20 h-20 rounded-full flex items-center justify-center text-white text-2xl font-bold"
                                 style="background: linear-gradient(135deg,#667eea 0%,#764ba2 100%);">
                                MD
                            </div>

                            <h3 class="mt-4 font-medium text-lg dark:text-[#EDEDEC]">Michele Dewantoro</h3>
                            <p class="text-[#1b1b18] dark:text-[#FFEDD5] font-semibold text-sm mt-1">Data Science & AI Specialist</p>
                            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-3 mb-4">Expert in machine learning, data visualization, and AI education for the modern era.</p>
                            <a href="#" class="inline-block px-4 py-1.5 border border-[#667eea] text-[#667eea] rounded-full text-sm hover:bg-[#667eea] hover:text-white transition">View Profile</a>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="relative bg-white dark:bg-[#0b0b0b] card-rounded overflow-hidden card-hover transition-all">
                        <div class="h-[120px]" style="background: linear-gradient(135deg,#f093fb 0%,#f5576c 100%);"></div>
                        <div class="p-6 pt-0 text-center">
                            <div class="mx-auto -mt-10 w-20 h-20 rounded-full flex items-center justify-center text-white text-2xl font-bold"
                                 style="background: linear-gradient(135deg,#f093fb 0%,#f5576c 100%);">
                                JP
                            </div>

                            <h3 class="mt-4 font-medium text-lg dark:text-[#EDEDEC]">Jeremiah Paul</h3>
                            <p class="text-[#c53030] dark:text-[#FFB4B4] font-semibold text-sm mt-1">Security & Hacking Expert</p>
                            <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-3 mb-4">Specializing in network security, penetration testing, and ethical hacking practices.</p>
                            <a href="#" class="inline-block px-4 py-1.5 border border-[#f5576c] text-[#f5576c] rounded-full text-sm hover:bg-[#f5576c] hover:text-white transition">View Profile</a>
                        </div>
                    </article>

                    <!-- add more cards as needed, same structure -->
                </div>
            </section>
        </main>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
