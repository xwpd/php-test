<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * 查询或创建用户
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreRequest $request)
    {
        //
        $user = User::firstOrCreate([
            'id1' => $request->input('id1'),
            'id2' => $request->input('id2')
        ], ['userID' => Str::uuid()]);
        //$user = User::findOrCreate($request->input('id1'), $request->input('id2'));
        return response()->json(['userID' => $user->userID]);
    }

}
