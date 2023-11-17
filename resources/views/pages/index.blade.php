@extends('layouts.app')

@section('title', 'Cek Index Massa Tubuh (IMT)')


@section('content')

    <div class="w-full">
        <div class="flex justify-between">
            <span class="text-2xl font-semibold block mb-4">Cek IMT Anda</span>
            <a href="/body-masses" class="font-semibold">Lihat BMT</a>
        </div>
        <form id="calculate-bmi" class="flex flex-col gap-4">
            <div class="form-group flex flex-col gap-1">
                <label for="phone-no" class="font-semibold">
                    Nomor HP
                </label>
                <input id="phone-no" name="phone" class="border border-blue-900 rounded p-2"/>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label for="name" class="font-semibold">
                    Nama
                </label>
                <input id="name" name="name" class="border border-blue-900 rounded p-2"/>
            </div>
            <div class="form-group flex flex-col gap-2">
                <label for="height" class="font-semibold">
                    Tinggi Badan
                </label>
                <input id="height" type="number" name="height" class="border border-blue-900 rounded p-2"/>
            </div>
            <div class="form-group flex flex-col gap-2 mb-4">
                <label for="weight" class="font-semibold">
                    Berat Badan
                </label>
                <input id="weight" type="number" name="weight" class="border border-blue-900 rounded p-2"/>
            </div>

            <button type="submit" class="rounded bg-blue-900 font-semibold text-slate-200 p-4">Hitung</button>
        </form>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/pages/index.js')
@endpush