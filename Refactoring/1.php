<?php
class Rectangle {
	public int $height;
	public int $width;
	public int $depth;
	public int $area;
	public int $volume;
	
	public function setValue(string $name, int $value){
		
		if($name == 'height'){
			return $this->setHeight($value);
		}
		if($name == 'width'){
			return $this->setWidth($value);
		}
		if($name == 'depth'){
			return $this->setDepth($value);
		}
	}
	
	public function setProperties(){
		$this->setArea();
		$this->setVolume();
	}

	public function setHeight($value){
		return $this->height = $value;
	}

	public function setWidth($value){
		return $this->width = $value;
	}

	public function setDepth($value){
		return $this->depth = $value;
	}

	public function setArea(){
		$this->area = $this->height * $this->width;
	}

	public function setVolume(){
		$this->volume = $this->height * $this->width * $this->depth;
	}

}

?>