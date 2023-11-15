<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;


class DeleteUserConfirmation extends ModalComponent
{
    public $user;

    


    public function mount(User $user)
    {
        $this->user = $user;
    }
    public function delete()
    {
        if ($this->user) {

            $user = $this->user;
            $this->user = null;
            $user->delete();
            
            session()->flash('message', 'User deleted successfully.');
          
        }
        return redirect('/users');
    }

    public function render()
    {
        return view('livewire.delete-user-confirmation');
    }
   




}
