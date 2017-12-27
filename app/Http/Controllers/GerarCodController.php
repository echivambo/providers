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
       /* $gerCodigo = [
            'email'=>$request->email,
            'user_id'=>$request->user_id,
            'codigo'=>str_random(15),
        ];
            ProvCod::create($gerCodigo);
        */
        if($request->ajax()){
            $post = $request->all();

            $this->gerCodigo->email = $post['email'];
            $this->gerCodigo->user_id = $post['user_id'];
            $this->gerCodigo->codigo = str_random(15);
            $this->gerCodigo->save();

var_dump($this->gerCodigo);
            return redirect()->back()->with('message', 'Código gerado com sucesso! "O código gerado foi enviado para o email enviado"');

            $response = array(
                'status'=>'success',
                'msg'=>'Código gerado com sucesso! "O código gerado foi enviado para o email enviado'
            );
            return Response::json($response);

           //return redirect()->route('gerar-codigo.index')->with('message', 'Código gerado com sucesso! "O código gerado foi enviado para o email enviado"');
        }
           // return redirect()->back()->with->with('message', 'Erro ao gerar código');


    }
    public function gerarCod(Request $request)
    {
        if($request->ajax()){
            $post = $request->all();

            $this->gerCodigo->email = $post['email'];
            $this->gerCodigo->user_id = $post['user_id'];
            $this->gerCodigo->codigo = str_random(15);
            $this->gerCodigo->save();

var_dump($this->gerCodigo);
            return redirect()->back()->with('message', 'Código gerado com sucesso! "O código gerado foi enviado para o email enviado"');

            $response = array(
                'status'=>'success',
                'msg'=>'Código gerado com sucesso! "O código gerado foi enviado para o email enviado'
            );
            return Response::json($response);

           //return redirect()->route('gerar-codigo.index')->with('message', 'Código gerado com sucesso! "O código gerado foi enviado para o email enviado"');
        }
           // return redirect()->back()->with->with('message', 'Erro ao gerar código');


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
