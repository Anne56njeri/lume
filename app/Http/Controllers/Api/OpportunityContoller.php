<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

use Dingo\Api\Routing\Helpers;
use App\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    use Helpers;
     // function to display all the users
    public function getOpportunity()
    {



        return response()->json(Opportunity::all());
    }

    //function to create a new user
    public function create(Request $request)
    {
    $opp = new Opportunity();

    $opp->name=$request->input('name',null);
    $opp->address=$request->input('address');


    $opp->save();
      return response()->json($opp,200);
    }
    // function to update the users data
  public function update($id,Request $request)

  {
    $opp=Opportunity::findOrFail($id);
    $opp->update($request->all());

    return response()->json($opp,200);
  }
  // function to display only the user whose id has been selected
  public function showOneOpportunity($id)
  {
    return response()->json(Opportunity::find($id));
  }
  // function to delete the user based on the id selected
    public function delete($id)
   {
     Opportunity::findOrFail($id)->delete();
     return response('Deleted',200);
    }

}
