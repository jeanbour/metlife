<?php 

namespace App\Metlife\Components;

use Collective\Html\FormBuilder as Form;
use Illuminate\View\Factory as View;
use Illuminate\Session\Store as Session;

/**
* 
*/
class FieldBuilder
{
	protected $form;
	protected $view;
	protected $session;

	protected $defaultClass = [
		'default' 	=> 'form-control',
		'checkbox' 	=> 'checkbox-inline',
		'radio' 	=> '',
		'file'		=> ''
	];

	public function __construct(Form $form, View $view, Session $session)
	{
		$this->form = $form;
		$this->view = $view;
		$this->session = $session;
	}

	public function getDefaultClass($type)
	{
		if (isset($this->defaultClass[$type]))
		{
			return $this->defaultClass[$type];
		}

		return $this->defaultClass['default'];
	}

	public function buildCssClasses($type, &$attributes)
	{
		$defaultClasses = $this->getDefaultClass($type);
		if (isset ($attributes['class']))
		{
			$attributes['class'].= ' '. $defaultClasses;			
		}
		else
		{
			$attributes['class'] = $defaultClasses;	
		}
	}

	public function buildLabel($name)
	{
		if (\Lang::has('validation.attributes.' . $name))
		{
			$label = \Lang::get('validation.attributes.' . $name);
		}
		else
		{
			$label = str_replace('_', ' ', $name);
		}

		return ucfirst($label);
			
	}

	public function buildControl($type, $name, $value = null, $attributes = array(), $options = array())
	{
		switch($type)
		{
			case 'select':
				return $this->form->select($name, $options, $value, $attributes);
			case 'password':
				return $this->form->password($name, $attributes);
			case 'checkbox':
				return $this->form->checkbox($name, $value, $attributes);
			case 'radio':
				return $this->form->radio($name, $name, $value, $attributes);
			case 'file':
				return $this->form->file($name);
			case 'custom':
				return $this->form->file($name);
			default:
				return $this->form->input($type, $name, $value, $attributes);
		}
	}

	public function buildError($name)
	{
		$error = null;
		if ($this->session->has('errors'))
		{
			$errors = $this->session->get('errors');

			if ($errors->has($name))
			{
				$error = $errors->first($name);
			}
		}
		return $error;
	}

	public function buildTemplate($type)
	{
		if(\File::exists('app/views/captura/' . $type . '.blade.php'))
		{
			return 'captura/' .$type;
		}

		return 'fields/default';
	}

	public function input($type, $name, $value = null, $attributes = array(), $options = array())
	{
		$this->buildCssClasses($type, $attributes);
		$label = $this->buildLabel($name);
		$control = $this->buildControl($type, $name, $value, $attributes, $options);
		$error = $this->buildError($name);
		$template = $this->buildTemplate($type);

		return $this->view->make($template, compact ('name', 'label', 'control', 'error'));
	}

	public function password($name, $attributes = array())
	{
		return $this->input('password', $name, null, $attributes);
	}

	public function text($name, $attributes = array())
	{
		return $this->input('text', $name, null, $attributes);
	}

	public function email($name, $attributes = array())
	{
		return $this->input('text', $name, null, $attributes);
	}

	public function select($name, $options = array(), $attributes = array())
	{
		return $this->input('select', $name, null, $attributes, $options);
	}

	public function checkbox($name, $value, $attributes = array())
	{
		return $this->input('checkbox', $value, $attributes);
	}

	public function radio($name, $value, $attributes = array())
	{
		return $this->input('radio', null, $value, $attributes);
	}

	public function file($name)
	{
		return $this->input('file', $name, null);
	}

	public function custom($value, $attributes = array())
	{
		return $this->input('text', null, null, $attributes);
	}

	public function __call($method, $params)
	{
		array_unshift($params, $method);
		return call_user_func_array([$this, 'input'], $params);
	}
}