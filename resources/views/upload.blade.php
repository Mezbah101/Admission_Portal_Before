<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <link rel="stylesheet" href="/frontend/CSS/upload.css">
    <link rel="shortcut icon" href="/frontend/logos/unilogo.png" type="image/x-icon">
</head>
<body>
    <section>
        <div class="navbar">
            <ul>
                <li><a href="/index.html">Home</a></li>
                <li><a href="/index.html" class="active">Sign Up</a></li>
                <li><a href="signup.html" class="notices">Notices +</a></li>
                <li><a href="signup.html" class="steps">STEPS</a></li>
                <li><a href="">Basic Information</a></li>
                <li><a href="">Academic Information </a></li>
                <li style="background-color:green;"><a href="">Upload Attachment </a></li>
                <li><a href="{{url('payment')}}">Next</a></li>

            </ul>
        </div>
        <div class="upload-container">
            <h2> Upload Your Photo</h2>
            <div class="frame">
                <div class="center">
                    <div class="title">
                        <h1>Drop file to upload</h1>
                    </div>
            
                    <div class="dropzone">
                        <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                        <input type="file" class="upload-input" />
                    </div>
            
                    <button type="button" class="btn" name="uploadbutton">Upload file</button>
                </div>
        </div>

        <a href=""><input type="button" value="Next"></a>

       
    </section>
</body>
</html>