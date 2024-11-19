<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request; // Make sure you're using the correct class
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {

        if ($request->method() !== 'GET') {
            return $next($request);
        }
        // Check if the 'locale' query parameter exists
        if ($locale = $request->query('locale')) {
            // If the locale is supported, set it
            if (in_array($locale, ['en', 'ua', 'ru'])) {
                app()->setLocale($locale);
                session(['locale' => $locale]);  // Optionally store the locale in the session
            }
        }

        if (!$request->query('locale')) {
            // Get the `locale` query from the referrer if it exists
            $referrer = $request->headers->get('referer');
            if ($referrer) {
                $parsedUrl = parse_url($referrer);
                parse_str($parsedUrl['query'] ?? '', $queryParams);

                if (isset($queryParams['locale'])) {
                    // Append the `locale` parameter to the current URL and redirect
                    return redirect()->to($request->fullUrlWithQuery(['locale' => $queryParams['locale']]));
                }
            }
        }
        
        return $next($request);
    }
}

