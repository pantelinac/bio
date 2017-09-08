@extends('main')

@section('title', '|Nalaz lekara specijaliste')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
        <h1>Nalaz lekara specijaliste <small> za <a href="{{ route('patient.show', $patient->id) }}" 
                                                    class="btn btn-default btn-sm btn-info">{{$patient->name}}</a></small></h1>
        <hr>


        {!! Form::open(['route' => ['examination.store',$patient],'data-parsley-validate' => '']) !!}

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



        {{Form::submit('Sačuvaj izveštaj', array(
                    'class'=>'btn btn-info btn-lg btn-block'
                       ))}}

        {!! Form::close() !!}
    </div>
    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button id="btn1">1</button>
        <button id="btn2">2</button>
        <button id="btn3">3</button>
        <button id="btn4">4</button>
        <button id="btn5">5</button>
        {{$text}}
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
<script>
    confirm('Welome for the first time on my blog!');

    $(document).ready(function () {
        $("#btn1").click(function () {
            $("#test1").val("{{$text}}");
            $("#test2").val("{{$text1}}");
            $("#test3").val("Ovo je treća kolona!");
            $("#test4").val("Ovo je četvrta kolona!");
            $("#test5").val("Ovo je peta kolona!");
        });
        $("#btn2").click(function () {
            $("#test3").val("Ovo je treća kolona!");
        });
        $("#btn3").click(function () {
            $("#test3").val("Ovo je treća kolona!");
            $("#test5").val("Ovo je peta kolona!");
        });
        $("#btn5").click(function () {
            $("#test2").val("Ovo je druga kolona!");

        });
    });
</script>
@endsection


