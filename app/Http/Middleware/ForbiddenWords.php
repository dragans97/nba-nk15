<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $forbiddenWords = ['hate', 'idiot', 'stupid'];
        
        foreach($forbiddenWords as $forbiddenWord) { 
            if(stripos($request->content,  $forbiddenWord) > -1){
                return response()->view('forbidden-comment');
            }
        }

        return $next($request);
    }
}
