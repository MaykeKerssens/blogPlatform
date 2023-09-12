<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Forum
        </h2>
    </x-slot>

    <div class="bg-gray-200 shadow-sm sm:rounded-lg m-10">
        <div class="p-4">
            <div class="flex">
                <h4 class="font-bold text-xl text-gray-900">{{ $post->title }}</h4>
                <p class="pl-4 text-base text-gray-800">{{ $post->user->name }}</p>
                <p>{{ $post->created_at->format('d/m/Y') }}</p>
            </div>
            <p> {{ $post->content}}</p>

            {{-- <form action="{{ route('posts.destroy',$post->id) }}" method="post">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Verwijder</button>
            </form> --}}

            <ul class="p-6">
            <h4 class="font-bold text-l">Comments:</h4>

                @foreach ($post->comments as $comment)
                <li>
                    <div class="m-1 rounded-lg p-2 bg-slate-300">
                        <h4 class="font-bold text-base text-gray-900">{{ $comment->user->name }}:</h4>
                        <p>{{ $comment->content}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-app-layout>
