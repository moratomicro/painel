<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;

class PessoasController extends Controller
{
    private $pessoa;
    private $totalPage = 16;

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
        $title = "Lista de Pessoas";

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

        return view('create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = 'Cadastro de Pessoas';

        $dataForm = $request->except('_token');
        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;

        $insert = $this->pessoa->create($dataForm);

        if ($insert)
            return redirect()->route('index')->with('success', 'Registro inserido com sucessso!');
        else
            return redirect()->route('create')->with('error', 'Falha ao tentar inserir o registro.');
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

        $title = "Pessoa: {$pessoa->nome}";

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

        $title = "Editar Pessoa: {$pessoa->nome}";

        return view('edit', compact('title', 'pessoa'));
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
        //Recupera todos os dados do formulário
        $dataForm = $request->all();
        
        //Recupera o item para editar
        $pessoa = $this->pessoa->find($id);
        
        //Altera os itens
        $update = $pessoa->update($dataForm);
        
        //Verifica se realmente editou
        if($update)
            return redirect()->route('index');
        else 
            return redirect()->route('edit', $id)->with(['errors' => 'Falha ao editar']);
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

        $delete = $pessoa->delete();

        if($delete)
            return redirect()->route('index');
        else
            return redirect()->route('show', $id)->with(['errors' => 'Falha ao deletar.']);
    }
}
