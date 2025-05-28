@extends('layouts.landing.app')
@section('content')
    <section class="m-0 py-5">
        <div class="container">
            <!-- Page Header -->
            <div class="section-header">
                <h2 class="title mb-2"><span class="text--base">Formulario</span></h2>
            </div>
            <!-- End Page Header -->

    <form class="js-validate" action="{{ route('send-form') }}" method="post" enctype="multipart/form-data"
        id="form-id">
        @csrf
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
                    </svg> Información Personal
                </h5>
            </div>
            <div class="card-body p-4">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="lang_form" id="default-form">
                            <div class="mb-4">
                                <div class="form-group">
                                    <label class="input-label" for="nombre">Nombre Completo
                                    </label>
                                    <input type="text" name="nombre" id="nombre" class="form-control __form-control"
                                        placeholder="nombre completo" value="{{ old('nombre') }}" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group mb-0">
                                    <label class="input-label" for="cedula">Cédula</label>
                                    <input type="number" name="cedula" id="cedula" class="form-control __form-control"
                                        placeholder="cédula" value="{{ old('cedula') }}" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-group mb-0">
                                    <label class="input-label" for="direccion">Dirección</label>
                                    <textarea type="text" id="direccion" name="direccion"
                                        placeholder="Dirección"
                                        class="form-control __form-control h-120" required>{{ old('direccion') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <div class="form-group">
                                <label class="input-label" for="telefono">Teléfono</label>
                                <input type="number" id="telefono" name="telefono" class="form-control __form-control"
                                    placeholder="teléfono" value="{{ old('telefono') }}" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label class="input-label" for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" required
                                    class="form-control __form-control js-select2-custom js-example-basic-single"
                                    data-placeholder="Selecciona zona">
                                    <option value="" selected disabled>Selecciona el sexo</option>
                                    <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
                                    <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label class="input-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control __form-control"
                                    placeholder="fecha de nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                            </div>
                        </div>
<?php
    $provinces=\App\Models\Provinces::get();
?>
                        <div class="form-group mb-4">
                            <label class="input-label" for="provincia">Provincia</label>
                            <select name="provincia" id="provincia" required
                                class="form-control __form-control js-select2-custom js-example-basic-single"
                                data-placeholder="Selecciona zona">
                                <option value="" selected disabled>Selecciona la Provincia</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}" {{ old('provincia') == $province->id ? 'selected' : '' }}>{{ $province->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end pt-3">
            <button type="submit" class="cmn--btn rounded-md border-0 outline-0" style="background:var(--base-2)">Enviar</button>
        </div>
        </div>
    </form>
        </div>
        {!! Toastr::message() !!}
    </section>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
            const direccion = document.getElementById('direccion');

            direccion.addEventListener('input', function () {
                // Reemplaza todo lo que no sea letras o números ni espacios
                this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '');
            });
        });
    </script>

    @endsection
    