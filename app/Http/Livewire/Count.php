<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @property-read string $lastName
 */
class Count extends Component
{
    public ?string $name = 'Rafael';

    public function render(): View
    {
        return view('livewire.count', [
            'users' => User::all()
        ]);
    }

    public function submit(): void
    {
        User::factory()->create([
            'name' => $this->name
        ]);
    }

    public function send()
    {
        $this->emitTo(
            Todo::class,
            'mudaai',
            $this->name
        );
    }

    public function toggle(string $type)
    {
        if ($type == 'LOWER') {
            $this->name = str($this->name)->lower();
        } else {
            $this->name = str($this->name)->upper();
        }
    }

    public function getLastNameProperty(): string
    {
        return 'JEREMIAS';
    }

}
