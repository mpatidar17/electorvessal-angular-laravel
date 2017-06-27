      <div class="contentpanel">
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">

                           <div class="top-section">
                              <a id="add_button" href="{{ route('storagelocation.create') }}" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>New Storage Location</a>
                           </div>

                           <div class="content-container">
                              <h1>Storage Locations  <img id="filter_icon" src="images/filter-icon.png" class="pull-right"></h1><br>

                              
                  <!-- row -->
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="contentwrapper">

                  <!--filter containter start-->
                  
                        <div id="filter_container" class="form-box form-label storage-box" style="display:none">
                                     <div class="row clear-box">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="clear-box control-label">City</label>
                                              <select class="form-control">
                                                 <option>All</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="clear-box control-label">State</label>
                                              <select class="form-control">
                                                 <option>All</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="clear-box control-label">Country</label>
                                              <select class="form-control">
                                                 <option>All</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="clear-box control-label">Zip Code</label>
                                              <input placeholder="Default Input" class="form-control" type="text">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row clear-box">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label class="clear-box control-label">Label</label>
                                              <input placeholder="Default Input" class="form-control" type="text">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label class="clear-box control-label">Address Line 1</label>
                                              <input placeholder="Default Input" class="form-control" type="text">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label class="clear-box control-label">Address Line 2</label>
                                              <input placeholder="Default Input" class="form-control" type="text">
                                           </div>
                                        </div>
                                     </div>
                                     <br>
                                      <div class="top-section">
                                            <a href="#" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>Filter</a>
                                      </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div> 
                      
                     
                  
                  <!--filter containter end--> 

                  <div class="content-container">
                    <!--start of the filter container-->
                    <div class="clearfix"></div>
                    <div class="table-responsive">

                      <table class="table table-bordered filter-table table-hover">
                        <thead>
                          <tr>
                            <th>ID &nbsp;&nbsp;<i class="fa fa-caret-down"></i></th>
                            <th>LABEL</th>
                            <th>ADDRESS1</th>
                            <th>ADDRESS2</th>
                            <th>CITY</th>
                            <th>STATE</th>
                            <th>COUNTRY</th>
                            <th>ZIP CODE</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($storagelocations as $key => $item)
                                <tr>
                                    <td>{{ ($key+1) }}</td>
                                    <td>{{ $item->label }}</td>
                                    <td>{{ $item->address1 }}</td>
                                    <td>{{ $item->address2 }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->state }}</td>
                                    <td>{{ $item->country }}</td>
                                    <td>{{ $item->zipCode }}</td>
                                    <td>
                                       
                                        <select id="action_button" name="action_button" onchange="actionChange( this.value, '{{ route('storagelocation.edit',$item->id) }}' , '{{ route('storagelocation.show',$item->id) }}','{{ route('storagelocation.destroy',$item->id) }}');">
                                            <option value="">-Select-</option>
                                            <option value="edit">Edit</option>
                                            <option value="view">View</option>
                                            <option value="delete">Delete</option>
                                        </select> 
                                        {!! Form::open(['method' => 'DELETE','route' => ['storagelocation.destroy', $item->id],'style'=>'display:inline','id'=>'delete_form']) !!}
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
        </div>
        <!-- contentpanel -->