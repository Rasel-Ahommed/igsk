<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IGSK - International Grammer School Khulna</title>
    <link rel="shortcut icon" href="{{asset('frontendData/asset/image/logo/logo.webp')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('frontendData/asset/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontendData/asset/css/style.css')}}" />
    <!-- icons -->
    <link rel="stylesheet" href="{{asset('frontendData/asset/fonts/remixicon.css')}}" />
    <script src="{{asset('frontendData/asset/js/jquery-3.7.1.min.js')}}"></script>
</head>

<body>
    <!-- nav bar section start -->

    <div class="navbar fixed">
        <nav class="container-sm d-inline-block">
            <div class="nav-content">
                <div class="nav-start-content">
                    <div class="nav-logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('frontendData/asset/image/logo/logo.webp')}}" alt="IGSK Logo" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="nav-end-content" id="sidebarContent">
                    <div class="nav-menubar">
                        <ul class="m-auto">
                            <a href="./">
                                <li>Home</li>
                            </a>
                            <!-- <li>About Us <i class="ri-arrow-down-s-line"></i></li> -->
                            <li>
                                <div class="dropdown open">
                                    <a class="dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                        About Us
                                    </a>

                                    <div class="dropdown-menu py-2" aria-labelledby="triggerId">
                                        <div class="dropdown-item mb-1 p-0 btm-border-effect">
                                            <div class="sub-dropdown-main position-relative w-100">
                                                <a href="{{route('introduction')}}" class="btm-no-effect">
                                                    Introduction <i class="ri-arrow-right-s-line"></i>
                                                </a>
                                                <ul class="sub-dropdown-items-l py-2">
                                                    <a href="{{ route('introduction') }}#founder_speech_box" class="dropdown-item">
                                                        <li>Speech of Founding Director</li>
                                                    </a>
                                                    <a href="{{route('introduction')}}#Why_igsk" class="dropdown-item">
                                                        <li>Why IGSK</li>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-item my-1 p-0 btm-border-effect" href="#">
                                            <div class="sub-dropdown-main position-relative">
                                                <a href="{{route('about.school')}}" class="btm-no-effect">
                                                    About School <i class="ri-arrow-right-s-line"></i>
                                                </a>
                                                <ul class="sub-dropdown-items-l py-2">
                                                    <a href="{{route('about.school')}}#about_history" class="dropdown-item">
                                                        <li>History</li>
                                                    </a>
                                                    <a href="{{route('about.school')}}#about_goal" class="dropdown-item">
                                                        <li>Goal, Mission, Vision</li>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-item my-1 p-0 btm-border-effect" href="#">
                                            <div class="sub-dropdown-main position-relative">
                                                Our Team <i class="ri-arrow-right-s-line"></i>
                                                <ul class="sub-dropdown-items-l py-2">
                                                    <a href="{{route('our.faculty')}}" class="dropdown-item">
                                                        <li>Faculty</li>
                                                    </a>
                                                    <a href="{{route('our.staff')}}" class="dropdown-item">
                                                        <li>Staff</li>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-item mt-1 p-0 btm-border-effect" href="#">
                                            <div class="sub-dropdown-main position-relative">
                                                <a href="{{route('rules')}}" class="btm-no-effect">
                                                    Rules <i class="ri-arrow-right-s-line"></i>
                                                </a>
                                                <ul class="sub-dropdown-items-l py-2">
                                                    <a href="{{route('rules')}}#student_rule" class="dropdown-item">
                                                        <li>Rules for Students</li>
                                                    </a>
                                                    <a href="{{route('rules')}}#parent_rule" class="dropdown-item">
                                                        <li>Rules for parents</li>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <div href="#">
                                <!-- <li>Admission <i class="ri-arrow-down-s-line"></i></li> -->
                                <li>
                                    <div class="dropdown open">
                                        <a class="dropdown-toggle" type="button" id="triggerId"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                            Admission
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="{{route('admission')}}">Admission Process</a>
                                            <a class="dropdown-item" href="{{route('admission')}}#placement_criteria">Placement Criteria</a>
                                            <a class="dropdown-item" href="{{route('admission')}}#inquiry_form">Enquiry Form</a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                            <!-- <li>Academics <i class="ri-arrow-down-s-line"></i></li> -->
                            <li>
                                <div class="dropdown open">
                                    <a class="dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                        Academics
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <div class="dropdown-item mt-1 p-0 btm-border-effect" href="#">
                                            <div class="sub-dropdown-main position-relative">
                                                <i class="ri-arrow-left-s-line"></i> Early Year
                                                <ul class="sub-dropdown-items-r py-2">
                                                    <div class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Playgroup
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="{{route('curriculam')}}" class="dropdown-item">
                                                                    <li>Curriculam</li>
                                                                </a>
                                                                <a href="{{route('assesment')}}" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="{{route('teacher.staff')}}" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Kinder 1
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Kinder 2
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-item mt-1 p-0 btm-border-effect" href="#">
                                            <div class="sub-dropdown-main position-relative">
                                                <i class="ri-arrow-left-s-line"></i> Elementary School
                                                <ul class="sub-dropdown-items-r py-2">
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade I
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade II
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade III
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-item mt-1 p-0 btm-border-effect" href="#">
                                            <div class="sub-dropdown-main position-relative">
                                                <i class="ri-arrow-left-s-line"></i> Mid School
                                                <ul class="sub-dropdown-items-r py-2">
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade IV
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade V
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade VI
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-item mt-1 p-0 btm-border-effect">
                                            <div class="sub-dropdown-main position-relative">
                                                <i class="ri-arrow-left-s-line"></i> High School
                                                <ul class="sub-dropdown-items-r py-2">
                                                    <div class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade VII
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade VIII
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade IX
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div href="#" class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Grade X
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Corriculam</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Assessment Process</li>
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <li>Teachers And Staffs</li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="{{route('co.curriculam')}}">Co-Curriculam</a>
                                        <a class="dropdown-item" href="{{route('library')}}">Libraries</a>
                                    </div>
                                </div>
                            </li>
                            <a href="{{route('join')}}">
                                <li>Join Us</li>
                            </a>
                            <a href="{{'faq'}}">
                                <li>FAQs</li>
                            </a>
                        </ul>
                    </div>
                    <div class="nav-social">
                        <ul class="m-auto">
                            <a class="facebook" href="#">
                                <li><i class="ri-facebook-circle-fill"></i></li>
                            </a>
                            <a class="twitter" href="#">
                                <li><i class="ri-twitter-x-fill"></i></li>
                            </a>
                            <a class="whatsapp" href="#">
                                <li><i class="ri-whatsapp-fill"></i></li>
                            </a>
                            <a class="youtube" href="#">
                                <li><i class="ri-youtube-fill"></i></li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="burgar-icon">
                    <button class="btn" id="toggleSideBar" href="javascript:void(0);">
                        <span class="menu-icon">
                            <i class="ri-menu-2-fill"></i>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <div class="nav-gap-element"></div>