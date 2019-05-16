<?php

# dashboard
Route::get('/', 'PlanController@dashboard');


# add plans
Route::get('/create', 'PlanController@create');
Route::post('/plans', 'PlanController@store');


Route::get('/plans', 'PlanController@index');
Route::get('/plans/week', 'PlanController@week');
Route::get('/plans/active', 'PlanController@active');
Route::get('/plans/closed', 'PlanController@closed');

Route::get('/plans/{id}', 'PlanController@show');
Route::get('plans/{id}/edit', 'PlanController@edit');

# close a plan
Route::get('/plans/{id}/complete', 'PlanController@complete');

# Process edit for plan
Route::put('/plans/{id}', 'PlanController@update');

#logout
Route::get('/logout', 'PlanController@logout');

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
