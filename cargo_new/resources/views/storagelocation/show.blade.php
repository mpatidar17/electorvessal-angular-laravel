<!--start-->
<div class="contentpanel">
               <div class="box1">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="activities-tabs">
                           <ul>
                              <li><a id="go_to_edit" href="{{ route('storagelocation.edit',$storageLocation->id) }}"><img src="{{ asset('images/edit.png') }}">Edit</a></li>

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
                              <h1>View Storage Location</h1>
                              <div class="form-box form-label">
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Label:</label>
                                          <div class="col-sm-10">
                                            {{ $storageLocation->label }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Address1:</label>
                                          <div class="col-sm-10">
                                            {{ $storageLocation->address1 }}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Address2:</label>
                                          <div class="col-sm-10">
                                            {{ $storageLocation->address2 }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">City:</label>
                                          <div class="col-sm-10">
                                             {{ $storageLocation->city }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">State:</label>
                                          <div class="col-sm-10">
                                             {{ $storageLocation->state }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Country:</label>
                                          <div class="col-sm-10">
                                             {{ $storageLocation->country }}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Zip Code:</label>
                                          <div class="col-sm-10">
                                             {{ $storageLocation->zipCode }}
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
<script type="text/javascript">
    $(document).on('click',"#go_to_edit",function(){
        var url = $(this).attr('href');
        $.ajax({
                url: url ,
                type:"get",
                data:"_token={{csrf_token()}}" ,                        
                success:function(response){
                  $('#content_area').html(response); 
                }
            });
        //e.preventDefault() ;
        return false;
    })
</script>>
<!--end  -->