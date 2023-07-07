<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use Barryvdh\DomPDF\Facade\PDF;

class CuentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::all();
        return view('cuenta.index')->with('cuentas', $cuentas);
    }

    public function pdf()
    {
        $cuentas = Cuenta::all();
        $pdf = PDF::loadView('cuenta.pdf', compact('cuentas'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = new Cuenta();

        $cuenta->nombre = $request->get('nombre');
        $cuenta->email = $request->get('email');
        $cuenta->permiso = $request->get('permiso');

        $cuenta->save();

        return redirect('/cuentas');
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
        $cuenta = Cuenta::find($id);
        return view('cuenta.edit')->with('cuenta', $cuenta);
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
        $cuenta = Cuenta::find($id);

        $cuenta->nombre = $request->get('nombre');
        $cuenta->email = $request->get('email');
        $cuenta->permiso = $request->get('permiso');

        $cuenta->save();

        return redirect('/cuentas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuenta = Cuenta::find($id);
        $cuenta->delete();
        return redirect('/cuentas');
    }
}
