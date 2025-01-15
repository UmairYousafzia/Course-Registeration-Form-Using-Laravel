<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_data = Student::get();

        return view('index', compact('student_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'department' => ['required', 'string'],
            'program' => ['required', 'string'],
            'shift' => ['required', 'string'],
            'semester' => ['required', 'string'],
            'full_name' => ['required', 'string', 'max:255'],
            'student_cnin' => ['required', 'digits:13', 'numeric', 'unique:students,student_cnin'],
            'father_name' => ['required', 'string', 'max:255'],
            'father_cnin' => ['required', 'digits:13', 'numeric', 'unique:students,father_cnin'],
            'gender' => ['required', 'in:male,female'],
            'country' => ['required', 'string'],
            'birth_date' => ['required', 'date'],
            'city' => ['required', 'string'],
            'mobile_number' => ['required', 'digits:11', 'numeric',],
            'address' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email'],
            'password' => ['required', 'string', 'min:8'],
            'ssc' => ['required', 'string'],
            'ssc_obtaine_marks' => ['required', 'numeric', 'max:1100'],
            'ssc_total_marks' => ['required', 'numeric', 'max:1100'],
            'hsc' => ['required', 'string'],
            'hsc_obtaine_marks' => ['required', 'numeric', 'max:1100'],
            'hsc_total_marks' => ['required', 'numeric', 'max:1100'],
            'image' => ['required', 'mimes:jpeg,jpg,png', 'max:2048'],
            'domicile' => ['required', 'mimes:pdf', 'max:2048'],
            'ssc_file' => ['required', 'mimes:pdf', 'max:2048'],
            'hsc_file' => ['required', 'mimes:pdf', 'max:2048'],
            'ssc_board' => ['required', 'string'],
            'hsc_board' => ['required', 'string'],
            'ssc_year' => ['required', 'string'],
            'hsc_year' => ['required', 'string'],
        ]);


        $data['password'] = Hash::make($data['password']);



        try {

            DB::beginTransaction();
            $student = Student::create($data);

            if($request->hasFile('image')){
                $student->addMedia($request->file('image')) ->toMediaCollection('image');
            }
            if($request->hasFile('domicile')){
                $student->addMedia($request->file('domicile')) ->toMediaCollection('domicile');
            }
            if($request->hasFile('ssc_file')){
                $student->addMedia($request->file('ssc_file')) ->toMediaCollection('ssc_file');
            }
            if($request->hasFile('hsc_file')){
                $student->addMedia($request->file('hsc_file')) ->toMediaCollection('hsc_file');
            }

            DB::commit();
            return to_route('student.index');

        }

        catch (\Exception $e) {

        DB::rollback();
        return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $student_data = Student::findOrFail($id);


        return view('Student_form', compact('student_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Student::findOrFail($id);
        $user->delete();
        return to_route('student.index');
    }
}
