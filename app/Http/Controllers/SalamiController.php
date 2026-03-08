<?php

namespace App\Http\Controllers;

use App\Models\Salami;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SalamiController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $token = Str::random(8);

        Salami::create([
            'sender_name'=>$request->sender_name,
            'total_amount'=>$request->amount,
            'receiver_count'=>$request->receivers,
            'token'=>$token
        ]);

        return redirect('/open/'.$token);
    }
}