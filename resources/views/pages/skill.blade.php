@extends('layouts.app')


@section('content')
<br><br><br><br>
    <div style="margin-left:30px;margin-right:800px;background:rgb(201, 144, 59)" class=" col-md-8 col-sm-8 col-xs-8 jumbotron float-left "> <!--Jumbotron controls the size of card by its margin-->
        
        
        <h1><span class="badge badge-success"style="color:black">SKILLS</span></h1>

        <div class="card-group">
        
            <div class="card bg-primary">
                <div class="card-body text-left">

                    <h5><u>PROGRAMMING-LANGUAGES</u></h5>
                    
                    <ul>
                    
                        <li><p class="card-text">C (Advance)</p></li>
                        <br>
                        <li><p class="card-text">In depth Knowledge in Object Oriented Programming.</p></li>
                        <br>
                        <li><p class="card-text">C++ (Advance)</p></li>
                    </ul>    
                </div>
            </div>
            
            <div class="card bg-warning">
                <div class="card-body text-left">
                    <h5><u>WEB TECHNOLOGIES</u></h5>
                    <ul>
                        <li><p class="card-text">  HTML(Intermediate)</p>
                        <li><p class="card-text">  CSS(Intermediate)</p>
                        <li><p class="card-text">  JAVASCRIPT(Intermediate)</p>
                        <li><p class="card-text">  PHP(Intermediate)</p>
                        <li><p class="card-text">  BOOTSTRAP(Intermediate)</p>
                        <li><p class="card-text">  LARAVEL(Intermediate)</p></li>
                    
                    </ul>
                </div>
            </div>
            
            <div class="card bg-success">
                <div class="card-body text-left">
                    <h5><u>LANGUAGES</u></h5>
                    <ul>
                        <li><p class="card-text">ENGLISH(Advance)</p><br>    
                        <li><p class="card-text">HINDI(Advance)</p><br>
                        <li><p class="card-text">BENGALI(Advance)</p></li>
                    </ul>
                </div>
            </div>
        
        </div>
    </div>


@endsection