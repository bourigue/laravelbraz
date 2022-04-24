<div>
    {{-- The whole world belongs to you. --}}
</div>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Question') }}
    </h2>
</x-slot>

<!--1 quastion-->
<div class="accordion accordion-flush" id="accordionFlushExample">

    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            1-Affichez en ordre alphabétique la liste des noms des agriculteurs.        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
           
                 <th>agr_Name</th>
                 <th>agr_Prn</th>
            </tr>
        </thead>
      
            @foreach($quation1 as $value)
            <tr>
              
                <td>{{$value->agr_nom}}</td>
                <td>{{$value->agr_prn}}</td>
              
            </tr>
            @endforeach
        
    </table>
 </div>
     </div>
      </div>
    </div>
   </div>
   <!--2 quastion-->
   <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fff" aria-expanded="false" aria-controls="flush-collapseOne">
           2- Affichez la liste des noms des parcelles dont la superficie est supérieure à 500        </button>
      </h2>
      <div id="fff" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                 <th>Nom</th>
                 <th>super</th>
            </tr>
        </thead>
      
            @foreach($question2 as $value)
            <tr>
                <td>{{$value->par_nom}}</td>
                 <td>{{$value->par_superficie}}</td>
              
            </tr>
            @endforeach
        
    </table>
 </div></div>
      </div>
    </div>
   </div>
   <!--3 quation-->
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation3" aria-expanded="false" aria-controls="flush-collapseOne">
            3-Affichez toutes les informations concernant les parcelles situées à Arith dont la 
            superficie est supérieure à 200 et inférieure à 500        </button>
      </h2>
      <div id="quation3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                 <th>No</th>
                 <th>agr_Name</th>
                 <th>agr_Prn</th>
            </tr>
        </thead>
      
            @foreach($question3 as $value)
            <tr>
                <td>{{$value->par_id}}</td>
                
              
            </tr>
            @endforeach
        
    </table>
  </div>
     </div>
      </div>
    </div>
   </div>
   <!--4 quation-->
 <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation4" aria-expanded="false" aria-controls="flush-collapseOne">
            4-Affichez la liste de toutes les parcelles avec le nom de leurs propriétaires      </button>
      </h2>
      <div id="quation4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
           
                 <th>Par_Nom</th>
               
                 <th>Nom_agriculteur</th>
            </tr>
        </thead>
            @foreach($question4 as $value)
            <tr>
                <th>{{$value["par_nom"]}}</th>
                <th>{{$value["agr_nom"]}}</th>
         </tr>
            @endforeach
        
    </table>
 </div>

     </div>
      </div>
    </div>
   </div>
   <!--5quation-->
 <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation5" aria-expanded="false" aria-controls="flush-collapseOne">
            5-Affichez la liste de toutes les parcelles avec le nom de leurs propriétaires      </button>
      </h2>
      <div id="quation5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
           
                <tr>
                    <th scope="col">int_nb_jours</th>
                </tr>
            </tr>
        </thead>
            @foreach($question5 as $value)
            <tr>
                <tr>
                    <th>{{$value["int_nb_jours"]}}</th>
                </tr>
         </tr>
            @endforeach
        
    </table>
 </div>

     </div>
      </div>
    </div>
   </div>

   <!--6 quation-->

   <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation6" aria-expanded="false" aria-controls="flush-collapseOne">
            6- Afficher pour chaque intervention le nom de la parcelle concernée     </button>
      </h2>
      <div id="quation6" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">Debut d'intervention</th>
            <th scope="col">le nom de la parcelle concernée</th>>
            </tr>
        </thead>
            @foreach($question6 as $value)
            <tr>
                <th>{{$value->int_debut}}</th>
                <th>{{$value->par_nom}}</th>

         </tr>
            @endforeach
        
    </table>
 </div>


     </div>
      </div>
    </div>
   </div>
   <!--7 quation-->
   <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation7" aria-expanded="false" aria-controls="flush-collapseOne">
           7 -  Afficher pour chaque intervention le nom de la parcelle concernée et le nom de
            l’employé   </button>
      </h2>
      <div id="quation7" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                 <th>Emp_Nom</th>
                 <th>Par_Nom</th>
            </tr>
        </thead>
            @foreach($question7 as $value)
            <tr>
                <td>{{$value->emp_nom}}</td>
                <td>{{$value->par_nom}}</td>


                
               

         </tr>
            @endforeach
        
    </table>
   </div>


     </div>
      </div>
    </div>
   </div>
   <!--8 quation-->
 <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation8" aria-expanded="false" aria-controls="flush-collapseOne">
           8 - Affichez les interventions de l’employe Pernet </button>
      </h2>
      <div id="quation8" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                 <th>employe_id</th>
            </tr>
        </thead>
            @foreach($question8 as $value)
            <tr>
                <td>{{$value->emp_nss}}</td>
            </tr>
            @endforeach
        
    </table>
  </div>


     </div>
      </div>
    </div>
   </div>
   <!--9 quation-->
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation9" aria-expanded="false" aria-controls="flush-collapseOne">
           9 - Calculez la superficie totale des parcelles.</button>
      </h2>
      <div id="quation9" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
          <h5>la superficie totale des parcelles</h5><h3>{{$question9}}</h3>
 </div>


     </div>
      </div>
    </div>
   </div>
   <!--10 quation-->
 <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation10" aria-expanded="false" aria-controls="flush-collapseOne">
           9 - Affichez le nom de la plus grande parcelle.</button>
      </h2>
      <div id="quation10" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
          <h5>le nom de la plus grande parcelle   :</h5><h3>{{$question10}}</h3>
 </div>
 </div>
      </div>
    </div>
   </div>
   <!--11 quation-->
 <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quation11" aria-expanded="false" aria-controls="flush-collapseOne">
           11 - Affichez le nom de la plus Petit parcelle.</button>
      </h2>
      <div id="quation11" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            
           <div>
    
  
          <h5>le nom de la plus petite parcelle   :</h5><h3>{{$question11}}</h3>
 </div>
 </div>
      </div>
    </div>
   </div>
