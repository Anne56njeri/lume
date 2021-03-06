<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use Helpers;
     // function to display all the users
    public function getUsers()
    {

        $users = User::all();

        return $this->response->collection($users, new UserTransformer);

    }

    //function to create a new user
    public function create(Request $request)
    {
    $user = new User;

    $user->name=$request->input('name',null);
    $user->email=$request->input('email');
    $user->password=$request->input('password');
    $user->role=$request->input('role');

    $user->save();
      return response()->json($user,200);
    }
    // function to update the users data
  public function update($id,Request $request)

  {
    $user=User::findOrFail($id);
    $user->update($request->all());

    return response()->json($user,200);
  }
  // function to display only the user whose id has been selected
  public function showOneUser($id)
  {
    return response()->json(User::find($id));
  }
  // function to delete the user based on the id selected
    public function delete($id)
   {
     User::findOrFail($id)->delete();
     return response('Delted',200);
    }

}
