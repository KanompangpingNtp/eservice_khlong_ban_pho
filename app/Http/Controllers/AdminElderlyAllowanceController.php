<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EaPeople;

class AdminElderlyAllowanceController extends Controller
{
    //
    public function TableElderlyAllowancePages()
    {
        $forms = EaPeople::with(['user', 'attachments', 'replies'])->get();

        return view('admin.elderly_allowance.table_elderly_allowance', compact('forms'));
    }
}
