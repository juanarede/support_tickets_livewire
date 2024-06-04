<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $usuario, $email, $password, $password_confirmation, $role, $puesto, $dependencia, $empresa, $imagen, $sueldo;

    protected $rules = [
        'usuario' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|string|in:agente,usuario_externo',
        'puesto' => 'nullable|string|max:255',
        'dependencia' => 'nullable|exists:users,id',
        'empresa' => 'nullable|string|max:255',
        'imagen' => 'nullable|image|max:1024',
        'sueldo' => 'nullable|numeric',
    ];

    /**
     * Registra un nuevo usuario.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register()
    {
        $this->validate();

        $user = User::create([
            'usuario' => $this->usuario,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'puesto' => $this->role === 'agente' ? $this->puesto : null,
            'dependencia' => $this->role === 'agente' ? $this->dependencia : null,
            'empresa' => $this->role === 'usuario_externo' ? $this->empresa : null,
            'sueldo' => $this->role === 'agente' ? $this->sueldo : null,
            'imagen' => $this->imagen ? $this->imagen->store('users', 'public') : null,
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }

    /**
     * Establece el rol del usuario.
     *
     * @param  string  $role
     * @return void
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function mount()
    {
        $this->setRole('usuario_externo');
    }

    public function deleteImage()
    {
        $this->imagen = null;
    }


    public function render()
    {
        return view('livewire.auth.register')
            ->layout('components.layouts.register');
    }
}
