<?php

class Create_Mahasiswas {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('mahasiswas', function($table) {
            $table->increments('id');
            $table->text('nim');
            $table->text('nama');
            $table->text('alamat');
            $table->timestamps("created_at");
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mahasiswas');
	}

}