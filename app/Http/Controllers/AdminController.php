<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shedule;
use App\Models\Teacher;

use Auth;
use Illuminate\Console\Scheduling\Schedule;

class AdminController extends Controller
{
    public function shedules_Data(){
        $shedule=Shedule::all();

   return view('shedules_Data',compact('shedule'));

    }

    public function logout()
{
    Auth::logout();

    // You can redirect the user to a specific page after logout if needed
    return redirect('/login');
}
public function login(){


    return view('login');
}

public function add_shedule(){
    $Teachers=Teacher::all();

    return  view('add_shedule',compact('Teachers'));
}
public function store_shedule(Request $request)
{
  $data = $request->all();


  $t = Teacher::find($request->teacher_id);

  $schedule = new Shedule;
  $schedule->academic_year = $data['academic_year'];
    $schedule->semester_number = $data['semester_number'];
    $schedule->school_level = $data['school_level'];
    $schedule->teacher_name = $t->teacher_name;
    $schedule->teacher_number = $data['teacher_number'];
    $schedule->teacher_surname = $data['sure_name'];
    $schedule->teacher_line = $data['teacher_line'];
    $schedule->teacher_speciality = $data['teacher_speciality'];
    $schedule->day = $data['day'];
    $schedule->periods = $data['periods'];
    $schedule->class_name = $data['class_name'];
    $schedule->sub_class_name = $data['sub_class_name'];
    // $schedule->status = $data['status'];
    $schedule->subjects = $data['subjects'];

    $schedule->save();

//   Shedule::create($data);
  return redirect('shedules_Data')->with('message', 'Schedule created successfully');
}

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        $results = Shedule::where('school_level', 'like', '%' . $searchQuery . '%')
        ->orWhere('teacher_name', 'like', '%' . $searchQuery . '%')
        ->orWhere('teacher_number', 'like', '%' . $searchQuery . '%')
        ->orWhere('teacher_surname', 'like', '%' . $searchQuery . '%')
        ->orWhere('teacher_line', 'like', '%' . $searchQuery . '%')
        ->orWhere('teacher_speciality', 'like', '%' . $searchQuery . '%')
        ->orWhere('day', 'like', '%' . $searchQuery . '%')
        ->orWhere('periods', 'like', '%' . $searchQuery . '%')
        ->orWhere('class_name', 'like', '%' . $searchQuery . '%')
        ->orWhere('sub_class_name', 'like', '%' . $searchQuery . '%')
        ->orWhere('status', 'like', '%' . $searchQuery . '%')
        ->orWhere('semester_number', 'like', '%' . $searchQuery . '%')
        ->orWhere('subjects', 'like', '%' . $searchQuery . '%')
        ->orWhere('academic_year', 'like', '%' . $searchQuery . '%')->get();




        return view('searched_data',compact('results'));

    }

    public function add_teacher(){


         return view('add_teacher');
    }
    public function teachers_Data(){

        $Teacher=Teacher::all();
        return view('teachers_Data',compact('Teacher'));


    }


    public function store_teacher(Request $request)
    {

        $add = Teacher::create([
            'teacher_name' => $request->input('teacher_name'),
            'sure_name' => $request->input('sure_name'),
            'nickname' => $request->input('nickname'),
            'teacher_speciality' => $request->input('teacher_speciality'),
            'teacher_line' => $request->input('teacher_line'),
            'teacher_number' => $request->input('teacher_number'),
        ]);

        // You can add any additional logic or redirection here

        return  redirect('teachers_Data')->with('message', 'Teachers created successfully');
    }

    public function getTeacherSureName(Request $request)
{
    $teacherId = $request->input('teacher_id');
    $teacher = Teacher::find($teacherId);

    if ($teacher) {
        return response()->json(['sure_name' => $teacher->sure_name]);
    }

    return response()->json(['sure_name' => null]);
}

public function getTeacherDetails(Request $request)
{
    $data = Teacher::find($request->teacher_id); // Assuming your Teacher model is named "Teacher"

    if ($data) {
        $maindata['teacher_sure_name'] = $data->sure_name;
        $maindata['teacher_speciality'] = $data->teacher_speciality;
        $maindata['teacher_line'] = $data->teacher_line;
        $maindata['teacher_name'] = $data->teacher_name;
        $maindata['teacher_number'] = $data->teacher_number;

        return response()->json($maindata);
    } else {
        return response()->json(['error' => 'Teacher not found'], 404);
    }
}

public function delete_sch($id){
    Shedule::find($id)->delete();
    return redirect()->back();
}

public function update_sch($id){
    $data = Shedule::find($id);
    $Teachers=Teacher::all();
    return view("update-schedule")->with(['data' => $data, 'Teachers' => $Teachers]);
}


public function edit_sch(Request $request){

    $data = $request->all();
    $t = Teacher::find($request->teacher_id);

  $schedule = Shedule::find($data['id']);
  $schedule->academic_year = $data['academic_year'];
    $schedule->semester_number = $data['semester_number'];
    $schedule->school_level = $data['school_level'];
    $schedule->teacher_name = $t->teacher_name;
    $schedule->teacher_number = $data['teacher_number'];
    $schedule->teacher_surname = $data['sure_name'];
    $schedule->teacher_line = $data['teacher_line'];
    $schedule->teacher_speciality = $data['teacher_speciality'];
    $schedule->day = $data['day'];
    $schedule->periods = $data['periods'];
    $schedule->class_name = $data['class_name'];
    $schedule->sub_class_name = $data['sub_class_name'];
    // $schedule->status = $data['status'];
    $schedule->subjects = $data['subjects'];

    $schedule->save();

//   Shedule::create($data);
  return redirect('shedules_Data')->with('message', 'Schedule created successfully');
}


public function delete_te($id){
    Teacher::find($id)->delete();
    return redirect()->back();
}

public function update_te($id){
    $data = Teacher::find($id);
    // $Teachers=Teacher::all();
    return view("update-teacher")->with(['data' => $data]);
}

public function edit_te(Request $request){
    $teacher = Teacher::find($request->id);

    if ($teacher) {
        $teacher->teacher_name = $request->input('teacher_name');
        $teacher->sure_name = $request->input('sure_name');
        $teacher->nickname = $request->input('nickname');
        $teacher->teacher_speciality = $request->input('teacher_speciality');
        $teacher->teacher_line = $request->input('teacher_line');
        $teacher->teacher_number = $request->input('teacher_number');

        $teacher->save();
}
return redirect('teachers_Data');
}



}
