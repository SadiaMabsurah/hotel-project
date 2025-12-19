<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <!-- Custom Logo -->
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/Safa-logo-transparent.png') }}" 
                     alt="Logo" 
                     class="logo-img">
            </a>

            <style>
                .logo-img {
                    width: 200px;   
                    height: auto;               
                    display: block;
                    margin: 0px auto 20px auto;   
                    margin-top: -120px; 
                }

                @media (max-width: 640px) {
                    .logo-img {
                        width: 150px;
                        margin: 30px auto 15px auto;
                    }
                }

                /* Style for the authentication card */
                .authentication-card {
                    padding: 2rem 2.5rem;
                    border-radius: 15px;
                    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
                    background: #ffffff;
                    transition: transform 0.2s ease, box-shadow 0.2s ease;
                }

                .authentication-card:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 12px 35px rgba(0,0,0,0.15);
                }

                /* Style form inputs */
                input[type="email"], input[type="password"] {
                    border-radius: 10px;
                    border: 1px solid #ccc;
                    padding: 10px 12px;
                    transition: border-color 0.3s ease, box-shadow 0.3s ease;
                }

                input[type="email"]:focus, input[type="password"]:focus {
                    border-color: #f28ab2;
                    box-shadow: 0 0 5px rgba(242,138,178,0.3);
                    outline: none;
                }

                /* Style login button */
                .ms-4 {
                    background-color: #e63946;   /* red color */
                    color: white;
                    font-weight: bold;
                    padding: 10px 20px;
                    border-radius: 10px;
                    transition: background-color 0.3s ease, transform 0.2s ease;
                }

                .ms-4:hover {
                    background-color: #d62828;
                    transform: translateY(-2px);
                }

                /* Style forgot password link */
                a.underline {
                    color: #888;
                    transition: color 0.3s ease;
                }

                a.underline:hover {
                    color: #f28ab2;
                }

            </style>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mb-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mb-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
