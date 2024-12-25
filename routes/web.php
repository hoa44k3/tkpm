<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherReviewController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');  
        Route::get('/create', [UserController::class, 'create'])->name('users.create');  
        Route::post('/', [UserController::class, 'store'])->name('users.store');        
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); 
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update'); 
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');  
    });

    Route::prefix('contacts')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
        Route::post('/reply', [ContactController::class, 'reply'])->name('contacts.reply');
        Route::post('/edit-response', [ContactController::class, 'editResponse'])->name('contacts.editResponse');
        Route::post('/store', [ContactController::class, 'storeContact'])->name('contact.store'); // Thêm route này
    });
    

    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
        Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show');

    });
    Route::prefix('tags')->group(function () {
        Route::get('/', [TagController::class, 'index'])->name('tags.index');         
        Route::get('/create', [TagController::class, 'create'])->name('tags.create');  
        Route::post('/', [TagController::class, 'store'])->name('tags.store');        
        Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit'); 
        Route::put('/{tag}', [TagController::class, 'update'])->name('tags.update'); 
        Route::delete('/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');  

    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    Route::group(['prefix' => 'teachers'], function () {
        Route::get('/', [TeacherController::class, 'index'])->name('teachers.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('teachers.create');
        Route::post('/store', [TeacherController::class, 'store'])->name('teachers.store');
        Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
        Route::put('/update/{id}', [TeacherController::class, 'update'])->name('teachers.update');
        Route::delete('/destroy/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
        Route::get('/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');

    });
    Route::group(['prefix' => 'reviews'], function () {
        Route::get('/', [ReviewController::class, 'index'])->name('reviews.index');
        Route::get('/create', [ReviewController::class, 'create'])->name('reviews.create');
        Route::post('/store', [ReviewController::class, 'store'])->name('reviews.store');
        Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name('reviews.edit');
        Route::put('/update/{id}', [ReviewController::class, 'update'])->name('reviews.update');
        Route::delete('/destroy/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
    });
    Route::prefix('comments')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('comments.index');
        Route::get('/create', [CommentController::class, 'create'])->name('comments.create');
        Route::post('/', [CommentController::class, 'store'])->name('comments.store');
        Route::get('/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
        Route::put('/{comment}', [CommentController::class, 'update'])->name('comments.update');
        Route::delete('/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    });
    Route::prefix('classes')->group(function () {
        Route::get('/', [ClassController::class, 'index'])->name('classes.index');
        Route::get('/create', [ClassController::class, 'create'])->name('classes.create');
        Route::post('/', [ClassController::class, 'store'])->name('classes.store');
        Route::get('/{class}/edit', [ClassController::class, 'edit'])->name('classes.edit');
        Route::put('/{class}', [ClassController::class, 'update'])->name('classes.update');
        Route::delete('/{class}', [ClassController::class, 'destroy'])->name('classes.destroy');
        Route::get('/{id}', [ClassController::class, 'show'])->name('classes.show');

    });
    Route::prefix('faqs')->group(function () {
        Route::get('/', [FaqController::class, 'index'])->name('faqs.index');
        Route::post('/store', [FaqController::class, 'store'])->name('faqs.store'); // Thêm câu hỏi
        Route::post('/answer/{id}', [FaqController::class, 'answer'])->name('faqs.answer'); // Trả lời câu hỏi
        Route::delete('/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');
    });
    Route::prefix('events')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('events.index');
        Route::get('/create', [EventController::class, 'create'])->name('events.create');
        Route::post('/', [EventController::class, 'store'])->name('events.store');
        Route::get('/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
        Route::put('/{event}', [EventController::class, 'update'])->name('events.update');
        Route::delete('/{event}', [EventController::class, 'destroy'])->name('events.destroy');
        Route::get('/{id}', [EventController::class, 'show'])->name('events.show');

    });
    
    Route::prefix('courses')->group(function () {
        Route::get('/', [CoursesController::class, 'index'])->name('courses.index');
        Route::get('/create', [CoursesController::class, 'create'])->name('courses.create');
        Route::post('/', [CoursesController::class, 'store'])->name('courses.store');
        Route::get('/{course}/edit', [CoursesController::class, 'edit'])->name('courses.edit'); // Đổi từ {courses} thành {course}
        Route::put('/{course}', [CoursesController::class, 'update'])->name('courses.update'); // Đổi từ {courses} thành {course}
        Route::delete('/{course}', [CoursesController::class, 'destroy'])->name('courses.destroy'); // Đổi từ {courses} thành {course}
    });
    
});    
    
Route::group(['prefix' => ''], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blogdetail', [HomeController::class, 'blogdetail'])->name('blogdetail');
    Route::get('/team', [HomeController::class, 'team'])->name('team');
    Route::get('/teamdetail', [HomeController::class, 'teamdetail'])->name('teamdetail');
    Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
    Route::get('/event', [HomeController::class,'event'])-> name('event');
    Route::get('/event/{id}', [HomeController::class, 'eventdetail'])->name('event.detail');
    Route::get('/courses/{id}', [HomeController::class, 'coursesdetail'])->name('course.detail');
    Route::post('/contact/store', [HomeController::class, 'storeContact'])->name('contact.store');
    Route::get('/class/{id}', [HomeController::class, 'classdetail'])->name('class.detail');
});
