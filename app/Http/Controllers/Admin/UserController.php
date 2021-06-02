<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UserRequest;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{


    private $user;
    /**
     * @var CategoryRepository
     */
    private $category;

    public function __construct(UserRepository $user,CategoryRepository $category)
    {
        $this->user = $user;
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $users = $this->user->allWithPaginate(10);
        return view('admin.users.index',compact(['users']));
    }


    public function create()
    {
        $cat = $this->category->allActive();
        return view('admin.users.create',compact(['cat']));
    }


    public function store(UserRequest $request)
    {
       $this->user->store($request);
       return redirect(route('users.index'));
    }

    public function show($id)
    {
       //
    }


    public function edit($id)
    {
        $user = $this->user->findById($id);
        $cat = $this->category->allActive();
        return view('admin.users.edit',compact(['user','cat']));
    }


    public function update(EditUserRequest $request, $id)
    {
        $this->user->update($request,$id);
        return redirect(route('users.index'));
    }


    public function destroy($id)
    {
        $this->user->destroy($id);
    }
}
