
<?php include("partials/header.html") ?>

<div class="upcontainer  ">
        <div class="info-header pt-5 ">
            <h1 style="color: green" class="text-center pl-4">UPLOADING FORM</h1>
            <p class="text-align-left pl-4 ">You can upload One Subject if Finished, then later Upload another Subject OR you can upload all of the TWO subjects by clicking the First button for choosing one file then the second button for any remained subject</p>
        </div>

        <ul class="pl-5">
            <li>Make Sure you Fill First Name and Last Name Field</li>
            <li>Remember to choose your class correctly from the drop-down menu</li>
            <li> Wait for the page to finish to load after Pressing SEND button till you see a successful message
</li>
<li>Any Problem ask for Help</li>
        </ul>

        <form action="upload" method="post" enctype="multipart/form-data">
        <div class="row mt-5">
            <div class="col-lg-6 pl-4">
                    <label for="name">Firstname:</label><br>
                    <input type="text" name="fname" placeholder="Name">
            </div>

            <div class="col-lg-6 pr-4">
                    <label for="name">Lastname:</label><br>
                    <input type="text" name="lname" placeholder="Name">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-4 pl-4">
                <div class="form-group">
                <label for="class">Class</label>
                <select class="form-control"  name="class" id="class">
                    <option>Form II</option>
                    <option>Form IV</option>
                </select>
            </div>
                

                
            </div>
            <div class="col-lg-4">
                    <label for="name">Choose Scaned PDF upload not Picture pls <span style="color: red">*</span> </label>
                    <input type="file" name="fileToUpload" >
            </div>

            <!-- <div class="col-lg-4">
                    <label for="name">Upload Subject 2<span style="color: red">*</span> </label>
                    <input type="file" name="fileToUpload" >
            </div> -->
        </div>
        <a href="" class="btn btn-block btn-success mt-5 send">Send</a>
</form>

        
</div>

<?php include("partials/footer.html") ?>