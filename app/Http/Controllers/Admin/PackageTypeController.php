<?php

namespace App\Http\Controllers\Admin;

use App\Models\PackageType;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\PackageTypeRequest;

class PackageTypeController extends Controller
{
   
    public function index(): View
    {
        $packageTypes = PackageType::get();

        return view('admin.packageTypes.index', compact('packageTypes'));
    }

    public function create(): View
    {
        return view('admin.packageTypes.create');
    }

    public function store(PackageTypeRequest $request): RedirectResponse
    {
        PackageType::create($request->validated());

        return redirect()->route('admin.packageTypes.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(PackageType $packageType): View
    {
        return view('admin.packageTypes.show', compact('packageType'));
    }

    public function edit(PackageType $packageType): View
    {
        return view('admin.packageTypes.edit', compact('packageType'));
    }

    public function update(PackageTypeRequest $request, PackageType $packageType): RedirectResponse
    {
        $packageType->update($request->validated());

        return redirect()->route('admin.packageTypes.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(PackageType $packageType): RedirectResponse
    {
        $packageType->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}