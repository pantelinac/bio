@extends('main')

@section('title', '| Pacijent')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <h1><a href="{{ route('patient.edit', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">Izmeni</a>

            {{$patient->name}} 


            <a href="{{ route('patient.show', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">OP</a>

            <a href="{{ route('patient.show', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">CA1</a>

            <a href="{{ route('patient.show', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">CA2</a>
        </h1>
        <hr>
    </div>

    <div class="col-md-8">

        <div class="col-md-5 h5">
            Datum rodjenja:
            <hr>

            Adresa: 
            <hr>
            Mesto:  
            <hr>
            Telefon:
            <hr>
            Zanimanje:
            <hr>
            Osetljivost na lekove:
            <hr>
            Licna anamenta:
            <hr>
            Porodicna anamenta:
            <hr>
            PM:
            <hr>
            Krvna grupa:
            <hr>
            RH:
            <hr>
            Porodjaj:
            <hr>
            Abortus:
            <hr>
        </div>

        <div class="col-md-7 h5">

            {{ $patient->date_of_birth    }} 
            <hr>
            {{ $patient->address }}         
            <hr>
            {{ $patient->place   }}         
            <hr>
            {{ $patient->phone   }} 
            <hr>
            {{ $patient->profession  }}     
            <hr>
            {{ $patient->drug_susceptibility}} 
            <hr>
            {{ $patient->personal_anament   }}  
            <hr>
            {{ $patient->family_anament}} 
            <hr>
            {{  $patient->date_last_period  }}
            <hr>
            {{   $patient->blood_type      }}   
            <hr>
            {{ $patient->rh            }} 
            <hr>
            {{ $patient->childbirth     }} 
            <hr>
            {{  $patient->abortion }}       
            <hr>
        </div>
        <!--        <br>
                Datum rodjenja: {{ $patient->date_of_birth    }} 
                <br>
                Adresa:         {{ $patient->address }}         
                <br>
                Mesto:          {{ $patient->place   }}         
                <br>
                Telefon:        {{ $patient->phone   }} 
                <br>
                Zanimanje:      {{ $patient->profession  }}     
                <br>
                Osetljivost na lekove:{{ $patient->drug_susceptibility}} 
                <br>
                Licna anamenta: {{ $patient->personal_anament   }}  
                <br>
                Porodicna anamenta:{{ $patient->family_anament}} 
                <br>
                PM:{{  $patient->date_last_period  }}
                <br>
                Krvna grupa:{{$patient->blood_type }}   
                <br>
                RH:{{ $patient->rh            }} 
                <br>
                Porodjaj:{{ $patient->childbirth     }} 
                <br>
                Abortus:{{  $patient->abortion }}       
                <br>
        -->

    </div>

    <div class="col-md-4">
        <h2>Lista bolesti</h2>
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th width="300px">Vrsta pregleda</th>
                    <th>datum</th>
                    <th width="70px">-</th>
                </tr>
            </thead>
            <tbody></tbody></table>

    </div>


</div>

@endsection