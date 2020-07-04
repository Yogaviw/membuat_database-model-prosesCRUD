@extends('master')
@section('content')
<div class="card">
    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>List Pertanyaan</th>
        </thead>
        <tbody>
            @foreach($pertanyaans as $pertanyaan)
            <td>{{ $loop->iteration }} </td>
            <td>{{ $pertanyaan->isi }} </td>

            @endforeach
        </tbody>
    </table>
</div>
@endsection