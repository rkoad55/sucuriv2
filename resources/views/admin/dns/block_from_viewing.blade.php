@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app1')

@section('content')

<style>
    .note{
        display: none;

    }
    .note .note-info{
        display: none;
    }
</style>
<?php

$results=json_decode($ok);
//$messages = $result->messages;
// $path=json_decode($path);
// echo $path;

//  print_r($path->id);
//  die();  ?>
 @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
            {{-- For Error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 style="font-size: 20px !important;">Block From Viewing </h2>

	<div class="row" style="background: white;">
                <div class="col-xs-12" style="width: 100%;">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="padding: 10px;">
                            <h3>{{$results->output->domain}}</h3></div>
                        <div class="panel-body" >
                            <h3>Add Country Code</h3>
     
                            <form method="get"  role="form" action="insertBlock_from_view"  > 
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>     
                    <input type="hidden" name="id" value=" <?php if(isset($message)){ } else { echo $id; } ?>">
                                <!--span>Add Path</span--><br>
                                <!--input type="text" name="ip" required class="form-control" placeholder="US" minlength="2" maxlength="2" oninput="this.value = this.value.toUpperCase()"/--><br>

                                <div class="autocomplete" >
    <input id="myInput" type="text" class="form-control" name="ip" placeholder="Country">
  </div>
  <br>
                                <!--input type="hidden" name="list" value=""> 
                                <span>Select Pattern</span><br>
                                <select name="dir" required class="form-control">
                                    <option value="">Select Pattern</option>
                                    <option value="matches">Matches</option>
                                    <option value="begins_with">Begins With</option>
                                    <option value="ends_with">Ends With</option>
                                    <option value="equals">Equals</option>
                                </select><br--> 
      
                            <!-- 	<span>Enter Duration In Second (<sub>When you not enter duration so minimum time is 3 hours</sub>)</span> 
                                <input type="text" name="time" class="form-control" required="" /> <br> -->
                                <input type="submit" value="ADD" class="btn btn-primary" /><br><br>
                          </form>                          
      
                                  <h4>Blocked Countires</h4>
                                  <table class="table table-bordered">
                  <tbody>
                      <tr>
                          
                          <td><b>Blocked Countries:</b></td>
                          
                          
      
                          <td>
      
                              @foreach ($whitepath as $wpaths)   
                              <form method="get" action="removeblock_fromview">
                              <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                                      <table >
                                          <td style="border:none;width: 200px;">
                                          <b>{{ $wpaths->country }}</b>
                                 
      
                                        </td>
                                        <input type="hidden" value="<?php echo auth()->user()->id; ?>" name = "id">
                
                                        <input type="hidden" name = "remove" 
                                        value="{{ $wpaths->country }}"
                                        >
                                        <td style="border:none;width: 200px;">
                
                                        <button type="submit" class="btn btn-xs btn-danger" name="submit"><i class="dripicons-trash"></i></button>
                                    </td>
                                     </table>
                              </form>
                              @endforeach
                              
                              
                          </td>   
                          <?php
                          if(isset($_GET['submit'])){
                              $id= $_GET['id'];
                              $remove = $_GET['remove'];
                          }
                          ?>
                      </tr>
      
                      
                  </tbody>
              </table>
      
              

        

                        </div>
                    </div>
                </div>
            </div>









@stop

@section('javascript') 
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
@endsection
