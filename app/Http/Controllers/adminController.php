<?php   
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        return View('admin.layout');
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show(User $user)
    {
        //
    }

    public function edit(Request $request, User $user)
    {

    }

    public function update(Request $request, User $user)
    {

    }

    public function destroy(Request $request, User $user)
    {
    }
}