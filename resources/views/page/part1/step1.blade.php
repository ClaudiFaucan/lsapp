@extends('layout.basic')

@section('content')



<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
    window.intercomSettings = {
      app_id: "gmvzxcui"
    };
   </script>
   <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/gmvzxcui';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>


<style>

    #intercom-container .intercom-launcher-frame {
   
    left: 20px;
    }

    .h2, h2 {
    font-size: 29px;
    }

    .fluid-slider {
    -webkit-appearance: none;
   
    height: 25px;
    background: #c20042;
    border-radius: 2px;
    margin: auto;
    font-size: 18px;

    position: relative;
    }

    .slidecontainer {
    width: 60%;
    margin: auto;   
    }
    

    .fluid-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    border-radius: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    cursor: pointer;
    background: #fff;
    opacity: 0.65;
    border: 4px solid #c20042;
    position: relative;
    transition: all ease-in-out 0.05s;
    }

    .fluid-slider::-moz-range-thumb {
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    cursor: pointer;
    background: #fff;
    opacity: 0.65;
    border: 4px solid #c20042;
    position: relative;
    transition: all ease-in-out 0.05s;
    }

    .fluid-slider:focus { outline: none; }
    .fluid-slider:active::-webkit-slider-thumb {
    background: transparent;
    }

    .fluid-slider:active::-moz-range-thumb {
    background: transparent;
    }

    .fluid-slider:active + .range-label {
    visibility: visible;
    opacity: 1;
    top: -75px;
    }

    .fluid-slider:before, .fluid-slider::after {
    position: absolute;
    content: '';
    width: 40px;
    padding: 0.5em;
    background: #d0d0d0;
    top: 50%;
    transform: translateY(-50%);
    box-sizing: border-box;
    text-align: center;
    font-weight: bold;
    border-radius: 2px;
    }

    .fluid-slider:before {
    left: -50px;
    content: attr(min);
    }

    .fluid-slider:after {
    right: -50px;
    content: attr(max);
    }

    .range-label {
    position: relative;
    display: block;
    width: 40px;
    height: 40px;
    top: -65px;
    visibility: hidden;
    opacity: 0;
    background: #fff;
    border-radius: 50%;
    
    text-align: center;
    font-weight: bold;
    font-size: 1.1em;
    transform: translateX(-50%);
    box-sizing: border-box;
    border: 6px solid #c20042;
    left: attr(value)20;
    transition: all ease-in .05s;
    z-index: -1;
    }

    .range-label:after {
    position: absolute;
    content: '';
    top: 33px;
    left: 50%;
    transform: translateX(-50%);
    width: 10px;
    height: 8px;
    background-repeat: no-repeat;
    background-image: radial-gradient(circle, white 50%, transparent 50%), radial-gradient(circle, white 50%, transparent 50%), linear-gradient(#c20042, #c20042);
    background-size: 180% 100%, 180% 100%, 100% 100%;
    background-position: 150% 0%, -50% 0%, 100% 100%;
    
    }

    ::-moz-range-track {
    background: #c20042;
    border: 0;
    }

    input::-moz-focus-inner, input::-moz-focus-outer {
    border: 0;
    }

    body {
   background-image: url("{{ URL::asset('ico/backgroundpart1.png') }}");
   background-color: #f7f7f7; 
    text-align: center;
   background-repeat: no-repeat;
    background-size:  100%;
    margin-top: 5%;
    font-family: 'Barlow';
    background-attachment: fixed;
    background-position: bottom right; 
    
    }

    .icochoice {
        height: 100%;
        width: 100%;
        opacity: 0.7;
        
    }

    .icochoice:hover {
        opacity: 1;

    }
    
    
    .colcentered{
   
    flex: 1;
    }
    .question{
        
        
        color: white;
        font-size: 2.75em;
        text-align: left !important;
       
        
    
    }

    @media screen and (max-width: 640px) {
     .row {
       width: 115%
        }
    }

    #cell{
        font-size: 20px;
    }
    @media screen and (max-width: 316px) {
     #cell {
        font-size: 10px;
        }
    }
   








    /*
    Basic input element using psuedo classes
    */
   


    .centerInput{
        margin-top: 5%;
    margin-left: 5%;
    }

    html {
    font-family: 'Barlow';
    width: 100%;
    }

    body {
    margin: 5% auto 0 auto;
    width: 90%;
    max-width: 1125px;
    }

    h1 {
    font-size: 28px;
    margin-bottom: 2.5%;
    line-height: 1.6;
    }

    input,
    span,
    label,
    textarea {
    font-family: 'Barlow', sans-serif;
    display: block;
    margin: 10px;
    padding: 5px;
    border: none;
    font-size: 22px;
    }

    textarea:focus,
    input:focus {
    outline: 0;
    }
    /* questionInput */

    input.questionInput,
    textarea.questionInput {
    font-size: 48px;
    font-weight: 300;
    border-radius: 2px;
    margin: 0;
    border: none;
    width: 80%;
    background: rgba(0, 0, 0, 0);
    transition: padding-top 0.2s ease, margin-top 0.2s ease;
    overflow-x: hidden; /* Hack to make "rows" attribute apply in Firefox. */
    
    }
    /* Underline and Placeholder */

    input.questionInput + label,
    textarea.questionInput + label {
    display: block;
    position: relative;
    white-space: nowrap;
    padding: 0;
    margin: 0;
    width: 10%;
    border-top: 5px solid #f5f8fa;
    -webkit-transition: width 0.4s ease;
    transition: width 0.4s ease;
    height: 0px;
    
    }

    input.questionInput:focus + label,
    textarea.questionInput:focus + label {
    width: 80%;
    }

    input.questionInput:focus,
    input.questionInput:valid {
    padding-top: 35px;
    }

    textarea.questionInput:valid,
    textarea.questionInput:focus {
    margin-top: 35px;
    }

    input.questionInput:focus + label > span,
    input.questionInput:valid + label > span {
    top: -100px;
    font-size: 22px;
    color: #292929;
    }

    textarea.questionInput:focus + label > span,
    textarea.questionInput:valid + label > span {
    top: -150px;
    font-size: 22px;
    color: #292929;
    }

    input.questionInput:valid + label,
    textarea.questionInput:valid + label {
    border-color: #fd1742;
    }

    input.questionInput:invalid,
    textarea.questionInput:invalid {
    box-shadow: none;
    }

    input.questionInput + label > span,
    textarea.questionInput + label > span {
    font-weight: 300;
    margin: 0;
    position: absolute;
    color: #292929;
    font-size: 48px;
    top: -66px;
    left: 0px;
    z-index: -1;
    -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
    transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
    
    }

    input[type="submit"] {
    -webkit-transition: opacity 0.2s ease, background 0.2s ease;
    transition: opacity 0.2s ease, background 0.2s ease;
    display: block;
    opacity: 0;
    margin: 10px 0 0 0;
    padding: 10px;
    cursor: pointer;
    }

    input[type="submit"]:hover {
    background: #EEE;
    }

    input[type="submit"]:active {
    background: #999;
    }

    input.questionInput:valid ~ input[type="submit"], textarea.questionInput:valid ~ input[type="submit"] {
    -webkit-animation: appear 1s forwards;
    animation: appear 1s forwards;
    }

    input.questionInput:invalid ~ input[type="submit"], textarea.questionInput:invalid ~ input[type="submit"] {
    display: none;
    }

    @-webkit-keyframes appear {
    100% {
        opacity: 1;
    }
    }

    @keyframes appear {
    100% {
        opacity: 1;
    }
    }

.clickme {
    background-color: #EEEEEE;
    padding: 8px 20px;
    text-decoration:none;
    font-weight:bold;
    border-radius:5px;
    color: #FFFFFF;
    cursor:pointer;
    font-size: 33px;
}

.danger {
    background-color:#fd1742;
    color: #FFFFFF;
}

.danger:hover {
    background-color:#EB003B;
    color: #FFFFFF;
}

#timeRecall{
    margin-top: 25px; 
}

.formContact{
    font-size: 16px;
    padding-top: 0px;
}

.bodyContainer{
    padding-top: 100px;
}

.checkedbutton{
    opacity: 0.7;
}
.checkedbutton:hover{
    opacity: 1;
}


.boxInput{
    border: none;
    box-shadow: 7px 14px 50px #ddd;
    height: 70px;
    width: 400px;
    font-size: 30px;
    border-radius: 15px;
    text-align: center;
}
@media screen and (max-width: 450px) {
     .boxInput {
        width: 300px;
        }
    }
@media screen and (max-width: 335px) {
     .boxInput {
        width: 200px;
        }
    }
::placeholder { 
    color: #292929;
    opacity: 0.3;
}
</style>



<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lsapp.css') }}">
<script type="text/javascript" src="{{ URL::asset('js/spa.js') }}"></script>
<div class="bodyContainer">

<div>
    <div id="q2" class="question">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4> 
        <h1> Où en êtes-vous dans votre projet immobilier ?</h1>
    </div>

    <div class="row ">
         
        <div id="1" class="column colcentered">
            <a href="#"  onclick="hideStuff('Demande de Renseignements');">
            <img class="icochoice" src="{{ URL::asset('ico/information.png') }}"> 
            </a>
        </div>

        <div id="2" class="column colcentered">
            <a href="#"  onclick="hideStuff('Signature compromis');">
            <img class="icochoice" src="{{ URL::asset('ico/contract.png') }}"> 
            </a>
        </div>
         
    </div>
    <div class="row">
             
        <div id="3" class="column colcentered">
            <a href="#"  onclick="hideStuff('Act Signé');">
            <img class="icochoice" src="{{ URL::asset('ico/stamp.png') }}"> 
            </a>
        </div>

        <div id="4" class="column colcentered">
            <a href="#" onclick="hideStuff('En Recherche');">
            <img class="icochoice" src="{{ URL::asset('ico/search.png') }}"> 
            </a>
        </div>
         


    </div>
</div>
<div id="q3" class="question">
       <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4> 
       <h1> Il s'agit...</h1>
    </div>
<div class="row">
         
    <div id="5" class="column colcentered">
        
        <a href="#" onclick="hideStuff2('Maison');">
        <img class="icochoice" src="{{ URL::asset('ico/house1.png') }}"> 
        </a>
    </div>

    <div id="6" class="column colcentered">
        <a href="#" onclick="hideStuff2('Appartement');">
        <img class="icochoice" src="{{ URL::asset('ico/home.png') }}"> 
        </a>
    </div>
     
</div>
<div class="row">
         
    <div id="7" class="column colcentered">
        <a href="#" onclick="hideStuff3('Terrain');">
        <img class="icochoice" src="{{ URL::asset('ico/office.png') }}"> 
        </a>
    </div>

    <div id="8" class="column colcentered">
        <a href="#" onclick="hideStuff3('Terrain et construction');">
        <img class="icochoice" src="{{ URL::asset('ico/farm.png') }}"> 
        </a>
    </div>
     
    <script type="text/javascript">
            document.getElementById('5').style.display = 'none';
            document.getElementById('6').style.display = 'none';
            document.getElementById('7').style.display = 'none';
            document.getElementById('8').style.display = 'none';
        </script>


</div>

<div id="q4" class="question">
       <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4> 
       <h1> Génial, c'est un beau projet ! Votre bien est-il ...</h1>
    </div>

<div class="row">
         
    <div id="9" class="column colcentered">
        
        <a href="#" onclick="hideStuff4('Ancien');">
        <img class="icochoice" src="{{ URL::asset('ico/ancient.png') }}"> 
        
        </a>
    </div>

    <div id="10" class="column colcentered">
        <a href="#" onclick="hideStuff4('Neuf');">
        <img class="icochoice" src="{{ URL::asset('ico/new.png') }}"> 
        </a>
    </div>

    <div id="11" class="column colcentered">
        <a href="#" onclick="hideStuff4('VEFA');">
        <img class="icochoice" src="{{ URL::asset('ico/sketching.png') }}"> 
        </a>
    </div>

     
    <script type="text/javascript">
            document.getElementById('9').style.display = 'none';
            document.getElementById('10').style.display = 'none';
            document.getElementById('11').style.display = 'none';
            
        </script>


</div>

<div class="question" id="q5">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4>
        <h1  > Vous devez...</h1>
    </div>
<div class="row">
         
    <div id="12" class="column colcentered">
            
        <a href="#" onclick="hideStuff5('avec travaux');">
        <img class="icochoice" src="{{ URL::asset('ico/worker.png') }}"> 
        </a>
    </div>

    <div id="13" class="column colcentered">
        <a href="#" onclick="hideStuff5('sans travaux');">
        <img class="icochoice" src="{{ URL::asset('ico/eco-house.png') }}"> 
        </a>
    </div>
     

   
    <script type="text/javascript">
            document.getElementById('12').style.display = 'none';
            document.getElementById('13').style.display = 'none';
            
            
        </script>


</div>


<div class="question" id="q6">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4>
        <h1> Ce bien sera votre...</h1>
    </div>
<div class="row">
         
    <div id="14" class="column colcentered">
        
        <a href="#" onclick="hideStuff61('R Principale');">
        <img class="icochoice" src="{{ URL::asset('ico/house-1.png') }}"> 
        </a>
    </div>

    <div id="15" class="column colcentered">
        <a href="#" onclick="hideStuff61('R secondaire');">
        <img class="icochoice" src="{{ URL::asset('ico/beach.png') }}"> 
        </a>
    </div>

    <div id="16" class="column colcentered">
        <a href="#" onclick="hideStuff6('R locative');">
        <img class="icochoice" src="{{ URL::asset('ico/rent.png') }}"> 
        </a>
    </div>
     
   
    <script type="text/javascript">
            document.getElementById('14').style.display = 'none';
            document.getElementById('15').style.display = 'none';
            document.getElementById('16').style.display = 'none';
            
        </script>


</div>


<div class="question" id="q7">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4>
        <h1> Qui sera...</h1>
    </div>
<div class="row">
         
    <div id="17" class="column colcentered">
            
        <a href="#" onclick="hideStuff7('nue');">
        <img class="icochoice" src="{{ URL::asset('ico/plans.png') }}"> 
        </a>
    </div>

    <div id="18" class="column colcentered">
        <a href="#" onclick="hideStuff7('meuble');">
        <img class="icochoice" src="{{ URL::asset('ico/room.png') }}"> 
        </a>
    </div>
     
   
    <script type="text/javascript">
            document.getElementById('17').style.display = 'none';
            document.getElementById('18').style.display = 'none';
            
            
        </script>


</div>


<div class="question"   id="q8">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4>
        <h1> Pour laquelle vous espérez un loyer de...</h1>
    </div>

<div class="row">
   
    
        
        <div id="19" class="column colcentered">
                <form>
                        <input id="expectedrent" type="number" name="name" class="boxInput" required autocomplete="off" placeholder="Ex : 900€" />
                        
                        
                </form> 
               
             
            
            <a href="#" onclick="hideStuff8();" id="clickexpectedrent">
            <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
            </a>
        </div>    

   

   
    <script type="text/javascript">
            document.getElementById('19').style.display = 'none';
            
            
        </script>


</div>

<div class="question" id="q9">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4>
        <h1  >Dans la commune de... </h1>
    </div>

<div class="row">
   
    <div id="20" class="column colcentered centerInput">
        <form>
                <input class="boxInput" type="text" name="name"  id="city" required autocomplete="off" placeholder="Ex : Bordeaux" />
                
                
        </form>
        
    
        
        <a href="#" onclick="hideStuff9();" id="clickcity">
        <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
        
        </a>
    </div>    




<script type="text/javascript">

        document.getElementById('20').style.display = 'none';
        
        
    </script>


</div>





<div class="question" id="q10">
        <h4 class="filAriane">Etape 1/3 - Renseignez votre projet</h4>
        <h1  >Vous souhaitez demander un prêt pour un bien dont le prix s'élève à... </h1>
    </div>
<div class="row">
   
    <div id="21" class="column colcentered centerInput">
        <form>
            <input id="price" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 100 000€" />
            
            
        </form>    

    
       
        <a href="#" onclick="hideStuff11();" id="clickprice">
        <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




<script type="text/javascript">
        document.getElementById('21').style.display = 'none';
        
        
    </script>


</div>

<div id="q11" class="question">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1  > Parlez-nous de vous! Vous êtes...</h1>
    </div>

<div class="row">
         
    <div id="22" class="column colcentered">
        
        <a href="#" onclick="hideStuff10seul('seul');">
        <img class="icochoice" src="{{ URL::asset('ico/user.png') }}"> 
        </a>
    </div>

    <div id="23" class="column colcentered">
        <a href="#" onclick="hideStuff10duo('à deux');">
        <img class="icochoice" src="{{ URL::asset('ico/group.png') }}"> 
        </a>
    </div>
     
   
    <script type="text/javascript">
            document.getElementById('23').style.display = 'none';
            document.getElementById('22').style.display = 'none';
            
            
        </script>


</div>


<div class="question" id="q12">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1  > Pour financer votre projet vous disposez d'un apport personnel de...</h1>
    </div>
<div class="row">
   
   
        
    
    <div id="24" class="column colcentered centerInput">
            <form>
                    <input id="personalcontribution" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 10 000€"/>
                    
                    
            </form> 
        
        <a href="#" onclick="hideStuff12();" id="clickpersonalcontribution">
        <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




    <script type="text/javascript">

        document.getElementById('24').style.display ='none';
        
        
    </script>


</div>




<div class="row">
   
    
        
    <div id="24duo" class="column colcentered centerInput">

            <form>
                    <input id="duopc" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 10 000€" />
                    
                    
            </form> 
        
        <a href="#" onclick="hideStuff12duo();" id="clickduopc">
        <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




<script type="text/javascript">
        document.getElementById('24duo').style.display = 'none';   
    </script>


</div>



<div class="question" id="q13">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1  > Dans la vie professionnelle, vous travaillez dans le secteur...</h1>
    </div>
<div class="row">


     
   <div id="25" class="column colcentered">
       
       <a href="#" onclick="hideStuff13prive('privé');">
       <img class="icochoice" src="{{ URL::asset('ico/prive.png') }}"> 
       </a>
   </div>

   <div id="26" class="column colcentered">
       <a href="#" onclick="hideStuff13('public');">
       <img class="icochoice" src="{{ URL::asset('ico/public.png') }}"> 
       </a>
   </div>
    
</div>

<div class="row">
         
   <div id="27" class="column colcentered">
       <a href="#" onclick="hideStuff13('liberal');">
       <img class="icochoice" src="{{ URL::asset('ico/liberal.png') }}"> 
       </a>
   </div>

   <div id="28" class="column colcentered">
       <a href="#" onclick="hideStuff13('autre');">
       <img class="icochoice" src="{{ URL::asset('ico/autrechoix.png') }}"> 
       </a>
   </div>
    
  
   <script type="text/javascript">
           document.getElementById('25').style.display = 'none';
           document.getElementById('26').style.display = 'none';
           document.getElementById('27').style.display = 'none';
           document.getElementById('28').style.display = 'none';
           
       </script>


</div>


<div class="question" id="q14">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1  > Dans le secteur privé, vous êtes en...</h1>
    </div>


<div class="row">
         
   <div id="29" class="column colcentered">
        
       <a href="#" onclick="hideStuff14('cdi');">
       <img class="icochoice" src="{{ URL::asset('ico/cdi.png') }}"> 
       </a>
   </div>

   <div id="30" class="column colcentered">
       <a href="#" onclick="hideStuff14('cdi');">
       <img class="icochoice" src="{{ URL::asset('ico/cdd.png') }}"> 
       </a>
   </div>
    
</div>
<div class="row">
         
   <div id="31" class="column colcentered">
       <a href="#" onclick="hideStuff14('interim');">
       <img class="icochoice" src="{{ URL::asset('ico/interim.png') }}"> 
       </a>
   </div>

   <div id="32" class="column colcentered">
       <a href="#" onclick="hideStuff14('autre');">
       <img class="icochoice" src="{{ URL::asset('ico/autre.png') }}"> 
       </a>
   </div>
    
  
   <script type="text/javascript">
            document.getElementById('29').style.display = 'none';
           document.getElementById('30').style.display = 'none';
           document.getElementById('31').style.display = 'none';
           document.getElementById('32').style.display = 'none';
           
       </script>


</div>

<div class="question" id="q15">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1  > Vos revenus mensuels s'élèvent à...</h1>
    </div>

<div class="row">
   
   
        
   <div id="33" class="column colcentered centerInput">
        <form>
                <input id="income" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 1 500€"/>
                
                
        </form> 
       
       <a href="#" onclick="hideStuff15();" id="clickincome">
       <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('33').style.display ='none';
       
       
   </script>


</div>







<!--                          duo                                                   -->





<div class="question"  id="q13duo">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Dans la vie professionnelle, votre co-emprunteur travaille dans le secteur...</h1>
</div>
<div class="row">


 
<div id="25duo" class="column colcentered">
   
   <a href="#" onclick="hideStuff13priveduo('privé');">
   <img class="icochoice" src="{{ URL::asset('ico/prive.png') }}"> 
   </a>
</div>

<div id="26duo" class="column colcentered">
   <a href="#" onclick="hideStuff13duo('public');">
   <img class="icochoice" src="{{ URL::asset('ico/public.png') }}"> 
   </a>
</div>
 
</div>

<div class="row">
     
<div id="27duo" class="column colcentered">
   <a href="#" onclick="hideStuff13duo('liberal');">
   <img class="icochoice" src="{{ URL::asset('ico/liberal.png') }}"> 
   </a>
</div>

<div id="28duo" class="column colcentered">
   <a href="#" onclick="hideStuff13duo('autre');">
   <img class="icochoice" src="{{ URL::asset('ico/autrechoix.png') }}"> 
   </a>
</div>
 

<script type="text/javascript">
       document.getElementById('25duo').style.display = 'none';
       document.getElementById('26duo').style.display = 'none';
       document.getElementById('27duo').style.display = 'none';
       document.getElementById('28duo').style.display = 'none';
       
   </script>


</div>


<div class="question"  id="q14duo">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Dans le secteur privé, il/elle est en...</h1>
</div>


<div class="row">
     
<div id="29duo" class="column colcentered">
    
   <a href="#" onclick="hideStuff14duo('cdi');">
   <img class="icochoice" src="{{ URL::asset('ico/cdi.png') }}"> 
   </a>
</div>

<div id="30duo" class="column colcentered">
   <a href="#" onclick="hideStuff14duo('cdi');">
   <img class="icochoice" src="{{ URL::asset('ico/cdd.png') }}"> 
   </a>
</div>
 
</div>
<div class="row">
     
<div id="31duo" class="column colcentered">
   <a href="#" onclick="hideStuff14duo('interim');">
   <img class="icochoice" src="{{ URL::asset('ico/interim.png') }}"> 
   </a>
</div>

<div id="32duo" class="column colcentered">
   <a href="#" onclick="hideStuff14duo('autre');">
   <img class="icochoice" src="{{ URL::asset('ico/autre.png') }}"> 
   </a>
</div>
 

<script type="text/javascript">
        document.getElementById('29duo').style.display = 'none';
       document.getElementById('30duo').style.display = 'none';
       document.getElementById('31duo').style.display = 'none';
       document.getElementById('32duo').style.display = 'none';
       
   </script>


</div>

<div class="question"  id="q15duo">
    <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Ses revenus mensuels s'élèvent à...</h1>
</div>

<div class="row">


    
<div id="33duo" class="column colcentered centerInput">
    <form>
            <input id="incomeDuo" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 1 500€"/>
            
            
    </form> 
   
   <a href="#" onclick="hideStuff15duo();" id="clickincomeDuo">
   <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
   </a>
</div>    




<script type="text/javascript">

   document.getElementById('33duo').style.display ='none';
   
   
</script>


</div>






<!--duo                                                   -->








<div class="question" id="q16bis">
    <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Percevez-vous des revenus additionnels ? </h1>
</div>
<div class="row">
     
<div id="revenuadd" class="column colcentered">
        
    <a href="#" onclick="hideStuff16bis();">
    <img class="icochoice" src="{{ URL::asset('ico/revenuadd.png') }}"> 
    </a>
</div>

<div id="norevenuadd" class="column colcentered">
    <a href="#" onclick="hideStuff16bisno();">
    <img class="icochoice" src="{{ URL::asset('ico/norevenuadd.png') }}"> 
    </a>
</div>
 


<script type="text/javascript">
        document.getElementById('revenuadd').style.display = 'none';
        document.getElementById('norevenuadd').style.display = 'none';
        
        
    </script>


</div>



<div class="question"  id="q16">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1 > A combien s'élèvent vos revenus additionnels ?</h1>
    </div>

<div class="row">
   
   
        
   <div id="34" class="column colcentered centerInput">
        <form>
                <input id="addincomes" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 400€"/>
                
                
        </form> 
       
       <a href="#" onclick="hideStuff16();" id="clickaddincomes">
       <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('34').style.display ='none';
       
       
   </script>


</div>




<div class="question" id="q17bis">
    <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Percevez-vous des primes annuelles ?</h1>
</div>
<div class="row">
     
<div id="primes" class="column colcentered">
        
    <a href="#" onclick="hideStuff17bis();">
    <img class="icochoice" src="{{ URL::asset('ico/primes.png') }}"> 
    </a>
</div>

<div id="noprimes" class="column colcentered">
    <a href="#" onclick="hideStuff17bisno();">
    <img class="icochoice" src="{{ URL::asset('ico/noprimes.png') }}"> 
    </a>
</div>
 


<script type="text/javascript">
        document.getElementById('primes').style.display = 'none';
        document.getElementById('noprimes').style.display = 'none';
        
        
    </script>


</div>



<div class="question"  id="q17">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1 > Vos primes annuelles s'élèvent à...</h1>
    </div>


<div class="row">
   
   
        
   <div id="35" class="column colcentered centerInput">
        <form>
                <input id="bonus" type="number" name="name" class="boxInput" required autocomplete="off" placeholder="Ex : 200€"/>
                
                
        </form> 
       
       <a href="#" onclick="hideStuff17();" id="clickbonus">
       <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('35').style.display ='none';
       
       
   </script>


</div>



<div class="question" id="q18bis">
    <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Payez-vous un loyer mensuel ?</h1>
</div>
<div class="row">
     
<div id="loyer" class="column colcentered">
        
    <a href="#" onclick="hideStuff18bis();">
    <img class="icochoice" src="{{ URL::asset('ico/loyer.png') }}"> 
    </a>
</div>

<div id="noloyer" class="column colcentered">
    <a href="#" onclick="hideStuff18bisno();">
    <img class="icochoice" src="{{ URL::asset('ico/noloyer.png') }}"> 
    </a>
</div>
 


<script type="text/javascript">
        document.getElementById('loyer').style.display = 'none';
        document.getElementById('noloyer').style.display = 'none';
        
        
    </script>


</div>



<div class="question" id="q18">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1> Votre loyer mensuel actuel est de...</h1>
    </div>
<div class="row">
   
   
        
   <div id="36" class="column colcentered centerInput">
        <form>
                <input id="currentrent" type="number" name="name" class="boxInput" required autocomplete="off" placeholder="Ex : 700€" />
                
                
        </form> 
       
       
       <a href="#" onclick="hideStuff18();" id="clickcurrentrent">
       <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('36').style.display ='none';
       
       
   </script>


</div>




<div class="question" id="q19bis">
    <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Versez-vous une pension alimentaire ?</h1>
</div>
<div class="row">
     
<div id="pension" class="column colcentered">
        
    <a href="#" onclick="hideStuff19bis();">
    <img class="icochoice" src="{{ URL::asset('ico/pension.png') }}"> 
    </a>
</div>

<div id="nopension" class="column colcentered">
    <a href="#" onclick="hideStuff19bisno();">
    <img class="icochoice" src="{{ URL::asset('ico/nopension.png') }}"> 
    </a>
</div>
 


<script type="text/javascript">
        document.getElementById('pension').style.display = 'none';
        document.getElementById('nopension').style.display = 'none';
        
        
    </script>


</div>




<div class="question" id="q19">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1  > Votre pension alimentaire s'élève à ...</h1>
    </div>

<div class="row">
   
   
        
   <div id="37" class="column colcentered centerInput">
        <form>
                <input id="alimony" type="number" name="name" class="boxInput"  required autocomplete="off" placeholder="Ex : 300€" />
                
                
        </form> 
      
       <a href="#" onclick="hideStuff19();" id="clickalimony">
       <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('37').style.display ='none';
       
       
   </script>


</div>



<div class="question" id="q20bis">
    <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
    <h1 > Le montant de vos crédits en cours s'élève à...</h1>
</div>
<div class="row">
     
<div id="credits" class="column colcentered">
        
    <a href="#" onclick="hideStuff20bis();">
    <img class="icochoice" src="{{ URL::asset('ico/credits.png') }}"> 
    </a>
</div>

<div id="nocredits" class="column colcentered">
    <a href="#" onclick="hideStuff20bisno();">
    <img class="icochoice" src="{{ URL::asset('ico/nocredits.png') }}"> 
    </a>
</div>
 


<script type="text/javascript">
        document.getElementById('credits').style.display = 'none';
        document.getElementById('nocredits').style.display = 'none';
        
        
    </script>


</div>




<div class="question"  id="q20">
        <h4 class="filAriane">Etape 2/3 - Votre financement</h4> 
        <h1 > Le montant de vos crédits en cours s'élève à...</h1>
    </div>

<div class="row">
   
   
        
   <div id="38" class="column colcentered centerInput">
        <form>
                <input id="credit" type="number" name="name" class="boxInput"  required autocomplete="off" />
                
                
        </form> 
       
       <a href="#" onclick="hideStuff20();" id="clickcredit">
       <img class="checkedbutton" src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('38').style.display ='none';
       
       
       
   </script>


</div>

</div>

<div id="blocSimulateur">
    <div id="mensu">
            <a name="etape3"/>
            <h4 class="filAriane">Etape 3/3 - Résultats de votre simulation</h4> 
            <h2>Vous avez renseigné les différentes étapes de votre projet, la simulation touche à sa fin.
                Voici le taux que nous vous proposons :</h2>
    
            <br>
            <br>
            <h5 class="h5"> Durée du crédit - <em>en mois</em> </h5><br><br>
            <div class="slidecontainer">
                <div style="margin: auto;" class="slider-wrapper">
                <input type="range" min="60" max="360" value="120" class="fluid-slider" step="2" id="range-slider" onchange="updateTextInputCapital2(this.value);">
                <span id="range-label" class="range-label"></span>

                </div>
                  Vous souhaitez effectuer votre crédit sur <span type="text" id="textInputCapital2">120</span> mois 
                
            </div>
    
            <div style="clear:both;">&nbsp;</div>
            

            
            
            
        <section class="container">
            <div class="left-half">
                    <br>
                    <h1>Notre meilleur taux</h1>
                    <h1 class="h1" id="taux"> </h1>
                    <div class="rowing">
                        <div class="column colcentered"><h3>Mensualité <span id="MensualiteSpan"> </span></h3>  </div>
                        <div class="column colcentered"><h3>Coût total intérêt <span id="totalInterestSpan"> </span></h3> </div>
                    </div>
                    
                    

                    <br>
            </div>
            <div class="right-half">
                <br>
                    <h1>Taux moyen national</h1>
                    <h1 class="h1" id="tauxNational"> </h1>
                    
                    
                    <div class="rowing">
                        <div class="column colcentered"><h3>Mensualité <span id="MensualiteNationalSpan"> </span></h3>  </div>
                        <div class="column colcentered"><h3>Coût total intérêt <span id="totalInterestNationalSpan"> </span></h3> </div>
                    </div>
                    <br>
            </div>
        </section>
            <br>
        <h3>Vous pouvez économiser  <span id="economize"> </span></h3>

        
        <br><br>

        <div class="wrapper">
                
                  <a class="clickme danger" href="#" id="register">Continuer</a>
                
        </div>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body">
      
                        <form id="formRegister" class="form-horizontal" role="form" method="POST" action="{{ url('store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="formprojet">
                                <input type="hidden" name="formtype_logement">
                                <input type="hidden" name="formetat">
                                <input type="hidden" name="formtravaux">
                                <input type="hidden" name="formresidence">
                                <input type="hidden" name="formmeuble">
                                <input type="hidden" name="formloyer_attendu">
                                <input type="hidden" name="formville">
                                <input type="hidden" name="formsituation">
                                <input type="hidden" name="formprix">
                                <input type="hidden" name="formapport">
                                <input type="hidden" name="formsecteur">
                                <input type="hidden" name="formcontrat">
                                <input type="hidden" name="formrevenus">
                                <input type="hidden" name="formsecteurduo">
                                <input type="hidden" name="formcontratduo">
                                <input type="hidden" name="formrevenusduo">
                                <input type="hidden" name="formrevenus_add">
                                <input type="hidden" name="formprimes">
                                <input type="hidden" name="formloyer_actu">
                                <input type="hidden" name="formautre_credit">
                           

                            <div class="form-group">
                                <label class="col-md-4 control-label formContact">Nom</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nom">
                                    <small class="help-block"></small>
                                </div>
                            </div>
      
                            <div class="form-group">
                                <label class="col-md-4 control-label formContact">Adresse E-Mail</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="mail">
                                    <small class="help-block"></small>
                                </div>
                            </div>
      
                            <div class="form-group">
                                <label class="col-md-4 control-label formContact">Téléphone</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="numero">
                                    <small class="help-block"></small>
                                </div>
                            </div>
      
                            <div class="form-group">
                                <label class="col-md-4 control-label formContact">Quand souhaitez vous etre rappelé ?</label>
                                
                                <div class="col-md-6">
                                        <select name="rappel" id="timeRecall">
                                                <option value="Lundi matin">Lundi matin</option>
                                                <option value="Lundi après-midi">Lundi après-midi</option>
                                                <option value="Mardi après-midi">Mardi matin</option>
                                                <option value="Mardi après-midi">Mardi après-midi</option>
                                                <option value="Mardi après-midi">Mercredi matin</option>
                                                <option value="Mardi après-midi">Mercredi après-midi</option>
                                                <option value="Mardi après-midi">Jeudi matin</option>
                                                <option value="Mardi après-midi">Jeudi après-midi</option>
                                                <option value="Mardi après-midi">Vendredi matin</option>
                                                <option value="Mardi après-midi">Vendredi après-midi</option>
                                              </select>
                                    
                                    <small class="help-block"></small>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Valider
                                    </button>
                                </div>
                            </div>
                            
                            
                            

                        </form>                       
      
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JavaScripts -->
        
        <script>
      
        $(function(){
      
            $('#register').click(function() {
                $('#myModal').modal();

                

            });
      
            $(document).on('submit', '#formRegister', function(e) {  
                e.preventDefault();
                  var projet = "construction";
                $('input+small').text('');
                $('input').parent().removeClass('has-error');
                  
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json"
                })
                .done(function(data) {
                    $('.alert-success').removeClass('hidden');
                    $('#myModal').modal('hide');
                })
                .fail(function(data) {
                    $.each(data.responseJSON, function (key, value) {
                        var input = '#formRegister input[name=' + key + ']';
                        $(input + '+small').text(value);
                        $(input).parent().addClass('has-error');
                    });
                });
            });
      
        })
      
        </script>
        {{-- <script src="{{ elixir('js/app.js') }}"> </script> --}}

    </div>
</div>


<script type="text/javascript">

    document.getElementById('blocSimulateur').style.display = 'none';

    document.getElementById('q3').style.display = 'none';
    document.getElementById('q4').style.display = 'none';
    document.getElementById('q5').style.display = 'none';
    document.getElementById('q6').style.display = 'none';
    document.getElementById('q7').style.display = 'none';
    document.getElementById('q8').style.display = 'none';
    document.getElementById('q9').style.display = 'none';
    document.getElementById('q10').style.display = 'none';
    document.getElementById('q11').style.display = 'none';
    document.getElementById('q12').style.display = 'none';
    document.getElementById('q13').style.display = 'none';
    document.getElementById('q14').style.display = 'none';
    document.getElementById('q15').style.display = 'none';
    document.getElementById('q13duo').style.display = 'none';
    document.getElementById('q14duo').style.display = 'none';
    document.getElementById('q15duo').style.display = 'none';
    document.getElementById('q16bis').style.display = 'none';
    document.getElementById('q16').style.display = 'none';
    document.getElementById('q17bis').style.display = 'none';
    document.getElementById('q17').style.display = 'none';
    document.getElementById('q18bis').style.display = 'none';
    document.getElementById('q18').style.display = 'none';
    document.getElementById('q19bis').style.display = 'none';
    document.getElementById('q19').style.display = 'none';
    document.getElementById('q20bis').style.display = 'none';
    document.getElementById('q20').style.display = 'none';
    
            
    window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();document.getElementById('clickcity').click();}}},true);
    window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='number'){e.preventDefault();
        console.log(e.target.id);
        switch (e.target.id){

            case (e.target.id ="expectedrent") :
            document.getElementById('clickexpectedrent').click();
            console.log(e.target.id);
            break;

            
            case (e.target.id ="personalcontribution") :
            document.getElementById('clickpersonalcontribution').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="price") :
            document.getElementById('clickprice').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="duopc") :
            document.getElementById('clickduopc').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="incomeDuo") :
            document.getElementById('clickincomeDuo').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="income") :
            document.getElementById('clickincome').click();
            console.log(e.target.id);
            break;
            

            case (e.target.id ="addincomes") :
            document.getElementById('clickaddincomes').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="clickbonus") :
            document.getElementById('clickbonus').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="alimony") :
            document.getElementById('clickalimony').click();
            console.log(e.target.id);
            break;
            
            case (e.target.id ="currentrent") :
            document.getElementById('clickcurrentrent').click();
            console.log(e.target.id);
            break;

            case (e.target.id ="credit") :
            document.getElementById('clickcredit').click();
            console.log(e.target.id);
            break;

            default:

            break;
            

        }
    
    }}},true);
    
</script>



@endsection

