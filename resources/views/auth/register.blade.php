<script src="https://cdn.tailwindcss.com"></script>

    <x-validation-errors />

    <div class="flex items-center justify-center h-screen w-screen">
        <form class="w-full max-w-md mx-auto" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-5">
                <x-label for="name" class="block mb-2 text-sm font-medium text-gray-900" value="{{ __('Name') }}" />
                <x-input id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="name" placeholder="Insert Name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 mb-5">
                <x-label for="email" class="block mb-2 text-sm font-medium text-gray-900" value="{{ __('Email') }}" />
                <x-input id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="email" name="email" placeholder="Insert Email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4 mb-5">
                <x-label for="password" class="block mb-2 text-sm font-medium text-gray-900" value="{{ __('Password') }}" />
                <x-input id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="password" name="password" placeholder="Insert Password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 mb-5">
                <x-label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="password" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-start mt-4">
                <!--<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {('Already registered?') }}
                </a>-->

                <x-button class="bg-indigo-400 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-200 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    {{ __('Register') }}
                </x-button>
            </div>
            <p class="absolute mt-3 text-sm">Already have an account?<a href="/" class="text-indigo-500"> Login Here</a></p>
        </form>
    </div>

