<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeatureItemController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HeroItemController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceItemController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialItemController;
use App\Http\Controllers\UserController;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Hero;
use App\Models\Post;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
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

Route::get('/', function () {
    $hero = Hero::first();
    $header = Header::first();
    $about = About::first();
    $testimonial = Testimonial::first();
    $service = Service::first();
    $team = Team::first();
    $users = User::all();
    $promotion = Promotion::first();
    $contact = Contact::first();
    $footer = Footer::first();
    return view('home', compact('hero', 'header', 'about', 'testimonial', 'service', 'team', 'users', 'promotion', 'contact', 'footer'));
})->name('home');

Route::get('/services', function () {
    $hero = Hero::first();
    $header = Header::first();
    $service = Service::first();
    $feature = Feature::first();
    $items = ServiceItem::paginate(9);
    $posts = Post::orderBy('created_at','desc')->get();
    $contact = Contact::first();
    $footer = Footer::first();
    return view('services', compact('hero', 'header', 'service', 'feature', 'items', 'posts', 'contact', 'footer'));
})->name('services');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/category/{id}', [BlogController::class, 'category']);
Route::get('/blog/tag/{id}', [BlogController::class, 'tag']);
Route::get('/blog/search', [BlogController::class, 'search']);

Route::get('/blog-post/{id}', function ($id) {
    $hero = Hero::first();
    $header = Header::first();
    $post = Post::find($id);
    $categories = Category::all();
    $tags = Tag::all();
    $footer = Footer::first();
    if (!$post->validation) {
        return redirect()->back();
    }
    return view('blog-post', compact('hero', 'header', 'post', 'categories', 'tags', 'footer'));
})->name('blog-post');

Route::get('/contact', function () {
    $hero = Hero::first();
    $header = Header::first();
    $contact = Contact::first();
    $footer = Footer::first();
    return view('contact', compact('hero', 'header', 'contact', 'footer'));
})->name('contact');


Route::middleware(['auth', 'edit'])->group(function () {
    Route::get('/header/{id}/edit', [HeaderController::class, 'edit'])->name('header.edit');
    Route::post('/header/{id}/update', [HeaderController::class, 'update'])->name('header.update');
    
    Route::get('/hero/{id}/edit', [HeroController::class, 'edit'])->name('hero.edit');
    Route::post('/hero/{id}/update', [HeroController::class, 'update'])->name('hero.update');
    Route::resource('hero-items', HeroItemController::class);


    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about/{id}/update', [AboutController::class, 'update'])->name('about.update');

    Route::get('/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/{id}/update', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::resource('testimonial-items', TestimonialItemController::class);

    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('/services/{id}/update', [ServiceController::class, 'update'])->name('services.update');
    Route::resource('service-items', ServiceItemController::class);

    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/{id}/update', [TeamController::class, 'update'])->name('team.update');

    Route::resource('/users', UserController::class);

    Route::get('/promotion/{id}/edit', [PromotionController::class, 'edit'])->name('promotion.edit');
    Route::post('/promotion/{id}/update', [PromotionController::class, 'update'])->name('promotion.update');
    
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    
    Route::get('/footer/{id}/edit', [FooterController::class, 'edit'])->name('footer.edit');
    Route::post('/footer/{id}/update', [FooterController::class, 'update'])->name('footer.update');

    Route::get('/features/{id}/edit', [FeatureController::class, 'edit'])->name('feature.edit');
    Route::post('/features/{id}/update', [FeatureController::class, 'update'])->name('feature.update');
    Route::resource('/feature-items', FeatureItemController::class);
});


Route::resource('/posts', PostController::class);

Route::post('/comment/{id}/store', [CommentController::class, 'store'])->name('comment.store');

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::post('/send-mail', [FormulaireController::class, 'sendMail']);

Route::get('/send-new-post', [NewPostController::class, 'sendMail'])->name('posts.new-post');

Route::post('/posts/{id}/validation', [PostController::class, 'validation'])->name('posts.validation');

Route::get('/test', function() {
    return view('mail.contact');
});

Route::get('/dashboard', function () {
    return view('backoffice.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
