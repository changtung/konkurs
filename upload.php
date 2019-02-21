<?php
   // Edit upload location here
   $destination_path = getcwd().DIRECTORY_SEPARATOR.'uploaded'.DIRECTORY_SEPARATOR;

   $result = 0;
   $fname = basename($_FILES['myfile']['tmp_name']);
   $target_path = $destination_path . basename( $_FILES['myfile']['tmp_name']);

   if(file_exists($target_path)) {
    chmod($target_path,0755); //Change the file permissions if allowed
    unlink($target_path); //remove the file
    }
   if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }

   sleep(1);
?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>,'<?php echo $fname; ?>');</script>
