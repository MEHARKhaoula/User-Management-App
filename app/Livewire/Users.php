<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
class Users extends Component
{

    use WithPagination;
    //public $users;
    public $search ='';

    // public function mount()
    // {
    //     $this->users = User::all();
    // }


    public function render()
    {    
        
        if(! $this->search){
           $users = User::paginate(5);
        }
        else{
          
            $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%') 
            ->paginate(5);
        }

        
        return view('livewire.users',[
            'users'=>$users
        ]);
    }

  
}
