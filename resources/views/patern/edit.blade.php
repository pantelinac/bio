@extends('main')

@section('title', '| Izmena podataka')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Izmena podataka za {{ $patern->id }} šablon</h1>
        <hr>
        
        {!! Form::model($patern,['route' => ['patern.update', $patern->id ], 'method'=>'PUT']) !!}

        
{{Form::label('ultrasonographic_finding', 'Ultrasonografski nalaz:')}}
        {{Form::textarea('ultrasonographic_finding', null, 
            array('class'=>'form-control','rows'=>'3','maxlength'=>'255','id'=>"test1"))}}

        {{Form::label('speculators_finding', 'Nalaz u spekulima:')}}
        {{Form::textarea('speculators_finding', null, 
            array('class'=>'form-control','rows'=>'3','maxlength'=>'255','id'=>"test2"))}}

        {{Form::label('gin_palp_finding', 'Ginekološki Palpatorni pregled:')}}
        {{Form::textarea('gin_palp_finding', null, 
            array('class'=>'form-control','rows'=>'3','maxlength'=>'255','id'=>"test3"))}}

        {{Form::label('diagnosis', 'Dijagnoza:')}}
        {{Form::textarea('diagnosis', null, 
            array('class'=>'form-control','rows'=>'3','maxlength'=>'255','id'=>"test4"))}}

        {{Form::label('therapy', 'Terapija:')}}
        {{Form::textarea('therapy', null, 
            array('class'=>'form-control form-spacing-boto','rows'=>'3','maxlength'=>'255','id'=>"test5"))}}



        {{Form::submit('Sačuvaj šablon', array(
                    'class'=>'btn btn-info btn-lg btn-block'
                       ))}}
        
        {!! Form::close() !!}
        
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection