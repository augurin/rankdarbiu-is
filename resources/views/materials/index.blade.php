@extends('materials.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="card-header">

                <h2>Rankdarbių IS | Medžiagos</h2>

            </div>

            <div class="card-body">

                <a class="btn btn-success" href="{{ route('materials.create') }}"> Kurti naują medžiagą</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>#</th>

            <th>Pavadinimas</th>
            <th>Tipas</th>
            <th>Dydis</th>
            <th>Plotis</th>
            <th>Spalva</th>

            <th width="280px">Veiksmai</th>

        </tr>

        @foreach ($materials as $material)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $material->name }}</td>
            <td>{{ $material->type }}</td>
            <td>{{ $material->size }}</td>
            <td>{{ $material->width }}</td>
            <td>{{ $material->colour }}</td>

            <td>

                <form action="{{ route('materials.destroy',$material->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('materials.show',$material->id) }}">Rodyti</a>

    

                    <a class="btn btn-primary" href="{{ route('materials.edit',$material->id) }}">Redaguoti</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Trinti</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $materials->links() !!}

      

@endsection