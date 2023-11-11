<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['admin']=Admin::paginate(5);
        return view('pages.admin.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosAdmin=request()->except('_token');
        // con el exept saco el campo token antes de guardar en la BBDD
        Admin::insert($datosAdmin);
        
        return redirect('admin')->with('mensaje','registro agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $admin= Admin::findOrfail($id);
        return view('pages.admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosAdmin=request()->except(['_token','_method']);
        Admin::where('id','=',$id)->update($datosAdmin);
        $datos['admin']=Admin::paginate(5);
        return view('pages.admin.index',$datos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Admin::destroy($id);
        return redirect('/admin')->with('mensaje','registro borrado con exito');
    }
}
