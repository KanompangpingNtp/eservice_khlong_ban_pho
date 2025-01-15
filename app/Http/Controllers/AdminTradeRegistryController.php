<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TradeRegistry;
use App\Models\TradeRegistryFile;
use App\Models\TradeRegistryReply;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminTradeRegistryController extends Controller
{
    //
    public function TableTradeRegistryAdminPages()
    {
        $forms = TradeRegistry::with(['user', 'files', 'replies'])
            ->get();

        return view('admin.commercial_registration.table_commercial_registration', compact('forms'));
    }

    public function TradeRegistryUpdateStatus($id)
    {
        $form = TradeRegistry::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }

    public function TradeRegistryAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        TradeRegistryReply::create([
            'trade_registries_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function TradeRegistryAdminExportPDF($id)
    {
        $form = TradeRegistry::with(['tradeEntrepreneur', 'tradeLocationMore', 'tradeShareCapital','tradeCopyLocation','tradeShareValue'])->find($id);

        $pdf = Pdf::loadView('admin.commercial_registration.export_pdf.export_pdf', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องทะเบียนพาณิชย์' . $form->id . '.pdf');
    }
}
