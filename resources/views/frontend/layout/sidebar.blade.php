<aside class="vph sidb">
    <div class="sidb__cont">
        <div class="sidb__top">
            <div class="sidb__logo">
                <a href="#">
                    <img src="{{asset('images/frontend/logo-chico--white.svg')}}" alt="">
                </a>
            </div>
            <div class="sidb__nav">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="icon icon--home"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon icon--search"></i>
                            Busquedas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon icon--stream"></i>
                            Streaming
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidb__bottom">
            <div class="sidb__badge">
                <span>Conmebol media · Acceso prensa</span>
            </div>
            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="sidb__logout"> <img src="{{asset('images/frontend/icon--quit.svg')}}" alt=""> Salir</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</aside>
