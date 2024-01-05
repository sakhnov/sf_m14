<?php
function getUsersList() {
    $file_users = fopen('users.csv', 'r');
    $users_array = [];
    $i = 0;
    while (($data = fgetcsv($file_users)) !== false) {
        foreach ($data as $user) {
            $user_arr = explode(';', $user);
            $users_array[$i]['id'] = $user_arr[0];
            $users_array[$i]['login'] = $user_arr[1];
            $users_array[$i]['password'] = $user_arr[2];
            $users_array[$i]['birthday'] = $user_arr[3];
        }
        $i++;
    }
    fclose($file_users);
    return $users_array;
}

function existsUser($login) {
    $users_array = getUsersList();
    foreach ($users_array as $user) {
        if ($user['login'] === $login) return true;
    }
    return false;
}

function checkPassword($login, $password){
    $users_array = getUsersList();
    foreach ($users_array as $user) {
        if ($user['login'] === $login && $user['password'] === md5($password)) return true;
    }  
    return false; 
}

function getCurrentUser(){
    $username = $_SESSION['login'] ?? null; 
    $auth = $_SESSION['auth'] ?? null;
    if ($auth && $username) return $username;

    return false;
}

function getCurrentUserBirthday(){
    $username = $_SESSION['login'] ?? null; 
    if ($username) {
        $users_array = getUsersList();
        foreach ($users_array as $user) {
            if ($user['login'] === $username) return $user['birthday'];
        }
    }
    return false;
}

function getDaysUntilBirthday() {
    if (getCurrentUser()) {
        $birthday = date('d.m.Y', getCurrentUserBirthday());
        $bd = explode('.', $birthday);
        $bd = mktime(0, 0, 0, $bd[1], $bd[0], date('Y') + ($bd[1].$bd[0] <= date('md')));
        $days_until = ceil(($bd - time()) / 86400);
        if ($days_until == 366) return 0;
        return $days_until;
    }
    return false;
}

function echo_days($days) {
    if($days % 10 == 1 && ($days % 100 > 19 || $days < 11 )) {
        return "день";
    } else if ($days % 10 > 1 && $days % 10 < 5 && ($days % 100 >19 || $days < 11 )) {
        return "дня";
    } else {
        return "дней";
    }
}

function addUser($login, $password, $birthday) {
    if (!existsUser($login)) {
        $users_array = getUsersList();
        $id = count($users_array) + 1;
        $user_array = array($id, $login, md5($password), strtotime($birthday));
        $file_users = fopen('users.csv', 'a');
        fputcsv($file_users, $user_array, ';');
        fclose($file_users);
        return true;
    }
    return false;

}