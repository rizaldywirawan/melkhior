@extends('layouts.app')

@section('title', 'Cek Index Massa Tubuh (IMT)')


@section('content')

    <div class="w-full">
        <span class="text-2xl font-semibold block mb-4">Edit Perhitungan IMT {{ $bodyMass->phone }}</span>
        <form id="calculate-bmi" class="flex flex-col gap-4">
            <div class="form-group flex flex-col gap-1">
                <label for="phone-no" class="font-semibold">
                    Nomor HP
                </label>
                <input id="phone-no" name="phone" class="border border-blue-900 rounded p-2" value="{{ $bodyMass->phone }}"/>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label for="name" class="font-semibold">
                    Nama
                </label>
                <input id="name" name="name" class="border border-blue-900 rounded p-2" value="{{ $bodyMass->name }}"/>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label for="height" class="font-semibold">
                    Tinggi Badan
                </label>
                <input id="height" type="number" name="height" class="border border-blue-900 rounded p-2" value="{{ $bodyMass->height }}"/>
            </div>
            <div class="form-group flex flex-col gap-2 mb-4">
                <label for="weight" class="font-semibold">
                    Berat Badan
                </label>
                <input id="weight" type="number" name="weight" class="border border-blue-900 rounded p-2" value="{{ $bodyMass->weight }}"/>
            </div>

            <button type="submit" class="rounded bg-blue-900 font-semibold text-slate-200 p-4">Hitung</button>
        </form>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/pages/body-masses/edit.js')
@endpush