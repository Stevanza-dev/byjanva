<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\OrderStep;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    /**
     * Display the landing page.
     */
    public function __invoke(): View
    {
        $features = Feature::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $orderSteps = OrderStep::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('welcome', [
            'features' => $features,
            'orderSteps' => $orderSteps,
        ]);
    }
}
