@extends('layouts.app')

@section('title', 'Yüklenen Belgeler')

@section('content')
<div class="container">
    <h1>Yüklenen Belgeler</h1>

    <table class="documents-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dosya Adı</th>
                <th>Tür</th>
                <th>Görüntüle</th>
                <th>Yüklenme Tarihi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $doc)
            <tr>
                <td>{{ $doc->id }}</td>
                <td>{{ $doc->name }}</td>
                <td>{{ $doc->type }}</td>
                <td><a href="{{ Storage::url($doc->path) }}" target="_blank">Görüntüle</a></td>
                <td>{{ $doc->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
