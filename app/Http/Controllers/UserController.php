<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::get();
//abort(1);
            return view('crud.user.index', compact('users'));
        } catch (\Throwable $th) {
            return redirect()->route('dashboard')
                ->with('failure', 'Ocurrió un error inesperado al listar los usuarios, por favor contacte a soporte.');
        }
    }

    public function edit($user_id)
    {
        try {
            $user = User::find($user_id);
            $roles = Role::all();

            $userRoles = DB::table('model_has_roles')
                ->where('model_type','App\Models\User')
                ->where('model_id',$user_id)
                ->first();

            return view('crud.user.edit', compact('user', 'roles', 'userRoles'));
        } catch (\Throwable $th) {
            return redirect()->route('user.index')
                ->with('failure', 'Ocurrió un error inesperado al buscar usuario, por favor contacte a soporte.');
        }
    }

    public function update(Request $request, User $user)
    {
        try {
            $user->roles()->sync($request->roles);

            return redirect()->route('user.index')
                ->with('success', 'Rol de usuario asignado correctamente.');
        } catch (\Throwable $th) {
            return redirect()->route('user.index')
                ->with('failure', 'Ocurrió un error inesperado al actualizar usuario, por favor contacte a soporte.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::find($id)->delete();

            return redirect()->route('user.index')
                ->with('success', 'Usuario eliminado con éxito.');
        } catch (\Throwable $th) {
            $message = null;
            if(property_exists($th, 'errorInfo')){
                if($th->errorInfo[1]== 1451){
                    $message = 'El usuario esta siendo usado, no se puede eliminar.';
                }else{
                    $message = 'Ocurrió un error inesperado al eliminar, por favor contacte a soporte, codigo: '.$th->errorInfo[1];
                }
            }else{
                $message = 'Ocurrió un error inesperado al eliminar, por favor contacte a soporte.';
            }
            return redirect()->route('user.index')
                ->with('failure', $message);
        }
    }
}
