@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Servicio </div>
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
                          <button class="btn btn-primary" type="submit">Registrar servicio </button>
                      </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


{{-- <h2>Add a game</h2>
 
<form method="post" action="/games" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="titleid" class="col-sm-3 col-form-label">Game Title</label>
        <div class="col-sm-9">
            <input name="title" type="text" class="form-control" id="titleid" placeholder="Game Title">
        </div>
    </div>
    <div class="form-group row">
        <label for="publisherid" class="col-sm-3 col-form-label">Game Publisher</label>
        <div class="col-sm-9">
            <input name="publisher" type="text" class="form-control" id="publisherid"
                   placeholder="Game Publisher">
        </div>
    </div>
    <div class="form-group row">
        <label for="releasedateid" class="col-sm-3 col-form-label">Release Date</label>
        <div class="col-sm-9">
            <input name="releasedate" type="text" class="form-control" id="releasedateid"
                   placeholder="Release Date">
        </div>
    </div>
    <div class="form-group">
        <label for="gameimageid" class="col-sm-3 col-form-label">Game Image</label>
        <div class="col-sm-9">
            <input name="image" type="file" id="gameimageid" class="custom-file-input">
            <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit Game</button>
        </div>
    </div>
    
</form>
</div> --}}
@endsection