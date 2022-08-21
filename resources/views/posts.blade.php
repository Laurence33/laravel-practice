<x-layout>
    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>

            {!! $post->body !!}
        </article>
    @endforeach
</x-layout>
