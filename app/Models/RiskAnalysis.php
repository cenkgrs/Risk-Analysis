<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskAnalysis extends Model
{
    use HasFactory;

    protected $table = 'risk_analysis';

    protected $fillable = [
        'company',
        'company_tax_no',
        'company_date',
        'company_area',
        'company_countries',
        'company_center',
        'company_phone',
        'company_email',
        'company_site',
        'company_shareholders',
        'company_board',
        'company_income_document_id',
        'company_expense_document_id',
        'company_balance_document_id',
        'company_current_account_document_id',
        'company_past_account_document_id',
        'investors_relationships',
        'investors_relationships_document_id',
        'ongoing_projects',
        'planned_projects',
        'legal_disputes',
        'legal_disputes_document_id',
        'cash_flow_document_id',
        'financial_obligations',
        'asset_list',
        'personal_list',
        'tax_returns_and_payments',
        'company_activities',
        'competitive_advantages',
        'additional_document_id',
    ];

    // 📎 İlişkiler
    public function incomeDocument()
    {
        return $this->belongsTo(Documents::class, 'company_income_document_id');
    }

    public function expenseDocument()
    {
        return $this->belongsTo(Documents::class, 'company_expense_document_id');
    }

    public function balanceDocument()
    {
        return $this->belongsTo(Documents::class, 'company_balance_document_id');
    }

    public function currentAccountDocument()
    {
        return $this->belongsTo(Documents::class, 'company_current_account_document_id');
    }

    public function pastAccountDocument()
    {
        return $this->belongsTo(Documents::class, 'company_past_account_document_id');
    }

    public function investorsRelationshipsDocument()
    {
        return $this->belongsTo(Documents::class, 'investors_relationships_document_id');
    }

    public function legalDisputesDocument()
    {
        return $this->belongsTo(Documents::class, 'legal_disputes_document_id');
    }

    public function cashFlowDocument()
    {
        return $this->belongsTo(Documents::class, 'cash_flow_document_id');
    }

    public function additionalDocument()
    {
        return $this->belongsTo(Documents::class, 'additional_document_id');
    }
}
