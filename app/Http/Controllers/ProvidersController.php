<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProviderRequest;
use App\Models\Provider;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

use Validator;


class ProvidersController extends Controller
{
    private $provider;
    public function __construct(Provider $provider)
    {
        $this->provider=$provider;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers=$this->provider->all();
        return view('admin.viewsProviders', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ramos = DB::table('ramos')->where('status', 1)->get();
        $paises = DB::table('countries')->get();

        return view('createProviders', compact('ramos'), compact('paises'));
    }

    public function validates(Request $request)
    {

                $validatedData = $request->validate($request->all(),
                    [
                        'nome_empresa' => 'required|unique:providers|min:2|max:155',
                        'pessoa_contacto' => 'required|min:2|max:150',
                        'alvara'=>'required',
                        'nuit'=>'required|numeric|min:4|max:25',
                        'pais'=>'required',
                        'provincia'=>'required',
                        'cidade'=>'required',
                        'bairro'=>'required|string|min:2|max:60',
                        'endereco_fisico'=>'required|string|min:2|max:255',
                        'end_numero'=>'required|numeric|min:1|max:15',
                        'ramo_atividade'=>'required',
                        'telefone_fixo'=>'numeric|min:5|max:20',
                        'fax'=>'numeric|min:5|max:20',
                        'celular'=>'required|numeric|min:5|max:20',
                        'email'=>'required|string|email|min:3|max:100',
                        'nome_banco'=>'required|string|min:2|max:100',
                        'numero_conta'=>'required||unique:providers|min:2|max:30|same:prov_cods',
                        'nib'=>'required|numeric|unique:providers|min:2|max:30',
                        'nome_agencia'=>'required|string|min:2|max:100',
                        'bancaria'=>'required|string|min:2|max:255',

            ]
        );


        if ($validator->passes()) {


            return response()->json(['success'=>'Added new records.']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);






    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->somethingElseIsInvalid()) {
                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderRequest $request)
    {



        $valido = DB::table('prov_cods')->where('email', $request->email)->value('status');

        if($valido) {
            $this->provider->nome_empresa = $request->nome_empresa;
            $this->provider->pessoa_contacto = $request->pessoa_contacto;
            $this->provider->alvara = $this->storeFile($request, 'alvara');
            $this->provider->nuit = $request->nuit;
            $this->provider->pais = $request->pais;
            $this->provider->provincia = $request->provincia;
            $this->provider->cidade = $request->cidade;
            $this->provider->bairro = $request->bairro;
            $this->provider->endereco_fisico = $request->endereco_fisico;
            $this->provider->end_numero = $request->end_numero;
            $this->provider->ramo_atividade = $request->ramo_atividade;
            $this->provider->telefone_fixo = $request->telefone_fixo;
            $this->provider->fax = $request->fax;
            $this->provider->celular = $request->celular;
            $this->provider->email = $request->email;
            $this->provider->nome_banco = $request->nome_banco;
            $this->provider->numero_conta = $request->numero_conta;
            $this->provider->nib = $request->nib;
            $this->provider->nome_agencia = $request->nome_agencia;
            $this->provider->bancaria = $this->storeFile($request, 'bancaria');
            $this->provider->save();

            $prov = $this->provider;

            //dd($this->provider);

            // return redirect()->back()->with('message', 'Provedor salvo com sucesso!');



            return view('printProvider', compact('prov'));
        }else
            return redirect()->back()->with('message', 'Email inválido!');
    }

    private function storeFile(Request $request, $fileKey){
        $file = $request->file($fileKey);
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

        if ($uploaded)
            return $destinationPath;
        else
            return redirect()->route('providers.index')->with('message', 'Provedor Erro ao carregar '.$fileName);
    }

    /**
        return redirect()->route('providers.index')->with('message', 'Provedor salvo com sucesso!');
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
