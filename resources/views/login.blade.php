<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SignIn</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="logos/unilogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/frontend/CSS/loginStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src='main.js'></script>
    <style>
    </style>
</head>
<body>
<!-- Side Navbar -->
  <div class="navbar">
    <ul>
      <li><a href="/index.html">Home</a></li>
      <li><a href="signup.html" class="active">Sign Up</a></li>
      <li><a href="signup.html" class="notices">Notices +</a></li>
      <li><a href="signup.html" class="steps">STEPS</a></li>
    </ul>
  </div>

  <!-- login form -->
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if(!session('status'))
  <div class="alert alert-success">
        Data nai
    </div>
  @endif
  <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">  
  @csrf  
  <div class="container">    
      <label>Name:</label>   
      <input type="text" name="name" placeholder= "" size="50">
      <label>SSC ROLL:</label>  
      <input type="text" name="ssc_roll" placeholder="" size="40">
      <label>SSC Reg:</label>
      <input type="text" name="ssc_reg" placeholder="" size="40">
      <label>GPA:</label>
      <input type="text" name="ssc_gpa" placeholder="" size="40">
      <label>SSC Passing Year:</label> 
      <select id="HSC GROUP" name="ssc_passing_year">
        <option value="2020" selected>2020</option>  
        <option value="2021">2021</option>   
      </select><br>
      
      <label for="SSC GROUP">SSC Group:</label>
      <select id="sscGroup" name="ssc_group">
        <option value="" selected>--Choose Your SSC Group--</option>
        <option value="Arts">Arts</option>  
        <option value="Science">Science</option>  
        <option value="Commerce">Commerce</option>  
      </select>
      <label>HSC ROLL:</label>  
      <input type="text" name="hsc_roll" placeholder="" size="40">
      <label>HSC Reg:</label>  
      <input type="text" name="hsc_reg" placeholder="" size="40">
      <label>GPA:</label>  
      <input type="text" name="hsc_gpa" placeholder="" size="40">
      <label>HSC Passing Year:</label> 
      <select id="hsc_passing_year" name="hsc_passing_year">
        <option value="2022" selected>2022</option>  
        <option value="2023">2023</option>   
      </select><br>
      <label for="HSC GROUP">HSC Group:</label>
      <select id="hsc_group" name="hsc_group">
        <option value="" selected>--Choose Your HSC Group--</option>
        <option value="Arts">Arts</option>  
        <option value="Science">Science</option>  
        <option value="Commerce">Commerce</option>  
      </select>
    </div>
    <button style="    text-decoration: none;
    color: black;
    border: 1px solid black;
    background-color: whitesmoke;
    padding: 5px 10px;
    margin-right: 70%;
    cursor:pointer;
    float: right;
    margin-top: 15px;
    border-radius: 5px" type="submit">Submit</button>
  </form>
 
</body>
</html>