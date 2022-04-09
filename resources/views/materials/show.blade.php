@extends('materials.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Rodyti medžiagą</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('materials.index') }}"> Atgal</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pavadinimas:</strong>

                {{ $material->name }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tipas:</strong>

                {{ $material->type }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dydis:</strong>

                {{ $material->size }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Plotis:</strong>

                {{ $material->width }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Spalva:</strong>

                {{ $material->colour }}

            </div>

        </div>

    </div>

@endsection