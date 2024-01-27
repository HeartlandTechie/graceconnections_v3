@php use Carbon\Carbon; @endphp
<x-app-layout>


    <main class="mt-10 m-12">

        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
                <h2 class="text-4xl font-semibold text-stone-50 leading-tight">
                    {{ $post->title }}
                </h2>
                <a
                    href="#"
                    class="py-2 text-stone-400 inline-flex items-center justify-center mb-2"
                >
                    {{ $post->category->name }}
                </a>
                {{ Carbon::parse($post->published_at)->format('D, d M Y') }}
            </div>

            <img src="https://images.unsplash.com/photo-1587614387466-0a72ca909e16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="w-full object-cover lg:rounded" style="height: 28em;"/>
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">

            <div class="px-4 lg:px-0 mt-12 text-amber-50 text-lg leading-relaxed w-full lg:w-3/4">
                {!! $post->content !!}

            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="{{ $post->author->getFirstMedia('avatar')?->getUrl() }}"
                             class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-stone-50 text-sm">{{ $post->author->name }} </p>
                            <p class="font-semibold text-stone-50 text-xs"> Editor </p>
                        </div>
                    </div>
                    <p class="text-amber-50 py-3">
                        Mike writes about technology
                        Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it.
                    </p>
                    <button class="px-2 py-1 text-white-100 bg-green-700 flex w-full items-center justify-center rounded">
                        Follow
                        <i class='bx bx-user-plus ml-2' ></i>
                    </button>
                </div>
            </div>

        </div>
    </main>
    <!-- main ends here -->
</x-app-layout>
