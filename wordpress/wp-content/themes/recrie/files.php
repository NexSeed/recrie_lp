<?php 
  $serial_no = $_GET['id'];
  $uploads = $_GET['uploads'];

  $uploaded_files = glob($uploads['basedir'].'/wp_dndcf7_uploads/*');
  $serial_files = [];

  foreach($uploaded_files as $upload) 
  {
    $containing_dir = explode('/', $upload);

    if($containing_dir[7] == $serial_no) 
    {
      if (is_dir($upload)){
      
        if ($dh = opendir($upload)){
          while (($file = readdir($dh)) !== false){
            array_push($serial_files, $file);
          }
          closedir($dh);
        }
      }
    }
  }
  echo json_encode($serial_files);
?>