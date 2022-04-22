<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\UserStoreRequest;
use App\Http\Requests\Operator\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = auth()->user()->children()->paginate();
        return view('operator.user.index', compact('users'));
    }

    public function create()
    {
        $types = ['STOCK', 'SHOP', 'OPERATOR'];
        return view('operator.user.create', compact('types'));
    }

    public function store(UserStoreRequest $request)
    {
        $attrs = $request->only('name', 'email', 'type');
        $attrs += [
            'password'  => Hash::make($request->input('password')),
            'parent_id' => auth()->id()
        ];

        User::create($attrs);
        return to_route('operator.user.index');
    }

    public function show(User $user)
    {
        return view('operator.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        $types = ['STOCK', 'SHOP', 'OPERATOR'];
        return view('operator.user.edit', compact('user', 'types'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $attrs = $request->only('name', 'email', 'type');

        if ($request->input('password')) {
            $attrs['password'] = Hash::make($request->input('password'));
        }

        $user->update($attrs);
        return to_route('operator.user.show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return to_route('operator.user.index');
    }
}
