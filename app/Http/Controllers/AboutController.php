<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutUs;
use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    //About
    public function view_about(){
        $about = About::find(1);
        return view('admin.partials.about.view_about',compact('about'));
    }
    public function saveAbout(Request $request){
        $about = About::where('id','1')->first();
        if($about){
            $about->about_desc =$request->about_desc;
            $about->mission =$request->mission;
            $about->vission =$request->vission;
            $about->job_placement =$request->job_placement;

            if($request->hasFile('image')){
                $destination = 'about/'.$about->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $takeimage =$request->file('image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                $img->toJpeg(80)->save(public_path('about/'.$name_gen));
    
                $about->image = $name_gen;
            }
            $about->save();

        return redirect()->back();
        }else{
            $about = new About;
            $about->about_desc =$request->about_desc;
            $about->mission =$request->mission;
            $about->vission =$request->vission;
            $about->job_placement =$request->job_placement;

            if($request->hasFile('image')){
                $takeimage =$request->file('image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                $img->toJpeg(80)->save(public_path('about/'.$name_gen));
    
                $about->image = $name_gen;
            }
            $about->save();

        return redirect()->back()->with('message', 'About Added Successfully');;
        }

        
    }



    //Menegment
    public function view_member(){
        $member = Member::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.about.view_member',compact('member'));
    }

    public function add_member(){
        return view('admin.partials.about.add_member');
    }

    public function upload_member(Request $request){
        $data=new Member;
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->education = $request->education;
        $data->department = $request->department;
        $data->fb_url = $request->fb_url;
        $data->gm_url = $request->gm_url;
        $data->in_url = $request->in_url;
        $data->add_menegment = $request->add_menegment;
        $data->status = $request->status;

        if($request->hasFile('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(358, 358);
            $img->toJpeg(80)->save(public_path('memberimage/'.$name_gen));

            $data->image = $name_gen;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Member Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_member')->with($notification); 
    }

    public function edit_member($id){
        $member = Member::findOrfail($id);
        return view('admin.partials.about.edit_member',compact('member'));
    }

    public function update_member(Request $request,$id){
        $data=Member::findOrfail($id);
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->education = $request->education;
        $data->department = $request->department;
        $data->fb_url = $request->fb_url;
        $data->gm_url = $request->gm_url;
        $data->in_url = $request->in_url;
        $data->add_menegment = $request->add_menegment;
        $data->status = $request->status;

        if($request->hasFile('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(358, 358);
            $img->toJpeg(80)->save(public_path('memberimage/'.$name_gen));

            $data->image = $name_gen;
        }
        $data->save();

        $notification = array(
            'message' => 'Member Information Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_member')->with($notification); 
    }

    public function delete_member($id){
        $data=Member::findOrFail($id);

        
        $image_path=public_path('memberimage/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    /* Event */
    public function view_event(){
        $event = Event::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.about.view_event',compact('event'));
    }

    public function add_event(){
        return view('admin.partials.about.add_event');
    }

    public function upload_event(Request $request){
        $data=new Event;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->month = $request->month;
        $data->year = $request->year;

        if($request->hasFile('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(3000, 3000);
            $img->toJpeg(80)->save(public_path('eventimage/'.$name_gen));

            $data->image = $name_gen;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Event Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_event')->with($notification); 
    }

    public function edit_event($id){
        $event = Event::findOrfail($id);
        return view('admin.partials.about.edit_event',compact('event'));
    }

    public function update_event(Request $request,$id){
        $data=Event::findOrfail($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->date = $request->date;
        $data->month = $request->month;
        $data->year = $request->year;

        if($request->hasFile('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(3000, 3000);
            $img->toJpeg(80)->save(public_path('eventimage/'.$name_gen));

            $data->image = $name_gen;
        }
        $data->save();

        $notification = array(
            'message' => 'Member Information Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_event')->with($notification); 
    }

    public function delete_event($id){
        $data=Event::findOrFail($id);

        
        $image_path=public_path('eventimage/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Event Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }
}
