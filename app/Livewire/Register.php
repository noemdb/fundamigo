<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Notifications\SuccessfulRegistration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use WireUi\Traits\Actions;

class Register extends Component
{
    use Actions;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)],
        ];
    }

    public function register()
    {
        $arr = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]; //dd($arr);

        // Validar los datos
        $data = $this->validate(); //dd($data);

        // Crear el usuario
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $user->assignRole('User');
        $user->notify(new SuccessfulRegistration());

        $this->notification()->confirm([
            'title'       => 'Registro exitoso',
            'description' => 'Los datos fueron almacenados éxitosamente',
            'acceptLabel' => 'Inicia tu sesión haciendo click aquí',
            'method'      => 'login',
            'params'      => 'Saved',
        ]);

        $this->clearInputs();       

    }

    public function login()
    {
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register');
    }

    public function clearInputs()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->resetErrorBag();
    }
}
