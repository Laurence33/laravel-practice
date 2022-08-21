<x-layout>
    <article>
        <h2> {{ $post->title }}</h2>

        {{-- {!! $post->body !!} --}}
        <p>{{ $post->body }}</p>
        <a href="/posts">Back</a>
    </article>
</x-layout>
