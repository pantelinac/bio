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

    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
<script>

    $(document).ready(function () {
        $("#btn1").click(function () {
            $("#test1").val("{{$patern->ultrasonographic_finding}}");
            $("#test2").val("{{$patern->speculators_finding}}");
            $("#test3").val("{{$patern->gin_palp_finding}}");
            $("#test4").val("{{$patern->diagnosis}}");
            $("#test5").val("{{$patern->therapy}}");
        });
        $("#btn2").click(function () {
            $("#test1").val("{{$patern2->ultrasonographic_finding}}");
            $("#test2").val("{{$patern2->speculators_finding}}");
            $("#test3").val("{{$patern2->gin_palp_finding}}");
            $("#test4").val("{{$patern2->diagnosis}}");
            $("#test5").val("{{$patern2->therapy}}");
        });
        $("#btn3").click(function () {
            $("#test1").val("{{$patern3->ultrasonographic_finding}}");
            $("#test2").val("{{$patern3->speculators_finding}}");
            $("#test3").val("{{$patern3->gin_palp_finding}}");
            $("#test4").val("{{$patern3->diagnosis}}");
            $("#test5").val("{{$patern3->therapy}}");
        });
        $("#btn4").click(function () {
            $("#test1").val("{{$patern4->ultrasonographic_finding}}");
            $("#test2").val("{{$patern4->speculators_finding}}");
            $("#test3").val("{{$patern4->gin_palp_finding}}");
            $("#test4").val("{{$patern4->diagnosis}}");
            $("#test5").val("{{$patern4->therapy}}");
        });
        $("#btn5").click(function () {
            $("#test1").val("{{$patern5->ultrasonographic_finding}}");
            $("#test2").val("{{$patern5->speculators_finding}}");
            $("#test3").val("{{$patern4->gin_palp_finding}}");
            $("#test4").val("{{$patern5->diagnosis}}");
            $("#test5").val("{{$patern5->therapy}}");

        });
    });
</script>
@endsection


