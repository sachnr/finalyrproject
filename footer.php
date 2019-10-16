 <?php 
$title='College Erp';
$page='home';
?>
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large waves-effect waves-light discord z-depth-2 pulse" href="#" data-toggle="modal" data-target="#contactus"><i class="material-icons">chat_bubble</i></a>
        </div>

      <footer class="footer-section footer">
      <div class="footer-top">
        <div class="container">
              <div class="row">
                  <div class="col l6 s12">
                    <div class="footer-logo">
                    <a href="index.php"><figure><img src="images/erpban.png" alt="" style="height: 100px;"></figure></a>
                    </div>
                  </div>
                    <div class="col l4 offset-l2 s12">
                      <h4 class="white-text">Quick Links</h4>
                      <ul>
                        <li><a class="grey-text text-lighten-3" href="about.php">About</a></li>
                        <li><a class="grey-text text-lighten-3" href="gallery.php">Gallery</a></li>
                      </ul>
                    </div>
            </div>
        </div>
            <div class="footer-copyright">
                <div class="container">
                  © 2019 Copyright 
                </div>
            </div>
      </div>
      </footer>


      <!--modal-->
      <div class="modal fade" id="contactus" role="dialog">
          <div class="modal-dialog sublime card-panel">
            <div class="modal-content sublime">
              <div class="modal-header sublime">
                  <h4 class="modal-title"><center><img src="images/erpban.png" alt="" style="height: 90px;"></center></h4>
              </div>
              <div class="modal-body sublime">
                <form action="mail.php" method="POST" class="col s12 center">      
                          <h3 class="center">Send us your query</h3>
                      
                          <div class="input-field">
                          <i class="material-icons prefix">account_balance</i>
                          <input type="text" name="cid">
                          <label>Enter College ID</label>
                          </div>
                  
                          <div class="input-field">
                          <i class="material-icons prefix">email</i>
                          <input name="emailcu" type="email" class="validate">
                          <label>Enter Email adress</label>
                          </div>

                          <div class="input-field col s12">
                          <i class="material-icons prefix">feedback</i>
                    <textarea id="textarea1" class="materialize-textarea " name="feedback" maxlength="6000" rows="7" required></textarea>
                    <label for="textarea1">Query</label>
                    </div>
                      
                      <div class="col s12 ">
                       <button class="cbtn waves-effect waves-light btn-small center discord col s12 z-depth-5" type="submit" name="submit">send
                   <i class="material-icons right">send</i>
                   </button>
                   </div>

                   <div class="clearfix"></div>
                      </form>
                  </div>
                  <div class="modal-footer sublime">
                  <button type="button" class="cbtn waves-effect waves-light btn-small modal-close discord z-depth-5" data-dismiss="modal">Close</button>
              </div>
              </div>
          </div>
        </div>

  </body>
</html>