<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Documents;

class DocumentController extends Controller
{
    public function view($id)
    {
        $doc = Documents::findOrFail($id);

        // Dosyanın varlığını kontrol et
        if (!Storage::exists($doc->path)) {
            abort(404, 'Belge bulunamadı.');
        }

        // Dosya mime type ve içeriğiyle response oluştur
        return response()->file(Storage::path($doc->path));
    }
}
