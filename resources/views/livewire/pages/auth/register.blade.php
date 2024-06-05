<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public string $role = 'agente';
    public string $puesto = '';
    public string $salario = '';
    public string $empresa = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:agente,cliente'],
            'salario' => ['required_if:role,agente', 'numeric'],
            'puesto' => ['required_if:role,agente', 'in:puesto_1,puesto_b'],
            'empresa' => ['required_if:role,cliente'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        // asignar el role al usuario
        $user->assignRole($role);

        // si es agente, crear el arreglo $detalles = ['puesto' => $this->puesto, 'salario' => $this->salario]
        // si es cliente, crear el arreglo $detalles = ['empresa' => $this->empresa]
        $user->detalles = match ($role) {
            'agente' => ['puesto' => $this->puesto, 'salario' => $this->salario],
            'cliente' => ['empresa' => $this->empresa],
            default => []
        };

        // lanzar el evento de registro para el usuario
        event(new Registered($user));

        // logear al usuario recien registrado
        Auth::login($user);
        // regireccionar al usuario a la pagina de dashboard
        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Tipo de Ususario -->
        <div class="mt-4">
            <x-toggle id="label" label="Label in Left" name="toggle" wire:model="role" lg />
            {{ $role }}
        </div>

                @if($role == 'agente')
                    <!-- Sueldo -->
                    <div class="mt-4">
                        <x-input-label for="sueldo" :value="__('Puesto')" />
                        <x-text-input wire:model="sueldo" id="sueldo" class="block w-full mt-1" type="text" name="sueldo" required autofocus autocomplete="sueldo" />
                        <x-input-error :messages="$errors->get('sueldo')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="sueldo" :value="__('Sueldo')" />
                        <x-text-input wire:model="sueldo" id="sueldo" class="block w-full mt-1" type="text" name="sueldo" required autofocus autocomplete="sueldo" />
                        <x-input-error :messages="$errors->get('sueldo')" class="mt-2" />
                    </div>
                @elseif($role == 'cliente')
                    <div class="mt-4">
                        <x-input-label for="sueldo" :value="__('Empresa')" />
                        <x-text-input wire:model="sueldo" id="sueldo" class="block w-full mt-1" type="text" name="sueldo" required autofocus autocomplete="sueldo" />
                        <x-input-error :messages="$errors->get('sueldo')" class="mt-2" />
                    </div>
                @endif
        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
