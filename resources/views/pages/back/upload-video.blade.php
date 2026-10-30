@extends('layouts.horizontal', ['title' => 'Upload Practical Video', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="profile-dashboard" style="max-width: 700px; margin: 40px auto; padding: 0 16px;">
        
        <div style="background: linear-gradient(to right, #ecfdf5, #f8fafc); border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; display: flex; flex-direction: column; gap: 12px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
    
        <div style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px; margin-bottom: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
            
            <!-- Top Row: Icon & Main Title -->
            <div style="display: flex; align-items: flex-start; gap: 16px;">
                <div style="width: 44px; height: 44px; border-radius: 12px; background-color: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0; margin-top: 2px;">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                
                <div style="flex: 1;">
                    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 8px; margin-bottom: 4px;">
                        <h2 style="font-size: 20px; font-weight: 800; color: #0f172a; margin: 0; letter-spacing: -0.02em;">
                            Practical Assessment Submission
                        </h2>
                        <!-- Status Tag -->
                        <span style="font-size: 11px; text-transform: uppercase; font-weight: 700; color: #047857; background: #d1fae5; padding: 3px 10px; border-radius: 20px; letter-spacing: 0.05em;">
                            Required Step
                        </span>
                    </div>

                    <!-- Course Subtitle -->
                    <p style="font-size: 14px; font-weight: 600; color: #475569; margin: 0 0 12px 0;">
                        Course: <span style="color: #0f172a;">{{ $package->course_name }}</span>
                    </p>

                    <!-- Description / Guidelines -->
                    <p style="font-size: 13px; color: #64748b; line-height: 1.6; margin: 0;">
                        Please record your practical session following the course guidelines and upload the video file below. Once submitted, our instructors will review it within 1 hour to unlock your certificate.
                    </p>
                </div>
            </div>
        </div>

        <!-- Video Upload Form Component -->
        <div class="upload-card-wrapper" style="background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 32px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            
            <form 
                action="{{ route('practical.video.upload') }}" 
                method="POST" 
                enctype="multipart/form-data"
                x-data="{ uploading: false, fileName: '' }"
                @submit="uploading = true"
            >
                @csrf
                <!-- Pass the unique package row ID -->
                <input type="hidden" name="package_id" value="{{ $package->id }}">

                <!-- Drag & Drop Box -->
                <div style="position: relative; margin-bottom: 20px;">
                    <label style="position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; height: 180px; border: 2px dashed #cbd5e1; background-color: #f8fafc; border-radius: 16px; cursor: pointer; text-align: center; padding: 16px; box-sizing: border-box;">
                        
                        <!-- Default State -->
                        <div x-show="!fileName" style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background-color: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </div>
                            <span style="font-size: 14px; font-weight: 600; color: #0f172a;">Click to browse or drop your video here</span>
                            <span style="font-size: 11px; color: #94a3b8;">MP4, MOV, AVI, WMV or WEBM (Max size: 100MB)</span>
                        </div>

                        <!-- File Selected State -->
                        <div x-show="fileName" style="display: none; flex-direction: column; align-items: center; gap: 8px;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background-color: #d1fae5; color: #047857; display: flex; align-items: center; justify-content: center;">
                                <i class="fa-solid fa-file-video"></i>
                            </div>
                            <span style="font-size: 14px; font-weight: 700; color: #059669;" x-text="fileName"></span>
                            <span style="font-size: 11px; background: #ffffff; padding: 4px 10px; border-radius: 20px; border: 1px solid #e2e8f0;">Click to change file</span>
                        </div>

                        <!-- Native Input -->
                        <input 
                            type="file" 
                            name="practical_video" 
                            accept="video/mp4,video/quicktime,video/x-msvideo,video/webm" 
                            required
                            @change="fileName = $event.target.files[0] ? $event.target.files[0].name : ''"
                            style="position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;"
                        >
                    </label>
                </div>

                @error('practical_video')
                    <div style="background-color: #fef2f2; border: 1px solid #fecaca; color: #dc2626; font-size: 12px; padding: 12px; border-radius: 12px; margin-bottom: 20px;">
                        {{ $message }}
                    </div>
                @enderror

                <!-- Loading State -->
                <div x-show="uploading" style="display: none; background-color: #ecfdf5; border: 1px solid #a7f3d0; padding: 14px; border-radius: 12px; margin-bottom: 20px; color: #065f46; font-size: 13px;">
                    <strong>Uploading your video securely...</strong> Please keep this page open.
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    style="width: 100%; background-color: #059669; color: #ffffff; font-weight: 600; padding: 14px; border-radius: 12px; border: none; cursor: pointer; font-size: 15px; display: flex; align-items: center; justify-content: center; gap: 8px;"
                    x-bind:disabled="uploading"
                >
                    <i class="fa-solid fa-paper-plane" x-show="!uploading"></i>
                    <span x-text="uploading ? 'Uploading Video...' : 'Submit Video for Instructor Review'"></span>
                </button>
            </form>
        </div>
    </div>
@endsection