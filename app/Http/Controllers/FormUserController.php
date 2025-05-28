<?php

namespace App\Http\Controllers;

use App\Models\FormUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\Rule;

class FormUserController extends Controller
{
    protected $validateMessages = [
            'nombre.required' => 'El nombre es obligatorio.',
            'cedula.required' => 'La cédula es obligatoria.',
            'cedula.unique' => 'Esta cédula ya ha sido registrada.',
            'cedula.numeric' => 'La cédula debe contener solo números.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.numeric' => 'El teléfono debe contener solo números.',
            'sexo.required' => 'El sexo es obligatorio.',
            'sexo.in' => 'El valor del sexo debe ser M o F.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento es obligatoria.',
            'fecha_nacimiento.date' => 'La fecha de nacimiento no es una fecha válida.',
            'fecha_nacimiento.date_format' => 'El formato de la fecha debe ser YYYY-MM-DD.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.regex' => 'La dirección solo puede contener letras, números y espacios.',
            'provincia.required' => 'La provincia es obligatoria.',
        ];
    public function data_users(Request $request){
        
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'cedula' => 'required|unique:formuser,cedula|numeric',
            'telefono' => 'required|numeric',
            'sexo' => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date|date_format:Y-m-d',
            'direccion' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'provincia' => 'required',
        ], $this->validateMessages);
        if ($validator->fails()) {
            /* return response()->json([
                'errors' => $validator->errors(),
            ], 422); */
            Toastr::error($validator->errors());
            return back()->withErrors($validator)->withInput();
        }

    // Crear un nuevo registro en la tabla form_users
    $formUser = FormUser::create([
        'nombre' => $request->nombre,
        'cedula' => $request->cedula,
        'telefono' => $request->telefono,
        'sexo' => $request->sexo,
        'fecha_nacimiento' => $request->fecha_nacimiento,
        'direccion' => $request->direccion,
        'provincia_id' => $request->provincia,
    ]);
    /* return response()->json([
        'message' => 'Usuario guardado correctamente.',
        'data' => $formUser,
    ], 201); */
    Toastr::success('Usuario guardado correctamente.');
    return back();
    }
    public function edit(Request $request){
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'cedula' => [
                'required',
                'numeric',
                Rule::unique('formuser', 'cedula')->ignore($id),
            ],
            'telefono' => 'required|numeric',
            'sexo' => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date|date_format:Y-m-d',
            'direccion' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'provincia' => 'required',
        ], $this->validateMessages);
        if ($validator->fails()) {
            Toastr::error($validator->errors());
            return back()->withErrors($validator)->withInput();
        }

        $formUser = FormUser::findOrFail($id);
        $formUser->update([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'sexo' => $request->sexo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'direccion' => $request->direccion,
            'provincia_id' => $request->provincia,
        ]);
        Toastr::success('Registro editado correctamente.');
        return back();
    }
    public function delete($id){
        $formProvince = FormUser::findOrFail($id);
        $formProvince->delete();
        Toastr::success('Registro eliminado.');
        return back();
    }
}
