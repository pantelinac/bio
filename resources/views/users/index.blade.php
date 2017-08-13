@extends('main')

@section('title', '|Zaposleni')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Zaposleni</div>
            <div class="panel-body">

                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Prezime i ime</th>   
                    <th>Imejl adresa</th>
                    <th>Pacijenti</th>
                    <th>Pregledi</th>
                    <th>Sačuvano</th>
                    <th></th>
                    </thead>

                    <tbody>

                        @foreach ($users as $user)

                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->patient->count() }}</td>
                            <td>{{ $user->examination->count() }}</td>



                            <td>{{ date('j M Y  G:i', strtotime($user->created_at)) }}</td>
                            <td>            
                                    {{ Form::open(['route' => ['users.destroy', $user->id], 'method'=>'DELETE']) }}
                                    {{ Form::submit('Delete', ['class'=>'btn btn-default btn-sm btn-danger']) }}
                                    {{ Form::close() }}
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection
