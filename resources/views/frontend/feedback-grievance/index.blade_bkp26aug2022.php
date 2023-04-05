@extends('layouts.app')
@section('content')
<section class="formDiv">
  <div class="container">
    <div class="row">
      <p class="formTitle">GRIEVANCE / FEEDBACK FORM</p>
      <div class="choose-type">
        <label for="grivance"><input type="radio" name="formtype" value="grivance" id="grivance"> GRIEVANCE</label>
        |
        <label for="feedback"><input type="radio" name="formtype" value="feedback" id="feedback"> FEEDBACK</label>
      </div>
      <form action="" name="grivanceForm" enctype="multipart/form-data">
        <div class="col-12">
          <div class="col-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" name="cid" class="form-control" placeholder="Complain ID">
            </div>
            <div class="form-group">
              <input type="file" name="file" class="form-control">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="Your Phone">
            </div>
            <div class="form-group">
              <select name="district" id="district" class="form-control">
                <option value="">-- Select District --</option>
                <option value="alipurduar">Alipurduar</option>
                <option value="bankura">Bankura</option>
              </select>
            </div>
            <div class="form-group">
              <textarea name="msg" id="msg" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
            </div>
          </div>
        </div>
        <div class="text-center">
          <input type="submit" name="submit" value="Send Message" class="submit-btn">
        </div>
      </form>
      <form action="" name="FeedbackForm" enctype="multipart/form-data">
        <div class="col-12">
          <div class="col-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" name="cid" class="form-control" placeholder="Complain ID">
            </div>
            <div class="form-group">
              <input type="file" name="file" class="form-control">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="Your Phone">
            </div>
            <div class="form-group">
              <select name="district" id="district" class="form-control">
                <option value="">-- Select District --</option>
                <option value="alipurduar">Alipurduar</option>
                <option value="bankura">Bankura</option>
              </select>
            </div>
            <div class="form-group">
              <textarea name="msg" id="msg" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
            </div>
          </div>
        </div>
        <div class="text-center">
          <input type="submit" name="submit" value="Send Message" class="submit-btn">
        </div>
      </form>
    </div>
  </div>
</section>
@endsection