<?php
// Notes here
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CytonnVans extends Controller
{
    public function create()
    {
        // $cities = City::all();
        $states = State::all();
        $departments = Department::all();
        return view('cytonnvans/create', [ 'cytonnvans' => $cytonnvans]);
    }
            
    // A Method that shows all the vans
    public function show()
            {
    
    }

}
