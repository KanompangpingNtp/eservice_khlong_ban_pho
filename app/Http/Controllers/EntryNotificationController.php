<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrForm;
use App\Models\EaPeople;
use App\Models\DisabilityPerson;
use App\Models\ChildInformation;
use App\Models\AssistPerson;
use App\Models\TradeRegistry;
use App\Models\BuildBuilding;
use App\Models\BizHazLicense;
use App\Models\BusinessDoc;
use App\Models\BuildingChange;

class EntryNotificationController extends Controller
{
    public function AdminEntryNotification()
    {
        $GeneralRequests = GrForm::where('status', 1)->count();
        $ElderlyAllowance = EaPeople::where('status', 1)->count();
        $Disability = DisabilityPerson::where('status', 1)->count();
        $ChildApply = ChildInformation::where('status', 1)->count();
        $ReceiveAssistance = AssistPerson::where('status', 1)->count();
        $TradeRegistry = TradeRegistry::where('status', 1)->count();
        $Certification = BuildBuilding::where('status', 1)->count();
        $License = BizHazLicense::where('status', 1)->count();
        $BusinessDoc = BusinessDoc::where('status', 1)->count();
        $BuildingChange = BuildingChange::where('status', 1)->count();

        return view('admin.admin_index', compact(
            'GeneralRequests',
            'ElderlyAllowance',
            'Disability',
            'ChildApply',
            'ReceiveAssistance',
            'TradeRegistry',
            'Certification',
            'License',
            'BusinessDoc',
            'BuildingChange'
        ));
    }
}
