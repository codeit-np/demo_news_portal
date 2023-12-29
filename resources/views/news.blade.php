<x-layout pageTitle="{{ $post->title }}" metaWord="{{ $post->meta_word }}" metaDescription="{{ $post->meta_description }}"
    postTitle="{{ $post->title }}" image="{{ Storage::url($post->image) }}">
    <section>
        <div class="container m-auto grid grid-cols-3 py-5 gap-5">
            <div class="col-span-2">
                <div class="text-sm text-gray-500 py-5">
                    <span><i class="fa-regular fa-clock"></i>
                        {{ $post->created_at->diffForHumans() }}</span>

                    <span><i class="fa-regular fa-newspaper"></i>
                        {{ $post->views }} पटक पढिएको</span>
                </div>
                <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                <img src="{{ Storage::url($post->image) }}" alt="" class="py-2">
                <div class="py-2">
                    {!! $post->description !!}
                </div>
            </div>
            <div class="col-span-1">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus incidunt, minima quis, possimus
                consequuntur officiis illum ut quos aperiam dolore unde asperiores placeat, quod laborum! Corporis
                possimus magni provident doloribus. Aut odio fugit cupiditate quia, unde quo voluptatem quod possimus
                architecto aperiam minus praesentium quibusdam mollitia suscipit ducimus enim. A!
            </div>
        </div>
    </section>
</x-layout>
