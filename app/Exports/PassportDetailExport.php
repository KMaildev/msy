<?php

namespace App\Exports;

use App\Models\Passport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PassportDetailExport implements FromView
{
    public function __construct($passport)
    {
        $this->passport = $passport;
    }

    public function view(): View
    {
        return view('passport.export.excel_passport_detail_export', [
            'passport' => $this->passport,
        ]);
    }
}
