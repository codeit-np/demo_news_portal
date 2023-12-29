<x-layout pageTitle="{{ $seo->title }}" metaWord="{{ $seo->meta_word }}" metaDescription="{{ $seo->meta_description }}"
    image="{{ $seo->image }}">
    <section>
        <div class="container m-auto grid sm:grid-cols-1 md:grid-cols-3 gap-5">
            <!-- Left Panel -->
            <div class="col-span-2">
                @foreach ($posts as $post)
                    <a href="{{ route('post', $post->id) }}">
                        <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-5 my-2 border items-center">
                            <div class="sm:col-span-1 md:col-span-1 h-48 w-full">
                                <img src="{{ Storage::url($post->image) }}" class="h-full w-full object-cover"
                                    alt="">
                            </div>
                            <div class="sm:col-span-1 md:col-span-2">
                                <h1 class="font-bold text-xl">{{ $post->title }}</h1>
                                <div class="py-2">
                                    {!! Str::words($post->description, 30, '...') !!}
                                </div>
                                <div class="text-sm text-gray-500">
                                    <span><i class="fa-regular fa-clock"></i>
                                        {{ $post->created_at->diffForHumans() }}</span>

                                    <span><i class="fa-regular fa-newspaper"></i>
                                        {{ $post->views }} पटक पढिएको</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Right Panel -->
            <div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat quibusdam minima corporis natus.
                Itaque delectus explicabo quis sed sequi accusamus quas facilis eaque ab quo soluta eligendi beatae sit
                nulla consequuntur, alias maxime iusto ullam modi excepturi, accusantium, quae laudantium assumenda id?
                Quae, quis ducimus! Ipsam, incidunt harum? Labore neque repellat beatae autem minima accusantium
                excepturi sed, assumenda velit! Porro alias asperiores soluta nostrum debitis eaque itaque odio tenetur,
                rem suscipit ea mollitia. Veritatis aliquam animi necessitatibus enim accusamus, exercitationem
                obcaecati possimus hic officia aliquid minima cupiditate ipsum minus id odio inventore autem dolore,
                consequuntur culpa? Ipsum commodi provident deleniti.
            </div>
        </div>
    </section>
</x-layout>
