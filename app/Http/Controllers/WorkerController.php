<?php

namespace App\Http\Controllers;

use App\Http\Requests\Workers\StoreRequest;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index(){
        $workers = Worker::paginate(2);
        return view('workers.index', compact('workers'));
    }

    public function create(){
        return view('workers.create');
    }

    public function store(StoreRequest $request){
        $worker = $request->validated();
        $worker['is_married'] = isset($worker['is_married']);
        Worker::create($worker);
        return redirect()->route('workers.index');
    }
}
