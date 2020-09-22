<?php

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

Route::get('/', function () { return redirect('authentication/login'); });

/* Dashboard */
Route::get('dashboard', function ()       { return redirect('dashboard/index'); });
Route::get('dashboard/index',             'DashboardController@index')->name('dashboard.index');

/* Appoinment */
Route::get('appointment', function ()       { return redirect('appointment/book-appointment'); });
Route::get('appointment/book-appointment',  'AppointmentController@bookAppointment')->name('appointment.book-appointment');

/* Doctor */
Route::get('doctor', function ()        { return redirect('doctor/doctors'); });
Route::get('doctor/doctors',            'DoctorController@doctors')->name('doctor.doctors');
Route::get('doctor/add-doctor',         'DoctorController@addDoctor')->name('doctor.add-doctor');
Route::get('doctor/profile',            'DoctorController@profile')->name('doctor.profile');
Route::get('doctor/events',             'DoctorController@events')->name('doctor.events');

/* Patients */
Route::get('patients', function ()          { return redirect('patients/all-patients'); });
Route::get('patients/all-patients',         'PatientsController@allPatients')->name('patients.all-patients');
Route::get('patients/add-patients',         'PatientsController@addPatients')->name('patients.add-patients');
Route::post('patients/add-patients',        'PatientsController@upload')->name('patients.signature');
Route::get('patients/patients-profile',     'PatientsController@patientsProfile')->name('patients.patients-profile');
Route::get('patients/invoice',              'PatientsController@invoice')->name('patients.invoice');

/* Payment */
Route::get('payment', function ()              { return redirect('payment/all-payment'); });
Route::get('payment/all-payment',              'PaymentController@allPayment')->name('payment.all-payment');
Route::get('payment/add-payment',              'PaymentController@addPayment')->name('payment.add-payment');

/* departments */
Route::get('departments', function ()         { return redirect('departments/add-departments'); });
Route::get('departments/add-department',      'DepartmentsController@addDepartment')->name('departments.add-department');
Route::get('departments/all-departments',     'DepartmentsController@allDepartments')->name('departments.all-departments');
Route::get('departments/more-departments',     'DepartmentsController@moreDepartments')->name('departments.more-departments');

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot-password', 'AuthenticationController@forgotPassword')->name('authentication.forgot-password');
Route::get('authentication/page-offline', 'AuthenticationController@pageOffline')->name('authentication.page-offline');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');

/* Blog */
Route::get('blog', function () { return redirect('blog/dashboard'); });
Route::get('blog/dashboard', 'BlogController@dashboard')->name('blog.dashboard');
Route::get('blog/new-post', 'BlogController@newPost')->name('blog.new-post');
Route::get('blog/list', 'BlogController@list')->name('blog.list');
Route::get('blog/grid', 'BlogController@grid')->name('blog.grid');
Route::get('blog/detail', 'BlogController@detail')->name('blog.detail');

/* File Manager */
Route::get('file-manager', function () { return redirect('file-manager/dashboard'); });
Route::get('file-manager/dashboard', 'FileManagerController@dashboard')->name('file-manager.dashboard');
Route::get('file-manager/documents', 'FileManagerController@documents')->name('file-manager.documents');
Route::get('file-manager/media', 'FileManagerController@media')->name('file-manager.media');
Route::get('file-manager/image', 'FileManagerController@image')->name('file-manager.image');

/* App */
Route::get('app', function () { return redirect('app/inbox'); });
Route::get('app/inbox', 'AppController@inbox')->name('app.inbox');
Route::get('app/single', 'AppController@single')->name('app.single');
Route::get('app/compose', 'AppController@compose')->name('app.compose');
Route::get('app/chat', 'AppController@chat')->name('app.chat');
Route::get('app/contact-list', 'AppController@contactList')->name('app.contact-list');

/* Widgets */
Route::get('widgets', function () { return redirect('widgets/apps'); });
Route::get('widgets/apps', 'WidgetsController@apps')->name('widgets.apps');
Route::get('widgets/data', 'WidgetsController@data')->name('widgets.data');

/* Pages */
Route::get('pages', function () { return redirect('pages/blank-page'); });
Route::get('pages/blank-page', 'PagesController@blankPage')->name('pages.blank-page');
Route::get('pages/profile', 'PagesController@profile')->name('pages.profile');
Route::get('pages/rtl', 'PagesController@rtl')->name('pages.rtl');
Route::get('pages/image-gallery', 'PagesController@imageGallery')->name('pages.image-gallery');
Route::get('pages/timeline', 'PagesController@timeline')->name('pages.timeline');
Route::get('pages/invoices', 'PagesController@invoices')->name('pages.invoices');
Route::get('pages/search-results', 'PagesController@searchResults')->name('pages.search-results');

/* Ui Kit */
Route::get('ui', function () { return redirect('ui/ui-kit'); });
Route::get('ui/ui-kit', 'UiController@uiKit')->name('ui.ui-kit');
Route::get('ui/alerts', 'UiController@alerts')->name('ui.alerts');
Route::get('ui/collapse', 'UiController@collapse')->name('ui.collapse');
Route::get('ui/colors', 'UiController@colors')->name('ui.colors');
Route::get('ui/dialogs', 'UiController@dialogs')->name('ui.dialogs');
Route::get('ui/icons', 'UiController@icons')->name('ui.icons');
Route::get('ui/list-group', 'UiController@listGroup')->name('ui.list-group');
Route::get('ui/media-object', 'UiController@mediaObject')->name('ui.media-object');
Route::get('ui/modals', 'UiController@modals')->name('ui.modals');
Route::get('ui/notifications', 'UiController@notifications')->name('ui.notifications');
Route::get('ui/progressbars', 'UiController@progressbars')->name('ui.progressbars');
Route::get('ui/range-sliders', 'UiController@rangeSliders')->name('ui.range-sliders');
Route::get('ui/sortable-nestable', 'UiController@sortableNestable')->name('ui.sortable-nestable');
Route::get('ui/tabs', 'UiController@tabs')->name('ui.tabs');
Route::get('ui/waves', 'UiController@waves')->name('ui.waves');