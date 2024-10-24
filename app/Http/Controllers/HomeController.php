<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Interview;
use App\Models\Job_Category;
use App\Models\Job_Circular;
use App\Models\Member;
use App\Models\Notice;
use App\Models\OverseasGallery;
use App\Models\PlacementGallery;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index method
    public function index(){
        $latestCourse= Course::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        $about = About::all();
        $manegment= Member::get()->take(6);
        $event= Event::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $overses_gallery= OverseasGallery::all();
        $testimonial= Testimonial::all();
        $setting= Setting::all();

        return view('frontend.pages.index',compact('latestCourse','manegment','event','overses_gallery','latestservice','course','about','testimonial','latest_notice','setting','gallery','latest_interview'));
    }


    //placement_cell
    public function placement_cell(){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        $about_placement = About::all();
        $placement= PlacementGallery::orderBy('id','DESC')->paginate(12);
        $overses_gallery= OverseasGallery::all();
        $testimonial= Testimonial::all();

        return view('frontend.pages.placement_cell' ,compact('placement','overses_gallery','latestservice','course','about_placement','testimonial','latest_notice','gallery','latest_interview'));
    }

   

    //teachers
    public function teachers(){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $members = Member::where('status','1')->paginate(15);
        $gallery = Gallery::get()->take(6);

        return view('frontend.pages.member',compact('members','latestservice','course','latest_notice','gallery','latest_interview'));
    }

    //students
    public function students(){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);

        return view('frontend.pages.students',compact('latestservice','course','latest_notice','gallery','latest_interview'));
    }

    //gallery
    public function gallery(){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::orderBy('id','DESC')->paginate(18);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.gallery',compact('gallery','latestservice','course','latest_notice','gallery','latest_interview'));
    }

    //event
    public function event(){
        $event= Event::orderBy('created_at','DESC')->paginate(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.event',compact('event','course','latestservice','latest_notice','gallery','latest_interview'));
    }

    //service_details
    public function service_details($id){
        $service = Service::findOrFail($id);

        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.service_details',compact('course','latestservice','service','latest_notice','gallery','latest_interview'));
    }

     //job
     public function job(Request $request){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);

        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $job_categories= Job_Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        if($request->category){
            $job = Job_Circular::where('category', $request->category)->paginate(15)->withQueryString();
        }else{
            $job = Job_Circular::orderBy('created_at','DESC')->paginate(15);
        }

        return view('frontend.pages.job',compact('job','job_categories','latestservice','course','latest_notice','gallery','latest_interview'));
    }


    //course_category_details
    public function course_category_details($id){
        $courseCat = Category::findOrFail($id);

        $data = Course::where('status','1');
        $data = $data->where('category', $courseCat->name)->get()->take(4);

        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.course_category_details',compact('course','latestservice','courseCat','data','latest_notice','gallery','latest_interview'));
    }

    //Notice
    public function notice(){
        $notice = Notice::orderBy('created_at','DESC')->paginate(20);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);

        return view('frontend.pages.notice',compact('course','latestservice','notice','gallery','latest_interview'));
    }

    //Notice
    public function interview(){
        $interview = Interview::orderBy('created_at','DESC')->paginate(20);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);

        return view('frontend.pages.interview',compact('course','latestservice','interview','gallery','latest_interview'));
    }

    //all_course
    public function all_course(){
        $allcourses = Course::where('status','1')->paginate(9);
        $gallery = Gallery::get()->take(6);
        
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);

        return view('frontend.pages.all_course',compact('course','latestservice','allcourses','latest_notice','gallery','latest_interview'));
    }

    public function course_details($id){
        $data = Course::findOrFail($id);
        $gallery = Gallery::get()->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.course_details',compact('course','latestservice','data','latest_notice','gallery','latest_interview'));
    }

    //contact
    public function contact(){
        $gallery = Gallery::get()->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.contact',compact('course','latestservice','latest_notice','gallery','latest_interview'));
    }

    //about_us
    public function about_us(){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $about = About::all();
        $manegment= Member::get()->take(6);
        $overses_gallery= OverseasGallery::all();
        $testimonial= Testimonial::all();

        return view('frontend.pages.about',compact('course','latestservice','about','manegment','overses_gallery','latest_notice','testimonial','gallery','latest_interview'));
    }

    //mission
    public function mission(){
        $latestservice = Service::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $gallery = Gallery::get()->take(6);
        
        $course= Category::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $latest_notice= Notice::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        $about = About::all();
        $latest_interview= Interview::orderBy('created_at','DESC')
        ->get()
        ->take(6);
        return view('frontend.pages.mission',compact('course','latestservice','about','latest_notice','gallery','latest_interview'));
    }

}
