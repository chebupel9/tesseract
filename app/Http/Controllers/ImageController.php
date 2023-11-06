<?php

namespace App\Http\Controllers;

require '../../vendor/autoload.php';

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PHPUnit\Exception;
use thiagoalessio\TesseractOCR\TesseractOCR;

class ImageController extends Controller
{
    public function uploadImage (Request $request) {
        $selectedLanguage = $request->input('language');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniqueFileName = Str::random(20) . '.' . $image->getClientOriginalExtension();

            $path = $image->storeAs('uploads', $uniqueFileName, 'public');

            switch ($selectedLanguage) {
                case 'Russian':
                    try {
                        $result = (new TesseractOCR($path))
                            ->lang('rus')
                            ->run();
                        $status = true;
                        break;
                    } catch (Exception $ex) {
                        $result = false;
                        $status = $ex->getMessage();
                        break;
                    }
                case 'English':
                    try {
                        $result = (new TesseractOCR($path))
                            ->lang('eng')
                            ->run();
                        $status = true;
                        break;
                    } catch (Exception $ex) {
                        $result = false;
                        $status = $ex->getMessage();
                        break;
                    }
                case 'Eng+Rus':
                    try {
                        $result = (new TesseractOCR($path))
                            ->lang('eng+rus')
                            ->run();
                        $status = true;
                        break;
                    } catch (Exception $ex) {
                        $result = false;
                        $status = $ex->getMessage();
                        break;
                    }
                default:
                    try {
                        $result = (new TesseractOCR($path))
                            ->lang('rus+eng')
                            ->run();
                        $status = true;
                        break;
                    } catch (Exception $ex) {
                        $result = false;
                        $status = $ex->getMessage();
                        break;
                    }
            }

            return response()->json(['result' => $status, 'data' => $result]);
        } else {
            return response()->json(['result' => false]);
        }
    }
}
