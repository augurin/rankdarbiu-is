@extends('materials.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Redaguoti medžiagą</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('materials.index') }}"> Atgal</a>

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

  

    <form action="{{ route('materials.update',$material->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pavadinimas:</strong>

                    <input type="text" name="name" value="{{ $material->name }}" class="form-control" placeholder="Pavadinimas">

                </div>
     
          

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tipas:</strong>

                    <input type="text" name="type" value="{{ $material->type }}" class="form-control" placeholder="Tipas">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Dydis:</strong>

                  <input type="text" name="size" value="{{ $material->size }}" class="form-control" placeholder="Size">

              </div>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Plotis:</strong>

                <input type="text" name="width" value="{{ $material->width }}" class="form-control" placeholder="Plotis">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">

              <strong>Spalva:</strong>

              <input type="text" name="colour" value="{{ $material->colour }}" class="form-control" placeholder="Spalva">

          </div>

      </div>

            

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Patvirtinti</button>

            </div>

        </div>

   

    </form>

@endsection