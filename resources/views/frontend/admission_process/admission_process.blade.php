@extends('frontend.layouts.app')

@section('title', 'Admission process')

@section('content')


    <section class="about-header">
        <div class="about-header-text">
            <h1>Admission Process</h1>
        </div>
    </section>

    <!-- admission top header end -->

    <!-- admission start -->

    <section class="admission-process py-md-5 py-4">
        <div class="container">
            <div class="admission-top-info">
                <h4 class="text-decoration-underline">
                    Admission Process at International Grammar School Khulna:
                </h4>
                <p>
                    Parents can submit the completed admission application to our front desk or can email to our email
                    address: <a class="text-dark text-decoration-none btm-border-effect"
                        href="mailto:khulnaigs@gmail.com">khulnaigs@gmail.com</a>.
                </p>
                <p>
                    All records submitted with the application must be in English. Translated documents must be
                    verified/attested by an official translator. Parents may not translate records.
                </p>
            </div>
            <div class="admission-top-process pt-5">
                <h4>
                    The following documents must be completed and submitted to the office:
                </h4>
                <ul>
                    <li>A completed application form.</li>
                    <li>A completed health form.</li>
                    <li>A copy of immunization records.</li>
                    <li>A complete set of academic transcripts or report cards from previous school if applicable.</li>
                    <li>Three passport size photographs.</li>
                    <li>A copy of both parent’s Bangladeshi National ID Card / Passport.</li>
                    <li>
                        Speech/language, psycho-educational or special needs evaluations and or records (if applicable).
                    </li>
                </ul>
            </div>
            <div class="admission-criteria" id="placement_criteria">
                <h4 class="text-decoration-underline">
                    Placement Criteria:
                </h4>
                <p>
                    Children are placed in classes by age and the age cutoff date is 31st August of the enrolling school
                    year. Other requirements for student’s admission and placement in grades are - school records,
                    achievement level, emotional and physical maturity, and placement screening.
                </p>
                <p>
                    IGSK tracks students in the appropriate grade level according to their age and ability and reviews the
                    placement of each child individually. Moreover, the school reserves the right to make the final
                    placement decision keeping in mind that children are best served when placed in their respective aged
                    peer groups.
                </p>
            </div>
        </div>
    </section>

    <!-- admission end -->

    <!-- age limit start -->

    <section class="admission-age-limit">
        <div class="container">
            <h4 class="text-decoration-underline">
                Below is a guideline to understand the equivalent title in different school systems:
            </h4>
            <div class="admission-age-table pt-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Minimum age before August 31 (Age cutoff date)</th>
                                <th scope="col">IGSK classes</th>
                                <th scope="col">US grade equivalent </th>
                                <th scope="col">British Class Equivalent</th>
                                <th scope="col">Bangladesh Grade Equivalent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">3+ years</th>
                                <td>Play Group</td>
                                <td>Pre-K3</td>
                                <td>Nursery</td>
                                <td>Playgroup</td>
                            </tr>
                            <tr>
                                <th scope="row">4+ years</th>
                                <td>Kinder I</td>
                                <td>Pre-K4</td>
                                <td>Reception</td>
                                <td>Nursery</td>
                            </tr>
                            <tr>
                                <th scope="row">5+ years</th>
                                <td>Kinder II</td>
                                <td>Pre-K4</td>
                                <td>Year 1</td>
                                <td>Kindergarte n 1</td>
                            </tr>
                            <tr>
                                <th scope="row">6+ years</th>
                                <td>Grade 1</td>
                                <td>Grade 1</td>
                                <td>Year 2</td>
                                <td>Kindergarte n 2</td>
                            </tr>
                            <tr>
                                <th scope="row">7+ years</th>
                                <td>Grade 2</td>
                                <td>Grade 2</td>
                                <td>Year 3</td>
                                <td>Class I</td>
                            </tr>
                            <tr>
                                <th scope="row">8+ years</th>
                                <td>Grade 3</td>
                                <td>Grade 3</td>
                                <td>Year 4</td>
                                <td>Class II</td>
                            </tr>
                            <tr>
                                <th scope="row">9+ years</th>
                                <td>Grade 4</td>
                                <td>Grade 4</td>
                                <td>Year 5</td>
                                <td>Class III</td>
                            </tr>
                            <tr>
                                <th scope="row">10+ years</th>
                                <td>Grade 5</td>
                                <td>Grade 5</td>
                                <td>Year 6</td>
                                <td>Class IV</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- age limit end -->

    <!-- enquiry form start -->

    <section class="enquiry-admission" id="inquiry_form">
        <div class="container py-4">
            <div class="d-flex justify-content-center pb-4">
                <h2 class="section-head">
                    Enquiry Form
                </h2>
            </div>
            <p class="text-center">
                If you would like to inquire about our admission process or if you have any queries, please complete the
                enquiry form below.
            </p>
            <div class="enquiry-form">
                <h4>STUDENTS DETAIL</h4>
                <div class="enquiry-form-data">
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('add.enquiryForm') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group py-3">
                                    <label for="name">Student’s Name</label>
                                    <input type="text" class="form-control" id="name" name='student_name'
                                        placeholder="Student’s Name" value='{{old('student_name')}}'>
                                </div>
                                @error('student_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group py-3">
                                    <label for="email">Parents Name</label>
                                    <input type="text" class="form-control" id="email" name='parents_name'
                                        placeholder="Parents Name" value='{{old('parents_name')}}'>
                                </div>
                                @error('parents_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group py-3">
                                    <label for="email">Guardian Name</label>
                                    <input type="text" class="form-control" id="email" name='guardian_name'
                                        placeholder="Guardian Name" value='{{old('guardian_name')}}'>
                                </div>
                                @error('guardian_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group py-3">
                                    <label for="email">Gender</label>
                                    <input type="text" class="form-control" id="email" name='gender'
                                        placeholder="Gender" value='{{old('gender')}}'>
                                </div>
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group py-3">
                                    <label for="email">Date of birth</label>
                                    <input type="date" class="form-control" id="email" name='date'
                                        placeholder="Date of birth" value='{{old('date')}}'>
                                </div>
                                @error('date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group py-3">
                                    <label for="email">Phone Number</label>
                                    <input type="number" class="form-control" id="email" name='phone'
                                        placeholder="Phone Number" value='{{old('phone')}}'>
                                </div>
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group py-3">
                                    <label for="email">Possible start date</label>
                                    <input type="date" class="form-control" id="email" name='start_date'
                                        placeholder="Possible start date" value='{{old('start_date')}}'>
                                </div>
                                @error('start_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- enquery form end -->

@endsection
