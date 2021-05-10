<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
    <div class="form">
        <div class="form-group">
          <label for=""></label>
          <input type="text"
            class="form-control" name="" id="name" aria-describedby="helpId" placeholder="Họ Tên ">
        </div>
        <div class="form-group">
          <label for=""></label>
          <input type="text"
            class="form-control" name="" id="phone_number" aria-describedby="helpId" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
          <label for=""></label>
          <input type="text"
            class="form-control" name="" id="address" aria-describedby="helpId" placeholder="Địa Chỉ">
        </div>
        <div class="form-group">
            <label for="comment"></label>
            <textarea class="form-control" rows="5" placeholder="Ghi Chú" id="note"></textarea>
        </div>

        <button id="submit" class="btn btn-primary" >Hoàn tất </button>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function () {

         $('#submit').click(function (){

             var name = $('#name').val();
             var phone_number = $('#phone_number').val();
             var address = $('#address').val();
             var note = $('#note').val();
            $.ajax({

                      type: "POST",
                      url: "{{route('insert')}}",
                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      data: {
                          'name' : name,
                          'phone_number' : phone_number,
                          'address' : address,
                          'note' : note,
                      },
                      success: function (data) {
                                alert(data);
                      }
                  });
         })
        })
 </script>
</body>
</html>
