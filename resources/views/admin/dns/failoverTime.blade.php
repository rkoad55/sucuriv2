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


    $check = DB::table('advanceSetting')->where(['domainID' => $request->route('zone'), 'name' =>  'failover_time'])->get();
  
  ?>
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
                <h2 style="font-size: 20px !important;">Fail Over Time</h2>

	<div class="row" style="background: white;">
                <div class="col-xs-12" style="width: 100%;">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="padding: 10px;"><h3>{{$sucuri_user->name}}</h3></div>
                        <div class="panel-body" >
  					<h3>Fail Over Time</h3>
       
  				<form method="get"  role="form" action="/failOverTime">       
               <input type="hidden" name="domain" value="{{$sucuri_user->url}}"> 
                  
                        <select name="time" id="time" required class="form-control">
                            <option>Select Time</option>
                            <option value="5">5 Seconds</option>
                            <option value="10">10 Seconds</option>
                            <option value="30">30 Seconds</option>
                            <option value="60">60 Seconds</option>
                        </select><br> 

  						<input type="submit" value="ADD" class="btn btn-primary" /><br><br>

					</form>                          
 
                          

        

                        </div>
                    </div>
                </div>
            </div>




@stop 

@section('javascript') 
<script>
    $(document).ready(function (){
        <?php 
            if(isset($check[0])){
        ?> 
            $('#time').val("{{$check[0]->value}}");
        <?php } ?> 

    });
</script>
@endsection
