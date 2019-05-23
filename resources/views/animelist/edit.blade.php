@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Anime
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('animelist/edit/' . $anime->id) }}" method="POST">

                        {{method_field('PUT')}}

                        @csrf

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" value="{{ $anime->title }}" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number" min="1900" max="2030" name="year" value="{{ $anime->year }}" placeholder="A&ntilde;o">
                        </div>
                        <div class="form-group">
                            <label for="title">genero</label>
                            <input type="text" name="genero" value="{{ $anime->genero }}" id="genero" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">nota</label>
                            <input type="text" name="nota" value="{{ $anime->nota }}" id="nota" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="director" value="{{ $anime->director }}" placeholder="Director">
                        </div>

                        <div class="form-group">
                            <input type="url" name="poster" value="{{ $anime->poster }}" placeholder="url del poster">
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Resumen</label>
                            <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{ $anime->synopsis }}"</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar anime
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
