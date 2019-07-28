<?php

namespace App\Http\Controllers\Api;

use Hyperf\DbConnection\Db;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
        $resutl = Db::table('user')->select();

        return json_encode($resutl);
    }
}
