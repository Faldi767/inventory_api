<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class RoleController extends Controller
{
    public function index() {
        return Role::all();
    }


    public function store(Request $request)
    {
        $role = new Role;
        $role->nama_role = $request->nama_role;
        $role->save();

        return "Data berhasil masuk";
    }

    public function update($id, Request $request)
    {
        $role = Role::find($id);
        $role->nama_role = $request->nama_role;
        $role->save();
        return "Data berhasil di simpan";
    }

    public function delete($id) 
    {
        $role = Role::find($id);
        $role->delete();
        return "Data berhasil dihapus";
    }

    public function trash() {
        return Role::onlyTrashed()->get();

    }

    public function restore($id) 
    {
        $role = Role::onlyTrashed()->where('id',$id);
        $role->restore();
        return 'Data berhasil dikembalikan.';
    }

    public function restoreall()
    {
        $role = Role::onlyTrashed();
        $role->restore();
        return 'Data berhasil dikembalikan semua.';
    }

    public function hapuspermanen($id) 
    {
        $role = Role::onlyTrashed()->where('id',$id);
        $role->forceDelete();
        return 'Data berhasil dihapus permanen.';
    }

    public function hapusall()
    {
        $role = Role::onlyTrashed();
        $role->forceDelete();
        return 'Data berhasil dihapus permanen semua.';
    }
}
