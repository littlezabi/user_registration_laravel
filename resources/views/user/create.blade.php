<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="/user/register" class="space-y-6" action="#" method="POST">
                @csrf
                <h2 class="text-3xl uppercase text-center  font-bold">Create new account</h2>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>

                    <div class="mt-3 mb-3">
                        @error('fullname')
                            <p class="text-red-400 text-sm bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" required placeholder="Enter fullname"
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 bg-slate-400 outline-none shadow-sm ring-1 ring-inset ring-slate-500 placeholder:text-slate-700 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>

                    <div class="mt-3 mb-3">
                        @error('email')
                            <p class="text-red-400 text-sm bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <input id="email" name="email" type="email" required
                            placeholder="Enter email address..."
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 bg-slate-400 outline-none shadow-sm ring-1 ring-inset ring-slate-500 placeholder:text-slate-700 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="mt-3 mb-3">
                        @error('password')
                            <p class="text-red-400 text-sm bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required placeholder="Enter password..."
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 bg-slate-400 outline-none shadow-sm ring-1 ring-inset ring-slate-500 placeholder:text-slate-700 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>

                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            placeholder="Confirm password..."
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 bg-slate-400 outline-none shadow-sm ring-1 ring-inset ring-slate-500 placeholder:text-slate-700 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>

                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        up</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Have already account
                <a href="/user/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign In.</a>
            </p>
        </div>
    </div>
</x-layout>
