<?php
namespace App\HTML;

class Form {

    private $data;
    private $errors;

    public function __construct($data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    public function input(string $key, string $label, ?string $placeholder = null, ?string $class = null): string
    {
        $value = $this->getValue($key);
        $type = $key === 'password' ? 'password' : 'text';
        return <<<HTML
        <div class="input-group mb-3 {$class}">
            <label class="input-group-text" for="field{$key}">{$label}</label>
            <input type="{$type}" id="field{$key}" name="{$key}" class="{$this->getInputClass($key)}" value="{$value}" placeholder="{$placeholder}">
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    public function file(string $key, string $label, ?string $class = null): string
    {
        return <<<HTML
        <div class="input-group mb-3 {$class}">
            <div class="custom-file">
                <label class="custom-file-label" for="field{$key}">{$label}</label>
                <input type="file" id="field{$key}" name="{$key}" class="custom-file-input {$this->getInputClass($key)}">
            </div>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }


    public function textarea(string $key, string $label, ?string $placeholder = null, ?string $class = null): string
    {
        $value = $this->getValue($key);
        return <<<HTML
        <div class="input-group mb-3 {$class}">
            <label class="input-group-text" for="field{$key}">{$label}</label>
            <textarea class="{$this->getInputClass($key)} text-justify" id="{$key}" name="{$key}" cols="30" rows="10" placeholder="{$placeholder}" required>{$value}</textarea>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    public function checkbox(string $key, string $label, ?string $class = null):string
    {
        $value = $this->getValue($key);
        $value === 1 ? $attributes = 'checked' : $attributes = null;

        return <<<HTML
        <div class="checkbox mb-3 {$class}">
            <input class="form-check-input" type="checkbox" id="field{$key}" name="{$key}" value="{$value}" $attributes>
            <label class="form-check-label" for="field{$key}"> {$label} </label>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    public function radio(string $key, int $index, string $label, ?string $class = null):string
    {
        $value = $this->getValue($key);
        $value === $index ? $attributes = 'checked' : $attributes = null;
        return <<<HTML
        <div class="{$class}">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{$key}" id="{$key}{$label}" value="{$index}" $attributes>
                <label class="form-check-label" for="{$key}{$label}">
                    {$label}
                </label>
            </div>
        </div>
HTML;
    }

    public function select(string $key, string $label, array $options = [], ?bool $single = false, ?string $class = null): string
    {
        $value = $this->getValue($key);
        $optionsHTML = [];
        foreach($options as $k => $v) {
            if(is_array($value)) {
                $selected = in_array($k, $value) ? "selected" : "";
            }
            $selected = $k === $value ? 'selected' : '';
            $optionsHTML[] = "<option value=\"{$k}\" {$selected}>{$v}</option>";
        }
        $optionsHTML = implode('', $optionsHTML);
        if($single === true) {
            return <<<HTML
            <div class="input-group mb-3 {$class}">
                <label class="input-group-text" for="field{$key}">{$label}</label>
                <select class="{$this->getInputClass($key)} text-justify" id="{$key}" name="{$key}" required>
                    {$optionsHTML}
                </select>
                {$this->getErrorFeedback($key)}
            </div>
HTML;
        }
        return <<<HTML
        <div class="input-group mb-3 {$class}">
            <label class="input-group-text" for="field{$key}">{$label}</label>
            <select class="{$this->getInputClass($key)} text-justify" id="{$key}" name="{$key}[]" required multiple>
                {$optionsHTML}
            </select>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    /**
     * Récupère la valeur de la method get
     * 
     * @param string $key représente la valeur du get
     */
    private function getValue(string $key)
    {
        if(is_array($this->data)) {
            return $this->data[$key] ?? null;
        }
        $method = 'get' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
        $value = $this->data ? $this->data->$method() : '';
        if($value instanceof \DateTimeInterface) {
            return $value->format('Y-m-d H:i:s');
        }
        return $value;
    }

    private function getInputClass(string $key): string
    {
        $inputClass = "form-control";
        if(isset($this->errors[$key])) {
            $inputClass .= " is-invalid";
        }
        return $inputClass;
    }

    private function getErrorFeedback (string $key): string
    {
        if (isset($this->errors[$key])) {
            if (is_array($this->errors[$key])) {
                $error = implode('<br>', $this->errors[$key]);
            } else {
                $error = $this->errors[$key];
            }
            return '<div class="invalid-feedback">' . $error . '</div>';
        }
        return '';
    }
}