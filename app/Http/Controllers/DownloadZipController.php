<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class DownloadZipController extends Controller
{

    public function index(Request $request) {

        $zip_id = $request->id;
        $zip_directory = storage_path() . '/zips/' . $zip_id . '.zip';

        try {

            return response()->download($zip_directory, 'meshBuilder.zip')->deleteFileAfterSend();

        } catch (FileNotFoundException  $e) {

            return back()->withError('Zip file (' . $zip_id . ') not found on the server, please try again');

        }
    }
}
