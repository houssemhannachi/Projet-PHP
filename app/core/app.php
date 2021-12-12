<?php

class App
{

	protected $controller = "home";
	protected $method = "index";
	protected $params;

	public function __construct()
	{

		$url = $this->parseURL();

		if (file_exists("../app/controllers/" . strtolower($url[0]) . ".php")) {

			$this->controller = strtolower($url[0]);
			unset($url[0]);
		}

		require "../app/controllers/" . $this->controller . ".php";
		$this->controller = new $this->controller;

		if (isset($url[1])) {
			$url[1] = strtolower($url[1]);
			if (method_exists($this->controller, $url[1]) && is_callable([$this->controller, $url[1]])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}


		$this->params = (count($url) >= 0) ? $url : ["home"];

		call_user_func_array([$this->controller, $this->method], $this->params); #Appelle la fonction de rappel method fournie avec les paramètres params, rassemblés dans un tableau.

	}

	private function parseURL()
	{
		if (!isset($_GET['url'])) {
			$url = 'home';
		} else {
			$url = $_GET['url'];
		}
		return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
		# explode : Scinde une chaîne de caractères en segments(array) seperateur /
		#trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
		#filter_var — Filtre une variable avec un filtre spécifique
	}
}
