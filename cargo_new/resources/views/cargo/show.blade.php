<!--start-->
            <div class="contentpanel">
               <div class="box1">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="activities-tabs">
                           <ul>
                              <li><a href="#"><img src="{{ asset('images/activity.png') }}">Activities</a></li>
                              <li><a href="#"><img src="{{ asset('images/notify.png') }}">Notify parties</a></li>
                              <li><a href="#"><img src="{{ asset('images/notes.png') }}">Notes</a></li>
                              <li><a href="{{ route('cargo.edit',$cargo->id) }}"><img src="{{ asset('images/edit.png') }}">Edit</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="contentwrapper">
                           <div class="content-box">
                              <h1>Latest Activities</h1>
                              <div class="form-box">
                                 <small>04/17/2017 16:25:00 GTM</small>
                                 <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </P>
                                 <small>04/17/2017 16:25:00 GTM</small>
                                 <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </P>
                                 <div class="view-all-link">
                                    <a href="#" class="view-all-link">View all <i class="fa fa-angle-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="contentwrapper">
                           <div class="content-box">
                              <h1>Internal Notes</h1>
                              <div class="form-box">
                                 <small>04/17/2017 16:25:00 GTM</small>
                                 <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </P>
                                 <small>04/17/2017 16:25:00 GTM</small>
                                 <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </P>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
               </div>
               
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>General Information</h1>
                              <div class="form-box">
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Agent:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->agentId }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Customer:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->customerId }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Storage:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->storageLocationId }} </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Width:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->width }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Height:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->height }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Depth:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->height }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Weight:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo->weight }}</span>
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

               @if($cargo->type == 'vehicle')
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>Vehicle Information</h1>
                              <div class="form-box">
                                 <div class="row clear-box">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <label class="col-sm-3 clear-box control-label">VIN #</label>
                                          <div class="col-sm-9">
                                             <span>{{ $cargo_type->vin }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="form-group">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Make:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->make }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Model:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->model }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Type:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->type }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Year:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->year }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Keys:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->key }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Dismantled Status:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->dismantled_status }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->title_status }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title #</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->title_number }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">State:</label>
                                          <div class="col-sm-10">
                                             <span>Rafat Khallaf</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Dismantled:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->state }}</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Color:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->color }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Operation Status:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->operation_status }}</span>
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
               <div class="content-box">
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <div class="contentwrapper">
                           <div class="content-container">
                              <h1>Other Information</h1>
                              <div class="form-box">

                                 <div class="row clear-box">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Title:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->title }}</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="col-sm-2 clear-box control-label">Specificaton:</label>
                                          <div class="col-sm-10">
                                             <span>{{ $cargo_type->specification }}</span>
                                          </div>
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
                                                   {{$cargoTextTag->cargoTagValueByCargoId->value}}
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



               <div class="row">
                  <div class="col-md-12">
                     <div class="contentwrapper">
                        <div class="content-box">
                           <h1>Internal Notes</h1>
                           <div class="form-box">
                              <small>04/17/2017 16:25:00 GTM</small>
                              <h3><a href="#">User Name</a></h3>
                              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </P>
                              <small>04/17/2017 16:25:00 GTM</small>
                              <h3><a href="#">User Name</a></h3>
                              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </P>
                              <div class="comment-box">
                                 <textarea class="form-control" placeholder="type your notes here..."></textarea>
                              </div>
                              <div class="top-section">
                                 <a href="#" class="btn btn-primary-alt pull-right add-btn"><i class="fa fa-plus"></i>Post</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

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
            </div>
            <!-- contentpanel -->
<!--end  -->
