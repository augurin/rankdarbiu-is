@extends('plans.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Redaguoti planą</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('plans.index') }}"> Atgal</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Klaida!</strong> Patikrinkite įvestą informaciją<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('plans.update',$plan->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pavadinimas:</strong>

                    <input type="text" title="title" value="{{ $plan->title }}" class="form-control" placeholder="Pavadinimas">

                </div>
     
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pradžios data:</strong>

                    <input type="date" start="start" value="{{ $plan->start }}" class="form-control">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pabaigos data:</strong>

                    <input type="date" end="end" value="{{ $plan->end }}" class="form-control" placeholder="Pabaigos data">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tipas:</strong>

                    <textarea class="form-control" style="height:150px" name="type" placeholder="Tipas">{{ $plan->type }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Aprašymas:</strong>

                    <textarea class="form-control" style="height:150px" name="description" placeholder="Aprašymas">{{ $plan->description }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Patvirtinti</button>

            </div>

        </div>

   

    </form>

@endsection