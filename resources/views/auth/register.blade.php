<script src="https://cdn.tailwindcss.com"></script>

    <x-validation-errors />
    <head>
    <style>
        .bgW {
            background-image: url('{{ asset('assets/wp4189983.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>

<body>
    <div class="flex bgW items-center justify-center w-screen h-screen">
        <div class="bg-orange-500/60 justify-center items-center backdrop-blur-md rounded-lg p-5 w-full mx-[35%]">
        <form class="w-full max-w-md mx-auto" method="POST" action="{{ route('register') }}">
            @csrf
            <p class="text-3xl text-white font-bold mb-5 w-full text-center">Register</p>
            <div class="mb-5">
                <x-label for="name" class="block mb-2 text-sm font-medium text-white" value="{{ __('Name') }}" />
                <x-input id="name" class="bg-orange-900 placeholder:text-orange-600  text-white text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="name" placeholder="Insert Name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 mb-5">
                <x-label for="email" class="block mb-2 text-sm font-medium text-white" value="{{ __('Email') }}" />
                <x-input id="email" class="bg-orange-900 placeholder:text-orange-600  text-white text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="email" name="email" placeholder="Insert Email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4 mb-5">
                <x-label for="password" class="block mb-2 text-sm font-medium text-white" value="{{ __('Password') }}" />
                <x-input id="password" class="bg-orange-900 placeholder:text-orange-600  text-white text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="password" name="password" placeholder="Insert Password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 mb-5">
                <x-label for="password_confirmation" class="block mb-2 text-sm font-medium text-white" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="bg-orange-900 placeholder:text-orange-600  text-white text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="password" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-start mt-4">
                <!--<a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {('Already registered?') }}
                </a>-->

                <button type="submit"
                class="text-orange-500 bg-white mt-5 hover:bg-amber-400 hover:text-white transition duration-200 focus:ring-4 focus:outline-none focus:ring-indigo-200 font-medium rounded-2xl text-sm w-full  px-5 py-2.5 text-center">Register</button>
            </div>
            <p class="mx-auto mt-3 text-center text-orange-900 font-medium text-sm">Already have an account?<a href="/" class="text-white hover:text-amber-400 transition duration-200"> Login Here</a></p>
        </form>
                                </div>
    </div>
</body>