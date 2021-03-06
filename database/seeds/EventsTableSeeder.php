<?php

use App\Models\Event;
use App\Models\Meetup;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        Meetup::get()->each(function (Meetup $meetup) {
            factory(Event::class, 20)->create([
                'meetup_id' => $meetup->id,
            ]);
        });
    }
}
