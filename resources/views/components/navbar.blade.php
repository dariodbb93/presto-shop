<nav class="navbar navbar-expand-lg navBackground">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('indexAnnunci') }}"> presto shop online </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('register') }}"> Registrati </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('login') }}"> Accedi </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href=""> Benvenuto {{ Auth::user()->name }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{route('upload') }}"> carica un annuncio </a>
                    </li>
                    <a class=" btn btn-light mx-1 px-2 my-1" href="{{route('logout')}}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Logout </a>
                    <form  id='logout-form' action="{{ route('logout') }}" method="POST" class="d-none" >
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
