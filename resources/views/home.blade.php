@extends('main')

@section('title', '|Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <img  class="center-block" 
              src="{{ asset('images/bio.png') }}" height="350" width="700"/>
            
<!--            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
