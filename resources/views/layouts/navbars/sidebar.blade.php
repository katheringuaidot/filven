<div class="sidebar" data-color="azure" data-background-color="purple" data-image="{{ asset('material') }}/img/banner.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
      <a href="{{ route('home') }}" class="simple-text logo-normal">
          <i><img style="width:150px" src="{{ asset('material') }}/img/logofilven.png"></i>
  </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      {{-- listar el menu de inventario --}}
      <li class="nav-item{{ $activePage == 'report' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('report.index') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Reportes') }}</p>
        </a>
      </li>
      
      @if (Auth::User()->rol == 1)
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i><img style="width:25px" src="{{ asset('material') }}/img/admi.jpg"></i>
            <p>{{ __('Gestion de Usuarios') }}
              <b class="caret"></b>
            </p>
          </a>
         {{----}} <div class="collapse {{ $show == 'show' ? 'show' : 'hidden'}}" id="laravelExample">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                  <span class="sidebar-mini"> PU </span>
                  <span class="sidebar-normal">{{ __('Perfil de Usuario') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                  <span class="sidebar-mini"> GU </span>
                  <span class="sidebar-normal"> {{ __('Gestios de Usuarios') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      @endif

      <!-- listar el menu de inventario -->
      <li class="nav-item {{ ($activePage == 'autor' || $activePage == 'books' || $activePage == 'editions') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#inventario" aria-expanded="true">
              <i><img style="width:25px" src="{{ asset('material') }}/img/inven.png"></i>
            <p>{{ __('Inventario') }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse {{ ($show == 'autor' || $activePage == 'books' || $activePage == 'editions' || $activePage == 'empresa' || $activePage == 'autor' || $activePage == 'editions' || $activePage == 'iva') ? 'show' : 'hiden'}}" id="inventario">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'empresa' ? ' active' : ''}}">
                <a class="nav-link" href="{{ route('enterprise.index') }}">
                  <span class="sidebar-mini"> EM </span>
                  <span class="sidebar-normal">{{ __('Empresas') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'autor' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('authors.index') }}">
                  <span class="sidebar-mini"> AU </span>
                  <span class="sidebar-normal">{{ __('Autor') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'editions' ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('editions.index') }}">
                    <span class="sidebar-mini"> ED </span>
                    <span class="sidebar-normal"> {{ __('Editorial') }} </span>
                  </a>
                </li>
              <li class="nav-item{{ $activePage == 'books' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('books.index') }}">
                  <span class="sidebar-mini"> L </span>
                  <span class="sidebar-normal"> {{ __('Libros') }} </span>
                </a>
              </li>
      <li class="nav-item{{ $activePage == 'iva' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('iva.index') }}">
          <span class="sidebar-mini"> IV </span>
          <p>{{ __('Iva') }}</p>
        </a>
      </li>
            </ul>
          </div>
        </li>


      


      
      <li class="nav-item{{ $activePage == 'Clientes' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('cliente.index') }}">
            <i class="material-icons">content_paste</i>
            <p>{{ __('Clientes') }}</p>
          </a>
        </li>     
      <li class="nav-item{{ $activePage == 'sells' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sells.index') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Ventas') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>