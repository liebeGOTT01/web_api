<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <title>WebApi</title>
</head>

<body>
  <div class="container mt-5">
    <a class="btn btn-info mt-5 mb-2" href="index.php">Add</a>
    <div class="row justify-content-center">
      <table class="table table-hover table-borderless">
        <thead>
          <tr class="bg-light">
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Job Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
      </table>
    </div>
  </div>




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
       <input type="text" class>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <script>
    $(function () {
      $.ajax({
        type: 'GET',
        url: 'http://192.168.0.1:8081/web-api/database.php/?employee',
        dataType: 'json',
        success: function (data) {
          console.log('success ', data);
          $.each(data, function (i, item) {
            var rows = "<tr>" +
              "<td>" + item.name + "</td>" +
              "<td>" + item.address + "</td>" +
              "<td>" + item.contact + "</td>" +
              "<td>" + item.jobTitle + "</td>" +
              "<input type='hidden' value=" + item.id + ">" +
              "<td>" + "<a type='button' href='update.php?ID="+item.id+" &Name="+item.name+"&Address="+item.address+"&Contact="+item.contact+"&JobTitle="+item.jobTitle+"'class='btn btn-info btn-sm editBtn'>" + "Edit" + "</a>" +
              "</td>" +
              "<td>" + "<a type='button' class='btn btn-info btn-sm deleteBtn'>" + "Delete" + "</a>" +
              "</td>" +
              "</tr>";
            $('#tableBody').prepend(rows);
          });
          $('.deleteBtn').on("click", function () {
            //    alert('gsadg')
          //  console.log($(this).parent().prev().prev().val());
            var id = $(this).parent().prev().prev().val();
            $.ajax({
              type: "post",
              data: {
                ID: id,
              },
              url: 'http://192.168.0.1:8081/web-api/database.php',
              success: function (data) {

                alert(data);
              }


            })

          })
        }
      })
    })
    console.log('ok');
  </script>


</body>

</html>