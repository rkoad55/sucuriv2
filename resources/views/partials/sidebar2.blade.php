@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->

<aside class="main-sidebar" id = "sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" id = "sidebar">
        <center>
            <div class="user-box" id = "sidebar">
                <div class="user-img">
                  

                @if(auth()->user()->id!=1)

<?php            

$id = auth()->user()->id;
$user  = DB::table('brandings')->where('user_id',$id)->get();

 $image= $user[0]->logo;

?> 



@if($image==null)
<a href="/admin/home">  <img style="width: 150px; " src="{{ asset("images/bd-logo-white.png") }}" alt="BlockDos" > </a>

@else
<a href="/admin/home">  <img  style="width: 150px; " src="{{ asset('images/') }}/<?php echo $image; ?>" alt="BlockDos" ></a>
@endif

@else

<a href="/admin/home">  <img style="width: 150px; " src="{{ asset("images/bd-logo-white.png") }}" alt="BlockDos" > </a>


@endif



                  

                     



                </div>
        <br>
                <h5><a href="javascript: void(0);">
                    <?php
                                            $user_id=auth()->user()->id;
                                            // echo $ided;
                                            $users  = DB::table('users')->where('id',$user_id)->get();
                                            //  echo $users;
                                            foreach($users as $user){
                                                $name = $user->name;
                                            } 
                                            echo $name; 
                                        ?>  
                </a> </h5>
                {{-- <p class="text-muted mb-0"><small>Admin Head</small></p> --}}
                <br>
                <!--a  class=" notify-item">
                    <i class="fe-settings"></i>
                 </a--> &nbsp;
                 <a href="{{ url('logout') }}" class="notify-item">
                    <i class="mdi mdi-power"></i>
                </a>
            </div>
        </center>
        
        <hr>
        <ul class="sidebar-menu ">
            <li class="menu-title">Navigation</li>
            <br>

            <li {{{ (Request::is('*/overview') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\ZoneController@show',Request::segment(2))}}">
                            <span   class="icon"><i class="fas fa-bars"></i> </span>
                            <span style="padding-left: 16px;" class="title"> Overview</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    
                   <?php 

                   $ided=auth()->user()->id;
// $ided=20;
                   // dd($ided);
                      $sucuri_userss1 = DB::table('brandings') 
    ->join('packages', 'packages.id', '=', 'brandings.pckg_detail')
    ->where('brandings.user_id', $ided)
    ->get();
                        // dd($sucuri_userss1[0]->Show_Setting);
                     if( $ided > 1){
                        if($sucuri_userss1[0]->Show_Setting == 1){

 ?> 
                    <li {{{ (Request::is('*/analytics') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\AnalyticsController@index',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-cogs"></i></span>
                            <span  style="padding-left: 10px;" class="title">Show Settings</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>

                    <?php 
                }   
                    if($sucuri_userss1[0]->BlackList == 1){

                    
                ?>
                           
                   <li {{{ (Request::is('*/dns') ? 'class=active' : '') }}}  {{{ (Request::is('*/white/*') ? 'class=active' : '') }}} {{{ (Request::is('*/black/*') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@index',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-sitemap"></i></span>
                            <span  style="padding-left: 10px;" class="title"> Whitelist/Blacklist IP</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
                    <li {{{ (Request::is('*/urlpaths') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@urlpaths',Request::segment(2))}}">
                            <span class="icon"><i class="far fa-user"></i>
                            <span  style="padding-left: 10px;" class="title"> URL Paths</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>

                    <li {{{ (Request::is('*/noncache') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@noncache',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> NonCache URLs</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
                    
                    <li {{{ (Request::is('*/blockcookie') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@blockcookie',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> Block HTTP Cookie</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
                    <li {{{ (Request::is('*/block_from_viewing') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@block_from_viewing',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> Block From Viewing</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
                    <li {{{ (Request::is('*/block_from_posting') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@block_from_posting',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> Block From Posting</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
                     <li {{{ (Request::is('*/pause_internal_ip') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@pauseInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Pause Internal IP</span>
                            <span class="pull-right-container"></span>
<<<<<<< HEAD

                        </a>
                    </li>   
                    </li>  
                     <li {{{ (Request::is('*/playInternalIp') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{  action('Admin\ZoneController@playInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Play Internal IP</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  
                    </li>  
                     <li {{{ (Request::is('*/deleteInternalIp') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@deleteInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Delete Internal Ip</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  

=======

                        </a>
                    </li>   
                    </li>  
                     <li {{{ (Request::is('*/playInternalIp') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{  action('Admin\ZoneController@playInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Play Internal IP</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  
                    </li>  
                     <li {{{ (Request::is('*/deleteInternalIp') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@deleteInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Delete Internal Ip</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  

>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
                    <li {{{ (Request::is('*/aggressive') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@aggressive',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span>
                            <span style="padding-left: 10px;" class="title">Aggressive Boot Filter</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      

                  

                   <li {{{ (Request::is('*/domain') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@domainAlias',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Domain Alias</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      
            


                   <li {{{ (Request::is('*/blockUser') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@blockUser',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Block User Agent</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      

                     <li {{{ (Request::is('*/blockReferer') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@blockReferer',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Block Referer</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      


                     <li {{{ (Request::is('*/failoverTime') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@failoverTime',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Fail Over Time</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  

                     <li {{{ (Request::is('*/forwardQueryString') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@forwardQueryString',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Forward Query String</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>   

                     <li {{{ (Request::is('*/idsMonitoring') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@idsMonitoring',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Ids Monitoring</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 


                    <li {{{ (Request::is('*/blockAttackerCountry') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@blockAttackerCountry',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Block Attacker Country</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 


                    <li {{{ (Request::is('*/twofactorauth_path') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@twofactorauth_path',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span>
                            <span style="padding-left: 10px;" class="title">Two Factor Auth Path</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
<<<<<<< HEAD
                    <li {{{ (Request::is('*/ahttp_method') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@ahttp_method',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> HTTP Methods</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
                    <li {{{ (Request::is('*/add_certificate') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@add_certificate',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> SSL Certificate</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
=======
=======
>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
                    
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4

                <?php 
            }
      ?>         			
<?php 
             if($sucuri_userss1[0]->Clear_Cache == 1){
   ?>


                    <li {{{ (Request::is('*/crypto') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@crypto',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span>
                            <span style="padding-left: 10px;"  class="title"> Clear Cache</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 


                    <?php }
             if($sucuri_userss1[0]->Audit_Trails == 1){
   ?>
                 

                    <li {{{ (Request::is('*/content-protection') ? 'class=active' : '') }}} {{{ (Request::is('trails/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@contentProtection',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-book"></i> </span>
                            <span  style="padding-left: 10px;" class="title"> Audit Trails</span>
                            <span class="pull-right-container"></span>

                        </a> 
                    </li>
                    


                    <?php }
             if($sucuri_userss1[0]->Protected_Pages == 1){
   ?>
				
					
					<li {{{ (Request::is('*/firewall') ? 'class=active' : '') }}} {{{ (Request::is('*/trails/*') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\FirewallController@index',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-shield-alt"></i> </span>
                            <span  style="padding-left: 10px;" class="title"> Protected Pages</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
	


                    <?php }
             if($sucuri_userss1[0]->Reports_Settings == 1){
   ?>

					<li {{{ (Request::is('*/loadBalancers') ? 'class=active' : '') }}}  {{{ (Request::is('*/loadBalancer') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\ZoneController@loadBalancers',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-newspaper"></i> </span>
                            <span  style="padding-left: 10px;" class="title"> Reports Settings</span>
                            <span class="pull-right-container"></span>
                            
                        </a>
                    </li> 
					
                     <?php }} 

else{
                     ?>
	                 <li {{{ (Request::is('*/analytics') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\AnalyticsController@index',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-cogs"></i> </span>
                            <span style="padding-left: 10px;" class="title">Show Settings</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>

                           
                   <li {{{ (Request::is('*/dns') ? 'class=active' : '') }}}  {{{ (Request::is('*/white/*') ? 'class=active' : '') }}} {{{ (Request::is('*/black/*') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@index',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-sitemap"></i> </span>
                            <span style="padding-left: 10px;" class="title"> Whitelist/Blacklist IP</span>
                            <span class="pull-right-container"></span>

                        </a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
                    </li> 
                    <li {{{ (Request::is('*/urlpaths') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@urlpaths',Request::segment(2))}}">
                            <span class="icon"><i class="far fa-user"></i>
                            <span  style="padding-left: 10px;" class="title"> URL Paths</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>

                    <li {{{ (Request::is('*/noncache') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@noncache',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> NonCache URLs</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
                    
                    <li {{{ (Request::is('*/blockcookie') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@blockcookie',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> Block HTTP Cookie</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
                    <li {{{ (Request::is('*/block_from_viewing') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@block_from_viewing',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> Block From Viewing</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
                    <li {{{ (Request::is('*/block_from_posting') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@block_from_posting',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> Block From Posting</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
                     <li {{{ (Request::is('*/pause_internal_ip') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@pauseInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Pause Internal IP</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>   
                    </li>  
                     <li {{{ (Request::is('*/playInternalIp') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{  action('Admin\ZoneController@playInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Play Internal IP</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  
                    </li>  
                     <li {{{ (Request::is('*/deleteInternalIp') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@deleteInternalIp',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Delete Internal Ip</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  

                    <li {{{ (Request::is('*/aggressive') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@aggressive',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span>
                            <span style="padding-left: 10px;" class="title">Aggressive Boot Filter</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      

                  

                   <li {{{ (Request::is('*/domain') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@domainAlias',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Domain Alias</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      
            


                   <li {{{ (Request::is('*/blockUser') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@blockUser',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Block User Agent</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      

                     <li {{{ (Request::is('*/blockReferer') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@blockReferer',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Block Referer</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>      


                     <li {{{ (Request::is('*/failoverTime') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@failoverTime',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Fail Over Time</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>  

                     <li {{{ (Request::is('*/forwardQueryString') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@forwardQueryString',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Forward Query String</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>   

                     <li {{{ (Request::is('*/idsMonitoring') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@idsMonitoring',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Ids Monitoring</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 


                    <li {{{ (Request::is('*/blockAttackerCountry') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@blockAttackerCountry',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span> 
                            <span style="padding-left: 10px;" class="title">Block Attacker Country</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 


                    <li {{{ (Request::is('*/twofactorauth_path') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@twofactorauth_path',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span>
                            <span style="padding-left: 10px;" class="title">Two Factor Auth Path</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
<<<<<<< HEAD
                    <li {{{ (Request::is('*/ahttp_method') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@ahttp_method',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> HTTP Methods</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
                    <li {{{ (Request::is('*/add_certificate') ? 'class=active' : '') }}}>
                        <a  id = "anchor" href="{{action('Admin\DnsController@add_certificate',Request::segment(2))}}">
                            <span class="icon"><i class="dripicons-paperclip"></i>
                            <span  style="padding-left: 10px;" class="title"> SSL Certificate</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
=======


=======
                    </li>
                    

      

                  
            
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4


>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
                    <li {{{ (Request::is('*/crypto') ? 'class=active' : '') }}} {{{ (Request::is('clear_cache/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@crypto',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-industry"></i> </span>
                            <span style="padding-left: 10px;" class="title"> Clear Cache</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======


>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
                    <li {{{ (Request::is('*/content-protection') ? 'class=active' : '') }}} {{{ (Request::is('trails/*') ? 'class=active' : '') }}}> 
                        <a id = "anchor" href="{{ action('Admin\ZoneController@contentProtection',Request::segment(2)) }}">
                            <span class="icon"><i class="fas fa-book"></i> </span>
                            <span style="padding-left: 10px;" class="title"> Audit Trails</span>
                            <span class="pull-right-container"></span>

                        </a> 
                    </li>
                    
     <li {{{ (Request::is('*/firewall') ? 'class=active' : '') }}} {{{ (Request::is('*/trails/*') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\FirewallController@index',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-shield-alt"></i></span>
                            <span style="padding-left: 10px;" class="title"> Protected Pages</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li>
    

                    <li {{{ (Request::is('*/loadBalancers') ? 'class=active' : '') }}}  {{{ (Request::is('*/loadBalancer') ? 'class=active' : '') }}}>
                        <a id = "anchor" href="{{action('Admin\ZoneController@loadBalancers',Request::segment(2))}}">
                            <span class="icon"><i class="fas fa-newspaper"></i> </span>
                            <span  style="padding-left: 10px;" class="title"> Reports Settings</span>
                            <span class="pull-right-container"></span>

                        </a>
                    </li> 
                    
                     <?php } ?>				
					 
        </ul>
    </section>
</aside>