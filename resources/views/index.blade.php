<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 5 DataTables integration -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Student Registration Form</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-title m-auto d-flex gap-3 mt-3">
                        <div class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </div>
                        <h4 class="mt-3">Feral Urdu University Of Arts Science Ans Technology Islamabad</h4>
                    </div>

                    <hr class="line">

                    <div style="width: 100%" class="d-flex ">
                        <div class="table" style="width:90%; margin:auto" >
                            <table class="table table-bordered " id="studentTable">
                                <thead>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Gender</th>
                                        <th>Department</th>
                                        <th>Shift</th>
                                        <th>Semester</th>
                                        <th>Mobile no :</th>
                                        <th> Country</th>
                                        <th> Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($student_data as  $student)

                                        <tr>
                                            <td>{{ $student->full_name }}</td>
                                            <td>{{ $student->father_name}}</td>
                                            <td>{{ $student->gender }}</td>
                                            <td>{{ $student->department }}</td>
                                            <td>{{ $student->shift }}</td>
                                            <td>{{ $student->semester }}</td>
                                            <td>{{ $student->mobile_number }}</td>
                                            <td>{{ $student->country }}</td>
                                            <td class=" d-flex  gap-3">
                                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-primary">View</a>
                                              
                                                <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                                    @csrf
                                                    @method('Delete')
                                                    <button class="btn btn-danger" type="submit"> Delete</button>
                                                </form>
                                            </td>
                                                                                                                                                                  
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#studentTable').DataTable();
        });
    </script>

</body>
</html>
