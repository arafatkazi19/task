<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;
use Validator;

class UploadController extends Controller
{
    //
    public function addContent(){
        return view('admin.upload.add-form');
    }

    protected function validateForm($request){
        $this->validate($request,[
            'title'=>'required|unique:uploads',
            'short_description'=>'required',
            'description'=>'required',
            'type'=>'required',
            'publication_status'=>'required'
        ]);
    }



    public function saveContent(Request $request,Upload $upload){

        $this->validateForm($request);

        if($request->file('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $upload->file = $filename;
        }

        $upload->title = $request->title;
        $upload->short_description = $request->short_description;
        $upload->description = $request->description;
        $upload->type = $request->type;
        $upload->publication_status = $request->publication_status;
        $upload->save();

        return redirect()->back();

    }

    public function manageContent(){
        $contents = Upload::all();
        return view('admin.upload.manage-content',['contents'=>$contents]);
    }

    public function unpublish($id){
        $content = Upload::find($id);
        $content -> publication_status = 0;
        $content->save();

        return redirect('/manage-content');
    }

    public function publish($id){
        $content = Upload::find($id);
        $content -> publication_status = 1;
        $content->save();

        return redirect()->back();
    }

    public function destroy($id){
        $content = Upload::find($id);
        $content->delete();

        return redirect('/manage-content');
    }
}
