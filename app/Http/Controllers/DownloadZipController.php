<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class DownloadZipController extends Controller
{

    public function index(Request $request) {

        $zip_id = $request->id;
        $zip_directory = storage_path() . '/zips/' . $zip_id . '.zip';

        $headers = [
            header("Cache-Control: public"),
            header("Content-Description: File Transfer"),
            header("Content-Type: application/zip"),
            header("Content-Length:" . filesize($zip_directory)),
            header("Content-Disposition: attachment; filename=meshBuilder.zip"),
            header("Content-Transfer-Encoding: binary")
        ];

        try {

            return response()->download($zip_directory, 'meshBuilder.zip', $headers)->deleteFileAfterSend();

        } catch (FileNotFoundException  $e) {

            return back()->withError('Zip file (' . $zip_id . ') not found on the server, please try again');

        }
    }
}
