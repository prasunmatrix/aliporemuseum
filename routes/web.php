<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CmsManageController;
use App\Http\Controllers\admin\PhotoGalleryController;
use App\Http\Controllers\admin\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SubadminController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\EventCalendarController;
use App\Http\Controllers\admin\KnowledgeController;
use App\Http\Controllers\admin\OrganisationController;
use App\Http\Controllers\admin\TenderController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\admin\EmployeeController;

use App\Http\Controllers\admin\LocationManageController;
use App\Http\Controllers\admin\AudioManageController;
use App\Http\Controllers\admin\TypeManageController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/**----------------------------Frontend Routes ----------------------------------- */
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/netaji-section', [HomeController::class, 'netajiSection'])->name('netaji-section');
Route::get('/neharu-section', [HomeController::class, 'neharuSection'])->name('neharu-section');

Route::get('/branch', [App\Http\Controllers\frontend\BranchController::class, 'index'])->name('branch');

Route::get('/knowledge-corner', [App\Http\Controllers\frontend\ServiceController::class, 'knowledgeCorner'])->name('knowledge-corner');
Route::get('/event-calendar', [App\Http\Controllers\frontend\BranchController::class, 'eventCalendar'])->name('event-calendar');
Route::get('/organisation-chart', [App\Http\Controllers\frontend\ServiceController::class, 'organisationChart'])->name('organisation-chart');
Route::get('/search-by-district', [App\Http\Controllers\frontend\BranchController::class, 'getBranchByDestrict']);
//Route::get('/search-by-block', [App\Http\Controllers\frontend\BranchController::class, 'getBranchByBlock']);
Route::get('/search-by-branch', [App\Http\Controllers\frontend\BranchController::class, 'getBranchByBranch']);
Route::get('/emi-calculator', [App\Http\Controllers\frontend\ServiceController::class, 'emiCalculator'])->name('emi-calculator');
Route::get('/tender', [App\Http\Controllers\frontend\ServiceController::class, 'tender'])->name('tender');
//Route::get('/emi-calculator-new', [App\Http\Controllers\frontend\ServiceController::class, 'emiCalculatorNew'])->name('emi-calculator-new');
Route::get('/notice', [App\Http\Controllers\frontend\ServiceController::class, 'notice'])->name('notice');
Route::get('/neft-rtgs', [App\Http\Controllers\frontend\ServiceController::class, 'neftRtgs'])->name('neft-rtgs');
Route::get('/interest-rates', [App\Http\Controllers\frontend\InterestRatesController::class, 'index'])->name('interest-rates');
Route::get('/feedback-grievance', [App\Http\Controllers\frontend\FeedbackGrievanceController::class, 'index'])->name('feedback-grievance');
Route::get('/grievanceid', [App\Http\Controllers\frontend\FeedbackGrievanceController::class, 'grievanceId'])->name('grievance.id');
Route::post('/grievance', [App\Http\Controllers\frontend\FeedbackGrievanceController::class, 'grievancePost'])->name('grievance.post');
Route::get('/feedbackid', [App\Http\Controllers\frontend\FeedbackGrievanceController::class, 'feedbackId'])->name('feedback.id');
Route::post('/feedback', [App\Http\Controllers\frontend\FeedbackGrievanceController::class, 'feedbackPost'])->name('feedback.post');
Route::get('/personal-loan', [App\Http\Controllers\frontend\ProductController::class, 'personalLoan'])->name('personal-loan');
Route::get('/home-loan', [App\Http\Controllers\frontend\ProductController::class, 'homeLoan'])->name('home-loan');
Route::get('/car-loan', [App\Http\Controllers\frontend\ProductController::class, 'carLoan'])->name('car-loan');
Route::get('/eccs-loan', [App\Http\Controllers\frontend\ProductController::class, 'eccsLoan'])->name('eccs-loan');
Route::get('/cash-credit-loan', [App\Http\Controllers\frontend\ProductController::class, 'cashCreditLoan'])->name('cash-credit-loan');
Route::get('/savings-account', [App\Http\Controllers\frontend\ProductController::class, 'savingsAccount'])->name('savings-account');
Route::get('/current-account', [App\Http\Controllers\frontend\ProductController::class, 'currentAccount'])->name('current-account');
Route::get('/safe-deposit', [App\Http\Controllers\frontend\ServiceController::class, 'safeDeposit'])->name('safe-deposit');
Route::get('/about-us', [App\Http\Controllers\frontend\AboutUsController::class, 'index'])->name('about-us');
Route::get('/profile', [App\Http\Controllers\frontend\AboutUsController::class, 'profile'])->name('profile');
Route::get('/structure', [App\Http\Controllers\frontend\AboutUsController::class, 'structure'])->name('structure');
Route::get('/business', [App\Http\Controllers\frontend\AboutUsController::class, 'business'])->name('business');
Route::get('/technology', [App\Http\Controllers\frontend\AboutUsController::class, 'technology'])->name('technology');
Route::get('/why-rccb-ltd', [App\Http\Controllers\frontend\AboutUsController::class, 'whyRccbLtd'])->name('why-rccb-ltd');
Route::get('/mission', [App\Http\Controllers\frontend\AboutUsController::class, 'mission'])->name('mission');

/*-----------------------Admin Routes----------------------------------------------- */
Route::group(["prefix" => "admin", "namespace" => "admin", 'as' => 'admin.'], function () {
  Route::get('/', [AdminController::class, 'index'])->name('login');
  Route::post('/verifylogin', [AdminController::class, 'verifyLogin'])->name('verifylogin');
  Route::get('/register', [AdminController::class, 'register'])->name('register');
  Route::post('/register', [AdminController::class, 'postRegister'])->name('register.post');
  Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboardView'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/change-password', [AdminController::class, 'showChangePasswordForm'])->name('changePassword');
    Route::post('/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/add-category', [CategoryController::class, 'create'])->name('add-category');
    Route::post('/add-category', [CategoryController::class, 'store'])->name('add-category.post');
    Route::get('/edit-category/{category_id}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::put('/update-category/{category_id}', [CategoryController::class, 'update'])->name('update.put');
    Route::get('/delete-category/{category_id}', [CategoryController::class, 'delete'])->name('delete');
    Route::get('/cms', [CmsManageController::class, 'index'])->name('cmslist');
    Route::get('/add-cms', [CmsManageController::class, 'create'])->name('add-cms');
    Route::post('/add-cms', [CmsManageController::class, 'store'])->name('add-cms.post');
    Route::get('/edit-cms/{cms_id}', [CmsManageController::class, 'edit'])->name('edit-cms');
    Route::put('/update-cms/{cms_id}', [CmsManageController::class, 'update'])->name('update.cms');
    Route::get('/delete-cms/{cms_id}', [CmsManageController::class, 'delete'])->name('delete');
    Route::get('/photogallery', [PhotoGalleryController::class, 'index'])->name('photogallerylist');
    Route::get('/add-photogallery', [PhotoGalleryController::class, 'create'])->name('add-photogallery');
    Route::post('/add-photogallery', [PhotoGalleryController::class, 'store'])->name('add-photogallery.post');
    Route::get('/edit-photogallery/{photogallery_id}', [PhotoGalleryController::class, 'edit'])->name('edit-photogallery');
    Route::put('/update-photogallery/{photogallery_id}', [PhotoGalleryController::class, 'update'])->name('update.photogallery');
    Route::post('/gallery-image-delete', [PhotoGalleryController::class, 'galleryImageDelete'])->name('gallery_image_delete');
    Route::get('/delete-photogallery/{photogallery_id}', [PhotoGalleryController::class, 'delete'])->name('delete');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingsController::class, 'postSettings'])->name('post-settings');
    Route::post('/settings-social', [SettingsController::class, 'postSettingsSocial'])->name('post-settings-social');

    //Permission Route
    Route::get('/permission', [PermissionController::class, 'index'])->name('permissionlist');
    Route::get('/add-permission', [PermissionController::class, 'create'])->name('add-permission');
    Route::post('/add-permission', [PermissionController::class, 'store'])->name('add-permission.post');
    Route::get('/edit-permission/{permission_id}', [PermissionController::class, 'edit'])->name('edit-permission');
    Route::put('/update-permission/{permission_id}', [PermissionController::class, 'update'])->name('update.permission');
    Route::get('/delete-permission/{permission_id}', [PermissionController::class, 'destroy'])->name('delete');

    //Role Route
    Route::get('/role', [RoleController::class, 'index'])->name('rolelist');
    Route::get('/add-role', [RoleController::class, 'create'])->name('add-role');
    Route::post('/add-role', [RoleController::class, 'store'])->name('add-role.post');
    Route::get('/edit-role/{role_id}', [RoleController::class, 'edit'])->name('edit-role');
    Route::put('/update-role/{role_id}', [RoleController::class, 'update'])->name('update.role');
    Route::get('/delete-role/{role_id}', [RoleController::class, 'destroy'])->name('delete');

    //Role subadmin
    Route::get('/subadmin', [SubadminController::class, 'index'])->name('subadmin');
    Route::get('/add-subadmin', [SubadminController::class, 'create'])->name('add-subadmin');
    Route::post('/add-subadmin', [SubadminController::class, 'store'])->name('add-subadmin.post');
    Route::get('/edit-subadmin/{subadmin_id}', [SubadminController::class, 'edit'])->name('edit-subadmin');
    Route::put('/update-subadmin/{subadmin_id}', [SubadminController::class, 'update'])->name('update.subadmin');
    Route::get('/delete-subadmin/{subadmin_id}', [SubadminController::class, 'destroy'])->name('delete');

    //Branch
    Route::get('/branch', [BranchController::class, 'index'])->name('branchlist');
    Route::get('/add-branch', [BranchController::class, 'create'])->name('add-branch');
    Route::post('/add-branch', [BranchController::class, 'store'])->name('add-branch.post');
    Route::get('/edit-branch/{branch_id}', [BranchController::class, 'edit'])->name('edit-branch');
    Route::put('/update-branch/{branch_id}', [BranchController::class, 'update'])->name('update.branch');
    Route::get('/delete-branch/{branch_id}', [BranchController::class, 'destroy'])->name('delete');


    //Knowledge corner
    Route::get('/knowledge-corner', [KnowledgeController::class, 'index'])->name('knowledge-corner');
    Route::get('/add-knowledge-corner', [KnowledgeController::class, 'create'])->name('add-knowledge-corner');
    Route::post('/add-knowledge-corner', [KnowledgeController::class, 'store'])->name('add-knowledge-corner.post');
    Route::get('/edit-knowledge-corner/{id}', [KnowledgeController::class, 'edit'])->name('edit-knowledge-corner');
    Route::put('/update-knowledge-corner/{id}', [KnowledgeController::class, 'update'])->name('update.knowledge-corner');
    Route::get('/delete-knowledge-corner/{id}', [KnowledgeController::class, 'destroy'])->name('delete');

    //Notice
    Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
    Route::get('/add-notice', [NoticeController::class, 'create'])->name('add-notice');
    Route::post('/add-notice', [NoticeController::class, 'store'])->name('add-notice.post');
    Route::get('/edit-notice/{id}', [NoticeController::class, 'edit'])->name('edit-notice');
    Route::put('/update-notice/{id}', [NoticeController::class, 'update'])->name('update.notice');
    Route::get('/delete-notice/{id}', [NoticeController::class, 'destroy'])->name('delete');

    //Event Calendar
    Route::get('/event-calendar', [EventCalendarController::class, 'index'])->name('eventcalendar');
    Route::post('/event-calendar', [EventCalendarController::class, 'postEventCalendar'])->name('post-eventcalendar');

    //Organisation chart
    Route::get('/organisation-chart', [OrganisationController::class, 'index'])->name('organisation-chart');
    Route::get('/add-organisation-chart', [OrganisationController::class, 'create'])->name('add-organisation-chart');
    Route::post('/add-organisation-chart', [OrganisationController::class, 'store'])->name('add-organisation-chart.post');
    Route::get('/edit-organisation-chart/{id}', [OrganisationController::class, 'edit'])->name('edit-organisation-chart');
    Route::put('/update-organisation-chart/{id}', [OrganisationController::class, 'update'])->name('update.organisation-chart');
    Route::get('/delete-organisation-chart/{id}', [OrganisationController::class, 'destroy'])->name('delete');

    //Tender
    Route::get('/tender', [TenderController::class, 'index'])->name('tender');
    Route::get('/add-tender', [TenderController::class, 'create'])->name('add-tender');
    Route::post('/add-tender', [TenderController::class, 'store'])->name('add-tender.post');
    Route::get('/edit-tender/{id}', [TenderController::class, 'edit'])->name('edit-tender');
    Route::put('/update-tender/{id}', [TenderController::class, 'update'])->name('update.tender');
    Route::get('/delete-tender/{id}', [TenderController::class, 'destroy'])->name('delete');

    //Employee
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
    Route::get('/add-employee-leave', [EmployeeController::class, 'createEmployeeLeave'])->name('add-employee-leave');
    Route::post('/import-employee-leave', [EmployeeController::class, 'importEmployeeLeave'])->name('import-employee-leave');

    //Location
    Route::get('/location', [LocationManageController::class, 'index'])->name('locationlist');
    Route::get('/add-location', [LocationManageController::class, 'create'])->name('add-location');
    Route::post('/add-location', [LocationManageController::class, 'store'])->name('add-location.post');
    Route::get('/edit-location/{location_id}', [LocationManageController::class, 'edit'])->name('edit-location');
    Route::put('/update-location/{location_id}', [LocationManageController::class, 'update'])->name('update.location');
    Route::get('/delete-location/{location_id}', [LocationManageController::class, 'delete'])->name('delete');

    //Audio
    Route::get('/audio', [AudioManageController::class, 'index'])->name('audiolist');
    Route::get('/add-audio', [AudioManageController::class, 'create'])->name('add-audio');
    Route::post('/add-audio', [AudioManageController::class, 'store'])->name('add-audio.post');
    Route::get('/edit-audio/{audio_id}', [AudioManageController::class, 'edit'])->name('edit-audio');
    Route::put('/update-audio/{audio_id}', [AudioManageController::class, 'update'])->name('update.audio');
    Route::get('/delete-audio/{audio_id}', [AudioManageController::class, 'delete'])->name('delete');

     //Type
     Route::get('/type', [TypeManageController::class, 'index'])->name('typelist');
     Route::get('/add-type', [TypeManageController::class, 'create'])->name('add-type');
     Route::post('/add-type', [TypeManageController::class, 'store'])->name('add-type.post');
     Route::get('/edit-type/{type_id}', [TypeManageController::class, 'edit'])->name('edit-type');
     Route::put('/update-type/{type_id}', [TypeManageController::class, 'update'])->name('update.type');
     Route::get('/delete-type/{type_id}', [TypeManageController::class, 'delete'])->name('delete');
     
  });
}); 


/*-------------------------------Employee Routes--------------------------------------*/
Route::group(["prefix" => "employee", "namespace" => "employee", 'as' => 'employee.'], function () {
  Route::get('/', [App\Http\Controllers\employee\EmployeeController::class, 'index'])->name('login');
  Route::post('/verifylogin', [App\Http\Controllers\employee\EmployeeController::class, 'verifyLogin'])->name('verifylogin');
  //Route::get('/register', [App\Http\Controllers\employee\EmployeeController::class, 'register'])->name('register');
  //Route::post('/register', [App\Http\Controllers\employee\EmployeeController::class, 'postRegister'])->name('register.post');
  Route::group(['middleware' => 'employee'], function () {
    Route::get('/dashboard', [App\Http\Controllers\employee\EmployeeController::class, 'dashboardView'])->name('dashboard');
    Route::get('/logout', [App\Http\Controllers\employee\EmployeeController::class, 'logout'])->name('logout');
    Route::get('/change-password', [App\Http\Controllers\employee\EmployeeController::class, 'showChangePasswordForm'])->name('changePassword');
    Route::post('/change-password', [App\Http\Controllers\employee\EmployeeController::class, 'changePassword'])->name('changePassword');
    
    //Leave
    Route::get('/leave', [App\Http\Controllers\employee\LeaveController::class, 'index'])->name('leave');
    Route::get('/add-leave', [App\Http\Controllers\employee\LeaveController::class, 'create'])->name('add-leave');
    Route::post('/add-leave', [App\Http\Controllers\employee\LeaveController::class, 'store'])->name('add-leave.post');

    //Cancel Leave
    Route::get('/cancel-leave/{leave_id}', [App\Http\Controllers\employee\LeaveController::class, 'leavecancelbyemployee'])->name('cancel');

    //Employee Modify Leave
    Route::get('/modify-leave/{leave_id}', [App\Http\Controllers\employee\LeaveController::class, 'leavemodifybyemployee'])->name('modify');
    Route::put('/updateemployee-leave/{leave_id}', [App\Http\Controllers\employee\LeaveController::class, 'updateemployeeleave'])->name('updateemployee.leave');

    //Branch Manager Approve Leave
    Route::get('/bmapproveleave', [App\Http\Controllers\employee\BmApprovedLeaveController::class, 'index'])->name('bmapproveleave');
    Route::get('/edit-leave/{leave_id}', [App\Http\Controllers\employee\BmApprovedLeaveController::class, 'edit'])->name('edit-leave');
    Route::put('/update-leave/{leave_id}', [App\Http\Controllers\employee\BmApprovedLeaveController::class, 'update'])->name('update.leave');

    Route::get('/edit-hireleave/{leave_id}', [App\Http\Controllers\employee\BmApprovedLeaveController::class, 'hireleave'])->name('edit-hireleave');
    Route::put('/update-hireleave/{leave_id}', [App\Http\Controllers\employee\BmApprovedLeaveController::class, 'updatehireleave'])->name('update.hireleave');
  });
});
/*-------------------------------Employee Routes--------------------------------------*/
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
