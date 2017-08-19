
@extends('main')

@section('title', '|Ciljani akušerski ultrazvučni pregled u drugom i trećem trimestru trudnoće')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>

        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="100" width="350"/>

        <h4 class="text-center" ><strong>CILJANI AKUŠERSKI ULTRAZVUČNI PREGLED U DRUGOM I TREĆEM TRIMESTRU TRUDNOĆE</strong></h4>

        <br>
        <h4 class="background-colorr"><small>Prezime i ime: </small><strong>{{$examination->patient->name}}</strong></h4>
        <section class="col-md-6">
            <h6>Broj kartona: <strong>{{$examination->patient->id}}</strong></h6>
            <h6>Datum rođenja: <strong>{{$examination->patient->date_of_birth}}</strong></h6>
            <h6>Adresa: <strong>{{$examination->patient->address}}, 
                    {{$examination->patient->place}}</strong></h6>
        </section>
        <section class="col-md-6">
            <h6>Krvna grupa i RH faktor: <strong>{{$examination->patient->blood_type}}, 
                    {{$examination->patient->rh}}</strong></h6>
            <h6>Osetljivost na lekove: <strong>{{$examination->patient->drug_susceptibility}}</strong></h6>
            <h6>PM: <strong>{{$examination->patient->date_last_period}}</strong></h6>
        </section>

        <div class="col-md-6 hidden-print">
            <h6>Telefon: <strong>{{$examination->patient->phone}}</strong></h6>            
            <h6>Porođaj: <strong>{{$examination->patient->childbirth}}</strong></h6>
            <h6>Abortus: <strong>{{$examination->patient->abortion}}</strong></h6>
        </div>
        <div class="col-md-6 hidden-print">
            <h6>Zanimanje: <strong>{{$examination->patient->profession}}</strong></h6>
            <h6>Lična anamneza: <strong>{{$examination->patient->personal_anament}}</strong></h6>
            <h6>Porodicna anamneza: <strong>{{$examination->patient->family_anament}}</strong></h6>
        </div>

        <hr>

        <div class="col-md-12 background-colorr">

            <h6><strong>Biometrija ploda :mm</strong></h6>
            <h6><strong>BPD : {{$examination->BPD}} , Hem : {{$examination->Hem}} , 
                    OFD : {{$examination->OFD}} , HC : {{$examination->HC}} , 
                    Va : {{$examination->Va}} , Vp : {{$examination->Vp}} , 
                    IOD : {{$examination->IOD}} , TCD : {{$examination->TCD}} , 
                    CM : {{$examination->CM}} , NN : {{$examination->NN}} , 
                    NB : {{$examination->NB}} , HL : {{$examination->HL}} , 
                    FL : {{$examination->FL}} , AC : {{$examination->AC}} , 
                    TM : {{$examination->TM}} g, FHR+ : {{$examination->FHR}} /min, 
                    Cerviks : {{$examination->cerviks}} </strong></h6>
            <p>{{$examination->viewe}}</p>

        </div>

        <!--        <div class="col-md-12">
                    <p><strong class="background-colorr">Sagledani su: </strong>Očna sočiva, kontinuitet prednjeg trbušnog zida i 
                        dijafragme, pluća, želudac, GIT, mokraćna bešika, bubrezi. 
                        Kranijum, lice, vrat, kičmeni stub i ekstremiteti deluju uredno.
                        <strong>Insercija posteljice: </strong>{{$examination->Ins_pos}} , 
                        <strong>Količina plodove tečnosti: </strong>{{$examination->AFI}} ,                 
                        <strong>Pupčanik: </strong>{{$examination->Pupil}} ,
                        <strong>Dinamika pokreta ploda: </strong>{{$examination->FD}}</p>
                </div>-->

        <div class="col-md-12">
            <p><strong class="background-colorr">Sagledani su: </strong>{{$examination->Viewed}}
                @if($examination->Ins_pos==null)
                @else
                <strong>Insercija posteljice: </strong>{{$examination->Ins_pos}} ,@endif 
                @if($examination->AFI==null)
                @else
                <strong>Količina plodove tečnosti: </strong>{{$examination->AFI}} ,@endif
                @if($examination->Pupil==null)
                @else
                <strong>Pupčanik: </strong>{{$examination->Pupil}} ,@endif
                @if($examination->FD==null)
                @else
                <strong>Dinamika pokreta ploda: </strong>{{$examination->FD}}</p>@endif

            <p>{{$examination->Freetext}}</p>
        </div>

        <div class="col-md-12 background-colorr">
            <p><strong>Pregled fetalnog srca:</strong> {{$examination->Ex_Fe_Ha}}
                @if($examination->Fo==0)
                @else                
                <strong>Fo. {{$examination->Fo}} mm.</strong>@endif
                
                @if($examination->Width_of_aorta==0)
                @else
                Levi izlazni protočni trakt definiše izlaz aorte,čija je širina 
                <strong>{{$examination->Width_of_aorta}} mm</strong>.@endif
                
                @if($examination->Pul_tree==0)
                @else
                Desni izlazni 
                protočni trakt definiše izlaz pulmonalnog stabla širine 
                <strong>{{$examination->Pul_tree}} mm.</strong>@endif
                Protok kroz valvule laminaran.
            </p>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h5 class="background-colorr"><strong>Akušerski palpatorni pregled:</strong></h5>            
            </div>
            <div class="col-md-9">
                <h5>{{$examination->AK_PAL}}</h5>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h5 class="background-colorr"><strong>Dijagnoza:</strong></h5>            
            </div>
            <div class="col-md-9">
                <h5>{{$examination->diagnosis}}</h5>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">            
                <h5 class="background-colorr"><strong>Terapija:</strong></h5>         
            </div>
            <div class="col-md-9">            
                <h5>{{$examination->therapy}}</h5>
            </div>        
        </div>


        <br>
        <div class="visible-print-block">          
            <h6 class="text-left">Novi Sad,<br>
                {{$examination->created_at}}</h6>
            <h6 class="text-right">{{$examination->user->name}}</h6>
            <hr>

            <h6>
                <small>
                    Napomene:<br>
                </small>
                <small>
                    Ultrazvučni pregled ima svoja ograničenja,kako od 
                    strane aparata, tako i od strane operatera,habitusa majke i
                    položaja ploda. Normalan nalaz ultrazvučnog pregleda ne predstavlja garanciju 
                    normalnog kariotipa ili izostanaka morfološkog poremećaja koji 
                    se u datoj gestaciji ne može videti, kao ni budućeg razvitka 
                    poremećaja u kasnoj gestaciji. Pregled fetalnog srca i detaljan ultrazvučni pregled može se 
                    uraditi na klinici za ginekologiju i akušerstvo u Novom Sadu,
                    od 20. do 28. nedelje gestacije. Dalji pregled fetalnog srca 
                    je moguć na pedijatrijskoj klinici u Tiršovoj ulici u Beogradu, 
                    tel: 011 / 20 - 60 - 680
                </small>
            </h6>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection
