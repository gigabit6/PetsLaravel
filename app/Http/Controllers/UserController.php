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
        return view('add-user');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->isAdmin = $request->input('isAdmin');

        $user->save();

        return back()->with('message','successfully added!');
    }

    public function edit($id)
    {
        $user = User::find($id);

        if($user == null)
        {
            return redirect(404);
        }

        return view('edit-user',['user'=>$user]);
    }

    public function details($id)
    {
        $user = User::find($id);

        if($user == null)
        {
            return redirect(404);
        }

        return view('details',['user'=>$user]);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        if($user == null)
        {
            return redirect(404);
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->isAdmin = $request->input('isAdmin');

        $user->save();

        return back()->with('message','successfully edited!');
    }

    public function delete($id)
    {
        $user = User::find($id);

        if($user == null)
        {
            return redirect(404);
        }

        $user->delete();

        return back()->with('message','successfully deleted!');
    }
}