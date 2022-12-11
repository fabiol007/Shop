<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;


class AdminAddUserComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $utype ="USR";


    public function addUser()
    {

        $this->validate([

            'name'=>'required|min:3|max:30|unique:users,name',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
            'utype'=>'required',

        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->utype = $this->utype;
        
        
        

        
        $user->save();
        session()->flash('message','Użytkownik został dodany');
    }






    public function render()
    {
        return view('livewire.admin.admin-add-user-component');
    }
}
