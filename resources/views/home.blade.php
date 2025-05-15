<x-layout>

    <title>Home</title>

    <div>
        @auth
            <h1 class="text-3xl mb-10">Welcome to the Home Page</h1>

            <form action="/logout" method="post" class="text-center">
                @csrf
                <button class="bg-cyan-800 text-white rounded-xl p-3 cursor-pointer">Log out</button>
            </form>

            <div class="mt-10">
                <h2 class="text-2xl text-center">Create a New Post</h2>
                <form action="/createPost" method="POST" class="flex flex-col">
                    @csrf
                    <input type="text" name="title" placeholder="post title" class="bg-white text-black p-2 rounded-xl m-3">
                    <textarea name="body" placeholder="body content..." class="bg-white text-black p-2 rounded-xl m-3"></textarea>
                    <button class="p-2 m-3 text-white bg-cyan-800 rounded-xl cursor-pointer">Save Post</button>
                </form>
            </div>

            <div class="mt-10">
                <h2>All Posts</h2>

                @foreach ($posts as $post)
                    <div class="bg-gray-500 p-5 m-5">
                        <h3>{{$post['title']}} ~ '{{$post->user->name}}'</h3>
                        <p class="mb-5">{{$post['body']}}</p>
                        <a class="p-2 text-white bg-cyan-800 rounded-xl cursor-pointer" href="/editPost/{{$post->id}}">Edit</a>

                        <form action="/deletePost/{{$post->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="p-2 mt-3 text-white bg-cyan-800 rounded-xl cursor-pointer">Delete</button>
                        </form>
                    </div>
                @endforeach

            </div>

        @else
            <div class="flex flex-col">
                <a class="text-xl bg-cyan-800 text-white p-3 rounded-xl mb-5" href="/userRegistration">User Registration</a>

                <a class="text-xl bg-cyan-800 text-white p-3 rounded-xl " href="/login">Login</a>
            </div>
        @endauth
    </div>


</x-layout>