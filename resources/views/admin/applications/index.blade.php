@extends('admin.layouts.app')

@section('content')
    <h4 class="mb-4">{{ $type ?? 'Başvurular' }}</h4>

    <ul class="nav nav-tabs" id="applicationTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="dolu-tab" data-bs-toggle="tab" data-bs-target="#dolu" type="button"
                role="tab">Tamamlanan Başvurular</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="eksik-tab" data-bs-toggle="tab" data-bs-target="#eksik" type="button"
                role="tab">Eksik Belgeli Başvurular</button>
        </li>
    </ul>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="dolu" role="tabpanel">


            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Telefon</th>
                            <th>Belgeler</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finishedApplications as $app)
                            <tr>
                                <td>{{ $app->id }}</td>
                                <td>{{ $app->name }}</td>
                                <td>{{ $app->email }}</td>
                                <td>{{ $app->phone }}</td>
                                <td>
                                    @foreach ($app->documents as $doc)
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#docModal{{ $doc->id }}">{{ $doc->name }}</button>

                                        <div class="modal fade" id="docModal{{ $doc->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{ $doc->name }}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ route('admin.documents.view', $doc->id) }}"
                                                            style="width:100%;height:500px;border:none;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                                <td>{{ $app->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    @if ($app->status == 'approved')
                                        <span class="badge bg-success">Onaylandı</span>
                                    @elseif($app->status == 'rejected')
                                        <span class="badge bg-danger">Reddedildi</span>
                                    @else
                                        <span class="badge bg-secondary">Beklemede</span>
                                    @endif
                                </td>

                                <td>
                                    <form action="{{ route('admin.applications.status', $app->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="approved">
                                        <button class="btn btn-success btn-sm"
                                            {{ $app->status == 'approved' ? 'disabled' : '' }}>Onayla</button>
                                    </form>

                                    <form action="{{ route('admin.applications.status', $app->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="rejected">
                                        <button class="btn btn-danger btn-sm"
                                            {{ $app->status == 'rejected' ? 'disabled' : '' }}>Reddet</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="eksik" role="tabpanel">
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>E-posta</th>
                            <th>Telefon</th>
                            <th>Belge Sayısı</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($missingApplications as $app)
                            <tr>
                                <td>{{ $app->id }}</td>
                                <td>{{ $app->name }}</td>
                                <td>{{ $app->email }}</td>
                                <td>{{ $app->phone }}</td>
                                <td>
                                    @foreach ($app->documents as $doc)
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#docModal{{ $doc->id }}">{{ $doc->name }}</button>

                                        <div class="modal fade" id="docModal{{ $doc->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{ $doc->name }}</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <iframe src="{{ route('admin.documents.view', $doc->id) }}"
                                                            style="width:100%;height:500px;border:none;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                                <td>{{ $app->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    @if ($app->status == 'approved')
                                        <span class="badge bg-success">Onaylandı</span>
                                    @elseif($app->status == 'rejected')
                                        <span class="badge bg-danger">Reddedildi</span>
                                    @else
                                        <span class="badge bg-secondary">Beklemede</span>
                                    @endif
                                </td>

                                <td>
                                    <form action="{{ route('admin.applications.status', $app->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="approved">
                                        <button class="btn btn-success btn-sm"
                                            {{ $app->status == 'approved' ? 'disabled' : '' }}>Onayla</button>
                                    </form>

                                    <form action="{{ route('admin.applications.status', $app->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="rejected">
                                        <button class="btn btn-danger btn-sm"
                                            {{ $app->status == 'rejected' ? 'disabled' : '' }}>Reddet</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
