<?php

class Person {

    function __construct($id, $displayName, $members=null) {
        $this->id = $id;
        $this->displayName = $displayName;
        $this->members = $members;
        $this->is_team = !is_null($members);
    }

}

?>