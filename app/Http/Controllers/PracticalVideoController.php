<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PracticalVideoController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the package_id and video file
        $validated = $request->validate([
            'package_id' => 'required|exists:packages,id',
            'practical_video' => 'required|file|mimes:mp4,mov,avi,wmv,webm|max:102400', // max ~100MB
        ], [
            'practical_video.required' => 'Please select a video file to upload.',
            'practical_video.mimes' => 'The video must be a file of type: mp4, mov, avi, wmv, webm.',
            'practical_video.max' => 'The video file size must not exceed 100MB.',
        ]);

        try {
            // 2. Store the uploaded video securely
            $videoPath = $request->file('practical_video')->store('practical_videos', 'public');

            // 3. Update ONLY this specific package row by its unique ID
            DB::table('packages')
                ->where('id', $validated['package_id'])
                ->update([
                    'video_path' => $videoPath,
                    'video_status' => 'pending',
                ]);

            return back()->with('success', 'Video uploaded successfully! Please wait for instructor approval (up to 1 hour).');

        } catch (\Exception $e) {
            Log::error('Practical video upload error: ' . $e->getMessage(), [
                'package_id' => $request->input('package_id'),
            ]);

            return back()
                ->withInput()
                ->withErrors(['practical_video' => 'An error occurred while uploading your video. Please try again or contact support.']);
        }
    }
    public function showUploadForm($id)
    {
        // Fetch the specific package belonging to the authenticated user
        $package = DB::table('packages')
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->first();

        if (!$package) {
            abort(404, 'Package not found.');
        }

        return view('pages.back.upload-video', compact('package'));
    }
}