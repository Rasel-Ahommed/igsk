@extends('frontend.layouts.app')

@section('title', 'Assesment Process')

@section('content')


<!-- assesment header start -->

<section class="about-header">
    <div class="about-header-text">
        <h1>Our Assessment</h1>
    </div>
</section>

<!-- assesment header end -->

<!-- assesment section start -->

<section class="assesment-section py-sm-5 py-4">
    <div class="container">
        <h4 class="text-decoration-underline">
            {{$data->title}}
        </h4>
        {!!$data->details!!}
        {{-- <p class="text-justify">
            At International Grammar School, our commitment to academic excellence is reflected in our thoughtful and
            comprehensive assessment process. We believe in assessing student progress in a fair, transparent, and
            constructive manner. Our assessment process encompasses various methods to provide a holistic understanding
            of each student's learning journey.
        </p>
        <div class="assesment-item">
            <h5 class="fw-bold">1. Formative Assessment:</h5>
            <p>
                <strong>Definition: </strong>
                <li>Formative assessments are ongoing evaluations conducted during the learning process to provide
                    real-time feedback and guide instructional decisions.</li>
            </p>
            <div class="assesment-implementation">
                <strong>Implementation: </strong>
                <ul>
                    <li>Regular quizzes, class discussions, and interactive activities are used to gauge understanding.
                    </li>
                    <li>Teachers provide timely feedback to help students identify strengths and areas for improvement.
                    </li>
                </ul>
            </div>
        </div>
        <div class="assesment-item">
            <h5 class="fw-bold">2. Continuous Feedback Loop:</h5>
            <p>
                <strong>Definition: </strong>
                <li>We maintain an ongoing dialogue with students through continuous feedback to ensure a dynamic
                    learning environment.</li>
            </p>
            <div class="assesment-implementation">
                <strong>Implementation: </strong>
                <ul>
                    <li>
                        Regular teacher-student conferences, progress reports, and feedback sessions facilitate
                        communication.
                    </li>
                    <li>
                        Feedback is tailored to individual learning styles and needs.
                    </li>
                </ul>
            </div>
        </div>
        <div class="assesment-item">
            <h5 class="fw-bold">3. Data-Informed Instruction:</h5>
            <p>
                <strong>Definition: </strong>
                <li>Assessment data guides instructional decisions, enabling us to adapt teaching methods based on
                    student needs.</li>
            </p>
            <div class="assesment-implementation">
                <strong>Implementation: </strong>
                <ul>
                    <li>Teachers analyze assessment results to identify trends and areas for improvement.
                    </li>
                    <li>Personalized learning plans may be implemented to address individual student needs.
                    </li>
                </ul>
            </div>
        </div>
        <div class="assesment-item">
            <h5 class="fw-bold">4. Parental Involvement:</h5>
            <p>
                <strong>Definition: </strong>
                <li>Parents are integral partners in the assessment process, with regular updates on student progress.
                </li>
            </p>
            <div class="assesment-implementation">
                <strong>Implementation: </strong>
                <ul>
                    <li>
                        Parent-teacher conferences are scheduled to discuss assessment results.
                    </li>
                    <li>
                        Parental portals provide access to real-time grades and feedback.
                    </li>
                </ul>
            </div>
        </div>
        <div class="assesment-item">
            <h5 class="fw-bold">5. Comprehensive Records:</h5>
            <p>
                <strong>Definition: </strong>
                <li>Thorough documentation of assessment results ensures transparency and accountability</li>
            </p>
            <div class="assesment-implementation">
                <strong>Implementation: </strong>
                <ul>
                    <li>
                        Detailed records of assessment scores, feedback, and individual learning plans are maintained.
                    </li>
                    <li>
                        Records contribute to student portfolios and support accreditation requirements.
                    </li>
                </ul>
            </div>
            <div class="assesment-implementation">
                <h4 class="fw-bolder">Your Child's Success, Our Priority: </h4>
                <p>
                    At International Grammar School, we view assessments not only as measures of academic achievement
                    but also as tools for growth and improvement. Our assessment process is designed to foster a
                    positive learning experience, encourage continuous improvement, and prepare students for success in
                    their educational journey.
                </p>
            </div>
        </div> --}}
    </div>
</section>

<!-- assesment section end -->

@endsection