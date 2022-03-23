<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!--    &lt;!&ndash; for handle Bar &ndash;&gt;-->
    <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>

    <!--Semantics Ui CDN  -->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>-->

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!--Semantics JSS -->
    <style>
        .popup .overlay {
  position:fixed;
  top:0px;
  left:0px;
  width:100vw;
  height:100vh;
  background:rgba(0,0,0,0.7);
  z-index:1;
  display:none;
}
 
.popup .content {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%) scale(0);
  background:#fff;
  width:500px;
  height:250px;
  z-index:2;
  text-align:center;
  padding:20px;
  box-sizing:border-box;
  font-family:"Open Sans",sans-serif;
}
 
.popup .close-btn {
  cursor:pointer;
  position:absolute;
  right:20px;
  top:20px;
  width:30px;
  height:30px;
  background:#222;
  color:#fff;
  font-size:25px;
  font-weight:600;
  line-height:30px;
  text-align:center;
  border-radius:50%;
}
 
.popup.active .overlay {
  display:block;
}
 
.popup.active .content {
  transition:all 300ms ease-in-out;
  transform:translate(-50%,-50%) scale(1);
}
 
#popBtn {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  padding:15px;
  font-size:18px;
  border:2px solid #222;
  color:#222;
  text-transform:uppercase;
  font-weight:600;
  background:#fff;
}
    </style>
    

</head>
<body>

    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Title</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo aspernatur laborum rem sed laudantium excepturi veritatis voluptatum architecto, dolore quaerat totam officiis nisi animi accusantium alias inventore nulla atque debitis.</p>
        </div>
      </div>
       
      <button id="popBtn" onclick="togglePopup()">Show Popup</button>
      <script>
          function togglePopup(){
                document.getElementById("popup-1").classList.toggle("active");
            }
      </script>

    {{-- send popup --}}
    <div class="box">
        <a class="button" href="#popup1">Let me Pop up</a>
    </div>
    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Here i am</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Thank to pop me out of that button, but now i'm done so you can close this window.
            </div>
        </div>
    </div>
        <div style="border: 1px solid black; padding:100px" class="container">
            <div style="padding: 100px;">
                <div class="row">
                    <div class="col-md-8">
                        <input  id="search" class="prompt" type="text" placeholder="Search countries...">
                        <div id="match-list">

                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <a  onclick="btn_handler()" class="btn btn-primary">Submit</a>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Launch demo modal
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <a id="add-feed-button" role="button" data-toggle="modal" href="#add-feed-form" class="btn pull-right btn-success" style="margin-left:5px; margin-top:-4px;">Add new</a>
                  
                <div id="add-feed-form" class="form-feed modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Modal header</h3>

                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
            
          
      </div>
</body>
<script src="{{asset("eBloom-assets/assets/js/autocompleteField.js")}}"></script>

<script>
  


    var content = [
        {id: 0, text: "Nitin Shah", email:"Nitin@xy"},
        {id: 1, text: "Suhash Shah ",  email:"Suhash@xy"},
        {id: 2, text: "Soumil Shah  ",  email:"Soumil@xy"},
    ];

    console.log(content);

    // how to transform the json into app format
    var json = [
        {
            id:0,
            text: "Nitin Shah",
            email:"Nitin@xy",
        },
        {
            id:1,
            text: "SSS Shah",
            email:"SS@xy",
        },

    ];
    
    // console.log(json);

    var vector = [];
    $.each(content, function(index , value){
        var tem =
            {
                id:index,
                text:value.name
            };
            // console.log(tem);
        vector.push(tem);
    })

    console.log(vector);

    var final_json = {
        "result":vector
    };


    // console.log(final_json);


     $(".prompt").select2({
         data:vector,
         minimumInputLength: 2,
         width: '100%',
         multiple:true,
         placeholder:"Enter First Name",
         templateResult:formatState

     });

    function formatState (text) {

          str ="";
          str += "<p style='padding-left: 12px;'>"+ text.text+ "</p>";
          var $state = $(str);
          return $state;

    };


    function btn_handler() {
        var data = $('.prompt').select2('data');
        alert(data[0].text)
    }

</script>

</html>