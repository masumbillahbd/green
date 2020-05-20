<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Intervention\Image\ImageManager;
// use Intervention\Image\Facades\Image;
use Image;
use App\Photo;


class PhotoController extends Controller
{
    
   

    public function storePhoto(Request $request){

    	$this->validate($request, [
    		'photo_tag' => 'required',
    		'photo' => 'required|max:2048', //image|mimes:jpg,png,jpeg,gip,svg|
    	]);

        $photo = new Photo();

        $photo->photo_tag = $request->photo_tag;

        if($request->hasfile('photo')){

            $image = $request->file('photo');

            $image_name = time(). '.' .$image->getClientOriginalExtension();

            $destinationPath = public_path('/thumbnail');


            $resize_image = Image::make($image->getRealPath());


            $imageresize = $resize_image->fit(300, 300, function($constraint){

                $constraint->aspectRatio();

            });

            // dd($imageresize );

            $photo->photo = $imageresize;
        }else{
            return $request;
            $photo->photo = '';
        }

    	
    	$photo->save();
    	return redirect()->back()->with('message', 'Photo save successfully');


    }

    // private function 

    public function managePhoto(){
        $photos = Photo::all();

        return view('backEnd.photo.managePhoto', ['photos'=> $photos] );
    }

    public function editPhoto($id){
        $photo = Photo::where('id', $id)->first();
        return view('backEnd.photo.editPhoto', ['photo'=> $photo]);
    }

    public function updatePhoto(Request $request){
        // $photos = Photo::find($id);
        // if($request->hasfile('photo')){
        //     Storage::delete($photos->phpto);
        //     $image = Storage::putFile('public/', $request->image);
        // }
        // $photos->photo_tag = $request->photo_tag;
        // $photos->photo = $image;
        // $photos->save();

        $photo = Photo::find($request->id);
        // echo "<pre>";
        // print_r($photo->photo);
        // exit();

        $photo->photo_tag = $request->photo_tag;

        if($photo){
            
            if($request->hasfile('photo')){
                unlink('Upload/Photos/'.$photo->photo);
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $fileName = date('Y-m-d').'_'.time().'.'.$extension;
                $file->move('Upload/Photos', $fileName);
                $photo->photo = $fileName;
            }

        }else{
            return $photo->photo;
        }

        $photo->save();

        return redirect('/photo/manage')->with('message', 'Photo Update successfully');
    }
    

    public function deletePhoto($id){
        $photo = Photo::find($id);
        unlink('Upload/Photos/'.$photo->photo);
        $photo->delete($photo);

        return redirect('/photo/manage')->with('message', 'Photo delete successfully');
    }
}






            // $file = $request->file('photo'); //image all information

            // // $file_original_name = $file->getClientOriginalName(); //get image original name

            
            // $extension = $file->getClientOriginalExtension(); //get image extension like jpg, png, jpeg etc
            
            // $fileNewName = date('Y-m-d').'_'.time().'.'.$extension;
            // // dd($fileNewName);

            // // $fileName = Image::make(public_path('public/' . $fileNewName))->fit(200, 200);
            // // dd($fileName);

            // $fileName = Image::make(Input::file($fileNewName)->getRealPath($extension))->resize(120,75);

            // // $upload = $file->move('Upload/Photos', $fileNewName);
            // // dd($upload);

            // // $fileName = Image::make($upload)->fit(200, 200);
            
            // // $file->move('Upload/Photos', $fileName);

            // $photo->photo = $fileName;


            // // $avatar = $request->file('photo');

            // //$filename = time() . '.' . $file->getClientOriginalExtension();

            // // $filename = Image::make($file)->resize(300, 300);

            // // dd($fileName);


// $file = $request->file('photo');
//             $extension = $file->getClientOriginalExtension();
//             $fileName = date('Y-m-d').'_'.time().'.'.$extension;
//             $file->move('Upload/Photos', $fileName);

//             $photo->photo = $fileName;





// Photo::create( $request->all() );

        // $photo = new Photo();

        // $photo->photo_tag = $request->photo_tag;

        // if($request->hasfile('photo')){

        //     $file = $request->file('photo'); //image all information
        //     // dd($file);

        //     $fileResize = Image::make(public_path('storage/') . $file)->resize(120, 75);
        //      // dd($fileName);
        //     // $file_original_name = $file->getClientOriginalName(); //get image original name

            
        //     // $extension = $fileResize->getClientOriginalExtension(); //get image extension like jpg, png, jpeg etc
        //     // dd($extension);
        //     // $fileNewName = date('Y-m-d').'_'.time();
        //     // dd($fileNewName);

        //     // $fileName = Image::make(public_path('public/' . $fileNewName))->fit(200, 200);
        //     // dd($fileName);

        //     // $fileName = Image::make($fileNewName)->resize(120, 75);

        //     // dd($fileName);

        //     // $upload = $file->move('Upload/Photos', $fileResize);
        //     // dd($upload);

        //     // $fileName = Image::make($upload)->fit(200, 200);
            
        //     // $file->move('Upload/Photos', $fileName);

        //     $photo->photo = $fileResize;


        //     // $avatar = $request->file('photo');

        //     //$filename = time() . '.' . $file->getClientOriginalExtension();

        //     // $filename = Image::make($file)->resize(300, 300);

        //     // dd($fileName);

        // }else{
        //     return $request;
        //     $photo->photo = '';
        // }




// $image = new Photo();

//         $image->photo_tag = $request->photo_tag;

//         $image = $request->file('photo');

//         $image_name = time(). '.' .$image->getClientOriginalExtension();

//         $destinationPath = public_path('/thumbnail');

//         $resize_image = Image::make($image->getRealPath());

//         $resize_image->fit(300, 300, function($constraint){

//             $constraint->aspectRatio();

//         })->save($destinationPath . '/' . $image_name);

//         $destinationPath = public_path('/images');

//         $image->move($destinationPath, $image_name);