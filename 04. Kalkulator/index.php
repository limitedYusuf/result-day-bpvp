<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>

  <link rel="stylesheet" href="ui.css">
</head>
<body data-theme="">
  <div class="main">
    <div class="calculator">
      <div class="header">
        <div class="switchBox">
          <input type="checkbox" name="switch" id="switch" class="switch" value="switch">
          <div class="box"></div>
        </div>
      </div>

      <div class="input">
        <input type="text" name="" id="display" disabled>
        <input type="button" value="C" class="cancel_btn">
      </div>
      <div class="row">
        <input type="button" value="7">
        <input type="button" value="8">
        <input type="button" value="9">
        <input type="button" value="+">
      </div>
      <div class="row">
        <input type="button" value="4">
        <input type="button" value="5">
        <input type="button" value="6">
        <input type="button" value="-">
      </div>
      <div class="row">
        <input type="button" value="1">
        <input type="button" value="2">
        <input type="button" value="3">
        <input type="button" value="*">
      </div>
      <div class="row">
        <input type="button" style="border-radius: 0 0 0 10px;" value=".">
        <input type="button" value="0">
        <input type="button" style="background: #542e71; color: white;" value="=">
        <input type="button" style="border-radius: 0 0 0 10px;" value="/">
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>
</html>