<?php

use Illuminate\Database\Seeder;

use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Cras quisque platea tempor id.';
        $t2 = 'Risus parturient at.';
        $t3 = 'Tempus condimentum et pharetra leo dis orci.';
        $t4 = 'Dis pretium a facilisi vel auctor.';

        $d1 = [
        	'title' => $t1,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.',
        	'channel_id' => rand(1,8),
        	'user_id' => 1,
        	'slug' => str_slug($t1)
        ];

        $d2 = [
        	'title' => $t2,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.',
        	'channel_id' => rand(1,8),
        	'user_id' => 2,
        	'slug' => str_slug($t1)
        ];

        $d3 = [
        	'title' => $t3,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.',
        	'channel_id' => rand(1,8),
        	'user_id' => 2,
        	'slug' => str_slug($t1)
        ];

        $d4 = [
        	'title' => $t4,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.',
        	'channel_id' => rand(1,8),
        	'user_id' => 1,
        	'slug' => str_slug($t1)
        ];


        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);

    }
}
