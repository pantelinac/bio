@extends('main')

@section('title', '|Ciljani akušerski ultrazvučni pregled u prvom trimestru trudnoće')


@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>

        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="100" width="350"/>

        <h3 class="text-center">CILJANI AKUŠERSKI ULTRAZVUČNI PREGLED U PRVOM TRIMESTRU TRUDNOĆE</h3>

        <br>
        <h4><small>Prezime i ime: </small><strong>{{$examination->patient->name}}</strong></h4>

        <div class="col-md-6">
            <h6>Broj kartona: <strong>{{$examination->patient->id}}</strong></h6>
            <h6>Datum rodjenja: <strong>{{$examination->patient->date_of_birth}}</strong></h6>
            <h6>Adresa: <strong>{{$examination->patient->address}}, 
                    {{$examination->patient->place}}</strong></h6>
            <h6>Krvna grupa i RH faktor: <strong>{{$examination->patient->blood_type}}, 
                    {{$examination->patient->rh}}</strong></h6>
            <h6>Osetljivost na lekove: <strong>{{$examination->patient->drug_susceptibility}}</strong></h6>
            <h6>PM: <strong>{{$examination->patient->date_last_period}}</strong></h6>
        </div> 

        <div class="col-md-6 hidden-print">
            <h6>Telefon: <strong>{{$examination->patient->phone}}</strong></h6>
            <h6>Zanimanje: <strong>{{$examination->patient->profession}}</strong></h6>
            <h6>Porođaj: <strong>{{$examination->patient->childbirth}}</strong></h6>
            <h6>Abortus: <strong>{{$examination->patient->abortion}}</strong></h6>
            <h6>Lična anamneza: <strong>{{$examination->patient->personal_anament}}</strong></h6>
            <h6>Porodicna anamneza: <strong>{{$examination->patient->family_anament}}</strong></h6>
        </div>



        <div>
            <br>
            <h6>
                <strong class="well well-sm">
                    CRL: {{$examination->CRL}} mm, BPD: {{$examination->BPD}} mm, 
                    Hem: {{$examination->Hem}} mm, OFD: {{$examination->OFD}} mm, 
                    HC: {{$examination->HC}} mm, FL: {{$examination->FL}} mm, 
                    AC: {{$examination->CRL}} ,TM: {{$examination->TM}} g
                </strong>                
            </h6>
        </div>

        <br>

        <div class="well well-sm">

            <h6><strong>NT : {{$examination->NT}} mm</strong></h6>
            <h6><strong>NB : {{$examination->NB}} mm</strong></h6>
            <h6><strong>FMU : {{$examination->FMU}} </strong></h6>
            <h6><strong>PROTOK KROZ DUCTUS VENOSUS : {{$examination->PKDV}}</strong></h6>
            <h6><strong>TRIKUSPIDALNA REGURGITACIJA : {{$examination->TSR}}</strong></h6>

        </div>

        <div>
            <p>Kranijum,kičmeni stub,ekstremiteti deluju uredno.
                Sagledani su: očna sočiva,kontinuitet prednjeg trbušnog zida i dijafragme,
                želudac,mokraćna bešika, FHR+ {{$examination->FHR}} /min pokreti ploda. 
                Sagledan četvorošupljinski presek srca. Molim, uraditi free beta 
                HCG i PAPP-A. Kontrola sa nalazima.</p>
        </div>  

        <div class="col-md-12">
            <div>
                <h6 class="col-md-3">Količina plodove tečnost:</h6>            
            </div>
            <div>
                <h6 class="col-md-9">{{$examination->AFI}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div>
                <h6 class="col-md-3">Insercija trofoblasta:</h6>            
            </div>
            <div>
                <h6 class="col-md-9">{{$examination->Ins_tro}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div>
                <h6 class="col-md-3">Dinamika pomeraja ploda:</h6>            
            </div>
            <div>
                <h6 class="col-md-9">{{$examination->FD}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Akušerski palpatorni pregled:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->AK_PAL}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Dijagnoza:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->diagnosis}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">            
                <h6>Terapija:</h6>         
            </div>
            <div class="col-md-9">            
                <h6>{{$examination->therapy}}</h6>
            </div>        
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Napomena:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->note}}</h6>
            </div>
        </div>

        <br>
        <div class="visible-print-block">          
            <h6 class="text-left">Novi Sad,</h6>
            <h6>{{$examination->created_at}}</h6>
            <h6 class="text-right">{{$examination->patient->user->name}}</h6>
            
            <h6>
                <small>
                    Napomene:
                </small>
            </h6>
            <h6>
                <small>
                    Ultrazvučni pregled ima svoja ograničenja,kako od 
                    strane aparata, tako i od strane operatera,habitusa majke i
                    položaja ploda. Normalan nalaz ultrazvučnog pregleda ne predstavlja garanciju 
                    normalnog kariotipa ili izostanaka morfološkog poremećaja koji 
                    se u datoj gestaciji ne može videti, kao ni budućeg razvitka 
                    poremećaja u kasnoj gestaciji. Pregled fetalnog srca i detaljan ultrazvučni pregled može se 
                    uraditi na klinici za ginekologiju i akušerstvo u Novom Sadu,
                    od 20. do 28. nedelje gestacije. Dalji pregled fetalnog srca 
                    je moguć na pedijatrijskoj klinici u tiršovoj ulici u Beogradu, 
                    tel: 011 / 20 - 60 - 680
                </small>
            </h6>
        </div>

    </div>
</div>

@endsection
