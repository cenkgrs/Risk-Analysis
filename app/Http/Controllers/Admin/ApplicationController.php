<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applications;
use App\Models\CheckAnalysis;
use App\Models\CreditAnalysis;
use App\Models\RiskAnalysis;
use App\Models\Documents;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('admin.dashboard')->with('type', 'Admin Panel');
    }

    public function check()
    {
        $applications = CheckAnalysis::orderBy('created_at', 'desc')->get();

        return view('admin.applications.check', compact('applications'))->with('type', 'Çek Analizi Başvuruları');
    }

    public function credit()
    {
        $applications = CreditAnalysis::orderBy('created_at', 'desc')->get();

        return view('admin.applications.credit', compact('applications'))->with('type', 'Kredi Analizi Başvuruları');
    }

    public function creditDetail($id)
    {
        $application = CreditAnalysis::where('id', $id)->orderBy('created_at', 'desc')->first();

        $shareholders = json_decode($application->company_shareholders, true);

        return view('admin.applications.detail', compact('application', 'shareholders'))->with('type', 'Kredi Analizi Başvurusu - ' . $application['company']);
    }

    public function risk()
    {
        $applications = RiskAnalysis::orderBy('created_at', 'desc')->get();

        return view('admin.applications.risk', compact('applications'))->with('type', 'Risk Değerlendirme Başvuruları');
    }

    public function riskDetail($id)
    {
        $application = RiskAnalysis::where('id', $id)->orderBy('created_at', 'desc')->first();

        $shareholders = json_decode($application->company_shareholders, true);

        $boardMembers = json_decode($application->company_board, true);

        return view('admin.applications.risk_detail', compact('application', 'shareholders', 'boardMembers'))->with('type', 'Risk Değerlendirme Başvurusu - ' . $application['company']);
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
        $type = $request->input('type');

        if ($type == 'check') {
            $app = CheckAnalysis::findOrFail($id);
        } else if ($type == 'credit') {
            $app = CreditAnalysis::findOrFail($id);
        } else if ($type == 'risk') {
            $app = RiskAnalysis::findOrFail($id);
        }

        $status = $request->input('status');

        if (!in_array($status, ['approved', 'rejected'])) {
            return back()->with('error', 'Geçersiz durum.');
        }

        $app->status = $status;
        $app->save();

        return back()->with('success', 'Başvuru durumu güncellendi.');
    }
}
