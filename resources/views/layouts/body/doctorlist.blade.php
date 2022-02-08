

<!--display doctors-->
    <div class="card">
        <div class="card-body">

   <div class="card-header">
        <h3>Choose Date</h3></div>
            <div class="card-body col-md-3">                                    
                <input type="text" class="form-control datetimepicker-input" id="datepicker"
                 data-toggle="datetimepicker" data-target="#datepicker">
            </div>                           
        </div>
   </div>
         <div class="card-header "> Doctors List </div>


  <div class="card-body">
                    <table id="dataTable" class="table table-striped col-md-12">
                      <thead>
                        <tr>
                          <th scope="col-xs-1">#</th>
                          <th scope="col-md-2">Patient Name</th>
                          <th scope="col-md-1">Gender</th>
                          <th scope="col-md-2"> Patient Email</th></th>
                          <th scope="col-md-1">Booking Date</th>
                            <th scope="col-md-1">Appointment Date</th>
                          <th scope="col-md-1">Status</th>

                          <th scope="col-md-2">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>

                    @php( $i =1 ) 
               
                   @foreach($appointments as $key=>$appointment)
                        <tr>
                  
                             <td> {{ $i++}}</td> 

                              <td>{{$appointment->user->name}}</td> 
                             <td>{{$appointment->user->gender}}</td> 
                             <td>{{$appointment->user->email}}</td> 
                  

                         {{--      <td>{{$appointment->doctor->name}}</td>  
                             
                             <td>{{$appointment->booking_date }}</td>
                             <td>{{$appointment->appointment_date}}</td>

                              <td>

                                   @if($appointment->status==0)
                                      <span class="badge badge-primary">Pending</span>
                                  @endif
                                  @if($appointment->status==1)
                                      <span class="badge badge-success">Approved</span>
                                  @endif
                                  @if($appointment->status==2)
                                      <span class="badge badge-warning">Cancelled</span>
                                  @endif  
                                  
                                   @if($appointment->status==3)
                                      <span class="badge badge-info">Started</span>
                                  @endif 
                                  @if($appointment->status==4)
                                      <span class="badge badge-secondary">Finished</span>
                                  @endif 
                                   @if($appointment->status==5)
                                      <span class="badge badge-danger">Absent</span>
                                  @endif 
                                    
                           </td> 
     

                           <td>
                                <a href="{{route('update.status',[$appointment->id,1])}}"><button class="btn  btn-info"> Approved </button></a> 
                            
                               <a href="{{route('update.status',[$appointment->id,2])}}"><button class="btn btn-danger"> Cancelled</button></a>
                            

                          </td>

                      
                          </tr>
                        @endforeach
                    
                      </tbody> 
                    </table>
     </div>




            {{-- <div class="card-body center ">
<br>
<br><br>
   <table id="dataTable" class="table table-bordered col-md-9 ">
                      <tr>
                        
                            <th>Name</th>
                            <th>Education</th>
                            <th>Expertise</th>
                            <th>Photo</th>
                            <th>Booking</th>
                        </tr> 




                        
                   
                      @foreach($doctors as $doctor)
                      <tr>
                     {{--    <td> {{ $i++}}</td> 
                       {{--  <td >{{$doctor->id}}</td> -
                        <td >{{$doctor->name}}</td>
                        <td>{{$doctor->education}}</td>
                        <td>{{$doctor->department}}</td>
                       <td> <img src="{{asset ('images')}}/{{$doctor->image}} "height = "70px;" width="60px;">  </td> 

                        <td>
  {{--         <a class="btn btn-info" href="{{ route('create.appointment', [$doctor->name ]) }}" ">Book Now</a> 
   
         <a class="btn btn-info" href="{{ URL::to ("doctor/booking/".$doctor->id)}}">Book Now</a>  
         
                        </td>
                        @endforeach
                      </tr>
                  </table>
            </div> 
        </div>
--}}

    