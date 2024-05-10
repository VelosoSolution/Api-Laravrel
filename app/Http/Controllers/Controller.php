<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\User;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use PhpParser\Node\UseItem;

class Controller extends BaseController
{
    public function index()
    {
        
        $user = ModelsUser::all();
        return response()->json($user);
    }

    public function Store(Request $request)
    {
        $user = ModelsUser::create($request->all());
        return response()->json($user, 201);
    }

    public function show($id)
    {
        $user = ModelsUser::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = ModelsUser::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        ModelsUser::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

