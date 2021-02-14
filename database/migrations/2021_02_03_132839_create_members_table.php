<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('username', 191);
            $table->text('address');
            $table->string('membership_type', 191);
            $table->string('user_category', 191);
            $table->string('membership_status', 191);
            $table->char('national_id', 191);
            $table->string('city', 191);
            $table->string('qualification', 191);
            $table->string('job', 191);
            $table->string('social_status', 191);
            $table->string('nationality', 191);
            $table->string('birthday', 191);
            $table->string('place_of_birth', 191);
            $table->string('gender', 191)->default(null);
            $table->string('religion', 191);
            $table->string('photo_id', 191)->default('/images/members/default-user.png');
            $table->string('national_photo', 191)->default('/images/members/default-user.png');
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
        Schema::dropIfExists('members');
    }
}
