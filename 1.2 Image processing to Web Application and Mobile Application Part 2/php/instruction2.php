<!-- Author: Janwin Toralba -->
<!-- execute this code in XAMPP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image processing to Web Application and Mobile Application Part 1</title>

    <!-- Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Style -->
    <style>
        * { padding: 0; margin: 0; }
        .body { padding: 5rem 15rem; }

        .album { 
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-top: 2.5rem; 
            padding: 0;
        }

        .album img {
            width: 30%;
            margin: 0.5rem;
        }

        .margin {
            margin: 0 !important;
            padding: 0 !important;
            height: 5rem;
            background-color: rgb(49, 49, 49);
        }
    </style>
</head>
<body>

    <div class="margin"></div>
    
    <div class="body">
        <h1>Instruction #2</h1>
        <p>Create a <strong>PHP file showing 10 images</strong> arranges on your browsers. You can add caption, design, and resize images and must follow the principles of graphics and layout.</p>
        <?php
            $text = '<div class="album">';

            for ($i = 10; $i > 0; $i--) {
                $text .= '<img src="../img/card-img-' . $i . '.jpg" alt="image-collection">';
            }

            $text .= '</div>';
            echo $text;
        ?>
    </div>

    <div class="margin"></div>
</body>
</html>