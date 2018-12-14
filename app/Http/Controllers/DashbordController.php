<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordCrontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_content = view('admin.admin_pages.dashbord');
        $slider_bar = view('admin.admin_pages.slider_bar');
        return view('admin.admin_master')
            ->with('admin_maincontent',$main_content)
            ->with('slider-bar',$slider_bar );
    }
    public function table(){
        $main_content = view('admin.admin_pages.table');
        $slider_bar = view('admin.admin_pages.slider_bar');
        return view('admin.admin_master')  ->with('admin_maincontent',$main_content)  ->with('slider-bar',$slider_bar );
    }
    public function add_category(){
        $main_content = view('admin.admin_pages.add_category');
        $slider_bar = view('admin.admin_pages.slider_bar');
        return view('admin.admin_master')  ->with('admin_maincontent',$main_content)  ->with('slider-bar',$slider_bar );
    }
    public function tbl(){
        $main_content = view('admin.admin_pages.tbl');
        $slider_bar = view('admin.admin_pages.slider_bar');
        return view('admin.admin_master')  ->with('admin_maincontent',$main_content)  ->with('slider-bar',$slider_bar );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dsfsdfsdfdfdfsfdfd
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
