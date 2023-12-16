<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\PackageRequest;

class PackageController extends Controller
{
   
    public function index(): View
    {
        $packages = Package::get();

        return view('admin.packages.index', compact('packages'));
    }

    public function create(): View
    {
        return view('admin.packages.create');
    }

    public function store(PackageRequest $request): RedirectResponse
    {
        if($request->validated()){
            $package_image = $request->file('package_image')->store('assets/package','public');

            Package::create($request->except('package_image') + ['package_image' => $package_image]);
        }

        return redirect()->route('admin.packages.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Package $package): View
    {
        return view('admin.packages.show', compact('package'));
    }

    public function edit(Package $package): View
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(PackageRequest $request, Package $package): RedirectResponse
    {
        if($request->validated()){
            if($request->package_image){
                File::delete('storage/' . $package->package_image);
                $package_image = $request->file('package_image')->store('assets/package','public');

                $package->update($request->except('package_image') + ['package_image' => $package_image]);
            }else{
                $package->update($request->validated());
            }
        }

        return redirect()->route('admin.packages.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Package $package): RedirectResponse
    {
        File::delete('storage/' . $package->package_image);
        $package->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}