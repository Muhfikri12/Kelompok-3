<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index',[
            "title" => "Data Pengguna",
            "results" => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create',[
            "title" => "Buat Data User"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        Alert::success('success', "Data Berhasil dibuat");
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show',[
            'title' => "Ubah Data $user->nama",
            'record' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit',[
            'title' => "Ubah Data",
            'record' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('success', "Data Berhasil diubah");
        return redirect()->route('users.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $admin = User::find(1);
        if(Auth::id() == $user->id) {
            Alert::error('error', "User sedang digunakan tidak bisa dihapus");
            return redirect()->route('users.index');
        } elseif ($user->id == 1 ) {
            Alert::error('error', "Administrator tidak bisa dihapus");
            return redirect()->route('users.index');
        } else {
            $user->delete();
            Alert::success('success', "Data Berhasil dihapus");
            return redirect()->route('users.index');

        }
    }
}
