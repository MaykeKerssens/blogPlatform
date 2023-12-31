<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Forum
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('posts.create')}}" class="bg-white text-gray-900 p-2 shadow-sm sm:rounded-lg mx-10">Add Post</a>
            @foreach ($posts as $post)

                <div class="bg-gray-200 shadow-sm sm:rounded-lg m-10">
                    <div class="p-4">
                        <div class="flex">
                            <a href="{{ route('post', $post->id) }}">
                                <h4 class="font-bold text-xl text-gray-900">{{ $post->title }}</h4>
                            </a>

                            <p class="pl-4 text-base text-gray-800">{{ $post->user->name }}</p>
                        </div>
                        {{-- //TODO: Add date added --}}
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
            @endforeach
        </div>
    </div>
</x-app-layout>
