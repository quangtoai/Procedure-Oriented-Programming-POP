<?php
function connect_db()
{
    $connect = mysqli_connect(db_host, db_user, db_pass, db_name);
    mysqli_set_charset($connect, "utf8");
    return $connect;
}

function get_all($table, $cond = '')
{
    global $connect;
    $sql = 'Select * from ' . $table . ' where 1=1 ' . $cond;
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        die('cau lenh sai');
    }
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function get_one($table, $cond = '')
{
    global $connect;
    $sql = 'Select * from ' . $table . ' where 1=1 ' . $cond;
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        die('cau lenh sai');
    }
    $row = mysqli_fetch_assoc($result);
    return $row;
}

/**
 * @param $table
 * @param $params
 * @param false $id
 * @return bool|mysqli_result
 * @description dung de cap nhat hoac insert. neu truyen id vao thi la cap nhat, con ko thi laf insert
 */
function update($table, $params, $id = false)
{
    global $connect;
    $arr = [];
    foreach ($params as $k => $v) {
        $arr[] = $k . "= '{$v}'";
    }
    $str = implode(', ', $arr);
    $action = 'INSERT ';
    $where = "";
    if ($id) { // sua
        $action = 'UPDATE ';
        $where = ' where id= ' . $id;
    }
    $sql = $action . $table . '  SET ' . $str . $where;
    return mysqli_query($connect, $sql);

}

function execute_sql($sql)
{
    global $connect;
    $result = mysqli_query($connect, $sql);
    return $result;
}



