<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\PartnershipRequest;

class PartnershipController extends Controller
{
   
    public function index(): View
    {
        $partnerships = Partnership::get();

        return view('admin.partnerships.index', compact('partnerships'));
    }

    public function create(): View
    {
        return view('admin.partnerships.create');
    }

    public function store(PartnershipRequest $request): RedirectResponse
    {
        if($request->validated()){
            $partner_image = $request->file('partner_image')->store('assets/partnership','public');

            Partnership::create($request->except('partner_image') + ['partner_image' => $partner_image]);
        }

        return redirect()->route('admin.partnerships.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Partnership $partnership): View
    {
        return view('admin.partnerships.show', compact('partnership'));
    }

    public function edit(Partnership $partnership): View
    {
        return view('admin.partnerships.edit', compact('partnership'));
    }

    public function update(PartnershipRequest $request, Partnership $partnership): RedirectResponse
    {
        if($request->validated()){
            if($request->partner_image){
                File::delete('storage/' . $partnership->partner_image);
                $partner_image = $request->file('partner_image')->store('assets/partnership','public');

                $partnership->update($request->except('partner_image') + ['partner_image' => $partner_image]);
            }else{
                $partnership->update($request->validated());
            }
        }

        return redirect()->route('admin.partnerships.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Partnership $partnership): RedirectResponse
    {
        File::delete('storage/' . $partnership->partner_image);
        $partnership->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}