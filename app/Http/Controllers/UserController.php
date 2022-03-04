<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $title = 'User';
        $user = User::all();
        return Inertia::render('User/Index', [
            'title' => $title,
            'user' => $user
        ]);
    }
    public function show($id)
    {
        $title = 'Profile';
        $user = User::where('id', $id)->first();
        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' => $user
        ]);
    }
}
