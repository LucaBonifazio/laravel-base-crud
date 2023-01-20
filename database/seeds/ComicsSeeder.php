<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $data = new Comic();
            $data->title = $comic['title'];
            $data->description = $comic['description'];
            $data->thumb = $comic['thumb'];
            $data->price = $comic['price'];
            $data->series = $comic['series'];
            $data->sale_date = $comic['sale_date'];
            $data->type = $comic['type'];
            $data->save();
        }
    }
}
