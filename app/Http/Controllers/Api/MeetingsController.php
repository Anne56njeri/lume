<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

use Dingo\Api\Routing\Helpers;
use App\Meetings;
use Illuminate\Http\Request;

class MeetingsController extends Controller
{
    use Helpers;
     // function to display all the users
    public function getMeeting()
    {



        return response()->json(Meetings::all());
    }

    //function to create a new user
    public function create(Request $request)
    {
    $meeting = new Meetings();

    $meeting->name=$request->input('name',null);
    $meeting->address=$request->input('address');


    $meeting->save();
      return response()->json($meeting,200);
    }
    // function to update the users data
  public function update($id,Request $request)

  {
    $meeting=Meetings::findOrFail($id);
    $meeting->update($request->all());

    return response()->json($meeting,200);
  }
  // function to display only the user whose id has been selected
  public function showOneMeeting($id)
  {
    return response()->json(Meetings::find($id));
  }
  // function to delete the user based on the id selected
    public function delete($id)
   {
     Meetings::findOrFail($id)->delete();
     return response('Deleted',200);
    }

}
