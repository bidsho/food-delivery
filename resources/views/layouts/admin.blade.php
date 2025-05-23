

<!doctype html>
<html lang="en">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> - Admin Panel Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is the first mobile banking application from Digital Forest Team.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * Bankia Application Dashboard - v1.0.0
    =========================================================
    * Product from: Digital Forest Team via digitalforest4@gmail.com 
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="/adminassets/css/digital_forest_team_assets_main.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>




<style>
.arrow {
  border: solid green;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>


<style>
.alert {
  padding: 20px;
  background-color: orange;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>


@livewireStyles


</head>
<body style="">
    

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow" style="background-color: #09dcdf;">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                       
                       

                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
										
										                                            <img width="42" class="rounded-circle" src="/images/thumbnails/anonymous-user.jpg" alt="">
                                             
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="bg-primary header-text-light">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                          
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                  
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
               

											<div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="{{url('/admin/home')}}" class="mm-active">
                                       &nbsp;
                                        Food Delivery 
                                    </a>
                                </li>
                                <li class="app-sidebar__heading"> Menu</li>
                                
                                	<li >
                                    <a href="">
                                         &nbsp;
                                         User
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            <a href="{{url('list-search-user')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                All Users
                                            </a>
                                            
                                            
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li>
                                	
                                	
                                	<li >
                                    <a href="">
                                         &nbsp;
                                        Menu
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            <a href="{{url('/admin/add_menu')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Create Food Menu
                                            </a>
                                            <a href="{{url('/admin/list_menu')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                View Menu
                                            </a>
                                            

                                            <!--<a href="{{url('/admin/list_view_plan')}}" navigate: true>-->
                                            <!--    <i class="metismenu-icon"></i>-->
                                            <!--    View Upgrade Plan-->
                                            <!--</a>-->

                                            
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li>

                                <li >
                                    <a href="">
                                         &nbsp;
                                        Orders
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            
                                            <a href="{{url('/admin/list-order')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                View Order
                                            </a>
                                            <!-- <a href="{{url('/admin/list_activities')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Activities
                                            </a> -->
                                            <!--<a href="{{url('/admin/list_view_plan')}}" navigate: true>-->
                                            <!--    <i class="metismenu-icon"></i>-->
                                            <!--    View Upgrade Plan-->
                                            <!--</a>-->
                                            
                                            
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li>
                                
                                <li >
                                    <a href="">
                                         &nbsp;
                                        Contact Number
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            
                                            <a href="{{url('/admin/add_phone')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Add Contact
                                            </a>
                                            <a href="{{url('/admin/list_activities')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                View Contact
                                            </a>
                                            <!--<a href="{{url('/admin/list_view_plan')}}" navigate: true>-->
                                            <!--    <i class="metismenu-icon"></i>-->
                                            <!--    View Upgrade Plan-->
                                            <!--</a>-->
                                            
                                            
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li>

                                                       <!-- <li >
                                    <a href="">
                                         &nbsp;
                                        Verify Detail
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            <a href="{{url('/admin/listBankDetail')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Bank Detail
                                            </a>
                                            <a href="{{url('/admin/listCryptoDetail')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Crypto Detail
                                            </a>
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li> -->

                                <!-- <li >
                                    <a href="">
                                         &nbsp;
                                        Withdraw
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            <a href="{{url('/admin/listBankwithdrawal')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Bank Withdraw
                                            </a>
                                            <a href="{{url('/admin/list_cashapp')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                               CashApp Withdrawal
                                            </a>
                                            <a href="{{url('/admin/listCryptowithdrawal')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Crypto Withdrawal
                                            </a>
                                            <a href="{{url('/admin/list_paypal')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Paypal Withdrawal
                                            </a>
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li> -->
                                <!-- <li >
                                    <a href="">
                                         &nbsp;
                                        Wallet 
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            
                                            <a href="{{url('/admin/listWallet')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Crypto
                                            </a>
                                            <a href="{{url('/admin/cashapp_wallet')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                Cash App
                                            </a>
                                            <a href="{{url('/admin/paypal_wallet')}}" navigate: true>
                                                <i class="metismenu-icon"></i>
                                                PayPal
                                            </a>
                                        </li>
                                   
                                 
                                       
                                    </ul>
                                </li> -->
                                
                                
                                <li >
                                    <a href="#">
                                        &nbsp;
                                        Notifications
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                        <li>
                                            <a href="{{ url('/admin/add_notification')}}">
                                                <i class="metismenu-icon"></i>
                                                Add Notifications
                                            </a>
                                            <a href="{{ url('/admin/notifications')}}">
                                                <i class="metismenu-icon"></i>
                                                View Notifications
                                            </a>
                                        </li>
                                        
                                   
                                        
                                    </ul>
                                </li>

                                <!--<li >-->
                                <!--    <a href="#">-->
                                <!--       &nbsp;-->
                                <!--        Company Details-->
                                <!--        &nbsp;<i class="arrow down"></i>-->
                                <!--    </a>-->
                                <!--    <ul >-->
                                <!--        <li>-->
                                <!--            <a href="{{ url('/admin/viewDetail')}}">-->
                                <!--                <i class="metismenu-icon"></i>-->
                                <!--                View Details-->
                                <!--            </a>-->

                                <!--        </li>-->
                                        
                                   
                                        
                                <!--    </ul>-->
                                <!--</li>-->

									<!-- <li class="app-sidebar__heading">Authentication Code</li>
								<li >
                                    <a href="#">
                                        &nbsp;
                                       All Users
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                       <li>
                                            <a href="{{ url('/admin/listUser')}}">
                                                <i class="metismenu-icon"></i>
                                                View Code
                                            </a>
                                        </li>
                                        

                                        
                                       
                                   
                                       
                                    </ul>
                                </li> -->
								

                                    <ul >
                                    
                                   
                                 
                                       
                                    </ul>
                                </li>
								
									
								 
                                <li>
                                    <!-- <a href="/backend/index.php?logout">
                                      <i class='fas fa-power-off' style='font-size:20px;color:orange'></i>&nbsp;
                                        Logout
                                    </a> -->
                                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                                </li>
                                
                                 
                            </ul>
                        </div>
                    </div>
                </div> 




                <div class="container my-4">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4">
                            @yield('content')
                        </div>
                    </div>
                </div>
                


                <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-right">
                                    <ul class="nav">
                                
                                       
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <i class='fas fa-power-off' style='font-size:20px;color:orange'></i>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="/adminassets/js/main.js"></script>



@livewireScripts
</body>



</html>