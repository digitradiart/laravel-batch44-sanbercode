<!-- SCRIPT BY AYU AGUSTINA, digitradiart@gmail.com -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
      @csrf
      <label for="firstname">First Name :</label> <br />
      <br />
      <input type="text" name="fname" /> <br />
      <br />

      <label for="lastname">Last Name :</label> <br />
      <br />
      <input type="text" name="lname" /> <br />
      <br />

      <label for="gender">Gender :</label> <br />
      <br />
      <input type="radio" value="1" name="gender" />Female <br />
      <input type="radio" value="2" name="gender" />Male <br />
      <input type="radio" value="3" name="gender" />Other <br /><br />

      <label for="nationality">Nationality :</label><br />
      <br />
      <select name="nationality" id="nationality">
        <option value="1">Warga Negara Indonesia</option>
        <option value="2">Warga Negara Asing</option>
      </select>
      <br />
      <br />

      <label for="language">Language Spoken :</label> <br /><br />
      <input type="checkbox" name="bahasa" id="bahasa" />Bahasa Indonesia<br />
      <input type="checkbox" name="english" id="english" />English<br />
      <input type="checkbox" name="other" id="other" />Other<br /><br />

      <label for="bio">Bio :</label> <br /><br />
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br /><br />

      <input type="submit" value="Kirim" />
    </form>
  </body>
</html>
