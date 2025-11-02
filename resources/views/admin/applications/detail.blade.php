@extends('admin.layouts.app')

@section('content')
    <h4 class="mb-4">{{ $type }}</h4>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="application-detail">

        <h5>Şirket Ortakları</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>T.C Kimlik No</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shareholders as $person)
                        <tr>
                            <td>{{ $person['name'] ?? '-' }}</td>
                            <td>{{ $person['tc'] ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h5>Şirket Müdürü | İmza Yetkilisi</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>T.C Kimlik No</th>
                        <th>Yetki Belgesi</th>
                        <th>Yetki Belgesi Süresi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['chairman_name'] }}</td>
                        <td>{{ $application['chairman_national_id'] }}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->chairmanDocument->id }}">{{ $application->chairmanDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->chairmanDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->chairmanDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->chairmanDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $application['chairman_document_time'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Görüşme Yapılan Firma Yetkilisi</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>Telefon</th>
                        <th>E-Posta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['applicant_name'] }}</td>
                        <td>{{ $application['applicant_phone'] }}</td>
                        <td>{{ $application['applicant_email'] }}</td>

                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Verilecek Teminatlar</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Devlet Garantisi</th>
                        <th>Banka Çeki</th>
                        <th>Banka Teminat Mektubu</th>
                        <th>İpotek Tapu Devri</th>
                        <th>Alacak Temliki</th>
                        <th>Şahsi Senet</th>
                        <th>Şirket Seneti</th>
                        <th>Şirket Çeki</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @if ($application->nationalGuaranteeDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->nationalGuaranteeDocument->id }}">{{ $application->nationalGuaranteeDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->nationalGuaranteeDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->nationalGuaranteeDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->nationalGuaranteeDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->bankCheckDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->bankCheckDocument->id }}">{{ $application->bankCheckDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->bankCheckDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->bankCheckDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->bankCheckDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->bankGuaranteeDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->bankGuaranteeDocument->id }}">{{ $application->bankGuaranteeDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->bankGuaranteeDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->bankGuaranteeDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->bankGuaranteeDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->mortageDeedDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->mortageDeedDocument->id }}">{{ $application->mortageDeedDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->mortageDeedDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->mortageDeedDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->mortageDeedDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->receivablesDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->receivablesDocument->id }}">{{ $application->receivablesDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->receivablesDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->receivablesDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->receivablesDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->personalBondDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->personalBondDocument->id }}">{{ $application->personalBondDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->personalBondDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->personalBondDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->personalBondDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->bondDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->bondDocument->id }}">{{ $application->bondDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->bondDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->bondDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->bondDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            @if ($application->companyCheckDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->companyCheckDocument->id }}">{{ $application->companyCheckDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->companyCheckDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->companyCheckDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->companyCheckDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Firmanın İştirak Alanları</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Alan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['involment_area'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Talep Edilen</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Kredi Miktarı</th>
                        <th>Kur</th>
                        <th>Süresi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['credit_amount'] }}</td>
                        <td>{{ $application['credit_currency'] }}</td>
                        <td>{{ $application['credit_term'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Teminat Mektubu Miktarı</th>
                        <th>Kur</th>
                        <th>Süresi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['guarantee_letter_amount'] }}</td>
                        <td>{{ $application['guarantee_letter_currency'] }}</td>
                        <td>{{ $application['guarantee_letter_term'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>LC Miktarı</th>
                        <th>Kur</th>
                        <th>Süresi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['lc_amount'] }}</td>
                        <td>{{ $application['lc_currency'] }}</td>
                        <td>{{ $application['lc_term'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Leazing</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['leazing'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Firma Talepleri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['company_requests'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <h5>Evraklar</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Vergi Levhası</th>
                        <th>Faaliyet Belgesi</th>
                        <th>İmza Sirküleri</th>
                        <th>Ortakların Kimlik Fotokopileri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->taxDocument->id }}">{{ $application->taxDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->taxDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->taxDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->taxDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->activityCertificateDocument->id }}">{{ $application->activityCertificateDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->activityCertificateDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->activityCertificateDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->activityCertificateDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->sCircularDocument->id }}">{{ $application->sCircularDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->sCircularDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->sCircularDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->sCircularDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->shareholderCardDocument->id }}">{{ $application->shareholderCardDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->shareholderCardDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->shareholderCardDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->shareholderCardDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Oda Kayıt Belgesi</th>
                        <th>Kurumlar Vergi Beyannamesi</th>
                        <th>Gayrimenkul Bilgileri</th>
                        <th>İnşaat taahhüt veya taahhüt işi yapan firmaların devam eden ve biten işler listesi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->rRegistrationDocument->id }}">{{ $application->rRegistrationDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->rRegistrationDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->rRegistrationDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->rRegistrationDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->corporateTaxDocument->id }}">{{ $application->corporateTaxDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->corporateTaxDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->corporateTaxDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->corporateTaxDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->realEstateDocument->id }}">{{ $application->realEstateDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->realEstateDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->realEstateDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->realEstateDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            @if ($application->contractingWorkDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->contractingWorkDocument->id }}">{{ $application->contractingWorkDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->contractingWorkDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->contractingWorkDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->contractingWorkDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Çalışılan banka isim ve şubeleri ile bu bankalardaki Limit-risk ve teminat bilgisi içeren tablo</th>
                        <th>Firma adına vekaletle işlem yapılacaksa vekaletname ve vekilin kimlik ,telefon ve adres bilgileri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->bankCollateralDocument->id }}">{{ $application->bankCollateralDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->bankCollateralDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->bankCollateralDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->bankCollateralDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            @if ($application->representativeDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->representativeDocument->id }}">{{ $application->representativeDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->representativeDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->representativeDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->representativeDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Talep edilen kredi yatırım veya proje içinse proje veya yatırım hakkında detay bilgi fizibilite, nakit akış tablosu</th>
                        <th>BAGIMSIZ DENETİM RAPORU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>
                            @if ($application->projectListDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->projectListDocument->id }}">{{ $application->projectListDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->projectListDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->projectListDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->projectListDocument->id) }}"
                                                    style="width:100%;height:500px;border:none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->independentAuditDocument->id }}">{{ $application->independentAuditDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->independentAuditDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->independentAuditDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->independentAuditDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>FİNDEX RİSK RAPORU</th>
                        <th>SSK BORCU YOKTUR YAZISI borc varsa borc dokumu</th>
                        <th>VERGİ DAİRESİ BORCU YOKTUR YAZISI borc varsa borc dokumu</th>
                        <th>GRUP ŞİRKET İSİMLERİ VERGİ NUMARALARI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->findexDocument->id }}">{{ $application->findexDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->findexDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->findexDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->findexDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->sskDebtDocument->id }}">{{ $application->sskDebtDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->sskDebtDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->sskDebtDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->sskDebtDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->taxDebtDocument->id }}">{{ $application->taxDebtDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->taxDebtDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->taxDebtDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->taxDebtDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#docModal{{ $application->groupTaxNumberDocument->id }}">{{ $application->groupTaxNumberDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->groupTaxNumberDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->groupTaxNumberDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->groupTaxNumberDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>


                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
