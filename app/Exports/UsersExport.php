<?php

namespace App\Exports;

use App\Models\DwUserModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DwUserModel::select('user_name', 'user_mobile', 'user_email', 'user_city')->get();
    }

    public function headings(): array
    {
        return [
            'User Name',
            'User Mobile',
            'User Email',
            'User City',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1  => ['font' => ['bold' => true]], // Make the first row (header) bold
        ];
    }
}
