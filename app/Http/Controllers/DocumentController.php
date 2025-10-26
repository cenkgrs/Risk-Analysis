<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Applications;
use App\Models\Documents;

class DocumentController extends Controller
{
    public function getDealer()
    {
        return view('application.dealer');
    }

    public function postDealer(Request $request)
    {
        $input = $request->all();

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'company',
            'agreement' => 'required',
            'document1' => 'file|mimes:pdf,docx|max:2048',
            'document2' => 'file|mimes:pdf,docx|max:2048',
            'document3' => 'file|mimes:pdf,docx|max:2048',
        ]);

        $application = Applications::create([
            'type' => 'personal',
            'name' => $input['name'],
            'email' => $input['email'],
            'company' => $input['company'],
            'phone' => $input['phone'],
        ]);

        // Dosyaları kaydetme örneği
        $files = [];

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("document$i")) {
                $file = $request->file("document$i");
                $path = $file->store('uploads/documents'); // storage/app/uploads/documents

                Documents::create([
                    'application_id' => $application->id,
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'type' => "document$i",
                ]);
            }
        }

        return redirect()->back()->with('success', 'Başvurunuz tamamlanmıştır !');
    }


    public function getCorporate()
    {
        return view('application.corporate');
    }

    public function postCorporate(Request $request)
    {
        $input = $request->all();

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'company',
            'agreement' => 'required',
            'document1' => 'file|mimes:pdf,docx|max:2048',
            'document2' => 'file|mimes:pdf,docx|max:2048',
            'document3' => 'file|mimes:pdf,docx|max:2048',
        ]);

        $application = Applications::create([
            'type' => 'corporate',
            'name' => $input['name'],
            'email' => $input['email'],
            'company' => $input['company'],
            'phone' => $input['phone'],
        ]);

        // Dosyaları kaydetme örneği
        $files = [];

        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("document$i")) {
                $file = $request->file("document$i");
                $path = $file->store('uploads/documents'); // storage/app/uploads/documents

                Documents::create([
                    'application_id' => $application->id,
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'type' => "document$i",
                ]);
            }
        }

        return redirect()->back()->with('success', 'Başvurunuz tamamlanmıştır !');
    }


}
