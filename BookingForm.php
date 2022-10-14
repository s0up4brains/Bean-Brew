<?php
  //Process Reservation
  if (isset($_POST["date"])){
    require "reserve.php";
    if ($_RSV->save($_POST["date"], $_POST["slot"], $_POST["name"], $_POST["email"], $_POST["tel"], $_POST["notes"])){
      echo "<div class='ok'>Reservation Saved.</div>";
    } else {echo "<div class='err'>".$_RES->error."</div>";}
  }
?>

<!-- RESERVATION FORM -->

<h1> Reservation Form</h1>
<form id="resForm" method="post" target="_self">

  <label for="res_name">Name</label>
<input type="text" required name="name" value="John Smith" />

  <label for="res_email">Email</label>
<input type="email" required name="email" value="Johnsmith@gmail.com" />

  <label for="res_tel">Telephone Number</label>
<input type="text" required name="tel" value="123456789" />

  <label for="res_notes">Notes (if any)</label>
<input type="text" required name="notes" value="Write your note here..." />

<?php
  $mindate = date("Y-m-d", strtotime("+2 days"));
?>

<label>Reservation Date</label>
<input type="date" required id="res_date" name="date" value="<?=date("Y-m-d") ?>">

<label>Reservation Slot</label>
<select name="slot">
  <option value="AM">AM</option>
  <option value="PM">PM</option>
</select>
<input type="submit" value="Submit"/>
</form>
