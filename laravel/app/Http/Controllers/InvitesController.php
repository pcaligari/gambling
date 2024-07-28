<?php

namespace App\Http\Controllers;

use App\Services\InvitesService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use stdClass;

class InvitesController extends Controller
{
    public function index(InvitesService $service): View
    {
        return view('invites', [
            'affiliateList' => $service->getInvites()
        ]);
    }
}
