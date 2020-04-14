<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Links\LinksContract;
class LinksController extends Controller
{
    protected $repo;
    public function __construct(LinksContract $linksContract) {
        $this->repo = $linksContract;
    }
    
    public function index()
    {
        $links = $this->repo->findAll();
        return view('links.index')->with('links', $links);
    }
    
    public function create()
    {
        return view('links.create');
    }
    
    public function store(Request $request)
    {

        try {
            $link = $this->repo->create($request);

            $notification = array(
                'message' => "Link created successfully",
                'alert-type' => 'success'
            );      

            if($link->id) {
                return redirect()->route('admin.links.index')->with($notification);
            } else {
                return back()->withInput()->with('error', 'Could not create Link. Try again!');
            }
        } catch (QueryException $e) {
            
            $error = array(
                'message' => "Link already exists!",
                'alert-type' => 'error'
            );

            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return redirect()->back()->withInput()->with($error);
            }
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
    }
}
