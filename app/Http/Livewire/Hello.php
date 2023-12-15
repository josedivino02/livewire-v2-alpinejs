<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Hello extends Component
{
    public ?string $text = '';

    public ?User $user = null;


    protected array $rules = [
        'text' => ['required', 'min:3']
    ];

    public function mount()
    {
        $this->user = auth()->user();
        ray(__METHOD__ );
    }

    public function render()
    {
        return view('livewire.hello',[
            'user' => $this->user
        ]);
    }

    public function boot()
    {
        ray(__METHOD__ );
    }

    public function booted()
    {
        ray(__METHOD__ );
    }


    public function hydrate()
    {
        ray(__METHOD__ );
    }

    public function dehydrate()
    {
        ray(__METHOD__ );
    }

    public function updating()
    {


        ray(__METHOD__);
    }

    public function updated($prop)
    {
        $this->validateOnly($prop);
        ray(__METHOD__ );
    }

    public function updatingText($value)
    {
        ray(__METHOD__, $value);
    }
}
