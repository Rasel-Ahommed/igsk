<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShortInfoController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\JoinController;
use App\Http\Controllers\frontend\RulesController;
use App\Http\Controllers\frontend\StaffController;
use App\Http\Controllers\frontend\NoticeController;
use App\Http\Controllers\frontend\FacultyController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\LibraryController;
use App\Http\Controllers\NoticeControllerController;
use App\Http\Controllers\frontend\AdmissionController;
use App\Http\Controllers\frontend\AssesmentController;
use App\Http\Controllers\frontend\CurriculamController;
use App\Http\Controllers\frontend\AboutSchoolController;
use App\Http\Controllers\frontend\IntroductionController;
use App\Http\Controllers\frontend\TeacherStaffController;
use App\Http\Controllers\frontend\Co_curriculamController;
use App\Http\Controllers\frontend\GalleryDetailsController;

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

// curriculam controller routes
Route::get('/curriculam', [CurriculamController::class, 'index'])->name('curriculam');

// assesment controller routes
Route::get('/assesment', [AssesmentController::class, 'index'])->name('assesment');

// teacher staff controller routes
Route::get('/teacher-staff', [TeacherStaffController::class, 'index'])->name('teacher.staff');

// co-curriculam controller routes
Route::get('/co-curriculam', [Co_curriculamController::class, 'index'])->name('co.curriculam');

// library controller routes
Route::get('/library', [LibraryController::class, 'index'])->name('library');

// join us controller routes
Route::get('/join', [JoinController::class, 'index'])->name('join');

// join us controller routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// notice controller routes
Route::get('/notice', [NoticeController::class, 'index'])->name('notice');

// gallery controller routes
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

//  gallery details controller routes
Route::get('/gallery-details', [GalleryDetailsController::class, 'index'])->name('gallery.details');



// ====================================================================================
//                     Frontend routes end
// ====================================================================================





// ====================================================================================
//                     backend routes start
// ====================================================================================





Route::get('/dashboard', function () {
    return view('backoffice.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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

// Route::post('/edit-short-info', [NoticeControllerController::class, 'update'])->name('edit.shortInfo');

// Route::get('/delete-short-info/{id}', [NoticeControllerController::class, 'destroy'])->name('delete.shortInfo');


// ====================================================================================
//                     backend routes end
// ====================================================================================

