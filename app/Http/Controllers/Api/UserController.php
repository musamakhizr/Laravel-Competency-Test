<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return new UserResource(User::all());
    }

    public function store(Request $request)
    {
        return User::create($request->only(['name', 'email']));
    }

    public function show($id)
    {
        return new UserResource(User::findorfail($id));
        //return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user =  User::findOrFail($id);
        $user->update($request->only(['name', 'email']));
        return $user;
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
    }
}
