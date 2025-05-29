<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\Rule;


class ProvincesController extends Controller
{
    protected $validateMessages = [
            'codigo.required' => 'El código es obligatorio.',
            'codigo.unique' => 'El código ya está registrado.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.unique' => 'El nombre ya está registrado.',
        ];
    public function data_provinces(Request $request){

        $validator = Validator::make($request->all(), [
            'codigo' => 'required|unique:provincias,cod',
            'nombre' => 'required|unique:provincias,nombre',
        ], $this->validateMessages);
        if ($validator->fails()) {
            Toastr::error($validator->errors());
            return back()->withErrors($validator)->withInput();
        }

        $formProvince = Provinces::create([
            'cod' => $request->input('codigo'),
            'nombre' => $request->input('nombre'),
        ]);
        $response = Http::asForm()->post('http://localhost/SuiteCRM/index.php?entryPoint=WebToPersonCapture', [
            'moduleDir' => 'Leads', 
            'last_name' => 'Provincia#',
            'codigo_provincia_c' => $request->codigo,
            'nombre_provi_c' => $request->nombre,
            // Otros campos obligatorios para WebToPersonCapture (algunos pueden ser requeridos internamente)
            'campaign_id' => 'b1aba901-b77a-847e-ff23-6837c00cb4c1', // ID de campaña si aplica
            'assigned_user_id' => 'b4ca7b92-25fe-4b37-a1e0-2d1b12d75f94', // ID del usuario asignado
        ]);
        
        Toastr::success('Provincia guardada correctamente.');
        return back();
    }
    public function edit(Request $request){
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'codigo' => [
                'required',
                Rule::unique('provincias', 'cod')->ignore($id),
            ],
            'nombre' => [
                'required',
                Rule::unique('provincias', 'nombre')->ignore($id),
            ],
        ], $this->validateMessages);
        if ($validator->fails()) {
            Toastr::error($validator->errors());
            return back()->withErrors($validator)->withInput();
        }

        $formProvince = Provinces::findOrFail($id);
        $formProvince->update([
            'cod' => $request->input('codigo'),
            'nombre' => $request->input('nombre'),
        ]);
        Toastr::success('Provincia editada correctamente.');
        return back();
    }
    public function delete($id){
        $formProvince = Provinces::findOrFail($id);
        $formProvince->delete();
        Toastr::success('Provincia eliminada.');
        return back();
    }
}
