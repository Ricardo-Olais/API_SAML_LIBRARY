<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use SimpleXMLElement;
use DOMDocument;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

       
        if(isset($_POST['SAMLResponse']) && $_POST['SAMLResponse']!=""){

         $string=base64_decode($_POST['SAMLResponse']);
         $dom = new DOMDocument;
         $dom->loadXML($string);
         $extrae=explode("==",$dom->textContent);
         $extrae2=explode("http",$extrae[4]);
         $usuario=$extrae2[0];

         if(isset($usuario)){
 
            $request->merge(['email' => $usuario]);
            $request->merge(['password' => "123456789"]);

         }

        }

       
     
        if (Auth::guard($guard)->check()) {

            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }