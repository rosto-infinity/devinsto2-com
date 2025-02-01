<?php

namespace App\Http\Controllers;

use App\Models\AI;
use Illuminate\Http\Request;

class AIController extends Controller
{
    public function index(Request $request)
    {
        return AI::query()
            ->orderBy('created_at', 'desc')
            ->cursorPaginate(15)
            ->through(function ($item) {
                return [
                    'id' => $item->id,
                    'message' => $item->message,
                    'created_at' => $item->created_at
                    // ajoutez d'autres champs selon vos besoins
                ];
            });
    }
}
