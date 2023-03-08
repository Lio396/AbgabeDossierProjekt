<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //get all of the Database orderd Descaled
    public function index()
    {
        return Users::orderBy('user_name','DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     *P
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newItem = new Users;
        $newItem->user_name = $request->users["user_name"];
        $newItem->user_email = $request->users["user_email"];
        $newItem->user_pw = $request->users["user_pw"];
        $newItem->save();
        return $newItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingItem = Item::find($id);

        if($existingItem){
            $existingItem->completed = $request->item['completed'] ? /*if */ true /*if true */ : false /*if false*/;    
            $existingItem->completed_at = $request->item['completed'] ? Carbon::now() : null;    
            $existingItem->save();
            return $existingItem;
        }
        return "Item not found.";
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $existingItem = Item::fing( $id);
       if($existingItem){
        $existingItem-> delete();
        return "item deleted";
       }
        return "item not found";
    }
}
?>