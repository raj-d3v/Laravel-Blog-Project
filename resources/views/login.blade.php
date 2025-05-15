<x-layout>

    <title>Login</title>

    <div class="bg-cyan-800 text-white p-10 rounded-2xl">
        <h1 class="text-2xl mb-4">Login</h1>
        <form action="/login" method="post" class="flex flex-col space-y-4">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="loginname" id="name" class="bg-white text-black p-2 rounded-xl" placeholder="name">
            <label for="password">Password</label>
            <input type="password" name="loginpassword" id="password" class="bg-white text-black p-2 rounded-xl" placeholder="password">
            <button class="p-2 mt-3 text-cyan-800 bg-white rounded-xl cursor-pointer">Login</button>
        </form>
    </div>

</x-layout>