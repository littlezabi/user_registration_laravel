<x-layout>
    @auth
        <h1 class="block text-2xl">
            User is logged <span class="font-bold text-blue-600">{{ auth()->user()->name }}</span>
        </h1>
    @endauth
    @guest
        <h1 class="block text-2xl">
            User is not logged
        </h1>
    @endguest
    <div class="block mt-4">
        @guest
            <a href="/user/create" class="mt-4 mx-4 text-blue-600 font-bold">Create user</a>
            <a href="/user/login" class="mt-4 mx-4 text-blue-600 font-bold">Login</a>
        @endguest
        @auth
            <a href="/user/logout" class="mt-4 mx-4 text-red-600 font-bold">logout</a>
        @endauth
    </div>
</x-layout>
