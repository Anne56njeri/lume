<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

use Dingo\Api\Routing\Helpers;
use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    use Helpers;
     // function to display all the users
    public function getMessage()
    {



        return response()->json(Messages::all());
    }

    //function to create a new user
    public function create(Request $request)
    {
    $message = new Messages();

    $message->name=$request->input('name',null);
    $message->address=$request->input('address');


    $message->save();
      return response()->json($message,200);
    }
    // function to update the users data
  public function update($id,Request $request)

  {
    $message=Messages::findOrFail($id);
    $message->update($request->all());

    return response()->json($message,200);
  }
  // function to display only the user whose id has been selected
  public function showOneMessage($id)
  {
    return response()->json(Messages::find($id));
  }
  // function to delete the user based on the id selected
    public function delete($id)
   {
     Messages::findOrFail($id)->delete();
     return response('Deleted',200);
    }

}
