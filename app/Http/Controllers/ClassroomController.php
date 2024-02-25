<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClassroomController extends Controller
{
    public function index()
    {
        $students = User::query()->where(['classroom_id' => 1])->orderBy('name', 'asc')->get();
        return view('journal.classroom.index', compact('students'));
    }
    public function show($id)
    {
        $timetable = ['0' => '7:10', '1' => '8:00', '2' => '8:50', '3' => '9:40', '4' => '10:30', '5' => '11:35', '6' => '12:25', '7' => '13:15', '8' => '14:05', '9' => '14:55', '10' => '15:45', '11' => '16:35',];
        $student = User::find($id);
        $subjects = Subject::all()->toArray();
        $lessons = Lesson::query()->where(['classroom_id' => $student->classroom->id, 'day' => date('N') <= 5 ? date('N') : 1])->get();
        return view('journal.classroom.show', compact('id', 'student', 'lessons', 'timetable', 'subjects'));
    }
    public function edit($id)
    {
        $classes = Classroom::all();
        $student = User::find($id);
        return view('journal.classroom.edit', compact('id', 'student', 'classes'));
    }
    public function update(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'class' => ['required'],
            'photo' => ['file', 'image'],
        ]);

        $student = User::query()->where(['email' => $validated['email']])->first();
        $path = asset('storage/photos/default.png');
        if($request->hasFile('photo'))
        {
            $storaged = Storage::disk('public')->put("photos", $request->photo);
            $path = 'storage/'.$storaged;
        }
        $student->update([
            'name' => $validated['name'],
            'name' => $validated['name'],
            'name' => $validated['name'],
            'photo' => $path
        ]);

        return back();

    }
}
