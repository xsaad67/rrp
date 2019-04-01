@extends('layouts.app')


@section('content')

<div class="container">


    {{$template->title}}
    <div class="row">
        <div class="col-lg-8">
             <label class="btn btn-warning btn-file">
                Upload your own image <input type="file" style="display: none;" id="imgInp">
            </label>

        <div class="canvas-wrapper">
            <canvas id="c" width="600" height="600" style="border:2px solid blue;"></canvas>

        </div>



        </div>
    </div>

    <div class="menu">
        <label class="btn btn-warning btn-file">
            Upload your own image <input type="file" style="display: none;" id="imgInp"></label>
        <button id="load-img">Load</button>
        <button id="add-text">Text</button>
        <button id ="change-canvas">Change</button>
        <input type="text" id="text" value="Hello World!">
        <button id="generator">Generator</button>
    </div>
  
    <div >
        <img id="preview">
    </div>

</div>


@endsection


@section('js')

<script src="{{asset("css/meme/fabric.js")}}"></script>

<script>
    var mainImage = "{{$template->templateImage}}";
    console.log(mainImage);


function readImageUrl(){
    $arr = new Array();
    $arr = ['height'=>img.height]

}

(function($, fabric) {

    var fabric = fabric || window.fabric;
    var canvas = new fabric.Canvas('c');
  

    fabric.Image.fromURL(mainImage, function(img) {
          alert(img.height);
      img.set({

        scaleX: 600/ img.width,
        scaleY: 600/ img.height,
        top: 0,
        left: 0,
        originX: 'left', originY: 'top'
      });
      canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas));
    });

   $("#change-canvas").click(function(){
        canvas.setBackgroundImage('http://meme.localhost/images/0723AB3F-3DE1-5486-B749-1507B55407ED.png', canvas.renderAll.bind(canvas));
    });

    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
           canvas.setBackgroundImage(e.target.result, canvas.renderAll.bind(canvas));
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
      $("#ex").html("");
    });

    $('#load-img').click(function() {
        var imgSrc = $('#imgUrl').val();
        if (!imgSrc) {
            imgSrc = 'http://meme.localhost/imagecache/large/temp_140BEEB0-696B-9182-186C-064FAF14DEF0_Chuck-Norris-With-Guns.jpg';
        }
        fabric.Image.fromURL(imgSrc, function(img) {

            canvas.setDimensions({
                width : img.width,
                height : img.height
            });
            canvas.add(img);
        });
    });

    $('#add-text').click(function() {

        var text = $('#text').val();
        if (!text) {
            text = 'Hello World!';
        }

        var iText = new fabric.IText(text, {
            left: 100,
            top: 50,
            scaleX : 1,
            scaleY : 1,
            padding: 7,
            fontSize: 60,
            width:600,
            height:600,
            textAlign: 'left',
            fontFamily: 'Impact',
            caching: false,
            fill: 'black',
            stroke: 'white',
            strokeWidth: 4,
            borderDashArray: [5, 5],
            originX: 'left',
            originY: 'center',
            styles: {},
            borderColor: 'gray',
            cornerColor: 'black',
            cornerSize: 12,
            transparentCorners: true
        });


        canvas.add(iText).setActiveObject(iText);
        canvas.renderAll();

    });

    $('#generator').click(function() {
        // canvas.deactivateAll();

        var img = canvas.toDataURL("image/png");
       $('#preview').attr("src", img);

        // window.open(img);
    });
 

})(jQuery, fabric);


</script>

@endsection