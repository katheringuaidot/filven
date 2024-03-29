<div class="col-lg-6 col-md-12">
    <div class="card">
        <div class="card-header card-header-tabs card-header-info">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
            <span class="nav-tabs-title">Bitacora:</span>
            <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="nav-item">
                <a class="nav-link active" href="#profile" data-toggle="tab">
                    <i class="material-icons">bug_report</i> Reportes
                    <div class="ripple-container"></div>
                </a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                    <i class="material-icons">code</i> Website
                    <div class="ripple-container"></div>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#settings" data-toggle="tab">
                    <i class="material-icons">cloud</i> Server
                    <div class="ripple-container"></div>
                </a>
                </li> --}}
            </ul>
            </div>
        </div>
        </div>
        <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="profile">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Accion</th>
                    <th>URL</th>
                </tr>
                </thead>
                <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($binnacle as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->action}}</td>
                            <td>{{$item->url}}</td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            <div class="text-right">
                {{$binnacle->links()}}
            </div>
        </div>
            




            <div class="tab-pane" id="messages">
            <table class="table">
                <tbody>
                <tr>
                    <td>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked>
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                        </label>
                    </div>
                    </td>
                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                        </label>
                    </div>
                    </td>
                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                    </button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="tab-pane" id="settings">
            <table class="table">
                <tbody>
                <tr>
                    <td>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                        </label>
                    </div>
                    </td>
                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked>
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                        </label>
                    </div>
                    </td>
                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked>
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                        </label>
                    </div>
                    </td>
                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                    </button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>