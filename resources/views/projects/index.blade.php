@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lista Proiectelor</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('projects.create') }}">Adaugă Proiect Nou</a>
        </div>
    </div>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nume Proiect</th>
        <th>Stare</th>
        <th>Acțiuni</th>
    </tr>
    @foreach ($projects as $project)
    <tr>
        <td>{{ $project->name }}</td>
        <td>{{ $project->status }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('projects.show', $project->id) }}">Vizualizare</a>
            <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Editare</a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Ștergere</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection