<style type="text/css" media="screen">
  footer h5{
    color: #5fb336;
    font-family: "proxima-nova",sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
  }
  footer p{
    color: #fff;
    font-family: 'Montserrat',sans-serif;
    font-size: 15px;
  }
  form#newsletter input[name="newsletter"]{
    background-color: #fff;
    border: solid #999 1px;
    height: 2.5em;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    width: 205px;
    padding-left: 5px;
  }
  form#newsletter input[name="newsletter"]:focus,form#newsletter input[name="newsletter"]:active{
    background: #fafafa;
    border-color: #999999;
    outline: none;
    -webkit-box-shadow: 0 0 5px #999999;
    -moz-box-shadow: 0 0 5px #999999;
    box-shadow: 0 0 5px #999999;
  }
  form#newsletter input[name="submit"]{
    background-color: rgba(237,110,100,0);
    border: solid #5fb336 1px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    box-shadow: none;
    height: 2.5em;
    width: 136px;
    color: #5fb336;
    -webkit-appearance: none;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
    font-weight: normal!important;
  }
  #getstarted, #search-submit {
    background-color: rgba(237,110,100,0);
    border: solid #5fb336 1px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    box-shadow: none;
    color: #5fb336;
    -webkit-appearance: none;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
    font-weight: normal!important;
  }
  #getstarted,#search-submit {
    width: 10em;
  }
  #search-submit{
    margin-left: 10px;
  }
  .prefix.button {
    padding-left: 0;
    padding-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    text-align: center;
    line-height: 2.125rem;
    border: none;
    overflow: hidden;
    display: block;
    padding: 6px;
    text-transform: uppercase;
  }
  .float-right{
    float: right;
  }
  .float-left{
    float: left;
  }
  .lower-footer .float-right p{
    text-align: right;
    margin: 10px 0;
  }
  .lower-footer{
    background-color: #2e2f3c;
  }
  div.lower-footer p,div.lower-footer h5{
    padding: 10px 0;
    font-size: 14px;
    line-height: 1.6;
    text-rendering: optimizeLegibility;
    font-weight: normal;
    font-family: 'raleway';
    color: white;
  }
  .transition-properties{
    -webkit-transition: all 1s ease-in-out;
    -moz-transition: all 1s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }
  div.lower-footer p a{
    color: #5fb336;
    text-decoration: none;
    -webkit-transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -ms-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
  }
  div.lower-footer p a:hover{
    color: white;
  }
  .proxlight {
    /*font-family: "proxima-nova",sans-serif;*/
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 100;
    font-size: 30px;
  }
  footer div.upper-footer{
    background-color: #252531;
    padding: 1em 0 1em 0;
  }
  .prox {
    font-family: "proxima-nova",sans-serif;
    font-style: normal;
    font-weight: 700 !important;
  }
  #getstarted:hover,form#newsletter input[name="submit"]:hover{
    text-decoration: none;
    color: white;
    border-color:white;
  }
  .lower-footer h5 a{
    text-decoration: none;
    transition:color 0.3s ease-in-out;
    -webkit-transition:color 0.3s ease-in-out;
  }
  .lower-footer h5 a:hover{
    text-decoration: none;
    color: white!important;
  }
</style>
<footer>
  <div class="upper-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h5 style="display: none;">Get in Touch</h5>
          <p style="margin-bottom:0px;font-size: 30px;">contact@helixtech.co</p>
          <p style="font-size: 30px;">+91-(832)-6480422</p>
          <p style="color:#B4B4B4;">Helix Tech Info Systems Pvt. Ltd.<br>Verna Goa-403 722 - India.</p>
        </div>
        <div class="col-md-6">
          <h5 style="display: none;">Tell us about your project</h5>
          <p class="proxlight">Do you have a project we can help you with? Why not get started by trying out our <strong style="color: #5fb336;">project planner</strong></p>
          <a id="getstarted" class="prefix button prox" target="_blank" href="http://httest.in/project-planner/test/test.html" style="display: none;">Get Started</a>
        </div>
        <div class="col-md-4" style="display: none;">
          <h5 style="display: none;">Sign up for our newsletter</h5>
          <form id="newsletter" style="display: none;">
            <input class="float-left" type="text" name="newsletter" value="" placeholder="Email address">
            <input id="search-submit" class="prefix button prox float-left" type="button" name="submit" value="Submit">
          </form>
          <style type="text/css">
            .social-div{
              /*overflow: hidden;*/
              color: white;
              width: 100%;
              margin-top: 20px;
            }
            div.social-div span{
              font-size: 34px;
              margin-right: 13px;
              color: #A8A8A8;
              position: relative;
              -webkit-transition: all 0.2s ease-in-out;
              -moz-transition: all 0.2s ease-in-out;
              -ms-transition: all 0.2s ease-in-out;
              -o-transition: all 0.2s ease-in-out;
              transition: all 0.2s ease-in-out;
              bottom: 0;
            }
            div.social-div span:hover{
              color: white;
              bottom: 5px;
            }
            div.social-div a{
              text-decoration: none;
            }
          </style>
          <div class="clearfix"></div>
          <div class="social-div">
            <a href="#">
              <span class="icon-facebook transition-properties"></span>
            </a>
            <a href="#">
              <span class="icon-twitter transition-properties"></span>
            </a>
            <a href="#">
              <span class="icon-google-plus transition-properties"></span>
            </a>
            <a href="#">
              <span class="icon-linkedin transition-properties"></span>
            </a>
            <a href="#">
              <span class="icon-pinterest transition-properties"></span>
            </a>
            <a href="#">
              <span class="icon-youtube-play transition-properties"></span>
            </a>
            <a href="#">
              <span class="icon-instagram transition-properties"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lower-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 float-left">
          <h5 style="color:#83848e;margin-bottom: 20px;padding-bottom: 2px;font-family: lato;font-weight: lighter;font-size: 16px;">© 2014 Helix Tech &nbsp; All Rights Reserved. <a href="#" style="color: #5fb336;">Terms of Service</a> and <a href="#" style="color: #5fb336;">Privacy Policy</a></h5>and 
        </div>
        <div class="col-md-6 " style="/* display: none; */text-align: right;">
          <div>
            <style type="text/css">
              .social-div{
                /*overflow: hidden;*/
                color: white;
                width: 100%;
                margin-top: 20px;
              }
              div.social-div span{
                font-size: 34px;
                margin-right: 13px;
                color: #a8a8a8;
                position: relative;
                -webkit-transition: all 0.2s ease-in-out;
                -moz-transition: all 0.2s ease-in-out;
                -ms-transition: all 0.2s ease-in-out;
                -o-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
                bottom: 0;
              }
              div.social-div span:hover{
                color: white;
                bottom: 5px;
              }
              div.social-div a{
                text-decoration: none;
              }
              div.social-div span.icon-facebook:hover{
                color: #3c599f;
              }
              div.social-div span.icon-twitter:hover{
                color: #2fa9f6;
              }
              div.social-div span.icon-google-plus:hover{
                color: #dd4c39;
              }
              div.social-div span.icon-linkedin:hover{
                color: #007bb6;
              }
              div.social-div span.icon-pinterest:hover{
                color: #cb2026;
              }
              div.social-div span.icon-youtube-play:hover{
                color: #a42c2e;
              }
              div.social-div span.icon-instagram:hover{
                color: #205a80;
              }
            </style>
            <div class="social-div">
              <a href="#">
                <span class="icon-facebook transition-properties"></span>
              </a>
              <a href="#">
                <span class="icon-twitter transition-properties"></span>
              </a>
              <a href="#">
                <span class="icon-google-plus transition-properties"></span>
              </a>
              <a href="#">
                <span class="icon-linkedin transition-properties"></span>
              </a>
              <a href="#">
                <span class="icon-pinterest transition-properties"></span>
              </a>
              <a href="#">
                <span class="icon-youtube-play transition-properties"></span>
              </a>
              <a href="#">
                <span class="icon-instagram transition-properties"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>