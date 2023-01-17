<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['name' => "Members"]
        ];
        return view('/admin/members/index', ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Show the forms for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['link' => "members", 'name' => "Members"], ['name' => "New Member"]
        ];
        return view('/admin/members/create', ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'first-name' => 'required',
            'last-name' =>'required',
            'email' =>'bail|required|email:rfc,dns,strict,spoof|lowercase',
            'primary-phone' => 'required',
            'country' => 'required',
            'language' => 'required',
            'birth-date' => 'bail|required|before:-15 years',
            'line-1' => 'required',
            'address-country' => 'required',
            'region' => 'required',
        ], [
            'birth-date.before' => 'Must be at least 15 years old.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the forms for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
