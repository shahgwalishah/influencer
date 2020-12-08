<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\SocialNetWorks;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function addCampaign()
    {
        $social_networks = SocialNetWorks::all();
        $interest = Interest::all();
        return view('frontend.campaign.index',[
            'social_networks' => $social_networks,
            'interest' => $interest
        ]);
    }

    public function getInterests(){
        $interest = Interest::all();
        return response()->json($interest);
    }

    public function getNetWorks(){
        $networks = SocialNetWorks::all();
        return response()->json($networks);
    }

    public function myCampaign()
    {
        return view('frontend.campaign.myCampaign');
    }

    public function avilableCampaign()
    {
        return view('frontend.campaign.avail_campaign');
    }

    public function campaignComplete()
    {
        return view('frontend.campaign.complete_campaign');
    }

    public function campaignDetail()
    {
        return view('frontend.campaign.detail');
    }

    public function campaignDashboard()
    {
        return view('frontend.campaign.dashboard');
    }

    public function myCampaignLists()
    {
        return view('frontend.campaign.campaign_list');
    }

    public function soonCampaign()
    {
        return view('frontend.campaign.coming_soon');
    }
}
