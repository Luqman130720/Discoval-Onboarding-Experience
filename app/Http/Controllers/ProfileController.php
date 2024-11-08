<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::guard('operator')->user();
        return view('operator::profile.edit',

        compact(
            'user',
        ));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'nip' => 'nullable|string|max:20',
        'email' => 'required|email|max:255',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'rank' => 'required|string|max:10',
        'address' => 'nullable|string',
        'city' => 'nullable|string',
        'province' => 'nullable|string',
        'postal_code' => 'nullable|string|max:10',
        'country' => 'nullable|string',
        'phone_number' => 'nullable|string|max:15',
        'about' => 'nullable|string',
        'place_of_birth' => 'nullable|string',
        'date_of_birth' => 'nullable|date',
        'gender' => 'nullable|string',
        'religion' => 'nullable|string',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'password' => 'nullable|string|min:8|confirmed'
    ]);

    $user = User::findOrFail($id);
    $user->nip = $request->input('nip');
    $user->email = $request->input('email');
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->rank = $request->input('rank');
    $user->address = $request->input('address');
    $user->city = $request->input('city');
    $user->province = $request->input('province');
    $user->postal_code = $request->input('postal_code');
    $user->country = $request->input('country');
    $user->phone_number = $request->input('phone_number');
    $user->about = $request->input('about');
    $user->place_of_birth = $request->input('place_of_birth');
    $user->date_of_birth = $request->input('date_of_birth');
    $user->gender = $request->input('gender');
    $user->religion = $request->input('religion');

    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    if ($request->hasFile('profile_picture')) {
        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }

        $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    $user->save();

    return redirect()->route('operator.profile.edit')->with('success', 'Data pengguna berhasil diperbarui.');
}


}
