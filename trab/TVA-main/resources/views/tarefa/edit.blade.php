@extends('adminlte::page')


 @section('content')

 <div class="card">

    <div class="card-header">Edit Tarefa</div>

    <div class="card-body">

        <form method="post" action="{{ route('tarefa.update', $tarefas->id) }}" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div class="row mb-3">

                <label class="col-sm-2 col-label-form">Tarefa Titulo</label>

                <div class="col-sm-10">

                    <input type="text" name="TAR_TITULO" class="form-control" value="{{ $tarefa->tar_titulo }}" />

                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-2 col-label-form">Tarefa Descricao</label>

                <div class="col-sm-10">

                    <input type="text" name="TAR_DS" class="form-control" value="{{ $tarefa->tar_ds }}" />

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

                <input type="hidden" name="hidden_id" value="{{ $tar->id }}" />

                <input type="submit" class="btn btn-primary" value="Edit" />

            </div>

        </form>

    </div>

</div>

<script>

    document.getElementsByName('TAR_PRIORIDADE')[0].value = "{{ $tarefa->tar_prioridade }}";

</script>

 @endsection('content')