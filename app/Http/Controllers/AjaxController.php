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
            case 'event_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_event.title'] = $title;
                */
                $news = DB::table('tbl_event')
                    ->select('tbl_event.id',
                        'tbl_event.author',
                        'tbl_event.title',
                        'tbl_event.description',
                        'tbl_event.image',
                        'tbl_event.location',
                        'tbl_event.date',
                        'tbl_event.status',
                        'tbl_event.created_at',
                        'tbl_event.updated_at')
                    ->where('title', 'LIKE', '%' . $title . '%')
                //    ->groupBy('tbl_event.id')
                    ->orderBy('tbl_event.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $news->items();
                $data['links'] = $news;
                return view('adminpanel.event.event_list')->with($data);
                break;
            case 'team_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_event.title'] = $title;
                */
                $team = DB::table('tbl_team')
                    ->select('tbl_team.id',
                        'tbl_team.name',
                        'tbl_team.designation',
                        'tbl_team.image',
                        'tbl_team.department',
                        'tbl_team.description',
                        'tbl_team.status',
                        'tbl_team.created_at',
                        'tbl_team.updated_at')
                    ->where('name', 'LIKE', '%' . $title . '%')
                //    ->groupBy('tbl_team.id')
                    ->orderBy('tbl_team.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $team->items();
                $data['links'] = $team;
                return view('adminpanel.team.team_list')->with($data);
                break;
            case 'contact_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_event.title'] = $title;
                */
                $contact = DB::table('tbl_contact')
                    ->select('tbl_contact.id',
                        'tbl_contact.firstname',
                        'tbl_contact.lastname',
                        'tbl_contact.email',
                        'tbl_contact.phonenumber',
                        'tbl_contact.message',
                        'tbl_contact.status',
                        'tbl_contact.created_at',
                        'tbl_contact.updated_at')
                    ->where('firstname', 'LIKE', '%' . $title . '%')
                //    ->groupBy('tbl_contact.id')
                    ->orderBy('tbl_contact.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $contact->items();
                $data['links'] = $contact;
                return view('adminpanel.contact.contact_list')->with($data);
                break;
            case 'publication_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_publication.title'] = $title;
                */
                $publication = DB::table('tbl_publication')
                    ->select('tbl_publication.id',
                        'tbl_publication.title',
                        'tbl_publication.description',
                        'tbl_publication.author',
                        'tbl_publication.document',
                        'tbl_publication.status',
                        'tbl_publication.created_at',
                        'tbl_publication.updated_at')
                    ->where('title', 'LIKE', '%' . $title . '%')
                    //    ->groupBy('tbl_publication.id')
                    ->orderBy('tbl_publication.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $publication->items();
                $data['links'] = $publication;
                return view('adminpanel.publication.publication_list')->with($data);
                break;
            case 'training_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_training.title'] = $title;
                */
                $training = DB::table('tbl_training')
                    ->select('tbl_training.id',
                        'tbl_training.title',
                        'tbl_training.description',
                        'tbl_training.author',
                        'tbl_training.document',
                        'tbl_training.status',
                        'tbl_training.created_at',
                        'tbl_training.updated_at')
                    ->where('title', 'LIKE', '%' . $title . '%')
                //    ->groupBy('tbl_training.id')
                    ->orderBy('tbl_training.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $training->items();
                $data['links'] = $training;
                return view('adminpanel.training.training_list')->with($data);
                break;
            case 'gallery_content':
                $where = array();
                $title = $request->title != '' ? $request->title : '';
                $per_page = $request->select_limit != '' ? $request->select_limit : 10;
                /*
                    if (!empty($title))
                        $where['tbl_gallery.title'] = $title;
                */
                $gallery = DB::table('tbl_gallery')
                    ->select('tbl_gallery.id',
                        'tbl_gallery.title',
                        'tbl_gallery.description',
                        'tbl_gallery.author',
                        'tbl_gallery.image',
                        'tbl_gallery.status',
                        'tbl_gallery.created_at',
                        'tbl_gallery.updated_at')
                //    ->where('title', 'LIKE', '%' . $title . '%')
                //    ->groupBy('tbl_gallery.id')
                    ->orderBy('tbl_gallery.id', 'DESC')
                    ->paginate($per_page);

                $data['result'] = $gallery->items();
                $data['links'] = $gallery;
                return view('adminpanel.gallery.gallery_list')->with($data);
                break;
            default:
                break;
        }
    }

}
