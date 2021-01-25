<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::orderBy('created_at', 'desc')->paginate(10);
        return view('files.index')->with('files', $files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //print_r($request->all());
        return view('files.uploadFile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'uploaded_file'=> 'required|mimes:pdf,csv,doc,docx,xls,xlsx,jpeg,jpg,png,bmp|max: 1999',
        ]);*/
            
        if($request->file('uploaded_file')){
            $fileNameWithExt = $request->file('uploaded_file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('uploaded_file')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('uploaded_file')->storeAs('public/files', $fileNameToStore);
            $filename = $request->file('filename');

            //dd($fileNameToStore);
        } else{
            $filenameToStore = 'nofile.jpg';
        }

        $file = new File;
        $file->uploaded_file = $fileNameToStore;
        $file->filename = $filename;
        $file->save();
        return redirect('/index');
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
