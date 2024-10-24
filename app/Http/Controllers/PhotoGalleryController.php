<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\OverseasGallery;
use App\Models\PlacementGallery;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PhotoGalleryController extends Controller
{
    //Gallery
    public function gallery(){
        $data=Gallery::orderBy('id','DESC')->paginate(15);
        return view('admin.partials.photogallery.gallery',compact('data'));
    }

    public function upload_gallery(Request $request){
        $request->validate([
            'image.*' => 'required|image|mimes:jpg,jpeg,png,webp',
        ]);
        $imageData = [];
        if($files = $request->file('image')){
            foreach($files as $file){
            //$takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $img = $manager->read($file);
            $img->resize(640, 480);
            $img->toJpeg(80)->save(public_path('galleryimage/'.$name_gen));

            $save_url = $name_gen;
            $imageData[] = [
                'image' => $save_url,
            ];
            }
            
        }
        Gallery::insert($imageData);
    
        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    public function delete_gallery($id){
        $data=Gallery::findOrFail($id);

        
        $image_path=public_path('galleryimage/'.$data->image);
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

    //placementgallery
    public function placement_gallery(){
        $data=PlacementGallery::orderBy('id','DESC')->paginate(15);
        return view('admin.partials.photogallery.placement_gallery',compact('data'));
    }

    public function upload_placement_gallery(Request $request){
        $request->validate([
            'image.*' => 'required|image|mimes:jpg,jpeg,png,webp',
        ]);
        $imageData = [];
        if($files = $request->file('image')){
            foreach($files as $file){
            //$takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $img = $manager->read($file);
            $img->resize(640, 480);
            $img->toJpeg(80)->save(public_path('placementgallery/'.$name_gen));

            $save_url = $name_gen;
            $imageData[] = [
                'image' => $save_url,
            ];
            }
            
        }
        PlacementGallery::insert($imageData);
    
        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    public function delete_placement_gallery($id){
        $data=PlacementGallery::findOrFail($id);

        
        $image_path=public_path('placementgallery/'.$data->image);
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

    //OverseasGallery
    public function overseas_gallery(){
        $data=OverseasGallery::orderBy('id','DESC')->paginate(15);
        return view('admin.partials.photogallery.overseas_gallery',compact('data'));
    }

    public function upload_overseas_gallery(Request $request){

        $data=new OverseasGallery;
        $data->name = $request->name;

        if($request->file('image')){
            $takeimage =$request->file('image');
            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
            $img = $manager->read($takeimage);
            $img->resize(300, 200);
            // encoding as truecolor png image
            $encoded = $img->toPng(); // Intervention\Image\EncodedImage
            //$encoded = $img->toPng(indexed: true);
            $encoded->save(public_path('overseasgallery/'.$name_gen));

            $data->image = $name_gen;
        }
        
        $data->save();

    
        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    public function delete_overseas_gallery($id){
        $data=OverseasGallery::findOrFail($id);

        
        $image_path=public_path('overseasgallery/'.$data->image);
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
