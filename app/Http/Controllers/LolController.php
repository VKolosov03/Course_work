<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Models\ConnectModel;
use App\Models\CommentModel;
use App\Models\PageModel;
use App\Models\PositionModel;

class LolController extends Controller
{
    public function getLocale(Request $request, $language) {
        session(['locale' => $language]);
        App::setLocale($language);
        return redirect(substr(url()->previous(), 22));
    }

    public function getWelcome() {return view('welcome', ['lang' => Config::get('app.locale')]);}

    public function getList(Request $request) {
        $page=new PageModel();
        $position=new PositionModel();
        $string="";
        for($i=0; $i<count($page->where('position', substr($request->getRequestUri(), 1))->get()); $i++) {
            $string=$string.$page->where('position', substr($request->getRequestUri(), 1))->get()[$i]->name."#";
            $title=$page->where('position', substr($request->getRequestUri(), 1))->get()[$i]->title;
            if(Config::get('app.locale')=='fr') $title=$page->where('position', substr($request->getRequestUri(), 1))->get()[$i]->title_fr;
            $string=$string.$title.";";
        }
        return view('spin', ['string' => $string, 'info' => $position->where('position_name', substr($request->getRequestUri(), 1))->first(), 'lang' => Config::get('app.locale'), 'request' => substr(url()->current(), 0, strrpos(url()->current(), '/'))]);
    }

    public function getSearch(Request $request) {
        $page=new PageModel();
        if($request->getRequestUri()==='/result'){
            if(strlen($request->input('result'))===0) return redirect('/search');
            $title='title';
            if(Config::get('app.locale')==='fr') $title=$title.'_fr';
            return view('search', ['result' => $page->where($title, 'LIKE', "%".$request->input('result')."%")->orderBy($title)->get(), 'searchword' => $request->input('result'), 'lang' => Config::get('app.locale')]);
        }
        return view('search', ['result' => 0, 'lang' => Config::get('app.locale')]);
    }

    public function getNews(Request $request) {
        $page=new PageModel();
        $position=new PositionModel();
        return view('news', ['page' => $page->where('position', substr($request->getRequestUri(), 1))->orderBy('page_id', 'DESC')->limit(3)->get(), 'info' => $position->where('position_name', substr($request->getRequestUri(), 1))->first(), 'lang' => Config::get('app.locale')]);
    }

    public function getGuide(Request $request) {
        $reply=new ConnectModel();
        $page=new PageModel();
        return view('guides', ['reply' => $reply->join('coment', 'connected.commentid', '=', 'coment.comment_id')->where('pagename', substr($request->getRequestUri(), 1))->orderBy('commentid', 'DESC')->get(), 'guide' => $page->where('name', substr($request->getRequestUri(), 1))->first(), 'lang' => Config::get('app.locale')]);
    }

    public function getUs() {return view('us', ['lang' => Config::get('app.locale')]);}

    public function setReply(Request $request) {
        date_default_timezone_set('Europe/Kiev');
        $comment=new CommentModel();
        $reply=new ConnectModel();
        $comment->context=$request->input('comment');
        $comment->comment_date=date('Y-m-d H:i:s');
        $comment->save();
        $reply->pagename=substr($request->getRequestUri(), 1,-6);
        $reply->commentid=$comment->all()->max('comment_id');
        $reply->save();
        return redirect(substr($request->getRequestUri(), 0,-6));
    }
}
