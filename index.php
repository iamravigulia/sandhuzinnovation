
 <?php include('header.php') ?>

<body>
    <div class="">
         <?php include('inc/nav.php') ?> 
    </div>

    <div class="banner flex" style="height: 90vh; background-image:url('./images/home.jpeg'); background-size:cover;">
        <div class="md:flex flex-row pt-16 px-4 md:px-8 items-center">
            <div class="bg-white text-center px-6 py-6 rounded-xl shadow">
                <div class="text-base md:text-2xl my-2 text-blue-700">SANDHUZ INNOVATION - A Technical Solution</div>
                <div class="text-xl md:text-lg my-2 pb-2" style="
  background: #ff0000; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #ff0000, #9932cc); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #ff0000, #9932cc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
">Safe, Secure and Strong</div>
                <a href="/contact-us.php" class="bg-red-600 hover:bg-red-800 text-white px-4 py-1 inline-block rounded-xl">Contact Us</a></div>
            </div>
        </div>
    </div>
    <div class="my-24 text-center">
        <div class="text-2xl md:text-4xl text-pink-700 font-bold">Our Speciallization</div>
        <div class="my-8 px-4 md:px-8 mx-2">
            <div class="md:flex flex-row">
                <div class="hover:shadow rounded-2xl basis-1/3 md:mx-4 md:px-4 md:py-8 py-2">
                    <img class="w-24" src="./images/icons/customer-service.png" alt="">
                    <div class="text-xl md:text-2xl text-blue-900 my-4">Survey</div>
                    <div class="text-xs md:text-base px-4">EXTERNAL AND INTERNAL SURVEY OF TELCOM NETWORK.</div>
                </div>
                <div class="hover:shadow rounded-2xl basis-1/3 md:mx-4 md:px-4 md:py-8 py-2">
                    <img class="w-24" src="./images/icons/customer-service.png" alt="">
                    <div class="text-xl md:text-2xl text-blue-900 my-4">Installation</div>
                    <div class="text-xs md:text-base px-4">Cable hauling and network installation, Testing and Activation.</div>
                </div>
                <div class="hover:shadow rounded-2xl basis-1/3 md:mx-4 md:px-4 md:py-8 py-2">
                    <img class="w-24" src="./images/icons/customer-service.png" alt="">
                    <div class="text-xl md:text-2xl text-blue-900 my-4">Civils</div>
                    <div class="text-xs md:text-base px-4">Network blockages, Trenches, Pit installation and ACM removal.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-12 md:my-24 py-12 md:py-12 px-12 md:px-24 text-center bg-gray-400 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <div class="text-xl md:text-4xl text-white py-2">Our Clients</div>
        <div class="md:flex my-4">
            <img class="basis-1/8 my-3" src="images/downer.jpeg" style="height: 100px;width: auto;"; alt="">
            <img class="basis-1/8 my-3" src="images/nbm.jpeg" style="height: 100px; width: auto;"  ; alt="">
            <img class="basis-1/8 my-3" src="images/silk.jpeg" style="height: 100px; width: auto;"  ; alt="">
        </div>
    </div>
    <div class="my-12 md:my-24 text-center">
        <div class="md:my-8 px-4 md:px-8 mx-2">
            <div class="md:flex flex-row">
                <div class="basis-1/3 mb-4">
                    <img src="./images/img6.png" alt="">
                </div>
                <?php include('inc/querybox.php') ?> 
            </div>
        </div>
    </div>
    
    <div class="my-12 md:my-24 py-6 md:py-12 px-4 md:px-24 text-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <div class="text-2xl md:text-4xl text-white py-2">Why Work with us?</div>
        <p class="text-base md:text-base text-white py-2">If you'd like to join us in telecommunication or transport field , please get in touch with us.</p>
    </div>

    <div class="my-12 md:my-24">
        <div class="my-8 px-4 mx-2">
            <div class="md:flex flex-row">
                <?php include('inc/contactus.php') ?> 
                <div class="basis-1/3">
                    <img src="./images/img6.png" alt="">
                </div>                
            </div>
        </div>
    </div>
     <?php include('inc/footer.php') ?> 
</body>

</html>