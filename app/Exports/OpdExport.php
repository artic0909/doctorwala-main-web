<?php

namespace App\Exports;


use App\Models\PartnerOPDContactModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OpdExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        return PartnerOPDContactModel::select('clinic_registration_type', 'clinic_contact_person_name', 'clinic_name', 'clinic_gstin', 'clinic_mobile_number', 'clinic_email', 'clinic_landmark', 'clinic_pincode', 'clinic_state', 'clinic_city', 'clinic_google_map_link', 'clinic_address', 'status')->get();
    }

    public function headings(): array
    {
        return [
            'Type',
            'Contact Person Name',
            'Clinic Name',
            'GSTIN',
            'Mobile',
            'Email',
            'Landmark',
            'Pincode',
            'State',
            'City',
            'Map Link',
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
