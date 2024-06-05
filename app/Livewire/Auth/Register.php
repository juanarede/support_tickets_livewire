<?php

namespace App\Livewire\Auth;



use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Register extends Component
{
    use WithFileUploads;


    public $usuario;
    public $email;
    public $password;
    public $password_confirmation;
    public $role = 'usuario_externo';
    public $puesto;
    public $dependencia;
    public $empresa;
    public $imagen;
    public $sueldo;

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

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->usuario,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'puesto' => $this->role === 'agente' ? $this->puesto : null,
            'dependencia' => $this->role === 'agente' ? $this->dependencia : null,
            'empresa' => $this->role === 'usuario_externo' ? $this->empresa : null,
            'sueldo' => $this->role === 'agente' ? $this->sueldo : null,
        ]);

        if ($this->imagen) {
            $user->addMedia($this->imagen->getRealPath())
                 ->toMediaCollection('images');
        }

        auth()->login($user);

        return redirect()->route('home');
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function render()
    {
        return view('livewire.auth.register', [
            'users' => User::all(),

        ])->layout('components.layouts.register');
    }
}

