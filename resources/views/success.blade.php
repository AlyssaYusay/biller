@extends('layouts.app')

<style>
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
    background-color: #F15623;
   color: white;
  }
  #btn:hover{
   color: white;
    filter:brightness(80%)
  }
</style>

@section('content')
    <div class="container" id="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="alert alert-success">
                    <h3 class="text-center">Record Added Successfully</h3> 
                    <center><a href="{{ url('/admin') }}" class="btn" id="btn">Go Back</a></center>
                </div>
            </div>
        </div>
    </div>
@endsection
