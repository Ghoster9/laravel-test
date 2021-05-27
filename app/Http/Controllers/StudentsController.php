<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Student::all(); //ini tidak disarankan
        /**
         * ['students' => $students] bisa mengunakan fungsi php compact('students) sama saja
         */
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource. // untuk menambah data baru
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage. // untuk mengelola data dan menyimpan ke storage ini edit bisany edit data
     * insert
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        // ada 3 alternative
        // ini akan mengisi dari request nama ke nama ini dapat dari form // lama punya
        // $request->nama = $request->nama;
        // $request->npm = $request->npm;
        // $request->email = $request->email;
        // $request->jurusan = $request->jurusan;

        // ini akan mengisi dari request nama ke nama ini dapat dari form // baru

        // validasi agar form diminta sesuai // jika validasi tidak terpenuhi maka dia akan reload saja. tidak melakukan aksis apapun.
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|size:9',
        ]);


        $student = Student::create([
            'nama'     => $request->nama,
            'npm'     => $request->npm,
            'email'   => $request->email,
            'jurusan' => $request->jurusan
        ]);

        // jika fillable telah diisi bisa disingkat menjadi // ini hnay mengambil yang ada di fillable model saja. // galat
        //$student = Student::create([$request->all()]);


        // save db
        $student->save();
        // balik lagi ke halaman setelah berhasil tambah data
        return redirect('/students')->with('status', 'Data mahasiswa berhasil ditambah');
    }

    /**
     * Display the specified resource. hanya satu parameter 1
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
