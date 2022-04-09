@extends('plans.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Kurti naują planą</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('plans.index') }}"> Atgal</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Klaida!</strong> Patikrinkie įvestą informaciją<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('plans.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pavadinimas:</strong>

                <input type="text" title="title" class="form-control" placeholder="Pavadinimas">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pardžios data:</strong>

                <input type="date" title="end" class="form-control">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Pabaigos data:</strong>

                <input type="date" title="end" class="form-control" >

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tipas:</strong>

                <input type="text" title="type" class="form-control" placeholder="Tipas">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Aprašymas:</strong>

                <textarea class="form-control" style="height:150px" name="description" placeholder="Aprašymas"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Patvirtinti</button>

        </div>

    </div>

   

</form>

@endsection