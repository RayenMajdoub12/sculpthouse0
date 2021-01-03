<?php require 'header.php';
if(isset($_GET['exercice']))
{
$exercice=$_GET['exercice'];
}
?>
<?php if($exercice==1):?>
  
   
    <style>
        td{
            text-align: center;
        }
    </style>
    <body>
          <div>
            <table style="width:100%">
              <tr>
                <td><strong>1 - Pompes</strong></td>
                <td><strong>2 - Crunch abdominale</strong></td>
                <td><strong>3 - </strong></td>
              </tr>
              <tr>
                <td><center><img width="400" height="200" src="images/pompe-muscu-exercice-course.gif"></center></td>
                <td><center><img width="400" height="200" src="crunch abdominale.gif"></center></td>
                <td><center><img width="400" height="200" src="pompe-muscu-exercice-course.gif"></center></td>
              </tr>
              <tr>
                <td>x15</td>
                <td>x20</td>
                <td>16s</td>
              </tr>
            </table>
          </div>
          <div>
            <table style="width:100%">
              <tr>
                <td><strong>1 - Pompes</strong></td>
                <td><strong>2 - Crunch abdominale</strong></td>
                <td><strong>3 - </strong></td>
              </tr>
              <tr>
              <td><center><img width="400" height="200" src="pompe-muscu-exercice-course.gif"></center></td>
                <td><center><img width="400" height="200" src="crunch abdominale.gif"></center></td>
                <td><center><img width="400" height="200" src="pompe-muscu-exercice-course.gif"></center></td>
              </tr>
              <tr>
                <td>x15</td>
                <td>x20</td>
                <td>16s</td>
              </tr>
            </table>
          </div>
          <div>
            <table style="width:100%">
              <tr>
              <td><strong>1 - Pompes</strong></td>
                <td><strong>2 - Crunch abdominale</strong></td>
                <td><strong>3 - </strong></td>
              </tr>
              <tr>
              <td><center><img width="400" height="200" src="pompe-muscu-exercice-course.gif"></center></td>
                <td><center><img width="400" height="200" src="crunch abdominale.gif"></center></td>
                <td><center><img width="400" height="200" src="pompe-muscu-exercice-course.gif"></center></td>
              </tr>
              <tr>
                <td>x15</td>
                <td>x20</td>
                <td>16s</td>
              </tr>
            </table>
          </div>
            <div class="clear"></div>

    </body>
</html>


<?php endif;?>

<?php require 'footer.php';