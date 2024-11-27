<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bus;
class BusController extends Controller
{
    public function index(Request $request)
    {
        $buses = Bus::all();
        $activeLink = 'buses';
        return view('buses.index', compact('buses', 'activeLink'));
    }


    function search(Request $request)
    {
     if($request->ajax())
     {
      $query = $request->get('query');
      if($query != '')
      {
        $buses=Bus::where('immatriculation','like','%'.$request->search.'%')
        ->orwhere('nbrPlaces','like','%'.$request->search.'%')->get();
      }
      else
      {
       $buses = Bus::all();
      }
      return response()->json(["buses"=>$buses]);
    }}


    public function create(Request $request)
    {
        $Bus=$request->validate(['immatriculation' => 'required','nbrPlaces' => 'required']);
        $newbus = new Bus;
        $newbus->immatriculation=$Bus['immatriculation'];
        $newbus->nbrPlaces=$Bus['nbrPlaces'];
        $newbus->save();
        return redirect()->route('buses.index')->with('success', 'Bus added successfully!');
    }

    public function edit($id)
    {
        $post = Bus::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $Bus=$request->validate(['immatriculation' => 'required','nbrPlaces' => 'required']);

        $newbus = Bus::find($id);
        $newbus->immatriculation=$Bus['immatriculation'];
        $newbus->nbrPlaces=$Bus['nbrPlaces'];
        $newbus->save();
        
        return redirect()->route('buses.index')->with('success', 'Bus edited successfully.');
    }

    public function destroy(string $id)
    {
        Bus::where('idBus', $id)->first()->delete();
        return redirect()->route('buses.index')->with('success', 'Bus deleted successfully !');
    }
}
