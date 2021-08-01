<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\HobbiesModel;
use App\Models\JobModel;
use App\Models\UserModel;
use App\Models\SkillModel;
use App\Models\EducationModel;

class AllController extends Controller
{

    public function index()
    {   
        View::render('alles/index.view', [
            'user' => UserModel::get(1),
            'hobbies' =>HobbiesModel::userHobbies(1),
            'jobs' =>JobModel::userJobs(1),
            'skills' =>SkillModel::userSkills(1),
            'educations' =>EducationModel::userEducations(1),
            
    ]);
    }
}