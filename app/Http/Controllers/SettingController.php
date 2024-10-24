<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class SettingController extends Controller
{
    //About
    public function setting(){
        $setting = Setting::find(1);
        return view('admin.partials.setting',compact('setting'));
    }
    public function saveSetting(Request $request){
        $setting = Setting::where('id','1')->first();
        if($setting){
            $setting->meta_title =$request->meta_title;
            $setting->address =$request->address;
            $setting->phone =$request->phone;
            $setting->gmail =$request->gmail;
            $setting->fb_url =$request->fb_url;
            $setting->gm_url =$request->gm_url;
            $setting->in_url =$request->in_url;

            if($request->hasFile('meta_image')){
                $destination = 'setting/'.$setting->meta_image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $takeimage =$request->file('meta_image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                // encoding as truecolor png image
                $encoded = $img->toPng(); // Intervention\Image\EncodedImage
                //$encoded = $img->toPng(indexed: true);
                $encoded->save(public_path('setting/'.$name_gen));
    
                $setting->meta_image = $name_gen;
            }
            if($request->hasFile('image')){
                $destination = 'setting/'.$setting->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $takeimage =$request->file('image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                // encoding as truecolor png image
                $encoded = $img->toPng(); // Intervention\Image\EncodedImage
                //$encoded = $img->toPng(indexed: true);
                $encoded->save(public_path('setting/'.$name_gen));
    
                $setting->image = $name_gen;
            }
            if($request->hasFile('banner_image')){
                $destination = 'setting/'.$setting->banner_image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $takeimage =$request->file('banner_image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                $img->toJpeg(80)->save(public_path('setting/'.$name_gen));
    
                $setting->banner_image = $name_gen;
            }
            $setting->save();

        return redirect()->back();
        }else{
            $setting = new Setting();
            $setting->meta_title =$request->meta_title;
            $setting->address =$request->address;
            $setting->phone =$request->phone;
            $setting->gmail =$request->gmail;
            $setting->fb_url =$request->fb_url;
            $setting->gm_url =$request->gm_url;
            $setting->in_url =$request->in_url;

            if($request->hasFile('meta_image')){
                $takeimage =$request->file('meta_image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                // encoding as truecolor png image
                $encoded = $img->toPng(); // Intervention\Image\EncodedImage
                //$encoded = $img->toPng(indexed: true);
                $encoded->save(public_path('setting/'.$name_gen));
    
                $setting->meta_image = $name_gen;
            }
            if($request->hasFile('image')){
                $takeimage =$request->file('image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                // encoding as truecolor png image
                $encoded = $img->toPng(); // Intervention\Image\EncodedImage
                //$encoded = $img->toPng(indexed: true);
                $encoded->save(public_path('setting/'.$name_gen));
    
                $setting->image = $name_gen;
            }
            if($request->hasFile('banner_image')){
                $takeimage =$request->file('banner_image');
                // create image manager with desired driver
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$takeimage->getClientOriginalExtension();
                $img = $manager->read($takeimage);
                $img->toJpeg(80)->save(public_path('setting/'.$name_gen));
    
                $setting->banner_image = $name_gen;
            }
            $setting->save();

        return redirect()->back();
        }

        
    }
}
