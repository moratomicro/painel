<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;
use Illuminate\Support\Facades\Storage;

class PessoasController extends Controller
{
    private $pessoa;
    private $totalPage = 10;

    public function __construct(Pessoas $pessoa)
    {
        $this->pessoa = $pessoa;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lista de Pessoas';

        $pessoas = $this->pessoa->paginate($this->totalPage);
        
        return view('index', compact('pessoas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastro de Pessoas";

        return view('create-edit', compact('title'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');
        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;

        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $fotoPath = $request->foto->store('imgPessoas');

            $dataForm['foto'] = $fotoPath;
        }

        $insert = $this->pessoa->create($dataForm);

        if ($insert)
            return redirect()->route('pessoa.index')->with('success', 'Registro inserido com sucessso!');
        else
            return redirect()->route('pessoa.create')->with('error', 'Falha ao tentar inserir o registro.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoa = $this->pessoa->find($id);

        $title = "Nome: {$pessoa->nome}";

        return view('show', compact('pessoa', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recupera a pessoa pelo seu id
        $pessoa = $this->pessoa->find($id);

        $title = "Editar: {$pessoa->nome}";

        return view('create-edit', compact('title', 'pessoa'));
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
        $pessoa = $this->pessoa->find($id);

        $dataForm = $request->all();
        
        if ($request->hasFile('foto') && $request->foto->isValid()) {
            if ($pessoa->foto && Storage::exists($pessoa->foto)) {
                Storage::delete($pessoa->foto);
            }
            
            $pessoaPath = $request->foto->store('imgPessoas');
            $dataForm['foto'] = $pessoaPath;
        }
                
        $update = $pessoa->update($dataForm);
                
        if($update)
            return redirect()->route('pessoa.index');
        else 
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = $this->pessoa->find($id);
        if (!$pessoa)
            return redirect()->back();

        if ($pessoa->foto && Storage::exists($pessoa->foto)) {
            Storage::delete($pessoa->foto);
        }

        $pessoa->delete();

        return redirect()->route('pessoa.index')->with('sucesso', 'Cadastro excluído com sucesso.');        
    }
}
