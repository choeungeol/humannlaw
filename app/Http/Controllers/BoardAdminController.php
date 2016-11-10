<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BoardAdminController extends \Visualplus\Board\AdminController
{
    protected $model = '\App\BoardConfig';
}
