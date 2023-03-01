   <footer>
       <h6> Scandiweb Test Assigment</h6>
    </footer>


<script src="../js/backend.js">
<script src="../js/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/ajaxjquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#Book").hide();
        $("#Furniture").hide();
        $("#DVD").hide();
    });

    //function to handle selectbox Change
    
        $("select").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue == "1") {

                    $("#Book").show();

                }
                else if (optionValue == "4") {
                    $("#Furniture").show();

                }
                else if (optionValue) {
                    $("#DVD").show();
                }
            });
        }).change();
    </script>
    <script>
    

function addProduct(){
    var skuAdd = $('#sku').val();
    var nameAdd = $('#name').val();
    var priceAdd = $('#price').val();
    var optionValue = $('#productType').attr("value");

    // productType = ('#productType').val();
   weightAdd = $('#weight').val();
   widthAdd= $('#width').val();
   heightAdd= $('#width').val();
  lengthAdd= $('#length').val();
  sizeAdd= $('#size').val();

    $.ajax({
        url: "ProductAdd.php",
        type: "POST",
        cache: false,
        data: {
            skuSend: skuAdd,
            nameSend: nameAdd,
            priceSend: priceAdd,
           
            if(optionValue== "1"){
                weightSend:weightAdd,
            }
           else if(optionValue == "4"){
                widthSend:widthAdd,
               heightSend:heightAdd,
                lengthSend:lengthAdd

            }
            else{
                sizeSend:sizeAdd

            }
        

        }, success: function (data, status) {
            console.log(status);
        }, error: function (xhr, textstatus, err) {
            console.log(xhr);
            console.log(status);
            console.log(err);

        }
    });
}


    </script>

</body>

</html>