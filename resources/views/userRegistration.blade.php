<x-layout>

    <title>User Registration</title>


    <div class="bg-cyan-800 text-white p-10 rounded-2xl">
        <h1 class="text-2xl mb-4">User Registration</h1>
        <form action="/register" method="post" class="flex flex-col space-y-4">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="bg-white text-black p-2 rounded-xl" placeholder="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="bg-white text-black p-2 rounded-xl" placeholder="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="bg-white text-black p-2 rounded-xl" placeholder="password">
            <button class="p-2 mt-3 text-cyan-800 bg-white rounded-xl cursor-pointer">Register</button>
        </form>
    </div>

</x-layout>