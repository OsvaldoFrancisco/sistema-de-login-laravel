<?php

namespace App\Http\Controllers;

use App\Models\Cleinte;
use Illuminate\Http\Request;

class CleinteController extends Controller
{
    //Restrição de usuários
    public function __construct()
    {
        $this->middleware('can:level')->only(methods:'index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view ('cleintes.index',[
            'cleintes' => Cleinte::orderBy('nome')->paginate('5')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cleintes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cleinte = new Cleinte();
        $cleinte->user_id = $request->user_id;
        $cleinte->nome = $request->nome;
        $cleinte->email = $request->email;
        $cleinte->telemovel = $request->telemovel;

        $cleinte->save();
        return redirect('cliente/create')->with('msg','Cliente cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cleinte $cleinte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cleinte $cleinte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cleinte $cleinte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cleinte $cleinte)
    {
        //
    }
}
