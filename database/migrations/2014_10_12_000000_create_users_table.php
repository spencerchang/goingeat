<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('mb_members', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name', 50);
            $table->string('nickname', 100)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('phone_ext', 20)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->enum('mobile_verify', ['y', 'n'])->default('n');
            $table->string('email', 255);
            $table->enum('email_verify', ['y', 'n'])->default('n');
            $table->string('password', 255);
            $table->rememberToken();
            $table->enum('review_verify', ['y', 'n'])->default('n');
            $table->integer('country')->unsigned();
            $table->integer('zipcode')->unsigned();
            $table->string('city', 50)->nullable();
            $table->string('dist', 50)->nullable();
            $table->string('address', 150)->nullable();
            $table->bigInteger('recommender')->unsigned();
            $table->enum('status', ['normal', 'deny'])->default('normal');
            $table->string('create_ip', 50);
            $table->timestamps();
            $table->softDeletes();

            // for index
            $unique_array = array(
                'id',
                'email'
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
                'mobile_verify',
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
        Schema::drop('mb_members');
    }

}

/*
 * 
CREATE TABLE `mb_members` (
  `member_id` bigint(50) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(50) NOT NULL COMMENT '姓名',
  `nickname` varchar(100) DEFAULT NULL COMMENT '暱稱',
  `phone` varchar(50) DEFAULT NULL COMMENT '電話',
  `phone_ext` varchar(20) DEFAULT NULL COMMENT '電話分機',
  `mobile` varchar(50) DEFAULT NULL COMMENT '手機',
  `mobile_verify` enum('y','n') NOT NULL DEFAULT 'n' COMMENT '手機驗證',
  `email` varchar(200) NOT NULL COMMENT '信箱',
  `email_verify` enum('y','n') NOT NULL DEFAULT 'n' COMMENT '信箱驗證',
  `password` varchar(255) DEFAULT NULL COMMENT '密碼',
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'user_token',
  `review_verify` enum('y','n') NOT NULL DEFAULT 'n' COMMENT '人工驗證',
  `country` int(10) unsigned DEFAULT NULL COMMENT '國碼',
  `zipcode` int(10) unsigned DEFAULT NULL COMMENT '郵遞區號',
  `city` varchar(50) DEFAULT NULL COMMENT '城市',
  `dist` varchar(50) DEFAULT NULL COMMENT '鄉鎮區',
  `address` varchar(150) DEFAULT NULL COMMENT '地址',
  `recommender` bigint(50) DEFAULT NULL COMMENT '推薦人id',
  `status` enum('normal','deny') NOT NULL DEFAULT 'normal' COMMENT '會員狀態',
  `create_ip` varchar(20) DEFAULT NULL COMMENT '創建帳號ip',
  `create_time` datetime DEFAULT NULL COMMENT '創建時間',
  `update_time` datetime DEFAULT NULL COMMENT '變更時間',
  `visible` enum('y','n') DEFAULT 'y' COMMENT '假刪除',
  `delete_time` datetime DEFAULT NULL COMMENT '刪除時間',
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `member_id` (`member_id`),
  KEY `name` (`name`),
  KEY `nickname` (`nickname`),
  KEY `phone` (`phone`),
  KEY `mobile` (`mobile`),
  KEY `create_ip` (`create_ip`),
  KEY `create_time` (`create_time`),
  KEY `visible` (`visible`),
  KEY `recommender` (`recommender`),
  KEY `mobile_verify` (`mobile_verify`),
  KEY `email_verify` (`email_verify`),
  KEY `review_verify` (`review_verify`),
  KEY `country` (`country`),
  KEY `city` (`city`),
  KEY `dist` (`dist`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='會員資料'
 */