<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Inventory PPLG</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      }
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f4f4f4;
    }
    .login-box {
      background: white;
      padding: 30px;
      border: 1px solid #ccc;
      width: 300px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
    }
    input {
      border: 1px solid #aaa;
    }
    button {
      background: black;
      color: white;
      border: none;
      cursor: pointer;
    }
    .pesan {
        color: red;
        margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Inventory pplg</h2>
    <form method="POST" action="proses_login.php">
      <input type="text" name="username" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
