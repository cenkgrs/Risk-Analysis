<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\CreditAnalysis;

class CreditController extends Controller
{
    public function getPersonalCredit()
    {
        return view('credit.analysis');
    }

    public function postPersonalCredit(Request $request)
    {
        $input = $request->all();

        // Validation
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'company_date' => 'required|string',
            'company_tax_no' => 'required|string',
            'company_phone' => 'required',
            'company_email' => 'required|email',

            'share_holder_name.*' => 'required|string|max:255',
            'share_holder_tc.*' => 'required|string|max:11',

            'chairman_name' => 'required|string|max:100',
            'chairman_national_id' => 'required|string|max:11',
            'chairman_document_time' => 'required|string',
            'chairman_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',

            'applicant_name' => 'required|string|max:100',
            'applicant_phone' => 'required',
            'applicant_email' => 'required|email',

            /*
            'national_guarantee_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'bank_check_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'bank_guarantee_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'mortage_deed_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'receivables_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'personal_bond_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'bond_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'company_check_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            */
            
            'involment_area' => 'required',

            'credit_amount' => 'required',
            'credit_currency' => 'required',
            'credit_term' => 'required',

            'guarantee_letter_amount' => 'required',
            'guarantee_letter_currency' => 'required',
            'guarantee_letter_term' => 'required',

            'lc_amount' => 'required',
            'lc_currency' => 'required',
            'lc_term' => 'required',

            'leazing' => 'required|string',
            'company_requests' => 'required|string|max:255',

            'tax_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'activity_certificate_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            's_circular_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'shareholder_card_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'r_regsitration_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'corporate_tax_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'real_estate_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'bank_collateral_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'independent_audit_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'findex_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'ssk_debt_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'tax_debt_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            'group_tax_number_document_id' => 'file|mimes:pdf,docx,png,jpeg|max:2048',
            
            'agreement' => 'required',
        ]);

        // Prepare shareholders
        $shareHolders = [];

        foreach ($request->share_holder_name as $index => $name) {
            $shareHolders[] = [
                'name' => $name,
                'tc' => $request->share_holder_tc[$index] ?? null,
            ];
        }

        $shareHolders = json_encode($shareHolders);

        // Upload Chairman document
        $file = $request->file("chairman_document_id");
        $path = $file->store('uploads/documents'); // storage/app/uploads/documents

        $chairman_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        if (isset($input['national_guarantee_document_id'])) {
            $file = $request->file("national_guarantee_document_id");
            $path = $file->store('uploads/documents');

            $national_guarantee_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $national_guarantee_document_id = $national_guarantee_document->id;
        }

        if (isset($input['bank_check_document_id'])) {
            $file = $request->file("bank_check_document_id");
            $path = $file->store('uploads/documents');

            $bank_check_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $bank_check_document_id = $bank_check_document->id;
        }

        if (isset($input['bank_guarantee_document_id'])) {
            $file = $request->file("bank_guarantee_document_id");
            $path = $file->store('uploads/documents');

            $bank_guarantee_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $bank_guarantee_document_id = $bank_guarantee_document->id;
        }

        if (isset($input['mortage_deed_document_id'])) {
            $file = $request->file("mortage_deed_document_id");
            $path = $file->store('uploads/documents');

            $mortage_deed_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $mortage_deed_document_id = $mortage_deed_document->id;
        }

        if (isset($input['receivables_document_id'])) {
            $file = $request->file("receivables_document_id");
            $path = $file->store('uploads/documents');

            $receivables_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $receivables_document_id = $receivables_document->id;
        }

        if (isset($input['personal_bond_document_id'])) {
            $file = $request->file("personal_bond_document_id");
            $path = $file->store('uploads/documents');

            $personal_bond_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $personal_bond_document_id = $personal_bond_document->id;
        }

        if (isset($input['bond_document_id'])) {
            $file = $request->file("bond_document_id");
            $path = $file->store('uploads/documents');

            $bond_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $bond_document_id = $bond_document->id;
        }

        if (isset($input['company_check_document_id'])) {
            $file = $request->file("company_check_document_id");
            $path = $file->store('uploads/documents');

            $company_check_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $company_check_document_id = $company_check_document->id;
        }

        $file = $request->file("tax_document_id");
        $path = $file->store('uploads/documents');

        $tax_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("activity_certificate_document_id");
        $path = $file->store('uploads/documents');

        $activity_certificate_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("s_circular_document_id");
        $path = $file->store('uploads/documents');

        $s_circular_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("shareholder_card_document_id");
        $path = $file->store('uploads/documents');

        $shareholder_card_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("r_regsitration_document_id");
        $path = $file->store('uploads/documents');

        $r_regsitration_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("corporate_tax_document_id");
        $path = $file->store('uploads/documents');

        $corporate_tax_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("real_estate_document_id");
        $path = $file->store('uploads/documents');

        $real_estate_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        if (isset($input['contracting_work_document_id'])) {
            $file = $request->file("contracting_work_document_id");
            $path = $file->store('uploads/documents');

            $contracting_work_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $contracting_work_document_id = $contracting_work_document->id;
        }

        $file = $request->file("bank_collateral_document_id");
        $path = $file->store('uploads/documents');

        $bank_collateral_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        if (isset($input['representative_document_id'])) {
            $file = $request->file("representative_document_id");
            $path = $file->store('uploads/documents');

            $representative_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $representative_document_id = $representative_document->id;
        }

        if (isset($input['project_list_document_id'])) {
            $file = $request->file("project_list_document_id");
            $path = $file->store('uploads/documents');

            $project_list_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $project_list_document_id = $project_list_document->id;
        }

        if (isset($input['independent_audit_document_id'])) {
            $file = $request->file("independent_audit_document_id");
            $path = $file->store('uploads/documents');

            $independent_audit_document = Documents::create([
                'name' => $file->getClientOriginalName(),
                'path' => $path,
            ]);

            $independent_audit_document_id = $independent_audit_document->id;
        }

        $file = $request->file("findex_document_id");
        $path = $file->store('uploads/documents');

        $findex_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("ssk_debt_document_id");
        $path = $file->store('uploads/documents');

        $ssk_debt_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("tax_debt_document_id");
        $path = $file->store('uploads/documents');

        $tax_debt_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $file = $request->file("group_tax_number_document_id");
        $path = $file->store('uploads/documents');

        $group_tax_number_document = Documents::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
        ]);

        $application = CreditAnalysis::create([
            'company' => $input['company'],
            'company_date' => $input['company_date'],
            'company_tax_no' => $input['company_tax_no'],
            'company_address' => $input['company_address'],
            'company_phone' => $input['company_phone'],
            'company_email' => $input['company_email'],

            'company_shareholders' => json_encode($shareHolders),

            'chairman_name' => $input['chairman_name'],
            'chairman_national_id' => $input['chairman_national_id'],
            'chairman_document_time' => $input['chairman_document_time'],
            'chairman_document_id' => $chairman_document->id,

            'applicant_name' => $input['applicant_name'],
            'applicant_phone' => $input['applicant_phone'],
            'applicant_email' => $input['applicant_email'],

            'involment_area' => $input['involment_area'],

            'national_guarantee_document_id' => $national_guarantee_document_id ?? null,
            'bank_check_document_id' => $bank_check_document_id ?? null,
            'bank_guarantee_document_id' => $bank_guarantee_document_id ?? null,
            'mortage_deed_document_id' => $mortage_deed_document_id ?? null,
            'receivables_document_id' => $receivables_document_id ?? null,
            'personal_bond_document_id' => $personal_bond_document_id ?? null,
            'bond_document_id' => $bond_document_id ?? null,
            'company_check_document_id' => $company_check_document_id ?? null,

            'credit_amount' => $input['credit_amount'],
            'credit_currency' => $input['credit_currency'],
            'credit_term' => $input['credit_term'],

            'guarantee_letter_amount' => $input['guarantee_letter_amount'],
            'guarantee_letter_currency' => $input['guarantee_letter_currency'],
            'guarantee_letter_term' => $input['guarantee_letter_term'],

            'lc_amount' => $input['lc_amount'],
            'lc_currency' => $input['lc_currency'],
            'lc_term' => $input['lc_term'],

            'leazing' => $input['leazing'],
            'company_requests' => $input['company_requests'],

            'tax_document_id' => $tax_document->id,
            'activity_certificate_document_id' => $activity_certificate_document->id,
            's_circular_document_id' => $s_circular_document->id,
            'shareholder_card_document_id' => $shareholder_card_document->id,
            'r_regsitration_document_id' => $r_regsitration_document->id,
            'corporate_tax_document_id' => $corporate_tax_document->id,
            'real_estate_document_id' => $real_estate_document->id,
            'contracting_work_document_id' => $contracting_work_document_id ?? null,
            'bank_collateral_document_id' => $bank_collateral_document->id,
            'representative_document_id' => $representative_document_id ?? null,
            'project_list_document_id' => $project_list_document_id ?? null,
            'independent_audit_document_id' => $independent_audit_document_id ?? null,
            'findex_document_id' => $findex_document->id,
            'ssk_debt_document_id' => $ssk_debt_document->id,
            'tax_debt_document_id' => $tax_debt_document->id,
            'group_tax_number_document_id' => $group_tax_number_document->id,
        ]);

        return redirect()->back()->with('success', 'Kredi başvurusu analiz başvurunuz tamamlanmıştır !');
    }
}
