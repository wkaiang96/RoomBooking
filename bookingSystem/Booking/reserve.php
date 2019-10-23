<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="footer.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php
	include('header.php');
?>
<div class="container " style="margin-top:8%;margin-bottom:5%;text-align:center">
  <table style="width:60%;margin: 0 20% 0 20%">
    <td>
    <img src="../img/event1.png" alt="room" width="400px" height="250px" />
    <p><b>Room A & B for small group of people(6-8 people).</b></p>
    <img src="../img/event2.png" alt="room" width="400px" height="250px" />
    <p><b>Room C & D for huge group of people(12-15 people).</b></p>
    </td>
    <td> 
      <form id="reserve-form" action="../reserveR.php" method="post" role="form"> 
        <div  style="margin-left:3%;font-weight:bold">
          Slot 1: <br/>
          10.00am - 12.00pm<br/><br/>
          Slot 2:<br/>
          2.00pm - 4.00pm<br/><br/>
          Slot 3: <br/>
          4.00pm - 6.00pm<br/><br/>
          Slot 4:<br/>
          6.00pm - 8.00pm <br/><br/>

        </div>
        <div class="form-group" style="text-align:left">
          <p><b>Time: </b>
            <select name="slot">
              <option name="slot" value="slot1">10.00am - 12.00pm</option>
              <option name="slot" value="slot2">02.00pm - 04.00pm</option>
              <option name="slot" value="slot3"> 04.00pm - 06.00pm</option>
              <option name="slot" value="slot4"> 06.00pm - 08.00pm</option>
            </select>
          </p>
          <p>
          <b>Room: </b>
            <select name="roomT">
              <option name="roomT" value="RoomA">Room A</option>
              <option name="roomT" value="RoomB">Room B</option>
              <option name="roomT" value="RoomC">Room C</option>
              <option name="roomT" value="RoomD">Room D</option>
            </select>
          </p>
        <div class="form-group">
          <input type="submit" name="reserve-submit" id="reserve-submit" tabindex="4" class="btn btn-outline-secondary" value="reserve">
        </div>
        </div>
      </form>
    </td>
  </table>
</div>
<?php
	require('footer.php');
?>
</body>
</html>