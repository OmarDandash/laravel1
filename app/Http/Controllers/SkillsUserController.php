<?php

namespace App\Http\Controllers;

use App\Models\SkillsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SkillsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillsUser  $skillsUser
     * @return \Illuminate\Http\Response
     */
    public function show(SkillsUser $skillsUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillsUser  $skillsUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillsUser  $skillsUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillsUser $skillsUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillsUser  $skillsUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillsUser $skillsUser)
    {
        //
    }
}
