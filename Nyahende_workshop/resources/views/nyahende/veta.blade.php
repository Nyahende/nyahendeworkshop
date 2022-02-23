<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyahende Workshop | Veta</title>
</head>
    <link rel="stylesheet" href="{{asset('/css/nyahende.css')}}"/>
    <script src="{{asset('/js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>  
     <script src="{{asset('/js/phone.js')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/nyahende.js')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.theme.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/css/jquery-ui.structure.min.css')}}" type="text/javascript"></script>    
     <script src="{{asset('/js/jqueryui/jquery-ui.js')}}" type="text/javascript"></script>
<body>
    <div class="welcomeheader" style="background:url({{asset('backgroundimages/bubbles.jpg')}})">
        <h1>WELCOME TO THE NYAHENDE WORKSHOP <br>
       <span class="official"> OFFICIAL WEBSITE</span></h1>
       <button type="" name="menubtn" class="menubtn" >Menu</button>
       <!-- <span class="searchspan"> <input type="search" name="search" class="search" placeholder="Search">
       <button type="submit" name="srchbtn" class="srchbtn" >Search</button>
       </span> -->
    </div>
<div class="navigationbar">
    <ul>
        <li class="navli"><a href="main"> Home</a></li>
        <li class="navli"><a href="products"> Products</a></li>
        <li class="navli"><a href="services"> Services</a></li>
        <li class="navli"><a href="achievements"> Achievements</a></li>
        <li id="livestock" class="navli"><a href="#"> Livestock
            <div class="livestockul">
                <ul>
                    <li class="livestockli"><a href="livestockkeeping"> Nutritions and Feeding</a></li>
                    <li class="livestockli"><a href="typesofchicken"> Types of Chicken</a></li>
                    <li class="livestockli"><a href="diseases"> Diseases</a></li>
                </ul>
            </div>
            </a></li>
        <li class="navli"><a href="contacts"> Contacts</a></li>
    </ul>
</div>

<div class="back-display" style="background:url({{asset('backgroundimages/snowflakes.jpg')}});height:450">
<div class="servicedesc" style="background:url({{asset('backgroundimages/moon.jpg')}})" >
<div class="thisdesc" >
    <h1 class="productheading" style="color:white">Our biggest achievements </h1>
    <div class="paginationachieve">
    <a href="achievements" style="color:white">1</a>
    <a href="veta" style="color:white">2</a>
    <a href="patent"style="color:white" >3</a>
    <a href="tuzo" style="color:white">4</a>
    <a href="costech" style="color:white">5</a>
    <a href="babies" style="color:white">6</a>
    <a href="ventilator" style="color:white">7</a>
</div>
        <p class="servicespara" style="padding:10px;color:white">In the year of 2021 during 45th Dar es Salaam international trade fair,
         we were delighted to receive this award from vocational education and training authority(VETA).
         VETA recognized us as among the promoters of vocational education and training during their 45th Anniversary.
        </p>
        <div class="achievementsimg">
    <img src="{{asset('/images/veta.jpg')}}" alt="" class="vetaimg">
</div> 

</div>
</div>
</div>
</body>
</html>