<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\User;

class EditUser extends Component
{    
    public $user;
    public $name;
    public $is_active;
    public $email;


    public function mount(User $user)
    {   
        $this->$user = $user;
        $this->name = $user->name;
        $this->is_active = $user->is_active;
        $this->email = $user->email;

    }

    public function render()
    {
        return view('livewire.edit-user');
    }

    public function editUser()
    {
        
       $validated = $this->validate([
            'name' => 'string|max:255',
            'is_active' => 'boolean',
            'email' =>  [
                'required',
                'email',
                Rule::unique('users')->ignore($this->user->id),
            ],
        ]);

        $this->user->update($validated);
        
        $this->name = '';
        $this->is_active = '';
        $this->email = '';
        
        return redirect('users');
       
    }
}
