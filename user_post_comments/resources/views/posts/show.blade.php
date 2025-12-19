<x-layout>
    <x-slot:header>{{ $post->content }}</x-slot>

    <a href="/users/{{ $post->user->id }}">Created by: {{ $post->user->username }}</a>
    <br><br>

    <a class="text-blue-500 text-xl" href="/posts/{{ $post->id }}/comments">Show comments</a>


</x-layout>