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
                <h2 style="font-size: 20px !important;">Block Referer </h2>

	<div class="row" style="background: white;">
                <div class="col-xs-12" style="width: 100%;">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="padding: 10px;"><h3>{{$sucuri_user->name}}</h3></div>
                        <div class="panel-body" >
  					<h3>Block Referer</h3>
     
  				 <form method="get"  role="form" action="/block_referer"> 
               <input type="hidden" name="domain" value="{{$sucuri_user->url}}"> 
               
                  
                        <input type="text" name="referer" class="form-control"  />
                        <br> 
  						<input type="submit" value="ADD" class="btn btn-success" /><br>

					</form>                          
 
                          

        

                        </div>
                    </div>
                </div>
            </div>
<h3>Remove Block Referer</h3>
            <table class="table table-bordered">
                <tr>
                    <th>S.No</th>
                    <th>Domain ALias</th>
                    <th>Delete</th>
                </tr>
                <?php $i = 0;
                    $users = DB::table('blockrefer')->where('domainID',$request->route('zone'))->get();  
                ?>
                @foreach ($users as $user)
                
                <tr> 
                    <td><?= ++$i?></td> 
                    <td><?=$user->name?></td> 
                    <td>
                    <form method="get"  role="form" action="/removeBlockReferer">
                         <input type="hidden" name="domain" value="{{$sucuri_user->url}}"> 
                         <input type="hidden" name="removeRefer" value="{{$user->name}}" >  
                         <input type="hidden" name="id" value="{{$user->id}}">  
                     <button type="submit" class="btn btn-xs btn-danger" name="submit"><i class="dripicons-trash"></i></button>
                 </td>
                </tr>
                @endforeach
            </table>

            <br>

        


@stop 

@section('javascript') 
<script>
    $(document).ready(function (){
        $('#filter').val("");
    });
</script>
@endsection
