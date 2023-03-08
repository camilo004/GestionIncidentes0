<?php

namespace App\Http\Controllers;
use App\Models\Integracione;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Incident;
use App\Models\ProjectUser;
use App\Models\Project;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $selected_project_id = $user->selected_project_id;

        if ($user->is_support) {
            $my_incidents = Incident::where('project_id', $selected_project_id)
                                        ->where('support_id', $user->id)->get();

            $projectUser = ProjectUser::where('project_id', $selected_project_id)
            ->where('user_id', $user->id)->first();

            $pending_incidents = Incident::where('support_id', null)->where('level_id', $projectUser->level_id)->get();

            $incidents_by_my = Incident::where('client_id', $user->id)->where('project_id', $selected_project_id)->get();

            return view('home')->with(compact('pending_incidents', 'my_incidents', 'incidents_by_my'));

        }

        $incidents_by_my = Incident::where('client_id', $user->id)->where('project_id', $selected_project_id)->get();

        return view('home')->with(compact('incidents_by_my'));
    }


    public function selectProject($id)
    {
        // Validar que el usuario esté asociado con el proyecto
        $user = auth()->user();
        $user->selected_project_id = $id;
        $user->save();

        return back();
    }
}
