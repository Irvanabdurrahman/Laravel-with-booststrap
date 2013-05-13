<?php
class Mahasiswa extends Eloquent {

public function nilai()
	{
      return $this->belongs_to('Nilai', 'nim');
    } 
	
public function nilais()
	{
        return $this->has_many('Nilai');
    }
}
?>

