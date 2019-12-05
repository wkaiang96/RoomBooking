<div class="container-fluid" style="margin-top:8%; margin-bottom:5%; text-align:left">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<table style="width:100%">
			<tr>
				<td>
					<img src="http://localhost/roomBooking/bookingSystem/img/event1.png" alt="room" width="600px" height="360px" />
				</td>
				<td>
					<h3>Slot Time:</h3>
					<div >
						Slot 1:&nbsp; 10.00am - 12.00pm<br/><br/>
						Slot 2:&nbsp; 2.00pm - 4.00pm<br/><br/>
						Slot 3:&nbsp; 4.00pm - 6.00pm<br/><br/>
						Slot 4:&nbsp; 6.00pm - 8.00pm <br/><br/>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<img src="http://localhost/roomBooking/bookingSystem/img/event2.png" alt="room" width="600px" height="360px" />
				</td>
				<td>
					<div class="form-group">
						<form action="http://localhost/roomBooking/bookingSystem/adminR.php" method="post">

							<b>User Email: (Book by) </b>
							<input class="form-control" id="userEmail" name="userEmail">
							<br/>

							<b>Date: </b>
							<input type="date" name="bookdate" class="form-control">
							<br/>

							<p><b>Time: </b>
								<select name="slot" class="form-control">
									<option name="slot" value="slot1">10.00am - 12.00pm</option>
									<option name="slot" value="slot2">02.00pm - 04.00pm</option>
									<option name="slot" value="slot3"> 04.00pm - 06.00pm</option>
									<option name="slot" value="slot4"> 06.00pm - 08.00pm</option>
								</select>
							</p><br/>

							<p>
								<b>Room: </b>
								<select name="roomT" class="form-control">
									<option name="roomT" value="RoomA">Room A</option>
									<option name="roomT" value="RoomB">Room B</option>
									<option name="roomT" value="RoomC">Room C</option>
									<option name="roomT" value="RoomD">Room D</option>
								</select>
							</p>
							<br/>
							<div style="text-align: right">
								<input type="submit" name="reserve-submit" id="reserve-submit" tabindex="4" class="btn btn-success btn-outline-secondary" value="reserve">
							</div>
						</form>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>


