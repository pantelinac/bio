@extends('main')

@section('title', '|Welcome')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Prijavite se</div>

                    <div class="panel-body">
                        <img  class="center-block" 
                              src="{{ asset('images/bio.png') }}" height="350" width="700"/>
                    </div>
                </div>
            </div>


    </div>
    @endsection
