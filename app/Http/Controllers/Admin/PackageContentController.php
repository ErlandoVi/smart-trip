<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PackageContent;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\PackageContentRequest;

class PackageContentController extends Controller
{
   
    public function index(): View
    {
        $packageContents = PackageContent::get();

        return view('admin.packageContents.index', compact('packageContents'));
    }

    public function create(): View
    {
        return view('admin.packageContents.create');
    }

    public function store(PackageContentRequest $request): RedirectResponse
    {
        if($request->validated()){
            $package_image = $request->file('package_image')->store('assets/package','public');

            PackageContent::create($request->except('package_image') + ['package_image' => $package_image]);
        }

        return redirect()->route('admin.packageContents.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(PackageContent $packageContent): View
    {
        return view('admin.packageContents.show', compact('packageContent'));
    }

    public function edit(PackageContent $packageContent): View
    {
        return view('admin.packageContents.edit', compact('packageContent'));
    }

    public function update(PackageContentRequest $request, PackageContent $packageContent): RedirectResponse
    {
        if($request->validated()){
            if($request->package_image){
                File::delete('storage/' . $packageContent->package_image);
                $package_image = $request->file('package_image')->store('assets/package','public');

                $packageContent->update($request->except('package_image') + ['package_image' => $package_image]);
            }else{
                $packageContent->update($request->validated());
            }
        }

        return redirect()->route('admin.packageContents.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(PackageContent $packageContent): RedirectResponse
    {
        File::delete('storage/' . $packageContent->package_image);
        $packageContent->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}