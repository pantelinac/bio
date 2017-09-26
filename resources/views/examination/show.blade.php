@extends('main')

@section('title', '|Opšti Pregled')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
               
        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="100" width="300"/>
        <br>
        
        <h4 class="text-center"><strong>NALAZ LEKARA SPECIJALISTE</strong></h4>
        <br>
        <h3 class="background-colorr"><small>Prezime i ime: </small><strong>{{$examination->patient->name}}</strong></h3>


                <div class="col-md-6">
            <h5>Broj kartona: <strong>{{$examination->patient->id}}</strong></h5>
            <h5>Datum rođenja: <strong>{{$examination->patient->date_of_birth}}</strong></h5>
            <h5>Adresa: <strong>{{$examination->patient->address}}, 
                    {{$examination->patient->place}}</strong></h5>
            <h5>Krvna grupa i RH faktor: <strong>{{$examination->patient->blood_type}}  
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
                <h4><strong>Ultrasonografski nalaz:</strong></h4>            
            </div>
            <div class="col-md-9">            
                <h5>
                    {!!$examination->ultrasonographic_finding!!}
                    <br><br>
                </h5>           
            </div>
        </div>
        
        <div>
            <div class="col-md-3">            
                <h4><strong>Nalaz u spekulima:</strong></h4>            
            </div>        
            <div class="col-md-9">           
                <h5>
                    {!!$examination->speculators_finding!!}
                <br><br>
                </h5>            
            </div>
        </div>

        <div>
            <div class="col-md-3">            
                <h4><strong>Ginekološki palpatorni pregled:</strong></h4>            
            </div>
            <div class="col-md-9"> 
                <h5>
                    {!!$examination->gin_palp_finding!!}
                    <br><br>
                </h5>            
            </div>
        </div>

        <div>
            <div class="col-md-3">
                <h4><strong>Dijagnoza:</strong></h4>            
            </div>
            <div class="col-md-9">
                <h5>
                    {!!$examination->diagnosis!!}
                    <br><br>
                </h5>            
            </div>
        </div>

        <div>
            <div class="col-md-3">            
                <h4><strong>Terapija:</strong></h4>         
            </div>
            <div class="col-md-9">            
                <h5>{!!$examination->therapy!!}</h5>
                <br>
            </div>        
        </div>



        <br>
        <div class="visible-print-block">          
            <h6 class="text-left">Novi Sad,</h6>
            <h6><strong>{{date('j.m.Y   G:i', strtotime($examination->created_at))}}</strong></h6>   
            <h6 class="text-right">{{$examination->user->name}}</h6>
        </div>

    </div>
</div>


@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection