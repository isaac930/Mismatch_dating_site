<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->text('name');
            $table->text('contact');
            $table->text('email');
            $table->text('chatment_email');
            $table->text('chatment_name');
            $table->text('chatment_contact');
            $table->text('post');
            $table->text('image_path');
            $table->text('chatment_image_path');
            $table->string('reply_status')->default('not replied');
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
        Schema::dropIfExists('chats');
    }
}
