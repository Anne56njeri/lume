<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\User;
/*
we use transformers to modify data being returned to the api user
*/
class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
          'id'=> $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' =>$user->role,
            'added' => date('Y-m-d', strtotime($user->created_at))
        ];
    }
}
