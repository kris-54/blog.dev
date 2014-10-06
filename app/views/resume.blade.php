@extends('layouts.master')

@section('title')
	My Resume
@stop

<style type="text/css">

.container {
    background-color: black;
    color: rgb(0,223,250);
}

#row2 {
    padding-bottom: 100px;
}


</style>



@section('body')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kris Campos <small>Software Developer</small></h1>

        </div>
    </div>


        
    <div class="row">    
        <div class="col-lg-6"><h3>Contact</h3>
            <strong>Kris Campos</strong><br>
            <p>
                <a href="mailto:kcampos541@icloud.com"><span class="glyphicon glyphicon-envelope"></span></a>
            </p>
            <p>
                <a href="https://github.com/kris-54"><span class="glyphicon glyphicon-folder-close"></span></a>
            </p>
            
   
        </div>
        <div class="col-lg-6"><h3>Developer Experience</h3>
             <ul>
                <li>Javascript</li>
                <li>JQuery</li>
                <li>Linux</li>
                <li>Apache</li>
                <li>HTML/CSS</li>
                <li>PHP</li>
                <li>MySQL</li>
             </ul>
        </div>
    </div>    

     <div id="row2" class="row">
        <div class="col-lg-6 col-lg"><h3>Work Experience</h3>
            <p><strong>Goodwill Industries</strong><br>
                Computer Technician
            </p>
            <p><strong>Goodwill Industries</strong><br>
                Customer Service
            </p>
        </div>
        <div class="col-md-6"><h3>Education</h3>
            <p><strong>LAMP+J Software Development Bootcamp</strong><br>
                <a href="http://www.codeup.com">Codeup</a><br>
                <i>San Antonio, TX</i>
            </p>
        </div>          
    </div>
</div>
@stop




