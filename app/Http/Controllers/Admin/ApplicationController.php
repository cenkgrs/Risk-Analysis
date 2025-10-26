<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applications;
use App\Models\Documents;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('admin.dashboard')->with('type', 'Admin Panel');
    }
    
    public function bireysel()
    {
        $applications = Applications::where('type', 'personal')->orderBy('created_at', 'desc')->get();

        $finishedApplications = $applications->filter(function($app){
            return $app->documents->count() == 3; // 3 veya daha fazla belge = dolu
        });

        $missingApplications = $applications->filter(function($app){
            return $app->documents->count() < 3; // 3’ten az belge = eksik
        });

        return view('admin.applications.index', compact('finishedApplications', 'missingApplications'))->with('type', 'Bireysel Başvurular');
    }

    public function kurumsal()
    {
        $applications = Applications::where('type', 'corporate')->orderBy('created_at', 'desc')->get();

        $finishedApplications = $applications->filter(function($app){
            return $app->documents->count() == 3; // 3 veya daha fazla belge = dolu
        });

        $missingApplications = $applications->filter(function($app){
            return $app->documents->count() < 3; // 3’ten az belge = eksik
        });

        return view('admin.applications.index', compact('finishedApplications', 'missingApplications'))->with('type', 'Kurumsal Başvurular');
    }

    public function updateStatus(Request $request, $id)
    {
        $app = Applications::findOrFail($id);
        $status = $request->input('status');

        if (!in_array($status, ['approved', 'rejected'])) {
            return back()->with('error', 'Geçersiz durum.');
        }

        $app->status = $status;
        $app->save();

        return back()->with('success', 'Başvuru durumu güncellendi.');
    }
}
