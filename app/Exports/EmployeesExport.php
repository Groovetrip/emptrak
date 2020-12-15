<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::withTrashed()->get();
    }

    /**
     * Export heading row
     * @return string[]
     */
    public function headings(): array
    {
        return [
            'id',
            'first_name',
            'last_name',
            'middle_initial',
            'email',
            'address',
            'address2',
            'city',
            'state',
            'zip',
            'classification',
            'payment_method',
            'salary',
            'hourly_rate',
            'commission_rate',
            'routing_number',
            'account_number',
            'phone',
            'gender',
            'birth_date',
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }
}
