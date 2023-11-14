<script>
    function copyToClipboard() {

        var copyPassword = document.getElementById("password").value;
        var copyEmail = document.getElementById("email").value;
        var copyText = "User Name : " + copyEmail + " , " + "User Password : " + copyPassword

        if (copyEmail == "") {
            toastr.error("Please Enter Email");
        } else {
            if (copyPassword == "") {

                toastr.error("Please Genarate a Password");
            } else {


                navigator.clipboard.writeText(copyText);
                toastr.success("User Password is Copyied");
            }
        }

    }
</script>
