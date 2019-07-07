<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YoutubeDl\YoutubeDl;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{


    public function download(Request $request)
    {

        $url = $request->validate([
            'url' => 'required|url'
        ])['url'];

        $dl = new YoutubeDl([]);

        $dl->setBinPath('/usr/local/bin/youtube-dl');

        $dl->setDownloadPath(storage_path('app/temp'));

        try {

            $video = $dl->download($url);


            return response()
                ->download($video->getFile())
                ->deleteFileAfterSend();
        } catch (NotFoundException $e) {
            abort(400, 'Video not found');
        } catch (PrivateVideoException $e) {
            abort(400, 'Video is private');
        } catch (CopyrightException $e) {
            abort(400, 'That video is under copyright');
        } catch (\Exception $e) {
            dd($e);
            // abort(500, 'Video failed to download');
        }
    }
}
