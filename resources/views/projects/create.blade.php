@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Creare Proiect Nou</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}">Înapoi</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Probleme!!!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nume Proiect:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nume proiect">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descriere Proiect:</strong>
                    <textarea class="form-control" name="description" placeholder="Descriere proiect"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stare Proiect:</strong>
                    <select name="status" class="form-control">
                        <option value="activ">Activ</option>
                        <option value="finalizat">Finalizat</option>
                        <option value="sters">Șters</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prenume și Nume Responsabil:</strong>
                    <input type="text" name="responsible" class="form-control" placeholder="Prenume și Nume responsabil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de Început:</strong>
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de Sfârșit:</strong>
                    <input type="date" name="end_date" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvează Proiect</button>
            </div>
        </div>
    </form>
@endsection