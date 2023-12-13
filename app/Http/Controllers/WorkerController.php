<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(){
        $workers = Worker::paginate(2);
        return view('workers.index', compact('workers'));
    }
}
