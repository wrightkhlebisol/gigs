<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registerCourse(User $user, Request $request)
    {
        $currentUser = User::findOrFail($request->user_id);

        // return $currentUser;

        if (Course::findOrFail($request->course_id)) {
            $courseId = $request->course_id;

            $currentUser->courses()->attach($courseId);

            return response()->json(['Success' => 'Subscribed to course'], 200);
        } else {

            return response()->json(['Failed' => 'That course is not available'], 404);
        }
    }
}
