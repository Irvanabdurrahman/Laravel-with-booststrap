<?php

class Nilai extends Eloquent {

public function mahasiswa()
	{
      return $this->belongs_to('Mahasiswa', 'nim');
    } 
	
public function mahasiswas()
	{
        return $this->has_many('Mahasiswa');
    }
}
?>
