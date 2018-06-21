var tabSimulation = [];
var coEmprunteur = false;
function hideStuff($id) {

  document.getElementById('1').style.display = "none";
  document.getElementById('2').style.display = "none";
  document.getElementById('3').style.display = "none";
  document.getElementById('4').style.display = "none";
  document.getElementById('5').style.display = 'block';
  document.getElementById('6').style.display = 'block';
  document.getElementById('7').style.display = 'block';
  document.getElementById('8').style.display = 'block';
  
  tabSimulation.push($id);
  
  document.getElementById('q2').style.display = 'none';
  document.getElementById('q3').style.display = 'block';


} 

function hideStuff2($id) {
  document.getElementById('5').style.display = "none";
  document.getElementById('6').style.display = "none";
  document.getElementById('7').style.display = "none";
  document.getElementById('8').style.display = "none";
  document.getElementById('9').style.display = 'block';
  document.getElementById('10').style.display = 'block';
  document.getElementById('11').style.display = 'block';

  tabSimulation.push($id);


  document.getElementById('q3').style.display = "none";
  document.getElementById('q4').style.display = 'block';


} 
function hideStuff3($id) {
  document.getElementById('5').style.display = "none";
  document.getElementById('6').style.display = "none";
  document.getElementById('7').style.display = "none";
  document.getElementById('8').style.display = "none";
  document.getElementById('14').style.display = 'block';
  document.getElementById('15').style.display = 'block';
  document.getElementById('16').style.display = 'block';


  tabSimulation.push($id);
  console.log(tabSimulation);

  document.getElementById('q3').style.display = "none";
  document.getElementById('q6').style.display = 'block';
}  


function hideStuff4($id) {
  document.getElementById('9').style.display = "none";
  document.getElementById('10').style.display = "none";
  document.getElementById('11').style.display = "none";
  
  document.getElementById('12').style.display = 'block';
  document.getElementById('13').style.display = 'block';
  
  tabSimulation.push($id);
  console.log(tabSimulation);

  document.getElementById('q4').style.display = "none";
  document.getElementById('q5').style.display = 'block';


} 

function hideStuff5($id) {
  document.getElementById('12').style.display = "none";
  document.getElementById('13').style.display = "none";
  document.getElementById('14').style.display = "block";
  document.getElementById('15').style.display = 'block';
  document.getElementById('16').style.display = 'block';
  


  tabSimulation.push($id);
  console.log(tabSimulation);

  document.getElementById('q5').style.display = "none";
  document.getElementById('q6').style.display = 'block';
}  




function hideStuff6($id) {
    document.getElementById('14').style.display = 'none';
    document.getElementById('15').style.display = 'none';
    document.getElementById('16').style.display = 'none';
    
    document.getElementById('17').style.display = 'block';
    document.getElementById('18').style.display = 'block';
    

    tabSimulation.push($id);
    console.log(tabSimulation);
    document.getElementById('q6').style.display = "none";
    document.getElementById('q7').style.display = 'block';

}    

function hideStuff61($id) {
    document.getElementById('14').style.display = 'none';
    document.getElementById('15').style.display = 'none';
    document.getElementById('16').style.display = 'none';
    
    document.getElementById('20').style.display = 'block';
    
    

    tabSimulation.push($id);
    console.log(tabSimulation);

    document.getElementById('q6').style.display = "none";
    document.getElementById('q9').style.display = 'block';
    
  }                 

  function hideStuff7($id) {
    document.getElementById('17').style.display = 'none';
    document.getElementById('18').style.display = 'none';
    
    document.getElementById('19').style.display = 'block';
    
    
    tabSimulation.push($id);
    console.log(tabSimulation);
    document.getElementById('q7').style.display = "none";
    document.getElementById('q8').style.display = 'block';


}  

function hideStuff8() {
  var rent = document.getElementById('expectedrent').value;
  if (rent) {
  document.getElementById('19').style.display = 'none';
  
  
  document.getElementById('20').style.display = 'block';
  
  tabSimulation.push(rent);
  console.log(tabSimulation);
  document.getElementById('q8').style.display = "none";
    document.getElementById('q9').style.display = 'block';
  }
  else {
    alert("Veuillez remplir le champs");
  }
}  


function hideStuff9() {
  var city = document.getElementById('city').value;

  if (city){
  document.getElementById('20').style.display = 'none';
  
  
  document.getElementById('21').style.display = 'block';
  
  tabSimulation.push(city);
  console.log(tabSimulation);
  document.getElementById('q9').style.display = "none";
    document.getElementById('q10').style.display = 'block';
  }
  else {
    alert("Veuillez remplir le champs");
  }
  
} 
function hideStuff11() {
  var price = document.getElementById('price').value;

  if (price){
  document.getElementById('21').style.display = 'none';
  
  
  document.getElementById('22').style.display = 'block';
  document.getElementById('23').style.display = 'block';
  
  tabSimulation.push(price);
  console.log(tabSimulation);
  document.body.style.backgroundImage = "url('../public/ico/backgroundpart2.png')";
  document.getElementById('q10').style.display = "none";
  document.getElementById('q11').style.display = 'block';
  }
  else {
    alert("Veuillez remplir le champs");
  }
}  

function hideStuff10seul($id) {
            
  document.getElementById('23').style.display = 'none';
  document.getElementById('22').style.display = 'none';
  
  document.getElementById('24').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation);
  document.getElementById('q11').style.display = "none";
  document.getElementById('q12').style.display = 'block';
} 
function hideStuff10duo($id) {

  document.getElementById('23').style.display = 'none';
  document.getElementById('22').style.display = 'none';
  
  document.getElementById('24duo').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation); 
  document.getElementById('q11').style.display = "none";
  document.getElementById('q12').style.display = 'block';

  coEmprunteur = true;
}  


function hideStuff12() {
  var pc = document.getElementById('personalcontribution').value;

  if (pc){
  document.getElementById('24').style.display = 'none';
  
  
  document.getElementById('25').style.display = 'block';
  document.getElementById('26').style.display = 'block';
  document.getElementById('27').style.display = 'block';
  document.getElementById('28').style.display = 'block';
  
  tabSimulation.push(pc);
  console.log(tabSimulation);
  document.getElementById('q12').style.display = "none";
  document.getElementById('q13').style.display = 'block';
  }
  else {
    alert("Veuillez remplir le champs");
  }

}




function hideStuff12duo() {

  var duopc = document.getElementById('duopc').value;
  if (duopc){
  document.getElementById('24duo').style.display = 'none';
  
  
  document.getElementById('25').style.display = 'block';
  document.getElementById('26').style.display = 'block';
  document.getElementById('27').style.display = 'block';
  document.getElementById('28').style.display = 'block';

  tabSimulation.push(duopc);
  console.log(tabSimulation);
  document.getElementById('q12').style.display = "none";
  document.getElementById('q13').style.display = 'block';
  }
  else {
    alert("Veuillez remplir le champs");
  }
} 



function hideStuff13($id) {
  
  document.getElementById('25').style.display = 'none';
  document.getElementById('26').style.display = 'none';
  document.getElementById('27').style.display = 'none';
  document.getElementById('28').style.display = 'none';
  
  document.getElementById('33').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation); 
  document.getElementById('q13').style.display = "none";
  document.getElementById('q15').style.display = 'block'; 
} 

function hideStuff13prive($id) {
  
  document.getElementById('25').style.display = 'none';
  document.getElementById('26').style.display = 'none';
  document.getElementById('27').style.display = 'none';
  document.getElementById('28').style.display = 'none';
  
  document.getElementById('29').style.display = 'block';
  document.getElementById('30').style.display = 'block';
  document.getElementById('31').style.display = 'block';
  document.getElementById('32').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation);   
  document.getElementById('q13').style.display = "none";
  document.getElementById('q14').style.display = 'block';
} 



function hideStuff14($id) {
           
  document.getElementById('29').style.display = 'none';
  document.getElementById('30').style.display = 'none';
  document.getElementById('31').style.display = 'none';
  document.getElementById('32').style.display = 'none';
  
  document.getElementById('33').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation);  
  document.getElementById('q14').style.display = "none";
  document.getElementById('q15').style.display = 'block';
} 



function hideStuff15() {
  var income = document.getElementById('income').value;
  
  if(coEmprunteur)
  {
   if (income){
  document.getElementById('33').style.display = 'none';
  document.getElementById('25duo').style.display = 'block';
  document.getElementById('26duo').style.display = 'block';
  document.getElementById('27duo').style.display = 'block';
  document.getElementById('28duo').style.display = 'block';

  tabSimulation.push(income);
  console.log(tabSimulation);
   }
   else{
     alert("Veuillez remplir le champs");
   }
  document.getElementById('q15').style.display = "none";
  document.getElementById('q13duo').style.display = 'block';
  } else{
    if (income){
      document.getElementById('33').style.display = 'none';
     document.getElementById('34').style.display = 'block';
    
      tabSimulation.push(income);
      console.log(tabSimulation);
       }
       else{
         alert("Veuillez remplir le champs");
       }
      document.getElementById('q15').style.display = "none";
      document.getElementById('q16').style.display = 'block';
  }
}  

// duooooooooooooo




function hideStuff13duo($id) {
  
  document.getElementById('25duo').style.display = 'none';
  document.getElementById('26duo').style.display = 'none';
  document.getElementById('27duo').style.display = 'none';
  document.getElementById('28duo').style.display = 'none';
  
  document.getElementById('33duo').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation); 
  document.getElementById('q13duo').style.display = "none";
  document.getElementById('q15duo').style.display = 'block'; 
} 

function hideStuff13priveduo($id) {
  
  document.getElementById('25duo').style.display = 'none';
  document.getElementById('26duo').style.display = 'none';
  document.getElementById('27duo').style.display = 'none';
  document.getElementById('28duo').style.display = 'none';
  
  document.getElementById('29duo').style.display = 'block';
  document.getElementById('30duo').style.display = 'block';
  document.getElementById('31duo').style.display = 'block';
  document.getElementById('32duo').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation);   
  document.getElementById('q13duo').style.display = "none";
  document.getElementById('q14duo').style.display = 'block';
} 



function hideStuff14duo($id) {
           
  document.getElementById('29duo').style.display = 'none';
  document.getElementById('30duo').style.display = 'none';
  document.getElementById('31duo').style.display = 'none';
  document.getElementById('32duo').style.display = 'none';
  
  document.getElementById('33duo').style.display = 'block';
  tabSimulation.push($id);
  console.log(tabSimulation);  
  document.getElementById('q14duo').style.display = "none";
  document.getElementById('q15duo').style.display = 'block';
} 



function hideStuff15duo() {
  var incomeDuo = document.getElementById('incomeDuo').value;
  
   if (incomeDuo){
  document.getElementById('33duo').style.display = 'none';
 document.getElementById('34').style.display = 'block';

  tabSimulation.push(incomeDuo);
  console.log(tabSimulation);
   }
   else{
     alert("Veuillez remplir le champs");
   }
  document.getElementById('q15duo').style.display = "none";
  document.getElementById('q16').style.display = 'block';
} 






//duoooooooooo




function hideStuff16() {
  var addincomes = document.getElementById('addincomes').value;

  if(addincomes){
  document.getElementById('34').style.display = 'none';
  document.getElementById('35').style.display = 'block';
  
  tabSimulation.push(addincomes);
  console.log(tabSimulation);
  document.getElementById('q16').style.display = "none";
  document.getElementById('q17').style.display = 'block';
  }else{
    alert("Veuillez remplir le champs");
  }
 
}  

function hideStuff17($id) {

  var bonus = document.getElementById('bonus').value;

  if(bonus){
  document.getElementById('35').style.display = 'none';
  document.getElementById('36').style.display = 'block';
  tabSimulation.push(bonus);
  console.log(tabSimulation);
  document.getElementById('q17').style.display = "none";
  document.getElementById('q18').style.display = 'block';
    }else{
    alert("Veuillez remplir le champs");
  }
 
}  



function hideStuff18() {

  
  var crent = document.getElementById('currentrent').value;

  if(crent){
  document.getElementById('36').style.display = 'none';
  document.getElementById('37').style.display = 'block';
  
  tabSimulation.push(crent);
  console.log(tabSimulation);
  document.getElementById('q18').style.display = "none";
  document.getElementById('q19').style.display = 'block';
  } else{
    alert("Veuillez remplir le champs");
  }
 
} 

function hideStuff19() {

  document.getElementById('37').style.display = 'none';
  document.getElementById('38').style.display = 'block';
  
  var alimony = document.getElementById('alimony').value;
  tabSimulation.push(alimony);
  console.log(tabSimulation);
  document.getElementById('q19').style.display = "none";
  document.getElementById('q20').style.display = 'block';
  
}   


function hideStuff20() {

  document.getElementById('38').style.display = 'none';
  document.getElementById('blocSimulateur').style.display = 'block';
  document.body.style.backgroundImage = "url('')";
  document.body.style.backgroundColor = "#efefef";
  
  var credit = document.getElementById('credit').value;
  tabSimulation.push(credit);
  console.log(tabSimulation);
  document.getElementById('q20').style.display = "none";
  
  updateTextInputCapital2(120);

  


  var rangeSlider = document.getElementById("range-slider");

  var rangeLabel = document.getElementById("range-label");
  
  rangeSlider.addEventListener("input", showSliderValue, false);
  var incomes = document.getElementById('income').value + document.getElementById('incomeDuo').value;
  
  function showSliderValue() {
    if (incomes< 2080 )
     {
      switch(true){
        case (rangeSlider.value < 120):
            document.getElementById('taux').innerHTML="0,53%";
          break;
          case (rangeSlider.value < 144):
            document.getElementById('taux').innerHTML="0,85%";
          break;
          case (rangeSlider.value < 180):
            document.getElementById('taux').innerHTML="1,00%";
          break;
          case (rangeSlider.value < 240):
            document.getElementById('taux').innerHTML="1,15%";
          break;
          case (rangeSlider.value < 300):
            document.getElementById('taux').innerHTML="1,35%";
          break;
          case (rangeSlider.value < 361):
            document.getElementById('taux').innerHTML="1,50%";
          break;
          default:
            document.getElementById('taux').innerHTML="1,00%";
          break;
        }

      } else {

        switch(true){
          case (rangeSlider.value < 120):
            document.getElementById('taux').innerHTML="0,53%";
          break;
          case (rangeSlider.value < 144):
            document.getElementById('taux').innerHTML="0,70%";
          break;
          case (rangeSlider.value < 180):
            document.getElementById('taux').innerHTML="0,85%";
          break;
          case (rangeSlider.value < 240):
            document.getElementById('taux').innerHTML="1,00%";
          break;
          case (rangeSlider.value < 300):
            document.getElementById('taux').innerHTML="1,20%";
          break;
          case (rangeSlider.value < 361):
            document.getElementById('taux').innerHTML="1,35%";
          break;
          
          default:
            document.getElementById('taux').innerHTML="1,00%";
          break;
        } 
      }



    rangeLabel.innerHTML = rangeSlider.value;
    var sliderValue = rangeSlider.value - (60*(1- (rangeSlider.value/rangeSlider.max)) )-8;
    var labelPosition = (sliderValue /rangeSlider.max);
    
    if(rangeSlider.value === rangeSlider.min) {
   rangeLabel.style.left = ((labelPosition * 100) + 2) + "%";
    } else if (rangeSlider.value === rangeSlider.max) {
   rangeLabel.style.left = ((labelPosition * 100)-2) + "%";
    } 
       else {
    rangeLabel.style.left = (labelPosition * 100) + "%";
    }
  }
    
    var x=0;
    console.log(tabSimulation[x]);
    console.log(document.getElementsByName('formprojet').value);
    document.getElementsByName('formprojet').value = tabSimulation[x];x++;
    console.log(tabSimulation[x]);
    console.log(document.getElementsByName('formprojet').value);
    document.getElementsByName('formtype_logement').value = tabSimulation[x];x++;
    document.getElementsByName('formetat').value = tabSimulation[x];x++;
    document.getElementsByName('formtravaux').value = tabSimulation[x];x++;
    document.getElementsByName('formresidence').value = tabSimulation[x];x++;
    document.getElementsByName('formmeuble').value = tabSimulation[x];x++;
    document.getElementsByName('formloyer_attendu').value = tabSimulation[x];x++;
    document.getElementsByName('formville').value = tabSimulation[x];x++;
    document.getElementsByName('formsituation').value = tabSimulation[x];x++;
    document.getElementsByName('formprix').value = tabSimulation[x];x++;
    document.getElementsByName('formapport').value = tabSimulation[x];x++;
    document.getElementsByName('formsecteur').value = tabSimulation[x];x++;
    document.getElementsByName('formcontrat').value = tabSimulation[x];x++;
    document.getElementsByName('formrevenus').value = tabSimulation[x];x++;
    document.getElementsByName('formsecteurduo').value = tabSimulation[x];x++;
    document.getElementsByName('formcontratduo').value = tabSimulation[x];x++;
    document.getElementsByName('formrevenusduo').value = tabSimulation[x];x++;
    document.getElementsByName('formrevenus_add').value = tabSimulation[x];x++;
    document.getElementsByName('formprimes').value = tabSimulation[x];x++;
    document.getElementsByName('formloyer_actu').value = tabSimulation[x];x++;
    document.getElementsByName('formautre_credit').value = tabSimulation[x];

    






} 







function updateTextInputCapital2(val) {
        var rangeSlider = document.getElementById("range-slider");
        var capitalInitial = document.getElementById('price').value;
        var duree = val; 

        document.getElementById('textInputCapital2').innerHTML=val;

        var d = parseInt(duree);
        var de = -d
        var ci = parseInt(capitalInitial);
        
        var totalInterest =0;
        var saveUp=0;
        var incomes = document.getElementById('income').value + document.getElementById('incomeDuo').value;


        switch(true){
          case (rangeSlider.value < 120):
              document.getElementById('taux').innerHTML="0,53%";
              var basDivision = (1 - Math.pow(1.00044,de));

              var total = (ci * 0.00044)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,37%";
              var basDivisionNational = (1 - Math.pow(1.001141,de));
              var totalNational = (ci * 0.001141)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;

             

              saveUp= totalInterestNational - totalInterest;


              

            break;


            case (rangeSlider.value < 144):
            if (incomes< 2080 )
            {
              document.getElementById('taux').innerHTML="0,85%";
              var basDivision = (1 - Math.pow(1.0007083,de));

              var total = (ci * 0.0007083)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;
              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,37%";
              var basDivisionNational = (1 - Math.pow(1.001141,de));
              var totalNational = (ci * 0.001141)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            } else {
              document.getElementById('taux').innerHTML="0,70%";
              var basDivision = (1 - Math.pow(1.000583,de));

              var total = (ci * 0.000583)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,37%";
              var basDivisionNational = (1 - Math.pow(1.001141,de));
              var totalNational = (ci * 0.001141)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;
              }

            break;




            case (rangeSlider.value < 180):
             

              if (incomes< 2080 )
            {
              document.getElementById('taux').innerHTML="1,00%";
              var basDivision = (1 - Math.pow(1.000833,de));
              var total = (ci * 0.000833)/ basDivision;
              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;
              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,47%";
              var basDivisionNational = (1 - Math.pow(1.001225,de));
              var totalNational = (ci * 0.001225)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp = totalInterestNational - totalInterest;

            } else {
              document.getElementById('taux').innerHTML="0,85%";
              var basDivision = (1 - Math.pow(1.000708,de));

              var total = (ci * 0.000708)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,47%";
              var basDivisionNational = (1 - Math.pow(1.001225,de));
              var totalNational = (ci * 0.001225)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            }


            break;



            case (rangeSlider.value < 240):
              

              if (incomes< 2080 )
            {
              document.getElementById('taux').innerHTML="1,15%";
              var basDivision = (1 - Math.pow(1.000958,de));

              var total = (ci * 0.000958)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;
              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,57%";
              var basDivisionNational = (1 - Math.pow(1.001308,de));
              var totalNational = (ci * 0.001308)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            } else {
              document.getElementById('taux').innerHTML="1,00%";
              var basDivision = (1 - Math.pow(1.00083,de));

              var total = (ci * 0.00083)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,57%";
              var basDivisionNational = (1 - Math.pow(1.001308,de));
              var totalNational = (ci * 0.001308)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            }

            break;




            case (rangeSlider.value < 300):
              

              if (incomes< 2080 )
              {
                document.getElementById('taux').innerHTML="1,35%";
              var basDivision = (1 - Math.pow(1.001125,de));

              var total = (ci * 0.001125)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,77%";
              var basDivisionNational = (1 - Math.pow(1.001475,de));
              var totalNational = (ci * 0.001475)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

              } else {
                document.getElementById('taux').innerHTML="1,20%";
              var basDivision = (1 - Math.pow(1.001,de));

              var total = (ci * 0.001)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,77%";
              var basDivisionNational = (1 - Math.pow(1.001475,de));
              var totalNational = (ci * 0.001475)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

              }
            break;



            case (rangeSlider.value < 361):

            if (incomes< 2080 )
            {
              document.getElementById('taux').innerHTML="1,50%";
            var basDivision = (1 - Math.pow(1.00125,de));

            var total = (ci * 0.00125)/ basDivision;

            var tmpTotal= Math.round(total,1);
            var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
            var totalToS = '' + tmpTotalRounded;

            totalInterest = tmpTotal * rangeSlider.value - ci;
            totalInterest = totalInterest + (0.01 * ci);

            document.getElementById('tauxNational').innerHTML="1,97%";
              var basDivisionNational = (1 - Math.pow(1.0016416,de));
              var totalNational = (ci * 0.0016416)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            } else {
              document.getElementById('taux').innerHTML="1,35%";
            var basDivision = (1 - Math.pow(1.001125,de));

            var total = (ci * 0.001125)/ basDivision;

            var tmpTotal= Math.round(total,1);
            var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
            var totalToS = '' + tmpTotalRounded;

            totalInterest = tmpTotal * rangeSlider.value - ci;
            totalInterest = totalInterest + (0.01 * ci);

            document.getElementById('tauxNational').innerHTML="1,97%";
              var basDivisionNational = (1 - Math.pow(1.0016416,de));
              var totalNational = (ci * 0.0016416)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            }


            break;





            default:
              document.getElementById('taux').innerHTML="1,20%";
              var basDivision = (1 - Math.pow(1.001,de));

              var total = (ci * 0.001)/ basDivision;

              var tmpTotal= Math.round(total,1);
              var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
              var totalToS = '' + tmpTotalRounded;

              totalInterest = tmpTotal * rangeSlider.value - ci;
              totalInterest = totalInterest + (0.01 * ci);

              document.getElementById('tauxNational').innerHTML="1,37%";
              var basDivisionNational = (1 - Math.pow(1.001141,de));
              var totalNational = (ci * 0.001141)/ basDivisionNational;
              var tmpTotalNational= Math.round(totalNational,1);
              var tmpTotalRoundedNational = Math.ceil(tmpTotalNational / 10) * 10;
              var totalToSNational = '' + tmpTotalRoundedNational;
              totalInterestNational = tmpTotalNational * rangeSlider.value - ci;
              saveUp= totalInterestNational - totalInterest;

            break;
        }
        


        document.getElementById('MensualiteSpan').innerHTML=totalToS+"€";
        document.getElementById('totalInterestSpan').innerHTML=Math.round(totalInterest,1)+"€";

        document.getElementById('MensualiteNationalSpan').innerHTML=totalToSNational+"€";
        document.getElementById('totalInterestNationalSpan').innerHTML=totalInterestNational+"€";

        document.getElementById('economize').innerHTML=Math.round(saveUp,1) +"€";
}















/*
  var hideMensu = function() {
    var mydiv = document.getElementById('mensu');
    var acquerir = document.getElementById('1-1');
    var renegocier = document.getElementById('2-1');
    var calcul = document.getElementById('3-1');
    acquerir.style.display = 'none';
    renegocier.style.display = 'none';
    calcul.style.display = 'none';
    mydiv.style.display = 'none';

    alert("alright");
 
  }  
  

  var toggle = function() {
  var mydiv = document.getElementById('mensu');
  var capitalDiv = document.getElementById('capital');
  if (mydiv.style.display === 'block' || mydiv.style.display === ''){
    mydiv.style.display = 'none';
    capitalDiv.style.display = 'block';
  }
  else{
    mydiv.style.display = 'block';
    capitalDiv.style.display = 'none';
  }
  }

  var sectionSwitch = function(divId) {
    
    var divToShow = document.getElementById('divId');
    if (divToShow.style.display === 'block' || divToShow.style.display === ''){
      divToShow.style.display = 'none';
      console.log(divToShow);
      
    }
    else{
      divToShow.style.display = 'block';
      
    }



  
}


    function updateTextInput(val) {
        document.getElementById('textInput').value=val; 

        var mensu = val;
        var duree = document.getElementById('textInput2').value; 
 

        var d = parseInt(duree);
        var de = -d
        var m = parseInt(mensu);
         var total = m * (1 - Math.pow(1.001,de)) * 1000;
         var tmpTotal= Math.round(total,1);
         var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
        var totalToS = '' + tmpTotalRounded;
        document.getElementById('MontantEmprunt').value=totalToS;  
        }

    function updateTextInput2(val) {
        document.getElementById('textInput2').value=val; 

        var mensu = document.getElementById('textInput').value;
        var duree = val; 
        

        var d = parseInt(duree);
        var de = -d
        var m = parseInt(mensu);
         var total = m * (1 - Math.pow(1.001,de)) * 1000;
         var tmpTotal= Math.round(total,1);
         var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
        var totalToS = '' + tmpTotalRounded;
        document.getElementById('MontantEmprunt').value=totalToS; 
          
         // document.getElementById('MontantEmprunt').value= mensu * (1 - (((1+0,0012/12)Math.exp(- duree))) * 12)/ (0,0012/12));
        }










// update captial




    function updateTextInputCapital(val) {
        document.getElementById('textInputCapital').value=val; 


        var capitalInitial = val;
        var duree = document.getElementById('textInputCapital2').value; 

        
        var d = parseInt(duree);
        var de = -d
        var ci = parseInt(capitalInitial);
        var basDivision = (1 - Math.pow(1.001,de));
         var total = (ci * 0.001)/ basDivision;

         var tmpTotal= Math.round(total,1);
         var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
        var totalToS = '' + tmpTotalRounded;


        document.getElementById('Mensualite').value=totalToS;  
        }

        function updateTextInputCapital2(val) {
        document.getElementById('textInputCapital2').value=val; 


        var capitalInitial = document.getElementById('textInputCapital').value;
        var duree = val; 
        var d = parseInt(duree);
        var de = -d
        var ci = parseInt(capitalInitial);
        
        var basDivision = (1 - Math.pow(1.001,de));

         var total = (ci * 0.001)/ basDivision;

         var tmpTotal= Math.round(total,1);
         var tmpTotalRounded = Math.ceil(tmpTotal / 10) * 10;
        var totalToS = '' + tmpTotalRounded;


        document.getElementById('Mensualite').value=totalToS;  
        }

//     output.innerHTML = this.value;
// }
//function updateTextInput(val) {
           
         // document.getElementById('textInput').value=val; 
        
       // var duree = document.getElementById('textInput').value;
        //var inter = 1+0,0012/12;
        //var interme = Math.pow(inter, -duree;);
          //document.getElementById('MontantEmprunt').value= val * (1 - interme x 12)/ 0,0012/12);
        
      //  }
//function updateTextInput2(val) {
        //   document.getElementById('textInput2').value=val; 
        // var mensu = document.getElementById('textInput').value;
        // var duree = document.getElementById('textInput').value;

        //   document.getElementById('MontantEmprunt').value= mensu * (1 - (1+0,0012/12)Math.exp(- duree) x 12)/ 0,0012/12);
        // }



*/
