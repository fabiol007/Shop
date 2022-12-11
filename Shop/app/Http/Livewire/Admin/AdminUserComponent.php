<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUserComponent extends Component
{
    use WithPagination;

    public $user_id;

    public function deleteUser()
    {
        $user = User::find($this->user_id);
        $user->delete();
        session()->flash('message','Użytkownik został usunięty!');
    }
    public function render()
    {
        $users = User::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-user-component',['users'=>$users]);
    }
}
