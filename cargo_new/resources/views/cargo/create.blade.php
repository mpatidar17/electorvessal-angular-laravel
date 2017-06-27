<div id="response_message"></div>
<!--start-->
{!! Form::open(array('id'=> 'create_form' ,'route' => 'cargo.store','method'=>'POST', 'files'=>true)) !!}
            <div class="contentpanel">
               <div class="box1">
                  <div class="row">

                     <div class="col-md-2">
                        <div class="section-content">
                           <span class="circle_type" id="vehicle_type_circle" style="background-color:#00AEEF"></span>
                           <a href="#">Vehicle</a>
                           <p>
                              A discription content for this type of cargo
                           </p>
                        </div>
                     </div>

                     <div class="col-md-2">
                        <div class="section-content">
                           <span class="circle_type" id="other_type_circle"></span>
                           <a href="#">Other</a>
                           <p>
                              A discription content for this type of cargo
                           </p>
                        </div>
                     </div>
                     <input type="hidden" name="cargo_type" id="cargo_type" value="vehicle">
                  </div>
               </div>


               <div class="content-box form_div" id="vehicle_form_div">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>Vehicle Information</h1>
                              <div class="form-box form-label">
                                 <div class="row clear-box">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-sm-3 clear-box control-label">VIN #</label>
                                          <div class="col-sm-9">
                                             {!! Form::text('vin', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <a href="#">Fetch cargo data</a>  ( 200/100 request remaining )
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Make:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('make', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Model:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('model', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Type:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('vehicle_type', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Year:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('year', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Keys:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('key', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Opration Status:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('operation_status', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title Status:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('title_status', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title #</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('title_number', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">State:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('state', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Dismantled Status:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('dismantled_status', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Color:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('color', null, array('class' => 'form-control')) !!}
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


               <div class="content-box form_div" id="other_form_div" style="display: none">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>Other Information</h1>
                              <div class="form-box form-label">

                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('other_title', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Specificaton:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('specification', null, array('class' => 'form-control')) !!}
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



               <div class="content-box" id="general_information">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>General Information</h1>
                              <div class="form-box form-label">
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Agent:</label>
                                          <div class="col-sm-10">
                                            <select name="agent" class="form-control">
                                                @foreach ($agents as $key => $item)
                                                   <option value="{{ $item->id }}">
                                                      {{ $item->firstName }}
                                                   </option>
                                                @endforeach
                                            </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Customer:</label>
                                          <div class="col-sm-10">
                                            <select name="customer" class="form-control">
                                                @foreach ($customers as $key => $item)
                                                   <option value="{{ $item->id }}">
                                                      {{ $item->firstName }}
                                                   </option>
                                                @endforeach
                                            </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Storage:</label>
                                          <div class="col-sm-10">
                                            {!! Form::select('storagelocation', $storagelocations, null , array('class' => 'form-control') ) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Width:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('width', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Height:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('height', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Depth:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('depth', null, array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Weight:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('weight', null, array('class' => 'form-control')) !!}
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

 

               <div class="tags-content">
                  <h2>Cargo Tags</h2>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                  </p>
               </div>
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <!--HU Changes Starts-->
                              @foreach( $cargoTagGroups as $cargoTagGroup )
                                @if( $cargoTagGroup->cargoTextTags->isNotEmpty() )
                                  <h1>{{ $cargoTagGroup->name }}</h1>
                                  @foreach( $cargoTagGroup->cargoTextTags as $cargoTextTag )  
                                    <div class="form-box form-label">
                                       <div class="row clear-box">
                                          <div class="col-md-8">
                                             <div class="form-group">
                                                <label class="col-sm-4 clear-box control-label">{{ $cargoTextTag->label }}</label>
                                                <div class="col-sm-8">
                                                   <input placeholder="Default Input" class="form-control" type="text" name="texttags[{{$cargoTextTag->id}}]">
                                                </div>
                                             </div>
                                          </div>
                                          <!-- <div class="col-md-4">
                                             <div class="form-group">
                                                <label class="clear-box control-label">Tag name is displayed here:</label>
                                             </div>
                                          </div> -->
                                       </div>
                                    </div>
                                  @endforeach
                                @endif  
                              @endforeach
                              <!--HU Changes Ends-->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
               </div>

               <!--Upload image start-->
               <div class="row">
                  <div class="col-md-12">
                     <div class="contentwrapper">
                        <div class="content-box">
                           <h1>Documents</h1>
                           <div class="form-box">
                              <center>
                                 <div class="demo-droppable">
                                   <h2 class="drag-btn">Drag and drop to upload</h2>
                                 </div>
                                 <div class="output"></div>
                              </center>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Upload image end  -->

               <div class="top-section">
                  <button type="submit" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>save</button>

                  <button  class="back_button btn btn-primary-alt pull-right add-btn"></i>Cancel</button>
               </div>
            </div>
            <!-- contentpanel -->




{!! Form::close() !!}
<!--end  -->
<script>
$(document).on('submit','#create_form',function(e){
            e.preventDefault();
            $('#response_message').html('');
            var fd = new FormData( this );
            fd.append('_token', "{{csrf_token()}}" );

            $.ajax({
              url: '{{ URL::to("cargo") }}' ,
              type: 'POST',
              data : fd ,
              processData : false ,
              contentType : false ,
              success:function(response){
                 $("#response_message").html(response);
              }
            });
            //e.preventDefault();
}); 

$(document).on('click','.circle_type',function(e){
      $('.circle_type').css('background-color','#D9D9D9');
      $(this).css('background-color','#00AEEF');
      var span_id = $(this).attr('id');
      $(".form_div").hide();
      if(span_id == 'vehicle_type_circle'){
         $("#cargo_type").val('vehicle');
         $("#vehicle_form_div").show();
      }else if(span_id == 'other_type_circle'){
         $("#cargo_type").val('other');
         $("#other_form_div").show();
      }
}); 
</script>


<script type="text/javascript">
  (function(window) {
    function triggerCallback(e, callback) {
      if(!callback || typeof callback !== 'function') {
        return;
      }
      var files;
      if(e.dataTransfer) {
        files = e.dataTransfer.files;
      } else if(e.target) {
        files = e.target.files;
      }
      callback.call(null, files);
    }
    function makeDroppable(ele, callback) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('multiple', true); 
      input.setAttribute('name', 'image');
      input.style.display = 'none';
      input.addEventListener('change', function(e) {
        triggerCallback(e, callback);
      });
      ele.appendChild(input);
      
      ele.addEventListener('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.add('dragover');
      });

      ele.addEventListener('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.remove('dragover');
      });

      ele.addEventListener('drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        ele.classList.remove('dragover');
        triggerCallback(e, callback);
      });
      
      ele.addEventListener('click', function() {
        input.value = null;
        input.click();
      });
    }
    window.makeDroppable = makeDroppable;
  })(this);

  (function(window) {
    makeDroppable(window.document.querySelector('.demo-droppable'), function(files) {
      
      var output = document.querySelector('.output');
      output.innerHTML = '';
      for(var i=0; i<files.length; i++) {
        /*if(files[i].type.indexOf('image/') === 0) {
          output.innerHTML += '<img width="200" src="' + URL.createObjectURL(files[i]) + '" />';
        }*/
        output.innerHTML += '<p>'+files[i].name+'</p>';
      }
    });
  })(this);

</script>

 <style type="text/css">
   .demo-droppable {
      /*background: #08c;*/
      color: #fff;
      padding: 100px 0;
      text-align: center;
      border:1px dashed black;
   }
   .demo-droppable.dragover {
      /*background: #00CC71;*/
   }
</style>