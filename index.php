<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Skills Test</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>First name</th>
              <th>Last name</th>
              <th>E-mail</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($people as $person): ?>
      				<tr>
                <td><?php echo $person['id'];?></td>
                <td><?php echo $person['first_name'];?></td>
                <td><?php echo $person['last_name'];?></td>
      					<td><?php echo $person['email'];?></td>
                <td><button class="bt-info">Alert</button></td>

      				</tr>
      			<?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('.bt-info').click(function(){
          var name = $(this).parents('tr').children('td:nth-child(2)').text() + ' ' + $(this).parents('tr').children('td:nth-child(3)').text()
          var email = $(this).parents('tr').children('td:nth-child(4)').text()
          var info = "Name: " + name + "\n" + "E-mail: " + email
          alert(info)
        })
      })
    </script>
  </body>
</html>
