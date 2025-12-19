<x-layout>

    <x-slot:header>
        {{ $user->username }}
    </x-slot>
    
    <div>User has created {{ $user->posts_count }} posts</div>

    <div>User has written {{ $user->comments_count }} comments</div>

    <div class="space-y-4">
        @foreach ($posts as $post)
        <div class="block px-4 py-6 border border-gray-200 rounded-lg">
            <a href="/posts/{{ $post->id }}">
                <div class="text-blue-400 font-bold text-small">{{ $post->content }}</div>
                <div class="">Written by: {{ $user->username }}</div>
            </a>
        </div>
        @endforeach
    </div>
        
    {{ $posts->links() }}


</x-layout>