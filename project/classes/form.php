<?php
class Form {
    private $fields = [];
    private $action;
    private $submit;

    public function __construct($action, $submit = "Submit") {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label) {
        $this->fields[] = ["name" => $name, "label" => $label];
    }

    public function display() {
        echo "<form action='{$this->action}' method='POST'>";
        echo "<table>";

        foreach ($this->fields as $field) {
            echo "<tr>
                    <td align='right'>{$field['label']}</td>
                    <td><input type='text' name='{$field['name']}' required></td>
                  </tr>";
        }

        echo "<tr><td colspan='2'>
            <input type='submit' value='{$this->submit}'>
        </td></tr>";

        echo "</table>";
        echo "</form>";
    }
}
?>
