<x-layout>
    @include('components/nav')
    <h1>User Page</h1>
    <hr>
    <h3>{{ $user->name }}</h3>

    <h2>Latest Posts</h2>
    <ol>
        @foreach ($user->posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ol>
</x-layout>
