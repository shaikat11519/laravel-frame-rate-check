<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class   VideoController extends Controller
{

    public function index()
    {
        // Show a form for uploading videos
        return view('upload');
    }
    // public function upload(Request $request)
    // {
    //     // $request->validate([
    //     //     'video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:20000',
    //     // ]);

    //     // Store the uploaded file
    //     $path = $request->file('video')->store('videos');
    //     // Open the video file and get the frame rate
    //     $media = FFMpeg::fromDisk('local')->open($path);
    //     dd($media);

    //     // $frameRate = $media->getVideoStream()->get('r_frame_rate');

    //     // return response()->json(['frame_rate' => $frameRate]);
    // }

    public function upload(Request $request)
{
    $request->validate([
        'video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|max:20000',
    ]);

    // Store the uploaded file
    $path = $request->file('video')->store('videos');
    $media = FFMpeg::fromDisk('local')->open($path);
    dd($media); // Debug the path

    // try {
    //     $media = FFMpeg::fromDisk('local')->open($path);
    //     dd($media); // Debug the media object
    // } catch (\Exception $e) {
    //     dd($e->getMessage()); // Catch and display any errors
    // }
}
}
