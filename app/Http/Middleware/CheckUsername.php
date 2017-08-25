<?php

namespace App\Http\Middleware;

use Closure;

class CheckUsername
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
        $server = explode('.', Request::server('HTTP_HOST'));

        if (count($server) == 3)
        {
            echo 'Username';exit;
            // We have 3 parts of the domain - therefore a subdomain was requested
            // i.e.  user.domain.com

            // Check if user is valid and has access - i.e. is logged in
            if (Auth::user()->username === $server[0])
            {
                // User is logged in, and has access to this subdomain

                // DO WHATEVER YOU WANT HERE WITH THE USER PROFILE
                echo "your username is ".$server[0];
            }
            else
            {
                // Username is invalid, or user does not have access to this subdomain
                // SHOW ERROR OR WHATEVER YOU WANT
                echo "error - you do not have access to here";
            }

        }
        else
        {
            echo 'else part';exit;

            // Only 2 parts of domain was requested - therefore no subdomain was requested
            // i.e. domain.com

            // Do nothing here - will just route normally - but you could put logic here if you want
        }
        return $next($request);
    }
}
