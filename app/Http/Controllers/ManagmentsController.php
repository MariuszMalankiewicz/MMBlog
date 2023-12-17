<?php

namespace App\Http\Controllers;
class ManagmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('managments.index');
    }
}
