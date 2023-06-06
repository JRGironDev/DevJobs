<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Ingresa tu email de registro y te enviaremos un enlace para que puedas recuperarla.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class="py-2" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            <x-link
                :href="route('login')"
            >
                Iniciar Sesión
            </x-link>

            <x-link class="flex justify-center mx-auto align-center text-center"
                :href="route('register')"
            >
                Crear Cuenta
            </x-link>
            
        </div>
        
        <x-primary-button class="w-full justify-center">
            {{ __('Recibir Correo') }}
        </x-primary-button>
    </form>
</x-guest-layout>
