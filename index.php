<?php

if (isset($_FILES['inputImage'])) {
    $inputImage = $_FILES['inputImage'];
    if ($inputImage['size'] != 0) {
        $imageTmpName = $inputImage['tmp_name'];
        $path = move_uploaded_file($imageTmpName, 'images/' . $inputImage['name']);
        echo $path;

        $img = imagecreatefromjpeg('images/' . $inputImage['name']);
        print_r(imagejpeg($img, './images/output.jpg', 30)); // give option to user to select % of compression

        unlink('./images/' . $inputImage['name']);

        $imageName = basename('output.jpg');
        $imageOutputPath = './images/' . $imageName;
        if(!empty($imageName) && file_exists($imageOutputPath)) {
            header('Cache-Control: public');
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename=' . $imageName);
            header('Content-Type: image/jpeg');
            header('Content-Transfer-Encoding: binary');

            readfile($imageOutputPath);
            exit;
        }
        else {
            echo "No file exists";
        }

    } else {
        echo "Upload the image";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Upload image</h3>
        <input type="file" name="inputImage" id="inputImage">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
