<?php

namespace App\Http\Controllers\Client;

use App\Models\Author;


class AuthorInformationController
{
public function index()
{
    $authors = Author::all();
    return view('main.team',['authors' => $authors]);


}
    public function showTeamDetails()
    {
        $authors = Author::paginate(10);
        return view('main.team-details', ['authors' => $authors]);
    }
}
