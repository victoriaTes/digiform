<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $roleSP Name of the stored procedure parameter for role identification
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $roleSP = 'sp_role')
    {
        $username = auth()->user()->username;
        $requiredRole = $this->getRequiredRole($request); // Delegate role retrieval

        $result = DB::select("CALL {$roleSP}(?)", [$requiredRole]);

        $authorized = false;
        foreach ($result as $row) {
            if ($row->username === $username) {
                $authorized = true;
                break;
            }
        }

        if (!$authorized) {
            abort(403);
        }

        return $next($request);
    }

    /**
     * Retrieve the required role from the request (can be customized)
     *
     * @param Request $request
     * @return string
     */
    protected function getRequiredRole(Request $request): string
    {
        // Extract role information from request (e.g., route prefix, query parameter)
        $prefix = $request->route()->getPrefix();

        switch ($prefix) {
            case 'cs':
                return '1';
            case 'kaops':
                return '2';
            case 'acs':
                return '3';
            case 'role':
                return '4';
            case 'jabatan':
                return '5';
            case 'log':
                return '6';
            default:
                return abort(403); // Handle unexpected prefix with unauthorized access
        }
    }
}