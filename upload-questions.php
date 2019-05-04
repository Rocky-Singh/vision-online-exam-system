<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Question Paper</title>
    <link rel="stylesheet" href="./res/css/upload-questions.css" />

</head>

<body>
    <?php
    include_once './res/html/header.html';
    ?>
    <div class="main-container">
        <?php
        include_once './res/html/profile.html';
        ?>
        <div class="upload-container">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div id="upload-question">
                    <div class="margin-20 flex-container">
                        <div class="give-height"> Upload question paper:</div>
                        <div class="give-height"> Choose Subject:</div>
                        <div class="give-height"> Test Name: </div>
                    </div>

                    <div class="margin-20">
                        <div class="give-height "> <input  type="file" name="fileToUpload" id="fileToUpload"> </div>
                        <div class="give-height">
                            <select id="select-subject" class="color-button " onchange="updateTest()"> </select>
                        </div>
                        <div class="give-height">
                            <input type="text">
                        </div>
                       
                    </div>
                    
                </div>
                <div class="margin-20" style="margin-top: 1px;"> <input class="all-button" type="submit" value="Upload Paper" name="submit"></div>
            </form>
        </div>
    </div>
    <script src="./res/js/select-exam.js"></script>
</body>

</html>