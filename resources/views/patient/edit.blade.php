@extends('main')

@section('title', '| Izmena podataka')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Izmena podataka za {{ $patient->name }}</h1>
        <hr>
        
        {!! Form::model($patient,['route' => ['patient.update', $patient->id ], 'method'=>'PUT']) !!}

        {{Form::label('name', 'Prezime i ime:')}}        
        {{Form::text('name', null, 
        array('class'=>'form-control','required'=>'','maxlength'=>'50'))}}

        <div class="col-md-6">


            {{Form::label('date_of_birth', 'Datum rođenja:')}}
            {{Form::text('date_of_birth', null, 
            array('class'=>'form-control','maxlength'=>'25'))}}

            {{Form::label('address', 'Adresa:')}}
            {{Form::text('address', null, 
            array('class'=>'form-control','maxlength'=>'50'))}}

            {{Form::label('place', 'Mesto:')}}
            {{Form::text('place', null, 
            array('class'=>'form-control','maxlength'=>'30'))}}

            {{Form::label('phone', 'Telefon:')}}
            {{Form::text('phone', null, 
            array('class'=>'form-control','maxlength'=>'30'))}}

            {{Form::label('profession', 'Zanimanje:')}}
            {{Form::text('profession', null, 
            array('class'=>'form-control form-spacing-boto','maxlength'=>'50'))}}
        </div>

        <div class="col-md-6 padding">
       


            {{Form::label('drug_susceptibility', 'Osetljivost na lekove:')}}
            {{Form::text('drug_susceptibility', null, 
            array('class'=>'form-control','maxlength'=>'255'))}}

            {{Form::label('personal_anament', 'Lična anamneza:')}}
            {{Form::text('personal_anament', null, 
            array('class'=>'form-control','maxlength'=>'255'))}}

            {{Form::label('family_anament', 'Porodicna anamneza:')}}
            {{Form::text('family_anament', null, 
            array('class'=>'form-control','maxlength'=>'255'))}}
        
        </div>

        <div class="col-md-3">
            {{Form::label('date_last_period', 'PM:')}}
            {{Form::text('date_last_period', null, 
            array('class'=>'form-control','maxlength'=>'25'))}}
        </div>

        <div class="col-md-2">
            {{Form::label('blood_type', 'Krvna grupa:')}}
            {{Form::text('blood_type', null, 
                array('class'=>'form-control','maxlength'=>'2'))}}
        </div>

        <div class="col-md-1">
            {{Form::label('rh', 'RH:')}}
            {{Form::text('rh', null, 
                array('class'=>'form-control','maxlength'=>'2'))}}
        </div>

        <div class="col-md-3">
            {{Form::label('childbirth', 'Porođaj:')}}
            {{Form::text('childbirth', null, 
            array('class'=>'form-control','maxlength'=>'2','numeric'=>''))}}
        </div>

        <div class="col-md-3">
            {{Form::label('abortion', 'Abortus:')}}
            {{Form::text('abortion', null, 
                array('class'=>'form-control','maxlength'=>'2','numeric'=>''))}}
        </div>

        <br>
        
        {{Form::submit('Sačuvaj izmene', array(
                    'class'=>'btn btn-info btn-lg btn-block'
                       ))}}
        
        {!! Form::close() !!}
        
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection