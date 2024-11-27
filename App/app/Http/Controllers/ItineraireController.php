<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itineraire;

use Illuminate\Support\Facades\Redis;

class ItineraireController extends Controller
{
    public function itineraries()
    {
        $itineraries = Itineraire::all();
        return view('itinerariesList', compact('itineraries'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'VilleDepart' => 'required',
            'VilleArrivee' => 'required',
        ]);


        $itineraire = new Itineraire();
        $itineraire->VilleDepart=$data['VilleDepart'];
        $itineraire->VilleArrivee=$data['VilleArrivee'];

        $itineraire->save();
        return redirect()->route('itineraries')->with('success', 'Itineraire added successfully!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'idItineraire' => $id,
            'VilleDepart' => 'required',
            'VilleArrivee' => 'required',
        ]);

        $itineraire = Itineraire::find($id);

        if ($itineraire) {

            $itineraire->VilleDepart = $data['VilleDepart'];
            $itineraire->VilleArrivee = $data['VilleArrivee'];

            $itineraire->save();
            return redirect()->route('itineraries')->with('success', 'Itineraire edited successfully.');
        } else {
            return;
        }
    }
    public function delete(string $id)
    {
        Itineraire::where('idItineraire', $id)->first()->delete();
        return redirect()->route('itineraries')->with('success', 'Itineraire deleted successfully !');
    }
}
