<x-layout>
    <x-slot:header>
        <div class="flex h-16 items-center justify-between">
            Users
            <a href="/users/create" class="hover:bg-gray-600 hover:text-white rounded-md px-3 py-2 text-xl bg-white/5 font-medium">
                <div>Create a user</div>
            </a>
        </div>
    </x-slot>


    <div class="space-y-4">
        @foreach ($users as $user)
        <div class="block px-4 py-6 border border-gray-200 rounded-lg">
            <a href="/users/{{ $user->id }}">
                <div class="text-blue-400 font-bold text-small">{{ $user->username }}</div>
                <div class=""> {{ $user->posts_count }} posts written</div>
                <div class="">{{ $user->comments_count }}comments written</div>
            </a>
        </div>
        @endforeach
    </div>
        
    {{ $users->links() }}


</x-layout>