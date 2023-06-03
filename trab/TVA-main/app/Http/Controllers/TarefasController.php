<?php

namespace App\Http\Controllers;

use App\Models\tarefas;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Tarefas::latest()->paginate(5);

        return view('tarefa.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'TAR_TITULO'          =>  'required',

            'TAR_PRIORIDADE'      =>  'required'

          ]);

            $tarefas = new tarefas;

            $tarefas->TAR_TITULO = $request->TAR_TITULO;

            $tarefas->TAR_DS = $request->TAR_DS;

            $tarefas->TAR_PRIORIDADE = $request->TAR_PRIORIDADE;

            //$tarefas->TAR_DT_CONCLUSAO = $request->TAR_DT_CONCLUSAO;

            $tarefas->save();

            return redirect()->route('tarefa.index')->with('success', 'Tarefa Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(tarefas $tarefas)
    {
        //
        return view('tarefa.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tarefa $tarefa)
    {
        //
        return view('tarefa.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tarefas $tarefas)
    {
        //
        $request->validate([

            'TAR_TITULO'          =>  'required',

            'TAR_PRIORIDADE'      =>  'required'

          ]);

            $tarefas = new tarefas;

            $tarefas->TAR_TITULO = $request->TAR_TITULO;

            $tarefas->TAR_DS = $request->TAR_DS;

            $tarefas->TAR_PRIORIDADE = $request->TAR_PRIORIDADE;

            //$tarefas->TAR_DT_CONCLUSAO = $request->TAR_DT_CONCLUSAO;

            $tarefas->save();

            return redirect()->route('tarefa.index')->with('success', 'Tarefa Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tarefas $tarefas)
    {
        //
        $tarefas->delete();

        return redirect()->route('tarefa.index')->with('success', 'Tarefa Data deleted successfully');
    }
}
