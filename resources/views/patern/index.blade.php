@extends('main')

@section('title', '|Pacijenti')

@section('search_name')
<form class="navbar-form navbar-left" action="search_name" method="post">
    <div class="form-group">
        <input type="text" name="search_name" class="form-control" placeholder="Pretraži po imenu">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>

    <button type="submit" class="btn btn-default">Pretraži</button>
</form>
@endsection

@section('stylesheets')

{{ Html::style('css/parsley.css')}}

@endsection

@section('content')

<div class="row">    
    <div class='col-md-12'>        

        <h1>Šabloni</h1>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <th>#</th>
                    <th>Ultrasonografski nalaz</th>                
                    <th>Nalaz u spekulima</th>
                    <th>Ginekološki Palpatorni pregled</th>
                    <th>Dijagnoza</th>
                    <th>Terapija</th>                 

                    </thead>

                    <tbody>

                        @foreach ($paterns as $patern)

                        <tr>
                            <th><a href="{{ route('patern.edit', $patern->id) }}" 
                                   class="btn btn-default btn-sm btn-info">{{ $patern->id }}</a></th>   


                            <th>{{ $patern->ultrasonographic_finding }}</th>
                            <th>{{ $patern->speculators_finding }}</th>
                            <th>{{ $patern->gin_palp_finding }}</th>
                            <th>{{ $patern->diagnosis }}</th>
                            <th>{{ $patern->therapy }}</th>                        
                        </tr>

                        @endforeach

                    </tbody>
                </table>       

            </div>

        </div>


        @endsection

        @section('scripts')
        {!! Html::script('js/parsley.min.js') !!}
        @endsection

