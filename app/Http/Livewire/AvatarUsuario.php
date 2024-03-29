<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AvatarUsuario extends Component
{
    use WithFileUploads;

    public $avatar;

    public function render()
    {
        return view('livewire.avatar-usuario');
    }

    public function save()
    {
        $ref = $this->avatar->store('public');
        $user = auth()->user();
        $user->avatar = $ref;
        $user->save();
    }

    public function download()
    {
        return response()->streamDownload(function () {
            echo "name,avatar,email";
        }, 'export.csv');

        return response()->download(
            storage_path('app/' . auth()->user()->avatar)
        );

        return Storage::download(auth()->user()->avatar);
    }
}
