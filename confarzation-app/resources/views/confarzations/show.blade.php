<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{ asset('frontend/css/css.css') }}"rel="stylesheet">

<html>
<head>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"

</head>
<body>
<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
              </span> </div>
            </div>
          </div>
          <div class="inbox_chat">


<livewire:confarzations.confarzationlist :confarzations="$confarzations"/>


          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">


         <livewire:confarzations.confarzation-messages :confarzation="$confarzation"
                                                       :messages="$confarzation->messages"/>

          </div>

          <livewire:confarzations.confarzation-reply/>

        </div>
      </div>



    </div></div>
    </body>
    </html>
