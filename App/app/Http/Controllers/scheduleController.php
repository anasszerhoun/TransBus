<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Client;
use App\Models\Itineraire;
use App\Models\Chauffeur;
use App\Models\Bus;
use Illuminate\Support\Facades\Route;



use Illuminate\Support\Facades\DB;

class scheduleController extends Controller
{
    public function schedule()
    {
        $schedules = Voyage::orderBy('DateDepart', 'asc')->get();
        $itineraries = Itineraire::all();
        $drivers=Chauffeur::all();
        $buses=Bus::all();



        return view('scheduleList', compact('schedules','drivers','itineraries','buses'));
    }
    public function afficheMessage(Request $request){
        $villeDepart=$request->input('depart');
        $villeArrivee=$request->input('arrivee');
        $dateDepart=request('dateDepart');

        $voyages = DB::table('voyages')
                ->join('itineraires', 'voyages.idItineraire', '=', 'itineraires.idItineraire')
                ->select('voyages.*', 'itineraires.VilleDepart', 'itineraires.VilleArrivee')
                ->when($dateDepart, function ($query, $dateDepart) {
                    return $query->where('voyages.DateDepart', '=',$dateDepart);
                })
                ->when($villeDepart, function ($query, $villeDepart) {
                        return $query->where('itineraires.VilleDepart', '=',$villeDepart);
                    })
                ->when($villeArrivee, function ($query, $villeArrivee) {
                         return $query->where('itineraires.VilleArrivee', '=',$villeArrivee);
                    })
                ->get();
        return view('destination', compact('voyages','villeDepart','villeArrivee'));
    }
    public function detailSchedule(){
        $idVoyage=Route::current()->parameter('id');

    }
    public function afficheDestination(Request $request){
        $itineraires = Itineraire::select('VilleDepart', 'VilleArrivee')->distinct()->get();
        return view('ListeDestination', compact('itineraires'));
    }
    public function addSchedule(){
        $chauffeur=request('chauffeur');
        $bus=request('bus');
        $itineraire=request('itineraire');
        $dateDepart=request('dateDepart');
        $heureDepart=request('heureDepart');
        $heureArrivee=request('heureArrivee');
        $prix=request('prix');

        $voyage = new Voyage();
        $voyage->DateDepart=$dateDepart;
        $voyage->HeureDepart=$heureDepart;
        $voyage->HeureDArrivee=$heureArrivee;
        $voyage->Prix=$prix;
        $voyage->idBus=$bus;
        $voyage->idChauffeur=$chauffeur;
        $voyage->idItineraire=$itineraire;

        $voyage->save();

        return redirect()->route('schedule')->with('success', 'Schedule added successfully!');
    }
    public function AjoutReservation()
    {
        $nom = request('nom');
        $prenom = request('prenom');
        $pieceIdentite = request('cin');
        $email = request('email');
        $telephone = request('tel');
        //ajouter les données dans la base de données
        $client = new Client();
        $client->nom = $nom;
        $client->prenom = $prenom;
        $client->pieceIdentite = $pieceIdentite;
        $client->email = $email;
        $client->telephone = $telephone;
        $client->save();
        return view('index');
    }
}

