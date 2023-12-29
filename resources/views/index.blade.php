<x-layout pageTitle="{{ $seo->page_title }}" metaWord="{{ $seo->meta_word }}"
    metaDescription="{{ $seo->meta_description }}" image="{{ Storage::url($seo->image) }}" postTitle="">
    <!-- Recent News Section -->
    <section class="py-10">
        <div class="container m-auto">
            @foreach ($recentNews as $news)
                <a href="{{ route('post', $news->id) }}">
                    <div class="text-center border my-5">
                        <h1 class="text-3xl font-bold pt-5">{{ $news->title }}</h1>
                        <img src="{{ Storage::url($news->image) }}" width="100%" alt="" class="my-5">
                        {!! Str::words($news->description, 50, '...') !!}
                        <div>{{ $news->created_at->diffForHumans() }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <!-- Recent NEws Section End -->

    <!-- News by categories -->
    <section>
        @foreach ($categories as $category)
            <div class="container m-auto my-5">
                <div class="py-2 bg-blue-900 px-2 text-white">{{ $category->name }}</div>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    @foreach ($category->posts as $post)
                        <a href="{{ route('post', $post->id) }}">
                            <div class="py-2 hover:shadow">
                                <div class="h-48">
                                    <img src="{{ Storage::url($post->image) }}" class="h-48 w-full object-cover"
                                        alt="">
                                </div>
                                <div class="px-2 py-2">
                                    <h1 class="font-bold">{{ Str::words($post->title, 6, '...') }}</h1>
                                    <div class="py-1">
                                        {!! Str::words($post->description, 10, '...') !!}
                                    </div>

                                    <div class="text-sm text-gray-500"><i class="fa-regular fa-clock"></i>
                                        {{ $post->created_at->diffForHumans() }}</div>

                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>

    <section>
        @foreach ($recentNews as $news)
            <a href="{{ route('post', $news->id) }}">
                <x-card :news="$news" />
            </a>
        @endforeach

    </section>
</x-layout>
