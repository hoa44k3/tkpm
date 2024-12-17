<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'phone' => 'nullable|string',
    //          'role' => 'required|in:admin,user',
    //         'password' => 'required|string|min:6',
    //         'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //          'role' => $request->role,
    //         'password' => Hash::make($request->password),
            
    //     ]);
    //     if ($request->hasFile('avatar')) {
    //         $avatarPath ['avatar'] = $request->file('avatar')->store('avatars', 'public');
    //         $data['avatar'] = $avatarPath;
    //     }
    //     return redirect()->route('users.index')->with('success', 'User created successfully.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string',
            'role' => 'required|in:admin,user',
            'password' => 'required|string|min:6',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        }
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'avatar' => $avatarPath,  // Lưu đường dẫn ảnh vào cơ sở dữ liệu
        ]);
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // public function update(Request $request, User $user)
    // {
    //     $validated =$request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email,' . $user->id,
    //         'phone' => 'nullable|string',
    //          'role' => 'required|in:admin,user',
    //         'password' => 'nullable|string|min:6',
    //         'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $data = $request->only(['name', 'email', 'phone']);
    //     if ($request->password) {
    //         $data['password'] = Hash::make($request->password);
    //     }
    //     $user->fill($validated);
    //     if ($request->hasFile('avatar')) {
    //         if ($user->avatar) {
    //             Storage::disk('public')->delete($user->avatar);
    //         }
    //         $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
    //     }
    //     $user->update($data);

    //     return redirect()->route('users.index')->with('success', 'User updated successfully.');
    // }
    public function update(Request $request, User $user)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'nullable|string',
        'role' => 'required|in:admin,user',
        'password' => 'nullable|string|min:6',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['name', 'email', 'phone']);
    if ($request->password) {
        $data['password'] = Hash::make($request->password);
    }

    if ($request->hasFile('avatar')) {
        // Xóa ảnh cũ nếu có
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
    }

    $user->update($data);

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}

}
