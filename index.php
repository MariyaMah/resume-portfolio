
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="shortcut icon" href="/images/ico.png" type="image/x-png"> <!-- Сделать иконку! -->
	<script type="text/javascript" src="../js/my_js.js"></script>
    <title>Resume-portfolio-ru</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="photo border_col">
                <img src="//mysite/image/photo2.svg" alt="Фото не отображается">
            </div>

             <div class="my_name">
                <center><p class="name_up">Мария Махина</p>
                <p class="web_nadp">Веб-программист</p>
                <p>Здравствуйте! Данный сайт это моё резюме-портфолио.</p></center>
            </div>        

            <div class="kontakt_ap">
                <?php
                    include("include/kontakt_ap.php");
                ?>	
             </div>
        </div>

        <div class="nav_menu" id="nav">
                <?php
                    $page = __FILE__;
                    $name = pathinfo($page);
                    //$punkt =  $name[basename];
                    include("include/menu.php");
                ?>	
        </div>
        <script>
            $(document).ready(function(){
                let sections = $('container'), 
                nav = $("#nav"),            
                otp = nav.height(); 
                $("#nav").on("click","a", function (event) {
                    event.preventDefault();
                    var id  = $(this).attr('href'),
                    top = $(id).offset().top - otp; 
                    $('body,html').animate({scrollTop: top}, 800);
                });
            });

        </script>
        <div class="elements borderDowUp" id="contElements" name="contElements">
                <p>элементы интерфейса</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
            </div>
            <div class="projects borderDowUp" id="contProjectSite" name="contProjectSite">
                <p>проекты</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
                <p>fff</p>
                <p>ffff</p>
                <p>fff</p>
            </div> 
        
        
        <div class="about_me borderDowUp" id="contMe" name="contMe">
            <p>обо мне</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
        </div>

        <div class="kontakts_form borderDowUp" id="contBack" name="contBack">
            <p>контактыfff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
            <p>fff</p>
            <p>ffff</p>
            <p>fff</p>
        </div>
    </div>
    <div id="button_up">^</div>
</body>
</html> 
