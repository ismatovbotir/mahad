<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Xodim";
        $roles=Role::whereNot('name','Admin')->where('type',1)->get();
        //dd($roles);
        $data=User::paginate(10);
        return view('user.index',compact('data','title','roles'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="xodim";
        $roles=Role::whereNot('name','Admin')->where('type',1)->get();
        return view('user.create',compact('title','roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        //dd($request->all());
       $validated=$request->validated();
       //$role=Role::where('name',$request->input("role"))->first();
       //dd($role->id);
        User::create(
            [
                "name"=>$validated["name"],
                "email"=>$validated["email"],
                "password"=>Hash::make($request->input('password')),
                "role_id"=>$validated["role"]
            ]
            
        );
        return to_route('admin.user.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::where('id',$id)->first();
       
        $title="Xodim";
        $roles=Role::whereNot('name','Admin')->where('type',1)->get();
        return view('user.edit',compact('user','title','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
