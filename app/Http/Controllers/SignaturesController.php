<?php

namespace App\Http\Controllers;

class SignaturesController extends Controller
{
    /**
     * Display the GuestBook homepage.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('signatures.index');
    }
    public function create()
    {
      return view('signatures.sign');
    }
}
