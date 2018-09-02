<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        CREATE TABLE IF NOT EXISTS `forLeaderHappiness`.`boards`
        (
            `bo_id` INT(11) NOT NULL,
            `bo_title` VARCHAR(25) NOT NULL,
            `bo_content` TEXT NOT NULL,
            `bo_register_no` INT(16) NOT NULL,
            `bo_registered_date` TIMESTAMP NOT NULL,
            `hit` INT(10) NOT NULL,
        PRIMARY KEY (`bo_id`),
        UNIQUE INDEX `bo_title_UNIQUE` (`bo_title` ASC),
        INDEX `bo_register_no_fk_idx` (`bo_register_no` ASC),
        CONSTRAINT `bo_register_no_fk`
            FOREIGN KEY (`bo_register_no`)
            REFERENCES `forLeaderHappiness`.`students` (`stu_no`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION)ENGINE = InnoDB;
         */
        Schema::create('boards', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // columns
            $table->increments('bo_id');
            $table->string('bo_title', 25);
            $table->text('bo_content');
            $table->integer('bo_register_no')->unsigned();
            $table->integer('hit');
            $table->timestamp('bo_registered_date')->nullable();

            // unique key
            $table->unique('bo_title');

            // foreign key
            $table->foreign('bo_register_no')
                ->references('stu_no')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // DROP TABLE IF EXISTS `forLeaderHappiness`.`boards` ;
        Schema::dropIfExists('boards');
    }
}
