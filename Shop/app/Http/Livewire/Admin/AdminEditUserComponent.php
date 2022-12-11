<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
class AdminEditUserComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $utype ="USR";

    public function mount($user_id)
    {
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        // $this->password = $user->password;
        $this->utype = $user->utype;
        
    }
    public function updateUser()
    {

        $this->validate([

            'name'=>'required|min:3|max:30',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'utype'=>'required',
            
        ]);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->utype = $this->utype;  
        
        $user->save();
        session()->flash('message','Dane użytkownika zostały zaktulizowane');
    }
    
        

    public function render()
    {
        return view('livewire.admin.admin-edit-user-component');
    }
}
