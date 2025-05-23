<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class ListSearchUser extends Component
{
    public $search = '';

    public function render()
    {
       
        $users = User::where('email', 'like', '%' . $this->search . '%')->get();
        return view('livewire.list-search-user',['users'=>$users])->extends('layouts.admin');
    }
}
