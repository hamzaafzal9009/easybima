<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;



class ExtraController extends Controller{
    
    public function uploadPP(Request $request){

        $exploded = explode(',', $request->ppFile);
        $decoded = base64_decode($exploded[1]);

        $fileName = public_path('upload/pp/privacy-policy.pdf');
        

        if (File::exists($fileName)) {
            File::delete($fileName);
            
        }
        
        $newFileName = sprintf('privacy-policy.pdf');
        $path = public_path().'/upload/pp/'.$newFileName;
        file_put_contents($path, $decoded);
        return response()->json(['status', 'File Uploaded Successful'],200);
        
    }

    public function uploadUA(Request $request){

        $exploded = explode(',', $request->ppFile);
        $decoded = base64_decode($exploded[1]);

        $fileName = public_path('upload/ua/user-agreement.pdf');
        

        if (File::exists($fileName)) {
            File::delete($fileName);
            
        }
        
        $newFileName = sprintf('user-agreement.pdf');
        $path = public_path().'/upload/ua/'.$newFileName;
        file_put_contents($path, $decoded);
        return response()->json(['status', 'File Uploaded Successful'],200);
    }
}
