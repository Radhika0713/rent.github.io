<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    public function up()
    {
         Schema::create('Comment', function (Blueprint $table) {
           
            $table->string('Name');
           $table->string('Comment');
            $table->timestamps();
    });
     }

    public function down()
    {
       Schema::drop('Comment');
    }
}