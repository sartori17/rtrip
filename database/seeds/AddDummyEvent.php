<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Demo Event-1', 'start_date'=>'2019-06-11', 'end_date'=>'2019-06-12', 'user'=>'1','kids_under_two'=>'0','kids_under_six'=>'1','adults'=>'5','bags'=>'1','comments'=>''],
            ['title'=>'Demo Event-2', 'start_date'=>'2019-06-11', 'end_date'=>'2019-06-13', 'user'=>'1','kids_under_two'=>'2','kids_under_six'=>',','adults'=>'9','bags'=>'0','comments'=>''],
            ['title'=>'Demo Event-3', 'start_date'=>'2019-06-14', 'end_date'=>'2019-06-14', 'user'=>'1','kids_under_two'=>'0','kids_under_six'=>',','adults'=>'2','bags'=>'0','comments'=>''],
            ['title'=>'Demo Event-3', 'start_date'=>'2019-06-17', 'end_date'=>'2019-06-17', 'user'=>'1','kids_under_two'=>'5','kids_under_six'=>'0','adults'=>'2','bags'=>'0','comments'=>''],
        ];
        foreach ($data as $key => $value) {
            Event::create($value);
        }
    }
}
