<?php
namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\elementType;

class AjaxController extends Controller{

    public function __construct(){
    //    $this->middleware('auth');
    }

    public function content(Request $request){
        $action = $request->action;
        $data ['action'] = $action;
        $output = [];
        switch ($action) {
            case 'news_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_news.title'] = $title;
                */
                $news = DB::table('tbl_news')
                    ->select('tbl_news.id',
                        'tbl_news.title',
                        'tbl_news.description',
                        'tbl_news.author',
                        'tbl_news.image',
                        'tbl_news.status',
                        'tbl_news.created_at',
                        'tbl_news.updated_at')
                    ->where('title', 'LIKE', '%' . $title . '%')
                //    ->groupBy('tbl_news.id')
                    ->orderBy('tbl_news.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $news->items();
                $data['links'] = $news;
                return view('adminpanel.news.news_list')->with($data);
                break;
            default:
                break;
        }
    }

}
