<?php
class FormGen
{
	protected $type, $name, $class, $id, $value, $placeholder;
    static protected $attributes = ['type', 'name', 'class', 'id', 'value', 'placeholder', 'size', 'maxlength', 'accept', 'multiple', 'min', 'max', 'pattern'];
    static protected $result = [];

    protected function result()
    {
        if($_POST['label'] == '')
            echo '&#160;&#160;&#160;&#160;'.htmlspecialchars('<input '.implode(self::$result).' '.$_POST['checked'].$_POST['required'].'>').'<br>';

        else
            echo '&#160;&#160;&#160;&#160;'.htmlspecialchars('<label for="'.$_POST['id'].'">'.$_POST['label'].'</label><input '.implode(self::$result).' '.$_POST['checked'].$_POST['required'].'>').'<br>';
    }

	protected function genAttributes ($val, $attributes)
    {	
    	
    	if($val != '')
    	{
            array_push(self::$result, self::$attributes[0].'="'.$val.'" ');
            unset(self::$attributes[0]);
            self::$attributes = array_values(self::$attributes);

            if(count(self::$attributes) == 0)
                $this->result();
    	}

        elseif ($val == '')
        {
            unset(self::$attributes[0]);
            self::$attributes = array_values(self::$attributes);

            if(count(self::$attributes) == 0)
                $this->result();
        }
    }

    public function getValues ($inputValues)
    {
    	foreach ($inputValues as $val)
    	{
    		$this->genAttributes($val, $attributes);
    	}
    }

    public function __construct ($type, $name, $class, $id, $value, $placeholder, $size, $maxlength, $accept, $multiple, $min, $max, $pattern)
    {
    	$this->type = $type;
    	$this->name = $name;
    	$this->class = $class;
    	$this->id = $id;
    	$this->value = $value;
    	$this->placeholder = $placeholder;
        $this->size = $size;
        $this->maxlength = $maxlength;
        $this->accept = $accept;
        $this->multiple = $multiple;
        $this->min = $min;
        $this->max = $max;
        $this->pattern = $pattern;

    }
}

$inputValues = new FormGen($_POST['type'], $_POST['name'], $_POST['class'], $_POST['id'], $_POST['value'], $_POST['placeholder'], $_POST['size'], $_POST['maxlength'], $_POST['accept'], $_POST['multiple'], $_POST['min'], $_POST['max'], $_POST['pattern']);
$inputValues->getValues($inputValues);

