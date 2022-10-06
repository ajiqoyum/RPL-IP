<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buses = [
            [
                'name' => 'Dokter 1',
                'bus_code' => 'Psikolog',
                'from' => 'Jakarta',
                'to' => 'Jakarta Selatan',
                'arrival_days' => 'Every day',
                'arrival_time' => '09:00',
                'fare' => '100',
                'driver_name' => 'RS JKT 1',
                'status' => '1',
                'seats' => '10',
            ],
            [
                'name' => 'Dokter 2',
                'bus_code' => 'Psikiater',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Every day except sunday',
                'arrival_time' => '12:00',
                'fare' => '300',
                'driver_name' => 'RS JKT 1',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Dokter 3',
                'bus_code' => 'Psikiater',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Every day except sunday',
                'arrival_time' => '12:00',
                'fare' => '300',
                'driver_name' => 'RS JKT 3',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'Dokter 4',
                'bus_code' => 'Psikiater',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Every day except sunday',
                'arrival_time' => '12:00',
                'fare' => '350',
                'driver_name' => 'RS JKT 2',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'Dokter 5',
                'bus_code' => 'Psikolog',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Every day except sunday',
                'arrival_time' => '12:00',
                'fare' => '255',
                'driver_name' => 'RS JKT 2',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'Dokter 6',
                'bus_code' => 'Psikolog',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Wednesday',
                'arrival_time' => '12:00',
                'fare' => '345',
                'driver_name' => 'RS JKT 4',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Dokter 7',
                'bus_code' => 'Psikolog',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Thursday',
                'arrival_time' => '12:00',
                'fare' => '550',
                'driver_name' => 'RS JKT 1',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Dokter 8',
                'bus_code' => 'Psikiater',
                'from' => 'Jakarta',
                'to' => 'Jakarta',
                'arrival_days' => 'Everyday',
                'arrival_time' => '12:00',
                'fare' => '235',
                'driver_name' => 'RS JKT 3',
                'status' => '1',
                'seats' => '50',
            ],

        ];
        foreach ($buses as $index => $bus) {
            $i = $index + 1;
            $bus = Bus::factory()->create([
                'name' => $bus['name'],
                'bus_code' => $bus['bus_code'],
                'img' =>  'images/bus/' . $i . '.jpg',
                'from' => $bus['from'],
                'to' => $bus['to'],
                'arrival_days' => $bus['arrival_days'],
                'arrival_time' => $bus['arrival_time'],
                'fare' => $bus['fare'],
                'driver_name' => $bus['driver_name'],
                'status' => $bus['status'],
                'seats' => $bus['seats'],
            ]);
        }
    }
}
