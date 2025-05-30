<?php

use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ConfigureController;
use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventRegisterController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageConfigureController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\LinksController;
use App\Http\Controllers\Admin\MediaCoverageController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MemberInfoController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialmediaController;
use App\Http\Controllers\Admin\PopUpController;
use App\Exports\RegisterExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//CMS routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::resource('blogs', BlogController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('news', NewsController::class);
    Route::resource('events', EventController::class);
    Route::resource('eventsregister', EventRegisterController::class);
    Route::resource('ourteams', OurTeamController::class);
    Route::resource('members', MemberController::class);
    Route::resource('mediacoverages', MediaCoverageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('memberinfos', MemberInfoController::class);
    Route::resource('imageconfigures', ImageConfigureController::class);
    Route::resource('galleries', GalleryController::class);
    Route::get('/gallery/delete-file/{id}', [GalleryController::class, 'documentDelete'])->name('document.delete');

    Route::resource('pages', PageController::class);
    Route::resource('socialmedias', SocialmediaController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('configures', ConfigureController::class);

    Route::get('inquirypersons', [InquiryController::class, 'index'])->name('inquirypersons.index');
    Route::delete('inquirypersons/{inquiryperson}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');

    Route::get('change-password', [AuthController::class, 'index'])->name('profile');
    Route::post('change-password', [AuthController::class, 'store'])->name('change.password');

    Route::get('settings', [SettingController::class, 'edit'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

    Route::resource('applicants', ApplicantController::class);

    Route::resource('links', LinksController::class);
    Route::resource('documents', DocumentsController::class);

    
    Route::resource('popup', PopUpController::class);
    Route::get('/register/export', [RegisterController::class, 'export'])->name('register.export');
    Route::resource('register', RegisterController::class);

    
});

