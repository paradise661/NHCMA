<?php
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\ActivityController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\EventRegisterController;
use App\Http\Controllers\Frontend\MemberController;
use App\Http\Controllers\Frontend\MemberRegistrationController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ResourceController;
use App\Http\Controllers\Frontend\PopupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');


Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
Route::get('/activities/{slug}', [ActivityController::class, 'show'])->name('activity.show');

Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogsController::class, 'show'])->name('blogs.show');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/contact', [App\Http\Controllers\Frontend\HomeController::class, 'contact'])->name('contact');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

Route::get('/eventsregister', [EventRegisterController::class, 'index'])->name('eventsregister');
Route::get('/eventsregister/{slug}', [EventRegisterController::class, 'show'])->name('eventsregister.show');

Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');

Route::get('/executive-members', [App\Http\Controllers\Frontend\HomeController::class, 'ourTeams'])->name('ourteams');

Route::get('/lifetime-members', [MemberController::class, 'lifetimeMembers'])->name('lifetime.members');
Route::get('/general-members', [MemberController::class, 'generalMembers'])->name('general.members');

Route::get('/members', [MemberController::class, 'index'])->name('members');

Route::post('/inquiry', [App\Http\Controllers\Frontend\HomeController::class, 'inquiry'])->name('inquiry');
Route::get('/about', [App\Http\Controllers\Frontend\HomeController::class, 'about'])->name('about');

Route::get('/gallery', [App\Http\Controllers\Frontend\HomeController::class, 'gallery'])->name('gallery');
Route::get('/mediacoverages', [App\Http\Controllers\Frontend\HomeController::class, 'mediaCoverages'])->name('mediacoverages');

//registration
Route::get('registration', [MemberRegistrationController::class, 'registration'])->name('registration');
Route::post('registration', [MemberRegistrationController::class, 'store'])->name('registration.store');

Route::post('fetch-district', [App\Http\Controllers\Frontend\HomeController::class, 'fetchDistrict']);
Route::post('fetch-municipality', [App\Http\Controllers\Frontend\HomeController::class, 'fetchMunicipality']);

//resources
Route::get('/links', [ResourceController::class, 'usefulLinks'])->name('usefullinks');
Route::get('/documents', [ResourceController::class, 'usefulDocuments'])->name('usefuldocuments');


Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'registerStore'])->name('frontend.register.store');
