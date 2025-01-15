<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <form action="{{ route('student.store') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class=" m-auto d-flex gap-3 mt-3 mb-4  justify-content-center" >
                            <div class="logo">
                                <img src="{{ asset('images/logo.png') }}" alt="">


                            </div>
                            <h4 class="mt-3">Federal Urdu University Of Arts Science Ans Technology Islamabad</h4>
                        </div>
                        <div class="main_heading">
                            <h3 class="mb-0 text-uppercase text-center ">Admisstion Form</h3>

                        </div>

                        <hr>
                        <div class="d-flex justify-content-center gap-5 move mb-2">
                            <p class="btn" id="addmisstion_info">Admisstion Info</p>
                            <p class="btn" id="persnal_info">Persnal Info</p>
                            <p class="btn" id="Academic_info">Academic Record</p>
                            <p class="btn" id="Attach_documents">Attach Documents</p>
                        </div>
                        <div class="card card_1 border-top border-0 border-4 border-primary top_main">
                            <div class="card-body ">
                                <div class="card-title d-flex align-items-center top_main">

                                    <h4 class="mb-0 text-secondary">Admisstion Info</h4>
                                </div>
                                <hr>

                                    <div class="row g-3 mb-4">

                                        <div class="col-md-6">
                                            <label for="department" class="form-label">Department<sup class="text-danger" >*</sup></label>
                                            <select id="department" class="form-select @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}">
                                                <option value="" disabled selected>Select Department...</option>
                                                <option value="computer_sceince">Computer Science</option>
                                                <option value="bba">BBA</option>
                                                <option value="electrical_dep">Electrical Department</option>
                                            </select>
                                            @error('department')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <p id="department_error" class="text-danger"></p>

                                        </div>

                                        <div class="col-md-6">
                                            <label for="program" class="form-label ">Program<sup class="text-danger" >*</sup></label>
                                            <select id="program" class="form-select @error('program') is-invalid @enderror" name="program" value="{{ old ('program')}}">
                                                <option value="" disabled selected>Select Program...</option>
                                                <option value="bs">BS</option>
                                                <option value="ms">MS</option>
                                                <option value="phd">PhD</option>
                                            </select>
                                            @error('program')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <p id="program_error" class="text-danger"></p>
                                           
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="shift" class="form-label "> Shift<sup class="text-danger" >*</sup></label>
                                            <select id="shift" class="form-select @error('shift') is-invalid @enderror " name="shift" value={{ old('shift') }}>
                                                <option value="" disabled selected > Select Shiift...</option>
                                                <option value="morning">Morning</option>
                                                <option value="evening">Evening</option>
                                            </select>
                                            @error('shift')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <p id="shift_error" class="text-danger"></p>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="semester" class="form-label ">Semester<sup class="text-danger" >*</sup></label>
                                            <select id="semester" class="form-select @error('semester') is-invalid @enderror" name="semester" value={{ old('semester') }}>
                                                <option value="" disabled selected>Select Semester...</option>
                                                <option value="fall">Fall</option>
                                                <option value="spring">Spring</option>
                                            </select>
                                            @error('semester')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <p id="semester_error" class="text-danger"></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        {{-- end of card one --}}
                         {{--Personal Information   --}}
                        <div class="card card_2 border-top border-0 border-4 border-primary top_main">
                            <div class="card-body">

                                <div class="card-title d-flex align-items-center main">
                                    <h4 class="mb-0 text-secondary">Persnal Info</h4>
                                </div>
                                <hr>
                                <div class="row g-3  mb-2">

                                    <div class="col-md-6">
                                        <label for="full_name" class="form-label">Full Name <sup class="text-danger">* </sup></label>
                                        <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" value={{ old('full_name') }}>
                                        @error('full_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="full_name_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="student_cnin" class="form-label">Student CNIC<sup class="text-danger">* </sup> <span class="text-muted">(Without Dashes)</span></label>
                                        <input type="text" class="form-control @error('student_cnin') is-invalid @enderror" id="student_cnin" name="student_cnin" value="{{ old('student_cnin') }}" maxlength="14">
                                        @error('student_cnin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="student_cnin_error" class="text-danger"></p>
                                    </div>
                                </div>
                                <div class="row g-3  mb-2">
                                    <div class="col-md-6">
                                        <label for="father_name" class="form-label">Father Name <sup class="text-danger">* </sup></label>
                                        <input type="text" name="father_name" class="form-control @error('father_name') is-invalid @enderror" id="father_name" value={{ old('father_name') }}>
                                        @error('father_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="father_name_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="father_cnin" class="form-label">Father CNIC<sup class="text-danger">* </sup> <span class="text-muted">(Without Dashes)</span></label>
                                        <input type="text" class="form-control @error('father_cnin') is-invalid @enderror" id="father_cnin" name="father_cnin"  value="{{ old('father_cnin') }}" maxlength="14">
                                        @error('father_cnin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="father_cnin_error" class="text-danger"></p>
                                    </div>
                                </div>
                                <div class="row g-3 mb-2">
                                    <div class="col-4">

                                        <label for="gender" class="form-label">Gender<sup class="text-danger">* </sup></label>
                                    </div>
                                    <div class="col-4 flex justify-center items-center gap-8">
                                        <input type="radio" id="male" name="gender" value="male" class="@error('gender') is-invalid @enderror" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <label for="male"> <span class="mx-1 "></span> Male <span class="mx-2"></span> </label>
                                        <input type="radio"  id="female" name="gender" value= "female" class="@error('gender') is-invalid @enderror" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <label for="female"><span class="mx-1 "></span> Female</label>
                                        @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="gender_error" class="text-danger"></p>
                                    </div>

                                    <div class="col-4">
                                        <select id="country" class="form-select @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}">
                                            <option value="" disabled selected>Choose Country</option>
                                            <option value="pakistan">Pakistan</option>
                                            <option value="turkey">Turkey</option>
                                            <option value="dubai">Dubai</option>
                                            <option value="qatar">Qatar</option>
                                        </select>
                                        @error('country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="country_error" class="text-danger"></p>
                                    </div>

                                </div>
                                <div class="row g-3 mb-1">
                                    <div class="col-4">
                                        <label for="birth_date" class="form-label">Date of Birth<sup class="text-danger">* </sup> </label>
                                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date" value={{ old('birth_date') }}>
                                        @error('birth_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="birth_date_error" class="text-danger"></p>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="city" class="form-label">City<sup class="text-danger">* </sup></label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value={{ old('city') }}>
                                        @error('city')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="city_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="mobile_number" class="form-label"> Mobile No: <sup class="text-danger">* </sup></label>
                                        <input type="text" class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" maxlength="11" value={{ old('mobile_number') }}>
                                        @error('mobile_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="mobile_number_error" class="text-danger"></p>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <label for="address" class="form-label"> Full Address<span class="text-muted">(Optional)</span></label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" id="inputAddress" placeholder="Address..." rows="3" name="address" value={{ old('address') }}></textarea>
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror


                                </div>

                                <div class="row g-3 mb-2 mt-2">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email<sup class="text-danger">* </sup></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old("email") }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="email_error" class="text-danger"></p>

                                    </div>
                                    <div class="col-6">
                                        <label for="password" class="form-label">Password<sup class="text-danger">* </sup> </label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="password_error" class="text-danger"></p>
                                    </div>

                                </div>


                            </div>
                        </div>
                        {{-- second card --}}

                        <div class="card card_3 border-top border-0 border-4 border-primary top_main">

                            {{--Education info   --}}

                            <div class="card-body">


                                <div class="card-title d-flex align-items-center main">
                                    <h4 class="mb-0 text-secondary">Academic Record</h4>
                                </div>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="ssc" class="form-label "> SSC <span class="text-muted">( Secondary School Certificate)</span><sup class="text-danger" >*</sup></label>
                                        <select id="ssc" class="form-select  @error('ssc') is-invalid @enderror" name="ssc">
                                            <option value="" disabled selected > Select Subject...</option>
                                            <option value="arts">Arts</option>
                                            <option value="sceince">Sceince</option>
                                        </select>
                                        @error('ssc')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="ssc_error" class="text-danger"></p>
                                    </div>
                                   
                                    <div class="col-md-2">
                                        <label for="ssc_board" class="form-label "> Board<sup class="text-danger" >*</sup></label>
                                        <select id="ssc_board" class="form-select  @error('ssc_board') is-invalid @enderror" name="ssc_board">
                                            <option value="" disabled selected > Select Board ...</option>
                                            <option value="mardan">Mardan</option>
                                            <option value="peshawar">Peshawar </option>
                                            <option value="federalboard">Federal Board </option>
                                        </select>
                                        @error('ssc_board')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="ssc_board_error" class="text-danger"></p>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="ssc_obtaine_marks" class="form-label">Obtaine Marks<sup class="text-danger" >*</sup></label>
                                        <input type="number" name="ssc_obtaine_marks" class="form-control  @error('ssc_obtaine_marks') is-invalid @enderror" id="ssc_obtaine_marks"  min="0"  max="1100" required >
                                        @error('obtaine_marks')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="ssc_obtaine_marks_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ssc_total_marks" class="form-label">Total Marks<sup class="text-danger" >*</sup></label>
                                        <input type="number" class="form-control @error('ssc_total_marks') is-invalid @enderror" id="ssc_total_marks" name="ssc_total_marks"  min="1100"  max="1100" required>
                                        @error('ssc_total_marks')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                        <p id="ssc_total_marks_error" class="text-danger"></p>
                                    </div>
                                   
                                    
                                    <div class="col-md-2">
                                        <label for="ssc_year" class="form-label ">Passing Year<sup class="text-danger" >*</sup></label>
                                        <select id="ssc_year" class="form-select  @error('ssc_year') is-invalid @enderror" name="ssc_year">
                                            <option value="" disabled selected > Passing Year</option>
                                            
                                        </select>
                                        @error('ssc_year')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="ssc_year_error" class="text-danger"></p>
                                    </div>

                                        <p id="ssctotalmarks_error" class="text-danger"></p>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="hsc" class="form-label "> HSC<sup class="text-danger" >*</sup> <span class="text-muted">( Higher Secondary Certificate)</span></label>
                                        <select id="hsc" class="form-select @error('hsc') is-invalid @enderror" name="hsc">
                                            <option value="" disabled selected > Select Subject...</option>
                                            <option value="pre_engineering">Pre Engineering</option>
                                            <option value="pre_medical">Pre Medical</option>
                                            <option value="statistic">Statistics</option>
                                            <option value="computer_sceince">Computer Science</option>
                                </select>
                                        @error('hsc')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="hsc_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="hsc_board" class="form-label "> Board<sup class="text-danger" >*</sup></label>
                                        <select id="hsc_board" class="form-select  @error('hsc_board') is-invalid @enderror" name="hsc_board">
                                            <option value="" disabled selected > Select Board ...</option>
                                            <option value="mardan">Mardan</option>
                                            <option value="peshawar">Peshawar </option>
                                            <option value="federalboared">Federal Board </option>
                                        </select>
                                        @error('hsc_board')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="hsc_board_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="hsc_obtaine_marks" class="form-label">Obtaine Marks<sup class="text-danger" >*</sup></label>
                                        <input type="number" class="form-control @error('hsc_obtaine_marks') is-invalid @enderror" id="hsc_obtaine_marks" name="hsc_obtaine_marks"  min="0"  max="1100" required>
                                        @error('hsc_obtaine_marks')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="hsc_obtaine_marks_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="total_marks" class="form-label">Total Marks<sup class="text-danger" >*</sup></label>
                                        <input type="number" class="form-control @error('hsc_total_marks') is-invalid @enderror" id="hsc_total_marks" name="hsc_total_marks"  min="1100"  max="1100" required  >
                                        @error('hsc_total_marks')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <p id="hsc_total_marks_error" class="text-danger"></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="hsc_year" class="form-label ">Passing Year<sup class="text-danger" >*</sup></label>
                                        <select id="hsc_year" class="form-select  @error('hsc_year') is-invalid @enderror" name="hsc_year">
                                            <option value="" disabled selected > Passing Year</option>
                                            
                                        </select>
                                        @error('hsc_year')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="hsc_year_error" class="text-danger"></p>
                                    </div>
                                </div>
                                
                                <div class="optional">
                                <hr>

                                    <div class="row">
                                        <h5 class="mb-3 text-secondary" >Additional Qualification <span class="text-muted">(Optional)</span></h5> 
                                        <div class="col-md-4">
                                            <label for="Additional_program" class="form-label ">Program</label>
                                            <select id="Additional_program" class="form-select @error('program') is-invalid @enderror" name="Additional_program" value="{{ old ('Additional_program')}}">
                                                <option value="" disabled selected>Select Program...</option>
                                                <option value="bs">BS</option>
                                                <option value="ms">MS</option>
                                                <option value="phd">PhD</option>
                                            </select>
                                            @error('Additional_program')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label for="university" class="form-label "> University</label>
                                            <select id="university" class="form-select  @error('university') is-invalid @enderror" name="university">
                                                <option value="" disabled selected > Select Board ...</option>
                                                <option value="fedral">Federal University Of Arts Science & Technology Islamabad</option>
                                                <option value="comsat">Comsaat </option>
                                                <option value="quaideazam">Quaid E Azam University Islamabad </option>
                                            </select>
                                            @error('university')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label for="obtain_cgpa" class="form-label">CGPA</label>
                                            <input type="number" class="form-control @error('obtain_cgpa') is-invalid @enderror" id="obtain_cgpa" name="obtain_cgpa"  min="0"  max="1100" >
                                            @error('obtain_cgpa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <p id="hsc_obtaine_marks_error" class="text-danger"></p>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="total_cgpa" class="form-label">Total CGPA</label>
                                            <input type="number" class="form-control @error('total_cgpa') is-invalid @enderror" id="total_cgpa" name="total_cgpa"  min="1100"  max="1100"   >
                                            @error('total_cgpa')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label for="additional_qualification_year" class="form-label ">Passing Year<sup class="text-danger" >*</sup></label>
                                            <select id="additional_qualification_year" class="form-select  @error('hsc_year') is-invalid @enderror" name="hsc_year">
                                                <option value="" disabled selected > Passing Year</option>
                                                
                                            </select>
                                            @error('additional_qualification_year')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                

                                    </div>

                                </div>
                                <button type="button" class="btn btn-primary " id="optional_btn"> Add More</button>     

                            </div>

                            
                        </div>

                        {{-- third card --}}
                        <div class="card  card_4 border-top border-0 border-4 border-primary top_main">
                            {{-- Attache Documents  --}}

                            <div class="card-body">

                                <div class="card-title d-flex align-items-center main">
                                    <h4 class="mb-0 text-secondary" >Attach Documents</h4>
                                </div>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="image" class="form-label"> Attach Photo<sup class="text-danger" >*</sup> <span class="text-muted">( Passport Size)</span></label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name=image>
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="image_error" class="text-danger"></p>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="domicile" class="form-label"> Attach Domicile<sup class="text-danger" >*</sup></label>
                                        <input type="file" class="form-control @error('domicile') is-invalid @enderror" id="domicile" name=domicile>
                                        @error('domicile')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="domicile_error" class="text-danger"></p>

                                    </div>

                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="ssc_file" class="form-label "> Attach SSC<sup class="text-danger" >*</sup> <span class="text-muted">( Secondary School Certificate)</span></label>
                                        <input type="file" class="form-control @error('ssc_file') is-invalid @enderror"  id="ssc_file" name="ssc_file">
                                        @error('ssc_file')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="ssc_file_error" class="text-danger"></p>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="hsc_file" class="form-label "> Attach HSC<sup class="text-danger" >*</sup> <span class="text-muted">( Higher Secondary Certificate)</span></label>
                                        <input type="file" class="form-control @error('hsc_file') is-invalid @enderror" id="hsc_file" name="hsc_file">
                                        @error('hsc_file')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <p id="hsc_file_error" class="text-danger"></p>

                                    </div>

                                </div>


                            </div>
                            <div class="row g-3 my-3 ">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary px-5 my-4 mx-2">Submit Form</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <div class="my-3">
                        <button id="back" class="btn btn-primary">Back</button>
                        <button id="next" class="btn btn-primary mx-2">Next</button>
                        <a href="{{ route('student.index') }}" class="btn btn-primary float-end">View Data</a>
                    </div>

                </div>
            </div>
        </div>
<script>
    
  
    const cards = document.querySelectorAll('.card');
    const backBtn = document.getElementById('back');
    const nextBtn = document.getElementById('next');
    let currentIndex = 0;

    const buttons = document.querySelectorAll('.move .btn');

    function updateCardVisibility() {
        cards.forEach((card, index) => {
            card.style.display = index === currentIndex ? 'block' : 'none';
        });

        backBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === cards.length - 1;

        buttons.forEach(button => button.classList.remove('btn-primary'));

        const currentButton = buttons[currentIndex];
        if (currentButton) {
            currentButton.classList.add('btn-primary');       
        }
       
        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                if (validateCurrentCard()) {
                    currentIndex = index;
                    updateCardVisibility();
                } else {
                    console.log('Validation failed');
                }
            });
        });
              
    }
    
    


    function validateCurrentCard() {
    let isValid = true;

    const currentCard = cards[currentIndex];
    const inputs = currentCard.querySelectorAll('input, select');
    const errors = currentCard.querySelectorAll('p[id$="_error"]');



    errors.forEach(error => (error.textContent = ''));

    // Validate inputs
    inputs.forEach(input => {
        const errorElement = document.getElementById(`${input.id}_error`);

        if (errorElement) errorElement.textContent = '';

        if (
        ((input.tagName === 'SELECT' && ['department', 'program', 'shift', 'semester', 'country', 'ssc', 'ssc_year', 'ssc_board', 'hsc', 'hsc_board', 'hsc_year'].includes(input.id)) ||
            input.type === 'text') && !input.value.trim()){
            if (input.id === 'mobile_number') {
                    errorElement.textContent = 'number required and cannot be empty.';
            }
            errorElement.textContent = `Please fill out the ${input.id.replace('_', ' ')} field.`;
            isValid = false;
        }

        if (input.type === 'email') {
            if (!input.value) {
                errorElement.textContent = 'Email is required.';
                isValid = false;
            } else {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value)) {
                    errorElement.textContent = 'Please enter a valid email address.';
                    isValid = false;
                }
            }
        }

       if(input.type === 'text') {
            if (input.id === 'mobile_number') {
                    const mobilevalidation = /^[0-9]{10,11}$/; 
                    if (!mobilevalidation.test(input.value)) {
                        errorElement.textContent = 'Please enter a valid mobile number (10-11 digits).';
                        isValid = false;
                    }
            }
       }
       
       
        if (input.type === 'file') {
            if (!input.value) {
                errorElement.textContent = 'file is required.';
                isValid = false;
            } 
        }
        if (input.type === 'number' && ['hsc_obtaine_marks', 'hsc_total_marks', 'ssc_obtaine_marks', 'ssc_total_marks'].includes(input.id)) {
        const value = parseFloat(input.value);
        if (isNaN(value) || value < input.min || value > input.max) {
            errorElement.textContent = `Please enter a valid number between ${input.min} and ${input.max} for ${input.id.replace('_', ' ')}.`;
            isValid = false;
        }
    }

        if (input.type === 'password') {
            if (!input.value) {
                errorElement.textContent = 'Password is required.';
                isValid = false;
            } else if (input.value.length < 6) {
                errorElement.textContent = 'Password must be at least 6 characters long.';
                isValid = false;
            
             }
        }

        if (input.type === 'date' && !input.value) {
            errorElement.textContent = 'Please select a valid date.';
            isValid = false;
        }

        if (input.type === 'radio') {
            const name = input.name;
            const radioGroup = currentCard.querySelectorAll(`input[name="${name}"]`);
            const isChecked = Array.from(radioGroup).some(radio => radio.checked);

            if (!isChecked) {
                const groupError = document.getElementById(`${name}_error`);
                if (groupError) {
                    groupError.textContent = `Please select an option for ${name.replace('_', ' ')}.`;
                }
                isValid = false;
            }
        }
    });

    return isValid;
}



    nextBtn.addEventListener('click', () => {
        if (currentIndex < cards.length - 1) {
            if (validateCurrentCard()) {
                currentIndex++;
                updateCardVisibility();
            }
        }
    });

    backBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCardVisibility();
        }
    });

    updateCardVisibility();

    function generateYearOptions(startYear, endYear, selectId) {
        const yearSelect = document.getElementById(selectId);

        yearSelect.innerHTML = '<option value="">Select Year</option>';

        for (let year = startYear; year <= endYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }
    }

    const currentYear = new Date().getFullYear();

    generateYearOptions(2000, currentYear, 'ssc_year');
    generateYearOptions(2000, currentYear, 'hsc_year');

    function optional_visabilty() {
        const show = document.getElementById('optional_btn');
        const optional_data = document.querySelector(' .optional');
        optional_data.style.display = "none";
        show.addEventListener('click', () => {
        
            optional_data.style.display = "block";
            show.style.display = "none";
        });
   }
   optional_visabilty();
</script>


</body>
</html>
