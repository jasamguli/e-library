<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $students = User::all()->where('role_id', 3);
        return view('master.students.index', compact('students'));
    }

    public function create()
    {
        return view('master.students.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'JMBG' => $request->jmbg,
            'role_id' => 3,
            'picture' => '/assets/img/user.jpg'
        ]);
        return redirect()->route('students.index');
    }

    public function show(User $student)
    {
        return view('master.students.show', compact('student'));
    }

    public function edit(User $student)
    {
        return view('master.students.edit', compact('student'));
    }

    public function update(UpdateUserRequest $request, User $student)
    {
        $inputs = $request->validated();
        $student->update($inputs);

        return redirect()->route("students.show", compact('student'));
    }

    public function destroy(User $student)
    {
        $student->delete();
        return redirect()->route("students.index");
    }
}
