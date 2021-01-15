@extends('layouts.app')
<?php
    
    $title = 'doctor list';
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
    text-align: right;
    padding: 15px 10px;
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
        <a href="/empRegister">Employee Registration</a>
      </li>
      <li>
        <a href="/userList">Users</a>
      </li>
      <li>
        <a href="/doctorList" class="active">Doctors</a>
      </li>
      <li>
        <a href="/patientList">Patients</a>
      </li>
      <li>
        <a href="/changePassword">Change Password</a>
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
    
    <h3><a href="/addDoctor" class="btn btn-info">+Add New</a></h3>
    <div class="row justify-content-center">
      <div class="col-md-12 table-responsive">
        <table class="table table-striped">
          <tr>
              <th>Name</th>
              <th>Speciality</th>
              <th>Working Hospital</th>
              <th>E-mail</th>
              <th>Contact Number</th>
              <th>Action</th>
              
          </tr> 
          
          <tr>
              <td>nsdfwjefh fwu</td>
              <td>dentist</td>
              <td>Kandy</td>
              <td>qwertgh5738@gmail.com</td>
              <td>465733896</td>
              <td><a href="/viewSessions" class="btn btn-info">View Sessions</a>&nbsp;&nbsp;<a href="/updateDoctor"  class="btn btn-success">Update</a></td>
              
          </tr>  
          <tr>
                <td>sdfhjww ri</td>
                <td>dentist</td>
                <td>Kandy</td>
                <td>qwertgh5738@gmail.com</td>
                <td>465733896</td>
                <td><a href="/viewSessions" class="btn btn-info">View Sessions</a>&nbsp;&nbsp;<a href="/updateDoctor"  class="btn btn-success">Update</a></td>
        </tr>
        <tr>
            <td>sjkukerv rsefv</td>
              <td>dentist</td>
              <td>Kandy</td>
              <td>qwertgh5738@gmail.com</td>
              <td>465733896</td>
              <td><a href="/viewSessions" class="btn btn-info">View Sessions</a>&nbsp;&nbsp;<a href="/updateDoctor"  class="btn btn-success">Update</a></td>
        </tr>

        </table>
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