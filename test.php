<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08-Jun-18
 * Time: 7:20 PM
 */

include_once "config/db.connection.php";



function message_list($conn){

    $sql = "SELECT * FROM get_message";
    $result = $conn->query($sql);
    while ($r=$result->fetch_assoc()){

        echo"
        <li>
            <a href=\"#\" class=\"clearfix\">
                <img src=\"assets/images/avatars/avatar.png\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
                    <span class=\"msg-body\">
                        <span class=\"msg-title\">
                            <span class=\"blue\">Alex:</span>
                            Ciao sociis natoque penatibus et auctor ...
                    </span>
        
                    <span class=\"msg-time\">
                        <i class=\"ace-icon fa fa-clock-o\"></i>
                        <span>a moment ago</span>
                    </span>
                </span>
            </a>
        </li>
       
        ";
    }
}

message_list($conn);