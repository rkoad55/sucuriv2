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


    $check = DB::table('advanceSetting')->where(['domainID' => $request->route('zone'), 'name' =>  'aggressive_bot_filter'])->get();

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
                <h2 style="font-size: 20px !important;">Aggressive Bot Filter </h2>

	<div class="row" style="background: white;">
                <div class="col-xs-12" style="width: 100%;">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="padding: 10px;"><h3>{{$sucuri_user->name}}</h3></div>
                        <div class="panel-body" >
  					<h3>Aggressive Bot Filter</h3>
     
  					<form method="get"  role="form" action="/botFilter"  >       
               <input type="hidden" name="domain" value="{{$sucuri_user->url}}"> 
                  
                        <select name="filter" id="filter" required class="form-control">
                            <option value="">Select Filter Mode</option>
                            <option value="enabled">Enabled</option>
                            <option value="disabled">Disabled</option>
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
              $('#filter').val("{{$check[0]->value}}");
        <?php } ?>

    });
</script>
@endsection