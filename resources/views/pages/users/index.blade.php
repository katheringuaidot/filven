@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Gestion  de Usuarios'), 'show' => 'show'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Usuarios') }}</h4>
                <p class="card-category"> {{ __('Aquí puedes administrar usuarios') }}</p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Agregar') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Nombre') }}
                      </th>
                      <th>
                        {{ __('Correo') }}
                      </th>
                      <th>
                        {{ __('Fecha de Creacion') }}
                      </th>
                      <th>Rol</th>
                      @if (Auth::User()->rol == 1)
                        <th class="text-right">
                          {{ __('Acctiones') }}
                        </th>
                      @endif
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            {{ $user->created_at->format('Y-m-d') }}
                          </td>
                          <td>
                            @switch($user->rol)
                              @case(1)
                                  Administrador
                                @break
                              @case(2)
                                  Supervisor
                                @break
                              @case(3)
                                  Vendedor
                                @break                            
                            @endswitch
                          </td>
                          @if (Auth::User()->rol == 1)
                            <td class="td-actions text-right">
                              @if ($user->id != auth()->id())
                                <form action="{{ route('user.destroy', $user) }}" method="post">
                                    @csrf
                                    @method('delete')
                                
                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('user.edit', $user) }}" data-original-title="" title="">
                                      <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-link" >
                                        <i class="material-icons">close</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </form>
                              @else
                                <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                                  <i class="material-icons">edit</i>
                                  <div class="ripple-container"></div>
                                </a>
                              @endif
                            </td>
                          @endif
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="float-right">
                  {{ $users->links() }}
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
