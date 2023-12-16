<?php

namespace App\Http\Controllers\Admin;

use App\Models\Government;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\GovernmentRequest;

class GovernmentController extends Controller
{
   
    public function index(): View
    {
        $governments = Government::get();

        return view('admin.governments.index', compact('governments'));
    }

    public function create(): View
    {
        return view('admin.governments.create');
    }

    public function store(GovernmentRequest $request): RedirectResponse
    {
        if($request->validated()){
            $agency_image = $request->file('agency_image')->store('assets/government','public');

            Government::create($request->except('agency_image') + ['agency_image' => $agency_image]);
        }

        return redirect()->route('admin.governments.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Government $government): View
    {
        return view('admin.governments.show', compact('government'));
    }

    public function edit(Government $government): View
    {
        return view('admin.governments.edit', compact('government'));
    }

    public function update(GovernmentRequest $request, Government $government): RedirectResponse
    {
        if($request->validated()){
            if($request->agency_image){
                File::delete('storage/' . $government->agency_image);
                $agency_image = $request->file('agency_image')->store('assets/government','public');

                $government->update($request->except('agency_image') + ['agency_image' => $agency_image]);
            }else{
                $government->update($request->validated());
            }
        }

        return redirect()->route('admin.governments.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Government $government): RedirectResponse
    {
        File::delete('storage/' . $government->agency_image);
        $government->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}