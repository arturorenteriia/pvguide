<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RealEstates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('realestates', function (Blueprint $table) {
        $table->increments('id');
        $table->string('Type', 10);
        $table->string('SallerName', 100);
        $table->string('Email', 100);
        $table->string('Phone', 20);
        $table->string('Category', 200);
        $table->integer('Badrooms');
        $table->integer('Bathrooms');
        $table->string('AskingPrice',10);
        $table->string('HouseSF',100);
        $table->string('LandSF',100);
        $table->string('Age',100);
        $table->string('View',100);
        $table->string('Parkining',100);
        $table->string('Description',400);
        $table->string('Photo1',100);
        $table->string('Photo2',100);
        $table->string('Photo3',100);
        $table->string('Photo4',100);
        $table->string('Photo5',100);
        $table->string('Feature1',100);
        $table->string('Feature2',100);
        $table->string('Feature3',100);
        $table->string('Feature4',100);
        $table->string('Feature5',100);
        $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
