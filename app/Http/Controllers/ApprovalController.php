<?php

namespace App\Http\Controllers;

use App\Models\Document; // <-- TAMBAHKAN INI

class ApprovalController extends Controller
{
    public function approved()
    {
        $data = Document::where('status','approved')->get();
        return view('eDocument.ApprovedDocumentView', compact('data'));
    }

    public function approve($id)
    {
        Document::find($id)->update([
            'status'=>'approved'
        ]);

        return back();
    }
}
