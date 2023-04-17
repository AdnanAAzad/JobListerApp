<?php class Template
{
    // Template path
    protected $template;
    // Variables passed in
    protected $vars = array();

    // Constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    public function __get($key)
    {
        return $this->vars[$key];
    }

    public function __set($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function __toString()
    {
        extract($this->vars);
        chdir(dirname($this->template));
        // buffer
        ob_start();

        // include template path
        include basename($this->template);

        // clean the buffer
        return ob_get_clean();
    }
}
