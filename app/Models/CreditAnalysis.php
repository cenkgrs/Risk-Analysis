<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;

class CreditAnalysis extends Model
{
    use HasFactory;

    protected $table = 'credit_analysis';

    protected $fillable = [
        'company',
        'company_date',
        'company_tax_no',
        'company_address',
        'company_email',
        'company_phone',
        'company_shareholders',

        'chairman_name',
        'chairman_national_id',
        'chairman_document_id',
        'chairman_document_time',

        'applicant_name',
        'applicant_phone',
        'applicant_email',

        'national_guarantee_document_id',
        'bank_check_document_id',
        'bank_guarantee_document_id',
        'mortage_deed_document_id',
        'receivables_document_id',
        'personal_bond_document_id',
        'bond_document_id',
        'company_check_document_id',

        'involment_area',

        'credit_amount',
        'credit_currency',
        'credit_term',

        'guarantee_letter_amount',
        'guarantee_letter_currency',
        'guarantee_letter_term',

        'lc_amount',
        'lc_currency',
        'lc_term',

        'leazing',
        'company_requests',

        'tax_document_id',
        'activity_certificate_document_id',
        's_circular_document_id',
        'shareholder_card_document_id',
        'r_regsitration_document_id',
        'corporate_tax_document_id',
        'real_estate_document_id',
        'contracting_work_document_id',
        'bank_collateral_document_id',
        'representative_document_id',
        'project_list_document_id',
        'independent_audit_document_id',
        'findex_document_id',
        'ssk_debt_document_id',
        'tax_debt_document_id',
        'group_tax_number_document_id',
    ];

    /*
    |--------------------------------------------------------------------------
    | İlişkiler (Relationships)
    |--------------------------------------------------------------------------
    |
    | Her bir belge (document) alanı için Document modeline belongsTo ilişkisi.
    | Bu, CreditAnalysis modelinin ilgili dokümanlara erişebilmesini sağlar.
    |
    */

    public function chairmanDocument()               { return $this->belongsTo(Documents::class, 'chairman_document_id'); }
    public function nationalGuaranteeDocument()      { return $this->belongsTo(Documents::class, 'national_guarantee_document_id'); }
    public function bankCheckDocument()              { return $this->belongsTo(Documents::class, 'bank_check_document_id'); }
    public function bankGuaranteeDocument()          { return $this->belongsTo(Documents::class, 'bank_guarantee_document_id'); }
    public function mortageDeedDocument()            { return $this->belongsTo(Documents::class, 'mortage_deed_document_id'); }
    public function receivablesDocument()            { return $this->belongsTo(Documents::class, 'receivables_document_id'); }
    public function personalBondDocument()           { return $this->belongsTo(Documents::class, 'personal_bond_document_id'); }
    public function bondDocument()                   { return $this->belongsTo(Documents::class, 'bond_document_id'); }
    public function companyCheckDocument()           { return $this->belongsTo(Documents::class, 'company_check_document_id'); }

    public function taxDocument()                    { return $this->belongsTo(Documents::class, 'tax_document_id'); }
    public function activityCertificateDocument()    { return $this->belongsTo(Documents::class, 'activity_certificate_document_id'); }
    public function sCircularDocument()              { return $this->belongsTo(Documents::class, 's_circular_document_id'); }
    public function shareholderCardDocument()        { return $this->belongsTo(Documents::class, 'shareholder_card_document_id'); }
    public function rRegistrationDocument()          { return $this->belongsTo(Documents::class, 'r_regsitration_document_id'); }
    public function corporateTaxDocument()           { return $this->belongsTo(Documents::class, 'corporate_tax_document_id'); }
    public function realEstateDocument()             { return $this->belongsTo(Documents::class, 'real_estate_document_id'); }
    public function contractingWorkDocument()        { return $this->belongsTo(Documents::class, 'contracting_work_document_id'); }
    public function bankCollateralDocument()         { return $this->belongsTo(Documents::class, 'bank_collateral_document_id'); }
    public function representativeDocument()         { return $this->belongsTo(Documents::class, 'representative_document_id'); }
    public function projectListDocument()            { return $this->belongsTo(Documents::class, 'project_list_document_id'); }
    public function independentAuditDocument()       { return $this->belongsTo(Documents::class, 'independent_audit_document_id'); }
    public function findexDocument()                 { return $this->belongsTo(Documents::class, 'findex_document_id'); }
    public function sskDebtDocument()                { return $this->belongsTo(Documents::class, 'ssk_debt_document_id'); }
    public function taxDebtDocument()                { return $this->belongsTo(Documents::class, 'tax_debt_document_id'); }
    public function groupTaxNumberDocument()         { return $this->belongsTo(Documents::class, 'group_tax_number_document_id'); }

}
