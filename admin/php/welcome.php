
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
    $query="SELECT * FROM contact";
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          <tr>
          <td>#<?=$count+1?></td>
              <td><?=$data['cemail']?></td>
              <td><?=$data['cmessage']?></td>
              <td></button> <a href="php/uwelcome.php?del=<?=$data['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button></a></td>
            </tr>
          <?php
              $count++;
      }
      if($count==0){ ?>
          <td colspan="5" align="center"> Currenty There Is No Messages or Queries !</td>
      <?php }
        ?>
              
          </tbody>
        </table>
      </div>