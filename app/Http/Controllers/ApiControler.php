<?php

namespace App\Http\Controllers;

use App\Models\Pairs;
use App\Models\Currency;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\delete
// use Illuminate\Http\delete;

class ApiControler extends Controller
{

    // **************** Api pour les devises ****************
    // Liste des devises
    public function currencyListApi()
    {
        return response()->json(Currency::all());
    }

    // la creation des desvise
    public function createCurrencyApi(Request $request)
    {
        $item = Currency::create($request->all());
        return response()->json($item);
    }

    // la suppression d'une devise

    public function deleteCurrencyApi($id)
    {
        $currency = Currency::find($id);
        if ($currency) {
            $currency > delete();
            return response()->json(["status" => "success"]);
        } else {
            return response()->json(["status" => "error"]);
        }
    }


    // **************** Api pour les pairs ****************
    // la liste des pairs

    // public function ListApi()
    // {
    //     $pairs = Pairs::all();
    //     $pair_json = [];
    //     foreach ($pairs as $pair) {
    //         $P = [];
    //         $currency_start = Currency::find($pair->currency_start);
    //         $currency_end = Currency::find($pair->currency_end);
    //         $P = [
    //             "id" => $pair->id,
    //             "currency_start" => $currency_start->currency_code,
    //             "currency_end" => $currency_end->currency_code,
    //             "rate" => $pair->rate
    //         ];
    //         array_push($pair_json, json_encode($P, JSON_FORCE_OBJECT));
    //     }
    //     $a = Pairs::with("pairs")->get();
    //     return response()->json($a);
    // }

    public function ListApi()
    {
        return response()->json(Pairs::all());
    }

    // la creation des pairs
    public function createApi(Request $request)
    {
        $item = Pairs::create($request->all());
        return response()->json($item);
    }

    // la suppression d'une pair

    // public function deleteApi($id)
    // {
    //     $pair = Pairs::find($id);
    //     if ($pair) {
    //         $pair > delete();
    //         return response()->json(["status" => "success"]);
    //     } else {
    //         return response()->json(["status" => "error"]);
    //     }
    // }

    // Api utilisateur
    public function createUser(Request $request)
    {
        $item = User::create($request->all());
        return response()->json($item);
    }
}
