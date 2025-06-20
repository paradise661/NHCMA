<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDocumentRequest;
use App\Http\Requests\Admin\UpdateDocumentRequest;
use App\Models\Resource;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;


class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Resource::where('type', 'Document')->latest()->paginate(10);
        return view('admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentRequest $request)
    {
        $input = $request->all();
        $input['file'] = $this->fileUpload($request, 'file');
        $input['type'] = 'Document';

        Resource::create($input);
        return redirect()->route('admin.documents.index')->with('message', 'Created Successfully');
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
    public function edit(Resource $document)
    {
        return view('admin.document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentRequest $request, Resource $document)
    {
        $old_file = $document->file;
        $input = $request->all();
        $file = $this->fileUpload($request, 'file');

        if ($file) {
            $this->removeFile($old_file);
            $input['file'] = $file;
        } else {
            unset($input['file']);
        }

        $input['type'] = 'Document';
        $document->update($input);
        return redirect()->route('admin.documents.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $document)
    {
        $this->removeFile($document->file);
        $document->delete();
        return redirect()->route('admin.documents.index')->with('message', 'Delete Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/document';
            $imageName = date('YmdHis') . $name . "-" . Str::slug($image->getClientOriginalName()) . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/document/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
