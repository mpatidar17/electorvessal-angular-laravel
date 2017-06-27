<!--start-->
<div id="response_message"></div>
{!! Form::open(array('route' => 'storagelocation.store','method'=>'POST','id'=>'create_form')) !!}
    <!--start-->
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>Create Storage Location</h1>
                              <div class="form-box form-label">
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Label:</label>
                                          <div class="col-sm-10">
                                            {!! Form::text('label', null, array('placeholder' => 'Label','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Address 1:</label>
                                          <div class="col-sm-10">
                                            {!! Form::text('address1', null, array('placeholder' => 'Rajwada','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Address 2:</label>
                                          <div class="col-sm-10">
                                            {!! Form::text('address2', null, array('placeholder' => 'Palasia','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">City:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('city', null, array('placeholder' => 'Indore','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">State:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('state', null, array('placeholder' => 'MP','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Country:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('country', null, array('placeholder' => 'India','class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Zip Code:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('zipCode', null, array('placeholder' => '454008','class' => 'form-control')) !!}
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
              url: '{{ URL::to("storagelocation") }}' ,
              type: 'POST',
              data:"_token={{csrf_token()}}&"+$(this).serialize(),
              success:function(response){
                alert(response);
                $("#response_message").html(response);
              }
            });
            e.preventDefault();
}); 

</script>
<!--end  -->