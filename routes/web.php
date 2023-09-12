<?php

use App\Models\RefDataSubKlasifikasi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

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

Route::get('/users/all', function (Request $request) {

//    $users = \App\Models\User::select('name', 'username', 'plain_password')->get();
$users = DB::table('users')->select('name', 'username', 'plain_password as password')->get();
   return $users;
});

Route::get('permohonan', [App\Http\Controllers\PermohonanController::class, 'index'])->name('permohonan.index');
Route::post('permohonan/switch', [App\Http\Controllers\PermohonanController::class, 'switchStatus'])->name('permohonan.status.switch');


Route::get('sect/permohonan_informasi', [App\Http\Controllers\SectController::class, 'permohonan'])->name('sect.permohonan');
Route::post('sect/permohonan/store', [App\Http\Controllers\SectController::class, 'storePermohonan'])->name('permohonan.store');

Route::post('/captcha-validation', [\App\Http\Controllers\CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [\App\Http\Controllers\CaptchaServiceController::class, 'reloadCaptcha'])->name('reload.captcha');

Route::post('image-upload', [App\Http\Controllers\ImageUploadController::class, 'storeImage'])->name('image.upload');

Route::get('/migrate-fresh', function () {
    // Artisan::call('vendor:publish');
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('migrate:fresh', ['--seed' => true]);

    return 'Migration and seeding has been succeed, click <a href="/">here</a> to return to home page';
});

Route::get('/xdown/{view}', function ($view) {
    Artisan::call('down', ['--secret' => 'devmode', '--render' => 'errors.' . $view]);

    return 'Web Down with command view: ' . $view;
});

Route::get('/xup', function () {
    Artisan::call('up');
    return 'Web Up';
});

Route::group(['middleware' => ['web']], function () {
    // your routes here

    Route::get('/visitor', [App\Http\Controllers\Visitor\DashboardController::class, 'index'])->name('visitor.index');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing.index');

    Route::get('/contact', function () {
        return view('landing.v2.contact', [
            'title' => 'Contact - PPID KemenagPessel',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });

    Route::get('/gallery', function () {

        $galleries = \App\Models\Gallery::all();
        $galleries = $galleries->shuffle();

        $filterTags = $galleries->pluck('filter_tag')->unique();
        return view('landing.gallery', [
            'title' => 'Gallery PPID KemenagPessel',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'galleries' =>  $galleries,
            'filterTags' =>  $filterTags,
        ]);
    });

    Route::get('/aboutus', function () {

        return view('landing.aboutus', [
            'title' => 'PPID KemenagPessel - About Us',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });

    Route::get('regulasi', function() {
        return view('landing.v2.regulasi',
        [
            'title' => 'PPID - Regulasi',
        ]);
    });
    

    Route::get('/service/{slug}', function ($slug) {

        $service = \App\Models\Services::where('slug', $slug)->first();
        $products = \App\Models\Products::where('id_service', $service->id_service)->get();

        return view('landing.service-detail', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'service' =>  $service,
            'products' =>  $products
        ]);
    });

    Route::get('/all-services', function () {
        $services = \App\Models\Services::where('listed', 'yes')->get();

        return view('landing.all-services', [
            'title' => 'PPID KemenagPessel - Semua Layanan',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'services' =>  $services
        ]);
    });

    Route::get('/blog', function (Request $request) {

        if ($request->has('search')) {
            $search = $request->input('search');
            $posts = \App\Models\Post::where('title', 'LIKE', "%{$search}%")
                ->orWhere('desc', 'LIKE', "%{$search}%")->orderBy('created_at', 'DESC')->paginate(4);
        } elseif ($request->has('category')) {
            $search = $request->input('category');
            $posts = \App\Models\Post::whereHas('category', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(4);
        } elseif ($request->has('tag')) {
            $search = $request->input('tag');
            $posts = \App\Models\Post::whereHas('tags', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(4);
        }else {
            $posts = \App\Models\Post::orderBy('created_at', 'DESC')->paginate(4);
        }

        $posts->appends(request()->input())->links();


        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();
        $recent_posts = \App\Models\Post::where('is_news', 'yes')->take(3)->get();

        return view('landing.v2.blog', [
            'title' => 'Blog PPID KemenagPessel',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'tags' => $tags
        ]);
    });

    Route::get('/berita', function (Request $request) {

        if ($request->has('search')) {
            $search = $request->input('search');
            $posts = \App\Models\Post::where('is_news', 'yes')->where('title', 'LIKE', "%{$search}%")
                ->orWhere('desc', 'LIKE', "%{$search}%")->orderBy('created_at', 'DESC')->paginate(4);
        } elseif ($request->has('category')) {
            $search = $request->input('category');
            $posts = \App\Models\Post::where('is_news', 'yes')->whereHas('category', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(4);
        } elseif ($request->has('tag')) {
            $search = $request->input('tag');
            $posts = \App\Models\Post::where('is_news', 'yes')->whereHas('tags', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(4);
        }else {
            $posts = \App\Models\Post::where('is_news', 'yes')->orderBy('created_at', 'DESC')->paginate(4);
        }

        $posts->appends(request()->input())->links();


        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();
        $recent_posts = \App\Models\Post::where('is_news', 'yes')->take(3)->get();

        return view('landing.v2.news', [
            'title' => 'Berita PPID KemenagPessel',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'tags' => $tags
        ]);
    });

    Route::get('/aktifitas', function (Request $request) {

        $activities = \App\Models\Activity::orderBy('created_at', 'DESC')->paginate(4);


        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();
        $recent_posts = \App\Models\Post::where('is_news', 'yes')->take(3)->get();

        return view('landing.v2.activities', [
            'title' => 'Aktifitas KemenagPessel',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'activities' => $activities,
            'recent_posts' => $recent_posts,
            'tags' => $tags
        ]);
    });

    Route::get('post/{slug}', function(Request $request, $slug) {
        $post = \App\Models\Post::where('slug', $slug)->first();

        $cookie_name = (\Str::replace('.','',($request->ip())).'-'. $post->id);

        $cookie = \Cookie::get($cookie_name);
        if($cookie == ''){//check if cookie is set
            $cookie = cookie($cookie_name, '1', 60);//set the cookie
            $post->incrementReadCount();//count the view
        } 

        if($post->showPost()){// this will test if the user viwed the post or not
            // return $post;
        } else {
            \App\Models\PostView::createViewLog($post);
        }

        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();
        $recent_posts = \App\Models\Post::where('is_news', 'yes')->take(3)->get();
        return view('landing.v2.post', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'recent_posts' => $recent_posts,
            'tags' => $tags,
            'post' => $post
        ])->withCookie($cookie);//store the cookie;

    });

    Route::get('/lang/home', [App\Http\Controllers\LangController::class, 'index']);
    Route::get('/lang/change', [App\Http\Controllers\LangController::class, 'change'])->name('changeLang');

    Route::post('/messages/store', [\App\Http\Controllers\Visitor\MessageController::class, 'store'])->name('messages.store');;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::get('/information/services', [\App\Http\Controllers\Admin\ServicesController::class, 'index'])->name('services.index');
Route::post('/information/services/store', [\App\Http\Controllers\Admin\ServicesController::class, 'store']);

Route::get('/information/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.index');
Route::post('/information/products/store', [\App\Http\Controllers\Admin\ProductController::class, 'store']);

Route::get('/information/activities', [\App\Http\Controllers\Admin\ActivityController::class, 'index'])->name('activities.index');
Route::post('/information/activities/store', [\App\Http\Controllers\Admin\ActivityController::class, 'store']);
Route::delete('/information/destroy/{id}', [\App\Http\Controllers\Admin\ActivityController::class, 'destroy'])->name('activities.destroy');


Route::get('/information/galleries', [\App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('galleries.index');
Route::post('/information/galleries/store', [\App\Http\Controllers\Admin\GalleryController::class, 'store']);

Route::get('/information/carousels', [\App\Http\Controllers\Admin\CarouselController::class, 'index'])->name('carousels.index');
Route::post('/information/carousels/store', [\App\Http\Controllers\Admin\CarouselController::class, 'store']);

Route::get('/information/testimonies', [\App\Http\Controllers\Admin\TestimonyController::class, 'index'])->name('testimonies.index');
Route::post('/information/testimonies/store', [\App\Http\Controllers\Admin\TestimonyController::class, 'store']);




Route::get('/data/messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.admin.index');

Route::get('/data/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
Route::post('/data/users/store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
Route::delete('/data/users/{id}/destroy', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');

Route::get('/data/roles', [\App\Http\Controllers\Admin\RoleController::class, 'index'])->name('roles.index');
Route::post('/data/roles/store', [\App\Http\Controllers\Admin\RoleController::class, 'store'])->name('roles.store');
Route::delete('/data/roles/{id}/destroy', [\App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('roles.destroy');



Route::resource('/blog/categories', App\Http\Controllers\CategoryController::class);
Route::resource('/blog/tags', App\Http\Controllers\TagController::class);
// Manage Posts
Route::get('/blog/posts/trash', [App\Http\Controllers\PostController::class, 'trash'])->name('posts.trash');
Route::post('/blog/posts/trash/{id}/restore', [App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
Route::delete('blog/posts/{id}/delete-permanent', [App\Http\Controllers\PostController::class, 'deletePermanent'])->name('posts.deletePermanent');
Route::delete('/blog/posts/destroy/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.delete');


Route::resource('/blog/posts', App\Http\Controllers\PostController::class);
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');


Route::get('/blog/news/trash', [App\Http\Controllers\NewsController::class, 'trash'])->name('news.trash');
Route::post('/blog/news/trash/{id}/restore', [App\Http\Controllers\NewsController::class, 'restore'])->name('news.restore');
Route::delete('blog/news/{id}/delete-permanent', [App\Http\Controllers\NewsController::class, 'deletePermanent'])->name('news.deletePermanent');
Route::resource('/blog/news', App\Http\Controllers\NewsController::class);


Route::get('/blog/menus/{id?}',  [\App\Http\Controllers\Admin\MenuController::class, 'index']);	
Route::post('create-menu',  [\App\Http\Controllers\Admin\MenuController::class, 'store']);	
Route::get('add-categories-to-menu',  [\App\Http\Controllers\Admin\MenuController::class, 'addCategory']);	
Route::post('save-menu',  [\App\Http\Controllers\Admin\MenuController::class, 'saveMenu']);	
Route::get('add-posts-to-menu',  [\App\Http\Controllers\Admin\MenuController::class, 'addPost']);	
Route::get('add-custom-link',  [\App\Http\Controllers\Admin\MenuController::class, 'addCustomLink']);
Route::post('update-menuitem/{id}/{k1}/{k2?}/{k3?}',  [\App\Http\Controllers\Admin\MenuController::class, 'updateItem']);	
Route::get('delete-menuitem/{id}/{k1}/{k2?}/{k3?}',  [\App\Http\Controllers\Admin\MenuController::class, 'deleteItem']);	



// Route::resource('reservations', App\Http\Controllers\Admin\ReservationController::class);

Route::get('/reservations/{yearMonth?}', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('reservations.index');
Route::post('/reservations/store', [\App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('reservations.store');
Route::delete('/reservations/destroy/{id_reservation}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::get('/deleted-reservations/{yearMonth?}', [\App\Http\Controllers\Admin\ReservationController::class, 'deleted'])->name('reservations.deleted');
Route::delete('/reservations/restore/{id_reservation}', [\App\Http\Controllers\Admin\ReservationController::class, 'restore'])->name('reservations.restore');


Route::get('/reservation/audits/{id_reservation}', function ($id_reservation) {
    $res = \App\Models\Reservation::where('id_reservation', $id_reservation)->withTrashed()->first();
    $all = $res->audits()->with('user')->get();
    return $all;
});



Route::get('/audits', [\App\Http\Controllers\Admin\AuditController::class, 'index'])->name('audits.index');
Route::get('/audits/fetch/{id_reservation}', [\App\Http\Controllers\Admin\AuditController::class, 'fetch'])->name('audits.fetch');


Route::get('/informasi', [\App\Http\Controllers\Admin\InfoController::class, 'index'])->name('info.index');
Route::post('/informasi/store', [\App\Http\Controllers\Admin\InfoController::class, 'store'])->name('info.store');
Route::delete('/informasi/delete/{id}', [\App\Http\Controllers\Admin\InfoController::class, 'destroy'])->name('info.destroy');


Route::post('/upload-file/upload', [\App\Http\Controllers\UploadFileController::class, 'upload'])->name('file.upload');
Route::delete('/upload-file/destroy/{id}', [\App\Http\Controllers\UploadFileController::class, 'destroy'])->name('file.destroy');

Route::get('/search/{param}', [\App\Http\Controllers\SearchController::class, 'search'])->name('search.param');


Route::post('/data/all', [\App\Http\Controllers\HomeController::class, 'all'])->name('data.all');
Route::get('/info/{sect}', [\App\Http\Controllers\HomeController::class, 'info'])->name('guest.info');


Route::get('/data/detail/{idx}', [\App\Http\Controllers\Landing\PostController::class, 'index'])->name('data.index');
Route::get('/data/download/{idx}', [\App\Http\Controllers\Landing\PostController::class, 'download'])->name('data.download');



Route::put('/kategori/add', [\App\Http\Controllers\MasterController::class, 'addKategori'])->name('kategori.add');
Route::put('/instansi/add', [\App\Http\Controllers\MasterController::class, 'addInstansi'])->name('instansi.add');


Route::get('/subklasifikasi', function () {
    $subklasifikasi = RefDataSubKlasifikasi::all();
    return $subklasifikasi;
});