<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use View;

class ClientController extends Controller
{
    public function index() : View
    {
        $clients = Client::latest()->paginate(8);

        return view('client.index', compact('clients'));
    }
}
