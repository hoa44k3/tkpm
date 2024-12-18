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
    });
    
    Route::prefix('courses')->group(function () {
        Route::get('/', [CoursesController::class, 'index'])->name('courses.index');
        Route::get('/create', [CoursesController::class, 'create'])->name('courses.create');
        Route::post('/', [CoursesController::class, 'store'])->name('courses.store');
        Route::get('/{course}/edit', [CoursesController::class, 'edit'])->name('courses.edit'); // Đổi từ {courses} thành {course}
        Route::put('/{course}', [CoursesController::class, 'update'])->name('courses.update'); // Đổi từ {courses} thành {course}
        Route::delete('/{course}', [CoursesController::class, 'destroy'])->name('courses.destroy'); // Đổi từ {courses} thành {course}
    });
    Route::prefix('reviews')->group(function () {
        Route::get('/', [TeacherReviewController::class, 'index'])->name('reviews.index');
        Route::get('/create', [TeacherReviewController::class, 'create'])->name('reviews.create');
        Route::post('/', [TeacherReviewController::class, 'store'])->name('reviews.store');
        Route::get('/{review}/edit', [TeacherReviewController::class, 'edit'])->name('reviews.edit');
        Route::put('/{review}', [TeacherReviewController::class, 'update'])->name('reviews.update');
        Route::delete('/{review}', [TeacherReviewController::class, 'destroy'])->name('reviews.destroy');
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
    Route::get('/coursesdetail', [HomeController::class, 'coursesdetail'])->name('coursesdetail');
});
