<div class="my-12 md:my-6 basis-1/3">
    <div class="text-2xl md:text-4xl text-blue-800 font-bold text-left mb-4">Get In Touch With Us</div>
    
    <form id="enqueryform" method="post" name="form" class="text-left my-2 block">
        
        <div id="mail-status" class="alert alert-success" style="display:none"><strong>Success !</strong> Message has been sent.</div>

        <div class="my-2">
            <label for="" class="block text-sm pl-1 my-1 font-medium text-gray-700">Full name</label>
            <input type="text" id="userName" name="fname" class="block border my-1 py-1 px-1 w-full border-gray-200 rounded-md">
        </div>
        <div class="my-2">
            <label for="" class="block text-sm pl-1 my-1 font-medium text-gray-700">Email</label>
            <input type="text" id="userEmail" name="email" class="block border my-1 py-1 px-1 w-full border-gray-200 rounded-md">
        </div>
        <div class="my-2">
            <label for="" class="block text-sm pl-1 my-1 font-medium text-gray-700">Phone</label>
            <input type="tel" id="phone" name="tel" class="block border my-1 py-1 px-1 w-full border-gray-200 rounded-md">
        </div>
        <div class="my-2">
            <label for="" class="block text-sm pl-1 my-1 font-medium text-gray-700">Message</label>
            <textarea type="text" id="userMessage" name="message" class="block border my-1 py-1 px-1 w-full border-gray-200 rounded-md"></textarea>
        </div>
        <div class="my-2">
            <button type="submit" id="submit" class="submit block text-white bg-blue-600 rounded-xl px-4 py-1 mt-4">Send Message</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    

$("#enqueryform").submit(function (e) {
        e.preventDefault();

        var form_data = $(this).serialize();
           
        $(document).ajaxStart(function(){

            $("#submit").attr("disabled", false);

            $(".submit").html(" Processing... <i class='fas fa-spinner fa-spin'></i>");

        });

        $(document).ajaxComplete(function(){
            $(".submit").html('Send Message');
        });

        $.ajax({
        url: "sendmail.php",
        data:form_data,
        type: "POST",
            success:function(data){
                
                $("#mail-status").show()
                $("#userName").val('');
                $("#userEmail").val('');
                $("#phone").val('');
                $("#userMessage").val('');

            }
        });


    });

        
</script>