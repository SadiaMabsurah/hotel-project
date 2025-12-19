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
                    margin-top: -120px; 
                }

                /* Style for the authentication card */
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

                /* Style form inputs */
                input[type="text"], input[type="email"], input[type="password"] {
                    border-radius: 10px;
                    border: 1px solid #ccc;
                    padding: 10px 12px;
                    width: 100%;
                    transition: border-color 0.3s ease, box-shadow 0.3s ease;
                }

                /* Focus effect for each input type */
                input[type="text"]:focus,
                input[type="email"]:focus,
                input[type="password"]:focus {
                    border-color: #e63946; /* red focus */
                    box-shadow: 0 0 5px rgba(230,57,70,0.3); /* red glow */
                    outline: none;
                }

                /* Style buttons */
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

                /* Style links */
                a.underline {
                    color: #888;
                    transition: color 0.3s ease;
                }

                a.underline:hover {
                    color: #e63946;
                }

                /* Space between form elements */
                .mb-4 { margin-bottom: 1rem; }
                .mt-4 { margin-top: 1rem; }
            </style>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mb-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            </div>

            <div class="mb-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mb-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mb-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-between mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
