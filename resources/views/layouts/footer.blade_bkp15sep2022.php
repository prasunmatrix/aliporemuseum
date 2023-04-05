
    <footer>
      <div class="container">
        <div class="row primary">
          <div class="column about">
         
            <h3>{{ @$footer_title }}</h3>
            <p>
            {{ strip_tags(@$footer_description) }}
            </p>
          </div>
          
          <div class="column contactinfo" id="contact_us">
            <h3>Contact Us</h3>
            <p><span class="icons">{{ @$address }}</span></p>
          </div>
          
          
          <div class="column connectinfo">
            <h3 class="mobtab-off"></h3>
            <p>
              <span class="iconsOne"> {{ @$phone }}</span><br>
              <span class="iconsTwo"> {{ @$fax }}</span>
            </p>
          </div>
          
        </div>
      </div>
      <div class="row copyright">
        <p>Copyright &copy; 2022 RCCB Ltd. All Rights Reserved.</p>
      </div>
    </footer>

  </body>
  </html>