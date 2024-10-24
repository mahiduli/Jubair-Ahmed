<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CourseController extends Controller
{
    /* Category  */
    public function view_category(){
        $category=Category::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.course.view_category',compact('category'));
    }
    public function add_category(){
        return view('admin.partials.course.add_category');
    }
    public function upload_category(Request $request){
        $data=new Category();
        $data->name = $request->name;
        $data->description = $request->description;

        if($request->file('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(3279, 1886);
            $img->toJpeg(80)->save(public_path('categoryimage/'.$name_gen));

            $data->image = $name_gen;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_category')->with($notification); 
    } 

    public function update_category($id){
        $category=Category::findOrfail($id);

        return view('admin.partials.course.update_category',compact('category'));
    }

    public function edit_category(Request $request,$id){
        $data=Category::findOrfail($id);
        $data->name=$request->name;
        $data->description = $request->description;
        if($request->file('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(3279, 1886);
            $img->toJpeg(80)->save(public_path('categoryimage/'.$name_gen));

            $data->image = $name_gen;
        }
        $data->save();

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_category')->with($notification); 
    }

    public function delete_category($id){
        $data=Category::findOrFail($id);

        
        $image_path=public_path('categoryimage/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    /* Course */
    public function view_course(){
        $course=Course::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.course.view_course',compact('course'));
    }
    public function add_course(){
        $category=Category::all();
        return view('admin.partials.course.add_course',compact('category'));
    }

    public function upload_course(Request $request){
        $data=new Course;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->Fee = $request->Fee;
        $data->duration = $request->duration;
        $data->status = $request->status;
        $data->category = $request->category;
        $data->link = $request->link;

        if($request->file('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(1000, 666);
            $img->toJpeg(80)->save(public_path('courseimage/'.$name_gen));

            $data->image = $name_gen;
        }
        
        $data->save();

        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_course')->with($notification); 
    }

    public function edit_course($id){
        $category=Category::all();
        $course=Course::findOrfail($id);

        return view('admin.partials.course.edit_course',compact('category','course'));
    }

    public function update_course(Request $request,$id){
        $data=Course::findOrfail($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->Fee = $request->Fee;
        $data->duration = $request->duration;
        $data->status = $request->status;
        $data->category = $request->category;
        $data->link = $request->link;

        if($request->file('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(1000, 666);
            $img->toJpeg(80)->save(public_path('courseimage/'.$name_gen));

            $data->image = $name_gen;
        }
        $data->save();

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_course')->with($notification); 
    }

    public function delete_course($id){
        $data=Course::findOrFail($id);

        
        $image_path=public_path('courseimage/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }
    
}
