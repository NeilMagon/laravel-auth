@extends('layouts.admin')

@section('content')
    <h1>{{ $project->name }}</h1>
    <div class="my-1">
        <strong>ID:</strong> {{ $project->id }}
    </div>
    <div class="my-1">
        <strong>Slug:</strong> {{ $project->slug }}
    </div>
    <div class="my-1">
        <strong>Nome cliente:</strong> {{ $project->client_name }}
    </div>
    <div class="my-1">
        <strong>Crato il:</strong> {{ $project->created_at }}
    </div>
    <div class="my-1">
        <strong>Ultima modifica:</strong> {{ $project->updated_at }}
    </div>
    <div class="my-1">
        <strong>Descrizione:</strong> {{ $project->summary }}
    </div>
@endsection
