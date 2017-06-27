        <div class="contentpanel" >
          <div class="content-box">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="contentwrapper">
                  <div class="top-section">
                    <a id="add_agent_button" href="{{ route('agent.create') }}" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>Add Agent</a>
                  </div>
                  <div class="content-container">
                    <h1>Agents <!--<img id="filter_icon" src="images/filter-icon.png" class="pull-right">--></h1>
                    
                    <br>
                    <!--start of the filter container-->
                    <!--end of the filter container-->

                    <div class="clearfix"></div>
                    <div class="table-responsive">
                      <table class="table table-bordered filter-table table-hover">
                        <thead>
                          <tr>
                            <th>ID &nbsp;&nbsp;<i class="fa fa-caret-down"></i></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($agents as $key => $item)
                        <tr class="odd">
                            <td class="center">{{ $item->id }}</td>
                            <td class="center">{{ $item->firstName }} {{ $item->middleInitial }} {{ $item->lastName }}</td>
                            <td class="center">{{ $item->email }}</td>
                            <td class="center">  
                                <select id="action_button" name="action_button" onchange="actionChange( this.value, '{{ route('agent.edit',$item->id) }}' , '{{ route('agent.show',$item->id) }}','{{ route('agent.destroy',$item->id) }}');">
                                    <option value="">-Select-</option>
                                    <option value="edit">Edit</option>
                                    <option value="view">View</option>
                                    <option value="delete">Delete</option>
                                </select> 
                                {!! Form::open(['method' => 'DELETE','route' => ['agent.destroy', $item->id],'style'=>'display:inline','id'=>'delete_form']) !!}
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
   
