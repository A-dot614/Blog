<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account | BlogElite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-card {
            background: rgba(17, 17, 17, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 215, 0, 0.15);
        }
        .profile-gradient {
            background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);
        }
    </style>
</head>
<body class="bg-black text-stone-300 min-h-screen pb-20">

    <nav class="border-b border-amber-900/30 py-6 mb-12">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-amber-500 font-bold tracking-tighter text-xl">
                BLOG<span class="text-white">ELITE</span>
            </a>
            <a href="{{ route('home') }}" class="bg-amber-500 text-black px-6 py-2 rounded-full text-xs font-black uppercase tracking-widest hover:bg-amber-400 transition">
                Back to Feed
            </a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-6">
        
        <section class="profile-gradient border border-amber-900/20 rounded-3xl p-8 md:p-12 mb-16 flex flex-col md:flex-row items-center gap-8">
            <div class="w-24 h-24 bg-amber-500 rounded-2xl flex items-center justify-center text-black text-4xl font-black shadow-lg shadow-amber-500/20">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-3xl md:text-4xl font-black text-white mb-2 uppercase tracking-tight">
                    {{ Auth::user()->name }}
                </h1>
                <p class="text-amber-600 font-mono text-sm tracking-widest">{{ Auth::user()->email }}</p>
                <div class="mt-4 inline-block px-4 py-1 bg-amber-900/20 border border-amber-900/50 rounded-full text-[10px] text-amber-500 font-bold uppercase tracking-widest">
                    Premium Member
                </div>
            </div>
        </section>

        <div class="flex items-center gap-4 mb-8">
            <h2 class="text-2xl font-bold text-white uppercase tracking-widest">Saved Library</h2>
            <div class="h-[1px] flex-1 bg-amber-900/30"></div>
        </div>

        @if (Auth::user()->savedBlogs->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach (Auth::user()->savedBlogs as $savedBlog)
                    <div class="glass-card rounded-2xl overflow-hidden flex flex-col group hover:border-amber-500/50 transition-all duration-500">
                        
                        <div class="h-48 overflow-hidden relative">
                            @if ($savedBlog->blog->image_path)
                                <img src="{{ asset($savedBlog->blog->image_path) }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full bg-stone-900 flex items-center justify-center text-stone-700">No Image</div>
                            @endif
                            <div class="absolute top-4 right-4">
                                <a href="{{ route('blog.unsave', $savedBlog->blog->id) }}" class="bg-black/60 backdrop-blur-md p-2 rounded-lg border border-red-900/50 text-red-500 hover:bg-red-500 hover:text-white transition shadow-xl" title="Unsave Article">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="text-xl font-bold text-white mb-3 line-clamp-1 group-hover:text-amber-400 transition">
                                {{ $savedBlog->blog->title }}
                            </h3>
                            <p class="text-stone-500 text-sm line-clamp-2 mb-6 leading-relaxed">
                                {{ $savedBlog->blog->content }}
                            </p>
                            
                            <div class="mt-auto pt-4 border-t border-amber-900/20 flex items-center justify-between">
                                <a href="{{ route('blog.detail', $savedBlog->blog->slug) }}" class="text-[10px] font-black uppercase tracking-[0.2em] text-amber-500 hover:text-white transition">
                                    Continue Reading &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-24 border-2 border-dashed border-stone-900 rounded-3xl">
                <p class="text-stone-600 uppercase tracking-widest text-sm">Your library is currently empty.</p>
                <a href="{{ route('home') }}" class="mt-4 inline-block text-amber-600 hover:text-amber-400 text-xs font-bold transition">Browse Blogs</a>
            </div>
        @endif
    </div>

</body>
</html>