<?php

namespace App\Http\Controllers;

use App\Models\ProvCod;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GerarCodController extends Controller
{
    private $gerCodigo;
    public function __construct(ProvCod $gerCodigo)
    {
        $this->gerCodigo=$gerCodigo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controle = DB::table('prov_cods')
            ->join('users', 'users.id', '=', 'prov_cods.user_id')
            ->select('prov_cods.*', 'users.name as user')
            ->where('prov_cods.status', 1)
            ->orderByRaw('prov_cods.id DESC')
            ->get();

        return view('admin/gerarCodigo', compact('controle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();

        $this->gerCodigo->email = $post['email'];
        $this->gerCodigo->user_id = $post['user_id'];
        $this->gerCodigo->codigo = str_random(15);
        $this->gerCodigo->save();

        return redirect()->back()->with('message', 'Código gerado com sucesso! ');

    }


    public function findAll(){
        $data = DB::table('prov_cods')
            ->join('users', 'users.id', '=', 'prov_cods.user_id')
            ->select('prov_cods.*', 'users.name as user')
            ->orderByRaw('prov_cods.id DESC')
            ->get();

        return Response::json($data);

    }
}
