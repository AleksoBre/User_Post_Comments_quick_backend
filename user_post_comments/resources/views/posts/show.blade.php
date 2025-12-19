<x-layout>
    <x-slot:header>{{ $post->content }}</x-slot>

    Created by: {{ $post->user->username }}
    <br><br>

    <a class="text-blue-500 text-xl" href="/posts/{{ $post->id }}/comments">Show comments</a>


</x-layout>