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
 @if(session()->has('message'))
    <div class="alert alert-success" role="alert">
    {{ session()->get('message') }}
		<meta http-equiv = "refresh" content = "2; url = {{action('Admin\DnsController@ahttp_method',Request::segment(2))}}" />

    </div>
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
                <h2 style="font-size: 20px !important;">HTTP Methods </h2>

	<div class="row" style="background: white;">
                <div class="col-xs-12" style="width: 100%;">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="padding: 10px;">
                            <h3>{{$results->output->domain}}</h3></div>
                        <div class="panel-body" >
                            <h3>Add HTTP Method</h3>
     
                            <form method="get"  role="form" action="insertahttp_method"  > 
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>     
                    <input type="hidden" name="id" value=" <?php if(isset($message)){ } else { echo $id; } ?>">
                                <!--span>Add Path</span--><br>

                                <select name="ip" class="form-control">
  <option >ACl</option>
  <option >BASELINE-CONTROL</option>
  <option >BIND</option>
  <option >CHECKIN</option>
  <option >CHECKOUT</option>
  <option >CONNECT</option>
  <option >COOK</option>
  <option >COPY</option>
  <option >DELETE</option>
  <option >LABEL</option>
  <option >LINK</option>
  <option >LOCK</option>
  <option >MERGE</option>
  <option >MKACTIVITY</option>
  <option >MKCALENDAR</option>
  <option >MKCOL</option>
  <option >MKREDIRECTREF</option>
  <option >MKWORKSPACE</option>
  <option >MOVE</option>
  <option >OPTIONS</option>
  <option >ORDERPATCH</option>
  <option >PATCH</option>
  <option >PRI</option>
  <option >PROPFIND</option>
  <option >PROPPATCH</option>
  <option >PURGE</option>
  <option >PUSH</option>
  <option >PUT</option>
  <option >REBIND</option>
  <option >REPORT</option>
  <option >SEARCH</option>
  <option >TRACE</option>
  <option >UNBIND</option>
  <option >UNCHECKOUT</option>
  <option >UNLINK</option>
  <option >UNLOCK</option>
  <option >UPDATE</option>
  <option >UPDATEREDIRECTREF</option>
  <option >VERSION-CONTROL</option>
  

  
</select>

                                <!--input type="text" name="ip" required class="form-control" placeholder="US" minlength="2" maxlength="2" oninput="this.value = this.value.toUpperCase()"/--><br>
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
                                <input type="submit" value="Allow Http Method" class="btn btn-primary" /><br><br>
                          </form>                          
      
                                  <h4>HTTP Methods</h4>
                                  <table class="table table-bordered">
                  <tbody>
                      <tr>
                          
                          <td><b>HTTP METHODS:</b></td>
                          
                          
      
                          <td>
      
                              @foreach ($whitepath as $wpaths)   
                              <form method="get" action="removeahttp_method">
                              <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                                      <table >
                                          <td style="border:none;width: 200px;">
                                          <b>{{ $wpaths->HTTP }}</b>
                                 
      
                                        </td>
                                        <input type="hidden" value="<?php echo auth()->user()->id; ?>" name = "id">

                                        <input type="hidden" value="{{ $wpaths->id }}" name = "http_id">
                
                                        <input type="hidden" name = "remove" 
                                        value="{{ $wpaths->HTTP }}"
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
    function myFunction() {
        alert("New URL Path has been added");
    }
</script>
@endsection
