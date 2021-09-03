<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=User::where('role_id',2)->get();
        return view('admin.employees.list',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new User();

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->status = $request->input('status');
        $employee->phone_number = $request->input('phone_number');

        $employee->password = Hash::make($request->input('password'));
        $employee->role_id = 2;
        $employee->save();
        return redirect('/admin/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=User::find($id);
        return view('admin.employees.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee=User::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->status = $request->input('status');
        $employee->phone_number = $request->input('phone_number');
        $employee->role_id = 2;
        $employee->password = Hash::make($request->input('password'));
        $employee->save();
        return redirect('/admin/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('/admin/employees');
    }
}
