<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendAuthController;
use App\Http\Controllers\RecommendatitonController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Admin\CharityController;
use App\Http\Controllers\Admin\RecommendlistController;
use App\Http\Controllers\Admin\SectorsController;
use App\Http\Controllers\Admin\SubSectorsController;
use App\Http\Controllers\Admin\SoEvaluationController;
use App\Http\Controllers\Admin\OnboardController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ConnectstoriessController;


use App\Http\Controllers\Admin\AuthController;

//frontend//
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\BecomeVolunteerController;
use App\Http\Controllers\OurteamController;
use App\Http\Controllers\BloglistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ConnectstoriesController;
use App\Http\Controllers\BreakingController;




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
use Illuminate\Support\Facades\Route;


Route::get('/admin/login', function () {
    return view('admin.login');
})->name('/admin/login');

Route::post('/admin/logout', function () {
    Auth::logout();
    return redirect()->route('/admin/login');
})->name('admin.logout');

Route::post('adminn/login', [AuthController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');



Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'Logout'])->name('logout');
Route::get('show-change-password', [AuthController::class, 'showChangePassword'])->name('show-change-password');
Route::post('change-password', [AuthController::class, 'changePassword'])->name('change-password');

//frontend code//
Route::get('/', [WelcomeController::class, 'welcomeone'])->name('welcomeone');
Route::get('/home', [HomeController::class, 'homeone'])->name('home');
Route::get('/aboutus', [AboutusController::class, 'abouteusone'])->name('aboutus');
Route::get('/causes', [CausesController::class, 'causesone'])->name('causes');
Route::get('/sector', [SectorController::class, 'sectorone'])->name('sector');
Route::get('/event', [EventController::class, 'eventone'])->name('event');
Route::get('/eventspecific/{id}', [EventController::class, 'eventtwo'])->name('eventspecific');

Route::get('/events_records/{help_name}', [EventController::class, 'eventrecords'])->name('events.records');
Route::get('/events/details/{id}', [EventController::class, 'show'])->name('event.details');
Route::get('/events/specific/{id}', [EventController::class, 'showone'])->name('event.specific');


Route::get('/connect_stories', [ConnectstoriesController::class, 'connect_index'])->name('connect_stories');
Route::get('/breaking_index', [BreakingController::class, 'breaking_index'])->name('breaking_barriers');


Route::get('/contact-us', [ContactusController::class, 'contactusone'])->name('contact-us');
Route::get('/donate-us', [DonateController::class, 'donateusone'])->name('donate-us');
Route::get('/become-volunteer', [BecomeVolunteerController::class, 'become_volunteer'])->name('become-volunteer');
Route::get('/our_team', [OurteamController::class, 'ourteamone'])->name('our_team');
Route::get('/blog-list', [BloglistController::class, 'bloglistone'])->name('blog-list');

// Route::resource('propertytype', ::class);
//login registration form route//
Route::get('/registerfrontend', function () {
    return view('auth.registerfrontend');
})->name('registerfrontend.form');

Route::post('/registerfrontend', [FrontendAuthController::class, 'register'])->name('registerfrontend');

Route::get('/loginfrontend', function () {
    return view('auth.loginfrontend');
})->name('loginfrontend.form');

Route::post('/loginfrontend', [FrontendAuthController::class, 'login'])->name('loginfrontend');
//end login registration form route//


// Route::resource('/recommendation', [RecommendatitonController::class]);

Route::get('/induction', [RecommendatitonController::class, 'index'])->name('induction.form');
Route::post('/recommend/store', [RecommendatitonController::class, 'recommend_store'])->name('recommend.store');
Route::get('/get-sub-sectors', [RecommendatitonController::class, 'getSubsectors'])->name('getSubSectors');
Route::get('/get-sub-sectorsone', [RecommendatitonController::class, 'getSubsectorsone'])->name('getSubSectorsone');
Route::get('/get-sub-sectorstwo', [RecommendatitonController::class, 'getSubsectorstwo'])->name('getSubSectorstwo');

//roles master route//
Route::get('/role', [RoleController::class, 'index'])->name('roles.index');







//user master route//
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users/store', [UserController::class, 'userstore'])->name('users.store');
Route::get('/user/edit/{id}', [UserController::class, 'user_edit'])->name('user.edit');
Route::put('/users/{id}', [UserController::class, 'user_update'])->name('users.update');
Route::put('users/{user}/change-password', [UserController::class, 'changePasswordusers'])->name('users.change-password');

//donation master//
Route::get('/donationmaster', [DonationController::class, 'donation_index'])->name('donationmaster');
Route::post('/donation/store', [DonationController::class, 'donation_store'])->name('donation.store');
Route::get('/donation/edit/{id}', [DonationController::class, 'donation_edit'])->name('donation.edit');
Route::put('/donation/{id}', [DonationController::class, 'donation_update'])->name('donation.update');
Route::delete('/donation/delete/{id}', [App\Http\Controllers\Admin\DonationController::class, 'destroy'])->name('donation.destroy');

//volunteers mastr//
Route::get('/volunteer_master', [VolunteerController::class, 'volunteer_index'])->name('volunteer_master');
Route::post('/volunteer/store', [VolunteerController::class, 'volunteer_store'])->name('volunteer.store');
Route::get('/volunteer/edit/{id}', [VolunteerController::class, 'volunteer_edit'])->name('volunteer.edit');
Route::put('/volunteer/{id}', [VolunteerController::class, 'volunteer_update'])->name('volunteer.update');
Route::delete('/volunteer/delete/{id}', [App\Http\Controllers\Admin\VolunteerController::class, 'destroy'])->name('volunteer.destroy');

//charity master//
Route::get('/charity_master', [CharityController::class, 'charity_index'])->name('charity_master');
Route::post('/charity/store', [CharityController::class, 'charity_store'])->name('charity.store');
Route::get('/charity/edit/{id}', [CharityController::class, 'charity_edit'])->name('charity.edit');
Route::put('/charity/{id}', [CharityController::class, 'charity_update'])->name('charity.update');
Route::delete('/charity/delete/{id}', [CharityController::class, 'destroy'])->name('charity.destroy');

//event master//
Route::get('/event_master', [EventsController::class, 'index'])->name('event_master');
Route::post('/events/store', [EventsController::class, 'store'])->name('events.store');
Route::delete('/events/delete/{id}', [EventsController::class, 'destroy'])->name('events.destroy');
Route::get('/events/edit/{id}', [EventsController::class, 'events_edit'])->name('events.edit');
Route::put('/events/{id}', [EventsController::class, 'events_update'])->name('events.update');


//connect stories master//
Route::get('/connectstories_master', [ConnectstoriessController::class, 'constories_index'])->name('connectstories_master');
Route::post('/connectstories/store', [ConnectstoriessController::class, 'constories_store'])->name('connectstories.store');
Route::get('/connectstories/edit/{id}', [ConnectstoriessController::class, 'connectstories_edit'])->name('connectstories.edit');
Route::put('/connectstories/{id}', [ConnectstoriessController::class, 'connectstories_update'])->name('connectstories.update');
Route::delete('/connectstories/delete/{id}', [ConnectstoriessController::class, 'destroy'])->name('connectstories.destroy');







//sector master//
Route::get('/sector_master', [SectorsController::class, 'sector_index'])->name('sector_master');
Route::post('/sector/store', [SectorsController::class, 'sector_store'])->name('sector.store');
Route::delete('/sector/delete/{id}', [App\Http\Controllers\Admin\SectorsController::class, 'destroy'])->name('sector.destroy');
Route::get('/sector/edit/{id}', [SectorsController::class, 'sector_edit'])->name('sector.edit');
Route::put('/sector/{id}', [SectorsController::class, 'sector_update'])->name('sector.update');

//subsector-master//
Route::get('/sub_sector_master', [SubSectorsController::class, 'sub_sector_index'])->name('sub_sector_master');
Route::post('/sub_sector/store', [SubSectorsController::class, 'sub_sector_store'])->name('sub_sector.store');
Route::delete('/sub_sector/delete/{id}', [App\Http\Controllers\Admin\SubSectorsController::class, 'destroy'])->name('sub_sector.destroy');
Route::get('/sub_sector/edit/{id}', [SubSectorsController::class, 'sub_sector_edit'])->name('sub_sector.edit');
Route::put('/sub_sector/{id}', [SubSectorsController::class, 'sub_sector_update'])->name('sub_sector.update');


//recommendation list//
Route::get('/recommendlist_master', [RecommendlistController::class, 'recommend_list'])->name('recommendlist_master');
Route::get('/individual_list', [RecommendlistController::class, 'individualList'])->name('individual_list');
Route::get('/independent_org_list', [RecommendlistController::class, 'independentOrgList'])->name('independent_org_list');
Route::get('/getSubSectors', [RecommendlistController::class, 'getSubsectors'])->name('getSubSectors');

Route::get('/recommend_edit/edit/{id}', [RecommendlistController::class, 'recommend_edit'])->name('recommend.edit');
Route::put('/recommends/{id}', [RecommendlistController::class, 'recommend_update'])->name('recommends.update');
Route::get('/recommend_view/view/{id}', [RecommendlistController::class, 'recommend_view'])->name('recommend.view');
Route::post('/induction_status/{status}', [RecommendlistController::class, 'update_status'])->name('induction_status');
//soevaluation master//
Route::get('/so_evaluation_master', [SoEvaluationController::class, 'evaluation_list'])->name('so_evaluation_master');
Route::post('/so_evaluation/store', [SoEvaluationController::class, 'so_evaluation_store'])->name('so_evaluation.store');
Route::delete('/so_evaluation/delete/{id}', [App\Http\Controllers\Admin\SoEvaluationController::class, 'destroy'])->name('so_evaluation.destroy');
Route::get('/so_evaluation_edit/edit/{id}', [SoEvaluationController::class, 'so_evaluation_edit'])->name('so_evaluation_edit.edit');
Route::put('/so_evaluation/{id}', [SoEvaluationController::class, 'so_evaluation_update'])->name('so_evaluation.update');
Route::get('/get-recommendation-details', [SoEvaluationController::class, 'getRecommendationDetails'])->name('get.recommendation.details');
Route::get('/evaluation_view/view/{id}', [SoEvaluationController::class, 'evaluation_view'])->name('evaluation.view');
Route::get('/evaluation_pendingview/pview/{id}', [SoEvaluationController::class, 'evaluationpending_view'])->name('evaluation.pendingview');
Route::get('/evaluation_approveview/aview/{id}', [SoEvaluationController::class, 'evaluationapprove_view'])->name('evaluation.approveview');
Route::get('/evaluation_rejectview/rview/{id}', [SoEvaluationController::class, 'evaluationreject_view'])->name('evaluation.rejectview');
Route::post('/evaluation_status/reject', [SoEvaluationController::class, 'rejectEvaluation']);

//so evaluation lsit//
Route::get('/evaluation_status', [SoEvaluationController::class, 'approved_list'])->name('evaluation_status');  // Approve List
Route::get('/soevaluation_reject', [SoEvaluationController::class, 'rejected_list'])->name('soevaluation_reject');  // Reject List
Route::get('/soevaluation_pending', [SoEvaluationController::class, 'pending_list'])->name('soevaluation_pending');  // Pending List

// Update status (approve/reject action)
Route::post('/evaluation_status/{action}', [SoEvaluationController::class, 'updateStatus'])->name('evaluation_status_action');

//onboard form//
Route::get('/onboard_form_master', [OnboardController::class, 'onboard_list'])->name('onboard_form_master');
Route::get('/get-onboard-details', [OnboardController::class, 'getOnboardDetails'])->name('get.onboarddetails.details');

// Route::get('/get-subsectors-by-sector', [OnboardController::class, 'getSubsectorsBySector'])->name('get.subsectors.bySector');
Route::get('/get-subsectors', [OnboardController::class, 'getSubsectorsBySectors'])->name('get.subsectors.by.sectors');
Route::post('/onboard/store', [OnboardController::class, 'oboard_store'])->name('onboard.store');
Route::delete('/onboard/delete/{id}', [App\Http\Controllers\Admin\OnboardController::class, 'destroy'])->name('onboard.destroy');
Route::get('/onboard_edit/edit/{id}', [OnboardController::class, 'onboard_edit'])->name('onboard_edit.edit');
Route::put('/onboard/{id}', [OnboardController::class, 'onboard_update'])->name('onboard.update');

