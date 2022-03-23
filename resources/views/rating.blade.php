<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <style type="text/css">
/* Star hover using lang hack in its own style wrapper, otherwise Gmail will strip it out */
    * .star-wrapper:hover *[lang~="x-star-number"]{
        color: #119da2 !important;
        border-color: #119da2 !important;
    }

    * [lang~="x-star-wrapper"]:hover *[lang~="x-full-star"],
    * [lang~="x-star-wrapper"]:hover ~ *[lang~="x-star-wrapper"] *[lang~="x-full-star"] {
      display : block !important;
      width : auto !important;
      overflow : visible !important;
      float : none !important;
      margin-top: -1px !important;
    }

    /* * [lang~="x-star-wrapper"]:hover *[lang~="x-empty-star"],
    * [lang~="x-star-wrapper"]:hover ~ *[lang~="x-star-wrapper"] *[lang~="x-empty-star"] {
      display : block !important;
      width : 0 !important;
      overflow : hidden !important;
      float : left !important;
      height: 0 !important;
    } */
    .star-wrapper:hover * .empty-star,
    .star-wrapper:hover ~ .star-wrapper * .empty-star {
      display : block !important;
      width : 0 !important;
      overflow : hidden !important;
      float : left !important;
      height: 0 !important;
    }
    

</style>


<style type="text/css">
/* Normal email CSS */
    @-ms-viewport {
        width: device-width;
    }
    body {
        margin: 0;
        padding: 0;
        min-width: 100%;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    td {
        vertical-align: top;
    }
    img {
        border: 0;
        -ms-interpolation-mode: bicubic;
        max-width: 100% !important;
        height: auto;
    }
    a {
        text-decoration: none;
        color: #119da2;
    }
    a:hover {
        text-decoration: underline;
    }

    *[class=main-wrapper],
    *[class=main-content]{
        min-width: 0 !important;
        width: 600px !important;
        margin: 0 auto !important;
    }
    *[class=rating] {
      unicode-bidi: bidi-override;
      direction: rtl;
    }
    *[class=rating] > *[class=star] {
      display: inline-block;
      position: relative;
      text-decoration: none;
    }

    @media (max-width: 621px) {
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -o-box-sizing: border-box;
        }
        table {
            min-width: 0 !important;
            width: 100% !important;
        }
        *[class=body-copy] {
            padding: 0 10px !important;
        }
        *[class=main-wrapper],
        *[class=main-content]{
            min-width: 0 !important;
            width: 320px !important;
            margin: 0 auto !important;
        }
        *[class=ms-sixhundred-table] {
            width: 100% !important;
            display: block !important;
            float: left !important;
            clear: both !important;
        }
        *[class=content-padding] {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
        *[class=bottom-padding]{
            margin-bottom: 15px !important;
            font-size: 0 !important;
            line-height: 0 !important;
        }
        *[class=top-padding] {
            display: none !important;
        }
        *[class=hide-mobile] {
            display: none !important;
        }
        

        /* Prevent hover effects so double click issue doesn't happen on mobile devices */
        * [lang~="x-star-wrapper"]:hover *[lang~="x-star-number"]{
            color: #AEAEAE !important;
            border-color: #FFFFFF !important;
        }
        * [lang~="x-star-wrapper"]{
            pointer-events: none !important;
        }
        * [lang~="x-star-divbox"]{
            pointer-events: auto !important;
        }
        *[class=rating] *[class="star-wrapper"] a div:nth-child(2),
        *[class=rating] *[class="star-wrapper"]:hover a div:nth-child(2),
        *[class=rating] *[class="star-wrapper"] ~ *[class="star-wrapper"] a div:nth-child(2){
          display : none !important;
          width : 0 !important;
          height: 0 !important;
          overflow : hidden !important;
          float : left !important;
        }
        *[class=rating] *[class="star-wrapper"] a div:nth-child(1),
        *[class=rating] *[class="star-wrapper"]:hover a div:nth-child(1),
        *[class=rating] *[class="star-wrapper"] ~ *[class="star-wrapper"] a div:nth-child(1){
          display : block !important;
          width : auto !important;
          overflow : visible !important;
          float : none !important;
        }
    }
</style>


<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

</head>
<body style="margin-top: 0;margin-bottom: 0;margin-left: 0;margin-right: 0;padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;min-width: 100%;background-color: #f5f5f5">
<table class="main-wrapper" style="border-collapse: collapse;border-spacing: 0;display: table;table-layout: fixed; margin: 0 auto; -webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;text-rendering: optimizeLegibility;background-color: #f5f5f5; width: 100%;">
        <tbody>
            <tr>
                <td style="padding: 0;vertical-align: top" class="">
                    <div class="bottom-padding" style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0;vertical-align: top; width: 100%;" class="">
                    <center>

                        <table class="main-content" style="width: 100%; max-width: 600px; border-collapse: separate;border-spacing: 0;margin-left: auto;margin-right: auto; border: 1px solid #EAEAEA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; background-color: #ffffff; overflow: hidden;" width="600">
                            <tbody>
                                <tr>
                                    <td style="padding: 0;vertical-align: top;">
                                        <table class="main-content" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 100%; max-width: 600px;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 0;vertical-align: top;text-align: left">
                                                        <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <center>
                                                                        <img src="https://ebloom.gr/frontEnd-assets/images/logo-svg.svg" alt="eBloom logo" style="width: 150px;
                                                                            height: 80px;">

                                                                        </center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <center>
                                                                            <div style=" opacity: 0.7;">
                                                                                <img src="https://ebloom.gr/uploads/products/15984.jpeg" alt="eBloom logo" style="width: 100%;
                                                                                height: 400px;">
                                                                                <h1 style="position: relative; top: -250px; color: white">
                                                                                {{$florist->name}}
                                                                                    {{-- Florist Name --}}
                                                                                </h1>

                                                                            </div>
                                                                        </center>
                                                                        <div style="position: relative;top: -60px;">
                                                                            <p>
                                                                                @if (app()->getLocale() == 'en' )
                                                                                Hi, do you have a sec?
                                                                                @else
                                                                                Γεια, έχεις λίγο χρόνο; 
                                                                                @endif
                                                                            </p>
                                                                            {{-- <br> --}}
                                                                            <p>
                                                                                @if (app()->getLocale() == 'en' )
                                                                                We’d love to hear from you. Let us know about your experience with {{$florist->name}} so far by sharing a review. <br>
                                                                                @else
                                                                                Θα θέλαμε τη γνώμη σας. Πείτε μας για την μέχρι τώρα εμπειρία σας με το {{$florist->name}} Κάνοντας μια κριτική. <br>
                                                                                @endif
                                                                            </p>
                                                                            <p>
                                                                                @if (app()->getLocale() == 'en' )
                                                                                We appreciate your feedback!”
                                                                                @else
                                                                                Εκτιμούμε τα σχόλιά σας!"
                                                                                @endif
                                                                            </p>
                                                                        </div>
                                                                        
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <form action="https://ebloom.gr/gr/rating/{{$florist->id}}" method="post"> {{ csrf_field() }}
                                                                    <tr>
                                                                        <td class="content-padding" style="padding: 0;vertical-align: top; position: relative;
                                                                        top: -30px; ">
                                                                            {{-- <div style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div> --}}
                                                                            <div class="body-copy" style="margin: 0;">
    
                                                                                <div style="margin: 0;color: #60666d;font-size: 50px;font-family: sans-serif;line-height: 20px; text-align: left;">
                                                                                    {{-- <div class="bottom-padding" style="margin-bottom: 0px; line-height: 15px; font-size: 15px;">&nbsp;</div> --}}
                                                                                    <div style="text-align: center; margin: 0; font-size: 15px;  text-transform: uppercase; letter-spacing: .5px;">
                                                                                        <p>
                                                                                            @if(Session::has('flash_message_error'))
                                                                                            
                                                                                                @if (app()->getLocale() == 'en' )
                                                                                                    <strong style="color: red">{{ session('flash_message_error') }}</strong>
                                                                                        
                                                                                                @else
                                                                                                    <strong style="color: red">
                                                                                                        Επιλέξτε Βαθμολογία με αστέρια
                                                                                                    </strong>

                                                                                                @endif


                                                                                            @endif
                                                                                        </p>
                                                                                        <br>
                                                                                        @if (app()->getLocale() == 'en' )
                                                                                        
                                                                                        Rate to store:
                                                                                        @else
                                                                                        Τιμή για αποθήκευση:
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="bottom-padding" style="margin-bottom: 0px; line-height: 7px; font-size: 7px;">&nbsp;</div>
                                                                                    <div style="width: 100%; text-align: center; float: left;">
                                                                                        <div class="rating" style="text-align: center; margin: 0; font-size: 50px; width: 275px; margin: 0 auto; margin-top: 10px;">
    
                                                                                            <table style="border-collapse: collapse;border-spacing: 0;width: 275px; margin: 0 auto; font-size: 50px; direction: rtl;" dir="rtl">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td style="padding: 0;vertical-align: top;" width="55" class="star-wrapper" lang="x-star-wrapper">
                                                                                                        <div style="cursor: pointer; display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                                                                            <span class="star" id="star5"  lang="x-star-divbox" style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;" tabindex="5">
                                                                                                                <div lang="x-empty-star" class="empty-star" style="margin: 0;display: inline-block;">☆</div>
                                                                                                                <div lang="x-full-star" class="full-star" style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height:0; max-height:0;">★</div>
                                                                                                            </span>
                                                                                                            <span  class="star-number" lang="x-star-number" style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">5</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td style="padding: 0;vertical-align: top" width="55" class="star-wrapper" lang="x-star-wrapper">
                                                                                                        <div style="cursor: pointer; display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                                                                            <span class="star" id="star4" lang="x-star-divbox" style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;" tabindex="4">
                                                                                                                <div lang="x-empty-star" class="empty-star" style="margin: 0;display: inline-block;">☆</div>
                                                                                                                <div lang="x-full-star" class="full-star" style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">★</div>
                                                                                                            </span>
                                                                                                            <span  class="star-number" lang="x-star-number" style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">4</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td style="padding: 0;vertical-align: top" width="55" class="star-wrapper" lang="x-star-wrapper">
                                                                                                        <div style="cursor: pointer; display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                                                                            <span  class="star" id="star3" lang="x-star-divbox" style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;" tabindex="3">
                                                                                                                <div lang="x-empty-star" class="empty-star" style="margin: 0;display: inline-block;">☆</div>
                                                                                                                <div lang="x-full-star" class="full-star" style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">★</div>
                                                                                                            </span>
                                                                                                            <span  class="star-number" lang="x-star-number" style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">3</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td style="padding: 0;vertical-align: top" width="55" class="star-wrapper" lang="x-star-wrapper">
                                                                                                        <div style="cursor: pointer;display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                                                                            <span class="star" id="star2"  lang="x-star-divbox" style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;" tabindex="2">
                                                                                                                <div lang="x-empty-star" class="empty-star" style="margin: 0;display: inline-block;">☆</div>
                                                                                                                <div lang="x-full-star" class="full-star" style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">★</div>
                                                                                                            </span>
                                                                                                            <span class="star-number"  lang="x-star-number" style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">2</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td style="padding: 0;vertical-align: top" width="55" class="star-wrapper" lang="x-star-wrapper">
                                                                                                        <div style="cursor: pointer; display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                                                                            <span  class="star" id="star1"  lang="x-star-divbox" style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;" tabindex="1">
                                                                                                                <div lang="x-empty-star" class="empty-star" style="margin: 0;display: inline-block;">☆</div>
                                                                                                                <div lang="x-full-star" class="full-star" style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">★</div>
                                                                                                            </span>
                                                                                                            <span class="star-number"  lang="x-star-number" style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">1</span>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
    
                                                                                        </div>
                                                                                    </div>
                                                                                    <div style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                                                                                </div>
    
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <input type="hidden" name="rating" id="rating">
                                                                    <input type="hidden" name="florist" id="florist" value="{{$florist->id}}">
                                                                    <tr>
                                                                        <td style="position: relative;
                                                                        top: -40px;">
                                                                            <center>
                                                                                <p>
                                                                                    @if (app()->getLocale() == 'en' )
                                                                                    
                                                                                    Give your feedback!
                                                                                    @else
                                                                                    Δώστε τα σχόλιά σας!
                                                                                    @endif
                                                                                </p>
                                                                                <textarea name="text" id="" cols="30" 
                                                                                @if (app()->getLocale() == 'en' )
                                                                                
                                                                                placeholder="e.g i like this store" 
                                                                                @else
                                                                                placeholder="π.χ. μου αρέσει αυτό το κατάστημα" 
                                                                                
                                                                                @endif
                                                                                rows="4"
                                                                                style="display: block;
                                                                                width: 50%;
                                                                                height: calc(2.40875rem + 2px);
                                                                                padding: 0.57rem 1rem;
                                                                                font-size: 0.875rem;
                                                                                line-height: 1.45;
                                                                                color: #495057;
                                                                                background-color: #fff;
                                                                                background-clip: padding-box;
                                                                                border: 1px solid #dfdfdf;
                                                                                border-radius: 0.25rem;
                                                                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                                                                            "
                                                                                ></textarea>
                                                                            </center>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>

                                                                        <td>
                                                                            <center>
                                                                            <button type="submit" id="submt" 
                                                                            style="display: inline-block;
                                                                            font-weight: 400;
                                                                            color: white;
                                                                            text-align: center;
                                                                            vertical-align: middle;
                                                                            -webkit-user-select: none;
                                                                            -moz-user-select: none;
                                                                            -ms-user-select: none;
                                                                            user-select: none;
                                                                            background-color: transparent;
                                                                            border: 1px solid transparent;
                                                                            padding: 0.4rem 1rem;
                                                                            font-size: 0.875rem;
                                                                            line-height: 1;
                                                                            border-radius: 0.1875rem;
                                                                            background-color: #19d895;
                                                                            border-color: #19d895;
                                                                            cursor: pointer;
                                                                            "
                                                                            >
                                                                            @if (app()->getLocale() == 'en' )
                                                                            
                                                                            Submit
                                                                            @else
                                                                            υποβάλλουν
                                                                            @endif
                                                                        </button>
                                                                        </center>
                                                                        </td>
                                                                    </tr>
                                                                </form>
                                                                <tr>
                                                                    <td style="height: 20px;"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        {{-- script --}}
                                                        <script>
                                                            $(document).ready(function () {
                                                               $('.star-wrapper').click(function(e){
                                                                // alert('check');
                                                                // $('.star-wrapper * .empty-star,.star-wrapper ~ .star-wrapper * .empty-star').css('display','block');
                                                                // * [lang~="x-star-wrapper"]:hover *[lang~="x-full-star"],
                                                                // * [lang~="x-star-wrapper"]:hover ~ *[lang~="x-star-wrapper"] *[lang~="x-full-star"]
                                                                // $(this).find('.empty-star').css(
                                                                $(this).find("* .empty-star,.star-wrapper ~ .star-wrapper * .empty-star").css(
                                                                    {
                                                                        "display":"block",
                                                                        "width":"0",
                                                                        "overflow":"hidden",
                                                                        "float":'left',
                                                                        "height":"0"
                                                                    });
                                                                    $(this).find("*[lang~='x-full-star'],* [lang~='x-star-wrapper'] ~ *[lang~='x-star-wrapper'] *[lang~='x-full-star']").css(
                                                                    {
                                                                        "display":"block",
                                                                        "width":"auto",
                                                                        "overflow":"visible",
                                                                        "float":'none',
                                                                        "margin-top":"-1px"
                                                                    });
                                                                    $(this).find("*[lang~='x-star-number']").css(
                                                                    {
                                                                        "color":"#119da2",
                                                                        "border-color":"#119da2",
                                                                    });
                                                                
                                                               });
                                                            });
                                                            // .star-wrapper:hover * .empty-star,
                                                            // .star-wrapper:hover ~ .star-wrapper * .empty-star {
                                                            // display : block !important;
                                                            // width : 0 !important;
                                                            // overflow : hidden !important;
                                                            // float : left !important;
                                                            // height: 0 !important;
                                                            // }
                                                            document.getElementById("star1").addEventListener("click", function() {
                                                                // document.getElementById("demo").innerHTML = "Hello World";
                                                                document.getElementById("rating").value = '1';
                                                            });
                                                            document.getElementById("star2").addEventListener("click", function() {
                                                                // document.getElementById("demo").innerHTML = "Hello World";
                                                                document.getElementById("rating").value = '2';
                                                            });
                                                            document.getElementById("star3").addEventListener("click", function() {
                                                                // document.getElementById("demo").innerHTML = "Hello World";
                                                                document.getElementById("rating").value = '3';
                                                            });
                                                            document.getElementById("star4").addEventListener("click", function() {
                                                                // document.getElementById("demo").innerHTML = "Hello World";
                                                                document.getElementById("rating").value = '4';
                                                            });
                                                            document.getElementById("star5").addEventListener("click", function() {
                                                                // document.getElementById("demo").innerHTML = "Hello World";
                                                                document.getElementById("rating").value = '5';
                                                            });
                                                            document.getElementById("submit").addEventListener("click", function() {
                                                                // document.getElementById("demo").innerHTML = "Hello World";
                                                                var rating = document.getElementById("rating").value;
                                                                var florist = document.getElementById("florist").value;
                                                                window.location.href = "https://ebloom.gr/rating/"+florist+"/"+rating;
                                                            });
                                                            

                                                        </script>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        
                    </center>
                </td>
            </tr>
            
        </tbody>
    </table>
</body>
</html>