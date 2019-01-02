<html>
<head>
<title> Add Trainer </title>
<script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            tname: {
              identifier  : 'tname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter the trainer name'
                },
              ]
            },
            tphoneno: {
              identifier  : 'tphoneno',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your contact no'
                },
                {
                  type   : 'length[10]',
                  prompt : 'Your contact no shouldbe exactly 10 characters'
                }
              ]
            },
            tmailid: {
              identifier  : 'tmailid',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your mail id'
                },
                {
                  type   : 'email',
                  prompt : 'Enter valid mail'
                }
              ]
            },
            tspec: {
              identifier  : 'tspec',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your specialization'
                }
              ]
            },
            tschool: {
              identifier  : 'tschool',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your school name'
                }
              ]
            },
            
          }
        })
      ;
    });
  </script>

</head>

<body>

<form class="ui form" action="trainer" method="post" >
<br />
<h3 class="ui dividing header" style="text-align: left;">Add Trainer</h3>
<br />
<div class="ui error message"></div>
<div style="align:center">
<div>
  <div class="field">
     <div class="two fields">
      <div class="eight wide field">
      <label>Trainer Name</label>
      </div>
      <div class="eight wide field">
        <input type="text" name="tname" placeholder="Name of Trainer">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="eight wide field">
      <label>Contact No</label>
      </div>
      <div class="eight wide field">
        <input type="text" name="tphoneno" placeholder="Contact Number">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="eight wide field">
      <label>Mail Id</label>
      </div>
      <div class="eight wide field">
        <input type="text" name="tmailid" placeholder="abc@gmail.com">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="eight wide field">
      <label>Specialization</label>
      </div>
      <div class="eight wide field">
        <input type="text" name="tspec" placeholder="Enter the specialization">
      </div>
    </div>
  </div>
 
  <div class="field">
    <div class="two fields">
      <div class="eight wide field">
      <label>School</label>
      </div>
      <div class="eight wide field">
        <input type="text" name="tschool" placeholder="Name of School">
      </div>
    </div>
  </div>

  </div>
  <h4 class="ui dividing header"></h4>
 
<form class="ui form" action="trainer" method="post" >
<input id="submitBtn" type="submit" class="ui button" style="background-color:#2185d0" name="Add Trainer" value="Record Saved" ></input>
</div>
</div>

</form>
</body>
</html>