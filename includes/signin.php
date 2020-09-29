<div id="id01" class="modal">
            <form class="modal-content animate" action="index.php">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01')
                .style.display='none'"
                class="close" title="Close">
                  &times;
                </span>
                <img src="images/logo.png" alt="avatar" class="avatar">
              </div>

                <div class="container">

                  <label>username</label>
                  <input type="text" class="text" placeholder="Enter Username" name="uname" required>

                  <label>Password</label>
                  <input type="password" class="password" name="psw" placeholder="Enter Password" required>

                  <button type="submit">SIGNIN</button>
                  <input type="checkbox" checked="checked">Remember me

                </div>

                <div class="container" style="background-color: #f1f1f1">

                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">cancel</button>
                  <span class="psw">Forgot<a href="#">password?</a></span>

                </div>
            </form>
          </div>