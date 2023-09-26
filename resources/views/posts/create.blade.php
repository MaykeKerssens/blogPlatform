<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create post</h2>
    </x-slot>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Post</h2>
                </div>
                <div class="pull-right">
                    <a class="bg-white text-gray-900 p-2 shadow-sm sm:rounded-lg mx-10" href=""> Return to dashboard</a>
                     {{-- //TODO: Add return button href --}}
                </div>
            </div>
        </div>
        {{-- @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif  --}}
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">


                <p>{{ auth()->user()->name }}</p>
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div>
                            <div>
                                <input type="text" name="title" placeholder="title">
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="text" name="content" placeholder="content">
                            </div>
                        </div>

                    
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
