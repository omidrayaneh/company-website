<?php

namespace App\Repositories\Eloquent;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }
    public function findById($id)
    {
        return User::with('categories')->findOrFail($id);
    }

    public function allWithPaginate($number)
    {
        return User::with('categories')->paginate($number);
    }

    public function store( $request)
    {

        $inputs = $request->only(['name', 'email', 'password','role','active','categories']);

        $user = new User();
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->password =Hash::make($inputs['password']) ;

        if ($inputs['role'] =='user')
            $user->role = 1;
        elseif ($inputs['role'] =='manager')
            $user->role = 2;
        elseif ($inputs['role'] =='admin')
            $user->role = 3;

        if (isset($inputs['active']) )
            $user->active = true;
        else
            $user->active = false;

        $user->save();
        if (isset($inputs['categories']))
        $user->categories()->sync($inputs['categories']);

        toast('کاربر با موفقیت اضافه شد','success');

    }


    public function update($request, $id)
    {
        $inputs = $request->only(['name', 'email', 'password','role','active','categories']);

        $user = $this->findById($id);
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];

        if (isset($inputs['password'] ))
           $user->password =Hash::make($inputs['password']) ;

        if ($inputs['role'] =='user')
            $user->role = 1;
        elseif ($inputs['role'] =='manager')
            $user->role = 2;
        elseif ($inputs['role'] =='admin')
            $user->role = 3;

        if (isset($inputs['active']) )
            $user->active = true;
        else
            $user->active = false;


        $user->save();
        if (isset($inputs['categories']))
        $user->categories()->sync($inputs['categories']);

        toast('کاربر با موفقیت بروز شد','success');

    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
