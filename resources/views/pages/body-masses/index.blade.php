@extends('layouts.app')

@section('title', 'Daftar Index Massa Tubuh (IMT)')

@section('content')

    <div class="w-full">
        <span class="font-semibold text-2xl block mb-4">IMT List</span>

        <div class="flex w-full flex-col gap-4">
            @foreach($bodyMasses as $bodyMass)
                <div class="flex justify-between">
                    {{ $bodyMass->phone }}
                    <a href="/body-masses/{{ $bodyMass->id }}">
                        <button class="rounded bg-blue-900 font-semibold text-slate-200 px-4 py-2">Lihat</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@push('scripts')
    @vite('resources/js/body-masses/index.js')
@endpush