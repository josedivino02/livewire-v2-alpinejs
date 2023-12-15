<div>
    <h1>LIVEWIRE COUNT COMPONENT</h1>
    <div>
        <x-text-input wire:model="name" />
        {{ $name }}
        <x-primary-button wire:click="toggle('UPPER')">UPPER</x-primary-button>
        <x-primary-button wire:click="toggle('LOWER')">LOWER</x-primary-button>
        <x-primary-button wire:click="submit">CREATE NEW USER</x-primary-button>
        <x-primary-button wire:click="send"> SEND TO TODO</x-primary-button>
    </div>

    <div>
        @foreach($users as $user)
            {{ $user->name }}

        @endforeach
    </div>
</div>
