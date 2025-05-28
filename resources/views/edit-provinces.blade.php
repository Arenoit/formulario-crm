@extends('layouts.landing.app')
@section('content')
    <section class="m-0 py-5">
        <div class="container">
            <!-- Page Header -->
            <div class="section-header">
                <h2 class="title mb-2"><span class="text--base">Provincias</span></h2>
            </div>
            <!-- End Page Header -->
<?php
    $id = request()->id;
    $province = \App\Models\Provinces::find($id); // o usar where si necesitas más control
?>

    <form class="js-validate" action="{{ route('edit-province') }}" method="post" enctype="multipart/form-data"
        id="form-id">
        @csrf
        @method('PUT')
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
                    </svg> Editar Provincia
                </h5>
            </div>
            <div class="card-body p-4">
                <input type="hidden" name="id" value="{{ $province->id }}">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="lang_form" id="default-form">
                            <div class="mb-4">
                                <div class="form-group">
                                    <label class="input-label" for="codigo">Código
                                    </label>
                                    <input type="text" name="codigo" id="codigo" class="form-control __form-control"
                                        placeholder="código" value="{{ $province->cod }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <div class="form-group">
                                <label class="input-label" for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control __form-control"
                                    placeholder="Nombre de la Provincia" value="{{ $province->nombre }}" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end pt-3">
            <a href="{{ route('provinces') }}" class="cmn--btn rounded-md border-0 text-white px-3 py-2" style="background-color: #6c757d;">Regresar</a>
            <button type="submit" class="cmn--btn rounded-md border-0 outline-0" style="background:var(--base-2)">Editar</button>
        </div>
    </form>
        </div>
        {!! Toastr::message() !!}
    </section>

    @endsection
    

