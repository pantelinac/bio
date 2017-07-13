@extends('main')

@section('title', '|Ciljani Akušerski pregled 2')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
        <h1>CA2 <small> za {{$patient->name}}</small></h1>
        <hr>


        {!! Form::open(['route' => ['examination.storeca2',$patient],'data-parsley-validate' => '']) !!}
<div class="col-md-12">
    <div class="col-md-3">
        {{Form::label('Biometry', 'Biom ploda:')}}
        {{Form::text('Biometry', null, 
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

        {{Form::label('HC', 'HC:')}}
        {{Form::text('HC', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('Va', 'Va:')}}
        {{Form::text('Va', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('Vp', 'Vp:')}}
        {{Form::text('Vp', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
    </div>
        <div class="col-md-3">
        {{Form::label('IOD', 'IOD:')}}
        {{Form::text('IOD', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('TCD', 'TCD:')}}
        {{Form::text('TCD', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('CM', 'CM:')}}
        {{Form::text('CM', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('NN', 'NN:')}}
        {{Form::text('NN', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('NB', 'NB:')}}
        {{Form::text('NB', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('HL', 'HL:')}}
        {{Form::text('HL', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('FL', 'FL:')}}
        {{Form::text('FL', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
        </div>
        <div class="col-md-3">
        {{Form::label('AC', 'AC:')}}
        {{Form::text('AC', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('TM', 'TM:')}}
        {{Form::text('TM', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('FHR', 'FHR+:')}}
        {{Form::text('FHR', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('cerviks', 'Cerviks:')}}
        {{Form::text('cerviks', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('Ins_pos', 'Ins. Pos:')}}
        {{Form::text('Ins_pos', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}


        {{Form::label('AFI', 'Kol. plod. tečnosti:')}}
        {{Form::text('TSR', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('Pupil', 'Pupčanik:')}}
        {{Form::text('Pupil', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}
        </div>
        <div class="col-md-3">
        {{Form::label('FD', 'Dinamika pom ploda:')}}
        {{Form::text('FD', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}

        {{Form::label('Ex_Fe_Ha', 'Pregled fetalno srca:')}}
        {{Form::text('Ex_Fe_Ha', null, 
            array('class'=>'form-control','required'=>'','maxlength'=>'255'))}}

        {{Form::label('Width_of_aorta', 'Širina aorte:')}}
        {{Form::text('Width_of_aorta', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}

        {{Form::label('Pul_tree', 'Pulmonalno stablo:')}}
        {{Form::text('Pul_tree', null, 
            array('class'=>'form-control','required'=>'','numeric'=>''))}}
        </div>
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
