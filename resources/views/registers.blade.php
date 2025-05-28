@extends('layouts.landing.app')
@section('content')
    <section class="m-0 py-5">
        <div class="container">
            <!-- Page Header -->
            <div class="section-header">
                <h2 class="title mb-2"><span class="text--base">Usuarios Registrados</span></h2>
            </div>
                <!-- End Page Header -->
                <div class="card __card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">
                            <svg width="20" x="0" y="0" viewBox="0 0 460.8 460.8" xml:space="preserve" class="store-svg-logo">
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <path d="M230.432,239.282c65.829,0,119.641-53.812,119.641-119.641C350.073,53.812,296.261,0,230.432,0
                                                S110.792,53.812,110.792,119.641S164.604,239.282,230.432,239.282z"
                                                    fill="#020202" data-original="#000000" class=""></path>
                                                <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784
                                                c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555
                                                c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943
                                                c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167
                                                c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02
                                                c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898
                                                C436.8,341.682,437.322,338.024,435.755,334.89z" fill="#020202"
                                                    data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg> Información Usuarios
                        </h5>
                    </div>
                <div class="card-header">
                    <div class="table-responsive datatable-custom">
                                <table id="columnSearchDatatable"
                                        class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                                        data-hs-datatables-options='{
                                            "order": [],
                                            "orderCellsTop": true,
                                            "paging":false
    
                                        }'>
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-0">Cédula</th>
                                        <th class="border-0">Nombre</th>
                                        <th class="border-0">Sexo</th>
                                        <th class="border-0">Teléfono</th>
                                        <th class="border-0">Provincia</th>
                                        <th class="text-center border-0">acción</th>
                                    </tr>
                                    </thead>
    <?php
        $formusers=\App\Models\FormUser::with('provincia')->get();
    ?>
                                    <tbody id="set-rows">
                                    <!-- Incio foreach -->
                                    @foreach ($formusers as $user)
                                        <tr>
                                            <td>{{ $user->cedula }}</td>
                                            <td>
                                                <div>
                                                    <a href="idddd" class="table-rest-info" alt="view store">
                                                        <div class="info"><div title="nombre de la tienda" class="text--title">
                                                            {{ $user->nombre }}
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{ $user->sexo }}</td>
                                            <td>{{ $user->telefono }}</td>
                                            <td>{{ $user->provincia->nombre }}</td>
                                            <td>
                                                <div class="btn--container justify-content-center">
                                                    <a class="btn action-btn btn--primary btn-outline-primary"
                                                    href="{{ route('edit-register', $user->id) }}" title="Editar Usuario"><i class="tio-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" 
                                                        class="btn action-btn btn--danger btn-outline-danger"
                                                        data-toggle="modal"
                                                        data-target="#confirmDeleteModal"
                                                        data-id="{{ $user->id }}"
                                                        title="Borrar Usuario">
                                                        <i class="tio-delete-outlined"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                    <!-- Fin Foreah -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </form>
    <!-- Modal de confirmación -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-content" style="top:35px;z-index:999">
                    <div class="modal-header bg-danger text-white" style="background-color:var(--primary-clr) !important;padding-bottom:5px">
                        <h5 class="modal-title" id="confirmDeleteLabel" style="color:white;font-size:1rem">Confirmar eliminación</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro de que deseas eliminar este registro?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>
        {!! Toastr::message() !!}
    </section>

    @endsection
    
    @push('script_2')
    <script src="{{asset('public/assets/modals')}}/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#confirmDeleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Botón que activó el modal
                var id = button.data('id'); // Extrae el ID

                // Construye la ruta al backend para eliminar
                var action = '{{ url("apply6") }}/' + id;

                // Asigna la acción al formulario
                $('#deleteForm').attr('action', action);
            });
        });
    </script>
    @endpush

