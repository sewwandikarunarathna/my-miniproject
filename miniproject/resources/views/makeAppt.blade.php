@extends('layouts.app')
<?php
    
    $title = 'make appointment';
   $page = "";
 ?>


<style>
  .wrapper{
    display: flex;
    text-decoration: none;
    transition: all 0.3s;
    height: auto;
  }
  .sidebar{
    min-width: 250px;
    max-width: 250px;
    background: #655c56;
   
    transition: color 0.3s;
  }
  .sidebar .active{
   /* margin-left: -250px;*/
   background-color: #effcef;
   color: #655c56;
  }

  .components{
    padding: 30px 0px;
   
  }
  .sidebar ul li a{
    padding: 20px;
    font-size: 1.1em;
    display: block;
    border-bottom: 1px solid #94d3ac;
    color: #effcef;
  }
  .sidebar ul li a:hover{
    color: #655c56;
    background: #ccedd2;
    text-decoration: none;
  }

  .area{
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
  }

  .area h3{
    text-align: center;
  }
  @media (max-width: 768px) {
    .sidebar{
      margin-left: -250px;
    }
    .sidebar .active{
      margin-left: 0px;
    }
    #sidebarCollapse span{
      display: none;
    }
  }
  
  
  
</style>

@section('content')

<div class="wrapper"> 
  <nav class="sidebar">
    <ul class="lisst-unstyled components">
      <li class="">
        <a href="" class="active">Make Appointment</a>
      </li>
      <li>
        <a href="/channelDet">Channeling Details</a>
      </li>
      <li>
        <a href="/myAppt">My Appointments</a>
      </li>
      <li>
        <a href="/myProfile">My Profile</a>
      </li>
    </ul>

  </nav>
  
  <div class="area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-align-left"></i>
          <span>Toggle Menu</span>
        </button>
      </div>
    </nav>
    <br>
  
 

 
    <div class="row justify-content-center">
      <div class="col-md-8">

                  <form method="POST" action="makeAppt.blade.php">
                      @csrf
                      <h3>Make Appointment!</h3>
                      <hr>
                      <div class="form-group row">
                          <label for="patient_id" class="col-md-4 col-form-label text-md-right">{{ __('patient ID') }}</label>

                          <div class="col-md-6">
                              <input id="patient_id" type="text" class="form-control @error('patient_id') is-invalid @enderror" name="patient_id" value="{{ old('patient_id') }}" required autocomplete="name" autofocus>

                              @error('patient_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="doctor" class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>

                          <div class="col-md-6">
                              <select id="doctor" class="form-control @error('doctor') is-invalid @enderror" name="doctor" value="{{ old('doctor') }}" required autocomplete="name" autofocus>
                                  <option value="doctor 1">doctor 1</option>
                                  <option value="doctor 2">doctor 2</option>
                              </select>

                              @error('doctor')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="name" autofocus>

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                   

                      <div class="form-group row">
                        <label for="session" class="col-md-4 col-form-label text-md-right">{{ __('Session') }}</label>

                        <div class="col-md-6">
                            <select id="session" class="form-control @error('session') is-invalid @enderror" name="session" value="{{ old('session') }}" required autocomplete="name" autofocus>
                                <option value="4">4 - 5</option>
                                <option value="5">5 - 6</option>
                                <option value="6">6 - 7</option>
                                <option value="7">7 - 8</option>
                            </select>

                            @error('session')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                     
                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary button">
                                  {{ __('Make Appointment') }}
                              </button>
                          </div>
                      </div>
                     
                  </form>
           </div>   
         
      </div>
 </div>


</div>

@include('layouts.footer')
@endsection

@section('scripts')

<script>
  //sidebar toggle
  $(document).ready(function (){
    $("#sidebarCollapse").on('click', function(){
    $(".sidebar").toggleClass('active');
    });
  });
</script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
@endsection