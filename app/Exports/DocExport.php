<?php

namespace App\Exports;

use App\Models\PartnerDoctorContactModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DocExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PartnerDoctorContactModel::select('clinic_registration_type', 'partner_doctor_name', 'partner_doctor_specialist', 'partner_doctor_designation', 'partner_doctor_fees', 'partner_doctor_mobile', 'partner_doctor_email', 'partner_doctor_landmark', 'partner_doctor_pincode', 'partner_doctor_state', 'partner_doctor_city','partner_doctor_google_map_link', 'partner_doctor_address','visit_day_time', 'status')->get();
    }
    public function headings(): array
    {
        return [
            'Type',
            'Doctor Name',
            'Specialist',
            'Designation',
            'Fees',
            'Mobile',
            'Email',
            'Landmark',
            'Pincode',
            'State',
            'City',
            'Map Link',
            'Address',
            'Visit Day Time',
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
