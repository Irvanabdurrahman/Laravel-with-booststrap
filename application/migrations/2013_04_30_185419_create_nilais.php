<?php

class Create_Nilais {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nilais', function($table) {
            $table->increments('id');
            $table->text('nim');
            $table->text('nama');
            $table->text('matakuliah');
            $table->string('tahun', 20);
            $table->integer('semester');
            $table->String('nilai', 10);
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nilais');
	}

}