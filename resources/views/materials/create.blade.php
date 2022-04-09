@section('content')
<div class="card">
  <div class="card-header">Medžiagos</div>
  <div class="card-body">
      
      <form action="{{ url('materials') }}" method="post">
        {!! csrf_field() !!}
        <label>Pavadinimas</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Tipas</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Dydis</label></br>
        <input type="text" name="size" id="size" class="form-control"></br>
        <label>Plotis</label></br>
        <input type="text" name="width" id="width" class="form-control"></br>
        <label>Spalva</label></br>
        <input type="text" name="colour" id="colour" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
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

                <input type="text" name="name" class="form-control" placeholder="Pavadinimas">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">
  
                  <strong>Tipas:</strong>
  
                  <input type="text" title="type" class="form-control" placeholder="Tipas">
  
              </div>
  
          

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="form-group">

              <strong>Dydis:</strong>

              <input type="text" size="size" class="form-control" placeholder="Dydis">

          </div>

      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Plotis:</strong>

            <input type="text" width="width" class="form-control" placeholder="Plotis">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="form-group">

          <strong>Spalva:</strong>

          <input type="text" colour="colour" class="form-control" placeholder="Spalva">

      </div>
    </div>

  </div>

        

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Patvirtinti</button>

        </div>

    </div>

   

</form>

@endsection