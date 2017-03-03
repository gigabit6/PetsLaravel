<?php
/**
 * Created by IntelliJ IDEA.
 * User: Todor Ivanov
 * Date: 3/3/2017
 * Time: 4:16 PM
 */

namespace App\Http\Controllers;



use App\Entities\Pet;
use Illuminate\Http\Request;
use File;


class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $pets['pets'] = Pet::paginate(10);
        return view('list-pets', $pets);
    }

    public function add()
    {
        return view('add-pet');
    }

    public function store(Request $request)
    {
        $p = new Pet();
        $p->name = $request->input('name');
        $p->type = $request->input('type');
        $p->user_id = $request->input('user_id');

        $file = $request->file('photo');

        $newFileName = rand();
        $newFileName .= '.'.$file->getClientOriginalExtension();
        $file->move('photos',$newFileName);

        $dbPath = "photos/$newFileName";

        $p->photo = $dbPath;
        $p->save();

        return back()->with('message','successfully added!');
    }

    public function edit($id)
    {
        $pet = Pet::find($id);

        if($pet == null)
        {
            return redirect(404);
        }

        return view('edit-pet',['pet'=>$pet]);
    }

    public function details($id)
    {
        $pet = Pet::find($id);

        if($pet == null)
        {
            return redirect(404);
        }

        return view('details',['pet'=>$pet]);
    }

    public function update($id, Request $request)
    {
        $pet = Pet::find($id);

        if($pet == null)
        {
            return redirect(404);
        }

        $pet->name = $request->input('name');
        $pet->type = $request->input('type');

        $file = $request->file('photo');

        if($file)
        {
            File::delete($pet->imagePath);
            $newFileName = rand();
            $newFileName .= '.'.$file->getClientOriginalExtension();
            $file->move('photos',$newFileName);
            $dbPath = "photos/$newFileName";
            $pet->imagePath = $dbPath;
        }

        $pet->save();

        return back()->with('message','successfully edited!');
    }

    public function delete($id)
    {
        $pet = Pet::find($id);

        if($pet == null)
        {
            return redirect(404);
        }

        $pet->delete();

        return back()->with('message','successfully deleted!');
    }
}