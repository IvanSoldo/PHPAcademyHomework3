<?php


if (isset($_FILES['userFile'])) {

    $extensions = array('jpg', 'jpeg', 'png');
    $fileExtension = explode('.',$_FILES['userFile']['name']);
    $fileType = end($fileExtension);



    if ($_FILES['userFile']['size'] > 1048576 || $_FILES['userFile']['size'] == 0) {
        echo "Image size to big. Image size must be 1MB at most.";
    } else if (!in_array($fileType, $extensions)) {
        echo "Uploaded file must be an image (png, jpeg or jpg).";
    } else {
        move_uploaded_file($_FILES['userFile']['tmp_name'], 'images/' . $_FILES['userFile']['name']);
        echo "Image uploaded successfully!";
    }


}

?>


<!doctype html>
<html lang="en">
<html>
<body>

<form action="task4.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="userFile" accept=".png, .jpg, .jpeg">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
