<div class="border m-10 hover:shadow-md p-10">
    <div class="text-3xl font-bold">{{ $news->title }}</div>
    <img src="{{ Storage::url($news->image) }}" class="w-1/2 my-5" alt="">
    <div>{!! $news->description !!}</div>
    <div>
        <span>{{ $news->created_at->diffForHumans() }}</span>
    </div>
</div>
