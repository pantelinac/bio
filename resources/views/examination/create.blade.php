@extends('main')

@section('title', '|OP')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
        <h1>OP <small> za {{$patient->name}}</small></h1>
        <hr>
       
        
        {!! Form::open(['route' => ['examination.store',$patient],'data-parsley-validate' => '']) !!}
        
            {{Form::label('ultrasonographic_finding', 'Ultrasonografski nalaz:')}}
            {{Form::textarea('ultrasonographic_finding', null, 
            array('class'=>'form-control','rows'=>'3','required'=>'','maxlength'=>'255'))}}
            
            {{Form::label('speculators_finding', 'Nalaz u spekulima:')}}
            {{Form::textarea('speculators_finding', null, 
            array('class'=>'form-control','rows'=>'3','required'=>'','maxlength'=>'255'))}}

            {{Form::label('gin_palp_finding', 'Gin-Palp nalaz:')}}
            {{Form::textarea('gin_palp_finding', null, 
            array('class'=>'form-control','rows'=>'3','required'=>'','maxlength'=>'255'))}}

            {{Form::label('diagnosis', 'Dijagnoza:')}}
            {{Form::textarea('diagnosis', null, 
            array('class'=>'form-control','rows'=>'3','required'=>'','maxlength'=>'255'))}}
            
            {{Form::label('therapy', 'Terapija:')}}
            {{Form::textarea('therapy', null, 
            array('class'=>'form-control','rows'=>'3','required'=>'','maxlength'=>'255'))}}
            
            {{Form::label('note', 'Napomena:')}}
            {{Form::textarea('note', null, 
            array('class'=>'form-control form-spacing-boto','rows'=>'3','required'=>'','maxlength'=>'255'))}}
                
        
        {{Form::submit('Sačuvaj izveštaj', array(
                    'class'=>'btn btn-info btn-lg btn-block'
                       ))}}
        
        {!! Form::close() !!}
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection
