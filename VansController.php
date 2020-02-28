<?php
// Notes here
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VansController extends Controller
{
    public function create()
    {
        // $cities = City::all();
        $states = State::all();
        $departments = Department::all();
        return view('vans/create', [ 'vans' => $vans]);
    }
            
    // A Method that shows all the vans
    public function show()
            {
    
    }

}
