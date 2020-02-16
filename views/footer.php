<script>
  $(document).ready(function() {


    $("#dataForm").validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        email: {
          required: "Email is requried!",
          email: "Please Enter a Valid E-Mail Address!",
        }
      },
      submitHandler: function(form) {
        $("#dataForm").submit(function(e) {
          e.preventDefault();
          var data = $("#dataForm").serialize();
          $.ajax({
            url: '../index.php?page=create',
            type: 'post',
            data: {
              data: data
            },
            dataType: 'json',
            success: function(response) {
              console.log(response);
            }
          });
          return false;
        });
      }
    });




  });


  function submitData() {
    $("#dataForm").preventDeafult();
    var data = $("#dataForm").serialize();
    $.ajax({
      url: '../index.php?page=create',
      type: 'post',
      data: $("#dataFrom").serialize(),
      dataType: 'json',
      success: function(response) {
        console.log(response);
      }
    });
  }
</script>

</body>

</html>