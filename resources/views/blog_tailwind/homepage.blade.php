<x-app-layout>
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark: text-gray-100 sm:text-4xl">From the blog</h2>
        <p class="mt-2 text-lg leading-8 text-gray-700 dark:text-gray-300">Dive into a deeper relationship together.</p>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($posts as $post)
                <div class="p-4 md:w-1/3">
                    <div class="h-full rounded-xl shadow-cla-green bg-gradient-to-r from-neutral-200 to-green-700 overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{ $post->getFirstMedia('featured_image') ? $post->getFirstMedia('featured_image')->getUrl() : Arr::random(['/images/empty_blog_1.jpg','/images/empty_blog_2.jpg','/images/empty_blog_3.jpg','/images/empty_blog_4.jpg']) }}"
                        alt="" class="img-fluid" alt="blog">
                        <div class="p-6">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">{{ \Carbon\Carbon::parse($post->published_at)->format('D, d M Y') }}</time>
                                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->name }}</a>
                            </div>
                            <h1 class="title-font text-lg font-medium text-zinc-950 mb-3">{{ $post->title }}</h1>
                            <p class="leading-relaxed mb-3 text-zinc-950">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>

                            <div class="flex items-center flex-wrap ">
                                <a href="{{ route('post', $post->slug) }}">
                                    <button class="bg-gradient-to-r from-green-950 to-green-700 hover:scale-105 drop-shadow-md text-gray-200 shadow-cla-green px-4 py-1 rounded-lg">Learn more</button>
                                </a>
                            </div> <!-- button -->
                        </div> <!-- tile -->
                    </div> <!-- tile outside -->
                </div> <!-- tile itself -->
                @endforeach

            </div>
        </div>
    </section>
        </div>
    </div>


</x-app-layout>
