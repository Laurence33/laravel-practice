<x-layout>
    @include('_post-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($category->posts->count())
            <x-posts-grid :posts="$category->posts" />
        @else
            <p class="text-center">No post yet, please check back later</p>
        @endif
    </main>
</x-layout>
