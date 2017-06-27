<div id="response_message"></div>
{!! Form::open(array('route' => 'agent.store','method'=>'POST','id'=>'create_form')) !!}
    <!--start-->
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>Create Agent</h1>
                              <div class="form-box form-label">
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">First Name:</label>
                                          <div class="col-sm-10">
                                            {!! Form::text('firstName', null, array('placeholder' => 'Tom','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Middle Initial:</label>
                                          <div class="col-sm-10">
                                            {!! Form::text('middleInitial', null, array('placeholder' => 'K','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Last Name:</label>
                                          <div class="col-sm-10">
                                            {!! Form::text('lastName', null, array('placeholder' => 'James','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Email:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('email', null, array('placeholder' => 'tomkjames@email.com','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Password:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('password', null, array('class' => 'form-control')) !!}
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

                  <div class="top-section">
                     <button type="submit" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>save</button>
                     <button  class="back_button btn btn-primary-alt pull-right add-btn"></i>Cancel</button>
                  </div>
               </div>
    <!--end  -->
    {!! Form::close() !!}

<script>
$(document).on('submit','#create_form',function(e){
            $('#response_message').html('');
            $.ajax({
              url: '{{ URL::to("agent") }}' ,
              type: 'POST',
              data:"_token={{csrf_token()}}&"+$(this).serialize(),
              success:function(response){
                $("#response_message").html(response);
              }
            });
            e.preventDefault();
}); 

</script>