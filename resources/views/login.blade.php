<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <form class="w-full max-w-md mx-auto" action="{{ route('login')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                <input type="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Insert Email" required />
                @error('email')
                    <span class="mt-2 text-xs text-red-600" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                    password</label>
                <input type="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Insert Password" required />
                @error('password')
                    <span class="mt-2 text-xs text-red-600" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-indigo-400 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Login</button>

            <p class="absolute mt-3 text-sm">Don't have an account?<a href="{{ route('register') }}" class="text-indigo-500"> Register Here</a></p>
        </form>
    </div>
</body>
</html>
