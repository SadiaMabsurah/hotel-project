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
                    margin: 0 auto 20px auto;
                    margin-top: -120px; /* lower logo */
                }

                .authentication-card {
                    padding: 2rem 2.5rem;
                    border-radius: 15px;
                    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
                    background: #ffffff;
                    transition: transform 0.2s ease, box-shadow 0.2s ease;
                    max-width: 400px;
                    margin: auto;
                }

                .authentication-card:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 12px 35px rgba(0,0,0,0.15);
                }

                input[type="email"] {
                    border-radius: 10px;
                    border: 1px solid #ccc;
                    padding: 10px 12px;
                    width: 100%;
                    transition: border-color 0.3s ease, box-shadow 0.3s ease;
                }

                input[type="email"]:focus {
                    border-color: #e63946; /* red focus */
                    box-shadow: 0 0 5px rgba(230,57,70,0.3); /* red glow */
                    outline: none;
                }

                .ms-4, .btn-red {
                    background-color: #e63946; /* red button */
                    color: white;
                    font-weight: bold;
                    padding: 10px 20px;
                    border-radius: 10px;
                    transition: background-color 0.3s ease, transform 0.2s ease;
                }

                .ms-4:hover, .btn-red:hover {
                    background-color: #d62828;
                    transform: translateY(-2px);
                }

                a.underline {
                    color: #888;
                    transition: color 0.3s ease;
                }

                a.underline:hover {
                    color: #e63946;
                }

                .mb-4 { margin-bottom: 1rem; }
                .mt-4 { margin-top: 1rem; }
            </style>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                         class="block mt-1 w-full border-gray-300 focus:border-red-600 focus:ring-red-600" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn-red">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
