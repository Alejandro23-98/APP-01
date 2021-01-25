@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edicion del Servicio </div>
                @if(Auth::user()->role == 2)
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form>
                        <div class="form-group row">
                          <label for="costo" class="col-sm-2 col-form-label">Costo</label>
                          <div class="col-sm-10">
                            <input type="text"  class="form-control" id="costo" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="mora" class="col-sm-2 col-form-label">Monto de mora</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="mora">
                          </div>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img1">
                            <label class="custom-file-label" for="img1" data-browse="Bestand kiezen">buscar imagen 1</label>
                          </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img2">
                            <label class="custom-file-label" for="img2" data-browse="Bestand kiezen">buscar imagen 2</label>
                          </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img3">
                            <label class="custom-file-label" for="img3" data-browse="Bestand kiezen">buscar imagen 3</label>
                          </div>
                          <button class="btn btn-primary" type="submit">Nueva version del servicio </button>
                      </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
