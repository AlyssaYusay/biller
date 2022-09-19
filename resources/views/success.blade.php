@extends('layouts.sidebar')

<style>

  div#app{
    height: 100vh;
  }
    #btn{
        border-radius: 10px;
    }

  .border{
    border-radius: 10px;
  }

  div#container{
    padding-top: 15rem;
  }

  #btn{
    background-color: #FFB20C;
   color: white;
  }
  #btn:hover{
   color: white;
    filter:brightness(80%)
  }


 

 /* media query */
@media screen and (max-width: 480px){

p.current{
  font-size: 1.5rem;
}

}

@media screen and (min-width: 768px) and (max-width:991px){
#position{
  margin-left: 10rem;
}
}
</style>

@section('content')


    <div class="container" id="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="alert alert-primary">
                    <h3 class="text-center">Record Added Successfully</h3> 
                    <center><a href="{{ url('/admin') }}" class="btn" id="btn">Go Back</a></center>
                </div>
            </div>
        </div>
    </div>
@endsection
