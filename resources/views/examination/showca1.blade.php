@extends('main')

@section('title', '|Ciljani akušerski ultrazvučni pregled u prvom trimestru trudnoće')

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>

        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="100" width="350"/>

        <h4 class="text-center"><strong>CILJANI AKUŠERSKI ULTRAZVUČNI PREGLED U PRVOM TRIMESTRU TRUDNOĆE</strong></h4>

        <br>
        <h3 class="background-colorr"><small>Prezime i ime: </small><strong>{{$examination->patient->name}}</strong></h3>
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
            <h6>
                <strong>
                    CRL: {{$examination->CRL}} , BPD: {{$examination->BPD}} , 
                    Hem: {{$examination->Hem}} , OFD: {{$examination->OFD}} , 
                    HC: {{$examination->HC}} , FL: {{$examination->FL}} , 
                    AC: {{$examination->CRL}} ,TM: {{$examination->TM}} g
                </strong>                
            </h6>
        </div>



        <div class="col-md-12">

            <h5><strong>
                    NT : {{$examination->NT}} mm <br>
                    Nosna kost : {{$examination->NB}} <br>
                    FMU : {{$examination->FMU}}<br>
                    PROTOK KROZ DUCTUS VENOSUS : {{$examination->PKDV}}<br>
                    TRIKUSPIDALNA REGURGITACIJA : {{$examination->TSR}}</strong></h5>
        </div>

        <!--        <div>
                    <hr>
                    <p><strong class="background-colorr">Sagledani su:</strong> očna sočiva, kontinuitet prednjeg trbušnog zida i dijafragme,
                        želudac, mokraćna bešika. Kranijum, kičmeni stub, ekstremiteti deluju uredno.
                        <strong>FHR+ {{$examination->FHR}} /min </strong>pokreti ploda. 
                        Sagledan četvorošupljinski presek srca. <strong>Insercija trofoblasta:</strong> {{$examination->Ins_tro}}, 
                        <strong>Količina plodove tečnost: </strong>{{$examination->AFI}}, 
                        <strong>Dinamika pokreta ploda: </strong>{{$examination->FD}}.</p>
                    <p> Molim, uraditi free beta 
                        HCG i PAPP-A. Kontrola sa nalazima. </p>            
                </div>  -->

        <div>
            <hr>
            <p>
                <strong class="background-colorr">Sagledani su:</strong>{{$examination->Viewed}}
                <strong>FHR+ {{$examination->FHR}} /min </strong>pokreti ploda.
                @if($examination->Ins_tro==null)
                @else
                <strong>Insercija trofoblasta:</strong> {{$examination->Ins_tro}},@endif
                @if($examination->AFI==null)
                @else
                <strong>Količina plodove tečnost: </strong>{{$examination->AFI}},@endif
                @if($examination->FD==null)
                @else
                <strong>Dinamika pokreta ploda: </strong>{{$examination->FD}}.@endif
            </p>
            <p> {{$examination->Freetext}}</p>            
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
            <h6 class="text-left">Novi Sad,</h6>
            <h6><strong>{{date('j.m.Y   G:i', strtotime($examination->created_at))}}</strong></h6>
            <h6 class="text-right">{{$examination->user->name}}</h6>

            <h5>
                <small>
                    Napomene:
                </small>
            </h5>
            <h5>
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
            </h5>
        </div>

    </div>
</div>

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
@endsection