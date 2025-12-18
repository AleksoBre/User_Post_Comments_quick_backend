<x-layout>
    <x-slot:header>All Posts</x-slot>



    <div class="space-y-4">
        @foreach ($posts as $post)
        <div class="block px-4 py-6 border border-gray-200 rounded-lg">
            <a href="/posts/{{ $post->id }}">
                <div class="text-blue-400 font-bold text-small">{{ $post->content }}</div>
                <div class="">Written by: {{ $post->user->username }}</div>
            </a>
        </div>
        @endforeach
    </div>
        

</x-layout>