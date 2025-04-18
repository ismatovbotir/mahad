<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberStoreRequest;
use App\Http\Requests\MemberUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Member;
use App\Models\MembersLog;
use App\Models\Course;

use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Kutubxona a'zolari";
        $roles=Role::where('type',2)->get();
        //$courses=Course::where('status',1)->get();
        //dd($roles);
        //$data=Member::paginate(10);
        return view('member.index',compact('title','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="Kutubxona a'zosi";
        $roles=Role::where('type',2)->orderBy('name','asc')->get();
        //$courses=Course::where('status',1)->get();
        //dd($courses);
        return view('member.create',compact('title','roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberStoreRequest $request)
    {
        //dd($request->all());
        $validated=$request->validated();
        //dd($validated);
        
        $bday = date("Y-m-d", strtotime($validated['bday']));
        $member=Member::create([
            "name"=>$validated["name"],
            "surename"=>$validated["surename"],
            "patronymic"=>$request["patronymic"],
            "passport"=>$validated["passport"],
            "email"=>$validated["email"],
            "bday"=>$bday,
            "role_id"=>$validated["role"],
            "course_id"=>$request["course"],
            "phone"=>$validated["phone"],
            "card"=>$request["card"],
            "address"=>$request["address"]

            
        ]);
        $file=$request->file('photo');
        if($file!=null){
            $ext=$file->getClientOriginalExtension();
            $newFileName=$member->id.'.'.$ext;
            $path=$file->storeAs('members',$newFileName,'public');
            $member->img='storage/'.$path;
            $member->save();

        }


        MembersLog::create(
            [
                'member_id'=>$member->id,
                'user_id'=>Auth::user()->id,
                'log'=>'created'
            ]
        );

        //dd($member);
        return to_route('admin.member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title="Kutubxona a'zosi";
        $member=Member::where('id',$id)->first();
        
        //dd($member);
        //$roles=Role::where('type',2)->orderBy('name','asc')->get();
        return view('member.show',compact('title','member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $member=Member::where('id',$id)->first();
       $roles=Role::where('type',2)->get();
       $courses=Course::orderBy('name','asc')->get();
       $currentCourse=$member->course_id;
       //dd($member);
       $title=$member->name." malumotlarini sozlash";
       return view('member.edit',compact('member','title','roles','courses','currentCourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberUpdateRequest $request, string $id)
    {
        $validated=$request->validated();
        $bday = date("Y-m-d", strtotime($validated['bday']));
        $member=Member::where('id',$id)->first();
        
        $member->name=$validated["name"];
        $member->surename=$validated["surename"];
        $member->passport=$validated["passport"];
        $member->email=$validated["email"];
        $member->bday=$bday;
        $member->role_id=$validated["role"];
        $member->course_id=$request["course"];
        $member->phone=$validated["phone"];
        $member->card=$request["card"];
        $member->address=$request["address"];
        $member->patronymic=$request["patronymic"];    
        

        $file=$request->file('photo');
        if($file!=null){
            $ext=$file->getClientOriginalExtension();
            $newFileName=$id.'.'.$ext;
            $path=$file->storeAs('members',$newFileName,'public');
            $member->img='storage/'.$path;
            
        }
        $member->save();

        //dd($member);
        MembersLog::create(
            [
                'member_id'=>$id,
                'user_id'=>Auth::user()->id,
                'log'=>'updated'
            ]
        );
        return to_route('admin.member.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function block($id){

        

    }
}
