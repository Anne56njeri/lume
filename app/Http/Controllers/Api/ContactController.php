<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

use Dingo\Api\Routing\Helpers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    use Helpers;
     // function to display all the users
    public function getContact()
    {



        return response()->json(Contact::all());
    }

    //function to create a new user
    public function create(Request $request)
    {
    $contact = new Contact();

    $contact->name=$request->input('name',null);
    $contact->address=$request->input('address');


    $contact->save();
      return response()->json($contact,200);
    }
    // function to update the users data
  public function update($id,Request $request)

  {
    $contact=Contact::findOrFail($id);
    $contact->update($request->all());

    return response()->json($contact,200);
  }
  // function to display only the user whose id has been selected
  public function showOneContact($id)
  {
    return response()->json(Contact::find($id));
  }
  // function to delete the user based on the id selected
    public function delete($id)
   {
     Contact::findOrFail($id)->delete();
     return response('Delted',200);
    }

}
