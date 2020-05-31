@extends('layouts.app')


@section('content')
<br><br><br><br>
    <div style="margin-left:30px;margin-right:800px;background:rgb(201, 144, 59)" class=" jumbotron float-left"> <!--Jumbotron controls the size of table by its margin attribute-->
        <div style="margin-left:0px; margin-right:0px;" class="float-left"> <!--when jumbotron was not there then by margin we used to control size of table-->
            
            <h1><span class="badge badge-success"style="color:black">QUALIFICATION</span></h1>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th >Institution</th>
                        <th >Address</th>
                        <th >Degree</th>
                        <th >Grade</th>
                        <th >Academic-Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-success">
                        <td>Indian Institute of Engineering Science And Technology(IIEST), Shibpur</td>
                        <td>Howrah-711103, West Bengal </td>
                        <td>Second Year -4th Semester, Btech, Computer Science</td>
                        <td>CGPA - 8.97(till 3rd semester)</td>
                        <td>July 2018-2022</td>
                        
                        </tr>
                        <tr class="table-warning">
                        <td>Delhi Public School</td>
                        <td>Ruby Park ,Kolkata</td>
                        <td>Higher Secondary</td>
                        <td>Grade-​ 89.8 percent</td>
                        <td>April 2017</td>
                        </tr>
                        <tr class="table-primary">
                        <td>Andhra Association High School</td>
                        <td>Kalighat,Kolkata </td>
                        <td>Secondary examination</td>
                        <td>Grade-​ 90​ percent</td>
                        <td>April 2015</td>
                        
                        </tr>
                    </tbody>
                </table>  
            </div>
            <br>
            <h1><span class="badge badge-success"style="color:black">EXPERIENCE</span></h1>
            <h3>
                <b><u>ICCHE, IIEST shibpur​ — ​ Teacher</b></u>
                <br>
                <small>Joined in july,2019.</small>
                <br>
            </h3>
            <h4>
                ICCHE is an institute society aimed at upliftment of the poor section of
                the society. We teach poor children from nursery to class 12 and try to
                help them in all possible ways to develop their career.
            </h4>

        </div>    
    </div>
@endsection