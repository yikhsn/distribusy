<div class="row">
    <div class="col-md-2">
        <form method="POST" action="/login">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">    
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">    
          </div>

          <button type="submit" class="btn btn-danger">Login</button>
        
          <hr>
        
          @include('layouts.errors')
        
        </form>      
    </div>
    <div class="col-md-8">
  
    </div>
  </div>