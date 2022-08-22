<x-layout>
    @include('_post-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No post yet, please check back later</p>
        @endif
    </main>
    {{-- @include('components/nav')

    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By <a href="/users/{{ $post->user->username }}">{{ $post->user->name }}</a> &#8226; <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a></p>
            {!! $post->excerpt !!}
        </article>
    @endforeach --}}
</x-layout>
