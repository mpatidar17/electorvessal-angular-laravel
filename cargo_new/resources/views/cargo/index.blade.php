@extends('layouts.app')
 
@section('content')
<div id="content_area">
        <div class="contentpanel">
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="contentwrapper">
                  <div class="top-section">
                    <a id="add_button" href="{{ route('cargo.create') }}" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>Add Cargo</a>
                  </div>
                  <div class="content-container">
                    <h1>cargoes <img id="filter_icon" src="images/filter-icon.png" class="pull-right"></h1>
                    
                    <br>

                    <!--start of the filter container-->
                    <div id="filter_container" style="display:none;">

                      <div class="form-box">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Agent</label>
                              <select class="form-control">
                                <option>test</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-8 clear-box">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Storage</label>
                                <select class="form-control">
                                  <option>test</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Recived</label>
                                <select class="form-control">
                                  <option>test</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="">
                                <label class="control-label">Recived from</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker1">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="">
                                <label class="control-label">Recived to</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker2">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">Customer</label>
                              <select class="form-control">
                                <option>test</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-8 clear-box">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Type</label>
                                <select class="form-control">
                                  <option>test</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Packed</label>
                                <select class="form-control">
                                  <option>test</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="">
                                <label class="control-label">Packed from</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker3">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="">
                                <label class="control-label">Packed to</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker4">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="control-label">VIN #</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-8 clear-box">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Make</label>
                                <select class="form-control">
                                  <option>test</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Modal</label>
                                <select class="form-control">
                                  <option>test</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="">
                                <label class="control-label">Year from</label>
                                <select class="form-control">
                                  <option>All</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="">
                                <label class="control-label">Year to</label>
                                <select class="form-control">
                                  <option>All</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="top-section">
                        <a href="#" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>Add Filter</a>
                      </div>

                    </div>
                    <!--end of the filter container-->

                    <div class="clearfix"></div>
                    <div class="table-responsive">
                      <table class="table table-bordered filter-table table-hover">
                        <thead>
                          <tr>
                            <th>ID &nbsp;&nbsp;<i class="fa fa-caret-down"></i></th>
                            <th>Agent</th>
                            <th>Customer</th>
                            <th>Type</th>
                            <th>Vin</th>
                            <th>Year</th>
                            <th>Make</th>
                            <th>Model </th>
                            <th>Color</th>
                            <th>Storage</th>
                            <th>Received</th>
                            <th>Received Date</th>
                            <th>Packed</th>
                            <th>Packed Date</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($cargos as $key => $item)
                        <tr class="odd">
                            <td class="center">{{ $item->id }}</td>
                            <td class="center">{{ $item->agentId }}</td>
                            <td class="center">{{ $item->customerId }}</td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="center"> </td>
                            <td class="center"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="center"> </td>
                            <td class="center">  
                                <select id="action_button" name="action_button" onchange="actionChange( this.value, '{{ route('cargo.edit',$item->id) }}' , '{{ route('cargo.show',$item->id) }}','{{ route('cargo.destroy',$item->id) }}');">
                                    <option value="">-Select-</option>
                                    <option value="edit">Edit</option>
                                    <option value="view">View</option>
                                    <option value="delete">Delete</option>
                                </select> 
                                {!! Form::open(['method' => 'DELETE','route' => ['cargo.destroy', $item->id],'style'=>'display:inline','id'=>'delete_form']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger','style'=>'display:none']) !!}
                                {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- table-responsive --> 
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="col-sm-4 control-label show-label">Show</label>
                          <div class="col-sm-8 clear-box">
                            <!-- <input placeholder="Default Input" class="form-control" type="text"> -->
                            <select class="form-control show-select">
                              <option>20</option>
                              <option>50</option>
                              <option>100</option>
                              <option>200</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-10">
                        <ul class="pagination paginate">
                          <li class="disabled"><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- col-sm-6 -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- contentpanel -->

</div>
<!-- content_area end -->
<script>
function actionChange(action,editurl,showurl,deleteurl){
    if(action=='edit'){
        //window.location = editurl;
        $.ajax({
            url: editurl ,
            type:"get",
            data:"_token={{csrf_token()}}" ,
            success:function(response){
              $('#content_area').html(response);
            }
        });
    }else if(action=='view'){
        //window.location = showurl;
        $.ajax({
            url: showurl ,
            type:"get",
            data:"_token={{csrf_token()}}",
            success:function(response){
              $('#content_area').html(response);
            }
        });
    }else if(action=='delete'){
        //document.getElementById('delete_form').submit() ;
        $('#response_message').html('');
            $.ajax({
              url: deleteurl ,
              type: 'DELETE',
              data:"_token={{csrf_token()}}",
              success:function(response){
                $('#content_area').html(response);
              }
        });
        return false;
            
    }
}
//end of the function

$(document).on('click',"#add_button",function(e){
    var createurl = $(this).attr('href');
    $.ajax({
            url: createurl ,
            type:"get",
            data:"_token={{csrf_token()}}" ,                        
            success:function(response){
              $('#content_area').html(response);
            }
        });
    e.preventDefault() ;
});
$(document).on('click',".back_button",function(e){
    var url = '{{ URL::to("cargos/list") }}';
    $.ajax({
            url: url ,
            type:"get",
            data:"_token={{csrf_token()}}" ,                        
            success:function(response){
              $('#content_area').html(response);
            }
        });
    e.preventDefault() ;
    return false;
});

</script>

<script>
$(document).on('click','#filter_icon',function(){
    $("#filter_container").toggle();
});
</script>

<script>
      jQuery(document).ready(function(){
        // Date Picker
        jQuery('#datepicker1').datepicker();
        jQuery('#datepicker2').datepicker();
        jQuery('#datepicker3').datepicker();
        jQuery('#datepicker4').datepicker();
        jQuery('#datepicker5').datepicker();
        jQuery('#datepicker6').datepicker();
      
      });
</script>
@endsection