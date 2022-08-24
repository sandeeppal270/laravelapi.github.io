<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use Illuminate\Http\Request;

class CandidateProfileController extends Controller
{
    public function profile_save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'pimage'=>'required',
            'rdoc'=>'required',
        ]);

        $pimage = $request->file('pimage')->store('pimages','public');
        $rdoc = $request->file('rdoc')->store('rdocs','public');

        $candidate = CandidateProfile::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'dob'=>$request->dob,
            'state'=>$request->st,
            'gender'=>$request->gender,
            'location'=>json_encode($request->pjl),
            'pimage'=>$pimage,
            'rdoc'=>$rdoc,

        ]);
        return response([
            'messsage'=>'Resume Uploaded',
            'status'=>'success',
            'candidate'=>$candidate
        ],200);
        
        
    }
    public function profile_list(Request $request){
        $candidate = CandidateProfile::all();
        return response([
            'candidate'=>$candidate
        ],200);
    }
}
