<?php
    require_once("connDB.php");

    $sql = "SELECT * FROM `students`";
    $result = mysql_query($sql);
    $total = mysql_num_rows($result);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>LIST</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>

    <body>
        <div class="container">
            <div>
                <div>共有幾<?php echo $total;?> 筆資料</div>
                <table class="table">
                    <tr>
                        <th>姓名</th>
                        <th>電話</th>
                        <th>MAIL</th>
                    </tr>
                    <?php while($row=mysql_fetch_assoc($result)){ ?>
                        <tr>
                            <td>
                                <?php echo $row["name"]; ?>
                            </td>
                            <td>
                                <?php echo $row["phone"]; ?>
                            </td>
                            <td>
                                <?php echo $row["email"]; ?>
                            </td>
                            
                            <td>
                                <a href="delete.php?sid=<?php echo $row["id"] ;?>"class="fa fa-trash-o fa-2x" onclick="return confirm('確認刪除?')"></a>
                            </td>
                            <td>
                                <a href="edit.php?sid=<?php echo $row["id"] ;?>" class="fa fa-pencil fa-2x"></a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
            <a href="add.php">增加資料</a>
        </div>
    </body>

    </html>