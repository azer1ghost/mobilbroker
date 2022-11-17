<style>
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }
    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }
    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
</style>
<section class="container certificates mt-5">
    <div class="col-12">
        <h1 class="text-center" style="font-size: 2.6rem; color: #99cd08;">@lang('translates.certificates')</h1>
    </div>
    <div class="brands owl-carousel mt-5" >
        @foreach($certificates as $certificate)
            <div class="item">
                    <img id="myImg" src="{{asset(Voyager::image($certificate->getAttribute('image')))}}" height="250" width="500" alt="{{$certificate->getAttribute('title')}}">
            </div>
        @endforeach
    </div>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>
</section>

<script>
    var modal = document.getElementById("myModal");

    var img = document.getElementById("myImg");

    var modalImg = document.getElementById("img01");

    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>



