<?php
/**
 * Created by IntelliJ IDEA.
 * User: Todor Ivanov
 * Date: 3/3/2017
 * Time: 4:16 PM
 */

namespace App\Http\Controllers;


class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('index');
    }

    public function add()
    {
        return view('addPet');
    }

    public function edit()
    {
        return view('editPet');
    }

    public function delete()
    {
        return view('deletePet');
    }
}