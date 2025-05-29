<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreImageConfigureRequest;
use App\Http\Requests\Admin\UpdateImageConfigureRequest;
use App\Models\ImageConfigure;
use Illuminate\Http\Request;
use File;


class ImageConfigureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageconfigures = ImageConfigure::latest()->paginate(10);
        return view('admin.imageconfig.index', compact('imageconfigures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imageconfig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageConfigureRequest $request)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        ImageConfigure::create($input);
        return redirect()->route('admin.imageconfigures.index')->with('message', 'Created Successfully');
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
    public function edit(ImageConfigure $imageconfigure)
    {
        return view('admin.imageconfig.edit', compact('imageconfigure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageConfigureRequest $request, ImageConfigure $imageconfigure)
    {
        $old_image = $imageconfigure->image;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');

        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $imageconfigure->update($input);
        return redirect()->route('admin.imageconfigures.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageConfigure $imageconfigure)
    {
        $this->removeFile($imageconfigure->image);
        $imageconfigure->delete();
        return redirect()->route('admin.imageconfigures.index')->with('message', 'Delete Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
