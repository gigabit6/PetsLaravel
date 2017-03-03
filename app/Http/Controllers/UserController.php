<?php
/**
 * Created by IntelliJ IDEA.
 * User: Todor Ivanov
 * Date: 3/3/2017
 * Time: 4:14 PM
 */

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $viewModel['users']=User::paginate(15);
        return view('index', $viewModel);
    }

    public function add()
    {
        return view('addUser');
    }

    public function edit($id)
    {
        return view('editUser');
    }

    public function delete($id)
    {
        redirect('index');
    }

    public function store($id) {

    }
}