@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editare Proiect: {{ $project->name }}</h2>
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

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nume Proiect:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $project->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descriere:</strong>
                    <textarea class="form-control" name="description" placeholder="Descriere">{{ $project->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stare:</strong>
                    <select name="status" class="form-control">
                        <option value="activ" {{ $project->status === 'activ' ? 'selected' : '' }}>Activ</option>
                        <option value="finalizat" {{ $project->status === 'finalizat' ? 'selected' : '' }}>Finalizat</option>
                        <option value="sters" {{ $project->status === 'sters' ? 'selected' : '' }}>Șters</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Responsabil:</strong>
                    <input type="text" name="responsible" class="form-control" value="{{ $project->responsible }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de început:</strong>
                    <input type="date" name="start_date" class="form-control" value="{{ $project->start_date }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de sfârșit:</strong>
                    <input type="date" name="end_date" class="form-control" value="{{ $project->end_date }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizează Proiect</button>
            </div>
        </div>
    </form>
@endsection