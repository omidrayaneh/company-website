<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditMachineRequest;
use App\Http\Requests\MachineRequest;
use App\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return :\Illuminate\Http\Response
     */
    public function index()
    {
        $machines = Machine::paginate(10);
        return view('admin.machines.index',compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return :\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.machines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  :\Illuminate\Http\Request  $request
     * @return :\Illuminate\Http\Response
     */
    public function store(MachineRequest $request)
    {
        $inputs = $request->only(['title','status']);

        $machine = new Machine();
        $machine->title =$inputs['title'];
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $machine->status = 1;
        else
            $machine->status = 0;
        $machine->user_id = auth()->id();
        $machine->save();

        toast('دستگاه اضافه شد','success');
        return redirect(route('machines.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machine = Machine::findOrFail($id);
        return view('admin.machines.edit',compact(['machine']));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  :\Illuminate\Http\Request  $request
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function update(EditMachineRequest $request, $id)
    {
        $inputs = $request->only(['title','status']);

        $machine = Machine::findOrFail($id);
        $machine->title =$inputs['title'];
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $machine->status = 1;
        else
            $machine->status = 0;
        $machine->user_id = auth()->id();
        $machine->save();

        toast('دستگاه بروز شد','success');
        return redirect(route('machines.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $machine = Machine::findOrFail($id);
        $machine->delete();
    }
}
