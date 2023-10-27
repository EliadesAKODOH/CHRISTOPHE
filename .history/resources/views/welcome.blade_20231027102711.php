<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <header class="header">
        <div>
            <img src="18.png" alt="LogoDgi" class="logo">
        </div>
        <div>
            <ul>
                <i>
                <li>ANNIVERSAIRE</li>
                <li>MARIAGE</li>
                <li>DOTE</li>
                <li>DINER</li>
                <li>SUPRISE</li>
                <li>EMBALLAGE</li>
                <li>BAPTEME</li>
                <li>ENTERREMENT</li>
            </i>
            </ul>
            </div>
            <center><p><i><b>NOUS SOMMES DISPONIBLE POUR EMBELLIR TOUT VOS EVENEMENTS</b></i></p></center>
        </header>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="scrolling-text"><i>BIENVENUE A CHRIST DECOR </i></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <center><h1><i> NOUS ASSURONS L'EMBELLISSEMENT DE VOS EVENEMENTS </i></h1></center>
            </div>
        </div>
    </div>
    <div class="image-container">
        <img src="{{asset()}} 13.jpg" alt="Image 1">
        <img src="14.jpg" alt="Image 2">
        <img src="15.jpg" alt="Image 3">
        <img src="16.jpg" alt="Image 4">
        <img src="4.jpg" alt="Image 4">
        <img src="11.jpg" alt="Image 4">
        <img src="6.jpg" alt="Image 4">
        <img src="7.jpg" alt="Image 4">
    </div>

</body>

</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500&family=EB+Garamond:ital,wght@1,700;1,800&family=Roboto:ital,wght@0,400;1,300;1,400&display=swap');


*{
    margin: 0;
    box-sizing: border-box;
}
body{
   background: linear-gradient(100deg, rgb(255, 255, 255), rgb(102, 175, 105), white);
    height: 110vh;
    background-size: cover;
    background-position: center;
    font-family: 'Cormorant Garamond', serif;
font-family: 'EB Garamond', serif;
font-family: 'Roboto', sans-serif;

}
.header{
    background-color: #baf1d3;
    padding:0px;
}
ul i{
    list-style: none;
    float: right;
    display: flex;
    margin-top: -150px;

}
p{
    margin-top: -40px;
}
ul i li {
    text-decoration:none ;
    color: #000;
    text-transform: uppercase ;
   border: 1px transparent;
   background-color: rgb(177, 228, 177);
   border-radius: 10px;
    margin: 25px;
    font-weight: bold;
}
.principale{
    max-width: 114rem  ;
    margin: 0 auto;
}
@media (max-width:733px) {
    ul li a{
flex-direction: column;
align-items: center;
margin: 0;
left: 20%;
    }
}
.titre h1{
    color: #fff;
    font-weight: bold;
}
.logo{
    width: 200px;
    height: 180px;

}

@media all and (max-width: 290px) {
    .titre {
        top: 40%;
    }

    .button {
        top: 50%;
        flex-direction: column;
        align-items: center;
    }

    .button a {
        margin: 10px 0;
    }
}
.image-container{
    text-align: center;
}
.image-container img{
    display: inline-block;
    margin: 10px;
}
/* CSS */
.scrolling-text {
    white-space: nowrap;
    overflow: hidden;
    animation: scroll-text 20s linear infinite;
}

@keyframes scroll-text {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
.image-container {
    margin-top: 50px;
    margin-block: flex;
}

.image-container img {
    width: 280px;
   height: 300px;

}

</style>
