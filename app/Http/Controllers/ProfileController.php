<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('profile', ['user' => $user]); 
    }
    public function edit(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/style/images/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/style/images/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }
        $id = Auth::id();
        User::where(['id' => $id])->update($data);
        return redirect()->route('home')->with([
            'success' => 'updated successfully'
        ]);
    }
    public function image()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('layout.nav', ['user' => $user]); 
    }
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(): RedirectResponse
    {
        Auth::logout();
        return Redirect::to('/');
    }
}