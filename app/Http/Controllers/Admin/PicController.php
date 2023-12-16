<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pic;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\PicRequest;

class PicController extends Controller
{
   
    public function index(): View
    {
        $pics = Pic::get();

        return view('admin.pics.index', compact('pics'));
    }

    public function create(): View
    {
        return view('admin.pics.create');
    }

    public function store(PicRequest $request): RedirectResponse
    {
        if($request->validated()){
            $pic_image = $request->file('pic_image')->store('assets/pic','public');

            Pic::create($request->except('pic_image') + ['pic_image' => $pic_image]);
        }

        return redirect()->route('admin.pics.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Pic $pic): View
    {
        return view('admin.pics.show', compact('pic'));
    }

    public function edit(Pic $pic): View
    {
        return view('admin.pics.edit', compact('pic'));
    }

    public function update(PicRequest $request, Pic $pic): RedirectResponse
    {
        if($request->validated()){
            if($request->pic_image){
                File::delete('storage/' . $pic->pic_image);
                $pic_image = $request->file('pic_image')->store('assets/pic','public');

                $pic->update($request->except('pic_image') + ['pic_image' => $pic_image]);
            }else{
                $pic->update($request->validated());
            }
        }

        return redirect()->route('admin.pics.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Pic $pic): RedirectResponse
    {
        File::delete('storage/' . $pic->pic_image);
        $pic->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}