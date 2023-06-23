@extends('layout.layout')

@section('container')

<section id="login" class="mt-10 bg-gray-900 dark:bg-gray-900 py-20">
    <div class="mt-10 grid grid-cols-1 mb-10">
        <div class="justify-self-center w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form method="POST" action="{{ route('login') }}" class="space-y-6" action="#">
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Masuk</h5>
                <div>
                    <label for="email" class="@error('email') text-red-600 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="@error('email') border-red-600 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-400 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    @error('email')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div>
                <label for="password" class="@error('password') text-red-600 @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="@error('password') border-red-600 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-400 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    @error('password')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="flex items-start">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input name="remember" id="remember" type="checkbox" value="" class="accent-amber-400 w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-amber-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-amber-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingat aku</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="ml-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lupa Password?</a>
                    @endif
                </div> --}}
                <button type="submit" class="w-full text-white bg-amber-400 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Masuk</button>

            </form>
        </div>
    </div>
</section>

@endsection
