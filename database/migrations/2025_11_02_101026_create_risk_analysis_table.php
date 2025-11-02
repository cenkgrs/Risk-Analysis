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
        Schema::create('risk_analysis', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('company_tax_no');
            $table->string('company_date');
            $table->string('company_area');
            $table->string('company_countries');
            $table->string('company_center');
            
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_site');
            
            $table->string('company_shareholders');
            $table->string('company_board');
            
            $table->string('company_income_document_id');
            $table->string('company_expense_document_id');
            $table->string('company_balance_document_id');

            $table->string('company_current_account_document_id');
            $table->string('company_past_account_document_id');

            $table->string('investors_relationships')->nullable();
            $table->string('investors_relationships_document_id')->nullable();

            $table->string('ongoing_projects');
            $table->string('planned_projects');

            $table->string('legal_disputes');
            $table->string('legal_disputes_document_id')->nullable();

            $table->string('cash_flow_document_id');

            $table->string('financial_obligations')->nullable();

            $table->string('asset_list')->nullable();

            $table->string('personal_list');

            $table->string('tax_returns_and_payments');

            $table->string('company_activities');

            $table->string('competitive_advantages');

            $table->string('additional_document_id');

            $table->string('status')->default('pending'); // pending | approved | rejected

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risk_analysis');
    }
};
