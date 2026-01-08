<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Interview Test</title>

  <!-- FYP project stylesheet -->
  <link rel="stylesheet" href="fyp_style.css">
</head>

<body>

  <div class="page">
    <div class="card">
      <h1 class="card-title">Username Verification</h1>

      <div class="form-row">
        <div class="form-label">User Name:</div>

        <div class="input-group">
          <input id="username" class="text-input" type="text" autocomplete="off" />
          <div class="input-icon">👤</div>
        </div>
      </div>

      <button id="submitBtn" class="submit-btn" type="button">Submit</button>

      <div id="msg" class="green" aria-live="polite">Key in username and click submit</div>
    </div>
  </div>

  <script src="verify_ajax.js"></script>
</body>
</html>
