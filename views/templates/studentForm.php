<div class="studentForm">
    <form action="../models/insert.php" method="POST" >    
        <table>
            <th>First Name</th>
            <th>Last Name</th>
            <tr>
                <td><input type="text" name="firstName" id="firstName" required></td>
                <td><input type="text" name="lastName"  id="lastName" required></td>
            </tr>
            <th>Professor email</th>
            <th>Class Frequency</th>
            <tr>
                <td><input type="email" name="email1" id="email1" required></td>
                <td><select name="class1Frequency" id="class1Frequency" required>
                		<option value="MON/WED/FRI" selected>MON/WED/FRI</option>
                		<option value="TUE/THU">TUE/THU</option>
                		<option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                		<option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email2" id="email2"></td>
				<td><select name="class2Frequency" id="class2Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                		<option value="TUE/THU">TUE/THU</option>
                		<option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                		<option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email3" id="email3"></td>
				<td><select name="class3Frequency" id="class3Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email4" id="email4"></td>
				<td><select name="class4Frequency" id="class4Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email5" id="email5"></td>
				<td><select name="class5Frequency" id="class5Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email6" id="email6"></td>
				<td><select name="class6Frequency" id="class6Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email7" id="email7"></td>
				<td><select name="class7Frequency" id="class7Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email8" id="email8"></td>
				<td><select name="class8Frequency" id="class8Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email9" id="email9"></td>
				<td><select name="class9Frequency" id="class9Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <td><input type="email" name="email10" id="email10"></td>
				<td><select name="class10Frequency" id="class10Frequency" required>
                		<option value="MON/WED/FRI">MON/WED/FRI</option>
                        <option value="TUE/THU">TUE/THU</option>
                        <option value="MON/TUE/WED/THU/FRI">MON/TUE/WED/THU/FRI</option>
                        <option value="OTHER">OTHER</option>
                	</select>
                </td>
            </tr>
            <tr>
                <th>Team Affiliation:</th>
                <td><select name="teamAffiliation" id="teamAffiliation" required>
                		<option value="basketball" selected>Basketball</option>
                		<option value="crossCountry">Cross-Country</option>
                		<option value="football">Football</option>
                		<option value="soccer">Soccer</option>
                		<option value="swimDive">Swim/Dive</option>
                		<option value="trackFaield">Track/Field</option>
                		<option value="volleyball">Volleyball</option>
            			<option value="wrestling">Wrestling</option>
            			<option value="other">Other</option>
            		</select>
                </td>
            </tr>
            <tr class="submitRow">
                <td colspan="6">
                    <input type="submit" value="SUBMIT">
                </td>
            </tr>
        </table>
    </form>
</div>