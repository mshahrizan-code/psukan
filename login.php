<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Default styles for desktop */
      .card {
        background-color: white;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
      }
      .container {
        display: flex;
        flex-wrap: wrap;
      }
      .form-group {
        flex: 1;
        margin: 0 10px;
      }

      /* Media query for screens below 600px */
      @media (max-width: 600px) {
        .card {
          width: 100%;
          box-shadow: none;
        }
        .container {
          flex-wrap: nowrap;
        }
        .form-group {
          flex: 100%;
          margin: 10px 0;
        }
      }
    </style>
  </head>
  <body>
    <div class="card">
      <div class="container">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
          <button type="submit">Log in</button>
        </div>
      </div>
    </div>
  </body>
</html>
