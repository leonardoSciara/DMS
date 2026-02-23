<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.users', compact('users'));
    }

    
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->user()->id === $user->id) {
            return back()->with('error', 'Non puoi eliminare il tuo account');
        }

        $user->delete();

        return back()->with('success', 'Utente eliminato');
    }
}