<?php

namespace App\Http\Controllers;

use App\Models\EmailDatabase;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailDatabaseCreate extends Controller
{
    //
    public function index(Request $request): void
    {
        $this->validate($request, [
            "email" => "required|max:255",
            "platform" => "required|max:255"
        ]);
        EmailDatabase::create([
            "email" => $request->email,
            "platform" => $request->platform
        ]);
    }
}