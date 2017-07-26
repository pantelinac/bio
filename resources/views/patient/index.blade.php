@extends('main')

@section('title', '|Pacijenti')

@section('search_name')
<form class="navbar-form navbar-left" action="search_name" method="post">
    <div class="form-group">
        <input type="text" name="search_name" class="form-control" placeholder="Pretraži po imenu">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>

    <button type="submit" class="btn btn-default">Pretraži</button>
</form>
@endsection

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-10 col-md-offset-1'>        

        <h1>Pacijenti</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Prezime i ime</th>                
                <th>Datum rodjenja</th>
                <th>Adresa</th>
                <th>Mesto</th>
                <th>Telefon</th>
                <th>Profesija</th>
                <th>Krvna grupa</th>
                <th>RH</th>
                <th>Osetljivost na lekove</th>
                <th>Porodjaj</th>
                <th>Abortus</th>
                <th>Licna anamenta</th>
                <th>Porodicna anamenta</th>
                <th>PM</th>
                <th>Created At</th>
                <th></th>
                </thead>

                <tbody>

                    @foreach ($patients as $patient)

                    <tr>
                        <th><a href="{{ route('patient.show', $patient->id) }}" 
                               class="btn btn-default btn-sm btn-info">{{ $patient->id }}</a></th>



                        <th><a href="{{ route('patient.show', $patient->id) }}" 
                               class="btn btn-default btn-sm btn-info">{{ $patient->name }}</a></th>
                        <td>{{ $patient->date_of_birth }}</td>
                        <th>{{ $patient->address }}</th>
                        <th>{{ $patient->place }}</th>
                        <th>{{ $patient->phone }}</th>
                        <th>{{ $patient->profession }}</th>
                        <th>{{ $patient->blood_type }}</th>
                        <th>{{ $patient->rh }}</th>
                        <th>{{ $patient->drug_susceptibility }}</th>
                        <th>{{ $patient->childbirth }}</th>
                        <th>{{ $patient->abortion }}</th>
                        <th>{{ $patient->personal_anament }}</th>
                        <th>{{ $patient->family_anament }}</th>
                        <th>{{ $patient->date_last_period }}</th>


                        <td>{{ date('j M Y  G:i', strtotime($patient->created_at)) }}</td>
                        <td><a 
                                href="{{ route('patient.edit', $patient->id) }}" 
                                class="btn btn-default btn-sm btn-warning">Edit</a></td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

            <div class="text-center">
                {!! $patients->links() !!}
            </div>

        </div>

    </div>


    @endsection

    @section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    @endsection

