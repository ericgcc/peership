<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LocaleController extends Controller
{
   public function countries(): JsonResponse{
        $countries = Country::select('id', 'name')->orderby('name')->get();
       return response()->json(['items' => $countries, 'selected'=>'']);
   }

   public function states(Request $request): JsonResponse{
       $country = $request->input('depdrop_parents')[0];
       $states = State::where(['country' => $country])
           ->select('id', 'name')
           ->orderby('name')
           ->get();

       return response()->json(['output' => $states, 'selected'=>'']);
   }
}
