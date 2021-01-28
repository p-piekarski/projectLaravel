<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Redirect,Response;

class HistoryController extends Controller
{

    function json_view(){
        $data = DB::table('history')->get();

        echo '<pre>';
            print_r($data);
        echo '</pre>';
    }

    public function history(){
        return view('adminlte.history');
    }

    public function getHistory($id = 0){
        if($id==0) {
            $arr['data'] = History::orderBy('id', 'asc') -> get();
        }else{
            $arr['data'] = History::where('is', $id) -> first();
        }
        echo \json_encode($arr);
        exit;
    }


    public function index(){

        $histories = History::all();
        return view('adminlte.history',compact('histories'));
    }

    public function create(){
        return view('adminlte.createHistory');
    }

    public function storeHistory(){

        $history = new History();
        $history->rodzaj_operacji = request('rodzaj_operacji');
        $history->kwota = request('kwota');
        $history->save();

        return redirect('/history');

    }
}
