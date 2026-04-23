<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Blog | Premium Reading</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom smooth scrolling and glassmorphism helpers */
        html { scroll-behavior: smooth; }
        .glass-card {
            background: rgba(17, 17, 17, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
    </style>
</head>
<body class="bg-black text-amber-400 selection:bg-amber-500 selection:text-black">

    <nav class="fixed w-full z-50 top-0 bg-black/90 border-b border-amber-900/50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-2xl font-bold tracking-tighter text-amber-500">
                BLOG<span class="text-white">ELITE</span>
            </div>
            <div class="hidden md:flex space-x-8 text-sm uppercase tracking-widest">
                <a href="#" class="hover:text-white transition">Home</a>
                <a href="#explore" class="hover:text-white transition">Explore</a>
                <a href="{{ route('account') }}" class="bg-amber-500 text-black px-5 py-2 rounded-full font-bold hover:bg-amber-400 transition">
                    My Account
                </a>
            </div>
        </div>
    </nav>

    <header class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-amber-900/20 via-black to-black"></div>
        
        <div class="relative z-10 text-center px-4">
            <h1 class="text-6xl md:text-8xl font-black mb-4 tracking-tight text-white">
                Discover <span class="text-amber-500">Insights.</span>
            </h1>
            <p class="text-gray-400 max-w-xl mx-auto text-lg mb-8">
                A curated space for high-end thoughts, tech updates, and exclusive stories.
            </p>
            <a href="#explore" class="inline-block border border-amber-500 px-8 py-4 hover:bg-amber-500 hover:text-black transition duration-300 font-bold uppercase tracking-widest text-sm">
                Start Reading
            </a>
        </div>
    </header>

    <main id="explore" class="max-w-7xl mx-auto px-6 py-24">
        <div class="flex items-center justify-between mb-12 border-b border-amber-900/30 pb-4">
            <h2 class="text-3xl font-bold text-white">Latest Stories</h2>
            <span class="text-amber-600 text-sm tracking-widest uppercase">Vault: {{ count($blogs) }} Posts</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogs as $item)
                <article class="glass-card rounded-xl overflow-hidden group hover:border-amber-500 transition-all duration-500">
                    <div class="h-56 overflow-hidden">
                        @if ($item->image_path)
                            <img src="{{ $item->image_path }}" alt="Cover" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                            <div class="w-full h-full bg-stone-900 flex items-center justify-center">
                                <span class="text-stone-700">No Image</span>
                            </div>
                        @endif
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[10px] uppercase tracking-widest text-amber-600 font-bold">By {{ $item->author }}</span>
                            <span class="text-[10px] text-gray-500">5 min read</span>
                        </div>
                        
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-amber-400 transition">
                            {{ $item->title }}
                        </h2>
                        
                        <p class="text-gray-400 text-sm line-clamp-3 mb-6 leading-relaxed">
                            {{ $item->content }}
                        </p>

                        <a href="{{ route('blog.detail', $item->slug) }}" class="inline-flex items-center text-xs font-bold uppercase tracking-widest text-amber-500 hover:text-white transition">
                            Read Full Story
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </main>

    <footer class="border-t border-amber-900/30 py-12 text-center">
        <p class="text-stone-600 text-sm uppercase tracking-tighter">
            &copy; 2026 BlogElite. Designed for the Modern Web.
        </p>
    </footer>

</body>
</html>