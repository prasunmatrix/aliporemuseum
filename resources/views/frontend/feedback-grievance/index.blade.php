@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('content')
<section class="formDiv">
  <div class="container">
    <div class="row">
      <p class="formTitle">GRIEVANCE / FEEDBACK FORM</p>
      <div class="choose-type">
        <label for="grivance"><input type="radio" name="formtype" value="grivance" id="grivance" checked="checked" onclick="showFrm(this.value)"> GRIEVANCE</label>
        |
        <label for="feedback"><input type="radio" name="formtype" value="feedback" id="feedback" onclick="showFrm(this.value)"> FEEDBACK</label>
      </div>
      <div id="grivanceDiv">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable __web-inspector-hide-shortcut__">
          <span style="color:green;">{{ Session::get('success') }}</span>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable">
          <span style="color:red;">{{ Session::get('error') }}</span>
        </div>
        @endif
        <form method="post" name="grivanceFrm" id="grivanceFrm" action="{{ route('grievance.post') }}" enctype="multipart/form-data">
          <input type="hidden" value="<?= csrf_token() ?>" name="_token">
          <div class="col-12">
            <div class="col-6">
              <div class="form-group">
                <input type="text" name="uname" id="uname" required class="form-control" placeholder="Your Name">
                <span style="color:red;">{{ $errors->first('uname') }}</span>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Your Email">
                <span style="color:red;">{{ $errors->first('email') }}</span>
              </div>
              <div class="form-group">
                <input type="text" name="complain_id" id="complain_id" readonly class="form-control" placeholder="Complain ID">
              </div>
              <div class="form-group">
                <input type="file" name="file" class="form-control">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <input type="text" name="phone" id="phone" required pattern="\d{10}" maxlength="10" class="form-control" placeholder="Your Phone">
                <span style="color:red;">{{ $errors->first('phone') }}</span>
              </div>
              <div class="form-group">
                <select name="branch" id="branch" required onchange="branchName(this.value)" class="form-control">
                  <option value="">-- Select Branch --</option>
                  <option value="RAIGANJ MAIN BRANCH">RAIGANJ MAIN BRANCH</option>
                  <option value="ISLAMPUR BRANCH">ISLAMPUR BRANCH</option>
                  <option value="BUNIADPUR BRANCH">BUNIADPUR BRANCH</option>
                  <option value="CHOPRA BRANCH">CHOPRA BRANCH</option>
                  <option value="ITAHAR BRANCH">ITAHAR BRANCH</option>
                  <option value="KALIYAGANJ BRANCH">KALIYAGANJ BRANCH</option>
                  <option value="KUSHMANDI BRANCH">KUSHMANDI BRANCH</option>
                  <option value="KUNORE BRANCH">KUNORE BRANCH</option>
                  <option value="DALKHOLA BRANCH">DALKHOLA BRANCH</option>
                  <option value="HEMTABAD BRANCH">HEMTABAD BRANCH</option>
                  <option value="MOHANBATI BRANCH">MOHANBATI BRANCH</option>
                  <option value="TUNGIDIGHI BRANCH">TUNGIDIGHI BRANCH</option>
                  <option value="KANKI BRANCH">KANKI BRANCH</option>
                  <option value="HARIRAMPUR BRANCH">HARIRAMPUR BRANCH</option>
                  <option value="PANJIPARA BRANCH">PANJIPARA BRANCH</option>
                  <option value="UKILPARA BRANCH">UKILPARA BRANCH</option>
                </select>
                <span style="color:red;">{{ $errors->first('branch') }}</span>
              </div>
              <div class="form-group">
                <textarea name="msg" id="msg" required cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                <span style="color:red;">{{ $errors->first('msg') }}</span>
              </div>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" name="submit" value="Send Message" class="submit-btn">
          </div>
        </form>
      </div>
      <div id="feedbackDiv" style="display: none;">
        <form action="{{ route('feedback.post') }}" method="post" name="FeedbackFrm" id="FeedbackFrm" enctype="multipart/form-data">
          <input type="hidden" value="<?= csrf_token() ?>" name="_token">
          <div class="col-12">
            <div class="col-6">
              <div class="form-group">
                <input type="text" name="uname" id="uname1" required  class="form-control" placeholder="Your Name">
                <span style="color:red;">{{ $errors->first('uname') }}</span>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email1" required class="form-control" placeholder="Your Email">
                <span style="color:red;">{{ $errors->first('email') }}</span>
              </div>
              <div class="form-group">
                <input type="text" name="feedback_id" id="feedback_id" class="form-control" placeholder="Feedback ID">
              </div>
              <div class="form-group">
                <input type="file" name="file" class="form-control">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <input type="text" name="phone" id="phone1" required pattern="\d{10}" class="form-control" placeholder="Your Phone">
                <span style="color:red;">{{ $errors->first('phone') }}</span>
              </div>
              <div class="form-group">
              <select name="branch" id="branch1" required onchange="branchNameFeedback(this.value)" class="form-control">
                  <option value="">-- Select Branch --</option>
                  <option value="RAIGANJ MAIN BRANCH">RAIGANJ MAIN BRANCH</option>
                  <option value="ISLAMPUR BRANCH">ISLAMPUR BRANCH</option>
                  <option value="BUNIADPUR BRANCH">BUNIADPUR BRANCH</option>
                  <option value="CHOPRA BRANCH">CHOPRA BRANCH</option>
                  <option value="ITAHAR BRANCH">ITAHAR BRANCH</option>
                  <option value="KALIYAGANJ BRANCH">KALIYAGANJ BRANCH</option>
                  <option value="KUSHMANDI BRANCH">KUSHMANDI BRANCH</option>
                  <option value="KUNORE BRANCH">KUNORE BRANCH</option>
                  <option value="DALKHOLA BRANCH">DALKHOLA BRANCH</option>
                  <option value="HEMTABAD BRANCH">HEMTABAD BRANCH</option>
                  <option value="MOHANBATI BRANCH">MOHANBATI BRANCH</option>
                  <option value="TUNGIDIGHI BRANCH">TUNGIDIGHI BRANCH</option>
                  <option value="KANKI BRANCH">KANKI BRANCH</option>
                  <option value="HARIRAMPUR BRANCH">HARIRAMPUR BRANCH</option>
                  <option value="PANJIPARA BRANCH">PANJIPARA BRANCH</option>
                  <option value="UKILPARA BRANCH">UKILPARA BRANCH</option>
                </select>
              </div>
              <div class="form-group">
                <textarea name="msg" id="msg1" required  cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                <span style="color:red;">{{ $errors->first('msg') }}</span>
              </div>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" name="submit" value="Send Message" class="submit-btn">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
<script>
  function showFrm(param) {
    //console.log(param);
    if (param == "feedback") {
      $('#feedbackDiv').show();
      $('#grivanceDiv').hide();
    } else {
      $('#grivanceDiv').show();
      $('#feedbackDiv').hide();
    }
  }
</script>
<script>
  function branchName(value) {
    $.ajax({
      type: "GET",
      url: "{{ route('grievance.id') }}",
      data: {
        value: value
      },
      success: function(response) {
        //console.log(response);
        $("#complain_id").val(response);
      }
    });
  }
  function branchNameFeedback(value) {
    $.ajax({
      type: "GET",
      url: "{{ route('feedback.id') }}",
      data: {
        value: value
      },
      success: function(response) {
        //console.log(response);
        $("#feedback_id").val(response);
      }
    });
  }
</script>