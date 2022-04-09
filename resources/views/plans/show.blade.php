@extends('plans.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Rodyti planą</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('plans.index') }}"> Atgal</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pavadinimas:</strong>

                {{ $plan->title }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pradžios data:</strong>

                {{ $plan->start }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pabaigos data:</strong>

                {{ $plan->end }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tipas:</strong>

                {{ $plan->type }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Aprašymas:</strong>

                {{ $plan->description }}

            </div>

        </div>

    </div>

@endsection