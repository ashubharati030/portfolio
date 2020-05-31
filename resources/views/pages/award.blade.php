@extends('layouts.app')


@section('content')
<br>
	<div style="margin-left:30px;margin-right:800px;background:rgb(201, 144, 59)" class="jumbotron "> <!--Jumbotron controls the size of card by its margin-->
        
        <h1><span class="badge badge-success"style="color:black">AWARDS</span></h1>
        <h4>
            <ul>    
                
                    <div class='row'>
                        <div class='col-md-8'>
                            <br>
                            <li><b>April,2020</b><br>
                            Got 5-Star Gold Badge in C++ programming from HackerRank.<br>
                            <u>User-id:</u> ashubharati030.
                        </div>

                        <div class='col-md-4'>
                            <img src="/cover_image/Image21.jpeg" class="rounded-square" alt="Cinque Terre" width="115" height="115"> 
                        </div>
                        
                    </li>
                    </div>
               
                    <hr>
                    <li><b>November,2015</b><br>
                    Got Awarded for scoring
                    highest in Physics in boards.
                    <br></li>
                    <hr>
                    <li>
                    <b>November,2015</b><br>
                    Got Awarded for scoring
                    highest in History in boards.
                    </li>
                    </h4>
            </ul>
    </div>

@endsection
    