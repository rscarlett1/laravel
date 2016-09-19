@extends('main')

@section('title', '| Contact')

@section('content')
      <div class="row">
          <div class="col-md-12">
              <h1>Contact Me</h1>
              <hr> 
              <form>
                <div class="form-group">  
                  <label name="email">Email:</label>
                  <input id="email" name="email" class="form-control"> 
                </div>

                 <div class="form-group">  
                  <label name="subject">Subject:</label>
                  <input id="subject" name="subject" class="form-control"> 
                </div>

                <div class="form-group">  
                  <label name="message">message:</label>
                  <textarea name="message" id="message" class="form-control"cols="30" rows="10">Type your message here...</textarea>    
                </div>

                <input type="submit" name="submit" value="Send Message" class="btn btn-success">
              </form>
            </div> 
      </div> 
</div>

@endsection
    
