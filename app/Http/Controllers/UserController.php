<?php
/**
 * Created by IntelliJ IDEA.
 * User: Todor Ivanov
 * Date: 3/3/2017
 * Time: 4:14 PM
 */

namespace App\Http\Controllers;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

    public function add()
    {
        return view('addUser');
    }

    public function edit()
    {
        return view('editUser');
    }

    public function delete()
    {
        return view('deleteUser');
    }
}