<?php

namespace App\Http\Controllers\Admin\Actions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ActionRequest;
use App\Models\Shop\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $actions=Action::get();
        return view('admin.actions.list',compact('actions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActionRequest $request)
    {
        $action = new Action();
        $action->name = $request->get('name');
        $action->status = $request->get('status');
        $action->save();
        return redirect('/admin/actions');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Action::find($id);
        return view('admin.actions.edit',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActionRequest $request, $id)
    {
        $update_action=Action::find($id);
        $update_action->name = $request->get('name');
        $update_action->status = $request->get('status');
        $update_action->save();
        return redirect('/admin/actions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Action::find($id);
        $delete->delete();
        return redirect('/admin/actions');
    }
}
