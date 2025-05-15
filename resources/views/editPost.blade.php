<x-layout>

    <title>Edit Post</title>

    <h1 class="text-2xl mb-4">Edit Post</h1>
    <form action="/editPost/{{$post->id}}" method="POST" class="flex flex-col">
        
        @csrf
        @method('PUT')
        <input class="bg-white text-black p-3 rounded-xl m-3" type="text" name="title" value="{{$post->title}}">
        <textarea class="bg-white text-black p-3 rounded-xl m-3" name="body">{{$post->body}}</textarea>
        <button class="p-2 mt-3 text-white bg-cyan-800 rounded-xl cursor-pointer">Save Changes</button>

    </form>

</x-layout>