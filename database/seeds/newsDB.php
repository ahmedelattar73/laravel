<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i++) {
            $add            = new News;
            $add->title     = 'News title number ' . rand(0, 9);
            $add->add_by    = 1;
            $add->desc      = 'News description number ' . rand(0, 9);
            $add->content   = 'News content number ' . rand(0, 9);
            $add->status    = 'active';
            $add->save();
        }
    }
}
