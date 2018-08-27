<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\course;
use App\Users;


class TeacherController extends Controller
{
    public function index()
    {   

        $courses = DB::table('courses')
        ->get();



        $countArr = collect([]);


 
        foreach($courses as $course){
            if ( $course->user_id == session('user')->id ) {
                $studentCount = "N/A"; 
                $studentCount = DB::table('user_course')->where('course_id',$course->id)
                                                        ->where('request' ,'=', 'approved')
                                                        ->count('user_id');
                $countArr->push($studentCount);

               
            }

          
        }
   

          return view('teacherHome.index', ['courses' => $courses], ['countArr'=> $countArr]);

    }
    public function showProfile()
    {
        return view("teacherProfile.index");  
    }

    public function showEditTeacherProfile()
    {
        return view('editTeacherProfile.index');
    }
    public function editTeacherProfile(Request $request)
    {
        //code for editing teacher
        $t = Users::find(session('user')->id);
        $t->name = $request->name;
    	$t->email = $request->email;
    	$t->gender = $request->Gender;
    	 
    	if($t->save()){
            $request->session()->flash('messageSuccess', 'Update successfull');
            return redirect()->back();
        }
        else{
            $request->session()->flash('messageFaliure', 'Update not');
            return redirect()->back();
        }


    }

    public function showChangePassword()
    {
        return view('changeTeacherPassword.index');

    }

    //changes password
    public function changePassword(Request $request)
    {
        //echo session('user')->password;
        

         
 
        if(session('user')->password == $request->currentPass){
            $t = Users::find(session('user')->id);
            $t->password = $request->currentPass;
            
            if($t->save()){
                $request->session()->flash('messageSuccess', 'Password changed!!!');
                return redirect()->back();
            }
            else{
                $request->session()->flash('messageFail', 'Password change failed!');
                return redirect()->back();
            }
        }
        else
        {
            $request->session()->flash('messageFail', 'Incorrect password');
            return redirect()->back();     
        }
        //return view('changeTeacherPassword.index');

    }
}
