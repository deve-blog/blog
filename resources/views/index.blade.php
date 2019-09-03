@extends("layout.blogbase")

@section("blog-content")
<ul class="list-section">
    @foreach ($blogList as $item)
        <li class="list-item">
            <h2><a href="/blog/{{ $item->id }}">{{ $item->title }}</a></h2>
            <div class="options">
                <a href="#">{{ $item->created_at_text }}</a>
                <a href="#">留下评论</a>
            </div>
            <div class="list-item-content">
                {{ $item->text }}
            </div>
        </li>
    @endforeach
    <li class="list-item page-control">
        <ul class="pages">
            <li><a href="#"><<</a></li>
            <li><a href="/?=1">1</a></li>
            <li><a href="/?=2">2</a></li>
            <li><a href="/?=3">3</a></li>
            <li><a href="/?=4">4</a></li>
            <li><a href="/?=5">5</a></li>
            <li><a href="#">>></a></li>
        </ul>
    </li>
    @parent
</ul>
@endsection
