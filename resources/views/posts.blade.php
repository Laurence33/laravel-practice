<x-layout>
    @include('components/nav')

    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a> &#8226; <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a></p>
            {!! $post->excerpt !!}
        </article>
    @endforeach
</x-layout>
