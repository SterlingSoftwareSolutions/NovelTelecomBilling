<?php

namespace App\Http\Controllers;

use App\Models\ManualNote;
use Exception;
use Illuminate\Http\Request;

class ManualNoteController extends Controller
{


    public function store( Request $request){

        // return response()->json([
        //     $request
        // ]);
        $validatedData = $request->validate([
            'note' => 'required|string', // Adjust validation rules as needed
        ]);

        try {
            $note = ManualNote::create([
                'note' => $validatedData['note'],
            ]);
            return response()->json(['message' => 'Note saved successfully', 'note' => $note], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Failed to save note: ' . $e->getMessage()], 500);
        }
    }
}
