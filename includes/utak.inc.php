<?php
include_once 'functions.inc.php';
include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $cim = $_POST['cim'];
    $leiras = $_POST['leiras'];
    $userID = $_POST['uid'];
    $date = date("Y-m-d");
    $allapot = 0;

    if(emptyUtak($cim, $leiras) == true)
    {
      header("location: ../utvonalak.php?error=emptyinput");
      exit();
    }

    // We grab the core file
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    // We could also have shortened this by writing:
    // $fileName = $file['name'];
    // Since we grabbed the core file at the start...

    // Here we get the file extension of the uploaded file
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // Here WE decide which file types we will allow
    $allowed = array('jpg', 'jpeg', 'png');

    // Now we check if the file is an allowed file type
    if (in_array($fileActualExt, $allowed)) {
      // Here we check for upload errors
      if ($fileError === 0) {
        // Here we check for file size
        if ($fileSize < 1000000) {
          // Here we create a new unique name for the file
          $fileNameNew = "profile_". $userID . "_" . $date . "_Utvonal" . "." . $fileActualExt;
          // Here we create the path the file should get uploaded to
          $fileDestination = '../feltoltesek/utvonalak/' . $fileNameNew;
          // Now we upload the file!
          move_uploaded_file($fileTmpName, $fileDestination);
          // And send the user back to the front page
        }
        else {
          echo "A fájlod túl nagy!";
        }
      }
      else {
        echo "Valami hiba történt a fájl feltöltése közben!";
      }
    }
    else {
      echo "Nem tudsz ilyen fájlkiterjesztést feltöletni!";
    }
   
    uploadUt($conn, $cim, $leiras, $userID, $date, $fileActualExt ,$allapot);
}
