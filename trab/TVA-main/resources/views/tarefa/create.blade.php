@extends('adminlte::page')$_COOKIE

@section('content')

@if($errors->any())

<div class="alert alert-danger">

    <ul>

        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

 

@endif

<div class="card">

    <div class="card-header">Add Tarefa</div>

    <div class="card-body">

        <form method="post" action="{{ route('tarefa.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="row mb-3">

                <label class="col-sm-2 col-label-form">Tarefa Titulo</label>

                <div class="col-sm-10">

                    <input type="text" name="TAR_TITULO" class="form-control" />

                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-2 col-label-form">Tarefa descricao</label>

                <div class="col-sm-10">

                    <input type="text" name="TAR_DS" class="form-control" />

                </div>

            </div>

            <div class="row mb-4">

                <label class="col-sm-2 col-label-form">Tarefa Prioridade</label>

                <div class="col-sm-10">

                    <select name="TAR_PRIORIDADE" class="form-control">

                        <option value="Baixa">Baixa</option>

                        <option value="Media">Media</option>

                        <option value="Alta">Alta</option>

                    </select>

                </div>

            </div>

            <div class="row mb-4">

                <label class="col-sm-2 col-label-form">Tarefa Data Conclusao</label>

                <div class="col-sm-10">

                    <input type="date" name="TAR_DT_CONCLUSAO" /> 

                </div>

            </div>

            <div class="text-center">

                <input type="submit" class="btn btn-primary" value="Add" />

            </div>

        </form>

    </div>

</div>

@endsection('content')

 