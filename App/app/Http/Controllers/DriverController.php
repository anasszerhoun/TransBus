<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Chauffeur;

use Illuminate\Support\Facades\Redis;

class DriverController extends Controller
{
    public function drivers()
    {
        $drivers = Chauffeur::all();
        return view('DriversList', compact('drivers'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'permis' => 'required',
            'urlPhoto'=>'required'
        ]);

        $imageName = time().'.'.$request->file('urlPhoto')->extension();
        $request->urlPhoto->move(public_path('images'), $imageName);

        $imagePath = 'images/' . $imageName;

        $driver = new Chauffeur();
        $driver->nom=$data['nom'];
        $driver->prenom=$data['prenom'];
        $driver->telephone=$data['telephone'];
        $driver->permis=$data['permis'];
        $driver->urlPhoto=$imagePath;

        $driver->save();
        return redirect()->route('drivers')->with('success', 'Driver added successfully!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'idChauffeur' => $id,
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'permis' => 'required',
            'urlPhoto'=>'required'
        ]);

        $imageName = time().'.'.$request->file('urlPhoto')->extension();
        $request->urlPhoto->move(public_path('images'), $imageName);
        $imagePath = 'images/'.$imageName;


        $driver = Chauffeur::find($id);


        if ($driver) {
            $driver->nom = $data['nom'];
            $driver->prenom = $data['prenom'];
            $driver->telephone = $data['telephone'];
            $driver->permis = $data['permis'];
            $driver->urlPhoto=$imagePath;
            $driver->save();
            return redirect()->route('drivers')->with('success', 'Driver edited successfully.');
        } else {
            return;
        }
    }
    public function deleteDriver(string $id)
    {
        Chauffeur::where('idChauffeur', $id)->first()->delete();
        return redirect()->route('drivers')->with('success', 'Driver deleted successfully !');
    }
}
