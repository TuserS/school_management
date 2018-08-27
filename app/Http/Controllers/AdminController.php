<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\course;
use App\Users;


class AdminController extends Controller
{
    public function request() {
        $courseUsers = DB::table('user_course')
            ->join('users', 'users.id', '=', 'user_course.user_id')
            ->join('courses', 'courses.id', '=', 'user_course.course_id')
            ->where('request', 'notapp')
            ->select('user_course.id as id', 'users.id as uid', 'users.name as sname', 'courses.name as cname', 'courses.teacher as cteacher')
            ->get();

        $DroupUsers = DB::table('user_course')
            ->join('users', 'users.id', '=', 'user_course.user_id')
            ->join('courses', 'courses.id', '=', 'user_course.course_id')
            ->where('drop_course', 'drop')
            ->select('user_course.id as id', 'users.id as uid', 'users.name as sname', 'courses.name as cname', 'courses.teacher as cteacher')
            ->get();

        return view('admin.request', ['course' => $courseUsers, 'drop' => $DroupUsers]);
    }

    public function requestCourseAccept($tcid) {
        DB::table('user_course')
            ->where('user_course.id', $tcid)
            ->update(['request' => 'app']);

        return redirect('/admin/request');
    }

    public function requestCourseDelete($tcid) {
        DB::table('user_course')->where('user_course.id', $tcid)->delete();

        return redirect('/admin/request');
    }

    public function requestDropAccept($tcid) {
        DB::table('user_course')->where('user_course.id', $tcid)->delete();

        return redirect('/admin/request');
    }

    public function requestDropDelete($tcid) {
        DB::table('user_course')
            ->where('user_course.id', $tcid)
            ->update(['drop_course' => 'notdrop']);

        return redirect('/admin/request');
    }

    public function academic() {
        $teacher = DB::table('users')
            ->where('role', 'teacher')
            ->select('users.id as tid', 'users.name as tname')
            ->get();

        $course = DB::table('courses')
            ->where('teacher', 'not')
            ->select('courses.id as cid', 'courses.name as cname')
            ->get();

        $assign = DB::table('courses')
            ->where('teacher', '<>', 'not')
            ->select('courses.id as cid', 'courses.code as ccode', 'courses.name as cname', 'courses.teacher as cteacher')
            ->get();

        return view('admin.academic', ['teacher' => $teacher, 'course' => $course , 'assign' => $assign]);
    }

    public function academicAssign(Request $request) {
        $cid = $request->input('course');
        $tid = $request->input('teacher');

        $tname = DB::table('users')
            ->where('users.id', $tid)
            ->select('users.name as name')
            ->first();

        DB::table('courses')
            ->where('courses.id', $cid)
            ->update(['courses.teacher' => $tname->name, 'courses.user_id' => $tid]);

        return redirect('/admin/academic');
    }

    public function academicRemove($cid) {
        DB::table('courses')
            ->where('courses.id', $cid)
            ->update(['courses.teacher' => 'not', 'courses.user_id' => null]);

        return redirect('/admin/academic');
    }

    public function academicCreateCourse() {
        return view('admin.createCourse');
    }

    public function academicCreateTeacher() {
        return view('admin.createTeacher');
    }

    public function academicCourseCreated(Request $request) {
        $c = new course();
        $c->code= $request->courseCode;
        $c->name= $request->courseName;
        $c->enroll_limit= $request->studentLimit;
        $c->teacher= 'not';
        $c->user_id= Null;
        $c->save();

        $request->session()->flash('message', 'Course create successfully!');


        return redirect('/admin/academic');
    }

    public function academicTeacherCreated(Request $request) {
        $u = new Users();
        $u->name= $request->name;
        $u->email= $request->email;
        $u->gender= $request->Gender;
        $u->password= $request->password;
        $u->role= "teacher";
        $u->blocked= 0;
        $u->save();

        $request->session()->flash('message', 'Teacher create successfully!');

        return redirect('/admin/academic');
    }


    public function block() {
        $teacher = DB::table('users')
            ->where('role', 'teacher')
            ->where('blocked', '0')
            ->select('users.id as tid', 'users.name as tname')
            ->get();

        $teacherBlock = DB::table('users')
            ->where('role', 'teacher')
            ->where('blocked', '1')
            ->select('users.id as tid', 'users.name as tname')
            ->get();

        $student = DB::table('users')
            ->where('role', 'student')
            ->where('blocked', '0')
            ->select('users.id as sid', 'users.name as sname')
            ->get();

        $studentBlock = DB::table('users')
            ->where('role', 'student')
            ->where('blocked', '1')
            ->select('users.id as sid', 'users.name as sname')
            ->get();


        return view('admin.block', ['teacher' => $teacher, 'student' => $student, 'teacherBlock' => $teacherBlock, 'studentBlock' => $studentBlock]);
    }

    public function blockBlock(Request $request) {
        $uid = $request->input('user');

        DB::table('users')
            ->where('users.id', $uid)
            ->update(['blocked' => '1']);

        return redirect('/admin/block');
    }

    public function blockUnblock($uid) {

        DB::table('users')
            ->where('users.id', $uid)
            ->update(['blocked' => '0']);

        return redirect('/admin/block');
    }


}
