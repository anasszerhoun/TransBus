<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bus;
use Illuminate\Support\Facades\Redis;

class MenuController extends Controller
{
    public function dashboard(){
        return view('buses.dashboard');
    }
}

?>
