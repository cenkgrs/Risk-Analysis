<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RiskAnalysis;
use App\Models\Documents;

class RiskController extends Controller
{
    public function getRiskAnalysis()
    {
        return view('risk.analysis');
    }

    public function postRiskAnalysis(Request $request)
    {
        $input = $request->all();

        // Validation
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'company_tax_no' => 'required',
            'company_date' => 'required',
            'company_area' => 'required',
            'company_countries' => 'required',
            'company_center' => 'required',

            'company_phone' => 'required',
            'company_email' => 'required|email',
            'company_site' => 'required',

            'share_holder_name.*' => 'required|string|max:255',
            'share_holder_tc.*' => 'required|string|max:11',
            'share_holder_birthdate.*' => 'required|string',
            'share_holder_percentage*' => 'required|string',

            'board_name.*' => 'required|string|max:255',
            'board_title.*' => 'required|string',
            'board_duty.*' => 'required|string',

            'company_income_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'company_expense_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'company_balance_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',

            'company_current_account_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'company_past_account_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',

            'ongoing_projects*' => 'required|string',
            'planned_projects' => 'required|string',

            'legal_disputes' => 'required|string',

            'cash_flow_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',

            'personal_list' => 'required|string',

            'tax_returns_and_payments' => 'required|string',

            'company_activities' => 'required|string',
            'competitive_advantages' => 'required|string',

            'additional_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',

            'agreement' => 'required',
        ]);

        // Prepare shareholders
        $shareHolders = [];

        foreach ($request->share_holder_name as $index => $name) {
            $shareHolders[] = [
                'name' => $name,
                'tc' => $request->share_holder_tc[$index] ?? null,
                'birthdate' => $request->share_holder_birthdate[$index] ?? null,
                'percentage' => $request->share_holder_percentage[$index] ?? null,
            ];
        }

        $shareHolders = json_encode($shareHolders);

        // Prepare board members
        $boardMembers = [];

        foreach ($request->board_name as $index => $name) {
            $boardMembers[] = [
                'name' => $name,
                'title' => $request->board_title[$index] ?? null,
                'duty' => $request->board_duty[$index] ?? null,
            ];
        }

        $boardMembers = json_encode($boardMembers);

        // Upload file
        $file = $request->file("company_income_document_id");
        $path = $file->store('uploads/documents');

        $company_income_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("company_expense_document_id");
        $path = $file->store('uploads/documents');

        $company_expense_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("company_balance_document_id");
        $path = $file->store('uploads/documents');

        $company_balance_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("company_current_account_document_id");
        $path = $file->store('uploads/documents');

        $company_current_account_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("company_past_account_document_id");
        $path = $file->store('uploads/documents');

        $company_past_account_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        if (isset($input['investors_relationships_document_id'])) {
            $file = $request->file("investors_relationships_document_id");
            $path = $file->store('uploads/documents');

            $investors_relationships_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $investors_relationships_document_id = $investors_relationships_document->id;
        }

        if (isset($input['legal_disputes_document_id'])) {
            $file = $request->file("legal_disputes_document_id");
            $path = $file->store('uploads/documents');

            $legal_disputes_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $legal_disputes_document_id = $legal_disputes_document->id;
        }

        $file = $request->file("cash_flow_document_id");
        $path = $file->store('uploads/documents');

        $cash_flow_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("additional_document_id");
        $path = $file->store('uploads/documents');

        $additional_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $application = RiskAnalysis::create([
            'company' => $input['company'],
            'company_tax_no' => $input['company_tax_no'],
            'company_date' => $input['company_date'],
            'company_area' => $input['company_area'],
            'company_countries' => $input['company_countries'],
            'company_center' => $input['company_center'],
            'company_phone' => $input['company_phone'],
            'company_email' => $input['company_email'],
            'company_site' => $input['company_site'],
            'company_shareholders' => $shareHolders,
            'company_board' => $boardMembers,
         
            'company_income_document_id' => $company_income_document->id,
            'company_expense_document_id' => $company_expense_document->id,
            'company_balance_document_id' => $company_balance_document->id,

            'company_current_account_document_id' => $company_current_account_document->id,
            'company_past_account_document_id' => $company_past_account_document->id,

            'investors_relationships' => $input['investors_relationships'],
            'investors_relationships_document_id' => $investors_relationships_document_id ?? null,

            'ongoing_projects' => $input['ongoing_projects'],
            'planned_projects' => $input['planned_projects'],

            'legal_disputes' => $input['legal_disputes'],
            'legal_disputes_document_id' => $legal_disputes_document_id ?? null,

            'cash_flow_document_id' => $cash_flow_document->id,
            
            'financial_obligations' => $input['financial_obligations'] ?? null,
            'asset_list' => $input['asset_list'] ?? null,
            'personal_list' => $input['personal_list'],
            'tax_returns_and_payments' => $input['tax_returns_and_payments'],
            'company_activities' => $input['company_activities'],
            'competitive_advantages' => $input['competitive_advantages'],
            'additional_document_id' => $additional_document->id,
        ]);

        return redirect()->back()->with('success', 'Risk değerlendirme başvurunuz tamamlanmıştır !');
    }

}
