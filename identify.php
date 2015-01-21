<?php
/**
*		===================================
*		Класс для идентификации типа файлов
*		==================================-
*
*
*		@author 		CherryLLC, 2014-2015
*
*		@license		Закрытая лицензия
*
*
*		@version 		0.0.1.1b
*
**/
	class Identifity {

		public $type;

		public function files() {
			
			if($this->type !== null) {
				switch($this->type) {
					case ".app":
						$type = "img/app.png";
					case ".mp3":
						$type = "img/mp3.png";
					case ".wav":
						$type = "img/wav.png";
					case ".avi":
						$type = "img/avi.png";
					case ".mp4":
						$type = "img/mp4.png";
					case ".pdf":
						$type = "img/pdf.png";
					case ".asy":
						$type = "img/asy.png";
					case ".jpg":
						$type = "img/jpg.png";
					case ".jpeg":
						$type = "img/jpg.png";
					case ".png":
						$type = "img/png.png";

					default:
						$type = "img/unknown.png";
				}
			}

			define(".mp3", "Тип файла: Песня");
			define(".pdf", "Тип файла: Документ");
			define(".png", "Тип файла: Рисунок");
			define(".jpg", "Тип файла: Изображение");
			define("avi", "Тип файла: Фильм");

				echo "That simple class for identify a filetype in Cherry system"; 
		}
	}

$obj = new Identifity();
$obj->files();
?>
