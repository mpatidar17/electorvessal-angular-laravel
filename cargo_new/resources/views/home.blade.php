@extends('layouts.app')

@section('content')
            <div class="contentpanel">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="contentwrapper">
                        <h1>here are today’s updates for you</h1>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="open-and-dropdown-box">
                                 <ul>
                                    <li>
                                       <div class="col-md-4">
                                          <select class="form-control">
                                            <option>Open</option>
                                          </select> 
                                       </div>
                                       <div class="col-md-8 text-center">
                                          <span>cargoes</span>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col-md-4">
                                          <select class="form-control">
                                            <option>10 Days</option>
                                          </select>
                                       </div>
                                       <div class="col-md-8 text-center">
                                          <span>to expected arrival</span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>   
                        </div>
                        <div class="chart-box">
                           <!-- <img src="{{ asset('images/graph-box.jpg" class="img-responsive"> -->


                              <div class="row">
                                 <div class="col-md-12">
                                       <div class="circular-pie-chart">
                                          <div id="jquery-script-menu"></div>
                                          <div class="col-md-2">
                                             <div id="demo-pie-1" class="pie-title-center" data-percent="50"> 
                                                <span class="pie-value"></span> 
                                             </div>
                                          </div>
                                          <div class="col-md-2">
                                             <div id="demo-pie-2" class="pie-title-center" data-percent="50"> 
                                                <span class="pie-value"></span> 
                                             </div>
                                          </div>
                                          <div class="col-md-2">  
                                             <div id="demo-pie-3" class="pie-title-center" data-percent="50"> 
                                                <span class="pie-value"></span> 
                                             </div>
                                          </div>
                                          <div class="col-md-2">  
                                             <div id="demo-pie-4" class="pie-title-center" data-percent="50"> 
                                                <span class="pie-value"></span> 
                                             </div>
                                          </div>   
                                          <div class="col-md-2">
                                             <div id="demo-pie-5" class="pie-title-center" data-percent="50"> 
                                                <span class="pie-value"></span> 
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                        </div>
                        <div class="content-container">
                           <div class="content-box">
                              <h1>container header</h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- col-sm-6 -->
               </div>
               <!-- row -->
            </div>
            <!-- contentpanel -->

@endsection