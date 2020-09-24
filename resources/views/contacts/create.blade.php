@extends('base')

@section('main') 
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h4 class="text-center"><br><b>SEND US A MESSAGE</b></h4>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <br>
      <div class="col-sm-5">

          <form method="post" action="{{ route('contacts.store') }}" class="formulario">
              @csrf
              <div class="form-group">    
                  <input type="text" class="form-control form-control-lg form-rounded " name="first_name" placeholder="Full Name"/>
              </div>

              <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-rounded" name="email" placeholder="Email"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-rounded" name="telephone" placeholder="Telephone"/>
              </div>
              <div class="form-group">
                  <textarea type="text" class="form-control form-control-lg form-rounded" name="message" placeholder="Your Message"></textarea>
              </div>                       
              <button type="submit" class="btn btn-info btn-lg boton"><span class="fa fa-paper-plane"> Send </span></button>
          </form>
            <div class="lastest-new">
            </div>
      </div>    
  </div>
</div>
</div>
@endsection