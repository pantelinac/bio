<!--      Defoult Bootstrap Navbar-->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Biovita</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/home') }}">Početna <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('patient.index')}}">Pacijenti</a></li>
                <!--      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>-->
                </li>
            </ul>
            @yield('search_name')

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li><a href="{{ route('patient.create') }}">Novi pacijent</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
<!--                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>       -->
                        @if(Auth::user()->is_admin)
                        <li><a href="{{ url('/users/create') }}">Novi zaposleni</a></li>
                        <li><a href="{{ url('/users') }}">Zaposleni</a></li>
                        <li role="separator" class="divider"></li>
                        @endif

                        <li><a href="{{ url('/logout') }}">Odjavi se</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--      End of Defoult Bootstrap Navbar-->