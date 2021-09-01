<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Subscribe;
use App\Models\User;
use App\Http\Controllers\Controller;
use Response;
use App\Mail\PostCreated;
use Illuminate\Support\Facades\Mail;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websites = Website::all();
        return response()->json($websites);

    }
    /**
     * creating subscriber.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request, Website $website, User $user)
    {
        if($website->subscribers->find($user)){
            $responseArr['message'] = 'This user is already subscribed';
            return response()->json($responseArr, 400);
        }
        $website->subscribers()->attach($user);
        return response()->json($website);
    }
    /**
     * Creating Post
     *
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request, Website $website)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();;
            return response()->json($responseArr, 400);
        }
        $post = $website->posts()->create(['title' => $request->title, 'content'=> $request->content]);
        
        //sending mails to all website subscribers
        $subscribers = $website->subscribers;
        foreach($subscribers  as $subscriber){
            Mail::to($subscriber)
                ->queue(new PostCreated($post));
        } // Concept of queuing the mail
        
        return response()->json($website);
    }

}
