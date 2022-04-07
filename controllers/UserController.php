<?php

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectALL('users');

        return view('users', compact('users'));
    }

    public function store()
    {
        app::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
       return redirect('users');
    }
}