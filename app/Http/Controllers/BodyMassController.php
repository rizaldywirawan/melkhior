<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBodyMassRequest;
use App\Http\Resources\BodyMassResource;
use App\Models\BodyMass;

class BodyMassController extends Controller
{
    public function index()
    {
        $bodyMasses = BodyMass::get();
        return view('pages.body-masses.index', compact('bodyMasses'));
    }


    public function show(BodyMass $bodyMass)
    {
        return view('pages.body-masses.show', compact('bodyMass'));
    }


    public function store(StoreBodyMassRequest $request)
    {
        $existingBodyMass = BodyMass::where('phone', $request->input('phone'))->first();

        // check if body mass index with the phone already exists
        if ($existingBodyMass) {
            return response([
                'data' => $existingBodyMass,
                'message' => 'Phone already registered!'
            ], 409);
        }

        $bodyMass = new BodyMass();
        $bodyMass->phone = $request->phone;
        $bodyMass->name = $request->name;
        $bodyMass->height = $request->height;
        $bodyMass->weight = $request->weight;
        $bodyMass->save();

        return new BodyMassResource($bodyMass);
    }


    public function edit(BodyMass $bodyMass)
    {
        return view('pages.body-masses.edit', compact('bodyMass'));
    }
}
