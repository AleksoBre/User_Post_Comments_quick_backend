{{-- comments --}}

<x-layout>
    <x-slot:header>
        Comments for {{ $post->content }}
    </x-slot>

    <div class="space-y-4">
    @foreach ($post->comments as $comment)
        <div class="block px-4 py-6 border border-gray-200 rounded-lg">
            <p>{{$comment->content}}</p>
            <p class="text-blue-400 font-bold text-small">Comment written by: {{$comment->user->username}}</p>
        </div>    



    @endforeach
    </div>


</x-layout>