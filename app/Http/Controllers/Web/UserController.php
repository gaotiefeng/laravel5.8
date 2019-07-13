<?php

namespace App\Http\Controllers\Web;

use App\Model\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //TODO complete code
    public function index(Request $request)
    {
        $insertUser = new user();
        $insertUser->key=Str::random(6);
        $insertUser->name=Str::random(8);
        $insertUser->mobile=Str::random(11);
        $users = DB::table('user')->paginate(2);

        return view('user.user', [
            'users'=>$users
        ]);
    }

}
