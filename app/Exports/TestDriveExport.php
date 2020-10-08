<?php
namespace App\Exports;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TestDriveExport implements FromCollection, WithHeadings
{
    protected $carTester;

    public function __construct(Collection $carTester)
    {
        $this->carTester = $carTester;
    }

    public function collection()
    {
        return $this->carTester;
//        return collect([
//            [
//                'name' => 'Povilas',
//                'surname' => 'Korop',
//                'email' => 'povilas@laraveldaily.com',
//                'twitter' => '@povilaskorop'
//            ],
//            [
//                'name' => 'Taylor',
//                'surname' => 'Otwell',
//                'email' => 'taylor@laravel.com',
//                'twitter' => '@taylorotwell'
//            ]
//        ]);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Surname',
            'Tel',
            'Email',
            'Cars',
            'Showrooms'
        ];
    }
}
