<html>
    
<head>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into%20Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
        <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/star-rating.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6b9351e8b5.js" crossorigin="anonymous"></script>
        <script async defer crossorigin="anonymous" src="../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
       <title>॥स्वतंत्रता दिवस की हार्दिक शुभकामनाए॥</title>
        <link href="assets/img/favicon.png" rel="icon">
        <link rel="manifest" id="manifest-placeholder">
        
        <style>
            .profile-pic .profile-pic-img {
                width: 150px;
                margin-top: 75px;
                border-radius: 8px;
                border: 2px solid #ffffff;
            }

            .name,
            .firstmname {
                padding: 2px 10px;
                font-size: 14px;
                color: #ffffff;
                letter-spacing: 0.6px;
                 margin-bottom: 10px;
                margin: 0;
                margin-bottom: 7px;
                text-transform: uppercase;
                text-align: left;

            }
            .firstmname {
                font-size: 18px;
                margin-bottom: 14px;
                margin-top: 10px;
            }
            .name {
                text-transform: capitalize;
                font-size: 16px;
                line-height: 20px;
            }

        </style>
    </head>
    <body>
        <a class="rope" style="text-decoration:none;" href="#" onclick="play()">
        <script>
            function play(){
                 var audio = document.getElementById("audio");
                 audio.play();
                           }
             </script>
          <audio id="audio" src="a.mp3"></audio>
       

       <div class="page-wrapper" id="home-section">
            <div class="page-details">
                <img width="30%" src="assets/img/logo.png">
                

                <span style="font-size:22px; color:#138808;"><marquee><b><i>“ Wish you Happy Independence Day!!”</b></i></marquee></span><br>

                
 
                <h1 style="color: black;"><?php $a = $_GET["n"]; $b = str_replace('-', ' ', $a); echo $b; ?></h1>
                <img src="assets/img/kiTarafSee108.png?v=5?v=4" width="60%">
                <div class="p-10"></div>
                    <img src="assets/img/newyear1328.png?v=5?v=11" width="80%" height="auto" style="animation: swing 3s infinite"><br>
                    <img src="assets/img/mahane5bf.gif?v=12" width="60%">
                    <div style="display: flex;width: c0%;margin:0 auto;">
                    <!-- <img src="img/15th5e5bf.gif?v=12" width="50%">
                    <img src="img/gge5bf.gif?v=12" width="50%"> -->
                    </div>

                    <div class="p-10"></div>

                    <span style="font-size:22px;color:#FF9933;"><marquee><b><i>“ Wish you Happy Independence Day!!”</b></i></marquee></span><br>

                    <div class="p-10"></div>
               
                </a>
                </div>
            </div>
        </div>
        
            
        <div class="copyright-wrapper">
            <div style="padding: 0px 10px">
                <h4>Enter Your Name Here</h4>
            <form action='action.php' method='get'>
            <div class="whatsapp-input">
                
                <div class="input-wrapper">
                    <input type="text" class="input" name='n' placeholder="Enter Name Here" />
                </div>
                <div  >
                <button class="whatsapp-button"  name="submit" type="submit">Create</button>
            </div>
            </div>
        </form>
        <p style="font-size: 12px;">Developed by Dharm Vachhani</p>
        <p style="font-size: 12px; "><a href="http://www.rachanawebtech.in" style="color: #000080;" target="_blank"><b>Rachana WebTech</b></a></p>
    </div>
        </div>
    <!-- The image Modal -->
    <div id="imageModal" class="modal">
        <span class="close" id="imageModalClose">&times;</span>
        <img class="modal-content fadeIn" id="img01">
        <div id="caption"></div>
    </div>
    <!-- The share Modal -->
    <div id="shareModal" class="modal share-modal">
        <div class="share-form fadeInUpBig">
            <div class="share-form-header">
                <h3 class="share-form-header-text">Share Profile</h3>
                <span class="close" id="shareModalClose">&times;</span>
            </div>
            <div class="share-form-buttons-container">
                <p>Share my Digital vCard in your network.</p>
                <div class="share-buttons-heading">
                    <img src="assets/img/tild-arrow.svg" class="share-buttons-arrow">
                    <div class="share-buttons-heading-text">Share my Digital vCard</div>
                </div>
                <ul class="share-buttons">
                    <li class="share-button">
                        <a href="javascript:;" onclick="handleDirectWhatsappShare(this)">
                            <i class="share-button-whatsapp fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="sms:?body=http://mycrd.in/mycrd">
                            <i class="share-button-sms fas fa-comment-dots"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://mycrd.in/mycrd&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                            <i class="share-button-facebook fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <a target="_blank" href="https://twitter.com/intent/tweet?text=http://mycrd.in/mycrd" data-size="large">
                            <i class="share-button-twitter fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="share-button">
                        <i class="share-button-skype fab fa-skype"></i>
                    </li>
                    <li class="share-button">
                        <i class="share-button-pinterest fab fa-pinterest-p"></i>
                    </li>
                    <li class="share-button">
                        <i class="share-button-linkedin fab fa-linkedin-in"></i>
                    </li>
                    <li class="share-button">
                        <i class="share-button-mail fas fa-envelope"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="assets/js/star-rating.js"></script>
    <script src="assets/js/script.js"></script>
    
</body>

</html>
