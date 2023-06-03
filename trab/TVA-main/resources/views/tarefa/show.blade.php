@extends('adminlte::page')
 @section('content')

 <div class="card">

    <div class="card-header">

        <div class="row">

            <div class="col col-md-6"><b>Tarefa Details</b></div>

            <div class="col col-md-6">

                <a href="{{ route('tarefa.index') }}" class="btn btn-primary btn-sm float-end">View All</a>

            </div>

        </div>

    </div>

    <div class="card-body">

        <div class="row mb-3">

            <label class="col-sm-2 col-label-form"><b>Tarefa Name</b></label>

            <div class="col-sm-10">

                {{ $tarefas->TAR_TITULO }}

            </div>

        </div>

        <div class="row mb-3">

            <label class="col-sm-2 col-label-form"><b>Tarefa Descricao</b></label>

            <div class="col-sm-10">

                {{ $tarefas->TAR_DS }}

            </div>

        </div>

        <div class="row mb-4">

            <label class="col-sm-2 col-label-form"><b>Tarefa Prioridade</b></label>

            <div class="col-sm-10">

                {{ $tarefas->TAR_PRIORIDADE }}

            </div>

        </div>

    </div>

</div>

@endsection('content')