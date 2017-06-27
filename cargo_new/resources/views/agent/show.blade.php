<!--start-->
<div class="contentpanel">
               <div class="box1">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="activities-tabs">
                           <ul>
                              <li><a href="{{ route('agent.edit',$agent->id) }}"><img src="{{ asset('images/edit.png') }}">Edit</a></li>

                              <li><a class="back_button" href="#"><img src="{{ asset('images/activity.png') }}">Back</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>View Agent</h1>
                              <div class="form-box form-label">
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">First Name:</label>
                                          <div class="col-sm-10">
                                            {{ $agent->firstName }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Middle Initial:</label>
                                          <div class="col-sm-10">
                                            {{ $agent->middleInitial }}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Last Name:</label>
                                          <div class="col-sm-10">
                                            {{ $agent->lastName }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Email:</label>
                                          <div class="col-sm-10">
                                             {{ $agent->email }}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
               </div>
</div>

<!--end  -->
