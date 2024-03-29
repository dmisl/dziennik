<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Presence;
use App\Models\PresenceType;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    public function index()
    {
        return view('journal.lesson.index');
    }
    public function show($id, $date)
    {
        // timetable + teacher + teacher`s subjects
        $teacher = Auth::user()->teacher;
        $timetable = ['0' => '7:10', '1' => '8:00', '2' => '8:50', '3' => '9:40', '4' => '10:30', '5' => '11:35', '6' => '12:25', '7' => '13:15', '8' => '14:05', '9' => '14:55', '10' => '15:45', '11' => '16:35',];
        $subjects = Subject::query()->where(['teacher_id' => $teacher->id])->get('id');
        // Selected lesson + selected classroom + teacher`s lessons that day
        $currentLesson = Lesson::find($id);
        $lessons = Lesson::query()->where(['day' => $currentLesson->day])->whereIn('subject_id', $subjects)->get();
        $classroom = Classroom::find($currentLesson->classroom->id);
        // dates
        $day = $currentLesson->day;
        // presence types
        $presenceTypes = PresenceType::all()->toArray();
        return view('journal.lesson.show', compact('day', 'lessons', 'timetable', 'currentLesson', 'subjects', 'classroom', 'date', 'presenceTypes'));
    }
    public function edit($lesson_id, $classroom_id, $date)
    {
        // timetable + teacher + teacher`s subjects
        $teacher = Auth::user()->teacher;
        $timetable = ['0' => '7:10', '1' => '8:00', '2' => '8:50', '3' => '9:40', '4' => '10:30', '5' => '11:35', '6' => '12:25', '7' => '13:15', '8' => '14:05', '9' => '14:55', '10' => '15:45', '11' => '16:35',];
        $subjects = Subject::query()->where(['teacher_id' => $teacher->id])->get('id');
        // Selected lesson + selected classroom + teacher`s lessons that day
        $currentLesson = Lesson::find($lesson_id);
        $lessons = Lesson::query()->where(['day' => $currentLesson->day])->whereIn('subject_id', $subjects)->get();
        $classroom = Classroom::find($currentLesson->classroom->id);
        // dates
        $day = $currentLesson->day;
        // presence types
        $presenceTypes = PresenceType::all();
        return view('journal.lesson.edit', compact('day', 'lessons', 'timetable', 'currentLesson', 'subjects', 'classroom', 'date', 'presenceTypes'));
    }
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'type' => ['required', 'in:1,2,3,4,5,6,7'],
        ]);

        if($validator->fails())
        {
            return response()->json(
                ['error' => $validator->errors()]
            );
        }

        $presence = Presence::find($request->id)->update(['presence_type_id' => $request->type]);

        return response()->json([
            'message' => 'success'
        ]);

    }
}
