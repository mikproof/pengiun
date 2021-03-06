@extends('layouts.app')



@section('content')


  <section id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="showcase-left">
              <img src="shield.png", class="shieldimg">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="showcase-right">
              <h1>Protect your home today</h1>
              <p>Penguin Protection values safety above all. We are rated number one in Customer Satisfaction and safety.
                Our systems are custom built for your needs. Give us a call today!</p>
            </div>
            <br>
          </div>
        </div>
      </div>
    </section>

<section id="testimonial">
    <div class="container">
        <p> "Penguin Protection is the best company in the world. I had to switch from ADT to Penguin Protection because the customer service was excellent."</p>
        <p class="customer">- Mary Jane</p>
    </div>
</section>

<section>
        <center> <h1>Our Products</h1></center>
        <center><h4>Let us help you get the right system to protect your business or home!</h4></center>
</section>
<hr>
<section>
  <div class="row">
    <div class="container">


      @forelse($alarms->chunk(4) as $chunk)
        @foreach($chunk as $alarm)
      <div class="col-md-3">
          <div class="img-wrapper">

            <a href="#">
             <img src="{{url('images',$alarm->image)}}"/>
            </a>
      </div>
      <h3>{{$alarm->name}}</h3>
    </div>
      @endforeach
    @empty

    <h3>No alarms</h3>

    @endforelse
      </div>
  </div>

</section>
<hr>
<section id="info2">
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <div class="info-left">
        <h2>Customer 1st!</h2>
        <p>Customers are our first priority. We make sure our systems are top of the line so that our customers always feel safe and protected.
        </figure> </p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="info-right">
        <h2>Products</h2>
        <p>The alarms we currently provide include; Fire Detection, Flood Detection, Seruity Alarm, and Bio-Hazard Alarm.
          Speak with one of our representatives today to recieve additional information
        about our products. </p>
      </div>
    </div>
  </div>
</div>
</section>


      <section id="contact" style=" background:url(image3.png);">
     <div class="container">
       <div class="row">
         <div class="col-md-5 col-sm-5">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>  <br>
            <br>
            <br>
            <br>  <br>
              <br>
              <br>
              <br>
         </div>
         <div class="col-md-7 col-sm-7">

         </div>
       </div>
     </div>
   </section>


  </section>


    <footer>
      <p class="text-center">Penguin Protection Copyright &copy; 2017</p>
    </footer>



@endsection
