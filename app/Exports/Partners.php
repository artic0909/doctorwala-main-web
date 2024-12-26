<?php

namespace App\Exports;

use App\Models\DwPartnerModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Partners implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DwPartnerModel::select('registration_type', 'partner_id', 'partner_clinic_name', 'partner_contact_person_name', 'partner_mobile_number', 'partner_email', 'partner_landmark', 'partner_pincode', 'partner_state', 'partner_city', 'partner_address', 'status')->get();
    }

    public function headings(): array
    {
        return [
            'Type',
            'Partner ID',
            'Clinic Name',
            'Contact Person Name',
            'Mobile',
            'Email',
            'Landmark',
            'Pincode',
            'State',
            'City',
            'Address',
            'Status',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1  => ['font' => ['bold' => true]], // Make the first row (header) bold
        ];
    }
}
