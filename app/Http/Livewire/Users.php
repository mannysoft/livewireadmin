<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Users extends Component
{
    public $count = 0;

    public $message;

    public $name = 'Manny'; // its available in blade like <input type="text" wire:model="name">

    public function mount()
    {
        $this->message = 'Hello ' . @auth()->user()->name;
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all(),
        ]);
    }
}
