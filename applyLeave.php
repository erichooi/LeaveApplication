<h2 style="margin-left: 20px;">Apply Leave</h2>
<form action="createLeave.php" method="post">
    <table style="margin-left: 20px;">
        <tr>
            <td>Title: </td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Reason: </td>
            <td><textarea name="reason" rows="3" cols="40"></textarea></td>
        </tr>
        <tr>
            <td>Start Date: </td>
            <td><input type="text" name="start"><span style="color: red"> (format: yyyy-mm-dd)</span></td>
        </tr>
        <tr>
            <td>End Date: </td>
            <td><input type="text" name="end"><span style="color: red"> (format: yyyy-mm-dd)</span></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right;"><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
