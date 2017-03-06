<?php
/**
 * Created by IntelliJ IDEA.
 * User: Todor Ivanov
 * Date: 3/3/2017
 * Time: 4:16 PM
 */

namespace App\Http\Controllers;



use App\Entities\Pet;
use App\Entities\Comment;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;


class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $pets['pets'] = Pet::orderBy('id')->whereNull('user_id')->paginate(15);

        return view('list-pets', $pets);
    }

    public function indexMyPets() {
        $pets['pets'] = Pet::orderBy('id')->where('user_id','=',Auth::user()->id)->paginate(15);

        return view('list-mypets', $pets);
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

        $file = $request->file('photo');

        $newFileName = rand();
        $newFileName .= '.'.$file->getClientOriginalExtension();
        $file->move('photos',$newFileName);

        $dbPath = "photos/$newFileName";

        $p->photo = $dbPath;
        $p->save();

        return back()->with('message', 'Successfully Added!');
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

    public function addComments($id, Request $request)
    {
        $c = new Comment();
        $c->message = $request->input('message');
        $c->user_id = Auth::user()->id;
        $c->pet_id = $id;

        $c->save();

        return back()->with('message', 'Successfully Added Comment!');
    }

    public function details($id)
    {
        $pet = Pet::find($id);

        if($pet == null)
        {
            return redirect(404);
        }

        $comments['comments'] = Comment::orderBy('id')->where('pet_id', '=', $id)->paginate(15);

        return view('details', ['pet' => $pet])->with($comments);
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
            $pet->photo = $dbPath;
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
        File::delete($pet->photo);
        $pet->delete();

        return back()->with('message','successfully deleted!');
    }
    public function buy($id){

        $pet = Pet::find($id);

        $pet->user_id = Auth::user()->id;

        $pet->save();

        return back()->with('message','successfully bought!');
    }

    public function filterPets(Request $request) {
        $filter = $request->input('filter-pets');

        $pets['pets'] = $filter == 'all' ? Pet::orderBy('id')->paginate(15) : Pet::orderBy('id')->where('type','=',$filter)->paginate(15);

        return view('list-pets', $pets);
    }
}