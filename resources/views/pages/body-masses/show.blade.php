@extends('layouts.app')

@section('title', "Detail Index Massa Tubuh (IMT) $bodyMass->phone")

@section('content')

    <div class="w-full">
        <span class="text-2xl font-semibold block mb-4">Hasil Perhitungan IMT </span>
        <div class="flex flex-col gap-2 mb-4">
            <div class="form-group flex flex-row">
                    <span class="font-semibold w-1/2">
                        Nomor HP
                    </span>
                <span class="w-1/2">
                        {{ $bodyMass->phone }}
                    </span>
            </div>
            <div class="form-group flex flex-row">
                    <span class="font-semibold w-1/2">
                        Nama
                    </span>
                <span class="w-1/2">
                        {{ $bodyMass->name }}
                    </span>
            </div>
            <div class="form-group flex flex-row">
                    <span class="font-semibold w-1/2">
                        Tinggi Badan
                    </span>
                <span class="w-1/2">
                        {{ $bodyMass->height }}
                    </span>
            </div>
            <div class="form-group flex flex-row">
                    <span class="font-semibold w-1/2">
                        Berat Badan
                    </span>
                <span class="w-1/2">
                        {{ $bodyMass->weight }}
                    </span>
            </div>
        </div>

        <div class="flex justify-between items-center">
            <a href="/">
                <button class="rounded bg-blue-900 font-semibold text-slate-200 px-4 py-2">Kembali</button>
            </a>
            <a href="/body-masses/{{ $bodyMass->id }}/edit">
                <button class="rounded bg-blue-900 font-semibold text-slate-200 px-4 py-2">Edit</button>
            </a>
        </div>
    </div>

@endsection