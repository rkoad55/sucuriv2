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
		<meta http-equiv = "refresh" content = "2; url = {{action('Admin\DnsController@add_certificate',Request::segment(2))}}" />

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
                <h2 style="font-size: 20px !important;">SSL Certificate </h2>

	<div class="row" style="background: white;">
                <div class="col-xs-12" style="width: 100%;">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="padding: 10px;">
                            <h3>{{$results->output->domain}}</h3></div>
                        <div class="panel-body" >
                            <h3>Add SSL</h3>
     
                            <form method="get"  role="form" action="insertadd_certificate"  > 
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>     
                    <input type="hidden" name="id" value=" <?php if(isset($message)){ } else { echo $id; } ?>">
                                <span>Private Key</span><br>
                                <textarea name="private_key" class="form-control" rows="4" cols="50" required>

</textarea>
<br/>
<span>SSL Certificate</span><br>
                                <textarea name="ssl_certificate" class="form-control" rows="4" cols="50" required>

</textarea><br/>
                                <!--input type="text" name="ip" required class="form-control" placeholder="US" minlength="2" maxlength="2" oninput="this.value = this.value.toUpperCase()"/><br-->
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
