<div class="employeeForm">
	<form action="../models/retrieve.php" method="POST">
		<table class="employeeFrom">
			<tr>
				<td><label for="teamAffiliation">Team Affiliation:</label></td>
                <td><select name="teamAffiliation" id="teamAffiliation" required>
                		<option value="basketball">Basketball</option>
                		<option value="crossCountry">Cross-Country</option>
                		<option value="football">Football</option>
                		<option value="soccer">Soccer</option>
                		<option value="swimDive">Swimming & Diving</option>
                		<option value="trackField">Track & Field</option>
                		<option value="volleyball">Volleyball</option>
                		<option value="wrestling">Wrestling</option>
                		<option value="other">Other</option>
                </select>
                </td>
			</tr>
			<tr>
				<td>
					<label for="absenceStart">Absence Start:</label>
					<input type="date" id="absenceStart "name="absenceStart" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="absenceEnd">Absence End :</label>
					<input type="date" id="absenceEnd" name="absenceEnd" required>
				</td>
			<tr class="submitRow">
				<td colspan="2">
					<input type="submit" value="SUBMIT">
				</td>
			</tr>
        </table>
    </form>
</div>