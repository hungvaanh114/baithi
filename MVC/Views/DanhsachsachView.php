<div class="container-fluid mt-3">
    <h2 style="text-align: center;color: blue;">THÔNG TIN TÌM KIẾM</h2>

    <form method="post" action="http://localhost/QLS_MVC_API/Danhsachsach/timkiemsach">
        <!-- Vertical -->
        <div class="form-group">
            <label>Mã sách</label>
            <input type="text" name="idsach" class="form-control" placeholder="Nhập mã sách" value="<?php if (isset($data['idsach'])) echo $data['idsach']; ?>">
            <label>Tên sách</label>
            <input type="text" name="tensach" class="form-control" placeholder="Nhập tên sách" value="<?php if (isset($data['tensach'])) echo $data['tensach']; ?>">
            <label>Chọn Thể loại</label>
            <select name="theloai" class="form-control">
                <option value="">--Chọn thể loại--</option>
                <?php
                foreach ($data['theloai'] as $row) {
                    $selected = ($row['idtheloai'] == $idtheloai) ? 'selected' : '';
                    echo "<option value='" . $row['idtheloai'] . "' " . $selected . ">" . $row['tentheloai'] . "</option>";
                }
                ?>
            </select>

            <br>
            <div style="text-align: center;">
                <div class="input-group-append" style="display: block;">
                    <button class="btn btn-secondary" type="submit" name="btnSearch" style="    background-color: #ffae68;">
                        <i><img src="http://localhost/QLS_MVC_API/MVC/Public/images/search.png"></i> Tìm kiếm
                    </button> &nbsp;
                   
                </div>

            </div>
        </div>
        <?php

        ?>
        <h2 style="text-align: center;color: blue;">KẾT QUẢ TÌM KIẾM</h2>
        <table class="table table-bordered table-striped">
            <thead style="background-color: darkkhaki">
                <th>STT</th>
                <th>Mã sách</th>
                <th>Tên sách</th>
                <th>Tên thể loại</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $count = 1;
                if (isset($data['result'])) {

                    foreach ($data['result'] as $row) {
                        echo '<tr>
                    <td>' . $count++ . '</td>
                    <td>' . $row["idsach"] . '</td>
                    <td>' . $row["tensach"] . '</td>
                    <td>' . $row["tentheloai"] . '</td>
                    <td>' . $row["soluong"] . '</td>
                    <td>' . $row["gia"] . '</td>
                     <td style="text-align: center"><a href="http://localhost/QLS_MVC_API/Danhsachsach/xoasach/' . $row["idsach"] . '">
                    <img src="http://localhost/QLS_MVC_API/MVC/Public/images/deleteStand.png">
                    </a></td>
                    <td><a href="http://localhost/QLS_MVC_API/Danhsachsach/editsach/' . $row["idsach"] . '" class="btn btn-outline-priidry">Edit</a></td>
                </tr>'
                        
                ;
                    }
                }
                ?>
            </tbody>


        </table>

    </form>


</div>