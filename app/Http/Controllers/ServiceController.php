<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Job_Category;
use App\Models\Job_Circular;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ServiceController extends Controller
{
    public function view_service(){
        $service = Service::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.view_service',compact('service'));
    }

    public function add_service(){
        return view('admin.partials.service.add_service');
    }

    public function upload_service(Request $request){
        $data=new Service;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->status = $request->status;
        
        $data->save();

        $notification = array(
            'message' => 'Service Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_service')->with($notification); 
    }

    public function edit_service($id){
        $service = Service::findOrfail($id);
        return view('admin.partials.service.edit_service',compact('service'));
    }

    public function update_service(Request $request,$id){
        $data=Service::findOrfail($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->status = $request->status;
        
        $data->save();

        $notification = array(
            'message' => 'Service Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view_service')->with($notification); 
    }

    public function delete_service($id){
        $data=Service::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'Course Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    //Testimonials
    public function testimonials(){
        $testimonial = Testimonial::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.testimonials',compact('testimonial'));
    }

    public function add_testimonials(){
        return view('admin.partials.service.add_testimonials');
    }

    public function upload_testimonials(Request $request){

        $data=new Testimonial;
        $data->name = $request->name;
        $data->department = $request->department;
        $data->short_desc = $request->short_desc;
        
        $data->save();

    
        $notification = array(
            'message' => 'Testimonial Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.testimonials')->with($notification); 
    }
    public function edit_testimonials($id){
        $testimonial = Testimonial::findOrfail($id);
        return view('admin.partials.service.edit_testimonials',compact('testimonial'));
    }

    public function update_testimonials(Request $request,$id){
        $data=Testimonial::findOrfail($id);
        $data->name = $request->name;
        $data->department = $request->department;
        $data->short_desc = $request->short_desc;
        
        $data->save();

    
        $notification = array(
            'message' => 'Testimonial Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.testimonials')->with($notification); 
    }

    public function delete_testimonials($id){
        $data=Testimonial::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'testimonial Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    ///Notice
    public function notice(){
        $data=Notice::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.notice',compact('data'));
    }

    public function upload_notice(Request $request){
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        $file = $request->file('document');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->storeAs('documents',$fileName,'public');

        $doc = new Notice;
        $doc->file =$fileName;
        $doc->title =$request->title;
        $doc->save();

        $notification = array(
            'message' => 'Notice Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    public function download($id){
        $document = Notice::find($id);

        if (!$document) {
            abort(404); // Handle case where document is not found
        }

        $file_path=storage_path("app/public/documents/{$document->file}");

    return response()->download($file_path, $document->title);
        
    }

    public function delete_notice($id){
        $data=Notice::findOrFail($id);

        $file_path=public_path('notice_pdf/'.$data->file);
        if(file_exists($file_path)){
            unlink($file_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    ///Notice
    public function interview(){
        $data=Interview::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.interview',compact('data'));
    }

    public function upload_interview(Request $request){
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        $file = $request->file('document');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->storeAs('documents',$fileName,'public');

        $doc = new Interview;
        $doc->file =$fileName;
        $doc->title =$request->title;
        $doc->save();

        $notification = array(
            'message' => 'Interview Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    public function download_interview($id){
        $document = Interview::find($id);

        if (!$document) {
            abort(404); // Handle case where document is not found
        }

        $file_path=storage_path("app/public/documents/{$document->file}");

    return response()->download($file_path, $document->title);
        
    }

    public function delete_interview($id){
        $data=Interview::findOrFail($id);

        $file_path=public_path('interview_pdf/'.$data->file);
        if(file_exists($file_path)){
            unlink($file_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Interview Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    ///job_category
    public function job_category(){
        $data=Job_Category::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.job_category',compact('data'));
    }

    public function upload_job_category(Request $request){
        $data=new Job_Category;
        $data->category_title = $request->category_title;
        $data->save();

        $notification = array(
            'message' => 'category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    public function delete_job_category($id){
        $data=Job_Category::findOrFail($id);

        $data->delete();

        $notification = array(
            'message' => 'Job Category Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    } 

    ///job_circular
    public function job_circular(){
        $category=Job_Category::all();
        $data=Job_Circular::orderBy('id','DESC')->paginate(10);
        return view('admin.partials.service.job_circular',compact('category','data'));
    }

    public function upload_job_circular(Request $request){
        $request->validate([
            'document' => 'required|mimes:pdf,doc,docx,jpg,jpeg',
        ]);
        $file = $request->file('document');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file->storeAs('jobdocument',$fileName,'public');

        $doc = new Job_Circular;
        $doc->file =$fileName;
        $doc->job_title =$request->job_title;
        $doc->category =$request->category;
        $doc->save();

        $notification = array(
            'message' => 'Notice Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    public function download_job_circular($id){
        $document = Job_Circular::find($id);

        if (!$document) {
            abort(404); // Handle case where document is not found
        }

        $file_path=storage_path("app/public/jobdocument/{$document->file}");

        return response()->download($file_path, $document->job_title);
        
    }

    public function delete_job_circular($id){
        $data=Job_Circular::findOrFail($id);

        $file_path=public_path('job_pdf/'.$data->file);
        if(file_exists($file_path)){
            unlink($file_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()-> back()->with($notification);
    }

    
}
