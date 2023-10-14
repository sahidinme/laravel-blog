<?php

namespace App\Http\Controllers\Back;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 1) {
            $users = User::get();
        }else{
            $users = User::whereId(auth()->user()->id)->get();
        }


        return view('back.user.index', [
            'users' => $users
        ]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();

        //mengengkripsi password
        $data['password'] = bcrypt($data['password']);

        //memasukan ke database
        User::create($data);

        return back()->with('success', 'User has been created');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success', 'User has been deleted');
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->validated();

        if ($data['password'] != '') {
            //mengengkripsi password
            $data['password'] = bcrypt($data['password']);

            //mencari dan mengupdate data ke database
            User::find($id)->update($data);
        }else{
            User::find($id)->update([
                'name'  =>  $request->name,
                'email' =>  $request->email
            ]);
        }
        

        return back()->with('success', 'User has been update');
    }
}
