@extends('layout.basic')

@section('content')
<script type="text/javascript" src="{{ URL::asset('js/spa.js') }}"></script>

<style>
        
        * { box-sizing: border-box; }

        body { 
          font-family: 'Open Sans', sans-serif;
          color: #666;
        }
        
        /* STRUCTURE */
        
        .wrapper {
            padding: 5px;
            max-width: 960px;
            width: 95%;
            margin: 20px auto;
        }
        header {
            padding: 0 15px;
        }
        
        .columns {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            margin: 5px 0;
        }
        
        .column {
            flex: 1;
            border: 1px solid gray;
            margin: 2px;
            padding: 10px;
            &:first-child { margin-left: 0; }
            &:last-child { margin-right: 0; }
            
        }
        

        @media screen and (max-width: 980px) {
          .columns .column {
                margin-bottom: 5px;
            flex-basis: 40%;
                &:nth-last-child(2) {
                    margin-right: 0;
                }
                &:last-child {
                    flex-basis: 100%;
                    margin: 0;
                }
            }
        }
        
        @media screen and (max-width: 680px) {
            .columns .column {
                flex-basis: 100%;
                margin: 0 0 5px 0;
            }
        }   


            .slider {
            -webkit-appearance: none;
            width: 50%;
            height: 15px;
            border-radius: 5px;   
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%; 
            background: #4CAF50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4CAF50;
            cursor: pointer;
        }
        


}

</style>

<!-- Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


<style>
    body {
        font-family: 'Lato';
    }

    .fa-btn {
        margin-right: 6px;
    }
</style>

    <div class="wrapper" id="1-0">

            <header>
                               <h1>3 Column Responsive Layout</h1>
                
            </header>
                
        <section class="columns">
            
            <div class="column">
                
                <a href="#1-1" onclick="sectionSwitch(1-1);">Acquerir un bien </a>
            </div>
            
            <div class="column">
                <a href="#1-2">Faire construire</a>
            </div>
          
          <div class="column">
                <a href="#2-1">Renegocier son pret</a>
            </div>
            
            <div class="column">
                    <a href="#3-1">Calcul Enveloppe Budgetaire</a>
                </div>

            
        </section>	
    </div>
    <a href="#" id="register">Register</a></li>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Register</h4>
                </div>
                <div class="modal-body">
  
                    <form id="formRegister" class="form-horizontal" role="form" method="POST" action="{{ url('register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                                <small class="help-block"></small>
                            </div>
                        </div>
  
                        <div class="form-group">
                            <label class="col-md-4 control-label">Adresse E-Mail </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email">
                                <small class="help-block"></small>
                            </div>
                        </div>
  
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                <small class="help-block"></small>
                            </div>
                        </div>
  
                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>                       
  
                </div>
            </div>
        </div>
    </div>
 
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
  
    $(function(){
  
        $('#register').click(function() {
            $('#myModal').modal();
        });
  
        $(document).on('submit', '#formRegister', function(e) {  
            e.preventDefault();
              
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

        <div class="wrapper" id="1-1">
                
                <header>
                                       <h1>Second Section</h1>
                    
                    <a name="1-1"/>
                </header>
                    
            <section class="columns">         
                <div class="column">
                    <a href="#1-2">Signature compromis</a>
                </div>
                <div class="column">
                    
                    <a href="#1-2">Act signé</a>
                </div>           
              <div class="column">
                    
                    <a href="#1-2">En recherche</a>
                </div>              
                <div class="column">
                        
                        <a href="#1-2">Demande de renseignements</a>
                    </div>
            </section>
        
        

        <div class="wrapper"id="1-2">
                
                <header>
                                   <h1>Third Section</h1>
                    
                    <a name="1-2"/>
                </header>
                    
            <section class="columns">
                
                <div class="column">
                    <h2>Maison</h2>
                    <a href="#1-3">Demande de renseignements</a>
                </div>
                
                <div class="column">
                    
                    <a href="#1-3">Appartement</a>
                </div>
              
              <div class="column">
                    
                    <a href="#1-5">Terrain Seul</a>
                </div>
                
                <div class="column">
                        
                        <a href="#1-5">Construction + Terrain</a>
                    </div>
    
                
            </section>


        
        </div>


        <div class="wrapper" id="1-3">
                <header>
                                      <h1>Fourth Section</h1>
                    <a name="1-3"/>
                </header>  
            <section class="columns">
                <div class="column">
                    
                    <a href="#1-4">Ancien</a>
                </div>
                <div class="column">
                    
                    <a href="#1-5">Neuf</a>
                </div>
              <div class="column">
                    
                    <a href="#1-5">VEFA</a>
                </div>   
            </section>
        </div>

        <div class="wrapper" id="1-4">
                <header>
                                      <h1>Fifth Section</h1>
                    <a name="1-4"/>
                </header>  
            <section class="columns">
                <div class="column">
                    
                    <a href="#1-5">Travaux</a>
                </div>
                <div class="column">
                    
                    <a href="#1-5">Sans travaux</a>
                </div>  
            </section>
        </div>


        <div class="wrapper"id="1-5">
                <header>
                                     <h1>Sixth Section</h1>
                    <a name="1-5"/>
                </header>  
            <section class="columns">
                <div class="column">
                   
                    <a href="#etape1part9">Habitation principale</a>
                </div>
                <div class="column">
                 
                    <a href="#etape1part9">Secondaire</a>
                </div>  
                <div class="column">
                        
                        <a href="#etape1part7">Locative</a>
                    </div>  
            </section>
        </div>

        <div class="wrapper">
                <header>
                                    <h1>Seventh Section</h1>
                    <a name="etape1part7"/>
                </header>  
            <section class="columns">
                <div class="column">
                    
                    <a href="#etape1part8">Nue</a>
                </div>
                <div class="column">
                   
                    <a href="#etape1part8">Meuble</a>
                </div>  
            </section>
        </div>

        <div class="wrapper">
                <header>
                                     <h1>Eighth Section</h1>
                    <a name="etape1part8"/>
                </header>  
            <section class="columns">
                <div class="column">
                    
                    <a href="#etape1part9">Loyer attendu</a>
                </div>
 
            </section>
        </div>

        <div class="wrapper">
                <header>
                                 <h1>Nineth Section</h1>
                    <a name="etape1part9"/>
                </header>  
            <section class="columns">
                <div class="column">
                        <h2>Ville</h2><input type="text" name="fname">
                        <a href="#etape1part10">entrer</a>
                </div>
 
            </section>
        </div>


        <div class="wrapper">
                <header>
                                  <h1>Tenth Section</h1>
                    <a name="etape1part10"/>
                </header>  
            <section class="columns">
                <div class="column">
                    <a href="#etape1part11">Seul(e)</a>
                </div>
                <div class="column">
                        <a href="#etape1part11">A Deux</a>
                    </div>
            </section>
        </div>

        <div class="wrapper">
                <header>
                                 <h1>Eleventh Section</h1>
                    <a name="etape1part11"/>
                </header>  
            <section class="columns">
                <div class="column">

                        <h2>Valeur du bien</h2><input type="text" name="fname">
                        <a href="#etape1part12">entrer</a>
                </div>
 
            </section>
        </div>

        <div class="wrapper">
                <header>
                                 <h1>Twelfth Section</h1>
                    <a name="etape1part12"/>
                </header>  
            <section class="columns">
                <div class="column">
                        
                        <h2>Montant apport perso</h2><input type="text" name="fname">
                        <a href="#etape1part13">entrer</a>
                </div>
 
            </section>
        </div>


        <div class="wrapper">
                <header>
                                 <h1>Thirteenth Section</h1>
                    <a name="etape1part13"/>
                </header>  
            <section class="columns">
                <div class="column">
                    <a href="#etape1part13">Privé</a>
                </div>
                <div class="column">
                    <a href="#etape1part14">Public</a>
                </div> 
                <div class="column">
                    <a href="#etape1part14">Libéral</a>
                </div>  
                <div class="column">
                        <a href="#etape1part14">Autre</a>
                    </div> 
            </section>
        </div>

        <div class="wrapper">
                <header>
                                  <h1>Fourteenth Section</h1>
                    <a name="etape1part14"/>
                </header>  
            <section class="columns">
                <div class="column">
                    <a href="#etape1part14">CDI</a>
                </div>
                <div class="column">
                    <a href="#etape1part14">CDD</a>
                </div>  
                <div class="column">
                <a href="#etape1part14">Interim</a>
                </div>  
                <div class="column">
                 <a href="#etape1part14">Autre</a>
                </div>  
            </section>
        </div>

        <div class="wrapper">
            <header>
                                <h1>Fifteenth Section</h1>
                <a name="etape1part15"/>
            </header>  
        <section class="columns">
            <div class="column">
                <h2>Revenus mensuels</h2><input type="text" name="fname">
                <a href="#etape1part16">entrer</a>
            </div>  
        </section>
    </div>
    <div class="wrapper">
        <header>
                                <h1>Sixteenth Section</h1>
            <a name="etape1part16"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Revenus additionnels mensuels</h2><input type="text" name="fname">
            <a href="#etape1part17">entrer</a>
        </div>  
    </section>
</div>
<div class="wrapper">
    <header>
                                 <h1>Seventeenth Section</h1>
        <a name="etape1part17"/>
    </header>  
<section class="columns">
    <div class="column">
        <h2>Primes annuelles net</h2><input type="text" name="fname">
        <a href="#etape1part18">entrer</a>
    </div>  
</section>
</div>
<div class="wrapper">
    <header>
                                <h1>Eighteenth Section</h1>
        <a name="etape1part18"/>
    </header>  
<section class="columns">
    <div class="column">
        <h2>Loyer mensuel actuel</h2><input type="text" name="fname">
        <a href="#etape1part19">entrer</a>
    </div>  
</section>
</div>

<div class="wrapper">
    <header>
                                <h1>Nineteenth Section</h1>
        <a name="etape1part19"/>
    </header>  
<section class="columns">
    <div class="column">
        <h2>Montant mensuel Pension Alimentaire</h2><input type="text" name="fname">
        <a href="#etape1part20">entrer</a>
    </div>  
</section>
</div>

<div class="wrapper">
    <header>
                                <h1>Twentieth Section</h1>
        <a name="etape1part20"/>
    </header>  
<section class="columns">
    <div class="column">
        <h2>Montant mensuel autres crédits</h2><input type="text" name="fname">
        <a href="#etape1part21">entrer</a>
    </div>  
</section>
</div>



<!-- SECOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOONDE PARTIE -->





















<div class="wrapper" id="2-1">
        <header>
                                    <h1>Renegocier son pret</h1>
            <a name="2-1"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Capital restant du</h2><input type="text" name="fname">
            <a href="#etape2part2">entrer</a>
        </div>  
    </section>



    <div class="wrapper">
        <header>
                                    <h1>section 2</h1>
            <a name="etape2part2"/>
        </header>  
        <section class="columns">
            <div class="column">
                <h2>Taux d'interet</h2><input type="text" name="fname">
                <a href="#etape2part3">entrer</a>
            </div>  
        </section>
    </div>

    <div class="wrapper">
            <header>
                                        <h1>section 3</h1>
                <a name="etape2part3"/>
            </header>  
        <section class="columns">
            <div class="column">
                <h2>Banque contractant le pret</h2><input type="text" name="fname">
                <a href="#etape2part4">entrer</a>
            </div>  
        </section>
    </div>

    <div class="wrapper">
            <header>
                                        <h1>section 4</h1>
                <a name="etape2part4"/>
            </header>  
        <section class="columns">
            <div class="column">
                <h2>Banque contractant le pret</h2><input type="text" name="fname">
                <a href="#etape2part5">entrer</a>
            </div>  
        </section>
    </div>

    <div class="wrapper">
            <header>
                                        <h1>section 4</h1>
                <a name="etape2part4"/>
            </header>  
        <section class="columns">
            <div class="column">
                <h2>Montant mensualités</h2><input type="text" name="fname">
                <a href="#etape2part5">entrer</a>
            </div>  
        </section>
    </div>

    <div class="wrapper">
        <header>
                                    <h1>section 5</h1>
            <a name="etape2part5"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Date mise en place du pret</h2><input type="text" name="fname">
            <a href="#etape2part6">entrer</a>
        </div>  
    </section>
    </div>

    <div class="wrapper">
        <header>
                                    <h1>section 6</h1>
            <a name="etape2part6"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Duree initiale du pret</h2><input type="text" name="fname">
            <a href="#etape2part7">entrer</a>
        </div>  
    </section>
    </div>

    <div class="wrapper">
        <header>
                                    <h1>section 7</h1>
            <a name="etape2part7"/>
        </header>  
    <section class="columns">
        <div class="column">
            <a href="#etape1part8">Diminuer mensualité</a>
        </div>  
        <div class="column">
            <a href="#etape1part9">Diminuer durée</a>
        </div>
    </section>
    </div>

    <div class="wrapper">
        <header>
                                    <h1>section 8</h1>
            <a name="etape2part8"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Mensualité max</h2><input type="text" name="fname">
            <a href="#etape2part10">entrer</a>
        </div>  
    </section>
    </div>
    <div class="wrapper">
        <header>
                                    <h1>section 9</h1>
            <a name="etape2part8"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Date de fin désirée</h2><input type="text" name="fname">
            <a href="#etape2part9">entrer</a>
        </div>  
    </section>
    </div>


    <div class="wrapper">
        <header>
                                    <h1>section 10</h1>
            <a name="etape2part10"/>
        </header>  
    <section class="columns">
        <div class="column">
            <a href="#etape1part11">Seul(e)</a>
        </div>  
        <div class="column">
            <a href="#etape1part11">A deux</a>
        </div>
    </section>
    </div>

    <div class="wrapper">
        <header>
                                    <h1>section 11</h1>
            <a name="etape2part11"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Valeur du bien</h2><input type="text" name="fname">
            <a href="#etape2part12">entrer</a>
        </div>  
    </section>
    </div>

    <div class="wrapper">
        <header>
                                    <h1>section 12</h1>
            <a name="etape2part12"/>
        </header>  
    <section class="columns">
        <div class="column">
            <h2>Montant apport perso</h2><input type="text" name="fname">
            <a href="#etape2part13">entrer</a>
        </div>  
    </section>
    </div>

    <div class="wrapper">
        <header>
                        <h1>Thirteenth Section</h1>
            <a name="etape1part13"/>
        </header>  
    <section class="columns">
        <div class="column">
            <a href="#etape1part13">Privé</a>
        </div>
        <div class="column">
            <a href="#etape1part14">Public</a>
        </div> 
        <div class="column">
            <a href="#etape1part14">Libéral</a>
        </div>  
        <div class="column">
                <a href="#etape1part14">Autre</a>
            </div> 
    </section>
    </div>

    <div class="wrapper">
        <header>
                        <h1>Fourteenth Section</h1>
            <a name="etape1part14"/>
        </header>  
    <section class="columns">
        <div class="column">
            <a href="#etape1part14">CDI</a>
        </div>
        <div class="column">
            <a href="#etape1part14">CDD</a>
        </div>  
        <div class="column">
        <a href="#etape1part14">Interim</a>
        </div>  
        <div class="column">
        <a href="#etape1part14">Autre</a>
        </div>  
    </section>
    </div>

    <div class="wrapper">
            <header>
                                <h1>Fifteenth Section</h1>
                <a name="etape1part15"/>
            </header>  
        <section class="columns">
            <div class="column">
                <h2>Revenus mensuels</h2><input type="text" name="fname">
                <a href="#etape1part16">entrer</a>
            </div>  
        </section>
    </div>
    <div class="wrapper">
        <header>
                            <h1>Sixteenth Section</h1>
        <a name="etape1part16"/>
        </header>  
        <section class="columns">
            <div class="column">
                <h2>Revenus additionnels mensuels</h2><input type="text" name="fname">
                <a href="#etape1part17">entrer</a>
            </div>  
        </section>
    </div>
    <div class="wrapper">
    <header>
                        <h1>Seventeenth Section</h1>
    <a name="etape1part17"/>
    </header>  
    <section class="columns">
    <div class="column">
    <h2>Primes annuelles net</h2><input type="text" name="fname">
    <a href="#etape1part18">entrer</a>
    </div>  
    </section>
    </div>
    <div class="wrapper">
    <header>
                        <h1>Eighteenth Section</h1>
    <a name="etape1part18"/>
    </header>  
    <section class="columns">
    <div class="column">
    <h2>Loyer mensuel actuel</h2><input type="text" name="fname">
    <a href="#etape1part19">entrer</a>
    </div>  
    </section>
    </div>

    <div class="wrapper">
    <header>
                        <h1>Nineteenth Section</h1>
    <a name="etape1part19"/>
    </header>  
    <section class="columns">
        <div class="column">
            <h2>Montant mensuel Pension Alimentaire</h2><input type="text" name="fname">
            <a href="#etape1part20">entrer</a>
        </div>  
    </section>
    </div>

    <div class="wrapper">
            <header>
                                    <h1>Twentieth Section</h1>
                <a name="etape1part20"/>
            </header>  
        <section class="columns">
            <div class="column">
                <h2>Montant mensuel autres crédits</h2><input type="text" name="fname">
                <a href="#etape1part21">entrer</a>
            </div>  
        </section>
    </div>

</div>









<!-- TROISIEeeeeeeeeeeeeeeeeeeeeME PARTIE -->
<div id="3-1" >
        <a name="3-1"/>
    <input type="checkbox" id="showMorC" checked data-toggle="toggle" onclick="toggle();">


    <div id="capital">
        

        <div class="slidecontainer">
        <h3> Mensualité souhaitée </h3>
        <input type="text" id="textInput" value="1000">€/mois<br>
        <input type="range" min="100" max="5000" value="1000" class="slider" id="myRange" list="tickmarks" step="10" onchange="updateTextInput(this.value);">
        <datalist id=tickmarks>
            <option value="100" label="100">100</option>
            <option value="1000">1000</option>
            <option value="2000">2000</option>
            <option value="3000">3000</option>
            <option value="4000">4000</option>
            <option value="5000">5000</option>
            </datalist>
        </div>





        <br>
        <h3> Durée du crédit </h3>
        <div class="slidecontainer">
                <input type="text" id="textInput2" value="120">€<br>
                <input type="range" min="60" max="360" value="120" class="slider" step="2" id="myRange" onchange="updateTextInput2(this.value);">
        </div>

        <br>
        <h3> Taux d'interet </h3>
        <div class="slidecontainer">
                <input type="text"  value="1,2%"><br>
                    <input type="range" min="0" max="5" value="1" class="slider" >
        </div>

        <br>
        <h3> Taux d'assurance </h3>
        <div class="slidecontainer">
                <input type="text"  value="0,36%"><br>
                        <input type="range" min="0" max="5" value="0.5" class="slider">
        </div>

        <br>
        <h3> Vous pouvez emprunter </h3>
        <div class="slidecontainer">
                <input type="text"  value="100000" id="MontantEmprunt"><br>
                
        </div>

    </div>




    <div id="mensu">
        <a name="etape3"/>

        <div class="slidecontainer">
        <h3> Capital </h3>
        <input type="text" id="textInputCapital" value="100000">€<br>
        <input type="range" min="10000" max="1000000" value="100000" class="slider" id="myRange" step="2000" onchange="updateTextInputCapital(this.value);">
        </div>

        <br>
        <h3> Durée du crédit </h3>
        <div class="slidecontainer">
                <input type="text" id="textInputCapital2" value="120">€<br>
                <input type="range" min="60" max="360" value="120" class="slider" step="2" id="myRange" onchange="updateTextInputCapital2(this.value);">
        </div>

        <br>
        <h3> Taux d'interet </h3>
        <div class="slidecontainer">
                <input type="text"  value="1,2%"><br>
                    <input type="range" min="0" max="5" value="1" class="slider" >
        </div>

        <br>
        <h3> Taux d'assurance </h3>
        <div class="slidecontainer">
                <input type="text"  value="0,36%"><br>
                        <input type="range" min="0" max="5" value="0.5" class="slider">
        </div>

        <br>
        <h3> Vous emprunterais par mois </h3>
        <div class="slidecontainer">
                <input type="text"  value="1000" id="Mensualite">€<br>
                
        </div>



    </div>

</div>

<script>


   var mydiv = document.getElementById('mensu');
  var acquerir = document.getElementById('1-1');
   var renegocier = document.getElementById('2-1');
   var calcul = document.getElementById('3-1');
    
    mydiv.style.display = 'none';
    acquerir.style.display = 'none';
    renegocier.style.display = 'none';
    calcul.style.display = 'none';
    

    
 
  

</script>
























@endsection