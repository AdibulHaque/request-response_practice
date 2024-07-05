<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    function handleFormSubmission(Request $request)
    {
        $path = " ";
        if ($request->has('profile_picture')) {
            $file = $request->file('profile_picture');
            $name = $file->getClientOriginalName();
            $uploadPath = $file->storeAs("uploads", $name, "public");
            $path = Storage::url($uploadPath);
        }
        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully!",
            "profile_picture" => $path
        ]);
    }
}
