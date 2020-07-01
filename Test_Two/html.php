<form action="view.php" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="first_number"/></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="number" name="last_number"/></td>
        </tr>
        <tr>
            <th>Full Number</th>
            <td><input type="text" size="25" value=""/></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+"/>
                <input type="submit" name="btn" value="-"/>
                <input type="submit" name="btn" value="*"/>
                <input type="submit" name="btn" value="/"/>
                <input type="submit" name="btn" value="%"/>
            </td>
        </tr>
    </table>
</form>