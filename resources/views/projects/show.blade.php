@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $project->name }}</h2>
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}">Înapoi</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriere:</strong>
                {{ $project->description }}
            </div>
            <div class="form-group">
                <strong>Stare:</strong>
                {{ $project->status }}
            </div>
            <div class="form-group">
                <strong>Responsabil:</strong>
                {{ $project->responsible }}
            </div>
            <div class="form-group">
                <strong>Data de Începere:</strong>
                {{ $project->start_date }}
            </div>
            <div class="form-group">
                <strong>Data de Sfârșit:</strong>
                {{ $project->end_date }}
            </div>
        </div>
    </div>

    <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Editare</a>
    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
        {{ csrf_field() }}
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ștergere</button>
    </form>
@endsection