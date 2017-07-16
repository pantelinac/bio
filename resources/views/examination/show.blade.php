@extends('main')

@section('title', '|Opšti Pregled')


@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>
               
        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="150" width="400"/>
        
        <h2 class="text-center">NALAZ LEKARA SPECIJALISTE</h2>
        <br>
        <h3><small>Prezime i ime: </small><strong>{{$examination->patient->name}}</strong></h3>

        <div class="col-md-6">
            <h5>Broj kartona: <strong>{{$examination->patient->id}}</strong></h5>
            <h5>Datum rodjenja: <strong>{{$examination->patient->date_of_birth}}</strong></h5>
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
            <h5>Lična anamenta: <strong>{{$examination->patient->personal_anament}}</strong></h5>
            <h5>Porodicna anamenta: <strong>{{$examination->patient->family_anament}}</strong></h5>
        </div>

        <hr>
        
        
        

        <div>
            <div class="col-md-3">
                <h5>Ultrasonografski nalaz:</h5>            
            </div>
            <div class="col-md-9">            
                <h5>{{$examination->ultrasonographic_finding}}</h5>           
            </div>
        </div>
        
        <div>
            <div class="col-md-3">            
                <h5>Nalaz u spekulima:</h5>            
            </div>        
            <div class="col-md-9">           
                <h5>{{$examination->speculators_finding}}</h5>            
            </div>
        </div>

        <div>
            <div class="col-md-3">            
                <h5>Gin-Palp. nalaz:</h5>            
            </div>
            <div class="col-md-9"> 
                <h5>{{$examination->gin_palp_finding}}</h5>            
            </div>
        </div>

        <div>
            <div class="col-md-3">
                <h5>Dijagnoza:</h5>            
            </div>
            <div class="col-md-9">
                <h5>{{$examination->diagnosis}}</h5>            
            </div>
        </div>

        <div>
            <div class="col-md-3">            
                <h5>Terapija:</h5>         
            </div>
            <div class="col-md-9">            
                <h5>{{$examination->therapy}}</h5>
            </div>        
        </div>

        <div>
            <div class="col-md-3">
                <h5>Napomena:</h5>            
            </div>
            <div class="col-md-9">
                <h5>{{$examination->note}}</h5>
            </div>
        </div>

        <br>
        <div class="visible-print-block">          
            <h6 class="text-left">Novi Sad,</h6>
            <h6>{{$examination->created_at}}</h6>
            <hr>
            <h6><small>Napomene:</small></h6>
              
        </div>

    </div>
</div>


@endsection
