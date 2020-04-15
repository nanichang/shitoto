<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Dashboard\DashboardContract;
use Sentinel;
use App\Link;
use DB;
use App\User;

class DashboardController extends Controller
{
    protected $repo;
    public function __construct(DashboardContract $dashboardContract) {
        $this->repo = $dashboardContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }else {
            $user = Sentinel::getUser();
            $links = Link::orderBy('id', 'desc')->get();

            $shared = DB::table('shared_users')->where('user_id', $user->id)->get();
            // dd($links);
            return view('dashboard.index')->with('user', $user)->with('links', $links)->with('shared', $shared);
        }
    }

    public function shared(Request $request, $id) {
        // dd($id);
        // $link = Link::where('id', $id)->first();
        $user = Sentinel::getUser();

        $shared = DB::table('shared_users')->insert(
            ['user_id' => $user->id, 'link_id' => $id]
        );

        $user->increment('shared_points', 510);
        $user->increment('shared_count');
        $user->save();

        return redirect()->back();
    }


    public function admin() {
        $users = User::orderBy('id', 'desc')->get();
        // dd($users);
        return view('dashboard.admin')->with('users', $users);
    }

    public function reward($id){
        // dd($id);
        $user = Sentinel::getUser();
        $user->claimed = true;
        $user->rewarded = true;
        $user->shared_points = 0;
        $user->shared_count = 0;
        $user->save();
        return redirect()->back();
    }
    
}
