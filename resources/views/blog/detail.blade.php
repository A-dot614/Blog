<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} | BlogElite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-panel {
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }
    </style>
</head>
<body class="bg-black text-stone-300 min-h-screen">

    <nav class="border-b border-amber-900/30 py-6">
        <div class="max-w-4xl mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-amber-500 font-bold tracking-tighter text-xl">
                BLOG<span class="text-white">ELITE</span>
            </a>
            <a href="{{ route('home') }}" class="text-xs uppercase tracking-widest hover:text-white transition">
                &larr; Back to Feed
            </a>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-6 py-12">
        
        @if (session('success'))
            <div class="mb-6 p-4 bg-amber-500/10 border border-amber-500 text-amber-500 rounded-lg text-sm font-bold">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500 text-red-500 rounded-lg text-sm font-bold">
                {{ session('error') }}
            </div>
        @endif

        <article>
            <header class="mb-10 text-center">
                <span class="text-amber-600 uppercase tracking-[0.3em] text-[10px] font-bold">Published by {{ $blog->author }}</span>
                <h1 class="text-4xl md:text-5xl font-black text-white mt-4 leading-tight">
                    {{ $blog->title }}
                </h1>
            </header>

            <div class="relative rounded-2xl overflow-hidden mb-12 shadow-2xl shadow-amber-900/20">
                <img src="{{ $blog->image_path }}" alt="{{ $blog->title }}" class="w-full object-cover max-h-[500px]">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>

            <div class="glass-panel rounded-3xl p-8 md:p-12 mb-12">
                <div class="prose prose-invert prose-amber max-w-none">
                    <p class="text-lg leading-relaxed text-stone-300 first-letter:text-5xl first-letter:font-bold first-letter:text-amber-500 first-letter:mr-3 first-letter:float-left">
                        {{ $blog->content }}
                    </p>
                </div>

                <div class="mt-12 flex flex-wrap gap-4 border-t border-amber-900/30 pt-8">
                    <a href="{{ route('blog.save', $blog->id) }}" class="flex-1 text-center bg-amber-500 text-black font-black uppercase tracking-widest text-xs py-4 rounded-xl hover:bg-amber-400 transition transform hover:-translate-y-1">
                        Save to Library
                    </a>
                    <a href="{{ route('home') }}" class="flex-1 text-center border border-stone-700 text-stone-400 font-black uppercase tracking-widest text-xs py-4 rounded-xl hover:border-amber-500 hover:text-amber-500 transition">
                        Back to Home
                    </a>
                </div>
            </div>
        </article>
    </div>

    <footer class="py-12 text-center">
        <div class="w-12 h-[1px] bg-amber-900 mx-auto mb-6"></div>
        <p class="text-[10px] text-stone-600 uppercase tracking-widest">
            End of Article • Refined Reading Experience
        </p>
    </footer>

</body>
</html>