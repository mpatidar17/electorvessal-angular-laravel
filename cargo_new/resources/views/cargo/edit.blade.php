<div id="response_message"></div>  
   <!--start-->
{!! Form::model($cargo, [ 'id'=>'update_form' , 'method' => 'PATCH','route' => ['cargo.update', $cargo->id], 'files'=>true]) !!}
            <div class="contentpanel">

               <div class="box1">
                  <div class="row">
                     @if($cargo->type == 'vehicle')
                     <div class="col-md-2">
                        <div class="section-content">
                           <span class="circle_type" id="vehicle_type_circle" style="background-color:#00AEEF"></span>
                           <a href="#">Vehicle</a>
                           <p>
                              A discription content for this type of cargo
                           </p>
                        </div>
                     </div>
                     @endif
                     @if($cargo->type == 'other')
                     <div class="col-md-2">
                        <div class="section-content">
                           <span class="circle_type" id="other_type_circle" style="background-color:#00AEEF"></span>
                           <a href="#">Other</a>
                           <p>
                              A discription content for this type of cargo
                           </p>
                        </div>
                     </div>
                     @endif
                    
                  </div>
               </div>
               
               

               @if($cargo->type == 'vehicle')
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
                                             {!! Form::text('vin', $cargo_type->vin , array('class' => 'form-control')) !!}
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
                                             {!! Form::text('make', $cargo_type->make , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Model:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('model', $cargo_type->model , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Type:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('vehicle_type', $cargo_type->type , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Year:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('year', $cargo_type->year , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Keys:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('key', $cargo_type->key , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Opration Status:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('operation_status', $cargo_type->operation_status , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title Status:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('title_status', $cargo_type->title_status , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title #</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('title_number', $cargo_type->title_number , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">State:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('state', $cargo_type->state , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Dismantled Status:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('dismantled_status', $cargo_type->dismantled_status , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Color:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('color', $cargo_type->color , array('class' => 'form-control')) !!}
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
               @endif

               @if($cargo->type == 'other')
               <div class="content-box form_div" id="other_form_div" >
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
                                             {!! Form::text('other_title', $cargo_type->title , array('class' => 'form-control')) !!}
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Specificaton:</label>
                                          <div class="col-sm-10">
                                             {!! Form::text('specification', $cargo_type->specification , array('class' => 'form-control')) !!}
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
               @endif



               <div class="content-box">
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
                                                   <option 
                                                   <?php if($item->id == $cargo->agentId){ echo "selected"; } ?>
                                                   value="{{ $item->id }}">
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
                                                   <option 
                                                   <?php if($item->id == $cargo->customerId){ echo "selected"; } ?>
                                                   value="{{ $item->id }}">
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
                                            {!! Form::select('storagelocation', $storagelocations,  $cargo->storageLocationId  , array('class' => 'form-control') ) !!}
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
                                                   <input type="hidden" name="tagvalue[{{$cargoTextTag->id}}]" value="{{$cargoTextTag->cargoTagValueByCargoId->id}}">
                                                   <input placeholder="Default Input" class="form-control" type="text" name="texttags[{{$cargoTextTag->id}}]" value="{{$cargoTextTag->cargoTagValueByCargoId->value}}">
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
                              <ul class="document-list">
                                 @foreach ($cargoDocuments as $key => $item)
                                    <li><img src="{{$item->fileName}}"></li>
                                 @endforeach
                              </ul>
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
var uploaded_image ; 

    //$("#update_form").submit(function(e){
$(document).on('submit','#update_form',function(e){
            e.preventDefault();
            $('#response_message').html('');
            var fd = new FormData( this );
            fd.append('_token', "{{csrf_token()}}" );
            $.ajax({
              url: '{{ URL::to("cargo/$cargo->id") }}' ,
              type: 'POST',//PATCH
              data : fd ,
              processData : false ,
              contentType : false ,
              success:function(response){
                $("#response_message").html(response);
                //uploaded_image ;
                $(".document-list").append('<li><img src="'+uploaded_image+'"></li>');
              }
            });
            e.preventDefault();
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
        uploaded_image = URL.createObjectURL(files[i]); 
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