<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GeneratorHTMLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directory = public_path(''); 

        $files = File::files($directory);

        $htmlFiles = array_filter($files, function($file) {
            return $file->getExtension() === 'html';
        });

        $fileNames = array_map(function($file) {
            return $file->getFilename();
        }, $htmlFiles);

        return view('admin.social.index', ['fileNames' => $fileNames]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'linkOffer' => 'required|url',  // Validates that 'linkOffer' is a required field and a valid URL
        ]);

        $link_offer = [
            // 'https://www.facebook.com/',
            // 'https://www.instagram.com/',
            $request->input('linkOffer') ?? 'https://example.com/',
        ];

        $file_HTML = glob(public_path('html_public/*.html'));

        // $file_HTML = [ // CHOOSE FILE
        //     'html_public\adultdates.html',
        //     'html_public\chat-with-JAV.html',
        // ];

        $link_offer_file_HTML = [];
        $newFiles = []; // TODO view links 
        foreach ($link_offer as $link) {
            foreach ($file_HTML as $file) {
                $file = 'html_public\\' . basename($file);
                $link_offer_file_HTML[] = [$link, $file];
            }
        }

        foreach ($link_offer_file_HTML as $item_link_file) {
            $item_link = $item_link_file[0];
            $item_file = $item_link_file[1];

            $filePath = public_path($item_file);


            do {
                $nameNewFile = Str::random(5) . '-' . str_replace("html_public\\", '', $item_file);
                $newFilePath = public_path($nameNewFile);
            } while (File::exists($newFilePath));

            $fileContent = file_get_contents($item_file);
            $result = str_replace("{{string_replace_url}}", $item_link, $fileContent);
            $result = str_replace("../landing_page/", 'landing_page/', $result);

            $newFilePath = public_path($nameNewFile);
            File::put($newFilePath, $result);


            $newFiles[] = asset($nameNewFile); // TODO: arr view links
        }

        $linkList = implode('<br>', array_map(fn($link) => "<a href=\"$link\" target=\"_blank\">$link</a>", $newFiles));
        $fileCount = count($newFiles);
        return view('admin.social.listFileLandingPafe', compact('fileCount','linkList'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($fileName)
    {
        try {
            $filePath = public_path($fileName);
            if (file_exists($filePath)) {
                unlink($filePath);
                session()->flash('success', 'Xóa thành công.');
            } else {
                session()->flash('error', 'Landing Page không tồn tại.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Đã có lỗi xảy ra khi xóa Landing Page.');
        }
        return redirect()->route('social.index');
    }    

}