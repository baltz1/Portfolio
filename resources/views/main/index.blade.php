@extends('layouts/main')

@section('title')
  Baltazar Nunez || Web Developer
@endsection

@section('content')
  <section id="header">
    <nav role="navigation">
      <div class="logo">
        <img src="img\logo2.png" alt="">
      </div>
      <div class="menuToggle">

        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="nav-links">
          <a class="hidden" href="#header">Home</a>
          <a class="hidden" href="#about">About</a>
          <a class="hidden" href="#projects">Portfolio</a>
          <a class="hidden" href="#contact">Contact</a>
        </div>

      </div>
    </nav>
    {{-- Flash Message when contact message is sent --}}
    @if(Session::has('success'))
      <div class="flash-success" role="alert">
        <strong>Success:</strong><p>{{Session::get('success')}}</p>
      </div>
    @endif
    @if (count($errors) > 0)
      <div class="flash-error" role="alert">
        <strong>Error:</strong>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="name">
      <span></span>
      <h1>Baltazar Nunez</h1>
      <span></span>
      <ul>
        <li>#Web Developer</li>
        <li>#Artist</li>
      </ul>
    </div>
  </section>

 <section id="about">
   <div class="container">
     <div class="row">
       <div class="col-xl-2 col-lg-2 col-md-12 abt-display">
         <h2>About</br><span>Me</span></h2>
       </div>
       <div class="col-xl-5 col-lg-6 col-md-6">
         <div class="abt-content">
           <p>Hi, I'm Baltazar Nunez, A Web Developer based in Sacramento, Ca.</p>
           <p>I specialize in the Front End of web development, but I am no stranger to the server side of things. My strength lies in creating living, functional apps from mock ups, my passion for problem solving with technical solutions make it that much fun. Feel free to contact me to chat, collaborate, or work on some fun projects.</p>
         </div>
         <div class="icons">
           <div class="icon">
             <a href="https://www.facebook.com/ricardo.nunez.9469545">
               <i class="fab fa-facebook-f"></i>
             </a>
           </div>
           <div class="icon">
             <a href="https://www.instagram.com/balt_jitsu19/?hl=en">
               <i class="fab fa-instagram"></i>
             </a>
           </div>
           <div class="icon">
             <a href="https://www.linkedin.com/in/baltazar-nunez-8119a5155">
               <i class="fab fa-linkedin-in"></i>
             </a>
           </div>
           <div class="icon">
             <a href="https://github.com/baltz1">
               <i class="fab fa-github"></i>
             </a>
           </div>
         </div>
       </div>
       <div class="col-xl-5 col-lg-4 col-md-6">
         <img class="img-fluid" src="/img/myself.jpg" alt="">
       </div>
     </div>
   </div>
 </section>

 <section id="skills">
   <div class="container">
     <div class="row">
       <div class="col-xl-2 col-lg-2 col-md-12" style="float: right;">
         <div class="title">
           <h2>My</br><span>Skills</span></h2>
         </div>
       </div>
       <div class="col-xl-10 col-lg-10 col-md-12">
         <div class="row">
           <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="skill">
               <h5>Html</h5>
               <div class="bar">
                 <div class="bar-fill" data-name="Html" data-value="90">
                   <div class="bar-percent">
                     <span class="percent">90%</span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="skill">
               <h5>Css</h5>
               <div class="bar">
                 <div class="bar-fill" data-name="Css" data-value="80">
                   <div class="bar-percent">
                     <span class="percent">80%</span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="skill">
               <h5>JavaScript</h5>
               <div class="bar">
                 <div class="bar-fill" data-name="javaScript" data-value="65">
                   <div class="bar-percent">
                     <span class="percent">65%</span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="skill">
               <h5>jQuery</h5>
               <div class="bar">
                 <div class="bar-fill" data-name="jquery" data-value="75">
                   <div class="bar-percent">
                     <span class="percent">75%</span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="skill">
               <h5>React</h5>
               <div class="bar">
                 <div class="bar-fill" data-name="react" data-value="30">
                   <div class="bar-percent">
                     <span class="percent">30%</span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="skill">
               <h5>Php/Laravel</h5>
               <div class="bar">
                 <div class="bar-fill" data-name="php-laravel" data-value="75">
                   <div class="bar-percent">
                     <span class="percent">75%</span>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </div>
 </section>

 <section id="projects">
   <div class="container">
     <div class="row">
       <div class="col-xl-2 col-lg-2 title">
         <h2>My <span>Projects</span></h2>
       </div>
       <div class="col-xl-10 col-lg-10">
         <div class="row projects">
           <div class="col-xl-8 col-lg-8">
             <div class="project">
               <img src="/img/restaurant.PNG" alt="restaurant app built in hyperapp.js">
               <div class="overlay">
                 <h5>Restaurant Website</h5>
                 <p>Restaurant design created with Html 5, scss, jQuery, with the Hyperapp framework.</p>
                 <a href="https://baltz1.github.io/restaurant-app/" target="_blank"><button type="button">View</button></a>
               </div>
             </div>
           </div>
           <div class="col-xl-4 col-lg-4">
             <div class="project">
               <img class="img-fit" src="/img/designstorm.PNG" alt="">
               <div class="overlay">
                 <h5>DesignStorm</h5>
                 <p>A website for designers to personalize and grab inspiration on their next project. A RESTful api app, created using Html5, Php with Laravel framework, Vanilla Js, scss, Mysql Database.</p>
                 <a href="http://design-storm.herokuapp.com/" target="_blank"><button type="button">View</button></a>
               </div>
            </div>
           </div>
         </div>
         <div class="row projects">
           <div class="col-xl-4 col-lg-4">
             <div class="project">
               <img src="/img/aqualla.PNG" alt="">
               <div class="overlay">
                 <h5>Aquala</h5>
                 <p>A psd design I took from dribbble. Created with Html5, Scss, Vanilla Js.</p>
                 <a href="https://baltz1.github.io/Aqual/" target="_blank"><button type="button">View</button></a>
               </div>
            </div>
           </div>
           <div class="col-xl-4 col-lg-4">
             <div class="project">
               <img src="/img/realestate.PNG" alt="realestate app">
               <div class="overlay">
                 <h5>Realestate App</h5>
                 <p>A design from dribbble. Created with Html5, Scss, React.js</p>
                 <a href="https://baltz1.github.io/react-project/" target="_blank"><button type="button">View</button></a>
               </div>
            </div>
           </div>
           <div class="col-xl-4 col-lg-4">
             <div class="project">
               <img src="/img/taskmanager.PNG" alt="">
               <div class="overlay">
                 <h5>TaskManager</h5>
                 <p>A personalized task manager design from dribble, created with Html5, Php with Laravel framework, Scss, Mysql Database. </p>
                 <a href="https://afternoon-badlands-80034.herokuapp.com/" target="_blank"><button type="button">View</button></a>
               </div>
            </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <section id="contact">
   <div class="container">
     <h2>Contact Me</h2>
     <div class="form-container">
       <form class="form" action="/" method="post">
          @csrf
         <input type="text" name="name" required placeholder="Name*">
         <input type="email" name="email" required placeholder="Email*">
         <input type="text" name="subject" required placeholder="Subject*">
         <textarea name="message" placeholder="Message*" required rows="8" cols="80"></textarea>
         <input type="submit" value="Send">
       </form>
     </div>
   </div>
 </section>
 <footer id="footer">
   <div class="icons">
     <div class="icon">
       <a href="https://www.facebook.com/ricardo.nunez.9469545">
         <i class="fab fa-facebook-f"></i>
       </a>
     </div>
     <div class="icon">
       <a href="https://www.instagram.com/balt_jitsu19/?hl=en">
         <i class="fab fa-instagram"></i></a>
     </div>
     <div class="icon">
       <a href="https://www.linkedin.com/in/baltazar-nunez-8119a5155">
         <i class="fab fa-linkedin-in"></i>
       </a>
     </div>
     <div class="icon">
       <a href="https://github.com/baltz1">
         <i class="fab fa-github"></i>
       </a>
     </div>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-xl-12 col-lg-12 copyright">
         <p> &copy; Baltazar Nunez All Rights Reserved.</p>
       </div>
     </div>
   </div>
 </footer>
@endsection
