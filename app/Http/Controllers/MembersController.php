<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;


class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $members = DB::table('members')->paginate(5);
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('members.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector|string
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'address'=>'required',
            'membership_type'=>'required',
            'user_category'=>'required',
            'membership_status'=>'required',
            'national_id'=>'required',
            'city'=>'required',
            'qualification'=>'required',
            'job'=>'required',
            'social_status'=>'required',
            'nationality'=>'required',
            'birthday'=>'required',
            'place_of_birth'=>'required',
            'gender'=>'required',
            'religion'=>'required',

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function show($id)
    {
        $members = Member::findOrFail($id);
        return view('members.show', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy($id)
    {
        $members = Member::findOrFail($id);
        $members->delete();

        return redirect('/dashboard/members')->with('delete', 'Member deleted!');
    }
}
