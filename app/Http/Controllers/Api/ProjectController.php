<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{


    public function index(){
       // $projects = Project::with('type','technologies')->get();
       $projects = Project::with( 'type', 'technologies' )->paginate(2);
        return response()->json([
            'success'=>true,
            'projects'=>$projects
        ]);
    }


}
