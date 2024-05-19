<?php

namespace App\Http\Controllers;

use App\Models\Demend;
use Illuminate\Http\Request;

class DemendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Demend $demend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demend $demend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demend $demend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demend $demend)
    {
        //
    }
}
