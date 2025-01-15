<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Student Registeration Form</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col ">
                <div class="card">
                    <div class="card-title m-auto d-flex gap-3 mt-3">
                        <div class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">


                        </div>
                        <h4 class="mt-3">Federal Urdu University Of Arts Science Ans Technology Islamabad</h4>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center mt-5">
                        <div class="col-3">
                            <h5>Country</h5> <label for="">{{  $student_data->country }}</label>
                        </div>
                        <div class="col-4" >
                            <h4>Acedmic reocord</h4>
                            <div style="margin-left: 31px" >
                                <div class="d-flex gap-3">
                                    <h6>Semester :</h6>
                                    <label for="" style="text-align: center">{{ $student_data->semester }}</label>
                                </div>

                                <div class="d-flex gap-3">
                                    <h6>Shift  :</h6>
                                    <label for="" style="text-align: center">{{ $student_data->shift }}</label>
                                </div>


                            </div>

                        </div>
                        <div class="col-5 image">
                            <img src="{{ $student_data->getMedia('image')->first()->getUrl() }}" alt="Student Image">
                        </div>
                    </div>
                    <hr class="line">
                    <div class="card-body">
                        <div class="w-full d-flex justify-content-center align-content-center my-1">
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 25%; font-weight:600">Student Name :</p>
                                <p class="border-bottom border-dark" style="width: 80%">{{ $student_data->full_name }}</p>
                            </div>
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 25%; font-weight:600" class="mx-3">Applicant CNIC :</p>
                                <p id="cnic" class="border-bottom border-dark" style="width: 80%"> {{ $student_data->student_cnin }}</p>
                            </div>
                        </div>

                        <div class="w-full d-flex justify-content-center align-content-center my-2">
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 20%; font-weight:600">Father Name :</p>
                                <p class="border-bottom border-dark" style="width: 80%">{{ $student_data->full_name }}</p>
                            </div>
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 20%; font-weight:600" class="mx-3">Father CNIC :</p>
                                <p id="f_cnic" class="border-bottom border-dark" style="width: 80%"> {{ $student_data->father_cnin }}</p>
                            </div>
                        </div>

                        <div class="w-full d-flex justify-content-center align-content-center my-1">
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 25%; font-weight:600">Gender :</p>
                                <p class="border-bottom border-dark" style="width: 20%">{{ $student_data->gender }}</p>
                            </div>
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 39%; font-weight:600">Department :</p>
                                <p class="border-bottom border-dark" style="width: 50%">{{ $student_data->department }}</p>
                            </div>
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 25%; font-weight:600">Shift :</p>
                                <p class="border-bottom border-dark" style="width: 25%">{{ $student_data->shift }}</p>
                            </div>
                            <div style="width: 50%" class="d-flex">
                                <p style="width: 28%; font-weight:600">Semester :</p>
                                <p class="border-bottom border-dark mx-2" style="width: 20%">{{ $student_data->semester }}</p>
                            </div>
                        </div>

                        <div style="width: 100%" class="d-flex my-5">
                            <p style="width: 10%; font-weight:600">Address :</p>
                            <p class="border-bottom border-dark" style="width: 90%">{{ $student_data->address }}</p>
                        </div>
                        <hr>

                    </div>

                    <div style="width: 100%; text-align:center" class="d-flex flex-column my-5">
                        <h3 class="mb-5">Education Information</h3>
                        <table class="table table-bordered m-auto" style="width: 80%">

                            <thead>
                                <tr>
                                    <th>SSC</th>
                                    <th>Board</th>
                                    <th>Obtained Marks</th>
                                    <th>Total Marks</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $student_data->ssc }}</td>
                                    <td>{{ $student_data->ssc_board }}</td>
                                    <td>{{ $student_data->ssc_obtaine_marks}}</td>
                                    <td>{{ $student_data->ssc_total_marks }}</td>
                                    <td>{{ ($student_data->ssc_obtaine_marks / $student_data->ssc_total_marks) * 100 }}</td>


                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered m-auto my-5" style="width: 80%">

                            <thead>
                                <tr>
                                    <th>HSC</th>
                                    <th>Board</th>
                                    <th>Obtained Marks</th>
                                    <th>Total Marks</th>
                                    <th>Percentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $student_data->hsc }}</td>
                                    <td>{{ $student_data->hsc_board }}</td>
                                    <td>{{ $student_data->hsc_obtaine_marks}}</td>
                                    <td>{{ $student_data->hsc_total_marks }}</td>
                                    <td>{{ ($student_data->hsc_obtaine_marks / $student_data->hsc_total_marks) * 100 }}</td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                   
                    <div class="card-footer text-center py-5">
                        <p class="mb-0">© 2024 Feral Urdu University. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
