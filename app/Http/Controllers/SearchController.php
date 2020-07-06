<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Carbon;

class SearchController extends Controller
{
    public function search(Request $request){

        $query = $request->input('blood_group');
        $q = $request->input('location');
      
        $datas= user::where('location', 'like', "%$q%")
               ->Where('blood_group', 'like', "%$query%")
               ->paginate(10);
            return view('blood.search', compact('datas'));
        
        
         
            
    }
}
