<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Rules\CustomRule;
use Livewire\Component;

class CriarUsuario extends Component
{
    public ?string $name = null;

    public ?string $email = null;

    public bool $saving = false;

    protected function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255']
        ];
    }

    public function render()
    {
        return view('livewire.criar-usuario');
    }

    public function updated($prop)
    {
        $this->validateOnly($prop);
    }

    public function save()
    {
        $this->saving = true;
        $this->validate();
        if($this->name == 'Rafael') {
            $this->addError('name', 'UUUUU Jeremias!!! Deu ruim nesse nome');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => 'qualquer-coisa'
        ]);

        $this->emit('user::created');
        $this->reset('name', 'email');
    }
}
