<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $events = [
            [
                'event' => 'Cita #1',
                'start_date' => '2022-12-16 08:00',
                'end_date' => '2022-12-16 11:00',
            ],
            [
                'event' => 'Cita #2',
                'start_date' => '2022-12-17 10:00',
                'end_date' => '2022-12-17 11:00',
            ],
            [
                'event' => 'Cita #3',
                'start_date' => '2022-12-19 08:00',
                'end_date' => '2022-12-19 11:00',
            ],
            [
                'event' => 'Cita #4',
                'start_date' => '2022-12-20 09:00',
                'end_date' => '2022-12-20 11:00',
            ],
            [
                'event' => 'Cita #5',
                'start_date' => '2023-07-20 09:00',
                'end_date' => '2022-12-20 11:00',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}