<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CheckAnalysis;
use App\Models\Documents;


class CheckController extends Controller
{
    public function getCheck()
    {
        return view('check.analysis');
    }

    public function postCheck(Request $request)
    {
        $input = $request->all();

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'required',
            'agreement' => 'required',
            'check' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
        ]);

        // Upload file
        $file = $request->file("check");
        $path = $file->store('uploads/documents'); // storage/app/uploads/documents

        $document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $application = CheckAnalysis::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'company' => $input['company'],
            'phone' => $input['phone'],
            'document_id' => $document->id
        ]);

        return redirect()->back()->with('success', 'Çek analiz başvurunuz tamamlanmıştır !');
    }
}
