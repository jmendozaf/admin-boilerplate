<div class="dropdown-menu dropdown-menu-right">
    <div class="dropdown-header text-center"><strong>Cuenta</strong></div>
    <a href="{{ url('profile') }}" class="dropdown-item"><i class="fa fa-user"></i> Perfil</a>
    @if(1==3)
    <a href="{{ url('password') }}" class="dropdown-item"><i class="fa fa-key"></i> Contraseña</a>
    @endif
    <a href="javascript:void()" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-lock"></i> Salir</a>
    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
