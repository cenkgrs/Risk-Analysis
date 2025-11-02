<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credit_analysis', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('company_date');
            $table->string('company_tax_no');
            $table->string('company_address');
            $table->string('company_email');
            $table->string('company_phone');

            $table->string('company_shareholders');

            $table->string('chairman_name');
            $table->string('chairman_national_id');
            $table->unsignedBigInteger('chairman_document_id');
            $table->string('chairman_document_time');

            $table->string('applicant_name');
            $table->string('applicant_phone');
            $table->string('applicant_email');

            $table->unsignedBigInteger('national_guarantee_document_id')->nullable();
            $table->unsignedBigInteger('bank_check_document_id')->nullable();
            $table->unsignedBigInteger('bank_guarantee_document_id')->nullable();
            $table->unsignedBigInteger('mortage_deed_document_id')->nullable();
            $table->unsignedBigInteger('receivables_document_id')->nullable();
            $table->unsignedBigInteger('personal_bond_document_id')->nullable();
            $table->unsignedBigInteger('bond_document_id')->nullable();
            $table->unsignedBigInteger('company_check_document_id')->nullable();

            $table->string('involment_area');

            $table->string('credit_amount');
            $table->string('credit_currency')->default('₺');
            $table->string('credit_term');

            $table->string('guarantee_letter_amount');
            $table->string('guarantee_letter_currency')->default('₺');
            $table->string('guarantee_letter_term');

            $table->string('lc_amount');
            $table->string('lc_currency')->default('₺');
            $table->string('lc_term');

            $table->string('leazing');

            $table->longText('company_requests');

            // Evraklar
            $table->unsignedBigInteger('tax_document_id');
            $table->unsignedBigInteger('activity_certificate_document_id');
            $table->unsignedBigInteger('s_circular_document_id');
            $table->unsignedBigInteger('shareholder_card_document_id');
            $table->unsignedBigInteger('r_regsitration_document_id');
            $table->unsignedBigInteger('corporate_tax_document_id');
            $table->unsignedBigInteger('real_estate_document_id');
            $table->unsignedBigInteger('contracting_work_document_id')->nullable();
            $table->unsignedBigInteger('bank_collateral_document_id');
            $table->unsignedBigInteger('representative_document_id')->nullable();
            $table->unsignedBigInteger('project_list_document_id')->nullable();
            $table->unsignedBigInteger('independent_audit_document_id');
            $table->unsignedBigInteger('findex_document_id');
            $table->unsignedBigInteger('ssk_debt_document_id');
            $table->unsignedBigInteger('tax_debt_document_id');
            $table->unsignedBigInteger('group_tax_number_document_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_analysis');
    }
};
