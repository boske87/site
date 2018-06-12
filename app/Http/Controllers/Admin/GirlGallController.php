<?php

namespace App\Http\Controllers\Admin;

use App\Skippaz\Services\UploadService;
use App\User;
use App\UsersImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GirlGallController extends Controller
{
    use UploadService;
    public function gallery($id)
    {
        $items = UsersImage::where('userId', $id)->orderby('ordering','ASC')->get();
        $user = User::find($id);
        return view('admin.girl.gall', compact('items','user'));
    }

    public function galleryAdd($id)
    {
        $user = User::find($id);
        return view('admin.girl.gallAdd', compact('user'));
    }

    public function galleryStore(Request $request, $id)
    {
        $input = $request->all();

        // upload
        $input['imageName'] = $this->upload('imageName', 'img/gallery/devojka'.$id.'/');

        UsersImage::create([
            'imageName' => $input['imageName'],
            'userId' => $id
        ]);

        return redirect()->route('admin.devojka.galerija', $id)
            ->withFlashMessage("Uspesno dodata slika za devojku")
            ->withFlashType('success');
    }

    public function galleryDeleteImage($id)
    {
        UsersImage::destroy($id);
        return redirect()->back()->withFlashMessage("Uspesno obrisana slika")->withFlashType('success');


    }
}
