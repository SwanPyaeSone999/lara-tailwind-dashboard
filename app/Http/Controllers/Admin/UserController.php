<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::query()
                        ->when(request()->input('search'), function($query,$search){
                            $query->where('name','like', "%{$search}%" )
                            ->orWhere('email','like',"%{$search}%");
                        })
                        ->orderBy('created_at','desc')
                        ->simplePaginate(5)
                        ->withQueryString(),
                'search' => request()->input('search') ?? '',
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make('password'),
        ]);
        return redirect()->route('users.index')->with('success','User was successfully created!');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $data =  request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user->update($data);
        return redirect()->route('users.index')->with('success','User was successfully edited!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','User was successfully deleted!');
    }
}