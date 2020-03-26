<?php

use Illuminate\Database\Seeder;

use App\Model\Question;
use App\Model\Category;
use App\User;
use App\Model\Reply;
use App\Model\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(User::class,10)->create();
       factory(Category::class,5)->create();
       factory(Question::class,10)->create();
       factory(Reply::class,50)->create()->each(function($reply) {
              return $reply->like()->saveMany(factory(Like::class, 10)->make());
       });
    }
}
