@extends('plans.layout')



@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="card-header">

                <h2>Rankdarbių IS | Planai</h2>

            </div>

            <div class="card-body">

                <a class="btn btn-success" href="{{ route('plans.create') }}"> Kurti naują planą</a>

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
            <th>Pradžios data</th>
            <th>Pabaigos data</th>
            <th>Tipas</th>
            <th>Apibūdinimas</th>

            <th width="280px">Veiksmai</th>

        </tr>


        @foreach ($plans as $plan)
            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $plan->title }}</td>
                <td>{{ $plan->start }}</td>
                <td>{{ $plan->end }}</td>
                <td>{{ $plan->type }}</td>
                <td>{{ $plan->description }}</td>

                <td>

                    <form action="{{ route('plans.destroy', $plan->id) }}" method="POST">



                        <a class="btn btn-info" href="{{ route('plans.show', $plan->id) }}">Rodyti</a>



                        <a class="btn btn-primary" href="{{ route('plans.edit', $plan->id) }}">Redaguoti</a>



                        @csrf

                        @method('DELETE')



                        <button type="submit" class="btn btn-danger">Trinti</button>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>



    <div class="row">

        {!! $plans->links() !!}

        <div id="gantt_here" style='width:100%; height:100%;'></div>
        <script type="text/javascript">
            gantt.config.date_format = "%Y-%m-%d %H:%i:%s";
            gantt.init("gantt_here");

            gantt.load("/api/data");
            var dp = new gantt.dataProcessor("/api");
            dp.init(gantt);
            dp.setTransactionMode("REST");
        </script>

    </div>
@endsection
