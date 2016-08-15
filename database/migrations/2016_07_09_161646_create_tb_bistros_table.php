<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbBistrosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tb_bistros', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->string('name', 50);
            $table->string('nickname', 100)->nullable();
            $table->text('describe');
            $table->string('phone', 50)->nullable();
            $table->string('phone_ext', 20)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->enum('mobile_verify', ['y', 'n'])->default('n');
            $table->string('email', 255);
            $table->enum('email_verify', ['y', 'n'])->default('n');
            $table->enum('review_verify', ['y', 'n'])->default('n');
            $table->integer('country')->unsigned();
            $table->integer('zipcode')->unsigned();
            $table->string('city', 50)->nullable();
            $table->string('dist', 50)->nullable();
            $table->string('address', 150)->nullable();
            $table->bigInteger('recommender')->unsigned();
            $table->float('rank')->unsigned();
            $table->enum('status', ['normal', 'deny'])->default('normal');
            $table->string('create_ip', 50);
            $table->timestamps();
            $table->softDeletes();

            // for index
            $unique_array = array(
                'id'
            );

            foreach ($unique_array as $u) {
                $table->unique($u);
            }

            $index_array = array(
                'name',
                'nickname',
                'phone',
                'mobile',
                'create_ip',
                'created_at',
                'updated_at',
                'deleted_at',
                'recommender',
                'rank',
                'mobile_verify',
                'email',
                'email_verify',
                'review_verify',
                'country',
                'city',
                'dist',
                'status'
            );

            foreach ($index_array as $i) {
                $table->index($i);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('tb_bistros');
    }

}
