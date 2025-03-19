<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberStoreRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Kutubxona a'zosi";
        $roles=Role::where('type',2)->get();
        //dd($roles);
        //$data=Member::paginate(10);
        return view('member.index',compact('title','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberStoreRequest $request)
    {
        $validated=$request->validated();
        //dd($validated);
        $member=Member::create([
            "name"=>$validated["name"],
            "surename"=>$validated["surename"],
            "passport"=>$validated["passport"],
            "email"=>$validated["email"],
            "role_id"=>$validated["role"],
            "phone"=>$validated["phone"]
            
        ]);
        //dd($member);
        return to_route('admin.member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('member.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
