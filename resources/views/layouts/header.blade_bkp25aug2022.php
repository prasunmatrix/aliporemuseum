<section>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="top-menu">
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="{{ url('feedback-grievance') }}">Feedback/Grievance Form</a></li>
                <li><a href="#contact_us">Contact Us</a></li>
                <li class="searchbar">
                  <i class="fa fa-search searchicon" aria-hidden="true"></i>
                  <div class="togglesearch" id="searchDIV">
                    <input type="text" placeholder="" />
                    <input type="button" value="Search" />
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <header>
        <div class="container">
          <div class="row"> 
            <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('uploads/settings/'.@$header_logo) }}"></a></div>
            <div class="menu">
              <nav>
                <ul>
                  <li @if(Route::currentRouteName()=='home') class="active" @endif ><a href="{{ url('/') }}">Home </a></li>
                  <li><a href="#">Products</a>
                    <ul>
                      <li><a href="#">Loan & Advances</a>
                        <ul>
                          <li><a href="#">Agricultural Loan</a></li>
                          <li><a href="#">Loan to ECCS</a></li>
                          <li><a href="#">House Building Loans</a></li>
                          <li><a href="#">Loan to Salaried Persons</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Accounts</a>
                        <ul>
                          <li><a href="#">Savings Account</a></li>
                          <li><a href="#">Current Account</a></li>
                          <li><a href="#">Salary Account</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Deposits</a>
                        <ul>
                          <li><a href="#">Fixed Deposits</a></li>
                          <li><a href="#">Recurring Deposit</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Cards</a>
                        <ul>
                          <li><a href="#">RuPay Debit Cum ATM Card</a></li>
                          <li><a href="#">Kisan Credit Card(KCC)</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li @if(Route::currentRouteName()=='branch' || Route::currentRouteName()=='emi-calculator') class="active" @endif><a href="#">Services</a>
                    <ul>
                      <li><a href="{{ url('branch') }}">Branch & ATM Locator</a></li>
                      <!-- <li><a href="{{ url('knowledge-corner') }}">Knowledge Corner & Download</a></li>
                      <li><a href="{{ url('event-calendar') }}">Event Calendar</a></li>
                      <li><a href="{{ url('organisation-chart') }}">Organisation Chart</a></li> -->
                      <li><a href="{{ url('emi-calculator') }}">EMI Calculator</a></li>
                      <!-- <li><a href="{{-- url('emi-calculator-new') --}}">Emi Calculator</a></li> -->
                      <!-- <li><a href="{{ url('tender') }}">Tender</a></li>
                      <li><a href="{{ url('notice') }}">Notice</a></li>
                      <li><a href="#">ATM Services</a></li> -->
                      <li><a href="#">Safe Deposit Locker</a></li>
                      <li><a href="#">NEFT / RTGS</a></li>
                      <li><a href="#">AADHAAR related services</a></li>
                      <!-- <li><a href="#">Competitive Exam Form Fill Ups</a></li>
                      <li><a href="#">College Fee Collections</a></li> -->
                    </ul>
                  </li>
                  <li @if(Route::currentRouteName()=='interest-rates') class="active" @endif><a href="{{ url('interest-rates') }}">Interest Rates</a></li>
                  <li><a href="#">Internet Banking</a></li>
                  <li @if(Route::currentRouteName()=='knowledge-corner' || Route::currentRouteName()=='event-calendar' || Route::currentRouteName()=='organisation-chart' || Route::currentRouteName()=='tender' || Route::currentRouteName()=='notice') class="active" @endif>
                    <a href="#">Information</a>
                    <ul>
                      <li><a href="{{ url('organisation-chart') }}">Organisation Chart</a></li>
                      <li><a href="{{ url('tender') }}">Tender</a></li>
                      <li><a href="{{ url('notice') }}">Notice</a></li>
                      <li><a href="{{ url('event-calendar') }}">Event Calendar</a></li>
                      <li><a href="{{ url('knowledge-corner') }}">Knowledge Corner & Download</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
              <!-- mobile-menu -->
              <div id="hamburger-icon">
                <div class="accordion">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </div>

                <ul class="mobile-menu panel">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="javascript:void(0)" class="accordion">Products</a>
                    <ul class="panel">
                      <li><a href="javascript:void(0)" class="accordion">Loan & Advances</a>
                        <ul class="panel">
                          <li><a href="#">Agricultural Loan</a></li>
                          <li><a href="#">Loan to ECCS</a></li>
                          <li><a href="#">House Building Loans</a></li>
                          <li><a href="#">Loan to Salaried Persons</a></li>
                        </ul>
                      </li>
                      <li><a href="javascript:void(0)" class="accordion">Accounts</a>
                        <ul class="panel">
                          <li><a href="#">Savings Account</a></li>
                          <li><a href="#">Current Account</a></li>
                          <li><a href="#">Salary Account</a></li>
                        </ul>
                      </li>
                      <li><a href="javascript:void(0)" class="accordion">Deposits</a>
                        <ul class="panel">
                          <li><a href="#">Fixed Deposits</a></li>
                          <li><a href="#">Recurring Deposit</a></li>
                        </ul>
                      </li>
                      <li><a href="javascript:void(0)" class="accordion">Cards</a>
                        <ul class="panel">
                          <li><a href="#">RuPay Debit Cum ATM Card</a></li>
                          <li><a href="#">Kisan Credit Card(KCC)</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)" class="accordion">Services</a>
                    <ul class="panel">
                      <li><a href="#">ATM Services</a></li>
                      <li><a href="#">Safe Deposit Locker</a></li>
                      <li><a href="#">NEFT / RTGS</a></li>
                      <li><a href="#">AADHAR related services</a></li>
                      <li><a href="#">Competitive Exam Form Fill Ups</a></li>
                      <li><a href="#">College Fee Collections</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Interest Rates</a></li>
                  <li><a href="#">Smart Banking</a></li>
                  <li @if(Route::currentRouteName()=='knowledge-corner' || Route::currentRouteName()=='event-calendar' || Route::currentRouteName()=='organisation-chart' || Route::currentRouteName()=='tender' || Route::currentRouteName()=='notice') class="active" @endif>
                    <a href="javascript:void(0)" class="accordion">Information</a>
                    <ul class="panel">
                      <li><a href="{{ url('organisation-chart') }}">Organisation Chart</a></li>
                      <li><a href="{{ url('tender') }}">Tender</a></li>
                      <li><a href="{{ url('notice') }}">Notice</a></li>
                      <li><a href="{{ url('event-calendar') }}">Event Calendar</a></li>
                      <li><a href="{{ url('knowledge-corner') }}">Knowledge Corner & Download</a></li>
                    </ul>
                  </li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Customer Service</a></li>
                </ul>

              </div>
            </div>
          </div>
        </div>

      </header>
    </section>