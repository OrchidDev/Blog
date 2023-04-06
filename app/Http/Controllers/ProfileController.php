<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update(UpdateProfileRequest $request)
    {
        $data = $request->validated();

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

//        if ($request->file('profile')) {
//            $data['profile'] = Storage::putFile('profile',
//                $request->file('profile'));
//        }

        if ($request->hasFile('profile')) {

            $file = $request->file('profile');
            $ext = $file->getClientOriginalExtension();

            $file_name = auth()->user()->id . '_' . time() . '.' . $ext;
            $file->storeAs('profile/users', $file_name, 'public_files');

            $data['profile'] = $file_name;
        }

        auth()->user()->update($data);

        $notification = array(
            'message' => 'نمایه با موفقیت به روز رسانی شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
