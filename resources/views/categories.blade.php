<x-layout>
    @include('components/nav')

    <h1>Category {{ $category->name }}</h1>
    <hr>
    <h2>Posts</h2>
    <ul>
        @foreach ($category->posts as $post)
            <li><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a> By <a
                    href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a></li>
        @endforeach
    </ul>
</x-layout>
