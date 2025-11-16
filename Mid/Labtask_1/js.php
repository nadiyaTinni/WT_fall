<!DOCTYPE html>
<html>
<head>
  <title>Student & Course Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #ebe5f1ff;
    }

    h2 {
      text-align: center;
      color: #0c0b0bff;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto 30px auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #4d06d9ff;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #0055aa;
    }

    #output, #activityOutput {
      text-align: center;
      margin-top: 15px;
      color: #003366;
      font-size: 16px;
    }

    #error, #activityError {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>

<body>

  <h2>Participant Registration section</h2>

  <form onsubmit="return handleRegister()">
    <label>Full Name:</label>
    <input type="text" id="name">

    <label>Email:</label>
    <input type="text" id="email">

    <label>Phone Number :</label>
    <input type="text" id="phnnum">

    <label>Password:</label>
    <input type="password" id="password">

    <label>Confirm Password:</label>
    <input type="password" id="confirmPassword">

    <button type="submit">Register</button>

    <div id="output"></div>
  </form>

  <h2>Activity selection section</h2>

  <form onsubmit="return addActivity()">
    <label>Activity Name:</label>
    <input type="text" id="activityname">

    <button type="submit">Add Activity</button>

    <div id="activityError"></div>
    <div id="activityOutput"></div>
  </form>

<script>
  function handleRegister() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phnnum = document.getElementById("phnnum").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirmPassword = document.getElementById("confirmPassword").value.trim();

    let outputDiv = document.getElementById("output");

    outputDiv.innerHTML = "";

    // FIXED missing 
    if (name === ""  phnnum === ""  email === ""  password === "" || confirmPassword === "") {
      alert("Please fill up all the fields.");
      return false;
    }

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }

    // FIXED include() → includes()
    if (!email.includes('@')) {
      alert("Invalid email");
      return false;
    }

    if (isNaN(phnnum)) {
      alert("Phone Number Must be digit!");
      return false;
    }

    // FIXED phnum → phnnum
    outputDiv.innerHTML = `
      <strong>Registration Successful!</strong><br><br>
      Name: ${name}<br>
      Email: ${email}<br>
      Phone number: ${phnnum}<br>
    `;
    return false;
  }

  function addActivity() {
    let activityname = document.getElementById("activityname").value.trim();
   

    if (activityname === "") {
      activityError.innerHTML = "Please enter an activity name.";
      return false;
    }

    activityOutput.innerHTML = `
      <strong>Activity Added:</strong> ${activityname}
    `;
    return false;
  }
</script>

</body>
</html>