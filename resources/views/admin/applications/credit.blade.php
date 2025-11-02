@extends('admin.layouts.app')

@section('content')
    <h4 class="mb-4">{{ $type }}</h4>


    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Şirket</th>
                    <th>Firma Kuruluş Tarihi</th>
                    <th>Firma Vergi No</th>
                    <th>Firma Adresi</th>
                    <th>Firma E-Posta</th>
                    <th>Firma Telefonu</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $app)
                    <tr>
                        <td>{{ $app->id }}</td>
                        <td>{{ $app->company }}</td>
                        <td>{{ $app->company_date }}</td>
                        <td>{{ $app->company_tax_no }}</td>
                        <td>{{ $app->company_address }}</td>
                        <td>{{ $app->company_email }}</td>
                        <td>{{ $app->company_phone }}</td>
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
                            <a href="{{ route('admin.applications.credit.detail', $app->id) }}" class="btn btn-info btn-sm">
                                Detaylar
                            </a>
                            <form action="{{ route('admin.applications.status', $app->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                <input type="hidden" name="type" value="credit">
                                <input type="hidden" name="status" value="approved">
                                <button class="btn btn-success btn-sm"
                                    {{ $app->status == 'approved' ? 'disabled' : '' }}>Onayla</button>
                            </form>

                            <form action="{{ route('admin.applications.status', $app->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                <input type="hidden" name="type" value="credit">
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
        
@endsection
