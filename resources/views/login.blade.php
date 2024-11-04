<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    <style>
        .bgW{
            background-image: url('{{ asset('assets/wp4189983.jpg') }}');
            background-size: cover;
            background-position: center;

        }
    </style>
</head>

<body>
    <div class="flex bgW items-center h-screen justify-center overflow-hidden sm:justify-normal">
        <div class="bg-orange-500/60 sm:rotate-[155deg] relative backdrop-blur-md p-10 items-center m-5 sm:m-0 max-w-md sm:max-w-full sm:w-[50vw] sm:h-[165vh] sm:ml-[-10%] sm:flex-col ">
            <img src="{{ asset('assets/PatternJogja.svg') }}" class="absolute z-1 right-[-35%] top-[5%] rotate-[65deg] opacity-[50%]  hidden md:inline" style="min-width:800px;"/>
            <form class=" max-w-md sm:rotate-[-155deg] mx-auto flex flex-col justify-center items-center sm:mt-[48%] sm:mr-[25%] " action="{{ route('login') }}" method="POST">
                <!-- <div class="w-[40%] h-[10%] p-5 bg-white mb-10"><p class="text-2xl text-center font-bold">Logo</p></div> -->
            <p class="text-3xl text-white font-bold mb-5 mr-5 w-full text-center">Login</p>
                @csrf
                <div class="mb-2 w-full">
                    <label for="email" class="block mb-2 text-md font-medium text-white">Your email</label>
                    <input type="email" name="email"
                        class="bg-orange-900 placeholder:text-orange-600  text-white text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Insert Email" required />
                    @error('email')
                        <span class="mt-2 text-xs text-red-600" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-5 w-full">
                    <label for="password" class="block mb-2 text-md font-medium text-white">Your
                        password</label>
                    <input type="password" name="password"
                        class="bg-orange-900 placeholder:text-orange-600 text-white text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Insert Password" required />
                    @error('password')
                        <span class="mt-2 text-xs text-red-600" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit"
                    class="text-orange-500 bg-white mt-5 hover:bg-amber-400 hover:text-white transition duration-200 focus:ring-4 focus:outline-none focus:ring-indigo-200 font-medium rounded-2xl text-sm w-full  px-5 py-2.5 text-center">Login</button>

                <p class="mt-3 text-orange-900 font-medium text-sm ">Don't have an account?<a href="{{ route('register') }}"
                        class="text-white hover:text-amber-400 transition duration-200"> Register Here</a></p>
            </form>
        </div>
    </div>
</body>

</html>
