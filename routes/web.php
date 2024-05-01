<?php

use App\Http\Controllers\AllUsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewesController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\JoinUSController;
use App\Http\Controllers\BackFaqController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShortInfoController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\JoinController;
use App\Http\Controllers\BackCurriculumController;
use App\Http\Controllers\frontend\RulesController;
use App\Http\Controllers\frontend\StaffController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\frontend\FacultyController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\LibraryController;
use App\Http\Controllers\NoticeControllerController;
use App\Http\Controllers\AssessmentProcessController;
use App\Http\Controllers\BackofficeGalleryController;
use App\Http\Controllers\frontend\AdmissionController;
use App\Http\Controllers\frontend\AssesmentController;
use App\Http\Controllers\frontend\CurriculamController;
use App\Http\Controllers\frontend\AboutSchoolController;
use App\Http\Controllers\frontend\IntroductionController;
use App\Http\Controllers\frontend\TeacherStaffController;
use App\Http\Controllers\frontend\Co_curriculamController;
use App\Http\Controllers\frontend\GalleryDetailsController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ====================================================================================
//                     Frontend routes start
// ====================================================================================
 

// home controller routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// introduction controller routes
Route::get('/introduction', [IntroductionController::class, 'index'])->name('introduction');

// about school controller routes
Route::get('/about-school', [AboutSchoolController::class, 'index'])->name('about.school');

// faculty controller routes
Route::get('/our-faculty', [FacultyController::class, 'index'])->name('our.faculty');

// staff controller routes
Route::get('/our-staff', [StaffController::class, 'index'])->name('our.staff');

// rules controller routes
Route::get('/rules', [RulesController::class, 'index'])->name('rules');

// admission controller routes
Route::get('/admission', [AdmissionController::class, 'index'])->name('admission');

Route::post('/enquiry-form', [AdmissionController::class, 'store'])->name('add.enquiryForm');

// curriculam controller routes
Route::get('/curriculam/{id}', [CurriculamController::class, 'index'])->name('curriculam');

// assesment controller routes
Route::get('/assesment/{id}', [AssesmentController::class, 'index'])->name('assesment');

// teacher staff controller routes
Route::get('/teacher-staff', [TeacherStaffController::class, 'index'])->name('teacher.staff');

// co-curriculam controller routes
Route::get('/co-curriculam', [Co_curriculamController::class, 'index'])->name('co.curriculam');

// library controller routes
Route::get('/library', [LibraryController::class, 'index'])->name('library');

// join us controller routes
Route::get('/join', [JoinController::class, 'index'])->name('join');

Route::post('/store.join', [JoinController::class, 'store'])->name('store.joinForm');


// enquery route
 Route::post('/enquiry-form', [AdmissionController::class, 'store'])->name('add.enquiryForm');


// join us controller routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// notice controller routes
Route::get('/notice', [NoticeController::class, 'index'])->name('notice');

// gallery controller routes
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

//  gallery details controller routes
Route::get('/gallery-details/{id}', [GalleryDetailsController::class, 'index'])->name('gallery.details');



// ====================================================================================
//                     Frontend routes end
// ====================================================================================





// ====================================================================================
//                     backend routes start
// ====================================================================================


 require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('backoffice.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    // home banner routes
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');

    // Route::post('/home-banner', [BannerController::class, 'store'])->name('add.banner');

    Route::post('/update-banner', [BannerController::class, 'update'])->name('update.banner');

    // Route::get('/delete-banner/{id}', [BannerController::class, 'destroy'])->name('delete.banner');

    //short info routes
    Route::get('/short-info', [ShortInfoController::class, 'index'])->name('short.info');

    Route::post('/add-short-info', [ShortInfoController::class, 'store'])->name('add.shortInfo');

    Route::post('/edit-short-info', [ShortInfoController::class, 'update'])->name('edit.shortInfo');

    Route::get('/delete-short-info/{id}', [ShortInfoController::class, 'destroy'])->name('delete.shortInfo');



    //notice info routes
    Route::get('/home-notice', [NoticeControllerController::class, 'index'])->name('home.notice');

    Route::post('/store-notice', [NoticeControllerController::class, 'store'])->name('store.notice');

    Route::post('/update-notice', [NoticeControllerController::class, 'update'])->name('update.notice');

    Route::get('/delete-notice/{id}', [NoticeControllerController::class, 'destroy'])->name('delete.notice');


    //news info routes
    Route::get('/home-news', [NewesController::class, 'index'])->name('home.news');

    Route::post('/store-news', [NewesController::class, 'store'])->name('store.news');

    Route::post('/update-news', [NewesController::class, 'update'])->name('update.news');

    Route::get('/delete-news/{id}', [NewesController::class, 'destroy'])->name('delete.news');

    // for event 
    Route::get('/event', [EventController::class, 'index'])->name('event');

    Route::post('/store-event', [EventController::class, 'store'])->name('store.all_event');

    Route::get('/get_event_data', [EventController::class, 'get_event_data'])->name('get_event_data');

    Route::get('/delete-event/{id}', [EventController::class, 'destroy'])->name('delete.eventsCalender');



    // gallery routes 

    Route::post('/add-album', [BackofficeGalleryController::class, 'storeAlbum'])->name('add.album');

    Route::get('/backoffice-gallery', [BackofficeGalleryController::class, 'index'])->name('backoffice.gallery');

    Route::post('/add-gallery', [BackofficeGalleryController::class, 'storeGallery'])->name('add.gallery');
    
    Route::get('/delete-image/{id}', [BackofficeGalleryController::class, 'deleteSingleImage'])->name('delete.singleImage');
    
    Route::get('/delete-gallery/{id}', [BackofficeGalleryController::class, 'deleteGallery'])->name('delete.gallery');


    // testimonials route
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial');
    
    Route::post('/store-testimonials', [TestimonialController::class, 'store'])->name('store.testimonial');
    
    Route::post('/update-testimonials', [TestimonialController::class, 'update'])->name('update.testimonial');
    
    Route::get('/delete-testimonials/{id}', [TestimonialController::class, 'destroy'])->name('delete.testimonial');
    
    // enquiryForm route
    
    
    Route::get('/backoffice-enquery', [EnquiryController::class, 'index'])->name('backoffice.enquiryForm');
     
    Route::get('/delete-enquery/{id}', [EnquiryController::class, 'destroy'])->name('delete.enquiry');
    
    
    // enquery route
    // Route::post('/enquiry-form', [AdmissionController::class, 'store'])->name('add.enquiryForm');
    
    // Route::get('/backoffice-enquery', [EnquiryController::class, 'index'])->name('backoffice.enquiryForm');
     
    // Route::get('/delete-enquery/{id}', [EnquiryController::class, 'destroy'])->name('delete.enquiry');
    

    // join route 
    Route::get('/backoffice-join', [JoinUSController::class, 'index'])->name('backoffice.joinUsForm');
    
    Route::get('/backoffice-join-delete/{id}', [JoinUSController::class, 'destroy'])->name('delete.joinUsForm');


     // Currirulum route
     Route::get('/backoffice-curriculum', [BackCurriculumController::class, 'index'])->name('backoffice.curriculum');
    
     Route::post('/update-curriculum', [BackCurriculumController::class, 'update'])->name('update.curriculumn');
     

     // assesment process route
     Route::get('/backoffice.assesment', [AssessmentProcessController::class, 'index'])->name('backoffice.assesment');
    
     Route::post('/update-assesent', [AssessmentProcessController::class, 'update'])->name('update.assesment');
     
   
     // sitesetting process route
     Route::get('/backoffice-sitesetting', [SiteSettingController::class, 'index'])->name('backoffice.sitesetting');
    
     Route::post('/update-sitesetting', [SiteSettingController::class, 'update'])->name('update.siteSetting');
     

    //  employee routes
    Route::get('/backoffice-employee', [EmployeeController::class, 'index'])->name('backoffice.employee');
    
    Route::post('/store-employee', [EmployeeController::class, 'store'])->name('store.employee');

    Route::post('/update-employee', [EmployeeController::class, 'update'])->name('update.employee');
    
    Route::get('/delete-employee/{id}', [EmployeeController::class, 'destroy'])->name('delete.employee');
    
    // faqs 
    Route::get('/backoffice-faq', [BackFaqController::class, 'index'])->name('backoffice.faq');
    
    Route::post('/store-faq', [BackFaqController::class, 'store'])->name('store.faq');

    Route::post('/update-faq', [BackFaqController::class, 'update'])->name('update.faq');
    
    Route::get('/delete-faq/{id}', [BackFaqController::class, 'destroy'])->name('delete.faq');
    


    // register routes 

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);


    // all user 
    Route::get('all-users', [AllUsersController::class, 'index'])->name('backoffice.viewUser');
    Route::get('delete-users/{id}', [AllUsersController::class, 'destroy'])->name('delete.user');

});


// ====================================================================================
//                     backend routes end
// ====================================================================================

