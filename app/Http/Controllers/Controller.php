<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Experience;
use App\Models\Portofolio;
use App\Models\Education;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $experiences = Experience::latest()->get();
        $portofolios = Portofolio::latest()->get();
        $educations = Education::latest()->get();

        return view('index', [
            'experiences' => $experiences,
            'portofolios' => $portofolios,
            'educations' => $educations,
        ]);
    }
}
