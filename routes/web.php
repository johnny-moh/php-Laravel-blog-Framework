<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

include 'datafiles/data.php';




Route::get('/', function () {
    return view('index', ['title' => 'Welcome to my home page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Programming and How to code']);
});
Route::view('/add', 'about', ['title' => 'Add New Project ']);


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});


Route::delete('/delete{color}', function (string $color) {
    $projects = session('projects');
    $project = null;
    for($i=0; $i<count($projects); $i++){
        if($projects[$i] == $color){
            array_splice($projects,$i,1);

        }
    }
    
    

    return view('edit', ['title' => 'Update Project', 'project' => $project]);


});

Route::get('/edit{color}', function (string $color) {
    $projects = session('projects');
    $project = null;

    foreach ($projects as $p) {
        if ($p->id == $color) {
            $project = $p;
            break;
        }
    }

    return view('edit', ['title' => 'Update Project', 'project' => $project]);


});


Route::post('/edit/{id}', function (Request $request, string $color) {

    $data = $request->validate(
        [
            'name' => 'required',
            'lastname' => 'required',
        ]

    );

    $projects = session('projects');
    foreach($projects as $project){
        if($project->id == $color){
            $project->name = $data['name'];
            $project->lastname = $data['lastname'];

        }
    }


    session(['projects' => $projects]);

    return redirect('/portfoilio');
});


Route::post('/add', function (Request $request) {

    $data = $request->validate(
        [
            'name' => 'required',
            'lastname' => 'required',
        ]

    );

    $projects = session('projects');
    $projects[] = new Project($data['color'], $data['category'], $data['type'], $data['code']);

    return redirect('/portfoilio');
});




Route::post('/contact', function (Request $request) {

    $data = $request->validate(
        [
            'name' => 'required',
            'lastname' => 'required',
        ]

    );


    $name = $request->fname;

    session(['user' => $name]);

    return view('thank you', ['title' => 'Thank you!', 'name' => $name]);
});


Route::get('/c', function () {
    Session::flush();
    return redirect('/');
});


//passing data from data.php to the portfolio now
Route::get('/portfolio', function () use ($projects) {
    if (session('projects')) {
        $projects = session('projects');
    }
    return view('portfolio', ['title' => 'Welcome to the portfolio page, see some samples of Our works', 'projects' => $projects]);
});

Route::fallback(function () {
    return view('404', ['title' => 'Not Found']);
});