<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resize your image here</title>
    <style>
        input[type="file"] {
            height: 27px;
            font-size: 18px;
        }
        input[type="number"] {
            height: 27px;
            font-size: 18px;
            background-color: #e5e5e5;
            border: 1px solid #000;
        }
        input[type="submit"], .back {
            font-size: 18px;
            padding: 5px 15px;
            border-radius: 10px;
            background-color: #77ccff;
            border: 1px solid #000;
            cursor: pointer;
        }
        input[type="submit"]:active, .back:active,
        input[type="submit"]:focus, .back:focus {
            background-color: #77bbff;
        }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" required><br><br>
        <input type="number" name="width" placeholder="Width" required><br><br>
        <input type="number" name="height" placeholder="Height" required><br><br>
        <input type="submit" value="Upload" name="submit">&nbsp;&nbsp;
        <button onclick="history.back(1);" class="back">Back</button>
    </form>
</body>
</html>
<?php
    include("connect.php");
    if (isset($_POST['submit']))
    {
        $extention = array('gif', 'png', 'jpg', 'jpeg');

        $width = $_POST['width'];
        $height = $_POST['height'];
        $filename = $_FILES['image']['name'];
        $filetmp = $_FILES['image']['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));
        $image_name = "img/post/".$filename;

        move_uploaded_file($filetmp, $image_name);

        if(in_array($filecheck, $extention))
        {
            list($source_width, $source_height, $source_type) = getimagesize($image_name);
        
            switch ($source_type)
            {
                case IMAGETYPE_GIF:
                    $image = imagecreatefromgif($image_name);
                    break;
                case IMAGETYPE_JPEG:
                    $image = imagecreatefromjpeg($image_name);
                    break;
                case IMAGETYPE_PNG:
                    $image = imagecreatefrompng($image_name);
                    break;
                default:
                    return false;
            }
            $imgResized = imagescale($image , $width, $height);
            imagejpeg($imgResized, $image_name);
            echo "<br>Image resized successfully";
        }
        else
        {
            echo "<br>Upload Only GIF, PNG, JPG, JPEG file type";
        }
    }
?>