<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="d-flex justify-content-center mb-4">
                <x-application-logo width=64 height=64 />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/f-register">
            @csrf

            <!-- Name -->
            <div class="row">
                <div class="form-group" style="display: inline-block">
                    <div class="col-6">
                        <x-label for="first_name" :value="__('First Name')" />

                        <x-input id="first_name" class="" type="text" name="first_name" :value="old('first_name')" required autofocus />
                    </div>

                    <div class="col-6">
                        <x-label for="last_name" :value="__('Last Name')" />

                        <x-input id="last_name" class="" type="text" name="last_name" :value="old('last_name')" required autofocus />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-6">
                        <x-label for="phone_number" :value="__('Phone Number')" />

                        <x-input id="phone_number" class="" type="number" name="phone_number" :value="old('phone-number')" required autofocus />
                    </div>

                    <div class="col-6">
                        <x-label for="service_provider" :value="__('Service Provider (eg: MTN)')" />

                        <x-input id="service_provider" class="" type="text" name="service_provider" :value="old('service-provider')" required autofocus />
                    </div>
                </div>
            </div>

            <!-- Username -->
            <div class="row">
                <div class="form-group">
                    <div class="col-6">
                        <x-label for="username" :value="__('UserName')" />

                        <x-input id="username" class="" type="text" name="username" :value="old('username')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="col-6 mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>
            </div>


            <!-- Password -->
            <div class="row">
                <div class="form-group">
                    <div class="col-6 mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-6 mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="" type="password" name="password_confirmation" required />
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a class="text-muted" href="{{ route('tenant.login') }}" style="margin-right: 15px; margin-top: 15px;">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
