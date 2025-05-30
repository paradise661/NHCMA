<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Http\Requests\StoreRegisterRequest;
use App\Exports\RegisterExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    // List the registrations
    public function index()
    {
        $register = Register::latest()->paginate(10);
        return view('admin.register.index', compact('register'));
    }

    // Show a specific registration
    public function show(Register $register)
    {
        return view('admin.register.show', compact('register'));
    }

    // Delete a registration
    public function destroy(Register $register)
    {
        $register->delete();
        return redirect()->route('admin.register.index')->with('message', 'Delete Successfully');
    }

    // Store a new registration
    public function store(StoreRegisterRequest $request)
    {
        // dd($request);
        Register::create($request->all());
          // Flash success message to session
        session()->flash('success', 'Your registration was successful!');
        return redirect()->back();
    }
    public function export()
{
    return Excel::download(new \App\Exports\RegisterExport, 'test.xlsx');
}
}
