<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet">
    

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.10.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/toggles.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookies.js') }}"></script>
    
</head>
<body>
      <!-- Preloader -->
      <div id="preloader">
         <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
      </div>
      <section>
        <div class="leftpanel">
            <div class="logopanel">
               <h1>{{ config('app.name', 'Company Name') }}</h1>
               <img src="{{ asset('images/close-icon.jpg') }}" class="close-icon pull-right menutoggle">
            </div>
            <!-- logopanel -->
            <div class="leftpanelinner">
               <!-- This is only visible to small devices -->
               <div class="">
                  <div class="media userlogged">
                     <img alt="" src="{{ asset('images/default-logo.png') }}" class="">
                     <div class="media-body">
                        <h4>Welcome back {{ Auth::user()->firstName }}</h4>
                        <span>Last login: 01:12 am 03/25/2017</span>
                     </div>
                  </div>

                  <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                     <li><a href="{{ route('home') }}"><span>Dashboard</span></a></li>
                     <li><a href="{{ route('cargo.index') }}"><span>Cargo</span></a></li>
                     <li><a href="{{ route('cargoDocument.index') }}"><span>Cargo Document</span></a></li>
                     <li><a href="{{ route('cargoTagGroup.index') }}"><span>Cargo Tag Group</span></a></li>
                     <li><a href="{{ route('cargoTextTag.index') }}"><span>Cargo Text Tag</span></a></li>
                     <li><a href="{{ route('cargoTagValue.index') }}"><span>Cargoe Tag Value</span></a></li>
                     <li><a href="{{ route('storagelocation.index') }}"><span>Storage Location</span></a></li>
                     <li><a href="{{ route('agent.index') }}"><span>Agent</span></a></li>
                     <li><a href="{{ route('customer.index') }}"><span>Customer</span></a></li>

                     <li><a href="{{ route('subscription.index') }}"><span>Subscription</span></a></li>
                     <li><a href="{{ route('invoice.index') }}"><span>Invoice</span></a></li>
                     <li><a href="{{ route('invoiceItem.index') }}"><span>Invoice Item</span></a></li>
                     <li><a href=""><span>Setting </span></a></li>
                     <li>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span>Log Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- leftpanelinner -->
         </div>
         <!-- leftpanel -->

         <div class="mainpanel">
            <div class="headerbar">
               <a class="menutoggle bar-icon" style="display:none;"><i class="fa fa-bars"></i>
               {{ config('app.name', 'Company Name') }}</a>
               <div class="header-right">
                  <ul class="headermenu">
                     <li>
                        <input type="text" class="form-control search-box-top " name="keyword" placeholder="Search here..." />
                     </li>
                     <li>
                        <button id="chatview" class="btn btn-default tp-icon chat-icon">
                        <i class="glyphicon glyphicon-bell"></i>
                        </button>
                     </li>
                  </ul>
               </div>
               <!-- header-right -->
            </div>
            <!-- headerbar -->

            @yield('content')

         </div>
         <!-- mainpanel -->


         <div class="rightpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified">
               <li class="active"><a href="#rp-alluser" data-toggle="tab"><img src="{{ asset('images/close-icon.jpg') }}" class="chat-icon notification_icon" width="20"></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
               <div class="tab-pane active" id="rp-alluser">
                  <h5 class="sidebartitle">Online Users</h5>
                  <ul class="chatuserlist">
                     <li class="online">
                        <div class="media">
                           <a href="#" class="pull-left media-thumb">
                           <img alt="" src="{{ asset('images/pic.png') }}" class="media-object">
                           </a>
                           <div class="media-body">
                              <strong>Eileen Sideways</strong>
                              <small>Los Angeles, CA</small>
                           </div>
                        </div>
                        <!-- media -->
                     </li>
                     <li class="online">
                        <div class="media">
                           <a href="#" class="pull-left media-thumb">
                           <img alt="" src="{{ asset('images/pic.png') }}" class="media-object">
                           </a>
                           <div class="media-body">
                              <span class="pull-right badge badge-danger">2</span>
                              <strong>Zaham Sindilmaca</strong>
                              <small>San Francisco, CA</small>
                           </div>
                        </div>
                        <!-- media -->
                     </li>
                     <li class="online">
                        <div class="media">
                           <a href="#" class="pull-left media-thumb">
                           <img alt="" src="{{ asset('images/pic.png') }}" class="media-object">
                           </a>
                           <div class="media-body">
                              <strong>Nusja Nawancali</strong>
                              <small>Bangkok, Thailand</small>
                           </div>
                        </div>
                        <!-- media -->
                     </li>
                     <li class="online">
                        <div class="media">
                           <a href="#" class="pull-left media-thumb">
                           <img alt="" src="{{ asset('images/pic.png') }}" class="media-object">
                           </a>
                           <div class="media-body">
                              <strong>Renov Leongal</strong>
                              <small>Cebu City, Philippines</small>
                           </div>
                        </div>
                        <!-- media -->
                     </li>
                     <li class="online">
                        <div class="media">
                           <a href="#" class="pull-left media-thumb">
                           <img alt="" src="{{ asset('images/pic.png') }}" class="media-object">
                           </a>
                           <div class="media-body">
                              <strong>Weno Carasbong</strong>
                              <small>Tokyo, Japan</small>
                           </div>
                        </div>
                        <!-- media -->
                     </li>
                  </ul>
               </div>
            </div>
            <!-- tab-content -->
         </div>
         <!-- rightpanel -->
      </section>

    <script src="{{ asset('js/custom.js') }}"></script>
    <!--chart js-->
    <script src="{{ asset('js/pie-chart.js') }}"></script>
    <script type="text/javascript">
         $(document).ready(function () {
            $('#demo-pie-1').pieChart({
               barColor: '#00aeef',
               trackColor: '#eee',
               //lineCap: 'round',
               lineCap: 'square',
               lineWidth: 15,
               rotate: -90,
               onStep: function (from, to, percent) {
                  $(this.element).find('.pie-value').text('20 / 100' + '\n' + 'CARGOS');
               }
            });

            $('#demo-pie-2').pieChart({
               barColor: '#00aeef',
               trackColor: '#eee',
               //lineCap: 'butt',
               lineCap: 'square',
               lineWidth: 15,
               rotate: -90,
               onStep: function (from, to, percent) {
                  $(this.element).find('.pie-value').text( '5 / 10' + '\n' + 'CARGOS');
               }
            });

            $('#demo-pie-3').pieChart({
               barColor: '#00aeef',
               trackColor: '#eee',
               lineCap: 'square',
               lineWidth: 15,
               rotate: -90,
               onStep: function (from, to, percent) {
                  $(this.element).find('.pie-value').text('5 / 10' + '\n' + 'CARGOS');
               }
            });

            $('#demo-pie-4').pieChart({
               barColor: '#00aeef',
               trackColor: '#eee',
               lineCap: 'square',
               lineWidth: 15,
               rotate: -90,
               onStep: function (from, to, percent) {
                  $(this.element).find('.pie-value').text('5 / 10' + '\n' + 'USER');
               }
            });

            $('#demo-pie-5').pieChart({
               barColor: '#00aeef',
               trackColor: '#eee',
               lineCap: 'square',
               lineWidth: 15,
               rotate: -90,
               onStep: function (from, to, percent) {
                  $(this.element).find('.pie-value').text('250 / 300' + '\n' + 'AGENT');
               }
            });
         });
    </script>


</body>
</html>
