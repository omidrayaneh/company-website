<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Contracts\Foundation\Application as ApplicationAlias;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return @Photos List
     *
     */
    public function index()
    {
        return view('admin.photos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('upload')){
            $original_name = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($original_name,PATHINFO_FILENAME);
            $extention = $request->file('upload')->getClientOriginalExtension();
            $filename = $filename.'_'.time().'.'.$extention;

            $request->file('upload')->move(public_path('storage/photos'),$filename);

            $CKeditor = $request->input('CKEditorFuncNum');
            $url = asset('/storage/photos/'.$filename);
            $msg = 'Image Upload Successfully';


            $photo = new Photo();
            $photo->original_name = $original_name;
            $photo->path = $filename;
            $photo->type = 0;
            $photo->user_id = auth()->id();
            $photo->save();

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKeditor ,`$url` , `$msg`)</script>";
           @header('Content-type: text/html;charset=utf-8');
           echo $response;
        }

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
        //
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
        //
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
