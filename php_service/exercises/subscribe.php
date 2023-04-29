<div class="popup">
	<div id='subscribe-face' class="popup-face">Enter Mobile Number:<br>
		<select name="carrier" id="carrier-select">
			<option class="carrier-option" value="@mms.att.com">AT&T</option>
			<option class="carrier-option" value="@vzwpix.com">Verizon</option>
		</select>
		<input id="subscribe-number" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" placeholder="Ex. 9876543210"><br>
		<button id="subscribe-btn">Send</button>
	</div>
</div>
<script>
	var btn2 = document.getElementById("subscribe-btn");

	btn2.onclick = function() {

		var carrier = document.getElementById("carrier-select").value;
		var number = document.getElementById("subscribe-number").value;

		if ( number.length < 10 ) { alert("Format: 9876543210"); return false; }

		var addr = number + carrier;

		$.post("./exercises/submit.php", { addr: addr }, function() { alert("Subscribed!"); });

		$("#Subscribe").myOwnDialog("close");

	}
</script>
