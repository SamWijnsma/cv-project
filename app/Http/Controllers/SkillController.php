<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\SkillModel;
use App\Models\UserModel;

class SkillController extends Controller
{

public function index()
{ 
View::render('skills/index.view', [
'user' => UserModel::get(1),
'skills' =>SkillModel::userSkills(1),
]);
}

/**
* Store a user record into the database
*/
public function store()
{
}

public function create()
{
}

public function show($user_id)
{

}

/**
* Updates a user record into the database
*/
public function update()
{
$data = [
'first_name' => "Code",
'last_name' => "Gorilla",
'email' => "toby@codegorilla.nl",
'password' => "q3234234q3213^^!^w23123",
'birthday' => "1990-12-31",
'created' => date("Y-m-d H:i:s"),
];

UserModel::update($data, 1);
}

/**
* Archive a user record into the database
*/
public function destroy(int $id)
{

}

}
