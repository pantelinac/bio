@extends('main')

@section('title', '| Pacijent')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <h1><a href="{{ route('patient.edit', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">Izmeni</a>

            {{$patient->name}} 


            <a href="{{ route('examination.create', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">OP</a>

            <a href="{{ route('examination.createca1', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">EUZ 1</a>

            <a href="{{ route('examination.createca2', $patient->id) }}" 
               class="btn btn-default btn-sm btn-info">EUZ 2</a>
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
            Licna anamneza:
            <hr>
            Porodicna anamneza:
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
            <div class="col-md-2">
                {{ Form::open(['route' => ['patient.destroy', $patient->id], 'method'=>'DELETE']) }}
                {{ Form::submit('Delete', ['class'=>'btn btn-default btn-sm btn-danger']) }}
                {{ Form::close() }}
            </div>
            <!--            <h3><a href="{{ route('patient.destroy', $patient->id) }}" 
                           class="btn btn-default btn-sm btn-danger">Izbriši</a></h3>-->

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

    </div>

    <div class="col-md-4">
        <h2>Lista bolesti  <span class="badge">{{ $patient->examinations->count() }}</span></h2>
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th width="300px">Datum</th>
                    <th width="250px">Vrsta pregleda</th>                    
                    <th width="70px">-</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patient->examinations as $examination)
                <tr>                    
                    <td>{{ date('j M Y  G:i', strtotime($examination->created_at)) }}</td>
                    <td>
                        
                    @if ($examination->Exam_type === 'OP')
                            <a href="{{ route('examination.show', $examination->id) }}" 
                               class="btn btn-default btn-sm btn-info">{{ $examination->Exam_type }}</a>
                    @elseif ($examination->Exam_type === 'EUZ1')
                            <a href="{{ route('examination.showca1', $examination->id) }}" 
                               class="btn btn-default btn-sm btn-info">{{ $examination->Exam_type }}</a>
                    @elseif ($examination->Exam_type === 'EUZ2')
                            <a href="{{ route('examination.showca2', $examination->id) }}" 
                               class="btn btn-default btn-sm btn-info">{{ $examination->Exam_type }}</a>
                    @else
                            <a href="{{ route('patient.index') }}" 
                               class="btn btn-default btn-sm btn-info"></a>
                    @endif
                        
                    </td>
                        
                                                                      

                    <td>

                        {{ Form::open(['route' => ['examination.destroy', $examination->id], 'method'=>'DELETE']) }}
                        {{ Form::submit('Delete', ['class'=>'btn btn-default btn-sm btn-danger']) }}
                        {{ Form::close() }}

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>


</div>

@endsection