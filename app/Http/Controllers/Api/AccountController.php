<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Transformers\AccountTransformer;
use Dingo\Api\Routing\Helpers;
use App\Accounts;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    use Helpers;
     // function to display all the users
    public function getAccounts()
    {



        return response()->json(Accounts::all());
    }

    //function to create a new user
    public function create(Request $request)
    {
    $account = new Accounts();

    $account->name=$request->input('name',null);
    $account->address=$request->input('address');


    $account->save();
      return response()->json($account,200);
    }
    // function to update the users data
  public function update($id,Request $request)

  {
    $account=Accounts::findOrFail($id);
    $account->update($request->all());

    return response()->json($account,200);
  }
  // function to display only the user whose id has been selected
  public function showOneAccount($id)
  {
    return response()->json(Accounts::find($id));
  }
  // function to delete the user based on the id selected
    public function delete($id)
   {
     Accounts::findOrFail($id)->delete();
     return response('Delted',200);
    }

}
