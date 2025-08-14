## Before using get,post,put,delete,any method we need to define a package above all
use Illuminate\Support\Facades\Route;

## which we can see in home route then it will keep return statement of get method
    Route::get('/', function () {
        // return view('welcome');
        return "hello world";
    });

## When defining multiple routes that share the same URI, routes using the get, post, put, patch, delete, and options methods should be defined before routes using the any, match, and redirect methods. This ensures the incoming request is matched with the correct route.
    Route::match(['get', 'post'], '/', function () {
        // ...
    });

    Route::any('/', function () {
        // ...
    });

## we can want to capture one or more elements or values from url then we use this type of function
Route:: get('/products/{Name}/prices/{price}',function(string Name, string price){
    // bring our necessary code here
})
## i also receive user request from url
Route:: get('/products/{Name}/prices/{price}',function(Request $request,string Name, string price){
    // bring our necessary code here
})

## if user don't provide any id then it will be 15 otherwise id value will be user provided inpuut
Route::get('/user/{id?}', function (?int $id = 15) {
    return $id;
});

## we can give condition for routing which types of value it may contain
Route::get('/user/{name}/{id}',function(string $name, string $id){
    return 'name:'.$name.' id:'.$id;
}) -> where([ 'name' => '[A-za-z]+', 'id'=> '[0-9]+']);
## another way: we can give condition for routing which types of value it may contain
Route::get('/user/{user_name}/{id}/{name}',function(string $user_name, string $id, string $name){
    return $user_name;
})-> whereAlphaNumeric('user_name') -> whereNumber('id') -> whereAlpha('name');

## Middleware
Middle is a process of determining valid user request, if it is valid user request then he can enter the application otherwise it will go to the home page url.
To create middle ware use: php artisan make:middleware EnsureTokenIsVlid

<?php
// it indicate thats the middleware file belongs to App->Http folder
namespace App\Http\Middleware;

// closure allow, for passing to the next middleware
use Closure;

// receive http request and handle it
use Illuminate\Http\Request;

// generate http respone and handle it
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    // middle ware main function here
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('token') !== 'my-secret-token') {
            return redirect('home');
        }

        return $next($request);
    }
}

## Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.Without CSRF protection, a malicious website could create an HTML form that points to your application's /user/email route and submits the malicious user's own email address. If the malicious website automatically submits the form when the page is loaded, the malicious user only needs to lure an unsuspecting user of your application to visit their website and their email address will be changed in your application.
-Laravel automatically generates a CSRF token is used to verify that the authenticated user is the person actually making the requests to the application. Since this token is stored in the user's session and changes each time the session is regenerated, a malicious application is unable to access it.

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});

## A UserController class might handle all incoming requests related to users, including showing, creating, updating, and deleting users. By default, controllers are stored in the app/Http/Controllers directory.
- create a new controller
// here UserController is the name of the controller file
php artisan make:controller UserController