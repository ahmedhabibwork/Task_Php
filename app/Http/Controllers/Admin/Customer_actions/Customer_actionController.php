<?php

namespace App\Http\Controllers\Admin\Customer_actions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer_actionsRequest;
use App\Http\Requests\Admin\CustomerRequest;
use App\Models\Shop\Action;
use App\Models\Shop\Customer_actions;
use App\Models\User;
use Illuminate\Http\Request;

class Customer_actionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
         $customer=User::find($id);
        $actions=Action::where('status',1)->get();
        return view('admin.customer_actions.edit',compact('actions','customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Customer_actionsRequest $request, $id)
    {

        $customer_actions=new Customer_actions();
        $customer_actions->customer_id=$id;
        $customer_actions->action=$request->action;
        $customer_actions->record=$request->record;
        $customer_actions->save();
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
        //
    }
}
