<?php

namespace App\Http\Controllers\Entry;

use App\Models\School\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Student $student)
    {
        if ($request->has('id')) {
            $student = $student->where('id', 'like', "{$request->input('id')}%");
        }

        if ($request->has('name')) {
            $student = $student->where('name', 'like', "%{$request->input('name')}%");
        }

        if ($request->has('generation')) {
            $student = $student->where('generation', $request->input('generation'));
        }

        return $student->limit(20)->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Student $student)
    {
        if (!$request->has('id')) {
            return [];
        }

        $student = $student->find($request->input('id'));

        if (!$student) {
            return [];
        }

        $student->colleger()->delete();
        $student->ranks()->delete();
        $student->scores()->delete();
        $student->delete();

        return $student;
    }
}
