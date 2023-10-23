<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showView()
    {
        $users = [
            'firstName' => 'Janusz',
            'lastName' => 'Nowak',
            'city' => 'Poznań',
            'hobby' => ['siatkówka', 'skoki narciarskie', 'żużel', 'piłka ręczna']
        ];
        return view('users', $users);
    }
    public function showArray()
    {
        $users = [
            'firstName' => 'Janusz',
            'lastName' => 'Nowak',
            'city' => 'Poznań',
            'hobby' => ['siatkówka', 'skoki narciarskie', 'żużel', 'piłka ręczna']
        ];
        return view('usersArray', ['users' => $users]);
    }
}
