<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\MessageRequest;
use App\Http\Requests\SubscriberRequest;
use App\Mail\ContactUs;
use Mail; 

use App\ComponentsModel;
use App\ElementsModel;
use App\CardsModel;
use App\CardsElementsModel;
use App\ClientsModel;

use App\Message;
use App\Subscriber;
use App\Visit;
use App\ReceiverEmail;

use App\Page;
use App\Blog;
use App\Social;
use App\Logo;
use App\Seo;
use App\Category;
use App\Contact;


class CoreController extends Controller
{
    //======== Home Page ======== 
    public function index()
    {
        $last_blogs                   = Blog::orderBy('id','desc')->limit(4)->get();

        $page                         = Page::where('name','Home')->first();
        $seo                          = Seo::where('page_token',$page->token)->first();
        $socials                      = Social::all();
        $logo                         = Logo::first();
        
        $data = [
            'page_token'=>$page->token,
            'seo'=>$seo,
            'socials'=>$socials,
            'logo'=>$logo,
        ];

        return view('welcome')->with($data);     
    }


    //======== Single Blog Page ======== 
    public function singleblog($url)
    {
        $blog           = Blog::where('url', $url)->first();
        
        $relateds       = Blog::whereNotIn('id', [$blog->id])->inRandomOrder()->limit(6)->get();

        // get previous 
        $prev           = Blog::where('id', '<', $blog->id)->orderBy('id','desc')->first();

        // get next 
        $next           = Blog::where('id', '>', $blog->id)->orderBy('id')->first();
        
        $seo            = Seo::where('page_token',$blog->token)->first();
        $socials        = Social::all();
        $logo           = Logo::first();
        $contact        = Contact::first();

        return view('blog_single', [
          'blog' => $blog,
          'relateds' => $relateds,
          'prev' => $prev,
          'next' => $next,
          'page_token'=>$blog->token,
          'seo'=>$seo,
          'socials'=>$socials,
          'logo'=>$logo,
          'contact'=>$contact,
        ]);
    }

    //======== Messages ======== 
    public function message(MessageRequest $request)
    {
        $message1 =  Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        $receiver_email     = ReceiverEmail::first();

        $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        ];

        Mail::to($receiver_email->email)->send(new ContactUs($data));

        if($message1)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }


    //======== Subscribe ======== 
    public function subscribe(SubscriberRequest $request)
    {
        $subscribe =  Subscriber::create([
            'subscriber_email' => $request->subscriber_email,
        ]);

        if($subscribe)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }

    //======== Get Visit Data ======== 
    public function visits(Request $request)
    {
        $ip                 = $request->ip;
        $page_token         = $request->page_token;
        
        $visit              = Visit::where('page_token', $page_token)->where('ip', $ip)->first();
        $blog               = Blog::where('token', $page_token)->first();


        if($visit)
        {
            $views = $visit->views + 1;

            $visit->views = $views;

            $visit->save();
        }
        else
        {
            $visit = Visit::create([
                'ip' => $ip,
                'page_token' => $page_token,
                'views' => 1,
            ]);
        }

        if($blog)
        {
            $blog->views = $visit->views;

            $blog->save();
        }

    }

}
