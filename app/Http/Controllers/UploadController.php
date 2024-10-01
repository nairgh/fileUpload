<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UploadController extends Controller
{
    function index(): View
    {
        return view('imageUpload');
    }
          
     function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
          
        $imageName = time().'.'.$request->image->extension();  
        
        // Store Image in Storage Folder
        // $request->image->storeAs('images', $imageName);
        // storage/app/images/file.png

        //Store Image in Public Folder
        $request->image->move(public_path('images'), $imageName);
        
        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */
          
        return back()->with('success', 'Image uploaded successfully!')
                     ->with('image', $imageName); 
    }
}
