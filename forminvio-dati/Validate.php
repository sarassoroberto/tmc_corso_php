<?php
class Validator
{
    private $configuration;


    /**
     * Controlla se un campo è nullo
     *
     * @param any|string $value valore da costrollare
     * @return void
     */
    public function required($value)
    {
        $clean_value = $this->cleanVariable($value);
        return ($clean_value != '' && isset($clean_value) );
    }

    public  function email($email, $options = [])
    {
        $clean_email = $this->cleanVariable($email);

        if (isset($options['required']) && $this->required($clean_email)) {
            return false;
        }

        return boolval(filter_var($clean_email, FILTER_VALIDATE_EMAIL));
    }

    public function name($value, $options = [])
    {
        $value = $this->cleanVariable($value);

        if (!$this->getOptionsRequired($options) && $this->is_null($value)) {
            return true;
        } else { };


        return boolval(preg_match("/^([a-zA-Z' ]+)$/", $value));
    }

    public function getOptionsRequired($options = [])
    {
        return isset($options['required']) && $options['required'] === true;
    }


    private function checkOptionRequired($options)
    { }

    public function integer($int, $options = [])
    {
        $int = $this->cleanVariable($int);
        if (isset($options['required']) && $this->required($int)) {
            return false;
        }
    }

    private  function cleanVariable($value)
    {
        return htmlspecialchars(trim($value));
    }

    public  function  is_null($value)
    {
        $clean = $this->cleanVariable($value);
        if ($clean == '' || empty($value)) {
            return true;
        }
    }

    private  function checkOptionsIsRequired($value, $options)
    {
        if ($options['required'] === false && $this->is_empty($value)) {
            return true;
        } else if ($options['required'] === true && $this->is_empty($value)) {
            return false;
        } else {
            return true;
        }
    }


    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }

    public function validate($data)
    {
        $errors = array();
        foreach ($this->configuration as $field => $fieldconfig) {

            echo "validazione di $field \n";

            print_r($fieldconfig);
            print_r($this->{$fieldconfig['rule']}($data[$field]));
        }
    }
}
