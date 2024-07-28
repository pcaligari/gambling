<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use stdClass;

class InvitesController extends Controller
{
    public function index(): View
    {
        $foo = new stdClass();
        $foo->affiliate_id = null;
        $foo->name = 'Yosef Giles';
        $foo->latitude = null;
        $foo->longitude = null;
        $bar[] = $foo;
        return view('invites', [
            'affiliateList' => $bar
        ]);
    }
}
