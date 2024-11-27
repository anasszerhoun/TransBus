<?php
namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Voyage;
use App\Models\Bus;
use App\Models\Ticket;
use App\Models\Itineraire;
use Illuminate\Support\Facades\DB;

//include Route
use Illuminate\Support\Facades\Route;
class AcceuilController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function destination()
    {
        return view('destination');
    }
    public function reservation()
    {
        $idVoyage=Route::current()->parameter('id');
        $id=Voyage::select('idBus')->where('id',$idVoyage)->first();
        $idBus = $id['idBus'];
        $cp=Bus::select('nbrPlaces')->where('idBus',$idBus)->first();
        $capacite = $cp['nbrPlaces'];
        $idVoyage=Route::current()->parameter('id');
        $places = Ticket::select('numeroPlace')
            ->where('idVoyage', $idVoyage)
            ->pluck('numeroPlace')
            ->toArray();


        return view('FormulaireTicket',compact('capacite','places'));
    }

    public function AjoutReservation()
    {
        $nom = request('nom');
        $prenom = request('prenom');
        $fullName=$nom.$prenom;
        $pieceIdentite = request('cin');
        $email = request('email');
        $telephone = request('tel');
        $client = new Client();
        $client->nom = $nom;
        $client->prenom = $prenom;
        $client->pieceIdentite = $pieceIdentite;
        $client->email = $email;
        $client->telephone = $telephone;
        $client->save();
        $id = $client->id;
        $idVoyage=Route::current()->parameter('id');
        $hD = Voyage::select('HeureDepart')->where('id', $idVoyage)->first();
        $heureDepart = $hD['HeureDepart'];
        $hA = Voyage::select('HeureDArrivee')->where('id', $idVoyage)->first();
        $heureArrivee = $hA['HeureDArrivee'];
        $prx = Voyage::select('prix')->where('id', $idVoyage)->first();
        $prix=$prx['prix'];
        $idItineraire = Voyage::select('idItineraire')->where('id', $idVoyage)->first();
        $vD = Itineraire::select('VilleDepart')->where('idItineraire', $idItineraire['idItineraire'])->first();
        $villeDepart = $vD['VilleDepart'];
        $vA = Itineraire::select('VilleArrivee')->where('idItineraire', $idItineraire['idItineraire'])->first();
        $villeArrivee = $vA['VilleArrivee'];
        $idbus = Voyage::select('idBus')->where('id', $idVoyage)->first();
        $nbrplace = Bus::select('nbrPlaces')->where('idBus',  $idbus['idBus'])->first();
        $nbrTicket = Ticket::where('idVoyage', $idVoyage)->count();
        $nbrplace = (int)$nbrplace['nbrPlaces'];
        $Date=Voyage::select('DateDepart')->where('voyages.id','=',$idVoyage)->first();
        $dateDepart=$Date['DateDepart'];
        $nbrTicket = (int)$nbrTicket;
        if($nbrTicket < $nbrplace){
            $ticket = new Ticket();
            $ticket->idClient = $id;
            $ticket->idVoyage = $idVoyage;
            $ticket->numeroPlace = (int)request("seat");
            $numeroPlace = (string) $ticket->numeroPlace;
            $ticket->save();
            $pdf = PDF::loadView('Recu', compact('nom', 'prenom', 'pieceIdentite','dateDepart', 'email', 'telephone', 'numeroPlace', 'villeDepart', 'villeArrivee', 'heureDepart', 'heureArrivee', 'prix'));
            $pdfFileName = "{$fullName}.pdf";
            $pdfContent = $pdf->output();
            $pdfPath = storage_path("/{$pdfFileName}");
            file_put_contents($pdfPath, $pdfContent);
            return view('success',['pdfFileName' => $pdfFileName]);
            // return $pdf->stream('recu.pdf');
        }
        else{
            return redirect()->route('reservation', ['id' => $idVoyage])->with('alert', 'Bus Remplis');
        }
    }

    public function messagerie()
    {
        return view('messagerie');
    }
    public function propos()
    {
        return view('propos');
    }
    public function miseAjour()
    {
        $villeDepart = request('depart');
        $villeArrivee = request('arrivee');
        $dateDepart= request('dateDepart');

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
    public function afficheDestination(Request $request){
        $itineraires = Itineraire::select('VilleDepart', 'VilleArrivee')->distinct()->get();
        return view('ListeDestination', compact('itineraires'));
    }
}
