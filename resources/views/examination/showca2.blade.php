
@extends('main')

@section('title', '|Ciljani akušerski ultrazvučni pregled u drugom i trećem trimestru trudnoće')


@section('content')

<div class="row">    
    <div class='col-md-8 col-md-offset-2'>

        <img  class="center-block visible-print-block" 
              src="{{ asset('images/bio.png') }}" height="150" width="400"/>

        <h2 class="text-center">CILJANI AKUŠERSKI ULTRAZVUČNI PREGLED</h2>
        <h3 class="text-center"> U DRUGOM I TREĆEM TRIMESTRU TRUDNOĆE</h3>

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
            <h6>Lična anamenta: <strong>{{$examination->patient->personal_anament}}</strong></h6>
            <h6>Porodicna anamenta: <strong>{{$examination->patient->family_anament}}</strong></h6>
        </div>

        <div class="col-md-6">
            <h6><strong>Biometrija ploda : {{$examination->Biometry}} mm</strong></h6>            
        </div>

        <div class="col-md-12">
            <h6>BPD : {{$examination->BPD}} mm, Hem : {{$examination->Hem}} mm, 
                OFD : {{$examination->OFD}} mm, HC : {{$examination->HC}} mm, 
                Va : {{$examination->Va}} mm, Vp : {{$examination->Vp}} mm, 
                IOD : {{$examination->IOD}} mm, TCD : {{$examination->TCD}} mm, 
                CM : {{$examination->CM}} mm, NN : {{$examination->NN}} mm, 
                NB : {{$examination->NB}} mm, HL : {{$examination->HL}} mm, 
                FL : {{$examination->FL}} mm, AC : {{$examination->AC}} mm, 
                TM : {{$examination->TM}} g, FHR+ : {{$examination->FHR}} /min, 
                Cerviks : {{$examination->cerviks}} mm</h6>

        </div>

        <div class="col-md-12">
            <p>Kranijum,lice, vrat, kičmeni stub i ekstremiteti deluju uredno.</p>
            <p>Sagledani: Očna sočiva, kontinuitet prednjeg trbušnog zida i 
                dijafragme, pluća, želudac, GIT, mokraćna bešika, bubrezi.</p>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Insercija posteljice:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->Ins_pos}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Količina plodove tečnosti:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->AFI}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Pupčanik:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->Pupil}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Dinamika pokreta ploda:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->FD}}</h6>            
            </div>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <h6>Pregled fetalnog srca:</h6>            
            </div>
            <div class="col-md-9">
                <h6>{{$examination->Ex_Fe_Ha}}</h6>            
            </div>
        </div>
        
        <div class="col-md-12">
            <p>Pregled fetalnog srca: Srce pravilno orijentisano u grudnom košu.
             Sagledani: četvorošupljinski i petošupljinski presek srca, luk aorte, 
            presek 3 krvna suda, IVS, srčani zalisci, ostijum primum, širine...?...
            Levi izlazni protočni trakt definiše izlaz aorte,čija je širina 
            <strong>{{$examination->Width_of_aorta}} mm</strong>. Desni izlazni 
            protočni trakt definiše izlaz pulmonalnog stabla širine 
            <strong>{{$examination->Width_of_aorta}} mm.</strong>
            Protok kroz valvule laminaran.
            </p>
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
            <hr>
            <h6>
                <small>
                    Napomene:
                </small>
            </h6>
            <h6>
                <small>
                    Ultrazvučni pregled ima svoja ograničenja,kako od 
                    strane aparata, tako i od strane operatera,habitusa majke i
                    položaja ploda. Hormonalni nalaz ultrazvučnog pregleda ne predstavlja garanciju 
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