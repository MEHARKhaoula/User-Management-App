<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public $name;
    public $is_active=true;
    public $email;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function createUser()
    {
        
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean',
            'email' => 'required|email|unique:users',
        ]);

        
        User::create($validated);

        
        $this->name = '';
        $this->is_active = '';
        $this->email = '';
        
        
        return redirect('users');
       
    }
}