<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Models\Shop\Employee_customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=User::where('role_id',3)->get();
        return view('admin.customers.list',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees=User::where('role_id',2)->get();
        return view('admin.customers.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new User();

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->status = $request->input('status');
        $customer->phone_number = $request->input('phone_number');
        $customer->address = $request->input('address');
        $customer->password = Hash::make($request->input('password'));
        $customer->role_id = 3;


        $employee_assign_customer=new Employee_customer(); //assign employee to customer
        $customer->save();
        $employee_assign_customer->customer_id=$customer->id;
        $employee_assign_customer->employee_id=$request->get('employee_id');

        $employee_assign_customer->save();
        return redirect('/admin/customers');
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
        $employees=User::where('role_id',2)->get();
        $edit=User::find($id);
        return view('admin.customers.edit',compact('edit','employees'));
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
        $customer=User::find($id);

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->status = $request->input('status');
        $customer->phone_number = $request->input('phone_number');
        $customer->address = $request->input('address');
        $customer->role_id = 3;
        $customer->password = Hash::make($request->input('password'));

        $employee_assign_customer=\App\Models\Shop\Employee_customer::where('customer_id',$customer->id)->first();

        $customer->save();
        $employee_assign_customer->customer_id=$customer->id;
        $employee_assign_customer->employee_id=$request->get('employee_id');

        $employee_assign_customer->save();
        return redirect('/admin/customers');
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
        return redirect('/admin/customers');
    }
}
