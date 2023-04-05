<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{PhotoGallery, Category, PhotoGalleryImage};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $bannerlist = PhotoGalleryImage::where('is_deleted', '0')->where('status', '1')->where('gallery_category_id', 1)->get();
        $sidebar_gallery = PhotoGalleryImage::where('is_deleted', '0')->where('status', '1')->where('gallery_category_id', 2)->get();
        $midbanner = PhotoGalleryImage::where('is_deleted', '0')->where('status', '1')->where('gallery_category_id', 3)->first();
        $smallbanner = PhotoGalleryImage::where('is_deleted', '0')->where('status', '1')->where('gallery_category_id', 4)->get();
        //dd($smallbanner);
        return view('frontend.home')
            ->with('bannerlist', $bannerlist)
            ->with('midbanner', $midbanner)
            ->with('sidebar_gallery', $sidebar_gallery)
            ->with('smallbanner', $smallbanner);
    }

    public function netajiSection()
    {
      //dd($smallbanner);
      return view('frontend.netajisection');
    }
    public function neharuSection()
    {
      //dd($smallbanner);
      return view('frontend.neharusection');
    }
}
