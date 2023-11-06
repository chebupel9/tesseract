<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function showRussianTemplate () {
        $json_data = file_get_contents(public_path('json/ru_data.json'));
        $data = json_decode($json_data);

        return view('template', ['data' => $data]);
}

    public function showEnglishTemplate () {
        $json_data = file_get_contents(public_path('json/en_data.json'));
        $data = json_decode($json_data);

        return view('template', ['data' => $data]);
    }

}
