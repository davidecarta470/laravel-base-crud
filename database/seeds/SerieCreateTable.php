<?php

use Illuminate\Database\Seeder;
use App\Serie;
use Illuminate\Support\Str;

class SerieCreateTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foreach(config('comics') as $item){
           $new_serie = new Serie();
           $new_serie->title = $item['title'];
           $new_serie->slug = Str::slug($new_serie->title ,'-');
           $new_serie->img = $item['thumb'];
           $new_serie->description = $item['description'];
           $new_serie->price = $item['price'];
           $new_serie->series = $item['series'];
           $new_serie->sale_date = $item['sale_date'];
           $new_serie->type = $item['type'];
           $new_serie->save();
           
       }
    }
}
