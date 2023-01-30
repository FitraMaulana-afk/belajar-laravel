<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use App\Models\User;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('belajar.index',compact(['user']));
    } 


    // CARA MENGIRIM ID KE BLADE
    // public function coba(Request $request, $id) {
    //     return view('belajar.index',['id' => $id]);
    // }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function show(Belajar $belajar)
    {
        //
        return 'fitra';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Belajar $belajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belajar $belajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belajar $belajar)
    {
        //
    }
}