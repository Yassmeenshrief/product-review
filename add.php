<?php
	if (isset($_POST['submit'])){
		$file = $_FILES['file'];

		$fileName = $_FILES ['file']['name'];
		$fileName = $_FILES ['file']['tmp_name'];
		$fileName = $_FILES ['file']['size'];
		$fileName = $_FILES ['file']['error'];
		$fileName = $_FILES ['file']['type'];

		$fileExt = explode ('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array ('jpg', 'jpeg', 'png', 'pdf');

		if (in_array($fileActualExt, $allowed)) {
				if ($fileError === 0){
					if ($fileSize < 1000000){

					} else 
						echo "File is too big !!!";
				}

					} else {
						echo "There was an error while uploading the photo :'(((";
				}
					} else {
						echo "You can't upload files of this type :( ";
		}


	}