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

        <h5>Şirket Bilgileri</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Başvuru Sahibi Şirketin Ticari Ünvanı</th>
                        <th>Vergi Numarası / Şirket Kayıt Numarası</th>
                        <th>Kuruluş Yılı</th>
                        <th>Faaliyet Alanı</th>
                        <th>Faaliyet Gösterdiği Ülkeler</th>
                        <th>Şirketin Merkez Adresi ve Şubeleri</th>
                        <th>Şirket Telefonu</th>
                        <th>Şirket E-Postası</th>
                        <th>Şirket Web Sitesi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['company'] }}</td>
                        <td>{{ $application['company_tax_no'] }}</td>
                        <td>{{ $application['company_date'] }}</td>
                        <td>{{ $application['company_area'] }}</td>
                        <td>{{ $application['company_countries'] }}</td>
                        <td>{{ $application['company_center'] }}</td>
                        <td>{{ $application['company_phone'] }}</td>
                        <td>{{ $application['company_email'] }}</td>
                        <td>{{ $application['company_site'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <h5>Şirket Ortakları</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>T.C Kimlik No</th>
                        <th>Doğum Tarihi</th>
                        <th>Ortaklık Oranı</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shareholders as $person)
                        <tr>
                            <td>{{ $person['name'] ?? '-' }}</td>
                            <td>{{ $person['tc'] ?? '-' }}</td>
                            <td>{{ $person['birthdate'] ?? '-' }}</td>
                            <td>{{ $person['percentage'] ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h5>Yönetim Kadrosu</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>Ünvan</th>
                        <th>Görevi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($boardMembers as $person)
                        <tr>
                            <td>{{ $person['name'] ?? '-' }}</td>
                            <td>{{ $person['title'] ?? '-' }}</td>
                            <td>{{ $person['duty'] ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <h5>Son 3 Yıla Ait Finansal Raporlar</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Gelir Tablosu</th>
                        <th>Gider Tablosu</th>
                        <th>Bilanço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->incomeDocument->id }}">{{ $application->incomeDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->incomeDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->incomeDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->incomeDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->expenseDocument->id }}">{{ $application->expenseDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->expenseDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->expenseDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->expenseDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->balanceDocument->id }}">{{ $application->balanceDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->balanceDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->balanceDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->balanceDocument->id) }}"
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

        <h5>Banka Hesap Ekstresi</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Güncel</th>
                        <th>Geriye Dönük</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->currentAccountDocument->id }}">{{ $application->currentAccountDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->currentAccountDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->currentAccountDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->currentAccountDocument->id) }}"
                                                style="width:100%;height:500px;border:none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->pastAccountDocument->id }}">{{ $application->pastAccountDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->pastAccountDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->pastAccountDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->pastAccountDocument->id) }}"
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

        <h5>Mevcut Yatırımcı veya Finansman İlişkileri</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                        <th>Belge</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['investors_relationships'] }}</td>

                        <td>
                            @if ($application->investorsRelationshipsDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->investorsRelationshipsDocument->id }}">{{ $application->investorsRelationshipsDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->investorsRelationshipsDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->investorsRelationshipsDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->investorsRelationshipsDocument->id) }}"
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

        <h5>Projeler</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Devam Eden</th>
                        <th>Planlanan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['ongoing_projects'] }}</td>
                        <td>{{ $application['planned_projects'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Mevcut ve Geçmiş Hukuki/Uyuşmazlık Durumları</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                        <th>Belge</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['legal_disputes'] }}</td>

                        <td>
                            @if ($application->legalDisputesDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->legalDisputesDocument->id }}">{{ $application->legalDisputesDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->legalDisputesDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->legalDisputesDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->legalDisputesDocument->id) }}"
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

        <h5>Şirketin Son 12 Aylık Nakit Akış Tablosu</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Tablo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#docModal{{ $application->cashFlowDocument->id }}">{{ $application->cashFlowDocument->name }}</button>

                            <div class="modal fade" id="docModal{{ $application->cashFlowDocument->id }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ $application->cashFlowDocument->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                src="{{ route('admin.documents.view', $application->cashFlowDocument->id) }}"
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

        <h5>Banka Kredileri, Leasing veya Diğer Finansal Yükümlülükler</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['financial_obligations'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Şirketin Varlık Listesi</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['asset_list'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Mevcut Çalışan Sayısı, Departmanlara Göre Dağılımı ve Önemli Personel</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['personal_list'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Son 3 Yıllık Vergi Beyannameleri ve Ödeme Durumları</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['tax_returns_and_payments'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Şirketin Faaliyetlerinin Detaylı Açıklaması</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['company_activities'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>İlgili Olduğu Endüstrilerdeki Konumu ve Rekabet Avantajı</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $application['competitive_advantages'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5>Ek Belge</h5>

        <div class="table-responsive">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Belge</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @if ($application->additionalDocument)
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#docModal{{ $application->additionalDocument->id }}">{{ $application->additionalDocument->name }}</button>

                                <div class="modal fade" id="docModal{{ $application->additionalDocument->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{ $application->additionalDocument->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe
                                                    src="{{ route('admin.documents.view', $application->additionalDocument->id) }}"
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
      


    </div>
@endsection
