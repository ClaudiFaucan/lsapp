

    var hideMensu = function() {
  var mydiv = document.getElementById('mensu');
  
    mydiv.style.display = 'none';
 
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
        console.log("basDivision");
        console.log(basDivision);
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




