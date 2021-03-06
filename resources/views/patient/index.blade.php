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
    <div class='col-md-12'>        

        <h1>Pacijenti</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Prezime i ime</th>                
                <th>Datum rođenja</th>
                <th>Adresa</th>
                <th>Mesto</th>
                <th>Telefon</th>
                <th>Krvna grupa</th>
                <th>RH</th>
                <th>Osetljivost na lekove</th>
                <th>Porođaj</th>
                <th>Abortus</th>
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
                        <th>{{ $patient->blood_type }}</th>
                        <th>{{ $patient->rh }}</th>
                        <th>{{ $patient->drug_susceptibility }}</th>
                        <th>{{ $patient->childbirth }}</th>
                        <th>{{ $patient->abortion }}</th>

                        
                        <td><a 
                                href="{{ route('patient.edit', $patient->id) }}" 
                                class="btn btn-default btn-sm btn-warning">Izmeni</a></td>
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
