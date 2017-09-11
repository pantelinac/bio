@extends('main')

@section('title', '|Opšti Pregled')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
               
        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="100" width="350"/>
        
        <h4 class="text-center"><strong>NALAZ LEKARA SPECIJALISTE</strong></h4>
        <br>
        <h4 class="background-colorr"><small>Prezime i ime: </small><strong>{{$examination->patient->name}}</strong></h4>

        <div class="col-md-6">
            <h5>Broj kartona: <strong>{{$examination->patient->id}}</strong></h5>
            <h5>Datum rođenja: <strong>{{$examination->patient->date_of_birth}}</strong></h5>
            <h5>Adresa: <strong>{{$examination->patient->address}}, 
                    {{$examination->patient->place}}</strong></h5>
            <h5>Krvna grupa i RH faktor: <strong>{{$examination->patient->blood_type}}, 
                    {{$examination->patient->rh}}</strong></h5>
            <h5>Osetljivost na lekove: <strong>{{$examination->patient->drug_susceptibility}}</strong></h5>
            <h5>PM: <strong>{{$examination->patient->date_last_period}}</strong></h5>
        </div>

        <div class="col-md-6 hidden-print">
            <h5>Telefon: <strong>{{$examination->patient->phone}}</strong></h5>
            <h5>Zanimanje: <strong>{{$examination->patient->profession}}</strong></h5>
            <h5>Porođaj: <strong>{{$examination->patient->childbirth}}</strong></h5>
            <h5>Abortus: <strong>{{$examination->patient->abortion}}</strong></h5>
            <h5>Lična anamneza: <strong>{{$examination->patient->personal_anament}}</strong></h5>
            <h5>Porodicna anamneza: <strong>{{$examination->patient->family_anament}}</strong></h5>
        </div>

        <hr>
        
        
        

        <div>
            <div class="col-md-3">
                <h4 class="background-colorr"><strong>Ultrasonografski nalaz:</strong></h4>            
            </div>
            <div class="col-md-9">            
                <h4>{{$examination->ultrasonographic_finding}}
                {{$examination->ultrasonographic_finding2}}
                {{$examination->ultrasonographic_finding3}}
                {{$examination->ultrasonographic_finding4}}
                {{$examination->ultrasonographic_finding5}}
                {{$examination->ultrasonographic_finding6}}
                {{$examination->ultrasonographic_finding7}}
                </h4>           
            </div>
        </div>
        
        <div>
            <div class="col-md-3">            
                <h4 class="background-colorr"><strong>Nalaz u spekulima:</strong></h4>            
            </div>        
            <div class="col-md-9">           
                <h4>{{$examination->speculators_finding}}
                {{$examination->speculators_finding2}}
                {{$examination->speculators_finding3}}
                {{$examination->speculators_finding4}}</h4>            
            </div>
        </div>

        <div>
            <div class="col-md-3">            
                <h4 class="background-colorr"><strong>Ginekološki Palpatorni pregled:</strong></h4>            
            </div>
            <div class="col-md-9"> 
                <h4>{{$examination->gin_palp_finding}}
                    {{$examination->gin_palp_finding2}}
                    {{$examination->gin_palp_finding3}}
                    {{$examination->gin_palp_finding4}}
                    {{$examination->gin_palp_finding5}}
                    {{$examination->gin_palp_finding6}}
                </h4>            
            </div>
        </div>

        <div>
            <div class="col-md-3">
                <h4 class="background-colorr"><strong>Dijagnoza:</strong></h4>            
            </div>
            <div class="col-md-9">
                <h4>{{$examination->diagnosis}}
                {{$examination->diagnosis2}}
                {{$examination->diagnosis3}}
                </h4>            
            </div>
        </div>

        <div>
            <div class="col-md-3">            
                <h4 class="background-colorr"><strong>Terapija:</strong></h4>         
            </div>
            <div class="col-md-9">            
                <h4>{{$examination->therapy}}
                {{$examination->therapy2}}
                {{$examination->therapy3}}</h4>
            </div>        
        </div>



        <br>
        <div class="visible-print-block">          
            <h6 class="text-left">Novi Sad,</h6>              
           
        </div>

    </div>
</div>


@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection