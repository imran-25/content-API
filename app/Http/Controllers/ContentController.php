<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){

        $contents = Content::all();

                return response()->json([
                    'success' => true,
                    'message' => 'API Successfully Working',
                    'data' => $contents,
                ]);
        }
    }
