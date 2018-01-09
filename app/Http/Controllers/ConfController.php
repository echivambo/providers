<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('confirmacao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $result = (int)DB::table('prov_cods')
            ->where('codigo', $request->codigo)
            ->where('status', '1')
            ->count();

        if ($result==1)
            return redirect(route('providers.create'));
        else
            return redirect()->back()->with('message', 'Código inválido!');
    }


}
