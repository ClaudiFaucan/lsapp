@extends('layout.basic')

@section('content')



<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>

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

   background-repeat: no-repeat;
    background-size:  100%;
    margin-top: 5%;
    font-family: 'Barlow';
    
    }

    .icochoice {
        height: 100%;
        width: 100%;
        opacity: 0.9;
        
    }

    .icochoice:hover {
        opacity: 1;

    }
    
    
    .colcentered{
   
    flex: 1;
    }
    .question{
        
        text-align: center;
        color: white;
        font-size: 2.75em;
    
       
        
    
    }













    /*
    Basic input element using psuedo classes
    */
   


    .centerInput{
        margin-top: 20%;
    margin-left: 30%;
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
    color: #adadad;
    }

    textarea.questionInput:focus + label > span,
    textarea.questionInput:valid + label > span {
    top: -150px;
    font-size: 22px;
    color: #adadad;
    }

    input.questionInput:valid + label,
    textarea.questionInput:valid + label {
    border-color: green;
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
    color: white;
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

</style>



<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lsapp.css') }}">
<script type="text/javascript" src="{{ URL::asset('js/spa.js') }}"></script>

<div class="bodyContainer">

<div id="q2" class="question">
    <h1> Où en etes vous dans votre projet immobilier ?</h1>
</div>

<div class="row ">
    <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>
</div>
<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>


</div>
 
<div id="q3" class="question">
        <h1> Il s'agit...</h1>
    </div>
<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>
</div>
<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>
    <script type="text/javascript">
            document.getElementById('5').style.display = 'none';
            document.getElementById('6').style.display = 'none';
            document.getElementById('7').style.display = 'none';
            document.getElementById('8').style.display = 'none';
        </script>


</div>

<div id="q4" class="question">
        <h1> Génial, c'est un beau projet! votre bien est-il ...</h1>
    </div>

<div class="row">
        <div class="column colcentered"></div>
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

    <div class="column colcentered"></div>
    <script type="text/javascript">
            document.getElementById('9').style.display = 'none';
            document.getElementById('10').style.display = 'none';
            document.getElementById('11').style.display = 'none';
            
        </script>


</div>

<div class="question">
        <h1  id="q5"> Vous devez...</h1>
    </div>
<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>

   
    <script type="text/javascript">
            document.getElementById('12').style.display = 'none';
            document.getElementById('13').style.display = 'none';
            
            
        </script>


</div>


<div class="question">
        <h1  id="q6"> Ce bien sera votre...</h1>
    </div>
<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>
   
    <script type="text/javascript">
            document.getElementById('14').style.display = 'none';
            document.getElementById('15').style.display = 'none';
            document.getElementById('16').style.display = 'none';
            
        </script>


</div>


<div class="question">
        <h1  id="q7"> Qui sera...</h1>
    </div>
<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>
   
    <script type="text/javascript">
            document.getElementById('17').style.display = 'none';
            document.getElementById('18').style.display = 'none';
            
            
        </script>


</div>


<div class="question">
        <h1  id="q8"> pour laquelle vous espérez un loyer de...</h1>
    </div>

<div class="row">
   
    
        
        <div id="19" class="column colcentered">
                <form>
                        <input id="expectedrent" type="number" name="name" class="questionInput" required autocomplete="off" />
                        <label for="nme"><span>Loyer Attendu...</span></label>
                        
                </form> 
               
             
            
            <a href="#" onclick="hideStuff8();">
            <img src="{{ URL::asset('ico/checked.png') }}">
            </a>
        </div>    

   

   
    <script type="text/javascript">
            document.getElementById('19').style.display = 'none';
            
            
        </script>


</div>

<div class="question">
        <h1  id="q9"> </h1>
    </div>

<div class="row">
   
    <div id="20" class="column colcentered centerInput">
        <form>
                <input type="text" name="name" class="questionInput" id="city" required autocomplete="off" />
                <label for="nme"><span>Dans la commune de...</span></label>
                
        </form>
        
    
        
        <a href="#" onclick="hideStuff9();">
        <img src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




<script type="text/javascript">

        document.getElementById('20').style.display = 'none';
        
        
    </script>


</div>





<div class="question">
        <h1  id="q10">Vous souhaitez demander un pret pour un bien dont le prix s'éleve à... </h1>
    </div>
<div class="row">
   
    <div id="21" class="column colcentered centerInput">
        <form>
            <input id="price" type="number" name="name" class="questionInput" required autocomplete="off" />
            <label for="nme"><span>Prix du bien...</span></label>
            
        </form>    

    
       
        <a href="#" onclick="hideStuff11();">
        <img src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




<script type="text/javascript">
        document.getElementById('21').style.display = 'none';
        
        
    </script>


</div>

<div class="question">
        <h1  id="q11"> Parlez-nous de vous! vous êtes...</h1>
    </div>

<div class="row">
        <div class="column colcentered"></div>
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
    <div class="column colcentered"></div>
   
    <script type="text/javascript">
            document.getElementById('23').style.display = 'none';
            document.getElementById('22').style.display = 'none';
            
            
        </script>


</div>


<div class="question">
        <h1  id="q12"> Pour financer votre projet vous disposez d'un apport personnel de...</h1>
    </div>
<div class="row">
   
   
        
    
    <div id="24" class="column colcentered centerInput">
            <form>
                    <input id="personalcontribution" type="number" name="name" class="questionInput" required autocomplete="off" />
                    <label for="nme"><span>Montant de l'apport...</span></label>
                    
            </form> 
        
        <a href="#" onclick="hideStuff12();">
        <img src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




    <script type="text/javascript">

        document.getElementById('24').style.display ='none';
        
        
    </script>


</div>




<div class="row">
   
    
        
    <div id="24duo" class="column colcentered centerInput">

            <form>
                    <input id="duopc" type="number" name="name" class="questionInput" required autocomplete="off" />
                    <label for="nme"><span>Montant des apports...</span></label>
                    
            </form> 
        
        <a href="#" onclick="hideStuff12duo();">
        <img src="{{ URL::asset('ico/checked.png') }}">
        </a>
    </div>    




<script type="text/javascript">
        document.getElementById('24duo').style.display = 'none';   
    </script>


</div>



<div class="question">
        <h1  id="q13"> Dans la vie professionnelle, vous travaillez dans le secteur...</h1>
    </div>
<div class="row">


    <div class="column colcentered"></div>
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
   <div class="column colcentered"></div>
</div>

<div class="row">
        <div class="column colcentered"></div>
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
   <div class="column colcentered"></div>
  
   <script type="text/javascript">
           document.getElementById('25').style.display = 'none';
           document.getElementById('26').style.display = 'none';
           document.getElementById('27').style.display = 'none';
           document.getElementById('28').style.display = 'none';
           
       </script>


</div>


<div class="question">
        <h1  id="q14"> Dans le secteur privé, vous êtes en...</h1>
    </div>


<div class="row">
        <div class="column colcentered"></div>
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
   <div class="column colcentered"></div>
</div>
<div class="row">
        <div class="column colcentered"></div>
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
   <div class="column colcentered"></div>
  
   <script type="text/javascript">
            document.getElementById('29').style.display = 'none';
           document.getElementById('30').style.display = 'none';
           document.getElementById('31').style.display = 'none';
           document.getElementById('32').style.display = 'none';
           
       </script>


</div>

<div class="question">
        <h1  id="q15"> Vos revenus mensuels s'élèvent à...</h1>
    </div>

<div class="row">
   
   
        
   <div id="33" class="column colcentered centerInput">
        <form>
                <input id="income" type="number" name="name" class="questionInput" required autocomplete="off" />
                <label for="nme"><span>Revenus Net Mensuels...</span></label>
                
        </form> 
       
       <a href="#" onclick="hideStuff15();">
       <img src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('33').style.display ='none';
       
       
   </script>


</div>







<!--                          duo                                                   -->





<div class="question">
    <h1  id="q13duo"> Dans la vie professionnelle, votre co-emprunteur travaille dans le secteur...</h1>
</div>
<div class="row">


<div class="column colcentered"></div>
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
<div class="column colcentered"></div>
</div>

<div class="row">
    <div class="column colcentered"></div>
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
<div class="column colcentered"></div>

<script type="text/javascript">
       document.getElementById('25duo').style.display = 'none';
       document.getElementById('26duo').style.display = 'none';
       document.getElementById('27duo').style.display = 'none';
       document.getElementById('28duo').style.display = 'none';
       
   </script>


</div>


<div class="question">
    <h1  id="q14duo"> Dans le secteur privé, il/elle est en...</h1>
</div>


<div class="row">
    <div class="column colcentered"></div>
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
<div class="column colcentered"></div>
</div>
<div class="row">
    <div class="column colcentered"></div>
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
<div class="column colcentered"></div>

<script type="text/javascript">
        document.getElementById('29duo').style.display = 'none';
       document.getElementById('30duo').style.display = 'none';
       document.getElementById('31duo').style.display = 'none';
       document.getElementById('32duo').style.display = 'none';
       
   </script>


</div>

<div class="question">
    <h1  id="q15duo"> Ses revenus mensuels s'élèvent à...</h1>
</div>

<div class="row">


    
<div id="33duo" class="column colcentered centerInput">
    <form>
            <input id="incomeDuo" type="number" name="name" class="questionInput" required autocomplete="off" />
            <label for="nme"><span>Revenus Net Mensuels...</span></label>
            
    </form> 
   
   <a href="#" onclick="hideStuff15duo();">
   <img src="{{ URL::asset('ico/checked.png') }}">
   </a>
</div>    




<script type="text/javascript">

   document.getElementById('33duo').style.display ='none';
   
   
</script>


</div>






<!--duo                                                   -->











<div class="question">
        <h1  id="q16"> Percevez-vous des revenus complémentaires?...</h1>
    </div>

<div class="row">
   
   
        
   <div id="34" class="column colcentered centerInput">
        <form>
                <input id="addincomes" type="number" name="name" class="questionInput" required autocomplete="off" />
                <label for="nme"><span>Revenus Additionnels...</span></label>
                
        </form> 
       
       <a href="#" onclick="hideStuff16();">
       <img src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('34').style.display ='none';
       
       
   </script>


</div>


<div class="question">
        <h1  id="q17"> Vos primes annuelles s'élèvent à...</h1>
    </div>


<div class="row">
   
   
        
   <div id="35" class="column colcentered centerInput">
        <form>
                <input id="bonus" type="number" name="name" class="questionInput" required autocomplete="off" />
                <label for="nme"><span>Primes Additionnelles...</span></label>
                
        </form> 
       
       <a href="#" onclick="hideStuff17();">
       <img src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('35').style.display ='none';
       
       
   </script>


</div>


<div class="question">
        <h1  id="q18"> Votre loyer mensuel actuel est de...</h1>
    </div>
<div class="row">
   
   
        
   <div id="36" class="column colcentered centerInput">
        <form>
                <input id="currentrent" type="number" name="name" class="questionInput" required autocomplete="off" />
                <label for="nme"><span>Loyer mensuel actuel...</span></label>
                
        </form> 
       
       
       <a href="#" onclick="hideStuff18();">
       <img src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('36').style.display ='none';
       
       
   </script>


</div>


<div class="question">
        <h1  id="q19"> Versez-vous une pension alimentaire ?</h1>
    </div>

<div class="row">
   
   
        
   <div id="37" class="column colcentered centerInput">
        <form>
                <input id="alimony" type="number" name="name" class="questionInput" required autocomplete="off" />
                <label for="nme"><span>Montant mensuel pension alimentaire...</span></label>
                
        </form> 
      
       <a href="#" onclick="hideStuff19();">
       <img src="{{ URL::asset('ico/checked.png') }}">
       </a>
   </div>    




   <script type="text/javascript">

       document.getElementById('37').style.display ='none';
       
       
   </script>


</div>


<div class="question">
        <h1  id="q20"> Le montant de vos crédits en cours s'élève à...</h1>
    </div>

<div class="row">
   
   
        
   <div id="38" class="column colcentered centerInput">
        <form>
                <input id="credit" type="number" name="name" class="questionInput" required autocomplete="off" />
                <label for="nme"><span>Montant mensuel crédits en cours...</span></label>
                
        </form> 
       
       <a href="#" onclick="hideStuff20();">
       <img src="{{ URL::asset('ico/checked.png') }}">
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
                    <div class="row">
                        <div class="column colcentered"><h3>Mensualité <span id="MensualiteSpan"> </span></h3>  </div>
                        <div class="column colcentered"><h3>Coût total intérêt <span id="totalInterestSpan"> </span></h3> </div>
                    </div>
                    
                    

                    <br>
            </div>
            <div class="right-half">
                <br>
                    <h1>Taux moyen national</h1>
                    <h1 class="h1" id="tauxNational"> </h1>
                    
                    
                    <div class="row">
                        <div class="column colcentered"><h3>Mensualité <span id="MensualiteNationalSpan"> </span></h3>  </div>
                        <div class="column colcentered"><h3>Coût total intérêt <span id="totalInterestNationalSpan"> </span></h3> </div>
                    </div>
                    <br>
            </div>
        </section>
            <br>
        <h3>Vous allez économiser  <span id="economize"> </span></h3>

        
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
    document.getElementById('q16').style.display = 'none';
    document.getElementById('q17').style.display = 'none';
    document.getElementById('q18').style.display = 'none';
    document.getElementById('q19').style.display = 'none';
    document.getElementById('q20').style.display = 'none';
    
            
    window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
    window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='number'){e.preventDefault();return false;}}},true);

    
</script>



@endsection

