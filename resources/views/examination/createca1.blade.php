@extends('main')

@section('title', '|Ciljani Akušerski pregled 1')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
        <h1>CA1 <small> za {{$patient->name}}</small></h1>
        <hr>
       
        
        {!! Form::open(['route' => ['examination.storeca1',$patient],'data-parsley-validate' => '']) !!}
        <div class='col-md-2 '>
            
            {{Form::label('CRL', 'CRL:')}}
            {{Form::text('CRL', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('BPD', 'BPD:')}}
            {{Form::text('BPD', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

            {{Form::label('Hem', 'Hem:')}}
            {{Form::text('Hem', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('OFD', 'OFD:')}}
            {{Form::text('OFD', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
        </div>
        
        <div class='col-md-2'>
            {{Form::label('HC', 'HC:')}}
            {{Form::text('HC', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('FL', 'FL:')}}
            {{Form::text('FL', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('AC', 'AC:')}}
            {{Form::text('AC', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('TM', 'TM:')}}
            {{Form::text('TM', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
        </div>
        
        <div class='col-md-3 '>
            {{Form::label('NT', 'NT:')}}
            {{Form::text('NT', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('NB', 'NB:')}}
            {{Form::text('NB', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('FMU', 'FMU:')}}
            {{Form::text('FMU', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('PKDV', 'PKDV:')}}
            {{Form::text('PKDV', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
        </div>
            
        <div class='col-md-3'>
            {{Form::label('TSR', 'TSR:')}}
            {{Form::text('TSR', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'100'))}}

            {{Form::label('FHR', 'FHR+:')}}
            {{Form::text('FHR', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('AFI', 'Količina plod tečnosti:')}}
            {{Form::text('TSR', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
            
            {{Form::label('Ins_tro', 'Insercija trofoblasta:')}}
            {{Form::text('Ins_tro', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
            
            {{Form::label('FD', 'Dinamika pom ploda:')}}
            {{Form::text('FD', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
            
            
        </div>
            
            

        <div>

            {{Form::label('AK_PAL', 'Akušerski Palpatorni pregled:')}}
            {{Form::textarea('AK_PAL', null, 
            array('class'=>'form-control','rows'=>'2','required'=>'','maxlength'=>'100'))}}

            {{Form::label('diagnosis', 'Dijagnoza:')}}
            {{Form::textarea('diagnosis', null, 
            array('class'=>'form-control','rows'=>'2','required'=>'','maxlength'=>'255'))}}
            
            {{Form::label('therapy', 'Terapija:')}}
            {{Form::textarea('therapy', null, 
            array('class'=>'form-control','rows'=>'2','required'=>'','maxlength'=>'255'))}}
            
            {{Form::label('note', 'Napomena:')}}
            {{Form::textarea('note', null, 
            array('class'=>'form-control form-spacing-boto','rows'=>'2','maxlength'=>'255'))}}
                
        </div>
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