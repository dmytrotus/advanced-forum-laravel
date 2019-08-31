<?php

use Illuminate\Database\Seeder;

use App\Reply;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $r1 = [
        	'user_id' => 1,
        	'discussions_id' => 1,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.'
        ];

        $r2 = [
        	'user_id' => 1,
        	'discussions_id' => 2,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.'
        ];

        $r3 = [
        	'user_id' => 2,
        	'discussions_id' => 3,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.'
        ];

        $r4 = [
        	'user_id' => 1,
        	'discussions_id' => 4,
        	'content' => 'Nisl cras mi accumsan ac praesent tempor nec egestas magnis hac elit nisi tempus vestibulum non ultricies in blandit neque taciti euismod condimentum consectetur venenatis morbi condimentum morbi dictum.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);

    }
}
